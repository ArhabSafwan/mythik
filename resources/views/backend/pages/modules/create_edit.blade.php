@extends('backend.template.template')
@section('title','Modules')
@push('css')

@endpush
@section('main')

<div class="row mb-2">
    <div class="col">
        <h4 class="py-3 mb-4 fs-5 d-inline">
            <span class="text-muted fw-light">Modules /</span> 
            <span class="heading-color">{{isset($module) ? 'Update Information' : 'Add New Module'}}</span>
        </h4>
    </div>
    <div class="col text-end">
        <a href="{{ route('modules.index') }}" style="color: white;" type="submit" 
        class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Roles</a>
    </div>
</div>

<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">{{isset($module) ? 'Update Information' : 'Add New Module'}}</h5>
            </div>
            <div class="card-body">
                <form class="form form-vertical" method="post" action="{{ isset($module) ? route('modules.update',$module->id): route('modules.store')}}">
                    @csrf
                    @if (@isset($module))
                        @method('PUT')
                    @endif
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="fullName">Module Name</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                      id="fullName" placeholder="Module Name" value="{{(isset($module)) ? $module->name :old('name')}}"  /> 
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
