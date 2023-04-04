<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $general->siteName(__($pageTitle)) }}</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <!--<link href="{{ asset('assets/global/css/bootstrap.min.css') }}" rel="stylesheet">-->

    <!--<link href="{{ asset('assets/global/css/all.min.css') }}" rel="stylesheet">-->

    <link rel="stylesheet" href="{{ asset('assets/global/css/line-awesome.min.css') }}" />

    <!--<link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/lightcase.css') }}">-->

    <!--<link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/vendor/animate.min.css') }}">-->

    <!--<link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/vendor/nice-select.css') }}">-->

    <!--<link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/vendor/slick.css') }}">-->

    <!--<link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/main.css') }}">-->

    <!--<link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/custom.css') }}">-->
    @stack('style-lib')

    @stack('style')

    <link rel="stylesheet"
        href="{{ asset($activeTemplateTrue . 'css/color.php') }}?color1={{ $general->base_color }}&color2={{ $general->secondary_color }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/datatables.min.css" rel="stylesheet"/
        </head>

<body class="body-scroll" data-page="index">

    @stack('fbComment')

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


    @yield('panel')

    @include($activeTemplate . 'partials.footer')


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="{{ asset('assets/global/js/jquery-3.6.0.min.js') }}"></script>-->
    <!--<script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>-->

    <!-- lightcase plugin -->
    <!--  <script src="{{ asset($activeTemplateTrue . '/js/vendor/lightcase.js') }}"></script>-->
    <!-- custom select js -->
    <!--  <script src="{{ asset($activeTemplateTrue . '/js/vendor/jquery.nice-select.min.js') }}"></script>-->
    <!-- slick slider js -->
    <!--  <script src="{{ asset($activeTemplateTrue . '/js/vendor/slick.min.js') }}"></script>-->
    <!-- scroll animation -->
    <!--  <script src="{{ asset($activeTemplateTrue . '/js/vendor/wow.min.js') }}"></script>-->
    <!-- dashboard custom js -->
    <!--  <script src="{{ asset($activeTemplateTrue . '/js/app.js') }}"></script>-->
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

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/datatables.min.js"></script>

    @stack('script-lib')

    @stack('script')

    @include('partials.plugins')

    @include('partials.notify')


    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{ route('home') }}/change/" + $(this).val();
            });

            var inputElements = $('input,select');
            $.each(inputElements, function(index, element) {
                element = $(element);
                var type = element.attr('type');
                if (type != 'checkbox') {
                    element.closest('.form-group').find('label').attr('for', element.attr('name'));
                    element.attr('id', element.attr('name'))
                }
            });

            $('.policy').on('click', function() {
                $.get('{{ route('cookie.accept') }}', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            $.each($('input, select, textarea'), function(i, element) {

                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }

            });

            $('.showFilterBtn').on('click', function() {
                $('.responsive-filter-card').slideToggle();
            });

        })(jQuery);
    </script>

</body>

</html>
