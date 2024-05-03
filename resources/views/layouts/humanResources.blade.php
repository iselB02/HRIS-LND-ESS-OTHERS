<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'Human Resources') }}</title>

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
              <span class="logo_name">HUMAN RESOURCES</span>
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
                    <a href="{{ route('adminIPCR.index') }}" class="link flex">
                      <i class='bx bxs-user'></i>
                      <span>Individual Performance</span>
                    </a>
                  </li>
                  <li class="item">
                    <a href="{{ route('adminPermittoStudy.index') }}" class="link flex">
                      <i class='bx bxs-book-reader'></i>
                      <span>Permit to Study</span>
                    </a>
                  </li>
                  <li class="item">
                    <a href="{{ route('adminScholarship.index') }}" class="link flex">
                      <i class='bx bxs-donate-heart'></i>
                      <span>Scholarship</span>
                    </a>
                  </li>
                  <li class="item">
                    <a href="{{ route('adminSeminarsandTraining.index') }}" class="link flex">
                      <i class='bx bxs-chalkboard' ></i>
                      <span>Seminars and Training</span>
                    </a>
                  </li>
                  <li class="item">
                    <a href="{{ route('adminComputerAidedTraining.index') }}" class="link flex">
                      <i class='bx bxs-spreadsheet'></i>
                      <span>Computer Aided</span>
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
                <li>
                  <div class="scroll-container">
                    <a href="#" class="notification-link">
                      <div class="notification-content">
                        <div class="notification-icon">
                          <i class='bx bxs-book-reader'></i> <!-- Boxicon for notification -->
                        </div>
                        <div class="notification-text">
                          <span class="notification-title">Permit to Study</span> <!-- Notification Title -->
                          <span class="notification-body">Application for Permit to Study has been approved.</span> <!-- Notification Body -->
                          <span class="notification-time">10 minutes ago</span> <!-- Time Sent -->
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
                <li>
                  <div class="scroll-container">
                    <a href="#" class="notification-link">
                      <div class="notification-content">
                        <div class="notification-icon">
                          <i class='bx bxs-megaphone'></i> <!-- Boxicon for notification -->
                        </div>
                        <div class="notification-text">
                          <span class="notification-title">Announcements</span> <!-- Notification Title -->
                          <span class="notification-body">We are pleased to announce a Gender Sensitivity Training session scheduled for November 25, 2023. This training is a part of our commitment to fostering an inclusive and respectful workplace environment.</span> <!-- Notification Body -->
                          <span class="notification-time">2 days ago</span> <!-- Time Sent -->
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
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
                      <a href="{{ route('my_profile.index') }}" class="link">
                        <i class='bx bxs-paste'></i></i>
                        <span>Employee Portal</span>
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