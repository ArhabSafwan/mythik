@extends('backend.template.template')
@section('title', 'Edit Agenda Details')

@push('css')
@endpush

@section('main')

    <div class="row mb-2">
        <div class="col">
            <h4 class="py-3 mb-4 fs-5 d-inline">
                <span class="text-muted fw-light">Agenda Details /</span>
                <span class="heading-color">Edit Agenda Details</span>
            </h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('agenda_details.index') }}" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">
                <i class="ti ti-arrow-left me-sm-1 ti-xs"></i> All Agenda
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Agenda Details</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('agenda_details.update', $agendDetail->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <!-- Agenda Select -->
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end" for="day">Day</label>
                                        <div class="col-sm-9">
                                            <select name="agenda_id" id="agenda_id" class="form-control"
                                                value="{{ old('agenda_id', $agendDetail->agenda_id) }}">
                                                <option value="">Select Day and Date</option>
                                                @foreach ($agendas as $agenda)
                                                    <option value="{{ $agenda->id }}"
                                                        {{ $agendDetail->agenda_id == $agenda->id ? 'selected' : '' }}>
                                                        {{ $agenda->day }},
                                                        {{ \Carbon\Carbon::parse($agenda->date)->format('jS F Y') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('agenda_id')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Time Fields -->
                                <div class="col-md-12 mb-3">
                                    <div class="row justify-content-end">
                                        <div class="col-4">
                                            <label>Start Time</label>
                                            <input type="time" name="start_time"
                                                value="{{ \Carbon\Carbon::parse($agendDetail->start_time)->format('H:i') }}"
                                                class="form-control" />
                                            @error('start_time')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-5">
                                            <label>End Time</label>
                                            <input type="time" name="end_time"
                                                value="{{ \Carbon\Carbon::parse($agendDetail->end_time)->format('H:i') }}"
                                                class="form-control" />
                                            @error('end_time')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Repeater with Pre-filled Values -->
                                <div class="col-md-12 mb-3">
                                    <div id="descriptionRepeater">
                                        @foreach (array_map(null, $agendDetail->description_title ?? [], $agendDetail->description ?? []) as [$title, $desc])
                                            <div class="row justify-content-end mb-3 description-block">
                                                <div class="col-md-1 d-flex align-items-end">
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm remove-description">✕</button>
                                                </div>
                                                <div class="col-4">
                                                    <label class="col-form-label">Description Title</label>
                                                    <input type="text" name="description_title[]"
                                                        value="{{ $title }}" class="form-control" />
                                                    @error('description_title')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-5">
                                                    <label class="col-form-label">Description</label>
                                                    <textarea name="description[]" class="form-control" rows="1">{{ $desc }}</textarea>
                                                    @error('description')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm mt-2"
                                        id="addDescription">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="row justify-content-end">
                                    <div class="col-sm-12">
                                        <button type="submit"
                                            class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Update</button>
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
    <script>
        $(document).ready(function() {
            $('#addDescription').click(function() {
                const newGroup = `
            <div class="row justify-content-end mb-3 description-block">
                <div class="col-md-1 d-flex align-items-end">
                    <button type="button" class="btn btn-danger btn-sm remove-description">✕</button>
                </div>
                <div class="col-4">
                    <label class="col-form-label">Description Title</label>
                    <input type="text" name="description_title[]" class="form-control" placeholder="Description Title" />
                </div>
                <div class="col-5">
                    <label class="col-form-label">Description</label>
                    <textarea name="description[]" class="form-control" rows="1" placeholder="Description"></textarea>
                </div>
            </div>
            `;
                $('#descriptionRepeater').append(newGroup);
            });

            $(document).on('click', '.remove-description', function() {
                $(this).closest('.description-block').remove();
            });
        });
    </script>
@endpush
