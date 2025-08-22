@extends('backend.template.template')
@section('title', 'Climate Stories')

@section('main')
    @push('css')
    @endpush

    <h4 class="py-3 mb-4 fs-5">
        <span class="text-muted fw-light">Climate Stories /</span>
        <span class="heading-color">All Climate Stories</span>
    </h4>

    <!-- Climate Stories Table -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('climate_stories.create') }}" style="color: white;">
                <button class="btn btn-primary waves-effect waves-light" type="button">
                    <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                    <span class="d-none d-sm-inline-block">Create Climate Story</span>
                </button>
            </a>
        </div>

        <div class="card-datatable text-nowrap">
            <div id="DataTables_Table_0_wrapper climateTable" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="table-responsive">
                    <table class="datatables-ajax table dataTable no-footer table-hover" id="climateTable"
                        aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <th>DRAG</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loaded via AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            var table = $('#climateTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: '{{ route('climate_stories.index') }}',
                    data: function(d) {
                        d.searchValue = $('#searchInput').val();
                        d.pageLength = $('select[name="DataTables_Table_0_length"]').val();
                    }
                },
                columns: [{
                        data: null,
                        name: 'drag',
                        orderable: false,
                        searchable: false,
                        className: 'drag-handle',
                        render: function() {
                            return '<i class="ti ti-grip-vertical" style="cursor: grab;"></i>';
                        }
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'author',
                        name: 'author'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        render: function(data, type, full, meta) {
                            return `<img src="${data}" alt="Image" width="60" height="40">`;
                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                order: [
                    [0, 'desc']
                ],
                pageLength: 100,
                lengthChange: true,
                rowCallback: function(row, data, index) {
                    $(row).attr('data-id', data.id);
                    $(row).addClass('sortable-row');
                }
            });

            $('#searchInput').on('keyup', function() {
                table.draw();
            });

            $('select[name="DataTables_Table_0_length"]').on('change', function() {
                table.page.len($(this).val()).draw();
            });
        });

        function deleteConfirmation(id, url) {
            Swal.fire({
                title: 'Delete Confirmation',
                text: "This will permanently remove the item. Do you wish to proceed?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                reverseButtons: true,
                buttonsStyling: false,
                customClass: {
                    confirmButton: 'btn btn-danger me-2',
                    cancelButton: 'btn btn-secondary'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                $('#climateTable').DataTable().ajax.reload(null,
                                    false);
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Deleted!',
                                    text: response.message,
                                    timer: 2000,
                                    showConfirmButton: false
                                });
                            } else {
                                toastr.error(response.message || 'In Construction.');
                            }
                        },
                        error: function() {
                            toastr.error('An error occurred while deleting.');
                        }
                    });
                }
            });
        }
    </script>
    <script>
        let el = document.querySelector("tbody");
        let sortable = Sortable.create(el, {
            animation: 150,
            onEnd: function(evt) {
                let order = [];
                $('.sortable-row').each(function(index, element) {
                    order.push({
                        id: $(element).data('id'),
                        position: index + 1
                    });
                });

                $.ajax({
                    url: '{{ route('climate_stories.sort') }}',
                    method: 'POST',
                    data: {
                        order: order,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response.message);
                    }
                });
            }
        });
    </script>
@endpush
