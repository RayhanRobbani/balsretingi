<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
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
    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100 overflow-auto">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto">
                            <a href="{{ route('user.login') }}" target="_self" class="btn btn-light btn-44"><i
                                    class="bi bi-arrow-left"></i></a>
                        </div>
                        <div class="col">
                            <div class="logo-small">
                                <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="">
                                <h5>{{ $general->site_name }}</h5>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="#" target="_self" class="btn btn-light btn-44 invisible"></a>
                        </div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <h1 class="mb-4 text-color-theme">Right here you can reset it back</h1>
                <p class="text-muted mb-4">Provide your registered email to reset your password</p>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div class="form-floating is-valid mb-3">
                        <input type="hidden" class="form-control" name="email" value="{{ $email }}"
                            placeholder="Email" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="hidden" class="form-control" name="token" value="{{ $token }}"
                            placeholder="Token" id="token">
                        <label for="token">Token</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            id="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Confirm Password" id="password_confirmation">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>
                    <button type="submit" target="_self" class="btn btn-lg btn-default w-100  shadow">Reset
                        Password</button>
                </form>
            </div>
            <div class="col-12 text-center mt-auto">
                <div class="row justify-content-center footer-info">
                    <div class="col-auto">

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
