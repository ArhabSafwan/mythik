@extends('frontend.fif_main')
@section('ftitle', 'Frugal Innovation Forum 2025')
@section('meta_tag')
    <meta name="title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab">
    <meta name="keywords"
        content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
    <meta name="description"
        content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab">
    <meta property="og:description"
        content="FIF 2025 brings together global experts to discuss climate adaptation in agriculture, food systems, and livelihoods. Explore solutions grounded in the realities of the Global South.">
    <meta property="og:image" content="{{ asset('/') }}frontend/img/logo_1.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Frugal Innovation Forum 2025">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab">
    <meta name="twitter:description"
        content="A global forum exploring climate adaptation in agriculture and livelihoods. Hosted by BRAC.">
    <meta name="twitter:image" content="{{ asset('/') }}frontend/img/logo_1.png">
@endsection
@section('fif_content')
    @push('fcss')
        <style>
            .highlight-container-text-container {
                text-align: center;
                margin: 29px 10px 11px 10px;

            }

            .highlight-container-text-container p {
                padding: 5px;
                color: #F99B1C;
                font-size: 16px;
            }
        </style>
    @endpush
    <section class="banner d-flex align-items-center text-white" style="background-image: url('frontend/img/banner.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center banner-overlay">
                    <img src="{{ asset('/') }}frontend/img/logo_1.png" alt="" width="272" height="316"
                        class="img-fluid">
                    <p>Adaptation from the South. For the World.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="countdown">
        <span class="leaf"></span>
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: Countdown -->
                <div class="col-lg-8 col-sm-12 col-md-12 mb-4 mb-lg-0">
                    <div class="row text-center countdown-box">
                        <div class="col-auto countdown-item ">
                            <div id="days" class="countdown-number">00</div>
                            <div class="countdown-label">Days</div>
                        </div>
                        <div class="col-auto countdown-separator">:</div>
                        <div class="col-auto countdown-item ">
                            <div id="hours" class="countdown-number">00</div>
                            <div class="countdown-label">Hours</div>
                        </div>
                        <div class="col-auto countdown-separator ">:</div>
                        <div class="col-auto countdown-item">
                            <div id="minutes" class="countdown-number">00</div>
                            <div class="countdown-label">Minutes</div>
                        </div>
                        <div class="col-auto countdown-separator ">:</div>
                        <div class="col-auto countdown-item">
                            <div id="seconds" class="countdown-number">00</div>
                            <div class="countdown-label">Seconds</div>
                        </div>
                    </div>
                </div>

                <!-- Right: Event Info -->
                <div class="col-lg-4 col-sm-12 col-md-8 text-white">
                    <div class="d-flex align-items-center mb-3 jcc">
                        <i class="fas fa-calendar-alt me-2 fs-4"></i>
                        <span class="" style="">
                            25th and 26th July, 2025
                        </span>
                    </div>
                    <div class="d-flex align-items-center jcc">
                        <i class="fas fa-map-marker-alt me-2 fs-4"></i>
                        <span class="" style="">
                            BRAC CDM, Savar, Bangladesh
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-us-section start-->
    <section class="about_section py-5 gap-4">
        <span class="vector-bg">
            <svg width="1267" height="645" viewBox="0 0 1267 645" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1267 350.197L1192.56 75.1561L978.347 263.787L1079.14 259.8C1047.89 321.325 980.9 410.004 837.125 502.463C837.125 502.463 837.125 502.463 836.987 502.463C725.914 555.945 595.593 588.049 452.37 566.67C-80.5754 507.344 -322.936 -152.934 26.4966 -551.369C252.3 -820.842 665.341 -873.018 953.856 -673.044L957.926 -678.75C945.37 -687.411 927.157 -700.541 914.256 -708.172C711.081 -838.027 443.953 -851.776 226.498 -748.868C161.992 -718.621 101.143 -677.993 48.2283 -630.354C-170.193 -436.361 -249.531 -110.794 -145.978 161.635C15.3893 593.754 511.632 752.344 891.627 571.344C891.627 571.344 891.765 571.344 892.041 571.206C892.386 571.069 892.731 570.863 893.076 570.725C893.559 570.588 894.042 570.313 894.663 569.969C899.423 567.632 904.252 565.294 908.944 562.82C910.254 562.201 911.634 561.445 913.083 560.689C966.895 532.091 1108.39 445.406 1184.07 290.597L1267 349.991V350.197Z"
                    fill="#D5E03A" fill-opacity="0.3" />
            </svg>
        </span>
        <span class="leaf"></span>
        <div class="container1">
            <div class="row py-lg-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-content">
                        <h1 class="mb-4 about_heading">About FIF</h1>
                        <p class="mb-3 about_p">
                            Over the past few years, FIF has created a platform to facilitate critical conversations on
                            youth, education
                            and digital financial inclusion to name a few. This year, FIF 2025 will explore the theme of
                            Climate Adaptation
                            in Agriculture, Food Security and Livelihoods. With global priorities constantly evolving,
                            conversations on
                            critical issues face the threat of being sidelined. As such, this 2-day residential conference
                            will provide a
                            platform for development practitioners, climate practitioners, entrepreneurs and the larger
                            development
                            ecosystem partners to openly discuss emerging climate challenges and climate adaptation
                            solutions grounded
                            in the realities of the Global South.
                        </p>
                        <p class="mb-4 about_p">
                            The event will feature immersive field visits to climate-vulnerable regions in Bangladesh,
                            dynamic panel
                            discussions, interactive breakout sessions, impact talks and a dedicated space for
                            practitioners to showcase
                            innovative, climate-adaptive initiatives.
                        </p>
                        <a href="{{ route('fabout') }}" class="btn learn_more_btn btn_color learn_more_btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="custom-slider pb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/RlxkvCsohBo?si=-gMdwsVi4n4uxCuE"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/videothum.jpg" alt="youtube">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="swiper-pagination"></div> -->
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="tentative_agenda position-relative" style="background-color: #F99B1C">
        <span class="leaf"></span>
        <div class="container">
            <div class="text-center p-5 section-header">
                <h1 class="">Agenda</h1>
                <p class="">Plan your schedule with our exciting sessions.</p>
            </div>

            <div class="nav nav-tabs mb-5" id="agendaTabs" role="tablist">
                @foreach ($agendas as $index => $agenda)
                    <button class="nav-link {{ $index === 0 ? 'active' : '' }}" id="day{{ $agenda->id }}-tab"
                        data-bs-toggle="tab" data-bs-target="#day{{ $agenda->id }}" type="button" role="tab"
                        aria-controls="day{{ $agenda->id }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                        <span>
                            <i class="fas fa-home icon-day{{ $index + 1 }}"></i>
                             {{ $agenda->day }}, {{ \Carbon\Carbon::parse($agenda->date)->format('jS F') }}
                        </span>
                    </button>
                @endforeach
            </div>

            <div class="tab-content mt-4" id="agendaTabsContent">
                @foreach ($agendas as $index => $agenda)
                    <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="day{{ $agenda->id }}"
                        role="tabpanel" aria-labelledby="day{{ $agenda->id }}-tab">
                        <div class="agenda-table position-relative">
                            @foreach ($agenda->agendaDetails as $detail)
                                <div class="agenda-item row">
                                    <div class="col-4 font_19">
                                        {{ $detail->start_time ? \Carbon\Carbon::parse($detail->start_time)->format('h:i A') : '-' }}
                                        -
                                        {{ $detail->end_time ? \Carbon\Carbon::parse($detail->end_time)->format('h:i A') : '-' }}
                                    </div>
                                    <div class="timeline-dot" @if (count($detail->description_title) > 1) style="top: 40%;" @endif>
                                    </div>
                                    <div class="col-8 font_24">
                                        @if (is_array($detail->description_title) && is_array($detail->description))
                                            @foreach ($detail->description_title as $key => $title)
                                                <div>
                                                    <strong>{{ $title }}</strong>
                                                    {{ $detail->description[$key] ?? '' }}
                                                </div>
                                            @endforeach
                                        @else
                                            <strong>{{ $detail->description_title }}</strong> {{ $detail->description }}
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="fif-section">
        FIF 2025
    </div>


    <section class="content-secton section-one">
        <div class="section-header text-center">
            <h2>2-day Conference</h2>
            <p>
                The 8th edition of Frugal Innovation Forum (FIF) 2025, taking place on 25th and 26th July at BRAC CDM, Savar
                will focus on the thematic area of climate adaptation in agriculture, food security and livelihoods.
            </p>
        </div>
        <div class="section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="content">
                            <p>
                                The 2-day residential conference will bring climate leaders, entrepreneurs, climate
                                scientists, innovators and development practitioners together and discuss solutions in the
                                global south, to scale for impact through interative plenaries, impact talks, breakout
                                sessions and peer learning.
                            </p>
                            <p class="highlight">FIF 2025 will comprise of 3 key components:</p>
                            <ul class="list">
                                <li>2-day residential conference at BRAC CDM, Savar: 25th and 26th July</li>
                                <li>Climate adaptive solutions’ exhibition during the conference: 25th and 26th July</li>
                                <li>Field visit in climate vulnerable region (Barind) in Bangladesh: 23rd and 24th July</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image text-center">
                            <img src="{{ asset('') }}/frontend/img/image1.png" alt="image1" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="content-secton section-two">
        <div class="section-header text-center">
            <h2>Frugal Solutions' Exhibition</h2>
            <p>
                One of the key components of FIF 2025 is a climate adaptive and agri-tech solutions’ showcasing space during
                the conference days at BRAC CDM, Savar. Through the exhibition, frugally developed solutions from the ground
                will be brought forward to a global audience.
            </p>
        </div>
        <div class="section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="image text-center">
                            <img src="{{ asset('') }}frontend/img/image2.png" alt="image2" class="img-fluid" />

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content">
                            <p>
                                Through the exhibition, innovators can showcase their climate adaptive products and services
                                to the attendees of the conference that will comprise of a diverse group of representatives
                                from the larger development ecosystem, to build partnerships and scale for impact.
                            </p>

                            <h4 class="content-secton-h4">Who should exhibit and what to showcase?</h4>
                            <ul class="list">
                                <li>
                                    <span class="category">Agri-tech firms</span> – end-to-end architecture of
                                    climate-smart farming (sensors → analytics → pay-per-use hardware → last-mile delivery)
                                </li>
                                <li>
                                    <span class="category">Grass-roots innovators</span> – prototypes from everyday
                                    materials, iterative design journals, community storytelling of bottom-up ingenuity
                                </li>
                                <li>
                                    <span class="category">Locally led initiatives</span> – “adaptation bundles” combining
                                    Indigenous practices, cooperative finance, shared infrastructure
                                </li>
                                <li>
                                    <span class="category">National & International NGOs (I/NGOs)</span> – Grassroots
                                    community-led adaptation solutions around issues of climate, agriculture and livelihood.
                                </li>
                                <li>
                                    <span class="category">UN agencies</span> – systems-level enablers and success cases:
                                    open datasets, financing windows, policy frameworks, and local partnerships that proved
                                    effective
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- </section>
    </div>
    </div>
    </div>
    </div>
    </section>
--}}

    <section class="content-secton section-three">
        <div class="section-header text-center">
            <h2>Climate Realities and Adaptation <br> Efforts on the Ground</h2>
            <p>
                FIF 2025 opens with a journey to the edges of Bangladesh’s climate frontline—where adaptation is not a
                concept, but a daily act of survival. In the south, where salty water has taken over the land, people are
                learning to adapt—planting vegetables above the ground and saving every drop of rain as rivers become
                undrinkable. In the dry regions of Bangladesh, on the other hand, farmers rise before dawn to chase water
                across cracked earth, adjusting centuries-old farming practices as traditional weather cues become
                unreliable.
            </p>
        </div>
        <div class="section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="content">
                            <p>
                                The realities on the ground in climate-vulnerable areas today could soon become the reality
                                for many across the globe.
                                The field visits aim to provide participants with the opportunity to see the on-ground
                                realities up close and witness adaptation efforts firsthand, to better engage with the
                                conversations at the forum driven by real stories and real insights.
                            </p>
                            <p class="highlight">Who should participate:</p>
                            <p>
                                The field visit is intended for participants with diverse regional and professional
                                perspectives on climate adaptation. We particularly encourage participation from:
                            </p>
                            <ul class="list">
                                <li> <span class="category">Expats residing in Bangladesh </span> who work in climate
                                    change or adaptation</li>
                                <li> <span class="category">Non-resident Bangladeshis </span> (NRBs)</li>
                                <li> <span class="category">Non-Bangladeshis </span> with a professional background or
                                    strong interest in climate adaptation or agriculture</li>
                            </ul>
                            <p>
                                *Selection will prioritise individuals registered for the FIF 2025  conference and working
                                independently or with organisations
                                directly involved in the climate adaptation space.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image text-center">
                            <img src="{{ asset('') }}frontend/img/image3.png" alt="image3" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="highlight-container-text-container">
                            <p class="heighlight-text text-center">
                                <span class="fw-bolder">Please Note: </span> FIF is committed to a low-waste,
                                climate-friendly event—expect simple, sustainable choices and bring a like-minded spirit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    {{-- <section class="speaker-section">
        <div class="container">
            <h2 class="text-center title">Meet The Speakers and Moderators</h2>
            <div class="row">
                <div class="col-md-4 col-sm-12 mb-4">
                    <div class="speaker-card">
                        <div class="speaker-img-wrapper">
                            <img src="{{ asset('/') }}frontend/img/speaker1.png" alt="Esther Wanjiru Kimani"
class="img-fluid speaker-img" />
</div>
<div class="speaker-name">Esther Wanjiru Kimani</div>
<div class="speaker-role">
    Kenya<br />
    Founder & CEO
</div>
<div class="speaker-company"><a href="#">Farmer Lifeline Technologies ↗</a></div>
</div>
</div>

<div class="col-md-4 col-sm-12 mb-4">
    <div class="speaker-card">
        <div class="speaker-img-wrapper">
            <img src="{{ asset('/') }}frontend/img/speaker2.png" alt="Mubasshir Tahmid"
                class="img-fluid speaker-img" />
        </div>
        <div class="speaker-name">Mubasshir Tahmid</div>
        <div class="speaker-role">
            Bangladesh<br />
            Managing Director
        </div>
        <div class="speaker-company"><a href="#">Tetra ↗</a></div>
    </div>
</div>

<div class="col-md-4 col-sm-12 mb-4">
    <div class="speaker-card">
        <div class="speaker-img-wrapper">
            <img src="{{ asset('/') }}frontend/img/speaker3.png" alt="Ghislain IRakoze"
                class="img-fluid speaker-img" />
        </div>
        <div class="speaker-name">Ghislain IRakoze</div>
        <div class="speaker-role">
            Rwanda<br />
            Founder & CEO
        </div>
        <div class="speaker-company"><a href="#">Wastezon ↗</a></div>
    </div>
</div>

<div class="learn-more text-end mt-4">
    <a href="{{ route('fspeaker') }}">Learn more ↗</a>
</div>
</div>
</section> --}}



@endsection
@push('fscript')
    <script>
        fbq('track', 'ViewContent');
        window.lintrk('track', {
            conversion_id: 20271652
        });
    </script>
@endpush
