@extends('backend.template.template')
@section('title', 'Activity')
@section('main')
<h4 class="py-3 mb-4 fs-5 ">
    <span class="text-muted fw-light">Activity /</span>
    <span class="heading-color">All Activity </span>
</h4>

<!-- Item List Table -->
<div class="card">
    <div class="card-datatable text-nowrap">
        <div id="DataTables_Table_0_wrapper usersTable" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <div class="table-responsive">
                <table class="datatables-ajax table dataTable no-footer" id="usersTable" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr>
                            <th>#</th>
                             <th>User</th>
                            <th>Status</th>
                            <th>Group</th>
                            <th>Type</th>
                            <th>Message</th>
                            <th>Date Time</th>
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
            url: '{{ route("activityLog.index") }}',  // Your backend route to fetch user data
            data: function(d) {
                d.searchValue = $('#searchInput').val(); // Get the search term
                d.pageLength = $('select[name="DataTables_Table_0_length"]').val(); // Get page length
            }
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'user_name', name: 'user_name' }, // Comes from creator relation
            { data: 'status', name: 'status' },
            { data: 'group', name: 'group' },
            { data: 'activity_type', name: 'activity_type' }, // Match your DB field
            { data: 'message', name: 'message' },
            { data: 'formated_date', name: 'formated_date' },
        ],
        order: [[0, 'desc']], // Default order
        pageLength: 25, // Default records per page
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
