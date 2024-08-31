<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">

</head>

<body>
  <div id="app">
    <header class="header_parent_div" style="background: grey;" >
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-between align-items-center">
            <div class="header_logo d-flex justify-content-center align-items-center">
            <a href="{{ route('admin.dashboard') }}">
              <img src="\assets\Techhood-logo.png" width="100" alt="">
              <p class="chili-red mb-4 mt-4">TECHHOOD</p></a>              
            </div>
            <div class="btn">
              @guest
          @if (Route::has('login'))
        <a class="login-button px-5 py-2" href="{{ route('login') }}">{{ __('Login') }}</a>
      @endif
        </div>
      @else
        <div class="dropdown">
          <!-- account name -->
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="navbarSupportedContent" role="button"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          </div>
    @endguest

            </div>
          </div>
        </div>
    </header>
    <div class="main-container">
      <div class="sidebar">
        <ul class="nav-list">
          <li>
            <a href="{{ route('admin.dashboard') }}">
              <i class="fa fa-dashboard"></i>
              <span class="links_name">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.sale.create') }}">
              <i class="fa fa-address-book"></i>
              <span class="links_name">Create Employee</span>
            </a>
          </li>          
          <li>
            <a href="#customers">
              <i class="fa fa-users"></i>
              <span class="links_name">Customers</span>
            </a>
          </li>
          <li>
            <a href="#hr">
              <i class="fa fa-user"></i>
              <span class="links_name">HR</span>
            </a>
          </li>
          <li>
            <a href="#work">
              <i class="fa fa-briefcase"></i>
              <span class="links_name">Work</span>
            </a>
          </li>
          <li>
            <a href="#sales">
              <i class="fa fa-money"></i>
              <span class="links_name">Sale</span>
            </a>
          </li>
          <li>
            <a href="#items">
              <i class="fa fa-cubes"></i>
              <span class="links_name">Items</span>
            </a>
          </li>
          <li>
            <a href="#tickets">
              <i class="fa fa-ticket"></i>
              <span class="links_name">Tickets</span>
            </a>
          </li>
          <li>
            <a href="#reports">
              <i class="fa fa-file"></i>
              <span class="links_name">Reports</span>
            </a>
          </li>
        </ul>
      </div>
      <main class=" col-lg-6">
        @yield('content')
      </main>
    </div>

</body>

</html>