{{-- filepath: resources/views/backend/pages/field_visits/show.blade.php --}}
@extends('backend.template.template')
@section('title', 'Field Visit Details')

@push('css')
    <style>
        .pdf-document {
            background: #fff;
            padding: 40px 30px;
            max-width: 900px;
            margin: 30px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px #e0e0e0;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #222;
        }

        .pdf-header {
            border-bottom: 2px solid #F99B1C;
            margin-bottom: 30px;
            padding-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .pdf-header h2 {
            margin: 0;
            color: #007160;
            font-weight: 700;
        }

        .pdf-section {
            margin-bottom: 28px;
        }

        .pdf-section h4 {
            color: #F99B1C;
            margin-bottom: 12px;
            font-weight: 600;
            border-left: 4px solid #F99B1C;
            padding-left: 10px;
        }

        .pdf-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .pdf-table th,
        .pdf-table td {
            padding: 8px 10px;
            border-bottom: 1px solid #eee;
            vertical-align: top;
        }

        .pdf-table th {
            width: 220px;
            background: #f8f8f8;
            color: #007160;
            font-weight: 500;
        }

        .pdf-list {
            margin: 0;
            padding-left: 18px;
        }

        .pdf-list li {
            margin-bottom: 2px;
        }

        .pdf-label {
            color: #888;
            font-size: 13px;
        }

        .pdf-value {
            font-size: 15px;
            color: #222;
        }

        .pdf-footer {
            margin-top: 40px;
            text-align: right;
            color: #aaa;
            font-size: 13px;
        }

        @media print {
            .pdf-document {
                box-shadow: none;
                border: none;
            }

            .btn-print {
                display: none;
            }
        }
    </style>
@endpush

@section('main')
    <div class="col text-end">
        <a href="{{ route('field-visits.index') }}" style="color: white;" type="submit"
            class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All
            participants</a>
    </div>
    <div class="pdf-document" id="field-visit-pdf">
        <div class="pdf-header">
            <h2>{{ $fieldVisit->full_name }}'s Field Visit Details</h2>
            {{-- <button class="btn btn-sm btn-primary btn-print" onclick="window.print()">Print / Save as PDF</button> --}}
        </div>

        <div id="field-visit-details">
            <div class="pdf-section">
                <h4>Participant Information</h4>
                <table class="pdf-table">
                    @if (!empty($fieldVisit->current_affiliation))
                        <tr>
                            <th>Represents Current Affiliation</th>
                            <td class="pdf-value">
                                @foreach ($fieldVisit->current_affiliation as $item)
                                    <li>{{ $current_affiliation[$item] ?? $item }}</li>
                                @endforeach
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <th>Full Name</th>
                        <td class="pdf-value">{{ $fieldVisit->full_name }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td class="pdf-value">
                            {{ $genders[$fieldVisit->gender] ?? $fieldVisit->gender }}
                            @if (($fieldVisit->gender == 3 || $genders[$fieldVisit->gender] == 'Others') && $fieldVisit->gender_other)
                                ({{ $fieldVisit->gender_other }})
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td class="pdf-value">{{ $fieldVisit->email }}</td>
                    </tr>
                    <tr>
                        <th>Country Code</th>
                        <td class="pdf-value">{{ $fieldVisit->country_code }}</td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td class="pdf-value">{{ $fieldVisit->whatsapp_number }}</td>
                    </tr>
                    <tr>
                        <th>Country of Residence</th>
                        <td class="pdf-value">
                            {{ optional($countries->where('id', $fieldVisit->country_of_residence)->first())->name ?? $fieldVisit->country_of_residence }}
                        </td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td class="pdf-value">
                            {{ $countries->where('id', $fieldVisit->nationality)->first()->name ?? $fieldVisit->nationality }}
                        </td>
                    </tr>
                </table>
            </div>

            <div class="pdf-section">
                <h4>Organisational Information</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Organisation Name</th>
                        <td class="pdf-value">{{ $fieldVisit->organisation_name }}</td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td class="pdf-value">{{ $fieldVisit->designation }}</td>
                    </tr>
                    <tr>
                        <th>Sectors Organisation Works In</th>
                        <td>
                            @if (!empty($fieldVisit->sectors_works_in))
                                <ul class="pdf-list">
                                    @foreach ($fieldVisit->sectors_works_in as $item)
                                        <li>{{ $sectors[$item] ?? $item }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Sector Others</th>
                        <td class="pdf-value">
                            {{ $fieldVisit->sectors_works_in_others ? $fieldVisit->sectors_works_in_others : 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <th>Organisation Website</th>
                        <td class="pdf-value">{{ $fieldVisit->organisation_website }}</td>
                    </tr>
                </table>
            </div>

            <div class="pdf-section">
                <h4>Eligibility and Motivation</h4>
                <table class="pdf-table">

                    <tr>
                        <th>Align with your work or interests</th>
                        <td class="pdf-value">{{ $fieldVisit->motivation }}</td>
                    </tr>


                    <tr>
                        <th>LinkedIn Profile</th>
                        <td class="pdf-value">{{ $fieldVisit->linkedin_profile }}</td>
                    </tr>

                    <tr>
                        <th>About FIF</th>
                        <td>
                            @if (!empty($fieldVisit->about_fif))
                                <ul class="pdf-list">
                                    @foreach ($fieldVisit->about_fif as $item)
                                        <li>{{ $about_fif[$item] ?? $item }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>

            <div class="pdf-section">
                <h4>Field Visit Participation</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Accessibility Requirements</th>
                        <td class="pdf-value">{{ $fieldVisit->accessibility_required }}</td>
                    </tr>

                    <tr>
                        <th>Accessibility Requirements Others</th>
                        <td class="pdf-value">
                            {{ $fieldVisit->accessibility_description ? $fieldVisit->accessibility_description : 'N/A' }}
                        </td>
                    </tr>

                </table>
            </div>

            <div class="pdf-section">
                <h4>Consent & Coordination</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Travel Duration & Conditions</th>
                        <td class="pdf-value">{{ $fieldVisit->comfort_outdoors }}</td>
                    </tr>
                    <tr>
                        <th>English-Only Interpretation</th>
                        <td class="pdf-value">{{ $fieldVisit->medical_conditions }}</td>
                    </tr>
                    <tr>
                        <th>Logistics Coordination Agreement</th>
                        <td class="pdf-value">{{ $fieldVisit->interpretation_support }}</td>
                    </tr>
                </table>
            </div>

            <div class="pdf-section">
                <h4>Package Details</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Category</th>
                        <td class="pdf-value">{{ $fieldVisit->category_type }}</td>
                    </tr>
                    <tr>
                        <th>Cost</th>
                        <td class="pdf-value">{{ $fieldVisit->currency }} {{ $fieldVisit->cost }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="pdf-footer">
            Generated on: {{ now()->format('d M Y, h:i A') }}
        </div>
    </div>
@endsection
