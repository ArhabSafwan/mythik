@extends('frontend.fif_main')
@section('ftitle', 'Climate Stories')
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
        .swiper-slide {
            flex-shrink: 0;
            width: auto;
        }
    </style>
@endpush
@section('fif_content')
    <section class="climate-section">
        <div class="container">
            <h2 class="text-center title mb-3">Climate Stories</h2>
            <div class="row g-4 mt-4">

                 <!-- CARD START -->



     {{-- <div class="col-lg-4 col-md-6">
        <div class="story-card">
          <img src="{{asset('/')}}frontend/img/Rectangle 6 (1).png" class="story-img" alt="Story 3">
          <div class="story-content">
            <div>
              <div class="story-category">Climate Consequences</div>
              <a href="#" class="story-title">New morning, no home: The fragile nature of life on the climate frontline</a>
            </div>
            <div class="story-footer">Climate Stories →</div>
          </div>
        </div>
      </div>--}}

     {{-- <div class="col-lg-4 col-md-6">
        <div class="story-card">
          <img src="{{asset('/')}}frontend/img/Rectangle 6.png" class="story-img" alt="Story 3">
          <div class="story-content">
            <div>
              <div class="story-category">Climate Consequences</div>
              <a href="#" class="story-title">How are people adapting to survive at the climate frontlines?</a>
            </div>
            <div class="story-footer">Climate Stories →</div>
          </div>
        </div>
      </div>--}}

     {{-- <div class="col-lg-4 col-md-6">
        <div class="story-card">
          <img src="{{asset('/')}}frontend/img/Rectangle 6 (3).png" class="story-img" alt="Story 1">
          <div class="story-content">
            <div>
              <div class="story-category">Water Crisis</div>
              <a href="#" class="story-title">Baring the water crisis of Barind | Climate Content Network</a>
            </div>
            <div class="story-footer">Climate Stories →</div>
          </div>
        </div>
      </div>--}}

      {{--<div class="col-lg-4 col-md-6">
        <div class="story-card">
          <img src="{{asset('/')}}frontend/img/Rectangle 6 (2).png" class="story-img" alt="Story 2">
          <div class="story-content">
            <div>
              <div class="story-category">Water Crisis</div>
              <a href="#" class="story-title">Desert of Bangladesh</a>
            </div>
            <div class="story-footer">Climate Stories →</div>
          </div>
        </div>
      </div>--}}
    {{--   <div class="col-lg-4 col-md-6">
            <div class="story-card">
              <img src="{{asset('/')}}frontend/img/Rectangle 6 (3).png" class="story-img" alt="Story 1">
              <div class="story-content">
                <div>
                  <div class="story-category">Water Crisis</div>
                  <a href="#" class="story-title">Baring the water crisis of Barind | Climate Content Network</a>
                </div>
                <div class="story-footer">Climate Stories →</div>
              </div>
            </div>
      </div>--}}
      <!-- CARD END -->

      <!-- Repeat this block for each card with different data/images -->

      {{--<div class="col-lg-4 col-md-6">
        <div class="story-card">
          <img src="{{asset('/')}}frontend/img/Rectangle 6 (2).png" class="story-img" alt="Story 2">
          <div class="story-content">
            <div>
              <div class="story-category">Water Crisis</div>
              <a href="#" class="story-title">Desert of Bangladesh</a>
            </div>
            <div class="story-footer">Climate Stories →</div>
          </div>
        </div>
      </div>--}}

     {{-- <div class="col-lg-4 col-md-6">
        <div class="story-card">
          <img src="{{asset('/')}}frontend/img/Rectangle 6 (1).png" class="story-img" alt="Story 3">
          <div class="story-content">
            <div>
              <div class="story-category">Climate Consequences</div>
              <a href="#" class="story-title">New morning, no home: The fragile nature of life on the climate frontline</a>
            </div>
            <div class="story-footer">Climate Stories →</div>
          </div>
        </div>
      </div>--}}

              {{--  --------------------}}
                <div class="col-lg-12 position-relative mb-4">
                    <div class="swiper climateswiper custom-slider pb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/Kf8SgJlw-Cw?si=cKx9J71A4C0Ooc4N"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/Baring-the-water-crisis.jpg"
                                            alt="youtube">
                                    </a>
                                    <h5 class="story-title mt-2">Baring the water crisis of Barind | Climate Content Network
                                        | BRAC</h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/dKuE3MQXd8w?si=gceT7QTcshAatTq-"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/Desert-of-Bangladesh.jpg"
                                            alt="youtube">
                                    </a>
                                    <h5 class="story-title mt-2">Desert of Bangladesh | BRAC</h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/pLWc6Cy7fnA?si=m5Ec7Owv006vWOhp"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/New-morning,-no-home.jpg"
                                            alt="youtube">
                                    </a>
                                    <h5 class="story-title mt-2">New morning, no home: The fragile nature of life on the
                                        climate frontline | BRAC</h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/pp2dXvxAzjw?si=qxY9bDiGEjIce0EA"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/How-are-people-adapting.jpg"
                                            alt="youtube">
                                    </a>
                                    <h5 class="story-title mt-2">How are people adapting to survive at the climate
                                        frontlines? | On the ground with Asif Saleh | BRAC
                                    </h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/NgmtbNcjN58?si=Px0mvkNY_TUDHHLH"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/Climate-crisis.jpg" alt="youtube">
                                    </a>
                                    <h5 class="story-title mt-2">Climate crisis: Disappearing land in Bangladesh | BRAC</h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/hWY4KZaTOos?si=CNOfkES6DEx6AiaJ"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/Climate-smart-agriculture-in-Khulna.jpg"
                                            alt="youtube">
                                    </a>
                                    <h5 class="story-title mt-2">Climate-smart agriculture in Khulna, Satkhira & Sirajganj |
                                        BRAC</h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/EMyVzEw2-C8?si=u3BTi_xlE0EZG73R"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/Sunflowers-of-Patuakhali.jpg"
                                            alt="youtube">
                                    </a>
                                    <h5 class="story-title mt-2">Sunflowers of Patuakhali | BRAC</h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/-sWZesjm5UE?si=xurzjvJb5UedkP2X"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/The-Piped-Water-Network.jpg"
                                            alt="youtube">
                                    </a>
                                    <h5 class="story-title mt-2">​The Piped Water Network initiative at Chittagong Hill
                                        Tracts, Bangladesh

                                        W</h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="https://www.youtube.com/embed/MYRC49Llt3g?si=E66wDtQQUkbO_VCN"
                                        data-rel="lightcase">
                                        <img src="{{ asset('/') }}frontend/images/Climate-crisis-and-the-changing-.jpg"
                                            alt="youtube">
                                    </a>
                                    <h5 class="story-title mt-2">Climate crisis and the changing aspirations | BRAC</h5>
                                </div>
                            </div>
                        </div>
                        <div class="navigation d-flex justify-content-between">
                            <div class="swiper-button-next1">
                                <svg width="77" height="12" viewBox="0 0 77 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M76.5 10.2857V7.71429H5.38096L10.7619 2.57143L9.41667 0L0 9L9.41667 18L10.7619 15.4286L5.38096 10.2857H76.5Z"
                                        fill="#007160" />
                                </svg>

                            </div>
                            <div class="swiper-button-prev1">
                                <svg width="77" height="12" viewBox="0 0 77 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.5 10.2857V7.71429H71.619L66.2381 2.57143L67.5833 0L77 9L67.5833 18L66.2381 15.4286L71.619 10.2857H0.5Z"
                                        fill="#007160" />
                                </svg>
                            </div>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>

                </div>
                @if(!empty($data) && $data->isNotEmpty())
                    @foreach($data as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="story-card">
                                {{-- <img src="{{ $item->image ? Storage::url($item->image) : '' }}" class="story-img" alt="Story 1"> --}}
                               <img src="{{ $item->image ? Storage::disk('public')->url($item->image) : '' }}" class="story-img" alt="{{$item->title ?? ''}}" />

                                <div class="story-content">
                                    <div>
                                        <div class="story-category text-capitalize">{{ $item->category ?? '' }}</div>
                                        <a href="{{route('fclimateDetails',$item->slug)}}" class="story-title">{{$item->title ?? ''}}</a>
                                    </div>
                                    <div class="story-footer">Climate Stories →</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>
    </section>


@endsection
