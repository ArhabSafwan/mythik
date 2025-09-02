@props(['idSuffix' => ''])

@guest
    <a href="{{ route('customer.login') }}" class="text-white ms-2"><i class="fas fa-user"></i></a>
@else
    <div class="dropdown">
        <a href="#" class="text-white ms-2 dropdown-toggle" role="button" id="dropdownMenuLink{{ $idSuffix }}" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i> {{ Auth::user()->name }}
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink{{ $idSuffix }}">
            <li><a class="dropdown-item" href="#">My Account</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form{{ $idSuffix }}').submit();">
                    Logout
                </a>
                <form id="logout-form{{ $idSuffix }}" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
@endguest
