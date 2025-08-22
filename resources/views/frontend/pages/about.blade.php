@extends('frontend.fif_main')
@section('ftitle', 'About FIF')
@section('meta_tag')
<meta name="title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | About FIF">
<meta name="keywords" content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
<meta name="description" content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | About FIF">
<meta property="og:description" content="FIF 2025 brings together global experts to discuss climate adaptation in agriculture, food systems, and livelihoods. Explore solutions grounded in the realities of the Global South.">
<meta property="og:image" content="{{ asset('/') }}frontend/img/logo_1.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Frugal Innovation Forum 2025">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | About FIF">
<meta name="twitter:description" content="A global forum exploring climate adaptation in agriculture and livelihoods. Hosted by BRAC.">
<meta name="twitter:image" content="{{ asset('/') }}frontend/img/logo_1.png">
@endsection
@section('fif_content') 
<section class="about_section about-page py-5 gap-4" style="background-image: url('{{ asset('frontend/images/about-image.jpg') }}'); background-repeat: no-repeat; background-size: cover; width: 100%;">
  {{-- <span class="vector-bg">
          <svg width="1267" height="645" viewBox="0 0 1267 645" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1267 350.197L1192.56 75.1561L978.347 263.787L1079.14 259.8C1047.89 321.325 980.9 410.004 837.125 502.463C837.125 502.463 837.125 502.463 836.987 502.463C725.914 555.945 595.593 588.049 452.37 566.67C-80.5754 507.344 -322.936 -152.934 26.4966 -551.369C252.3 -820.842 665.341 -873.018 953.856 -673.044L957.926 -678.75C945.37 -687.411 927.157 -700.541 914.256 -708.172C711.081 -838.027 443.953 -851.776 226.498 -748.868C161.992 -718.621 101.143 -677.993 48.2283 -630.354C-170.193 -436.361 -249.531 -110.794 -145.978 161.635C15.3893 593.754 511.632 752.344 891.627 571.344C891.627 571.344 891.765 571.344 892.041 571.206C892.386 571.069 892.731 570.863 893.076 570.725C893.559 570.588 894.042 570.313 894.663 569.969C899.423 567.632 904.252 565.294 908.944 562.82C910.254 562.201 911.634 561.445 913.083 560.689C966.895 532.091 1108.39 445.406 1184.07 290.597L1267 349.991V350.197Z" fill="#D5E03A" fill-opacity="0.3"/>
          </svg>
        </span> --}}
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6">
                    <h1 class="mb-4 about_heading">About FIF</h1>
                    <p class="mb-3 about_p">
                        Over the past few years, FIF has created a platform to facilitate critical conversations on youth, education,
                        and digital financial inclusion to name a few. This year, FIF 2025 will explore the theme of Climate Adaptation
                        in Agriculture, Food Security, and Livelihoods. With global priorities constantly evolving, conversations on
                        critical issues face the threat of being sidelined. As such, this 2-day residential conference will provide a
                        platform for development practitioners, climate practitioners, entrepreneurs and the larger development
                        ecosystem partners to openly discuss emerging climate challenges and climate adaptation solutions grounded
                        in the realities of the Global South.
                    </p>
                    <p class="mb-4 about_p">
                        The event will feature immersive field visits to climate-vulnerable regions in Bangladesh, dynamic panel
                        discussions, interactive breakout sessions, impact talks, and a dedicated space for practitioners to showcase
                        innovative, climate-adaptive initiatives.
                    </p>
                    {{-- <a href="{{ route('fregister') }}" class="btn learn_more_btn btn_color learn_more_btn">Apply Now</a> --}}
                </div>
            </div>
        </div>
    </section>
  <!-- Previous FIF -->
  {{-- <section class="previous-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/7ZBK539xjao?si=SOyfP7ESzLMX40it" title="Panel Video" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h2>FIF 2022</h2>
          <p class="description">Check out our previous editions and their highlights!</p>
          <a href="#" class="btn btn-about mt-2" style="width: fit-content;">Visit Website</a>
        </div>
      </div>

      <!-- Video Thumbnails -->
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <div class="video-card">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/7ZBK539xjao?si=SOyfP7ESzLMX40it" title="FIF 2019" allowfullscreen></iframe>
            </div>
            <div class="card-body bg-none text-start">
              <p class="mb-1">FIF 2019</p>
              <h5 class="">900+ Attendees</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="video-card">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/7ZBK539xjao?si=SOyfP7ESzLMX40it" title="FIF 2017" allowfullscreen></iframe>
            </div>
            <div class="card-body bg-none text-start">
              <p class="mb-1 ">FIF 2017</p>
              <h5 class=" ">700+ Attendees</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="video-card">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/7ZBK539xjao?si=SOyfP7ESzLMX40it" title="FIF 2016" allowfullscreen></iframe>
            </div>
           <div class="card-body bg-none text-start">
              <p class="mb-1 ">FIF 2018</p>
              <h5 class=" ">500+ Attendees</h5>
            </div>
          </div>
        </div>
         <div class="col-md-4 mb-4">
          <div class="video-card">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/7ZBK539xjao?si=SOyfP7ESzLMX40it" title="FIF 2019" allowfullscreen></iframe>
            </div>
            <div class="card-body bg-none text-start">
              <p class="mb-1">FIF 2015</p>
              <h5 class="">900+ Attendees</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="video-card">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/7ZBK539xjao?si=SOyfP7ESzLMX40it" title="FIF 2017" allowfullscreen></iframe>
            </div>
            <div class="card-body bg-none text-start">
              <p class="mb-1 ">FIF 2014</p>
              <h5 class=" ">700+ Attendees</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="video-card">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/7ZBK539xjao?si=SOyfP7ESzLMX40it" title="FIF 2016" allowfullscreen></iframe>
            </div>
           <div class="card-body bg-none text-start">
              <p class="mb-1 ">FIF 2013</p>
              <h5 class=" ">500+ Attendees</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
<section class="gallery-container">
  <div class="container">
    <h2 class="gallery-title pb-4">Glimpse from the event</h2>
    <div class="row g-3">
      <!-- Repeat this column for each image -->
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5192 (2).png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5193 (2).png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5194 (2).png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5192 (1).png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5193 (1).png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5194 (1).png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
       <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5192.png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5193.png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5194.png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5195 (2).png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5195 (1).png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <img src="{{asset('/')}}frontend/img/Rectangle 5195.png" alt="Event Photo" class="gallery-img img-fluid">
      </div>
      <!-- Add more image blocks as needed -->
    </div>
  </div>
</section>



@endsection