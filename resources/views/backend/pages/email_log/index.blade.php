@extends('backend.template.template')
@section('title', 'Email Log List')
@section('main')
    @push('css')
    @endpush
    <h4 class="py-3 mb-4 fs-5 ">
        <span class="text-muted fw-light">Field Visit Participants /</span>
        <span class="heading-color">All Field Visit Participants</span>
    </h4>


    <div class="card">
        <div class="card-datatable text-nowrap p-4">
            <div class="table-responsive">
                <table class="table datatable-field-visits" id="emailLogTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>To</th>
                            <th>Subject</th>
                            <th>Mail Type</th>
                            <th>Mailable Type</th>
                            <th>Start Time</th>
                            <th>End time</th>
                            <th>Status</th>
                            <th>Error</th>
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
            var table = $('#emailLogTable').DataTable({
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
                                let url = "{{ route('email-log.export') }}" +
                                    "?search=" + encodeURIComponent(searchValue);
                                window.location.href = url;
                            }
                        });
                    }
                }],
                ajax: '{{ route('email-log.index') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'to',
                        name: 'to'
                    },
                    {
                        data: 'subject',
                        name: 'subject'
                    },
                    {
                        data: 'mail_type',
                        name: 'mail_type'
                    },
                    {
                        data: 'mailable_type',
                        name: 'mailable_type'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',

                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'error_message',
                        name: 'error_message'
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
