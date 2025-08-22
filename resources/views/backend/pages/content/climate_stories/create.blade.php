@extends('backend.template.template')
@section('title','Climate Stories')
@push('css')

@endpush
@section('main')

    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">Climate Stories /</span>
                <span class="heading-color">Climate Stories Create</span>
            </h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('climate_stories.index') }}" style="color: white;" type="submit"
               class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Climate Stories</a>
        </div>
    </div>

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Climate Story Create</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('climate_stories.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="first-name">Title</label>
                                        <div class="col-sm-9">
                                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                                   id="first-name" placeholder="Title" value="{{old('title')}}"  />
                                            @error('title')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="last-name">Category</label>
                                        <div class="col-sm-9">
                                            <input name="category" type="text" class="form-control @error('category') is-invalid @enderror"
                                                   id="last-name" placeholder="Category" value="{{old('category')}}"  />
                                            @error('category')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="last-name">Author</label>
                                        <div class="col-sm-9">
                                            <input name="author" type="text" class="form-control @error('author') is-invalid @enderror"
                                                   id="last-name" placeholder="Author" value="{{old('author')}}"  />
                                            @error('author')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="birth-date">Date</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="multicol-birthdate birth-date" name="date" value="{{ old('date') }}"
                                                   class="form-control dob-picker @error('date') is-invalid @enderror" placeholder="YYYY-MM-DD" />
                                            @error('date')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row image-div">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="logo">Thumbnail (1100X600 PX)</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="image" name="image" class="form-control image @error('image') is-invalid @enderror">
                                            @error('image')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-3"></div>
                                        {{--<div class="col-sm-8 mt-5" style="height: 180px;width: 220px;">
                                            <img class="img-responsive image-show" src="{{asset('image/no-image-uploded.png')}}"  alt="" style="height:100%;width: 100%;"/>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="present-address">Description</label>
                                        <div class="col-sm-9">
                                        <textarea name="description" id="summernote" data-length="100"
                                                  class="form-control char-textarea @error('description') is-invalid @enderror"
                                                  id="textarea-counter present-address" rows="10"
                                                  placeholder="Description">{{ old('description') }}</textarea>
                                            @error('description')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-left justify-content-between mt-3 mb-3">
                            <h5 class="mb-0">SEO Information</h5>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="meta_keyword">Meta Keyword</label>
                                    <div class="col-sm-9">
                                    <textarea name="meta_keyword" data-length="500" class="form-control char-textarea @error('meta_keyword') is-invalid @enderror" id="textarea-counter present-address" rows="3"
                                              placeholder="Meta Keyword">{{ old('meta_keyword') }}</textarea>

                                        @error('meta_keyword')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="meta_description">Meta Description</label>
                                    <div class="col-sm-9">
                                    <textarea name="meta_description" data-length="500" class="form-control char-textarea @error('meta_description') is-invalid @enderror" id="textarea-counter present-address" rows="3"
                                              placeholder="Meta Description">{{ old('meta_description') }}</textarea>

                                        @error('meta_description')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row ten-div">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="logo">Feature Image (1200X628 PX)</label>
                                    <div class="col-sm-9">
                                        <input type="file" id="ten-image" name="feature_image" class="form-control image @error('feature_image') is-invalid @enderror" />
                                        @error('feature_image')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-3"></div>
                                    {{--<div class="col-sm-8 mt-5" style="height: 130px; width: 170px;">
                                        <img class="img-responsive ten-div-show" src="{{asset('image/no-image-uploded.png')}}" alt="" style="height: 100%; width: 100%;" />
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="row justify-content-end">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                                        <button type="reset" class="btn btn-label-secondary waves-effect">Reset</button>
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
