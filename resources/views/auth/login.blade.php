<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bdtask">
    <title>Bhulua - Bootstrap 5 Admin Template Deshboard</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/dist/img/favicon.png">
    <!--Global Styles(used by all pages)-->
    <link href="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--<link href="{{url('assets/plugins/bootstrap/css/bootstrap.rtl.min.css')}}" rel="stylesheet">-->
    <link href="{{url('assets/plugins/metisMenu/metisMenu.css')}}" rel="stylesheet">
    <!--<link href="{{url('assets/plugins/metisMenu/metisMenu-rtl.css')}}" rel="stylesheet">-->
    <link href="{{url('assets/plugins/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/plugins/typicons/src/typicons.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/plugins/themify-icons/themify-icons.min.css')}}" rel="stylesheet">
    <!--Third party Styles(used by this page)-->

    <!--Start Your Custom Style Now-->
    <link href="{{url('assets/dist/css/style-new.css')}}" rel="stylesheet">
    <!-- <link href="assets/dist/css/style.css')}}" rel="stylesheet"> -->
    <!--<link href="assets/dist/css/style.rtl.css')}}" rel="stylesheet">-->
</head>

<body>
    <div class="d-flex align-items-center justify-content-center text-center h-100vh">
        <div class="form-wrapper m-auto">
            <div class="form-container my-4">
                <div class="panel">

                    <a href="{{ url('/home') }}" class="sidebar-brand">
                        <img src="{{ (appSetting()->app_logo) ? asset('images/'.appSetting()->app_logo) : url('avatar.png')  }}" >
                        {{-- <span class="sidebar-brand_text">{{ appSetting()->title }}</span> --}}
                    </a>

                    <div class="panel-header text-center mb-3">
                        <h3 class="fs-24">Sign into your account!</h3>
                        <p class="text-muted text-center mb-0">Nice to see you! Please log in with your account.</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="register-form">
                        @csrf
                        <div class="mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback text-start" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        </div>

                        <div class="form-check mb-3 text-start">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>

                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            {{ __('Login') }}
                        </button>
                    </form>
                </div>
                <div class="bottom-text text-center my-3">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link fw-medium" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- /.End of form wrapper -->
    <!--Global script(used by all pages)-->
    <script src="{{url('assets/plugins/jQuery/jquery.min.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/plugins/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{url('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <!-- Third Party Scripts(used by this page)-->


    <!--Page Scripts(used by all page)-->
    <script src="{{url('assets/dist/js/sidebar.js')}}"></script>
</body>

</html>

