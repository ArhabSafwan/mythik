@extends('frontend.fif_main')
@section('ftitle', 'Speakers')
@section('meta_tag')
    <meta name="title"
        content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | Meet The Speakers and Moderators">
    <meta name="keywords"
        content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
    <meta name="description"
        content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title"
        content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | Meet The Speakers and Moderators">
    <meta property="og:description"
        content="FIF 2025 brings together global experts to discuss climate adaptation in agriculture, food systems, and livelihoods. Explore solutions grounded in the realities of the Global South.">
    <meta property="og:image" content="{{ asset('/') }}frontend/img/logo_1.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Frugal Innovation Forum 2025">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title"
        content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | Meet The Speakers and Moderators">
    <meta name="twitter:description"
        content="A global forum exploring climate adaptation in agriculture and livelihoods. Hosted by BRAC.">
    <meta name="twitter:image" content="{{ asset('/') }}frontend/img/logo_1.png">
@endsection
@section('fif_content')
    @push('fcss')
        <style>
            .stay-tuned-box {
                background: #FFFFFF;
                border-radius: 12px;
                border: 1px solid #ffe4c4;
                box-shadow: 0 8px 20px rgba(249, 155, 28, 0.2);
                max-width: 600px;
            }

            .dot-bounce {
                animation: bounce 1s infinite;
                color: #F99B1C;
                font-size: 20px;
                display: inline-block;
            }

            .stay_tune_heading {
                color: #F99B1C;
                font-size: 21px;
            }

            .stay_tune_text,
            .dots {
                color: #F99B1C;
            }

            .stay_tune_text,
            .dots {
                color: #F99B1C;
                font-size: 18px;
                font-weight: 500;
            }

            .staytune-progress-wrapper {
                width: 100%;
                /* full width wrapper */
                text-align: center;
                /* center inline-block child */
                margin: 0px 0;
                /* optional spacing */
            }

            .staytune-progress-bar-container {
                display: inline-block;
                /* so text-align works */
                width: 13%;
                /* your original width */
                height: 5px;
                /* your original height */
                background-color: #eee;
                border-radius: 3px;
                overflow: hidden;
            }

            .staytune-progress-bar {
                height: 100%;
                background-color: #F99B1C;
                width: 0;
                transition: width 0.4s ease;
            }
        </style>
    @endpush
    <section class="speaker-section">
        <div class="container">
            <h2 class="text-center title">Meet The Speakers and Moderators</h2>
            <div class="row">
                @foreach ($data as $speaker)
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="speaker-card">
                            <div style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#speakerModal"
                                data-image="{{ $speaker->image ? Storage::disk('public')->url($speaker->image) : '' }}"
                                data-name="{{ $speaker->full_name }}" data-country="{{ $speaker->country }}"
                                data-designation="{{ $speaker->designation }}"
                                data-organization="{{ $speaker->organization }}" data-details="{{ $speaker->details }}"
                                data-url="{{ $speaker->url }}">
                                <div class="speaker-img-wrapper">
                                    <img src="{{ $speaker->image ? Storage::disk('public')->url($speaker->image) : '' }}"
                                        alt="{{ $speaker->full_name ?? '' }}" class="img-fluid speaker-img" />
                                </div>
                                <div class="speaker-name">{{ $speaker->full_name ?? '' }}</div>
                                <div class="speaker-role">
                                    {{-- {{ $speaker->country ?? '' }}<br /> --}}
                                    {{ $speaker->designation ?? '' }}
                                </div>
                            </div>
                            <div class="speaker-company text-center">
                                <a href="{{ $speaker->url }}" target="_blank">{{ $speaker->organization ?? '' }} ↗</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Stay Tuned Section -->
                <div class="container my-5">
                    <div class="stay-tuned-box mx-auto p-4 text-center">
                        <h5 class="fw-bold mb-2 stay_tune_heading">More speakers to be announced shortly</h5>
                        <p class="" style=""><span class="stay_tune_text">Stay tuned </span><span
                                class="dots">.....</span> {{-- <span class="dot-bounce">•••</span> --}}</p>
                        <div class="staytune-progress-wrapper">
                            <div class="staytune-progress-bar-container">
                                <div class="staytune-progress-bar" style="width: 75%;"></div>
                            </div>
                        </div>
                        <p class="text-secondary small mb-0">We're curating an amazing lineup of innovators for you</p>
                    </div>
                </div>


                {{-- <h5 class="text-center text-red-500 mt-5" style="color: #F99B1C">More speakers to be announced shortly. Stay tuned!</h5> --}}
            </div>
        </div>
    </section>



    <!-- Speaker Modal --> {{-- This modal is commented out for now, uncomment to use it --}}

    <div class="modal fade" id="speakerModal" tabindex="-1" aria-labelledby="speakerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-0" style="box-shadow: none; border-radius: 20px;">
                <div class="d-flex flex-column flex-md-row w-100" style="min-height: 100%;">
                    <!-- Left: Image -->
                    <div class="flex-shrink-0 d-flex align-items-center justify-content-center modal-img-side"
                        style="background: #fff; width: 100%; max-width: 220px; min-height: 100%; padding: 32px 16px;">
                        <img id="modalSpeakerImg" src="" alt="" class="img-fluid rounded"
                            style="width:100%;object-fit:cover;">
                    </div>
                    <!-- Right: Details -->
                    <div class="flex-grow-1 position-relative w-100 modal-content-side"
                        style="background: #007160; color: #d6e03d; padding: 32px 24px;">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close" style="color: #d6e03d; z-index:2;"></button>
                        <style>
                            .border-bottom {
                                border-bottom: 1px solid #D6E03D66 !important
                            }

                            /* Border radius for left and right sides */
                            .modal-img-side {
                                border-top-left-radius: 20px;
                                border-bottom-left-radius: 20px;
                            }

                            .modal-content-side {
                                border-top-right-radius: 20px;
                                border-bottom-right-radius: 20px;
                            }

                            @media (max-width: 767.98px) {
                                #speakerModal .modal-dialog {
                                    margin: 7rem;
                                }

                                #speakerModal .modal-content {
                                    border-radius: 12px;
                                }

                                #speakerModal .btn-close {
                                    top: 8px !important;
                                    right: 8px !important;
                                }

                                #speakerModal .d-flex.flex-md-row {
                                    flex-direction: column !important;
                                }

                                #speakerModal .flex-shrink-0 {
                                    max-width: 100% !important;
                                    padding: 24px 0 !important;
                                    border-top-left-radius: 12px !important;
                                    border-top-right-radius: 12px !important;
                                    border-bottom-left-radius: 0 !important;
                                    border-bottom-right-radius: 0 !important;
                                }

                                #speakerModal .modal-content-side {
                                    border-bottom-left-radius: 12px !important;
                                    border-bottom-right-radius: 12px !important;
                                    border-top-right-radius: 0 !important;
                                    border-top-left-radius: 0 !important;
                                }
                            }

                            @media (max-width: 550px) {
                                #speakerModal .modal-dialog {
                                    margin: 1rem;
                                }
                            }
                        </style>
                        <h5 id="modalSpeakerName" class="pb-1 border-bottom" style="font-weight: 500;"></h5>
                        {{-- <div id="modalSpeakerCountry" class="pb-1 border-bottom" style="font-weight: 300;"></div> --}}
                        <div id="modalSpeakerDesignation" class="pb-1 border-bottom" style="font-weight: 300;"></div>
                        <div id="modalSpeakerOrganization" class="pb-1 border-bottom" style="font-weight: 300;">
                            <a href="#" target="_blank" style="color: #d6e03d;"></a>
                        </div>
                        <div id="modalSpeakerDetails" class="mt-3"
                            style="font-size: .8rem;line-height:1.4; font-weight: 300; text-align: justify;">
                            <span class="short-text"></span>
                            <span class="full-text d-none"></span>
                            <button type="button" class="btn btn-link p-0 ms-1 read-more-btn"
                                style="color:#d6e03d; font-size: .8rem;">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <section class="speaker-section">
  <div class="container">
    <h2 class="text-center title">Coming Soon</h2>
     <p class="text-center">Details for this section will be published shortly</p>
  </div>
</section>  --}}
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('#speakerModal').on('show.bs.modal', function(event) {
                var card = $(event.relatedTarget);

                $('#modalSpeakerImg').attr('src', card.data('image'));
                $('#modalSpeakerName').text(card.data('name'));
                $('#modalSpeakerCountry').text(card.data('country'));
                $('#modalSpeakerDesignation').text(card.data('designation'));

                // Read more logic for details
                var details = card.data('details') || '';
                var shortCharCount = 300; // Show first 300 chars
                var $detailsDiv = $('#modalSpeakerDetails');
                var $short = $detailsDiv.find('.short-text');
                var $full = $detailsDiv.find('.full-text');
                var $btn = $detailsDiv.find('.read-more-btn');

                if (details.length > shortCharCount) {
                    $short.text(details.substring(0, shortCharCount) + '...').removeClass('d-none');
                    $full.text(details).addClass('d-none');
                    $btn.show().text('Read more');
                } else {
                    $short.text(details).removeClass('d-none');
                    $full.text('').addClass('d-none');
                    $btn.hide();
                }

                $btn.off('click').on('click', function() {
                    if ($full.hasClass('d-none')) {
                        $short.addClass('d-none');
                        $full.removeClass('d-none');
                        $btn.text('Show less');
                    } else {
                        $short.removeClass('d-none');
                        $full.addClass('d-none');
                        $btn.text('Read more');
                    }
                });

                const url = card.data('url');
                const org = card.data('organization');
                const $orgLink = $('#modalSpeakerOrganization a');

                if (url) {
                    $orgLink
                        .attr('href', url)
                        .attr('target', '_blank')
                        .removeAttr('title')
                        .text(org + ' ↗')
                        .css('pointer-events', 'auto')
                        .show();
                } else {
                    $orgLink
                        .attr('href', '#')
                        .removeAttr('target')
                        .attr('title', 'No website available')
                        .text(org)
                        .css('pointer-events', 'none')
                        .show();
                }
            });
        });
    </script>
@endpush
