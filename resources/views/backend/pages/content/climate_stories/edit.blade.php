@extends('backend.template.template')
@section('title','Edit Climate Story')

@push('css')
@endpush

@section('main')

    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">Climate Stories /</span>
                <span class="heading-color">Edit Climate Story</span>
            </h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('climate_stories.index') }}" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">
                <i class="ti ti-arrow-left me-sm-1 ti-xs"></i> All Climate Stories
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Climate Story</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('climate_stories.update', $story->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end">Title</label>
                                        <div class="col-sm-9">
                                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                                   value="{{ old('title', $story->title) }}" placeholder="Title" />
                                            @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="last-name">Category</label>
                                        <div class="col-sm-9">
                                            <input name="category" type="text" class="form-control @error('category') is-invalid @enderror"
                                                   id="last-name" placeholder="Category" value="{{old('category',$story->category)}}"  />
                                            @error('category')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end">Author</label>
                                        <div class="col-sm-9">
                                            <input name="author" type="text" class="form-control @error('author') is-invalid @enderror"
                                                   value="{{ old('author', $story->author) }}" placeholder="Author" />
                                            @error('author')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end">Date</label>
                                        <div class="col-sm-9">
                                            <input name="date" type="text" class="form-control dob-picker @error('date') is-invalid @enderror"
                                                   value="{{ old('date', $story->date) }}" placeholder="YYYY-MM-DD" />
                                            @error('date')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row image-div">
                                        <label class="col-sm-3 col-form-label text-sm-end">Thumbnail (1100x600)</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                            @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-sm-8 mt-5" style="height: 180px;width: 220px;">
                                            <img class="img-responsive image-show" src="{{ $story->image ? Storage::disk('public')->url($story->image) : '' }}"
                                                 alt="Current Thumbnail" style="height:100%;width:100%;" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end">Description</label>
                                        <div class="col-sm-9">
                                        <textarea name="description" rows="10" class="form-control @error('description') is-invalid @enderror"
                                                  id="summernote" placeholder="Description">{{ old('description', $story->description) }}</textarea>
                                            @error('description')
                                            <p class="text-danger">{{ $message }}</p>
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
                                    <label class="col-sm-3 col-form-label text-sm-end">Meta Keyword</label>
                                    <div class="col-sm-9">
                                    <textarea name="meta_keyword" rows="3" class="form-control @error('meta_keyword') is-invalid @enderror"
                                              placeholder="Meta Keyword">{{ old('meta_keyword', $story->meta_keyword) }}</textarea>
                                        @error('meta_keyword')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end">Meta Description</label>
                                    <div class="col-sm-9">
                                    <textarea name="meta_description" rows="3" class="form-control @error('meta_description') is-invalid @enderror"
                                              placeholder="Meta Description">{{ old('meta_description', $story->meta_description) }}</textarea>
                                        @error('meta_description')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row ten-div">
                                    <label class="col-sm-3 col-form-label text-sm-end">Feature Image (1200x628)</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="feature_image" class="form-control @error('feature_image') is-invalid @enderror">
                                        @error('feature_image')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-8 mt-5" style="height:130px;width:170px;">
                                        <img class="img-responsive ten-div-show" src="{{ asset('storage/' . $story->feature_image) }}"
                                             alt="Current Feature Image" style="height:100%;width:100%;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="row justify-content-end">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Update</button>
                                        <a href="{{ route('climate_stories.index') }}" class="btn btn-label-secondary waves-effect">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
@endpush
