@extends('backend.template.template')
@section('title','Create Agenda')
@push('css')

@endpush
@section('main')

    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">Agenda /</span>
                <span class="heading-color">Agenda Create</span>
            </h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('agenda.index') }}" style="color: white;" type="submit"
               class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All Agenda</a>
        </div>
    </div>

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Agenda Create</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('agenda.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="first-name">Day</label>
                                        <div class="col-sm-9">
                                            <input name="day" type="text" class="form-control @error('day') is-invalid @enderror"
                                                   id="first-name" placeholder="Day" value="{{old('day')}}"  />
                                            @error('day')
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
