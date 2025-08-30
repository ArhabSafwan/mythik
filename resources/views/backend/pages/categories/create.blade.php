@extends('backend.template.template')
@section('title', 'Categories Create')
@push('css')

@endpush
@section('main')

    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">Categories /</span>
                <span class="heading-color">Categories Create</span>
            </h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('categories.index') }}" style="color: white;" type="submit"
                class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i
                    class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Categories</a>
        </div>
    </div>

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Categories Create</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="fullName">Category Name</label>
                                    <div class="col-sm-9">
                                        <input name="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" id="fullName"
                                            placeholder="Category Name" value="{{old('name')}}" />
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="image">Image</label>
                                    <div class="col-sm-9">
                                        <input name="image" type="file"
                                            class="form-control @error('image') is-invalid @enderror" id="image" />
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="row justify-content-end">
                                    <div class="col-sm-12">
                                        <button type="submit"
                                            class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
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
