@extends('backend.template.template')
@section('title','Users')
@push('css')

@endpush
@section('main')

<div class="row mb-2">
    <div class="col">
        <h4 class="py-3 mb-4 fs-5 d-inline">
            <span class="text-muted fw-light">Users /</span> 
            <span class="heading-color">Update Information</span>
        </h4>
    </div>
    <div class="col text-end">
        <a href="{{ route('users.index') }}" style="color: white;" type="submit" 
        class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Users</a>
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
            <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <!-- Full Name -->
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="fullName">Full Name</label>
                            <div class="col-sm-9">
                                <input name="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror"
                                       id="fullName" placeholder="Full Name" 
                                       value="{{ old('full_name', $user->name) }}" />
                                @error('full_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
        
                    <!-- User Name (Readonly for specific user types) -->
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="userName">User Name</label>
                            <div class="col-sm-9">
                                <input name="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror"
                                       id="userName" placeholder="User Name" 
                                       value="{{ old('user_name', $user->user_name) }}" 
                                       />
                                @error('user_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
        
                    <!-- Phone -->
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="phone">Phone</label>
                            <div class="col-sm-9">
                                <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                       id="phone" placeholder="Phone" 
                                       value="{{ old('phone', $user->phone) }}" />
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
        
                    <!-- Email -->
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="email">Email</label>
                            <div class="col-sm-9">
                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       id="email" placeholder="Email" 
                                       value="{{ old('email', $user->email) }}" />
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
        
                    <!-- Password -->
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="user-password">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                       id="user-password" placeholder="Password" />
                                <span class="text-warning">If you do not update your password, this field will be left blank</span>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
        
                    <!-- Role (Readonly for specific user types) -->
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="roleId">Role</label>
                            <div class="col-sm-9">
                                <select id="roleId" name="role_id" class="form-select @error('role_id') is-invalid @enderror"
                                       >
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" 
                                                @if(old('role_id', $user->role_id) == $role->id) selected @endif>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
        
                    <!-- Status (Readonly for specific user types) -->
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="status">Status</label>
                            <div class="col-sm-9 d-inline-block">
                                <div class="vs-radio-con">
                                    <input type="radio" name="status" value="1" class="@error('status') is-invalid @enderror"
                                    @if(old('status', $user->status) == 1) checked @endif  />
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="">Active</span>
                                </div>
                                <div class="vs-radio-con">
                                    <input type="radio" name="status" value="0" class="@error('status') is-invalid @enderror"
                                    @if(old('status', $user->status) == 0) checked @endif  />
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="">In Active</span>
                                </div>
                            </div>                                
                            
                        </div>
                    </div>
               
                    <div class="col-md-6">
                        <div class="row image-div">
                            <label class="col-sm-3 col-form-label text-sm-end" for="logo">Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="image" name="image" class="form-control image @error('image') is-invalid @enderror">
                                @error('image')
                                <p class="text-danger">{{$message}}</p>
                               @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
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