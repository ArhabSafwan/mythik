@extends('backend.template.template')
@section('title', 'Products Edit')
@push('css')

@endpush
@section('main')

    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">Products /</span>
                <span class="heading-color">Update Information</span>
            </h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('products.index') }}" style="color: white;" type="submit"
            class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Products</a>
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
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="fullName">Product Title</label>
                                    <div class="col-sm-9">
                                        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                          id="fullName" placeholder="Product Title" value="{{old('title', $product->title)}}"  />
                                        @error('title')
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
