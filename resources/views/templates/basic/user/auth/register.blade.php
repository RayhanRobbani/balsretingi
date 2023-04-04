<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> </title>
    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="{{url('')}}/new/manifest.json" />

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
    <!-- swiper carousel css -->
    <link rel="stylesheet" href="{{url('')}}/new/assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">
    <!-- style css for this template -->
    <link href="{{url('')}}/new/assets/css/style.css" rel="stylesheet" id="style">
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
                <form class="was-validated" action="{{ route('user.register') }}" method="post">
                    @csrf
                    @if(session()->get('reference') != null)
                    <div class="form-floating is-valid mb-3">
                        <input type="text" class="form-control" value="{{session()->get('reference')}}" placeholder="Username" readonly
                            id="username">
                        <label for="username">Refer Id</label>
                    </div>
                    @endif
                    <div class="form-floating is-valid mb-3">
                        <input type="text" class="form-control checkUser" name="username" value="{{old('username')}}" placeholder="Username"
                            id="username">
                            <small class="text-danger usernameExist"></small>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <select name="country" class="form-select form--select" required>
                             @foreach($countries as $key => $country)
                                <option data-mobile_code="{{ $country->dial_code }}" value="{{ $country->country }}" data-code="{{ $key }}">{{ __($country->country) }}</option>
                            @endforeach
                            
                        </select>
                        <label for="country">Contry</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <div class="input-group ">
                            <span class="input-group-text mobile-code">
                                
                            </span>
                            <input type="hidden" name="mobile_code">
                            <input type="hidden" name="country_code">
                            <input type="number" name="mobile" value="{{ old('mobile') }}" class="form-control form--control checkUser" required>
                        </div>
                        <small class="text-danger mobileExist"></small>
                         
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="text" class="form-control" name="email" value="{{old('eamil') }}"
                            placeholder="Email or Phone" id="emailphone">
                        <label for="emailphone">Email or Phone</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="password" class="form-control" name="password" value="" placeholder="Password"
                            id="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating is-invalid mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"  id="confirmpassword">
                        <label for="confirmpassword">Confirm Password</label>
                        <button type="button" class="btn btn-link text-danger tooltip-btn" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Enter valid Password" id="passworderror">
                            <i class="bi bi-info-circle"></i>
                        </button>
                    </div>
                    <p class="mb-3"><span class="text-muted">By clicking on Signup button, you are agree to our</span> <a
                            href="#">Terms and Conditions</a></p>
                    <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow"">
                        Sign up
                    </button>
                </form>
            </div>
            <div class="col-12 text-center mt-auto">
                <div class="row justify-content-center footer-info">
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
    <div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="existModalLongTitle">@lang('You are with us')</h5>
        <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i class="las la-times"></i>
        </span>
      </div>
      <div class="modal-body">
        <h6 class="text-center">@lang('You already have an account please Login ')</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">@lang('Close')</button>
        <a href="{{ route('user.login') }}" class="btn btn--base">@lang('Login')</a>
      </div>
    </div>
  </div>
</div>
    @include('partials.notify')
    <!-- Required jquery and libraries -->
    <script src="{{url('')}}/new/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('')}}/new/assets/js/popper.min.js"></script>
    <script src="{{url('')}}/new/assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="{{url('')}}/new/assets/js/jquery.cookie.js"></script>

    <!-- Customized jquery file  -->
    <script src="{{url('')}}/new/assets/js/main.js"></script>
    <script src="{{url('')}}/new/assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="{{url('')}}/new/assets/js/pwa-services.js"></script>

    <!-- Chart js script -->
    <script src="{{url('')}}/new/assets/vendor/chart-js-3.3.1/chart.min.js"></script>

    <!-- Progress circle js script -->
    <script src="{{url('')}}/new/assets/vendor/progressbar-js/progressbar.min.js"></script>

    <!-- swiper js script -->
    <script src="{{url('')}}/new/assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- page level custom script -->
    <script src="{{url('')}}/new/assets/js/app.js"></script>


<style>
    .country-code .input-group-text{
        background: #fff !important;
    }
    .country-code select{
        border: none;
    }
    .country-code select:focus{
        border: none;
        outline: none;
    }
</style>

<script src="{{ asset('assets/global/js/secure_password.js') }}"></script>

    <script>
      "use strict";
        (function ($) {
            @if($mobile_code)
            $(`option[data-code={{ $mobile_code }}]`).attr('selected','');
            @endif

            $('select[name=country]').change(function(){
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            @if($general->secure_password)
                $('input[name=password]').on('input',function(){
                    secure_password($(this));
                });

                $('[name=password]').focus(function () {
                    $(this).closest('.form-group').addClass('hover-input-popup');
                });

                $('[name=password]').focusout(function () {
                    $(this).closest('.form-group').removeClass('hover-input-popup');
                });


            @endif

            $('.checkUser').on('focusout',function(e){
                var url = '{{ route('user.checkUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {mobile:mobile,_token:token}
                }
                if ($(this).attr('name') == 'email') {
                    var data = {email:value,_token:token}
                }
                if ($(this).attr('name') == 'username') {
                    var data = {username:value,_token:token}
                }
                $.post(url,data,function(response) {
                  if (response.data != false && response.type == 'email') {
                    $('#existModalCenter').modal('show');
                  }else if(response.data != false){
                    $(`.${response.type}Exist`).text(`${response.type} already exist`);
                  }else{
                    $(`.${response.type}Exist`).text('');
                  }
                });
            });
        })(jQuery);

    </script>
</body>

</html>