@extends('frontend.fif_main')
@section('ftitle', 'Climate Stories Details')
@section('meta_tag')
<meta name="title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | Climate Stories">
<meta name="keywords" content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
<meta name="description" content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | Climate Stories">
<meta property="og:description" content="FIF 2025 brings together global experts to discuss climate adaptation in agriculture, food systems, and livelihoods. Explore solutions grounded in the realities of the Global South.">
<meta property="og:image" content="{{ asset('/') }}frontend/img/logo_1.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Frugal Innovation Forum 2025">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | Climate Stories">
<meta name="twitter:description" content="A global forum exploring climate adaptation in agriculture and livelihoods. Hosted by BRAC.">
<meta name="twitter:image" content="{{ asset('/') }}frontend/img/logo_1.png">
@endsection
@push('fcss')
    <style>
        html, body {
            overflow-x: hidden;
        }

        .climate-section {
            overflow-x: hidden;
        }

        .swiper-slide {
            flex-shrink: 0;
            width: auto;
        }

        .climate_image img {
            width: 100%;
            max-height: 470px;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            display: block;
        }

        .content_info h2 {
            font-size: 28px;
            font-weight: bold;
            margin-top: 20px;
        }

        .content_info .author-date {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .author-date ul {
            flex-wrap: wrap;
            gap: 1rem;
            padding-left: 0;
            margin-bottom: 0;
        }

        .author-date li {
            white-space: nowrap;
        }

        .climate-section .title {
            font-size: 30px;
            line-height: 35px;
            color: #007160;
        }
        .content_des iframe{
            width: 100% !important;
        }
        .content_des img{
            width: 100%;
        }

        @media (max-width: 767.98px) {
            .content_info h2 {
                font-size: 22px;
            }
        }
    </style>
@endpush

@section('fif_content')
    <section class="climate-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="climate_story_details">
                        <div class="climate_image">
                            <img src="{{ $data->image ? Storage::disk('public')->url($data->image) : '' }}" alt="{{ $data->title }}">
                        </div>
                        <div class="content_info mt-4">
                            <div class="author-date">
                                <ul class="list-unstyled d-flex text-uppercase">
                                    @if(isset($data->author))
                                        <li class="d-flex align-items-center me-4">
                                            <i class="fas fa-user me-2 text-success"></i>
                                            <strong>{{$data->author ?? ''}}</strong>
                                        </li>
                                    @endif
                                    @if(isset($data->date))
                                            <li class="d-flex align-items-center me-4">
                                                <i class="fas fa-calendar-alt me-2 text-success"></i>
                                                <strong>{{ \Carbon\Carbon::parse($data->date)->format('F d, Y') }}</strong>
                                            </li>
                                    @endif
                                    @if(isset($data->category))
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-folder-open me-2 text-warning"></i>
                                                <strong>{{$data->category ?? ''}}</strong>
                                            </li>
                                    @endif
                                </ul>
                            </div>
                            <h2 class="text-left title mb-3">{{$data->title ?? ""}}</h2>
                        </div>
                        <div class="content_des">
                           {!! $data->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
