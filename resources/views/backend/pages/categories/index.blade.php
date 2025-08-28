@extends('backend.template.template')
@section('title', 'Categories')
@section('main')
    @push('css')
    @endpush
    <h4 class="py-3 mb-4 fs-5 ">
        <span class="text-muted fw-light">Categories /</span>
        <span class="heading-color">All Categories </span>
    </h4>

    <!-- Item List Table -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('categories.create') }}" style="color: white;">
                <button class="btn btn btn-primary waves-effect waves-light" type="button">
                    <span>
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Create Category</span>
                    </span>
                </button>
            </a>
        </div>

        <div class="card-datatable text-nowrap">
            <div id="DataTables_Table_0_wrapper categoriesTable" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="table-responsive">
                    <table class="datatables-ajax table dataTable no-footer" id="categoriesTable"
                        aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be dynamically loaded via AJAX -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination and Info -->

            </div>
        </div>
    </div>

@endsection
@push('script')
    <script>
        $(document).ready(function() {
            // Initialize the DataTable with AJAX support
            var table = $('#categoriesTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: '{{ route('categories.index') }}', // Your backend route to fetch user data
                    data: function(d) {
                        d.searchValue = $('#searchInput').val(); // Get the search term
                        d.pageLength = $('select[name="DataTables_Table_0_length"]')
                            .val(); // Get page length
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
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
                ], // Default order
                pageLength: 10, // Default records per page
                lengthChange: true, // Hide the entries per page dropdown if needed
            });

            // Search filter event handler
            $('#searchInput').on('keyup', function() {
                table.draw(); // Trigger table redraw on search input change
            });

            // Length change event handler
            $('select[name="DataTables_Table_0_length"]').on('change', function() {
                table.page.len($(this).val()).draw(); // Trigger redraw on page length change
            });
        });

        $(document).on('click', '.delete-btn', function() {
            var roleId = $(this).data('id'); // Get the role ID

            // SweetAlert confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    // If 'Yes' is clicked, proceed with deletion
                    $.ajax({
                        type: 'DELETE',
                        url: '{{ route('categories.destroy', ':id') }}'.replace(':id', roleId),
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
                        },
                        success: function(response) {
                            if (response.success) {
                                // On success, show success alert and reload DataTable
                                Swal.fire(
                                    'Deleted!',
                                    'The role has been deleted.',
                                    'success'
                                );

                                $('#categoriesTable').DataTable().ajax
                                    .reload(); // Reload DataTable
                            } else {
                                // Handle failure
                                Swal.fire(
                                    'Error!',
                                    response.message,
                                    'error'
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle error if deletion fails
                            Swal.fire(
                                'Error!',
                                'There was an error deleting the role. Please try again.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    </script>
@endpush
