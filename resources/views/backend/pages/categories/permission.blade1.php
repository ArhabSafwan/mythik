@extends('backend.template.template') 
@section('title', 'Role Permission') 
@push('css')
<style>
    .custom-control-input:checked~.custom-control-label::before {
        background-color: #007bff;
        border-color: #007bff;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
    }

    .card {
        margin-bottom: 20px;
    }
</style>
@endpush 
@section('main')
<section class="top-section">
    <div class="col-12">
        <h2 class="content-header-title float-left mb-0">{{(isset($role)? 'Update':'Add New')}} Role Permmision</h2>
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">
                        Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    {{(isset($role)? 'Update':'Add New')}} Role Permission
                </li>
            </ol>
        </div>
        <div class="col-12 top_btn">
            <div class="btn-group">
                <a href="{{route('roles.index')}}" class="btn btn-outline-primary">
                    <span><i class="feather icon-list"></i>&nbsp;All Role</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="basic-vertical-layouts">
    <div class="row match-height justify-content-center">
        <div class="col-md-8 col-8">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" method="post" action="{{ route('roles.permissionUpdate',$role->id)}}">
                            @csrf @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="select-all" />
                                                <label for="select-all" class="custom-control-label">Select All</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @forelse ($modules->chunk(3) as $key => $chunks) @foreach ($chunks as $key => $module)
                                            <div class="col-md-4">
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input module-checkbox" id="module-{{ $module->id }}" />
                                                                <label for="module-{{ $module->id }}" class="custom-control-label">Module: {{ $module->name }}</label>
                                                            </div>
                                                        </h5>

                                                        @foreach ($module->permissions as $key => $permission)
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input permission-checkbox" id="permission-{{ $permission->id }}" name="permissions[]" value="{{ $permission->id }}" @isset($role) @foreach($role->permissions as $rPermission) {{ $rPermission->id == $permission->id ? 'checked' : '' }} @endforeach @endisset >
                                                            <label for="permission-{{ $permission->id }}" class="custom-control-label">
                                                                {{ $permission->name }}
                                                            </label>
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
            </div>
        </div>
    </div>
</section>
@endsection @push('script')
<script>
    $("#select-all").click(function(event) {
        if (this.checked) {
            $(":checkbox").each(function() {
                this.checked = true;
            });
        } else {
            $(":checkbox").each(function() {
                this.checked = false;
            });
        }
    });
    $(".module-checkbox").click(function() {
        var isChecked = $(this).prop("checked");
        $(this).closest(".card-body").find(".permission-checkbox").prop("checked", isChecked);
    });
</script>
@endpush