@extends('backend.template.template')
@section('title', 'Agenda Details')

@section('main')
    @push('css')
    @endpush

    <h4 class="py-3 mb-4 fs-5">
        <span class="text-muted fw-light">Agenda Details /</span>
        <span class="heading-color">All Agenda Details</span>
    </h4>

    <!-- Agenda Table -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('agenda_details.create') }}" style="color: white;">
                <button class="btn btn-primary waves-effect waves-light" type="button">
                    <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                    <span class="d-none d-sm-inline-block">Create Agenda Details</span>
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
                                <th>Day</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
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
                    url: '{{ route('agenda_details.index') }}',
                    data: function(d) {
                        d.searchValue = $('#searchInput').val();
                        d.pageLength = $('select[name="DataTables_Table_0_length"]').val();
                    }
                },
                columns: [{
                        data: 'day',
                        name: 'agenda.day'
                    },
                    {
                        data: 'date',
                        name: 'agenda.date'
                    },
                    {
                        data: 'start_time',
                        name: 'start_time'
                    },
                    {
                        data: 'end_time',
                        name: 'end_time'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'created_at',
                        name: 'agenda_details.created_at',
                        visible: false
                    }
                ],
                order: [
                    [5, 'desc']
                ],
                pageLength: 100,
                lengthChange: true,
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
@endpush
