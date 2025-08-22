@extends('backend.template.template')
@section('title', 'Field Visit Participants')
@section('main')
    @push('css')
    @endpush
    <h4 class="py-3 mb-4 fs-5 ">
        <span class="text-muted fw-light">Field Visit Participants /</span>
        <span class="heading-color">All Field Visit Invited Participants</span>
    </h4>

    <div class="card">

        <div class="card-datatable text-nowrap p-4">
            <div class="table-responsive">
                <table class="table datatables-ajax" id="filedVisitsTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Price</th>
                            <th>Submission time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        $(document).ready(function() {
            var table = $('#filedVisitsTable').DataTable({
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
                                let url = "{{ route('field-payments.export') }}" +
                                    "?search=" + encodeURIComponent(searchValue);
                                window.location.href = url;
                            }
                        });
                    }
                }],
                ajax: '{{ route('field-payments.index') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'full_name',
                        name: 'full_name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    }
                ]
            });
        });
    </script>
@endpush
