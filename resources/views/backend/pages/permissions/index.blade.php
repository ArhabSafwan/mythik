@extends('backend.template.template')
@section('title', 'Permission')
@section('main')
@push('css')
    <style type="">
        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: unset !important;
        }
        body.swal2-shown {
            overflow: hidden;
        }
    
    </style>
@endpush
<h4 class="py-3 mb-4 fs-5 ">
    <span class="text-muted fw-light">Permission /</span> 
    <span class="heading-color">All Permission </span>
</h4>

<!-- Item List Table -->
<div class="card">
    <div class="card-header">
        
        <a href="{{ route('permissions.create') }}" style="color: white;">
            <button class="btn btn btn-primary waves-effect waves-light"  type="button">
                <span>
                    <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                    <span class="d-none d-sm-inline-block">Create Permission</span>
                </span>
            </button>
        </a>

        <div class="btn-group">
            <button  class="btn filter-btn btn-danger  waves-effect waves-light"><span><i class="ti ti-filter me-0 me-sm-1 ti-xs"></i>&nbsp;  Filter</span></button>
        </div>
    </div>
    <div class="card-body">
        <form class="dt_adv_search filter" method="get" action="{{ route('permissions.index') }}" id="searchForm"  style="display: none">
          <div class="row">
            <div class="col-12">
              <div class="row g-3">
                <div class="col-12 col-sm-6 col-lg-4">
                    <label class="form-label" for="name">Module Name and Permission Name</label>
                    <input name="name" type="text" class="form-control"id="name" 
                    placeholder="Module Name and Permission Name" value="{{old('name')}}"  /> 
                  </div>
                
                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-end" style="justify-content: start;">
                    <div class="input-group-append me-2" id="button-addon2">
                        <button id="search" class="btn  btn-md btn-primary waves-effect waves-light index-search" type="button"><span><i class="ti ti-filter me-0 me-sm-1 ti-xs"></i>&nbsp;Filter</span></button></button>
                    </div>
                    <div class="input-group-append" id="button-addon2">
                        <a href="{{ route('permissions.index') }}" class="btn  btn-md btn-danger waves-effect waves-light"><span><i class="ti ti-square-x me-0 me-sm-1 ti-xs"></i>&nbsp;Clear</span></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </form>
    </div>
    <div id="filterTable">
        <div class="card-datatable table-responsive">
            <table class="datatables-products table item_table table-hover">
                <thead class="border-top">
                    <tr>
                        <th>#</th>
                        <th>Created At</th>
                        <th>Module Name</th>
                        <th>Permission Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($modules as $module)
                    <tr id="deleteitem_remove_{{ $module->id }}">
                        <td> {{ $loop->iteration }}</td>
                        <td>{{$module->CreatedAtFormatted}}</td>
                        <td>{{$module->name}}</td>
                        <td>
                            <div class="demo-inline-spacing mt-3">
                                <ul class="list-group">
                                    @foreach ( $module?->permissions as $key => $per)
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between py-3">
                                        {{ $per->name }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="demo-inline-spacing mt-3">
                                <ul class="list-group">
                                    @foreach ( $module?->permissions as $key => $per)
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between" style="padding-top: 12px; padding-bottom: 12px;">
                                        <div class="d-flex justify-content-left align-items-left">
                                            <a href="{{route('permissions.edit',$per->id)}}">
                                                <button class="btn btn-sm btn-icon edit-i"><i class="ti ti-edit"></i></button>
                                            </a>
                                           <button  id="confirm-text_{{$per->id}}"  class="btn btn-sm btn-icon delete-record delete-i">
                                                    <i onClick="deleteConfirmation({{$per->id}},'{{ route("permissions.destroy", $per->id) }}')" class="ti ti-trash"></i>
                                             </button>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mb-2">
            {{ $modules->links('backend.pagination.custome') }}
        </div>
    </div>
</div>

@endsection
@push('script')
<script>
    $('#search').on('click', function() {
        var formData = $('#searchForm').serialize();
        $.ajax({
            type: 'GET',
            url: '{{ route('permissions.index') }}',
            data: formData,
            success: function(response) {
                $('#filterTable').html(response);
            },
            error: function(error) {
               
            }
        });
    });

    $('#name').on('keypress', function(e) {
        if (e.which === 13) {
            e.preventDefault(); 
            $('#search').click(); 
        }
    });
</script>

@endpush