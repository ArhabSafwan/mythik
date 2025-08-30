<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.mythik_head')
<body>
		<div class="page-wrapper">
			<!-- Preloader -->
			{{-- <div class="preloader"></div> --}}
			<!-- Main Header-->
            @include('frontend.includes.mythik_header')
            @yield('mythik_content')

            @include('frontend.includes.mythik_footer')
		</div>
	</body>
	@include('frontend.includes.mythik_script')
</html>
