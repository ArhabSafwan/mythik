@extends('backend.template.template')
@section('title', 'Speaker Create')
@push('css')
@endpush
@section('main')

    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">Speaker /</span>
                <span class="heading-color">Speaker Create</span>
            </h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('speakers.index') }}" style="color: white;" type="submit"
                class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i
                    class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Speakers</a>
        </div>
    </div>

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Speakers Create</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('speakers.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="first-name">Full
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input name="full_name" type="text"
                                                class="form-control @error('full_name') is-invalid @enderror"
                                                id="first-name" placeholder="Full Name" value="{{ old('full_name') }}" />
                                            @error('full_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="last-name">Country</label>
                                        <div class="col-sm-9">
                                            <input name="country" type="text"
                                                class="form-control @error('country') is-invalid @enderror" id="last-name"
                                                placeholder="Country" value="{{ old('country') }}" />
                                            @error('country')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="last-name">Designation</label>
                                        <div class="col-sm-9">
                                            <input name="designation" type="text"
                                                class="form-control @error('designation') is-invalid @enderror"
                                                id="last-name" placeholder="Designation" value="{{ old('designation') }}" />
                                            @error('designation')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="last-name">Organization</label>
                                        <div class="col-sm-9">
                                            <input name="organization" type="text"
                                                class="form-control @error('organization') is-invalid @enderror"
                                                id="last-name" placeholder="Organization"
                                                value="{{ old('organization') }}" />
                                            @error('organization')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="last-name">Organization's URL</label>
                                        <div class="col-sm-9">
                                            <input name="url" type="text"
                                                class="form-control @error('url') is-invalid @enderror" id="last-name"
                                                placeholder="URL" value="{{ old('url') }}" />
                                            @error('url')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="last-name">Speaker
                                            Details</label>
                                        <div class="col-sm-9">
                                            <textarea name="details" id="details" placeholder="Details.."
                                                class="form-control @error('details') is-invalid @enderror" value="">{{ old('details') }}</textarea>
                                            @error('details')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row image-div">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="logo">Picture (282X321
                                            PX)</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="image" name="image"
                                                class="form-control image @error('image') is-invalid @enderror">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-sm-8 mt-5" style="height: 180px;width: 220px;">
                                            <img class="img-responsive image-show"
                                                src="{{ Storage::disk('public')->url('images/no-image-uploded.png') }}" alt=""
                                                style="height:100%;width: 100%;" />
                                        </div>
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
