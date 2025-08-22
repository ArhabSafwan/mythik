@extends('backend.template.template')
@section('title', 'NewsLetter')
@section('main')
    @push('css')
    @endpush

    <h4 class="py-3 mb-4 fs-5">
        <span class="text-muted fw-light">Newsletter /</span>
        <span class="heading-color">All Subscriber</span>
    </h4>

    <div class="card">
        <div class="card-datatable text-nowrap p-4">
            <div class="table-responsive">
                <table class="table datatable-field-visits" id="newletter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Submission time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- AJAX will load data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            var table = $('#newletter').DataTable({
                processing: true,
                serverSide: true,
                dom: 'Blfrtip', // Enables buttons at top
                scrollX: true, // Enables horizontal scrolling
                buttons: [{
                    text: 'Export CSV',
                    className: 'btn btn-success',
                    action: function() {
                        Swal.fire({
                            title: 'Export CSV?',
                            text: "Do you want to export the  data as CSV?",
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#28a745',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, export it!',
                            cancelButtonText: 'Cancel'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                let searchValue = table.search();
                                let url =
                                    "{{ route('newsletter.export') }}" +
                                    "?search=" + encodeURIComponent(searchValue);
                                window.location.href = url;
                            }
                        });
                    }
                }],
                ajax: '{{ route('newsletter.index') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',

                    }

                ],
                order: [
                    [0, 'desc']
                ],
                pageLength: 10,
            });
        });
    </script>
@endpush
