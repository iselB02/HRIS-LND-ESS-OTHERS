<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Employee Portal') }}</title>

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="js/customlayout.js" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/customlayout.css') }}">
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="{{ asset('images/plm-logo.svg') }}" alt="logo_img" />
            </span>
            <span class="logo_name">EMPLOYEE PORTAL</span>
            <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
            <i class="bx bx-x" id="sidebar-close"></i>
        </div>
        <div class="menu_container">
            <div class="menu_items">
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Learning and Development</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="{{ route('ipcr.index') }}" class="link flex">
                            <i class='bx bxs-user'></i>
                            <span>Individual Performance</span>
                        </a>
                    </li>
                    @php
                      $lastName = session('last_name');
                      $middleName = session('middle_name');
                      $firstName = session('first_name');
                      $userId = Session::get('user_id');
                      $lastTwoDigits = $userId ? substr($userId, -2) : null;
                    @endphp
                    @if ($lastTwoDigits === '30')
                        <li class="item">
                            <a href="{{ route('opcr.index') }}" class="link flex">
                                <i class='bx bxs-business'></i>
                                <span>Office Performance</span>
                            </a>
                        </li>
                    @endif
                    <li class="item">
                        <a href="{{ route('permittostudy.index') }}" class="link flex">
                            <i class='bx bxs-book-reader'></i>
                            <span>Permit to Study</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{ route('scholarship.index') }}" class="link flex">
                            <i class='bx bxs-donate-heart'></i>
                            <span>Scholarship</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{ route('seminartraining.index') }}" class="link flex">
                            <i class='bx bxs-chalkboard'></i>
                            <span>Seminars and Training</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <nav class="navbar flex">
        <i class="bx bx-menu" id="sidebar-open"></i>
        <div class="notifications-container">
            <i class='bx bxs-bell' id="notifications-icon"></i> 
            <!-- Dropdown for notifications -->
            <ul class="notifications-dropdown">
                <li class="dropdown-title">Notifications</li>
                <li class="divider"></li>
                @livewire('notifications')
            </ul>
        </div>
        <div class="user-profile" id="user-profile">
            <!-- User Profile Picture -->
            <div class="user-pic-container">
                <img src="{{ asset('images/test-photo.png') }}" alt="user-profile-pic" class="user-pic">
                <i id="chevron-icon" class='bx bxs-chevron-down chevron-icon'></i>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu">
                    <li>
                        <div class="user-info">
                            <img src="{{ asset('images/test-photo.png') }}" alt="user-profile-pic" class="user-pic">
                               <div class="user-details">
                                @php
                                // Retrieve user's associated employee record
                                $user = auth()->user();
                                $employee = $user->employee;
                                $position = $employee->current_position ?? '';
                                $firstName = $employee->first_name ?? '';
                                $middleName = $employee->middle_name ?? '';
                                $lastName = $employee->last_name ?? '';
                                @endphp
                                <span class="user-name">{{ $firstName }} {{ $middleName }} {{ $lastName }}</span>
                                <span class="user-title">{{ $position }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <div class="item-container">
                        <li class="item">
                            <a href=https://employee.plmerp24.cloud/dashboard class="link">
                                <i class='bx bxs-cog'></i>
                                <span>Employee Portal</span>
                            </a>
                          </li>
                       @php
                        $lastTwoDigits = $userId ? substr($userId, -2) : null;
                    @endphp

                    <!-- Example: Show the element if the last two digits of the user ID are 29 -->
                    @if ($lastTwoDigits === '29')
                        <li class="item">
                            <a href="{{ route('adminIPCR.index') }}" class="link">
                                <i class='bx bxs-paste'></i>
                                <span>Human Resources</span>
                            </a>
                        </li>
                    @endif

                  </div>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page_container">
        {{ $slot }}
        @stack('styles')
        @stack('scripts')
    </main>
    @stack('modals')
    @livewireScripts
</body>
</html>
