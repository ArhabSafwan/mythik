@extends('backend.template.template')
@section('title', 'Edit Agenda Details')

@push('css')
@endpush

@section('main')

    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">Agenda /</span>
                <span class="heading-color">Edit Agenda</span>
            </h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('agenda.index') }}" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">
                <i class="ti ti-arrow-left me-sm-1 ti-xs"></i> All Agenda
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
                    <form method="POST" action="{{ route('agenda.update', $agenda->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end">Day</label>
                                        <div class="col-sm-9">
                                            <input name="day" type="text"
                                                class="form-control @error('day') is-invalid @enderror"
                                                value="{{ old('day', $agenda->day) }}" placeholder="Day" />
                                            @error('day')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end">Date</label>
                                        <div class="col-sm-9">
                                            <input name="date" type="text"
                                                class="form-control dob-picker @error('date') is-invalid @enderror"
                                                value="{{ old('date', $agenda->date) }}" placeholder="YYYY-MM-DD" />
                                            @error('date')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
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
                                            class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Update</button>
                                        <a href="{{ route('agenda.index') }}"
                                            class="btn btn-label-secondary waves-effect">Cancel</a>
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
