<!doctype html>
<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('/') }}app-assets/" data-template="vertical-menu-template">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | Mythik Admin Panel</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}image/logo.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/fonts/tabler-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/fonts/flag-icons.css">
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/css/demo.css">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/libs/node-waves/node-waves.css">
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/libs/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/libs/@form-validation/form-validation.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}app-assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="{{ asset('/') }}app-assets/vendor/js/helpers.js"></script>
    <!-- Template customizer & Theme config files -->
    <script src="{{ asset('/') }}app-assets/vendor/js/template-customizer.js"></script>
    <script src="{{ asset('/') }}app-assets/js/config.js"></script>
</head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-4 mt-2">
                <img src="{{ asset('/') }}app-assets/img/branding/logo.png" alt="" width="70px" height="70px">
              </div>
              <!-- /Logo -->
              <h4 class="mb-1 pt-2">Mythik</h4>
              <p class="mb-4">Please sign-in to your account</p>

              <form id="" class="mb-3" action="{{ route('login') }}" method="post">
                @csrf
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="contact"
                    placeholder="Enter your username or email"
                    autofocus value="{{old('contact')}}" />
                </div>
                @error('email')
                                <span class="text text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror @error('user_name')
                                <span class="text text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror @error('contact')
                                <span class="text text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    {{-- <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a> --}}
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id=""
                      class="form-control"
                      name="password"
                      placeholder="Password" />
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                  </div>
                  @error('password')
                  <span class="text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- /Content -->

    <!-- Core JS -->
    <script src="{{ asset('/') }}app-assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/js/menu.js"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('/') }}app-assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="{{ asset('/') }}app-assets/vendor/libs/@form-validation/auto-focus.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('/') }}app-assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="{{ asset('/') }}app-assets/js/pages-auth.js"></script>
  </body>
</html>
