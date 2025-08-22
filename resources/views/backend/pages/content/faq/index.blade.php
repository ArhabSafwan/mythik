@extends('backend.template.template')
@section('title', 'FAQs')

@push('css')
    <!-- Add custom styles if needed -->
@endpush

@section('main')
    <h4 class="py-3 mb-4 fs-5">
        <span class="text-muted fw-light">FAQ /</span>
        <span class="heading-color">All FAQs</span>
    </h4>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('faq.create') }}">
                <button class="btn btn-primary" type="button">
                    <i class="ti ti-plus me-sm-1 ti-xs"></i>
                    <span class="d-none d-sm-inline-block">Create FAQ</span>
                </button>
            </a>
        </div>

        <div class="card-datatable text-nowrap">
            <div class="table-responsive">
                <table class="table dataTable table-hover" id="faqTable" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Data loaded via AJAX -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $('#faqTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: '{{ route('faq.index') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'title', name: 'title' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                order: [[1, 'asc']],pageLength: 100,
                lengthChange: true,
            });
        });
    </script>
@endpush
