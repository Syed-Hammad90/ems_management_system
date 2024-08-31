<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homepage.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-lg-5" id="form-section">
                <div class="login-logo d-flex justify-content-start align-items-center">
                    <img src="assets\Techhood-logo.png" width="150" alt="">
                    <p class="text-white fs-1 fw-bold mb-4 mt-4">TECHHOOD</p>
                </div>
                <div class="login-form">
                    <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                    @csrf
                       
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email"  name="email" value="" autofocus=""
                                    required="" placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control  @error('password') is-invalid @enderror" id="password" type="password" name="password" required=""
                                    placeholder="Password">
                            </div>
                        </div>                       
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox-signup" class="text-dark"> Remember Me </label>
                                </div>
                                <a href="{{ route('password.request') }}" class="text-dark pull-right" style="text-decoration: none;" ><i
                                        class="fa fa-lock m-r-5"></i>
                                    Forgot Password?</a>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button
                                    class="login-button p-3 btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light"
                                    type="submit">{{ __('Login') }}</button>
                            </div>
                        </div>                    

                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <p>Go to Website <a href="{{ url('/') }}"
                                        class="text-techhood-red m-l-5"><b>Home</b></a></p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-7 visible-lg background-section" ></div>
            
            <!-- don't remove -->
               <!-- <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center font-weight-bold">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->

            <!-- don't remove -->
        </div>

    </div>


</body>

</html>