@extends('backend.template.template')
@section('title', 'Participant Details')

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
        <a href="{{ route('participants.index') }}" style="color: white;" type="submit"
            class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All
            participants</a>
    </div>
    <div class="pdf-document" id="participant-pdf">
        <div class="pdf-header">
            <h2>{{ $participant->full_name }}'s Deatils</h2>
            {{-- <button class="btn btn-sm btn-primary btn-print" onclick="window.print()">Print / Save as PDF</button> --}}
        </div>

        <div id="participant-details">
            <div class="pdf-section">
                <h4>Personal Information</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Full Name</th>
                        <td class="pdf-value">{{ $participant->full_name }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td class="pdf-value">
                            {{ $genders[$participant->gender] ?? $participant->gender }}
                            @if (($participant->gender == 3 || $genders[$participant->gender] == 'Others') && $participant->gender_other)
                                ({{ $participant->gender_other }})
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td class="pdf-value">{{ $participant->email }}</td>
                    </tr>
                    <tr>
                        <th>Country Code</th>
                        <td class="pdf-value">{{ $participant->country_code }}</td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td class="pdf-value">{{ $participant->contact_number }}</td>
                    </tr>
                    <tr>
                        <th>Country of Residence</th>
                        <td class="pdf-value">{{ $participant->country_of_residence_name }}</td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td class="pdf-value">{{ $participant->nationality_name }}</td>
                    </tr>
                </table>
            </div>

            <div class="pdf-section">
                <h4>Organisational Information</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Organisation Name</th>
                        <td class="pdf-value">{{ $participant->organisation_name }}</td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td class="pdf-value">{{ $participant->designation }}</td>
                    </tr>


                    <tr>
                        <th>Sectors Organisation Works In</th>
                        <td>
                            @if (!empty($participant->sectors_works_in))
                                <ul class="pdf-list">
                                    @foreach ($participant->sectors_works_in as $item)
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
                            {{ $participant->sectors_works_in_others ? $participant->sectors_works_in_others : 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <th>Organisation Website</th>
                        <td class="pdf-value">{{ $participant->organisation_website }}</td>
                    </tr>
                </table>
            </div>

            <div class="pdf-section">
                <h4>Eligibility and Motivation</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Attending As</th>
                        <td>
                            @if (!empty($participant->attending_as))
                                <ul class="pdf-list">
                                    @foreach ($participant->attending_as as $item)
                                        <li>{{ $attending_as[$item] ?? $item }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Other Attending As</th>
                        <td class="pdf-value">{{ $participant->attending_as_other }}</td>
                    </tr>



                    <tr>
                        <th>Current Initiative</th>
                        <td class="pdf-value">{{ $participant->current_initiative }}</td>
                    </tr>


                    <tr>
                        <th>LinkedIn Profile</th>
                        <td class="pdf-value">{{ $participant->linkedin_profile }}</td>
                    </tr>

                    <tr>
                        <th>About FIF</th>
                        <td>
                            @if (!empty($participant->about_fif))
                                <ul class="pdf-list">
                                    @foreach ($participant->about_fif as $item)
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
                <h4>Breakout Session Preferences</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Day 1 Preference</th>
                        <td>
                            @if (!empty($participant->day1_preference))
                                {{ $day1_breakouts[$participant->day1_preference] ?? $participant->day1_preference }}
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Day 2 Preference</th>
                        <td>
                            @if (!empty($participant->day2_preference))
                                {{ $day2_breakouts[$participant->day2_preference] ?? $participant->day2_preference }}
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>


            <div class="pdf-section">
                <h4>Package Details</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Package</th>
                        <td class="pdf-value">{{ $participant->package }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td class="pdf-value">{{ $participant->category_type }}</td>
                    </tr>
                    <tr>
                        <th>Cost</th>
                        <td class="pdf-value">{{ $participant->currency }} {{ $participant->cost }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="pdf-footer">
            Generated on: {{ now()->format('d M Y, h:i A') }}
        </div>
    </div>
@endsection
