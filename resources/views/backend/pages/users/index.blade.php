@extends('backend.template.template')
@section('title', 'Users')
@section('main')
@push('css')
@endpush
<h4 class="py-3 mb-4 fs-5 ">
    <span class="text-muted fw-light">Users /</span>
    <span class="heading-color">All Users </span>
</h4>

<!-- Item List Table -->
<div class="card">
    <div class="card-header">
        <a href="{{ route('users.create') }}" style="color: white;">
            <button class="btn btn btn-primary waves-effect waves-light"  type="button">
                <span>
                    <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                    <span class="d-none d-sm-inline-block">Create User</span>
                </span>
            </button>
        </a>
    </div>
   
    <div class="card-datatable text-nowrap">
        <div id="DataTables_Table_0_wrapper usersTable" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <div class="table-responsive">
                <table class="datatables-ajax table dataTable no-footer" id="usersTable" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
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
    var table = $('#usersTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            url: '{{ route("users.index") }}',  // Your backend route to fetch user data
            data: function(d) {
                d.searchValue = $('#searchInput').val(); // Get the search term
                d.pageLength = $('select[name="DataTables_Table_0_length"]').val(); // Get page length
            }
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'user_name', name: 'user_name' },
            { data: 'phone', name: 'phone' },
            { data: 'email', name: 'email' },
            { data: 'role_name', name: 'role_name' }, // Adjusted to role_name
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        order: [[0, 'desc']], // Default order
        pageLength: 10, // Default records per page
        lengthChange: true, // Hide the entries per page dropdown if needed
    });

    // Search filter event handler
    $('#searchInput').on('keyup', function() {
        table.draw();  // Trigger table redraw on search input change
    });

    // Length change event handler
    $('select[name="DataTables_Table_0_length"]').on('change', function() {
        table.page.len($(this).val()).draw();  // Trigger redraw on page length change
    });
});



</script>

@endpush
