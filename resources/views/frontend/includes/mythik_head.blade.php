
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link href="{{asset('/')}}frontend/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{asset('/')}}frontend/css/style.css?v=1.48" rel="stylesheet">
		<link rel="shortcut icon" href="{{asset('/')}}frontend/img/fif-logo6.png" type="image/x-icon">
		<link rel="icon" href="{{asset('/')}}frontend/img/fif-logo6.png" type="image/x-icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> -->
		<link href="{{asset('/')}}frontend/css/fontawesome-all.css" rel="stylesheet">
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
		<link href="{{asset('/')}}frontend/css/lightcase.css" rel="stylesheet">
		<link href="{{asset('/')}}frontend/css/custom.css?v=1.48" rel="stylesheet">
    	<link href="{{asset('/')}}frontend/css/responsive.css?v=1.48" rel="stylesheet">
		    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/sweetalert2/sweetalert2.css" />
			    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/toastr/toastr.css" />

	<script>

		!function(f,b,e,v,n,t,s)

		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

		n.callMethod.apply(n,arguments):n.queue.push(arguments)};

		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

		n.queue=[];t=b.createElement(e);t.async=!0;

		t.src=v;s=b.getElementsByTagName(e)[0];

		s.parentNode.insertBefore(t,s)}(window,document,'script',

		'https://connect.facebook.net/en_US/fbevents.js');


		fbq('init', '24864005089854851');

		fbq('track', 'PageView');

</script>


<noscript>
<img height="1" width="1" src="https://www.facebook.com/tr?id=24864005089854851&ev=PageView&noscript=1"/>
</noscript>

 @yield('meta_tag')

		   @stack('fcss')

	</head>
