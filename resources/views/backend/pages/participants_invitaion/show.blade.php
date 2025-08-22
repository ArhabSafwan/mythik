{{-- filepath: resources/views/backend/pages/participants/show.blade.php --}}
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
        <a href="{{ route('participants-invitation.index') }}" style="color: white;" type="submit"
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
                <h4>Registered Participant's Info</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Full Name</th>
                        <td class="pdf-value">{{ $participant->participantRegistration->full_name }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td class="pdf-value">{{ $participant->participantRegistration->email }}</td>
                    </tr>
                    <tr>
                        <th>Country Code</th>
                        <td class="pdf-value">{{ $participant->participantRegistration->country_code }}</td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td class="pdf-value">{{ $participant->participantRegistration->contact_number }}</td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td class="pdf-value">{{ $participant->participantRegistration->nationalityCountry->name }}</td>
                    </tr>
                </table>
            </div>
            <div class="pdf-section">
                <h4>Personal Information</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Full Name</th>
                        <td class="pdf-value">{{ $participant->full_name }}</td>
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
                        <th>Emergency Country
                            Code</th>
                        <td class="pdf-value">{{ $participant->emergency_country_code }}</td>
                    </tr>
                    <tr>
                        <th>Emergency Contact
                            Number</th>
                        <td class="pdf-value">{{ $participant->emergency_contact_number }}</td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td class="pdf-value">{{ $participant->nationalityName->name }}</td>
                    </tr>
                </table>
            </div>

            <div class="pdf-section">
                <h4>Meals & Health</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Dietary Restrictions/Preferences</th>
                        <td class="pdf-value">
                            @if (!empty($participant->dietary_restrictions))
                                <ul class="pdf-list">
                                    @foreach ($participant->dietary_restrictions as $item)
                                        <li>{{ $dietary_restrictions[$item] ?? $item }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Dietary Restrictions/Preferences (Others)</th>
                        <td class="pdf-value">{{ $participant->dietary_restrictions_others }}</td>
                    </tr>


                    <tr>
                        <th>Prayer/Meditation Space Required</th>
                        <td class="pdf-value">{{ $participant->meditation_space }}</td>

                    </tr>
                    <tr>
                        <th>Medical Conditions/Allergies</th>
                        <td class="pdf-value">{{ $participant->medical_condition }}</td>
                    </tr>
                    <tr>
                        <th>Medical Conditions/Allergies Others</th>
                        <td class="pdf-value">{{ $participant->medical_condition_details }}</td>
                    </tr>
                </table>
            </div>

            <div class="pdf-section">
                <h4>Engagement & Consent</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Accommodation Confirmation</th>
                        <td class="pdf-value">{{ $participant->accomodation }}</td>

                    </tr>
                    <tr>
                        <th>Event Photography/Recording Consent</th>
                        <td class="pdf-value">{{ $participant->photographed_recorded }}</td>
                    </tr>
                </table>
            </div>

            <div class="pdf-section">
                <h4>Package Details</h4>
                <table class="pdf-table">
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
