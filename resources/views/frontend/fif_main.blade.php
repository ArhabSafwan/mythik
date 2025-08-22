<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.fif_head')
<body>
		<div class="page-wrapper">
			<!-- Preloader -->
			{{-- <div class="preloader"></div> --}}
			<!-- Main Header-->
            @include('frontend.includes.fif_header')
            @yield('fif_content')

            @include('frontend.includes.fif_footer')
		</div>
	
 		<a href="https://wa.me/8801332550461?text=Hi%2C%20I%20have%20a%20query"
       target="_blank"
       style="position: fixed; bottom: 20px; right: 20px;z-index: 1000;">
        <img src="{{ asset('frontend/images/whatsapp-img.png') }}" alt="WhatsApp" style="width: 100%; height: auto;">
    </a>
	</body>
	@include('frontend.includes.fif_script')
</html>