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
    <body class="font-sans antialised">
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
                {{-- <ul class="menu_item">
                  <li class="item {{ request()->is('emp_dashboard*') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}" class="link flex">
                        <i class='bx bxs-dashboard'></i>
                        <span>Dashboard</span>
                    </a>
                  </li>
                </ul> --}}
                <ul class="menu_item">
                  {{-- <div class="menu_title flex">
                    <span class="title">Employee Self Service</span>
                    <span class="line"></span>
                  </div> --}}
                  {{-- <li class="item {{ request()-> is('emp_my_profile*') ? 'active' : '' }}">
                    <a href="{{ route('my_profile.index') }}" class="link flex">
                      <i class='bx bxs-happy'></i>
                      <span>My Profile</span>
                    </a>
                  </li> --}}
                  {{-- <li class="item {{ request()->is('attendance*') ? 'active' : '' }}">
                    <a href="{{ route('attendance.index') }}" class="link flex">
                      <i class='bx bxs-calendar-check'></i>
                      <span>Attendance</span>
                    </a>
                  </li> --}}
                  {{-- <li class="item">
                    <a href="{{ route('benefitsdeductions.index') }}" class="link flex">
                      <i class='bx bxs-wallet'></i>
                      <span>Benefits & Deductions</span>
                    </a>
                  </li> --}}
                  {{-- <li class="item">
                    <a href="{{ route('announcements.index') }}" class="link flex">
                      <i class='bx bxs-megaphone'></i>
                      <span>Announcements</span>
                    </a>
                  </li> --}}
                  {{-- <li class="item">
                    <a href="{{ route('leave_management.index') }}" class="link flex">
                      <i class='bx bxs-briefcase' ></i>
                      <span>Leave Management</span>
                    </a>
                  </li> --}}
                  {{-- <li class="item">
                    <a href="{{ route('work_request.index') }}" class="link flex">
                      <i class='bx bxs-notepad' ></i>
                      <span>Work Requests</span>
                    </a>
                  </li> --}}
                  {{-- <li class="item">
                    <a href="{{ route('hrforms.index') }}" class="link flex">
                      <i class='bx bxs-file-find' ></i>
                      <span>HR Forms</span>
                    </a>
                  </li>
                </ul> --}}
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
                  <li class="item">
                    <a href="{{ route('opcr.index') }}" class="link flex">
                      <i class='bx bxs-business'></i>
                      <span>Office Performance</span>
                    </a>
                  </li>
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
                      <i class='bx bxs-chalkboard' ></i>
                      <span>Seminars and Training</span>
                    </a>
                  </li>
                  {{-- <li class="item">
                    <a href="{{ route('computeraided.index') }}" class="link flex">
                      <i class='bx bxs-chalkboard' ></i>
                      <span>Computer Aided</span>
                    </a>
                  </li> --}}
                  
                  {{-- <li class="item">
                    <a href="#" class="link flex">
                      <i class='bx bxs-spreadsheet'></i>
                      <span>Training Needs</span>
                    </a>
                  </li> --}}
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
                        <span class="user-name">Gino Carlos Miguel</span>
                        <span class="user-title">Training Specialist 1</span>
                      </div>
                    </div>
                  </li>
                  <li class="divider"></li>
                  <div class="item-container">
                    <li class="item">
                      <a href="#" class="link">
                        <i class='bx bxs-cog'></i>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="item">
                      <a href="{{ route('adminIPCR.index') }}" class="link">
                        <i class='bx bxs-paste'></i></i>
                        <span>Human Resources</span>
                      </a>
                    </li>
                  </div>
                  <li class="divider"></li>
                  <div class="item-container">
                    <form method="POST" action="{{ route('logout') }}" class="item">
                      @csrf
  
                      <button type="submit" class="link">
                        <i class='bx bx-log-out'></i>
                          {{ __('Log Out') }}
                      </button>
                    </form>
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