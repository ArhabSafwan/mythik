@extends('backend.template.template') @section('title', 'Role Permission') @push('css')
<style>
    
    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
    }
    .card {
        margin-bottom: 20px;
    }
</style>
@endpush @section('main')
<div class="row mb-2">
    <div class="col">
        <h4 class="py-3 mb-4 fs-5 d-inline">
            <span class="text-muted fw-light">Roles /</span> 
            <span class="heading-color">Roles Permission</span>
        </h4>
    </div>
    <div class="col text-end">
        <a href="{{ route('roles.index') }}" style="color: white;" type="submit" 
        class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Roles</a>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form class="form form-vertical" method="post" action="{{ route('roles.permissionUpdate',$role->id)}}">
            @csrf @method('PUT')
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mb-2 h5">
                            <div class="form-check form-check-primary">
                                <input type="checkbox" class="form-check-input" id="select-all" />
                                <label for="select-all" class="form-check-label">Select All</label>
                            </div>
                        </div>
                        <div class="row">
                            @forelse ($modules->chunk(3) as $key => $chunks) @foreach ($chunks as $key => $module)
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <div class="form-check form-check-primary">
                                                <input type="checkbox" class="form-check-input module-checkbox" id="module-{{ $module->id }}" />
                                                <label for="module-{{ $module->id }}" class="form-check-label">Module: {{ $module->name }}</label>
                                            </div>
                                        </h6>

                                        @foreach ($module->permissions as $key => $permission)
                                        <div class="form-check form-check-primary h6">
                                            <input class="form-check-input permission-checkbox" 
                                            type="checkbox"  name="permissions[]"  
                                            value="{{ $permission->id }}" 
                                            id="permission-{{ $permission->id }}"
                                            @isset($role)
                                                @foreach($role->permissions as $rPermission) {{ $rPermission->id == $permission->id ? 'checked' : '' }} @endforeach @endisset
                                            >
                                            <label class="form-check-label" for="permission-{{ $permission->id }}"> {{ $permission->name }} </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach @empty
                            <div class="col text-center">
                                <h5>No Module Found</h5>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-1 mb-1">{{(isset($role)? 'Update':'Create')}}</button>
        </form>
    </div>
</div>

@endsection @push('script')
<script>
    $(document).ready(function() {
        $(".module-checkbox").each(function() {
            var moduleId = $(this).attr('id').split('-')[1];
            var allPermissionsChecked = $("#module-" + moduleId).closest(".card-body").find(".permission-checkbox:checked").length === $("#module-" + moduleId).closest(".card-body").find(".permission-checkbox").length;
            if (allPermissionsChecked) {
                $("#module-" + moduleId).prop('checked', true);
            }
        });
    });
    $("#select-all").click(function (event) {
        if (this.checked) {
            $(":checkbox").each(function () {
                this.checked = true;
            });
        } else {
            $(":checkbox").each(function () {
                this.checked = false;
            });
        }
    });
    $(".module-checkbox").click(function () {
        var isChecked = $(this).prop("checked");
        $(this).closest(".card-body").find(".permission-checkbox").prop("checked", isChecked);
    });
    $(".permission-checkbox").click(function () {
        var moduleCheckbox = $(this).closest(".card-body").find(".module-checkbox");
        var allPermissionsChecked = $(this).closest(".card-body").find(".permission-checkbox:checked").length === $(this).closest(".card-body").find(".permission-checkbox").length;
        moduleCheckbox.prop("checked", allPermissionsChecked);
        
       
    });
</script>
@endpush
