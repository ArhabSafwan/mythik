<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="3DEVs it LTD">
    <meta name="keywords" content="3Devs it LTD">
    <meta name="author" content="3DEVs it LTD">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('/')}}image/favicon.png">
    <link rel="apple-touch-icon" href="{{asset('/')}}image/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}images/favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/fullcalendar/fullcalendar.css" />

    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/bootstrap-select/bootstrap-select.css" />

    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/select2/select2.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/css/pages/cards-advance.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/@form-validation/form-validation.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/libs/toastr/toastr.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/css/pages/app-calendar.css" />
    <link rel="stylesheet" href="{{asset('/')}}app-assets/vendor/css/pages/app-email.css" />
    <link rel="stylesheet" href="{{asset('/')}}summernote/summernote-lite.min.css" />
    <script src="{{asset('/')}}app-assets/js/form-layouts.js"></script>

    <!-- Custom CSS -->

    <style>
        .menu-vertical .menu-sub .menu-sub .menu-item {
            margin-left: 15px;
        }

        .toast-error {
            background-color: #f2dede;
            border-color: #ebccd1;
            color: #a94442;
        }

        .toast-error .toast-message {
            color: #a94442;
        }

        .toast-error .toast-title {
            color: #a94442;
        }

        .toast-error .toast-close-button {
            color: #a94442;
        }

        .toast-error .toast-icon {
            background: url('path/to/your/error-icon.png') no-repeat center center;
            width: 20px;
            height: 20px;
        }
    </style>

    <!-- Export Buttons CSS -->
    <style>
        .dataTables_wrapper .dt-buttons {
            float: right;
            padding-top: 15px;
            margin-left: 10px;
            margin-right: 20px;
        }

        .dataTables_wrapper .dataTables_length {
            float: left;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
        }
    </style>
    @stack('css')

    <!-- Helpers -->
    <script src="{{asset('/')}}app-assets/vendor/js/helpers.js"></script>
    <!-- <script src="{{asset('/')}}app-assets/vendor/js/template-customizer.js"></script> -->
    <script src="{{asset('/')}}app-assets/js/config.js"></script>
</head>
