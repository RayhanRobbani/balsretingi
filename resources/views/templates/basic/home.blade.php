<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>{{ $general->siteName(__($pageTitle)) }}</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="{{url('')}}/new/manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/images/logoIcon/favicon.png" sizes="180x180">
    <link rel="icon" href="assets/images/logoIcon/favicon.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/images/logoIcon/favicon.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- style css for this template -->
    <link href="{{url('')}}/new/assets/css/style.css" rel="stylesheet" id="style">
</head>
@php $gnl = App\Models\GeneralSetting::first(); @endphp
<body class="body-scroll d-flex flex-column h-100 dark-bg" data-page="splash">

    <!-- loader section -->
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
    <!-- loader section ends -->

    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100">
            <div class="col text-center align-self-center">
                <a href="landing.php" class="logo-splash">
                    <div class="loader-cube-wrap loader-cube-animate mx-auto">
                        <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="Logo">
                    </div>
                    <h2 class="text-white mt-4">{{$gnl->site_name}}</h2>
                </a>
            </div>
        </div>
    </main>




    <!-- Required jquery and libraries -->
    <script src="{{url('')}}/new/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('')}}/new/assets/js/popper.min.js"></script>
    <script src="{{url('')}}/new/assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="{{url('')}}/new/assets/js/jquery.cookie.js"></script>

    <!-- page level custom script -->
    <script src="{{url('')}}/new/assets/js/app.js"></script>

    <!-- Customized jquery file  -->
    <script src="{{url('')}}/new/assets/js/main.js"></script>
    <script src="{{url('')}}/new/assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="{{url('')}}/new/assets/js/pwa-services.js"></script>

</body>


