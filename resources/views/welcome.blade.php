<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TECHHOOD</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        .grand_parent {
            width: 100%;
            height: auto;
            background: url('{{ asset("assets/bg-01.png") }}');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: right;
            position: absolute;
            z-index: -9;
        }

        .chili-red {
            color: #a71e4e;
            /* Chili Red Color */
            font-weight: bold;
        }

        .login-button {
            font-weight: bold;
            color: white;
            background-color: #a71e4e;
            /* Matching the heading color */
            border-color: #a71e4e;
        }

        .header_parent_div {
            padding-block: 33px;
            background: transparent;
            position: relative;
            z-index: 9;
        }

        .banner_main h1 {
            font-size: 64px;
            font-weight: 400;
            margin: 0;
            color: #a71e4e;
            font-family:
        }

        .banner_right_img {
            width: auto;
            height: auto;
            /* z-index: 1; */
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <section class="grand_parent">
        <header class="header_parent_div">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="header_logo d-flex justify-content-center align-items-center">
                            <img src="assets\Techhood-logo.png" width="100" alt="">
                            <p class="chili-red mb-4 mt-4">TECHHOOD</p>
                        </div>
                        <div>
                            <a href="{{ route('login') }}" class="btn login-button px-5 py-2">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="banner_main">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-5 col-12 d-flex flex-column justify-content-around">
                        <div class="banner_left_div">
                            <h1 class="chili-red">Techhood</h1>
                            <h1 class="chili-red">Employee</h1>
                            <h1 class="chili-red">Management</h1>
                            <h1 class="chili-red">System</h1>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 d-lg-flex justify-content-around">
                        <div class="banner_right_img">
                            <img src="assets\dashboard_banner.png" width="500" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (Route::has('login'))
        <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                                @auth
                                                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                                                @else
                                                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                                                    @if (Route::has('register'))
                                                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                                    @endif
                                                                @endauth
                                                            </div> -->
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>