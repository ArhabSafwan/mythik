{{-- filepath: resources/views/backend/pages/field_visits/show.blade.php --}}
@extends('backend.template.template')
@section('title', 'Exhibitor Details')

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
        <a href="{{ route('exhibitions-invitation.index') }}" style="color: white;" type="submit"
            class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All
            participants</a>
    </div>
    <div class="pdf-document" id="field-visit-pdf">
        <div class="pdf-header">
            <h2>{{ $exhibition->exhibtionRegistration->organization_name }}'s Exhibitor's Details</h2>
            {{-- <button class="btn btn-sm btn-primary btn-print" onclick="window.print()">Print / Save as PDF</button> --}}
        </div>

        <div id="field-visit-details">
            <div class="pdf-section">
                <h4>Registered Participant's Info</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Participant 1 Name</th>
                        <td class="pdf-value">{{ $exhibition->exhibtionRegistration->p1_full_name }}</td>
                    </tr>

                    <tr>
                        <th>Participant 1 Designation</th>
                        <td class="pdf-value">{{ $exhibition->exhibtionRegistration->p1_designation }}</td>
                    </tr>


                    <tr>
                        <th>Participant 1 Email address</th>
                        <td class="pdf-value">{{ $exhibition->exhibtionRegistration->p1_email }}</td>
                    </tr>

                    <tr>
                        <th>Participant 2 Name</th>
                        <td class="pdf-value">{{ $exhibition->exhibtionRegistration->p2_full_name }}</td>
                    </tr>

                    <tr>
                        <th>Participant 2 Designation</th>
                        <td class="pdf-value">{{ $exhibition->exhibtionRegistration->p2_designation }}</td>
                    </tr>

                    <tr>
                        <th>Participant 2 Email address</th>
                        <td class="pdf-value">{{ $exhibition->exhibtionRegistration->p2_email }}</td>
                    </tr>

                </table>
            </div>

            <div class="pdf-section">
                <h4>Meals & Health</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Dietary Restrictions/Preferences</th>
                        <td class="pdf-value">
                            @if (!empty($exhibition->dietary_restrictions))
                                <ul class="pdf-list">
                                    @foreach ($exhibition->dietary_restrictions as $item)
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
                        <td class="pdf-value">{{ $exhibition->dietary_restrictions_others }}</td>
                    </tr>


                    <tr>
                        <th>Prayer/Meditation Space Required</th>
                        <td class="pdf-value">{{ $exhibition->meditation_space }}</td>

                    </tr>
                    <tr>
                        <th>Medical Conditions/Allergies</th>
                        <td class="pdf-value">{{ $exhibition->medical_condition }}</td>
                    </tr>
                    <tr>
                        <th>Medical Conditions/Allergies Others</th>
                        <td class="pdf-value">{{ $exhibition->medical_condition_details }}</td>
                    </tr>
                </table>
            </div>

            <div class="pdf-section">
                <h4>Engagement & Consent</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Accommodation Confirmation</th>
                        <td class="pdf-value">{{ $exhibition->accomodation }}</td>

                    </tr>
                    <tr>
                        <th>Official Event Materials</th>
                        <td class="pdf-value">{{ $exhibition->participating_exhibition }}</td>

                    </tr>
                    <tr>
                        <th>Booth Allocation and Access</th>
                        <td class="pdf-value">{{ $exhibition->booth_allocation }}</td>
                    </tr>
                </table>
            </div>


            <div class="pdf-section">
                <h4>Package Details</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Category</th>
                        <td class="pdf-value">{{ $exhibition->category_type }}</td>
                    </tr>
                    <tr>
                        <th>Cost</th>
                        <td class="pdf-value">{{ $exhibition->currency }} {{ $exhibition->cost }}</td>
                    </tr>
                </table>
            </div>


        </div>

        <div class="pdf-footer">
            Generated on: {{ now()->format('d M Y, h:i A') }}
        </div>
    </div>
@endsection
