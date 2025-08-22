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
        <a href="{{ route('exhibitions.index') }}" style="color: white;" type="submit"
            class="btn btn-primary me-sm-3 me-1 waves-effect waves-light"><i class="ti ti-arrow-left me-sm-1 ti-xs"></i>All
            participants</a>
    </div>
    <div class="pdf-document" id="field-visit-pdf">
        <div class="pdf-header">
            <h2>{{ $exhibition->organization_name }}'s Exhibitor's Details</h2>
            {{-- <button class="btn btn-sm btn-primary btn-print" onclick="window.print()">Print / Save as PDF</button> --}}
        </div>

        <div id="field-visit-details">
            <div class="pdf-section">
                <h4>Participants detail 1</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Full Name</th>
                        <td class="pdf-value">{{ $exhibition->p1_full_name }}</td>
                    </tr>

                    <tr>
                        <th>Designation</th>
                        <td class="pdf-value">{{ $exhibition->p1_designation }}</td>
                    </tr>

                    <tr>
                        <th>Contact Number</th>
                        <td class="pdf-value">{{ $exhibition->p1_contact_number }}</td>
                    </tr>
                    {{-- <tr>
                        <th>WhatsApp number</th>
                        <td class="pdf-value">{{ $exhibition->p1_whatsapp }}</td>
                    </tr> --}}
                    <tr>
                        <th>Email address</th>
                        <td class="pdf-value">{{ $exhibition->p1_email }}</td>
                    </tr>

                </table>
            </div>

            <div class="pdf-section">
                <h4>Participants detail 2</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Full Name</th>
                        <td class="pdf-value">{{ $exhibition->p2_full_name }}</td>
                    </tr>

                    <tr>
                        <th>Designation</th>
                        <td class="pdf-value">{{ $exhibition->p2_designation }}</td>
                    </tr>

                    <tr>
                        <th>Contact Number</th>
                        <td class="pdf-value">{{ $exhibition->p2_contact_number }}</td>
                    </tr>
                    {{-- <tr>
                        <th>WhatsApp number</th>
                        <td class="pdf-value">{{ $exhibition->p2_whats_app }}</td>
                    </tr> --}}
                    <tr>
                        <th>Email address</th>
                        <td class="pdf-value">{{ $exhibition->p2_email }}</td>
                    </tr>

                </table>
            </div>

            <div class="pdf-section">
                <h4>Exhibition Details</h4>
                <table class="pdf-table">
                    <tr>
                        <th>Title of the Innovation/Project You Intend to Exhibit</th>
                        <td class="pdf-value">{{ $exhibition->exhibition_title }}</td>
                    </tr>
                    <tr>
                        <th>Description of the Innovation</th>
                        <td class="pdf-value">{{ $exhibition->innovation_desc }}</td>
                    </tr>
                    <tr>
                        <th>Serve climate-vulnerable communities</th>
                        <td class="pdf-value">{{ $exhibition->climate_vulnerable }}</td>
                    </tr>
                    <tr>
                        <th>Display your innovation at the booth</th>
                        <td class="pdf-value">{{ $exhibition->describe_plan }}</td>
                    </tr>

                </table>
            </div>

            <div class="pdf-section">
                <h4>Materials & Requirements</h4>
                <table class="pdf-table">

                    <tr>
                        <th>Materials will be shared</th>
                        <td class="pdf-value">
                            @if (!empty($exhibition->material_needed))
                                {{ implode(', ', array_map(fn($item) => $materials[$item] ?? $item, $exhibition->material_needed)) }}
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Other Materials</th>
                        <td class="pdf-value">{{ $exhibition->other_material_needed }}</td>
                    </tr>
                    <tr>
                        <th>Plan to use any audio-visual content at your booth</th>
                        <td class="pdf-value">{{ $exhibition->have_audio_visual_content }}</td>
                    </tr>

                    <tr>
                        <th>Logistical support</th>
                        <td class="pdf-value">{{ $exhibition->need_logistic_support }}</td>
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
