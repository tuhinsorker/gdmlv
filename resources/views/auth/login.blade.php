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
    <link rel="shortcut icon" href="{{ (@appSetting()->favicon) ? asset('public/'.@appSetting()->favicon) : url('avatar.png')  }}">
    <link href="{{url('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/assets/dist/css/style-new.css')}}" rel="stylesheet">

</head>

<body>
    <div class="d-flex align-items-center justify-content-center text-center h-100vh">
        <div class="form-wrapper m-auto">
            <div class="form-container my-4">
                <div class="panel">

                    <a href="{{ url('/home') }}" class="sidebar-brand">
                        <img src="{{ (appSetting()->app_logo) ? asset('/public/'.appSetting()->app_logo) : url('avatar.png')  }}" >
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

                    <br>

                    <div class="panel-footer m-t-10">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>admin@gmail.com</td>
                                    <td>12345678</td>
                                    <td>Admin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- <div class="bottom-text text-center my-3">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link fw-medium" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div> --}}

              

                    

            </div>
        </div>
    </div>
    <!-- /.End of form wrapper -->
    <!--Global script(used by all pages)-->
    <script src="{{url('public/assets/plugins/jQuery/jquery.min.js')}}"></script>
    <script src="{{url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Third Party Scripts(used by this page)-->


    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function () {
                $('.page-loader-wrapper').fadeOut();
            }, 50);
            var info = $('table tbody tr');
            info.click(function() {
                var username    = $(this).children().first().text();

                var password = $(this).children().first().next().text();
               
                $("input[type=email]").val(username);
                $("input[type=password]").val(password);
            });
        });
    </script>
</body>

</html>

