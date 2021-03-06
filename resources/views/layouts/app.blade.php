{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}


<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CoreUI CSS -->

<link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@3.4.0/dist/css/coreui.min.css" crossorigin="anonymous">

<link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">

<style type="text/css">/* Chart.js */
  /*
   * DOM element rendering detection
   * https://davidwalsh.name/detect-node-insertion
   */
  @keyframes chartjs-render-animation {
    from { opacity: 0.99; }
    to { opacity: 1; }
  }
  
  .chartjs-render-monitor {
    animation: chartjs-render-animation 0.001s;
  }
  
  /*
   * DOM element resizing detection
   * https://github.com/marcj/css-element-queries
   */
  .chartjs-size-monitor,
  .chartjs-size-monitor-expand,
  .chartjs-size-monitor-shrink {
    position: absolute;
    direction: ltr;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    pointer-events: none;
    visibility: hidden;
    z-index: -1;
  }
  
  .chartjs-size-monitor-expand > div {
    position: absolute;
    width: 1000000px;
    height: 1000000px;
    left: 0;
    top: 0;
  }
  
  .chartjs-size-monitor-shrink > div {
    position: absolute;
    width: 200%;
    height: 200%;
    left: 0;
    top: 0;
  }
  </style>

<title>{{ config('app.name', 'Laravel') }}</title>
</head>

    <body class="c-app">


    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/index.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-info">NEW</span></a></li>
        <li class="c-sidebar-nav-title">Theme</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/colors.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Colors</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/typography.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Typography</a></li>
        <li class="c-sidebar-nav-title">Components</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="https://coreui.io/demo/free/3.4.0/#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
            </svg> Base</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/breadcrumb.html"><span class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/cards.html"><span class="c-sidebar-nav-icon"></span> Cards</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/carousel.html"><span class="c-sidebar-nav-icon"></span> Carousel</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/collapse.html"><span class="c-sidebar-nav-icon"></span> Collapse</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/forms.html"><span class="c-sidebar-nav-icon"></span> Forms</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/jumbotron.html"><span class="c-sidebar-nav-icon"></span> Jumbotron</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/list-group.html"><span class="c-sidebar-nav-icon"></span> List group</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/navs.html"><span class="c-sidebar-nav-icon"></span> Navs</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/pagination.html"><span class="c-sidebar-nav-icon"></span> Pagination</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/popovers.html"><span class="c-sidebar-nav-icon"></span> Popovers</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/progress.html"><span class="c-sidebar-nav-icon"></span> Progress</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/scrollspy.html"><span class="c-sidebar-nav-icon"></span> Scrollspy</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/switches.html"><span class="c-sidebar-nav-icon"></span> Switches</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/tables.html"><span class="c-sidebar-nav-icon"></span> Tables</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/tabs.html"><span class="c-sidebar-nav-icon"></span> Tabs</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/base/tooltips.html"><span class="c-sidebar-nav-icon"></span> Tooltips</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="https://coreui.io/demo/free/3.4.0/#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
            </svg> Buttons</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/buttons/buttons.html"><span class="c-sidebar-nav-icon"></span> Buttons</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/buttons/button-group.html"><span class="c-sidebar-nav-icon"></span> Buttons Group</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/buttons/dropdowns.html"><span class="c-sidebar-nav-icon"></span> Dropdowns</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/buttons/brand-buttons.html"><span class="c-sidebar-nav-icon"></span> Brand Buttons</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/charts.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
            </svg> Charts</a></li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="https://coreui.io/demo/free/3.4.0/#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
            </svg> Icons</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-success">Free</span></a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="https://coreui.io/demo/free/3.4.0/#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Notifications</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/notifications/alerts.html"><span class="c-sidebar-nav-icon"></span> Alerts</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/notifications/badge.html"><span class="c-sidebar-nav-icon"></span> Badge</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/notifications/modals.html"><span class="c-sidebar-nav-icon"></span> Modals</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/widgets.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
            </svg> Widgets<span class="badge badge-info">NEW</span></a></li>
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Extras</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="https://coreui.io/demo/free/3.4.0/#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
            </svg> Pages</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/login.html" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Login</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/register.html" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Register</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/404.html" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg> Error 404</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/free/3.4.0/500.html" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg> Error 500</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="https://coreui.io/" target="_top">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
            </svg> Download CoreUI</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="https://coreui.io/pro/" target="_top">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
            </svg> Try CoreUI<strong>PRO</strong></a></li>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 656px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 576px;"></div></div></ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>

    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
          <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="c-header-brand d-lg-none" href="https://coreui.io/demo/free/3.4.0/#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
          <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button>
          <ul class="c-header-nav d-md-down-none">
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="https://coreui.io/demo/free/3.4.0/#">Dashboard</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="https://coreui.io/demo/free/3.4.0/#">Users</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="https://coreui.io/demo/free/3.4.0/#">Settings</a></li>
          </ul>
          <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="https://coreui.io/demo/free/3.4.0/#">
                <svg class="c-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="https://coreui.io/demo/free/3.4.0/#">
                <svg class="c-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="https://coreui.io/demo/free/3.4.0/#">
                <svg class="c-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg></a></li>
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="https://coreui.io/demo/free/3.4.0/#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="./CoreUI Free Bootstrap Admin Template_files/6.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
                <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="https://coreui.io/demo/free/3.4.0/#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
      


        </header>
        <div class="c-body">
          <main class="c-main">



        @yield('content')

          </main>
        </div>
        

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then CoreUI JS -->

    

    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    
    <script src="https://unpkg.com/@popperjs/coreui@3.4.0"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>

    

    </body>
</html>