@extends('frontend.fif_main')
@section('ftitle', 'Exhibition Packages')
@section('meta_tag')
<meta name="title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Exhibitor Application Form ">
<meta name="keywords" content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
<meta name="description" content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Exhibitor Application Form">
<meta property="og:description" content="FIF 2025 brings together global experts to discuss climate adaptation in agriculture, food systems, and livelihoods. Explore solutions grounded in the realities of the Global South.">
<meta property="og:image" content="{{ asset('/') }}frontend/img/logo_1.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Frugal Innovation Forum 2025">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Exhibitor Application Form">
<meta name="twitter:description" content="A global forum exploring climate adaptation in agriculture and livelihoods. Hosted by BRAC.">
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
    </style>

    <section class="registration-progress countdown">
        <span class="leaf"></span>
        <div class="container">
            <div class="row w-100 justify-content-start content">
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <h2 class="highlight">Frugal Innovation Forum 2025 - Exhibitor Application Form </h2>
                    <p class="description">Theme: Climate adaptation in agriculture, food security and livelihood</p>

                    <div>

                        <p class="text-white">Over the past few years, FIF has created a platform to facilitate critical
                            conversations on youth, education, and digital financial inclusion to name a few. This year, FIF
                            2025 will explore the theme of Climate Adaptation in Agriculture, Food Security, and
                            Livelihoods. With global priorities constantly evolving, conversations on critical issues face
                            the threat of being sidelined. As such, this 2-day residential conference will provide a
                            platform for development practitioners, climate practitioners, entrepreneurs and the larger
                            development ecosystem partners to openly discuss emerging climate challenges and climate
                            adaptation solutions grounded in the realities of the Global South.<br>
                            The conference will feature dynamic panel discussions, interactive breakout sessions, impact
                            talks, and a dedicated space for practitioners to showcase innovative, climate-adaptive
                            initiatives.<br>
                            Exhibitor Pass holders will have the opportunity to present their work through a display booth,
                            gain access to some of the sessions, and engage directly with speakers, fellow practitioners,
                            and decision-makers working in climate adaptation, agriculture, and livelihoods. This is a
                            valuable opportunity to amplify visibility, build partnerships, and explore potential
                            collaborations with like-minded actors from across the Global South.<br>
                            Join us on this year’s Frugal Innovation Forum, to help facilitate collaborations for meaningful,
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
                            <strong>Location:</strong> BRAC CDM, Savar, Bangladesh
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="register-event">
        <div class="container">
            <h2 class="event-heading text-start">Exhibition Fees</h2>

            <section class="section" id="pricing">
                <div class="justify-content-center">
                    <div class="row pt-4 justify-content-center">
                        <div class="col-lg-4">
                            <div class="pricing-box mt-4 text-white"
                                style="background: linear-gradient(90deg, #004238, #01251f); border: 2px solid #D5E03A;">
                                <div class="" style="text-align: center;">
                                    <h4 class="f-20 highlight" style="color: #D5E03A">Exhibitor Pass</h4>
                                    <p class="text-white">25th and 26th July</p>

                                    <div class="pricing-plan mt-4 pt-2">
                                        <h4 class="text-muted"><span class="plan pl-3 text-white">BDT 50,000 </span>
                                        </h4>
                                        <p class="text-white mb-0">Per exhibitor space</p>
                                    </div>
                                </div>


                                <div class="mt-4 pt-2">
                                    <p class="mb-2 f-18 text-white"><strong>What's Included</strong></p>

                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Engagement through curated sessions</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        2
                                        breakfasts, lunches and dinners</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        One exhibition booth (6ft x 6ft)</p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                         2 nights' stay for two exhibitors
                                    </p>
                                    <p class="mb-2 text-white"><i class="mdi mdi-checkbox-marked-circle f-18 mr-2"
                                            style="color: #D5E03A"></i>
                                        Networking opportunitites
                                    </p>
                                </div>





                                <div class="mt-4 pt-3" style="text-align: center;">
                                    <a href="exhibitions/create?package=Exhibitor Pass&price=50000&currency=BDT" class="btn btn-primary btn-rounded apply2-now-btn"
                                        style=" border-radius: 8px; border: 3px solid #D5E03A; padding: 5px 40px 5px 40px; background: linear-gradient(90deg, #004238, #01251f);">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>

@endsection
