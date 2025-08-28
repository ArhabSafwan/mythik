@extends('backend.template.template')
@section('title','Roles')
@push('css')

@endpush
@section('main')

<div class="row mb-2">
    <div class="col">
        <h4 class="py-3 mb-4 fs-5 d-inline">
            <span class="text-muted fw-light">Roles /</span> 
            <span class="heading-color">Update Information</span>
        </h4>
    </div>
    <div class="col text-end">
        <a href="{{ route('roles.index') }}" style="color: white;" type="submit" 
        class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Roles</a>
    </div>
</div>

<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Update Information</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('roles.update',$role->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="fullName">Role Name</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                      id="fullName" placeholder="Role Name" value="{{old('name',$role->name)}}"  /> 
                                    @error('name')
                                      <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>     
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="status">Status</label>
                                <div class="col-sm-9 d-inline-block">
                                    <div class="vs-radio-con">
                                        <input type="radio" name="status" value="1" class="@error('status') is-invalid @enderror"
                                        @if(old('status', $role->status) == 1) checked @endif  />
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="">Active</span>
                                    </div>
                                    <div class="vs-radio-con">
                                        <input type="radio" name="status" value="0" class="@error('status') is-invalid @enderror"
                                        @if(old('status', $role->status) == 0) checked @endif  />
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="">In Active</span>
                                    </div>
                                </div>                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="row justify-content-end">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Update</button>
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