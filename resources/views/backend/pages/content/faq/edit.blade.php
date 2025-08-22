@extends('backend.template.template')
@section('title','FAQ Edit')

@push('css')
@endpush

@section('main')
    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">FAQ /</span>
                <span class="heading-color">Edit FAQ</span>
            </h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('faq.index') }}" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">
                <i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All FAQ
            </a>
        </div>
    </div>

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit FAQ</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('faq.update', $faq->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end">Title</label>
                                        <div class="col-sm-9">
                                            <input name="title" type="text"
                                                   class="form-control @error('title') is-invalid @enderror"
                                                   placeholder="Title" value="{{ old('title', $faq->title) }}" />
                                            @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end">Description</label>
                                        <div class="col-sm-9">
                                            <textarea name="description" rows="3"
                                                      class="form-control char-textarea @error('description') is-invalid @enderror"
                                                      placeholder="Description">{{ old('description', $faq->description) }}</textarea>
                                            @error('description')
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
                                            <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Update</button>
                                            <a href="{{ route('faq.index') }}" class="btn btn-label-secondary waves-effect">Cancel</a>
                                        </div>
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
