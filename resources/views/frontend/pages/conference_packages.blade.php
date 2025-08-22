@extends('frontend.fif_main')
@section('ftitle', 'Conference Participant')
@section('meta_tag')
    <meta name="title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Conference Application Form">
    <meta name="keywords"
        content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
    <meta name="description"
        content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title"
        content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Conference Application Form">
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
        content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Conference Application Form">
    <meta name="twitter:description"
        content="A global forum exploring climate adaptation in agriculture and livelihoods. Hosted by BRAC.">
    <meta name="twitter:image" content="{{ asset('/') }}frontend/img/logo_1.png">
@endsection
@section('fif_content')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
        integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

    <style>
        section.registration-progress.countdown {
            padding: 60px 0px;
        }

        .pricing-box {
            -webkit-box-shadow: 0px 5px 30px -10px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 5px 30px -10px rgba(0, 0, 0, 0.1);
            padding: 35px 50px;
            border-radius: 20px;
            position: relative;
        }

        .pricing-box .plan {
            font-size: 34px;
        }

        .pricing-badge {
            position: absolute;
            top: 0;
            z-index: 999;
            right: 0;
            width: 100%;
            display: block;
            font-size: 15px;
            padding: 0;
            overflow: hidden;
            height: 100px;
        }

        .pricing-badge .badge {
            float: right;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            right: -67px;
            top: 17px;
            position: relative;
            text-align: center;
            width: 200px;
            font-size: 13px;
            margin: 0;
            padding: 7px 10px;
            font-weight: 500;
            color: #ffffff;
            background: #fb7179;
        }

        .mb-2,
        .my-2 {
            margin-bottom: .5rem !important;
        }

        p {
            line-height: 1.7;
        }


        .apply2-now-btn:hover {
            background: linear-gradient(90deg, #D5E03A, #004238);
            color: #ffffff;
            box-shadow: 0 0 16px 4px #D5E03A;
            border-color: #fff;
            transition: all 0.3s;
        }

        /* Prevent line break for International Package on large screens */
        @media (min-width: 1200px) {
            .pricing-box .f-20.highlight {
                white-space: nowrap;
            }
        }

        /* Allow wrapping and adjust font size for headings on smaller screens */
        @media (max-width: 1399.98px) {
            .pricing-box .f-20.highlight {
                white-space: normal;
                font-size: 1.3rem;
            }
        }

        /* Ensure "conditions applied" is always visible and well-spaced */
        @media (max-width: 1199.98px) {
            .pricing-box p.text-white.mt-3 {
                margin-top: 1rem !important;
                font-size: 0.95rem;
                display: block;
                text-align: center;
            }

            .pricing-box {
                padding: 25px 15px;
            }
        }

        /* Stack pricing boxes vertically on small screens */
        @media (max-width: 991.98px) {
            .pricing-box {
                margin-bottom: 2rem;
                height: auto !important;
            }
        }
    </style>

    <section class="registration-progress countdown">
        <span class="leaf"></span>
        <div class="container">
            <div class="row w-100 justify-content-start content">
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <h2 class="highlight">Frugal Innovation Forum 2025 - Conference Application Form</h2>
                    <p class="description">Theme: Climate adaptation in agriculture, food security and livelihood</p>

                    <div>
                        <p class="text-white">Over the past few years, FIF has created a platform to facilitate
                            critical conversations on youth, education, and digital financial inclusion to name a few. This
                            year, FIF 2025 will explore the theme of Climate Adaptation in Agriculture, Food Security, and
                            Livelihoods. With global priorities constantly evolving, conversations on critical issues face
                            the threat of being sidelined. As such, this 2-day residential conference will provide a
                            platform for development practitioners, climate practitioners, entrepreneurs and the larger
                            development ecosystem partners to openly discuss emerging climate challenges and climate
                            adaptation solutions grounded in the realities of the Global South.<br>
                            The conference will feature dynamic panel discussions, interactive breakout sessions, impact
                            talks, and a dedicated space for practitioners to showcase innovative, climate-adaptive
                            initiatives.<br>
                            Join us on this year’s Frugal Innovation Forum, to help facilitate collaborations for meaningful
                            scalable impact of climate-resilient solutions in agriculture, food security and livelihoods
                            across the Global South.</p>
                    </div>

                    <div>
                        <p class="text-white">
                            <i class="fa fa-calendar" style="color: #D5E03A"></i>
                            <strong>Conference Dates:</strong> 25th and 26th July, 2025
                        </p>
                    </div>

                    <div>
                        <p class="text-white">
                            <i class="fas fa-map-marker-alt" style="color: #D5E03A"></i>
                            <strong>Location:</strong> BRAC CDM, Savar, Dhaka, Bangladesh
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="register-event">
        <div class="container">
            <h2 class="event-heading text-start">Participation Fees</h2>

            <section class="section" id="pricing">
                <div class="">
                    <div class="row pt-4">
                        <div class="col-lg-4">
                            <div class="pricing-box mt-4 text-white"
                                style="background: linear-gradient(90deg, #004238, #01251f); border: 2px solid #D5E03A;">
                                <div class="" style="text-align: center;">
                                    <h4 class="f-20 highlight" style="color: #D5E03A">Local Participant</h4>
                                    <p class="text-white">25th and 26th July</p>
                                    <p class="text-white">Without Accomodation</p>

                                    <div class="pricing-plan mt-4 pt-2">
                                        <h4 class="text-muted"><span class="plan pl-3 text-white">BDT 12,000 </span>
                                        </h4>
                                        <p class="text-white mb-0">Per Participant</p>
                                    </div>
                                </div>


                                <div class="included mt-4 pt-2">
                                    <p class="mb-2 f-18 text-white text-bold"><strong>What's Included</strong></p>

                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Access to all sessions</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        2 breakfasts and 2 lunches</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-close-circle text-danger f-18 mr-2"></i><s>
                                            2 nights'
                                            stay at BCDM, Savar</s></p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-close-circle text-danger f-18 mr-2"></i><s>
                                            Airport
                                            pick and drop service</s>
                                    </p>
                                </div>





                                <div class="mt-4 pt-3" style="text-align: center;">
                                    <a href="participants/create?package=Local Package Without Accomodation&price=12000&currency=BDT"
                                        class="btn btn-primary btn-rounded apply2-now-btn"
                                        style=" border-radius: 8px; border: 3px solid #D5E03A; padding: 5px 40px 5px 40px; background: linear-gradient(90deg, #004238, #01251f);">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="pricing-box mt-4 text-white"
                                style="background: linear-gradient(90deg, #004238, #01251f); border: 2px solid #D5E03A;">
                                <div class="position-absolute top-0 start-50 translate-middle-x" style="z-index:2;">
                                    <span class="badge px-4 py-2 rounded-pill d-flex align-items-center"
                                        style="background: linear-gradient(90deg, #d7ce44, #f19e33); color: #01251f; font-weight: 600; font-size: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.08); margin-top: -18px;">
                                        <i class="fas fa-star me-2" style="color: #000000;"></i>
                                        Most Popular
                                    </span>
                                </div>
                                <div class="" style="text-align: center;">
                                    <h4 class="f-20 highlight" style="color: #D5E03A">Local Participant</h4>
                                    <p class="text-white">25th and 26th July</p>
                                    <p class="text-white">With Accomodation</p>

                                    <div class="pricing-plan mt-4 pt-2">
                                        <h4 class="text-muted"><span class="plan pl-3 text-white">BDT 24,000 </span>
                                        </h4>
                                        <p class="text-white mb-0">Per Participant</p>
                                    </div>
                                </div>


                                <div class="included mt-4 pt-2">
                                    <p class="mb-2 f-18 text-white"><strong>What's Included</strong></p>

                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Access to all sessions</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        2
                                        breakfasts, lunches and dinners</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        2 nights'
                                        stay at BCDM, Savar</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Flow in the focus: Morning yoga
                                    </p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Evening networking and cultural performance
                                    </p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-close-circle text-danger f-18 mr-2"
                                            style="color: #D5E03A"></i><s>
                                            Airport
                                            pick and drop service</s>
                                    </p>
                                </div>





                                <div class="mt-4 pt-3" style="text-align: center;">
                                    <a href="participants/create?package=Local Package With Accomodation&price=24000&currency=BDT"
                                        class="btn btn-primary btn-rounded apply2-now-btn"
                                        style=" border-radius: 8px; border: 3px solid #D5E03A; padding: 5px 40px 5px 40px; background: linear-gradient(90deg, #004238, #01251f);">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="pricing-box mt-4 text-white"
                                style="background: linear-gradient(90deg, #004238, #01251f); border: 2px solid #D5E03A;">
                                <div class="" style="text-align: center;">
                                    <h4 class="f-20 highlight" style="color: #D5E03A">International Participant</h4>
                                    <p class="text-white">25th and 26th July</p>
                                    <p class="text-white">With Accomodation</p>

                                    <div class="pricing-plan mt-4 pt-2">
                                        <h4 class="text-muted"><span class="plan pl-3 text-white">USD 360*</span>
                                        </h4>
                                        <p class="text-white mb-0">Per Participant</p>
                                    </div>
                                </div>


                                <div class="included mt-4 pt-2">
                                    <p class="mb-2 f-18 text-white"><strong>What's Included</strong></p>

                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Access to all sessions</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        2
                                        breakfasts, lunches and dinners</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        2 nights'
                                        stay at BCDM, Savar</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Flow in the focus: Morning yoga
                                    </p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Evening networking and cultural performance
                                    </p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Airport
                                        pick and drop service
                                    </p>
                                </div>


                                <div class="mt-4 pt-3" style="text-align: center;">
                                    <a href="participants/create?package=International Package With Accomodation&price=360&currency=USD"
                                        class="btn btn-primary btn-rounded apply2-now-btn"
                                        style=" border-radius: 8px; border: 3px solid #D5E03A; padding: 5px 40px 5px 40px; background: linear-gradient(90deg, #004238, #01251f);">Apply
                                        Now</a>
                                </div>
                                <p class="text-white mt-3 text-end"
                                    style="font-size: smaller; color: #D5E03A !important;">*conditions applied</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>

@endsection
@push('script')
    <script>
        $(document).ready(function() {
            var maxHeight = 0;
            $('.pricing-box').each(function() {
                var boxHeight = $(this).outerHeight();
                if (boxHeight > maxHeight) {
                    maxHeight = boxHeight;
                }
            });
            $('.pricing-box').css('height', maxHeight + 'px');
        });

        $(document).ready(function() {
            var maxHeight = 0;
            $('.included').each(function() {
                var boxHeight = $(this).outerHeight();
                if (boxHeight > maxHeight) {
                    maxHeight = boxHeight;
                }
            });
            $('.included').css('height', maxHeight + 'px');
        });
    </script>
@endpush
