<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/images/logoIcon/favicon.png" sizes="180x180">
    <link rel="icon" href="assets/images/logoIcon/favicon.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/images/logoIcon/favicon.png" sizes="16x16" type="image/png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> </title>
    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="{{ url('') }}/new/manifest.json" />

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">



    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap"
        rel="stylesheet">
    <!-- swiper carousel css -->
    <link rel="stylesheet" href="{{ url('') }}/new/assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">
    <!-- style css for this template -->
    <link href="{{ url('') }}/new/assets/css/style.css" rel="stylesheet" id="style">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="Logo">
                </div>
                <p class="mt-4">It's time for track budget<br><strong>Please wait...</strong></p>
            </div>
        </div>
    </div>
    <main class="container-fluid h-100">
        <div class="row h-100 overflow-auto">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto"></div>
                        <div class="col">
                            <div class="logo-small">
                                <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="">
                                <h5>{{ $general->site_name }}</h5>
                            </div>
                        </div>
                        <div class="col-auto"></div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <h1 class="mb-4 text-color-theme">Sign in</h1>
                <form class="was-validated needs-validation" novalidate action="{{ route('user.login') }}"
                    method="post">
                    @csrf
                    <div class="form-group form-floating mb-3 is-valid">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                            id="email" placeholder="Username">
                        <label class="form-control-label" for="email">Username</label>
                    </div>

                    <div class="form-group form-floating is-invalid mb-3">
                        <input type="password" class="form-control " name="password" id="password"
                            placeholder="Password">
                        <label class="form-control-label" for="password">Password</label>
                        <button type="button" class="text-danger tooltip-btn" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Enter valid Password" id="passworderror">
                            <i class="bi bi-info-circle"></i>
                        </button>
                    </div>
                    <p class="mb-3 text-center">
                        <a href="{{ route('user.password.request') }}" class="">
                            Forgot your password?
                        </a>
                    </p>

                    <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow">
                        Sign in
                    </button>
                </form>
                <p class="mb-2 text-muted">Don't have account?</p>
                <a href="{{ route('user.register') }}" target="_self" class="">
                    Sign up <i class="bi bi-arrow-right"></i>
                </a>

            </div>
            <div class="col-12 text-center mt-auto">
                <div class="row justify-content-center footer-info">
                    <a class="btn btn-lg btn-default w-100 mb-4 shadow" href="{{ route('app.apk') }}">
                        Download App
                    </a>
                    <div class="col-auto">
                        <p class="text-muted">Or you can continue with </p>
                    </div>

                    <div class="col-auto ps-0">
                        <a href="#" class="p-1"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="p-1"><i class="bi bi-google"></i></a>
                        <a href="#" class="p-1"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.notify')
    <!-- Required jquery and libraries -->
    <script src="{{ url('') }}/new/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('') }}/new/assets/js/popper.min.js"></script>
    <script src="{{ url('') }}/new/assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="{{ url('') }}/new/assets/js/jquery.cookie.js"></script>

    <!-- Customized jquery file  -->
    <script src="{{ url('') }}/new/assets/js/main.js"></script>
    <script src="{{ url('') }}/new/assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="{{ url('') }}/new/assets/js/pwa-services.js"></script>

    <!-- Chart js script -->
    <script src="{{ url('') }}/new/assets/vendor/chart-js-3.3.1/chart.min.js"></script>

    <!-- Progress circle js script -->
    <script src="{{ url('') }}/new/assets/vendor/progressbar-js/progressbar.min.js"></script>

    <!-- swiper js script -->
    <script src="{{ url('') }}/new/assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- page level custom script -->
    <script src="{{ url('') }}/new/assets/js/app.js"></script>
</body>

</html>
