@php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Request;

    $user = Auth::user();
    $routeName = Request::route()->getName();

    // Dashboard
    $dashboard = ['dashboard'];

    // Catalog
    $catalog = [
        'products.index',
        'products.create',
        'products.edit',
        'categories.index',
        'categories.create',
        'categories.edit',
        'brands.index',
        'brands.create',
        'brands.edit',
        'tags.index',
        'tags.create',
        'tags.edit',
    ];

    // Sales
    $sales = [
        'orders.index',
        'orders.show',
        'transactions.index',
    ];

    // Customers
    $customers = ['customers.index', 'customers.show'];

    // Marketing
    $marketing = [
        'coupons.index',
        'coupons.create',
        'coupons.edit',
        'newsletter.index',
    ];

    // Administration
    $administration = [
        'users.index',
        'users.create',
        'users.edit',
        'activityLog.index',
        'roles.index',
        'roles.create',
        'roles.edit',
        'roles.permission',
        'modules.index',
        'modules.create',
        'modules.edit',
        'permissions.index',
        'permissions.create',
        'permissions.edit',
    ];

    // Content Management
    $contentManagement = [
        'pages.index',
        'pages.create',
        'pages.edit',
        'blog.index',
        'blog.create',
        'blog.edit',
    ];

    // Settings
    $settings = [
        'settings.general',
        'settings.shipping',
        'settings.payment',
    ];

@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo panel-success">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <img src="{{ asset('/images/logo.png') }}" alt="Brac Innovation" width="90" height="50">
        </a>
    </div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ in_array($routeName, $dashboard) ? 'active open' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-home"></i>
                <div>Dashboards</div>
            </a>
        </li>

        <!-- Administration -->
        <li class="menu-item {{ in_array($routeName, $administration) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-shield"></i>
                <div>Administration</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $routeName == 'activityLog.index' ? 'active' : '' }}">
                    <a href="{{ route('activityLog.index') }}" class="menu-link">
                        <div>Users Activities</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'users.') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <div>Manage Users</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'roles.') ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}" class="menu-link">
                        <div>Manage Roles</div>
                    </a>
                </li>
                @if ($user->role_id == 1)
                    <li class="menu-item {{ Str::startsWith($routeName, 'modules.') ? 'active' : '' }}">
                        <a href="{{ route('modules.index') }}" class="menu-link">
                            <div>Manage Modules</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Str::startsWith($routeName, 'permissions.') ? 'active' : '' }}">
                        <a href="{{ route('permissions.index') }}" class="menu-link">
                            <div>Manage Permission</div>
                        </a>
                    </li>
                @endif
            </ul>
        </li>

        <!-- Catalog -->
        <li class="menu-item {{ in_array($routeName, $catalog) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-box"></i>
                <div>Catalog</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Str::startsWith($routeName, 'products.') ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}" class="menu-link">
                        <div>Products</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'categories.') ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}" class="menu-link">
                        <div>Categories</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'brands.') ? 'active' : '' }}">
                    <a href="{{-- route('brands.index') --}}" class="menu-link">
                        <div>Brands</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'tags.') ? 'active' : '' }}">
                    <a href="{{-- route('tags.index') --}}" class="menu-link">
                        <div>Tags</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Sales -->
        <li class="menu-item {{ in_array($routeName, $sales) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                <div>Sales</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Str::startsWith($routeName, 'orders.') ? 'active' : '' }}">
                    <a href="{{-- route('orders.index') --}}" class="menu-link">
                        <div>Orders</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'transactions.') ? 'active' : '' }}">
                    <a href="{{-- route('transactions.index') --}}" class="menu-link">
                        <div>Transactions</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Customers -->
        <li class="menu-item {{ in_array($routeName, $customers) ? 'active open' : '' }}">
            <a href="{{-- route('customers.index') --}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div>Customers</div>
            </a>
        </li>

        <!-- Marketing -->
        <li class="menu-item {{ in_array($routeName, $marketing) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-target"></i>
                <div>Marketing</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Str::startsWith($routeName, 'coupons.') ? 'active' : '' }}">
                    <a href="{{-- route('coupons.index') --}}" class="menu-link">
                        <div>Coupons</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'newsletter.') ? 'active' : '' }}">
                    <a href="{{-- route('newsletter.index') --}}" class="menu-link">
                        <div>Newsletter</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Content Management -->
        <li class="menu-item {{ in_array($routeName, $contentManagement) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-pencil"></i>
                <div>Content</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Str::startsWith($routeName, 'pages.') ? 'active' : '' }}">
                    <a href="{{-- route('pages.index') --}}" class="menu-link">
                        <div>Pages</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'blog.') ? 'active' : '' }}">
                    <a href="{{-- route('blog.index') --}}" class="menu-link">
                        <div>Blog</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Settings -->
        <li class="menu-item {{ in_array($routeName, $settings) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div>Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Str::startsWith($routeName, 'settings.general') ? 'active' : '' }}">
                    <a href="{{-- route('settings.general') --}}" class="menu-link">
                        <div>General</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'settings.shipping') ? 'active' : '' }}">
                    <a href="{{-- route('settings.shipping') --}}" class="menu-link">
                        <div>Shipping</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'settings.payment') ? 'active' : '' }}">
                    <a href="{{-- route('settings.payment') --}}" class="menu-link">
                        <div>Payment Gateways</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
