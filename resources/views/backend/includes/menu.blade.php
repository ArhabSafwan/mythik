@php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Request;

    $dashboard = ['dashboard'];
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

    $participants = [
        'participants.index',
        'participants.create',
        'participants.edit',
        'field-visits.index',
        'field-visits.create',
        'field-visits.edit',
        'exhibitions.index',
        'exhibitions.create',
        'exhibitions.edit',
    ];

    $invitedParticipants = ['participants-invitation.index', 'field-invitation.index', 'exhibitions-invitation.index'];

    $invitedBracParticipants = ['participants-invitation-brac.index', 'exhibitions-invitation-brac.index'];

    $paymentParticipants = ['participants-payments.index', 'field-payments.index', 'exhibitions-payments.index'];

    $contents = [
        'climate_stories.index',
        'climate_stories.create',
        'climate_stories.store',
        'climate_stories.edit',
        'speakers.index',
        'speakers.create',
        'speakers.store',
        'speakers.edit',
        'speakers.update',
    ];
    $agendas = [
        'agenda.index',
        'agenda.create',
        'agenda.store',
        'agenda.edit',
        'agenda.update',
        'agenda_details.index',
        'agenda_details.create',
        'agenda_details.store',
        'agenda_details.edit',
        'agenda_details.update',
    ];

    $newslletter = ['newsletter.index'];

    $emailLog = ['email-log.index'];

    $user = Auth::user();
    $routeName = Request::route()->getName();
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
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-shield"></i>
                <div>Administration</div>
            </a>

            <ul class="menu-sub">
                <!-- Activity Log -->
                <li class="menu-item {{ $routeName == 'activityLog.index' ? 'active' : '' }}">
                    <a href="{{ route('activityLog.index') }}" class="menu-link">
                        <div>Users Activities</div>
                    </a>
                </li>

                <!-- Users -->
                <li class="menu-item {{ Str::startsWith($routeName, 'users.') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <div>Manage Users</div>
                    </a>
                </li>

                <!-- Roles -->
                <li class="menu-item {{ Str::startsWith($routeName, 'roles.') ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}" class="menu-link">
                        <div>Manage Roles</div>
                    </a>
                </li>

                @if ($user->role_id == 1)
                    <!-- Modules -->
                    <li class="menu-item {{ Str::startsWith($routeName, 'modules.') ? 'active' : '' }}">
                        <a href="{{ route('modules.index') }}" class="menu-link">
                            <div>Manage Modules</div>
                        </a>
                    </li>

                    <!-- Permissions -->
                    <li class="menu-item {{ Str::startsWith($routeName, 'permissions.') ? 'active' : '' }}">
                        <a href="{{ route('permissions.index') }}" class="menu-link">
                            <div>Manage Permission</div>
                        </a>
                    </li>
                @endif
            </ul>
        </li>

        <!-- Participants -->
        <li class="menu-item {{ in_array($routeName, $participants) ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-notes"></i>
                <div>Applications</div>
            </a>

            <ul class="menu-sub">

                <!-- Participants -->
                <li class="menu-item {{ Str::startsWith($routeName, 'participants.') ? 'active' : '' }}">
                    <a href="{{ route('participants.index') }}" class="menu-link">
                        <div>Participants</div>
                    </a>
                </li>

                <!-- Field Visit -->
                <li class="menu-item {{ Str::startsWith($routeName, 'field-visits.') ? 'active' : '' }}">
                    <a href="{{ route('field-visits.index') }}" class="menu-link">
                        <div>Field Visit</div>
                    </a>
                </li>
                <li class="menu-item {{ Str::startsWith($routeName, 'exhibitions.') ? 'active' : '' }}">
                    <a href="{{ route('exhibitions.index') }}" class="menu-link">
                        <div>Exhibitions</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Invited Participants -->
        <li class="menu-item {{ in_array($routeName, $invitedParticipants) ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-checkup-list"></i>
                <div>Invited</div>
            </a>

            <ul class="menu-sub">

                <!-- Participants -->
                <li class="menu-item {{ Str::startsWith($routeName, 'participants-invitation.') ? 'active' : '' }}">
                    <a href="{{ route('participants-invitation.index') }}" class="menu-link">
                        <div>Participants</div>
                    </a>
                </li>

                <!-- Field Participants -->
                <li class="menu-item {{ Str::startsWith($routeName, 'field-invitation.') ? 'active' : '' }}">
                    <a href="{{ route('field-invitation.index') }}" class="menu-link">
                        <div>Field Visit</div>
                    </a>
                </li>

                <!-- Exhibitor Participants -->
                <li class="menu-item {{ Str::startsWith($routeName, 'exhibitions-invitation.') ? 'active' : '' }}">
                    <a href="{{ route('exhibitions-invitation.index') }}" class="menu-link">
                        <div>Exhibitions</div>
                    </a>
                </li>


            </ul>
        </li>
        <!-- BRAC Invited Participants -->
        <li class="menu-item {{ in_array($routeName, $invitedBracParticipants) ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-checkup-list"></i>
                <div>BRAC Invited</div>
            </a>

            <ul class="menu-sub">

                <!-- Participants -->
                <li
                    class="menu-item {{ Str::startsWith($routeName, 'participants-invitation-brac.') ? 'active' : '' }}">
                    <a href="{{ route('participants-invitation-brac.index') }}" class="menu-link">
                        <div>Participants</div>
                    </a>
                </li>

                <!-- Exhibitor Participants -->
                <li
                    class="menu-item {{ Str::startsWith($routeName, 'exhibitions-invitation-brac.') ? 'active' : '' }}">
                    <a href="{{ route('exhibitions-invitation-brac.index') }}" class="menu-link">
                        <div>Exhibitions</div>
                    </a>
                </li>


            </ul>
        </li>
        <!-- Payment Participants -->
        <li class="menu-item {{ in_array($routeName, $paymentParticipants) ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-brand-mastercard"></i>
                <div>Payment</div>
            </a>

            <ul class="menu-sub">

                <!-- Participants -->
                <li class="menu-item {{ Str::startsWith($routeName, 'participants-payments.') ? 'active' : '' }}">
                    <a href="{{ route('participants-payments.index') }}" class="menu-link">
                        <div>Participants</div>
                    </a>
                </li>

                <!-- Field Participants -->
                <li class="menu-item {{ Str::startsWith($routeName, 'field-payments.') ? 'active' : '' }}">
                    <a href="{{ route('field-payments.index') }}" class="menu-link">
                        <div>Field Visit</div>
                    </a>
                </li>

                <!-- Exhibitor Participants -->
                <li class="menu-item {{ Str::startsWith($routeName, 'exhibitions-payments.') ? 'active' : '' }}">
                    <a href="{{ route('exhibitions-payments.index') }}" class="menu-link">
                        <div>Exhibitions</div>
                    </a>
                </li>


            </ul>
        </li>
        <!-- content -->
        <li
            class="menu-item {{ in_array($routeName, $contents) || in_array($routeName, $agendas) ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-pencil"></i>
                <div>Content</div>
            </a>

            <ul class="menu-sub">
                <!-- Speakers -->
                <li class="menu-item {{ Str::startsWith($routeName, 'speakers.') ? 'active' : '' }}">
                    <a href="{{ route('speakers.index') }}" class="menu-link">
                        <div>Speakers</div>
                    </a>
                </li>
                <!-- Climate Stories -->
                <li class="menu-item {{ Str::startsWith($routeName, 'climate_stories.') ? 'active' : '' }}">
                    <a href="{{ route('climate_stories.index') }}" class="menu-link">
                        <div>Climate Stories</div>
                    </a>
                </li>
                <!-- Agenda -->
                <li class="menu-item {{ in_array($routeName, $agendas) ? 'active open' : '' }}">
                    <a href="#" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-pencil"></i>
                        <div>Agenda Manage</div>
                    </a>
                    <ul class="menu-sub">
                        <!-- Agenda -->
                        <li class="menu-item {{ Str::startsWith($routeName, 'agenda.') ? 'active' : '' }}">
                            <a href="{{ route('agenda.index') }}" class="menu-link">
                                <div>Agenda</div>
                            </a>
                        </li>

                        <!-- FAQ -->
                        <li class="menu-item {{ Str::startsWith($routeName, 'agenda_details.') ? 'active' : '' }}">
                            <a href="{{ route('agenda_details.index') }}" class="menu-link">
                                <div>Agenda Details</div>
                            </a>
                        </li>
                    </ul>

                </li>
                <!-- Field Visit -->
                <li class="menu-item {{ Str::startsWith($routeName, 'field-visits.') ? 'active' : '' }}">
                    <a href="{{ route('faq.index') }}" class="menu-link">
                        <div>FAQ</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ in_array($routeName, $newslletter) ? 'active open' : '' }}">

            <a href="{{ route('newsletter.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-message-2-down"></i>
                <div>Newsletter</div>
            </a>
        </li>

        <li class="menu-item {{ in_array($routeName, $emailLog) ? 'active open' : '' }}">

            <a href="{{ route('email-log.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail-search"></i>
                <div>Email Log</div>
            </a>
        </li>

    </ul>
</aside>
