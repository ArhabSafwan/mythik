@extends('backend.template.template')
@section('title','Permission')
@push('css')

@endpush
@section('main')

<div class="row mb-2">
    <div class="col">
        <h4 class="py-3 mb-4 fs-5 d-inline">
            <span class="text-muted fw-light">Permission /</span> 
            <span class="heading-color">{{isset($permission) ? 'Update Information' : 'Add New Permission'}}</span>
        </h4>
    </div>
    <div class="col text-end">
        <a href="{{ route('permissions.index') }}" style="color: white;" type="submit" 
        class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Permission</a>
    </div>
</div>

<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">{{isset($permission) ? 'Update Information' : 'Add New Permission'}}</h5>
            </div>
            <div class="card-body">
                <form class="form form-vertical" method="post" action="{{ isset($permission) ? route('permissions.update',$permission->id): route('permissions.store')}}">
                    @csrf
                    @if (@isset($permission))
                        @method('PUT')
                    @endif
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="roleId">Module Nam</label>
                                <div class="col-sm-9">
                                    <select id="roleId" name="module_id" class="select2 form-select @error('module_id') is-invalid @enderror">
                                        <option value="">Select Module</option>
                                        @foreach ($modules as $mod)
                                        <option value="{{ $mod->id }}" 
                                            {{ isset($permission) ? (old('module_id', $permission->module_id) == $mod->id ? 'selected' : '') : (old('module_id') == $mod->id ? 'selected' : '') }}
                                        >{{ $mod->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('module_id')
                                      <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>     
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="fullName">Permission Name</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                      id="fullName" placeholder="Permission Name" value="{{(isset($permission)) ? $permission->name :old('name')}}"  /> 
                                    @error('name')
                                      <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>     
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="row justify-content-end">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">{{(isset($module)? 'Update':'Submit')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Basic with Icons -->

</div>


@endsection
@push('script')

@endpush
