@extends('backend.template.template')
@section('title', 'Exhibitors')
@section('main')
    @push('css')
    @endpush

    <h4 class="py-3 mb-4 fs-5">
        <span class="text-muted fw-light">Exhibitor Application /</span>
        <span class="heading-color">All Invited Exhibitor</span>
    </h4>

    <div class="card">
        <div class="card-datatable text-nowrap p-4">
            <div class="table-responsive">
                <table class="table datatable-field-visits" id="exhibitionTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Organization Name</th>
                            <th>Participant 1 Name</th>
                            <th>Participant 1 Email</th>
                            <th>BRAC Email</th>
                            <th>BRAC Project Code</th>
                            <th>Category Type</th>
                            <th>Price</th>
                            <th>Submission time</th>
                            <th>Status</th>
                            <th>Invitation Sent</th>
                            <th>Action</th>
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
            var table = $('#exhibitionTable').DataTable({
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
                                    "{{ route('exhibitions-invitation-brac.export') }}" +
                                    "?search=" + encodeURIComponent(searchValue);
                                window.location.href = url;
                            }
                        });
                    }
                }],
                ajax: '{{ route('exhibitions-invitation-brac.index') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'organization_name',
                        name: 'organization_name'
                    },
                    {
                        data: 'p1_full_name',
                        name: 'p1_full_name'
                    },
                    {
                        data: 'p1_email',
                        name: 'p1_email'
                    },
                    {
                        data: 'brac_email',
                        name: 'brac_email'
                    },
                    {
                        data: 'brac_pin',
                        name: 'brac_pin'
                    },
                    {
                        data: 'category_type',
                        name: 'category_type'
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
                        data: 'invitaiton_sent',
                        name: 'invitaiton_sent',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    }

                ],
                order: [
                    [0, 'desc']
                ],
                pageLength: 10,
            });
        });

        $(document).on('click', '.change-status', function() {
            const id = $(this).data('id');
            const status = $(this).data('status');
            const text = status == 1 ? "Approved" : "Declined";

            Swal.fire({
                title: 'Are you sure?',
                text: `Are you sure you want to change the status of this application to ${text}?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Confirm and Send Email',
                cancelButtonText: 'Cancel',
                reverseButtons: true,
                buttonsStyling: false,
                customClass: {
                    confirmButton: 'btn btn-success me-2',
                    cancelButton: 'btn btn-secondary'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('exhibitions-status-brac') }}',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: id,
                            status: status
                        },
                        success: function(response) {
                            if (response.success) {
                                $('#exhibitionTable').DataTable().ajax.reload(null, false);
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Status Updated!',
                                    text: response.message,
                                    timer: 2000,
                                    showConfirmButton: false
                                });
                            } else {
                                toastr.error('In Construction.');
                            }

                        },

                        error: function() {
                            toastr.error('An error occurred while updating status.');
                        }
                    });
                }
            });
        });
    </script>
@endpush
