<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{asset('/')}}frontend/img/logo_1.png" alt="Logo" />
        </a>
        <li class="nav-item dropdown main-menu-event mobile_apply_btn">
            <a class="nav-link dropdown-toggle   apply-now-btn {{ request()->routeIs('') ? 'active' : '' }}"
               href="#" id="applyNowDropdown" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                Apply Now
            </a>
            <ul class="dropdown-menu" aria-labelledby="applyNowDropdown">
                <li><a class="dropdown-item" href="{{ route('fconferencepackages') }}"><span>Conference</span></a></li>
                <li><a class="dropdown-item" href="{{ route('fexhibitionpackages') }}"><span>Exhibition</span></a></li>
                <li><a class="dropdown-item" href="{{ route('ffieldpackages') }}"><span>Field Visit</span></a></li>
            </ul>
        </li>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">FIF 2025</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('fabout') ? 'active' : '' }}" href="{{ route('fabout') }}">About FIF</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('fprogramme') ? 'active' : '' }}" href="{{ route('fprogramme') }}">Programme</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('fspeaker') ? 'active' : '' }}" href="{{ route('fspeaker') }}">Speakers</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('fregister') ? 'active' : '' }}" href="{{ route('fregister') }}">Registration</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('fclimate') ? 'active' : '' }}" href="{{ route('fclimate') }}">Climate Stories</a>
                </li>
                {{-- <li class="nav-item"><a class="nav-link" href="#">Travel Info</a></li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ffaq') ? 'active' : '' }}" href="{{ route('ffaq') }}">FAQ</a>
                </li>
            </ul>

            <li class="nav-item dropdown main-menu-event desktop_apply_btn">
              <a class="nav-link dropdown-toggle   apply-now-btn {{ request()->routeIs('') ? 'active' : '' }}"
                  href="#" id="applyNowDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Apply Now
              </a>
              <ul class="dropdown-menu" aria-labelledby="applyNowDropdown">
                  <li><a class="dropdown-item" href="{{ route('fconferencepackages') }}"><span>Conference</span></a></li>
                  <li><a class="dropdown-item" href="{{ route('fexhibitionpackages') }}"><span>Exhibition</span></a></li>
                  <li><a class="dropdown-item" href="{{ route('ffieldpackages') }}"><span>Field Visit</span></a></li>
              </ul>
          </li>

            <div class="d-flex align-items-center gap-3 position-relative ">
                <!-- Search -->
                <div class="search-wrapper">
                    <form class="search-form" role="search" id="staticSearchForm">
                        <input class="form-control search-input" id="staticSearchInput" type="search" placeholder="Search in site" aria-label="Search" />
                        <button type="button" class="search-toggle-btn"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <!-- Apply Now button -->

            </div>
        </div>
    </div>
</nav>
