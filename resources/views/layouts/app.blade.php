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

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container justify-content-center">               
                <a href="{{ url('/') }}" class="text-decoration-none">
        <h1 class="font-weight-bold">EMPLOYEE MANAGEMENT SYSTEM</h1>
        </a>
        </div>               
                
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

                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="navbarSupportedContent" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <div class="sidebar">
  <ul class="nav-list">
    <li>
      <a href="{{ route('admin.dashboard') }}">
        <i class="fa fa-dashboard"></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="#leads">
        <i class="fa fa-address-book"></i>
        <span class="links_name">Leads</span>
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
</body>

</html>
