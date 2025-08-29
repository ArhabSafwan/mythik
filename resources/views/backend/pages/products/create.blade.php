@extends('backend.template.template')
@section('title', 'Products Create')
@push('css')

@endpush
@section('main')

    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">Products /</span>
                <span class="heading-color">Products Create</span>
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
                    <h5 class="mb-0">Products Create</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="title">Product Title</label>
                                    <div class="col-sm-9">
                                        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                          id="title" placeholder="Product Title" value="{{old('title')}}"  />
                                        @error('title')
                                          <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="price">Price</label>
                                    <div class="col-sm-9">
                                        <input name="price" type="number" class="form-control @error('price') is-invalid @enderror"
                                          id="price" placeholder="Product Price" value="{{old('price')}}"  />
                                        @error('price')
                                          <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="stock">Stock</label>
                                    <div class="col-sm-9">
                                        <input name="stock" type="number" class="form-control @error('stock') is-invalid @enderror"
                                          id="stock" placeholder="Product Stock" value="{{old('stock')}}"  />
                                        @error('stock')
                                          <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="category_id">Category</label>
                                    <div class="col-sm-9">
                                        <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                          <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="status">Status</label>
                                    <div class="col-sm-9">
                                        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                          <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="image">Image</label>
                                    <div class="col-sm-9">
                                        <input name="image" type="file" class="form-control @error('image') is-invalid @enderror"
                                          id="image" />
                                        @error('image')
                                          <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <label class="col-sm-12 col-form-label" for="description">Description</label>
                                    <div class="col-sm-12">
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Product Description">{{ old('description') }}</textarea>
                                        @error('description')
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
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
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