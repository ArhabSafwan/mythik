@extends('backend.template.template')
@section('title', 'Exhibitors')
@section('main')
    @push('css')
    @endpush

    <h4 class="py-3 mb-4 fs-5">
        <span class="text-muted fw-light">Exhibitor Application /</span>
        <span class="heading-color">Exhibitor Application</span>
    </h4>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
            <h5 class="card-title mb-0">Exhibitor Application</h5>

            <div class="d-flex align-items-center gap-3 flex-wrap">
                <!-- Status Filter -->
                <div class="d-flex align-items-center">
                    <label for="bracMember" class="me-2 mb-0">Brac Member:</label>
                    <select id="bracMember" class="form-select form-select-md">
                        <option value="">Select Option</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="d-flex align-items-center">
                    <label for="statusFilter" class="me-2 mb-0">Status:</label>
                    <select id="statusFilter" class="form-select form-select-md">
                        <option value="">All</option>
                        <option value="0">Pending</option>
                        <option value="1">Approved</option>
                        <option value="2">Declined</option>
                    </select>
                </div>

                <!-- Payment Status Filter -->
                <div class="d-flex align-items-center">
                    <label for="paymentStatusFilter" class="me-2 mb-0">Payment Status:</label>
                    <select id="paymentStatusFilter" class="form-select form-select-md">
                        <option value="">All</option>
                        <option value="0">Pending</option>
                        <option value="1">Completed</option>
                        <option value="2">Failed</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-datatable text-nowrap p-4">
            <div class="table-responsive">
                <table class="table datatable-field-visits" id="exhibitionTable">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll" /></th>
                            <th>#</th>
                            <th>Organization Name</th>
                            <th>Exhibition Title</th>
                            <th>Category Type</th>
                            <th>Price</th>
                            <th>Submission time</th>
                            <th>Status</th>
                            <th>Payment Status</th>
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
                                    let status = $('#statusFilter').val();
                                    let paymentStatus = $('#paymentStatusFilter').val();
                                    let bracMember = $('#bracMember').val();

                                    let url = "{{ route('exhibitions.export') }}" +
                                        "?search=" + encodeURIComponent(searchValue) +
                                        "&status=" + encodeURIComponent(status) +
                                        "&brac_member=" + encodeURIComponent(bracMember) +
                                        "&payment_status=" + encodeURIComponent(
                                            paymentStatus);
                                    window.location.href = url;
                                }
                            });
                        }
                    },
                    {
                        text: 'Bulk Approve',
                        className: 'btn btn-primary',
                        action: function() {
                            let selected = $('.rowCheckbox:checked').map(function() {
                                return $(this).val();
                            }).get();

                            if (selected.length === 0) {
                                Swal.fire('No rows selected',
                                    'Please select at least one participant.', 'warning');
                                return;
                            }

                            Swal.fire({
                                title: 'Approve Selected?',
                                text: "This will approve the selected participants.",
                                icon: 'question',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, approve'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $.ajax({
                                        url: "{{ route('exhibitions.bulkStatusUpdate') }}",
                                        method: "POST",
                                        data: {
                                            _token: "{{ csrf_token() }}",
                                            ids: selected,
                                            status: 1
                                        },
                                        success: function(response) {
                                            $('#exhibitionTable').DataTable()
                                                .ajax.reload();
                                            Swal.fire('Approved!', response
                                                .message, 'success');
                                        },
                                        error: function(xhr, status, error) {
                                            if (xhr.status === 422) {
                                                let errors = xhr.responseJSON
                                                    .errors;
                                                console.log('Errors:', errors);

                                                let errorMessages = Object
                                                    .values(errors)
                                                    .map(msgArray => msgArray[
                                                        0])
                                                    .join('<br>');


                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Validation Error',
                                                    html: errorMessages, // Use html to allow <br> tags
                                                    confirmButtonText: 'OK'
                                                });
                                            } else {
                                                Swal.fire('Error!',
                                                    'Something went wrong.',
                                                    'error');
                                            }
                                        }
                                    });
                                }
                            });
                        }
                    }
                ],
                ajax: {
                    url: '{{ route('exhibitions.index') }}',
                    data: function(d) {
                        d.status = $('#statusFilter').val();
                        d.payment_status = $('#paymentStatusFilter').val();
                        d.brac_member = $('#bracMember').val();
                    }
                },
                columns: [{
                        data: 'checkbox',
                        name: 'checkbox',
                        orderable: false,
                        searchable: false
                    },
                    {
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
                        data: 'exhibition_title',
                        name: 'exhibition_title'
                    },
                    {
                        data: 'category_type',
                        name: 'category_type'
                    },
                    {
                        data: 'amount',
                        name: 'amount'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',

                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'payment_status',
                        name: 'payment_status'
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
            $('#statusFilter, #paymentStatusFilter,#bracMember').on('change', function() {
                table.ajax.reload();
            });
        });
        $('#selectAll').on('click', function() {
            $('.rowCheckbox').prop('checked', this.checked);
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
                                $('#exhibitionTable').DataTable().ajax.reload(null,
                                    false); // <-- This reloads the table
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
                        url: '{{ route('exhibitions_status') }}',
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
