@extends($activeTemplate . 'layouts.master')
@section('content')
    @php
        $kycInfo = getContent('kyc_info.content', true);
    @endphp
    <style>
        .list-group.bg-none .list-group-item {
            background-color: #fcfdfe;
            border-color: #f4fdff;
            border-radius: 14px;
            margin-left: 12px;
            margin-right: 16px;
        }
    </style>
    <!-- main page content -->
    <div class="main-container container">
        <!-- welcome user -->
        <div class="row mb-4">
            <div class="col-auto">
                <div class="avatar avatar-50 shadow rounded-10">
                    <img src="{{ url('') }}/new/assets/img/user1.jpg" alt="">
                </div>
            </div>
            <div class="col align-self-center ps-0">
                <h4 class="text-color-theme"><span class="fw-normal">Hi</span>, {{ $user->username }}</h4>
                <p class="text-muted" id="demo"></p>
                <script>
                    var myDate = new Date();
                    var hrs = myDate.getHours();

                    var greet;

                    if (hrs < 12)
                        greet = 'Good Morning';
                    else if (hrs >= 12 && hrs <= 16)
                        greet = 'Good Afternoon';
                    else if (hrs >= 16 && hrs <= 17)
                        greet = 'Good Evening';
                    else if (hrs >= 17 && hrs <= 24)
                        greet = 'Good Night';

                    document.getElementById('demo').innerHTML = '<b>' + greet + '</b>';
                </script>
            </div>
        </div>

        <!-- money request received -->
        @foreach ($transactions as $item)
            <div class="row mb-4 hideonprogress">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-44 shadow-sm rounded-10">
                                        <img src="{{ url('') }}/new/assets/img/user3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="small mb-1"><a href="" class="fw-medium">{{ $user->username }}</a>
                                        <span class="text-muted">{{ $item->details }}</span>
                                    </p>
                                    <p>{{ $item->amount + 0 }} <span class="text-muted">{{ $general->cur_text }}</span>
                                        <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-44 btn-default shadow-sm">
                                        <i class="bi bi-arrow-up-right-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-12">
                                <div class="progress bg-none h-2 hideonprogressbar" data-target="hideonprogress">
                                    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- swiper credit cards -->
        <div class="row mb-3">
            <div class="col-12 px-0">
                <div class="swiper-container cardswiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-auto align-self-center">
                                            <img src="{{ url('') }}/new/assets/img/masterocard.png" alt="">
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="small">
                                                <span class="text-uppercase size-10">Validity</span><br>
                                                <span class="text-muted">09/24</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="fw-normal mb-2">
                                                {{ $user->balance + 0 }}
                                                <span class="small text-muted">{{ $general->cur_text }}</span>
                                            </h4>
                                            <p class="mb-0 text-muted size-12">10141 0021 0001 0154</p>
                                            <p class="text-muted size-12">Debit Card</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card dark-bg">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-auto align-self-center">
                                            <img src="{{ url('') }}/new/assets/img/masterocard.png" alt="">
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="small">
                                                <span class="text-uppercase size-10">Validity</span><br>
                                                <span class="text-muted">06/25</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="fw-normal mb-2">
                                                {{ $user->balance + 0 }}
                                                <span class="small text-muted">{{ $general->cur_text }}</span>
                                            </h4>
                                            <p class="mb-0 text-muted size-12">10141 0021 0001 0154</p>
                                            <p class="text-muted size-12">Debit Card</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card theme-radial-gradient border-0">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-auto align-self-center">
                                            <i class="bi bi-wallet2"></i> Wallet
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="small">
                                                <span class="text-uppercase size-10">Validity</span><br>
                                                <span class="text-muted">Unlimited</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="fw-normal mb-2">
                                                {{ $user->balance + 0 }}
                                                <span class="small text-muted">{{ $general->cur_text }}</span>
                                            </h4>
                                            <p class="mb-0 text-muted size-12">10141 0021 0001 0154</p>
                                            <p class="text-muted size-12">Debit Card</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- offers banner -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card theme-bg text-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col align-self-center">
                                <h1>50% OFF</h1>
                                <p class="size-12 text-muted">
                                    Only for Launching Offer!
                                </p>
                                <div class="tag border-dashed border-opac">
                                    50% OFF
                                </div>
                            </div>
                            <div class="col-6 align-self-center ps-0">
                                <img src="{{ url('') }}/new/assets/img/offergraphics.png" alt=""
                                    class="mw-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dark mode switch -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="darkmodeswitch">
                            <label class="form-check-label text-muted px-2 " for="darkmodeswitch">Activate Dark
                                Mode</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Saving targets -->
        <div class="row mb-3">
            <div class="col">
                <h6 class="title">Saving Targets</h6>
            </div>
            <div class="col-auto">

            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="circle-small">
                                    <div id="circleprogressone"></div>
                                    <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                        <i class="bi bi-globe"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto align-self-center ps-0">
                                <p class="small mb-1 text-muted"> Deposit</p>
                                <p>{{ showAmount($user->deposits->sum('amount')) }} <span
                                        class="small">{{ $general->cur_text }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="circle-small">
                                    <div id="circleprogresstwo"></div>
                                    <div class="avatar avatar-30 alert-success text-success rounded-circle">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto align-self-center ps-0">
                                <p class="small mb-1 text-muted"> withdraw</p>
                                <p>{{ showAmount($user->withdrawals->where('status', 1)->sum('amount')) }}<span
                                        class="small">{{ $general->cur_text }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mb-4">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="circle-small">
                                    <div id="circleprogressone"></div>
                                    <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                        <i class="bi bi-globe"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto align-self-center ps-0">
                                <p class="small mb-1 text-muted">Balance</p>
                                <p>{{ $user->balance + 0 }}<span class="small">{{ $general->cur_text }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="circle-small">
                                    <div id="circleprogresstwo"></div>
                                    <div class="avatar avatar-30 alert-success text-success rounded-circle">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto align-self-center ps-0">
                                <p class="small mb-1 text-muted">Total Invest</p>
                                <p>{{ showAmount($user->deposits->sum('amount')) }}<span
                                        class="small">{{ $general->cur_text }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Transactions -->
        <div class="row mb-3">
            <div class="col">
                <h6 class="title">Transactions<br><small class="fw-normal text-muted">Today, <?php
                // Set the new timezone
                date_default_timezone_set('Asia/Kolkata');
                $date = date('d-m-y');
                echo $date;
                ?></small>
                </h6>
            </div>
            <div class="col-auto align-self-center">
                <a href="{{ route('user.transactions') }}" class="small">View all</a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 px-0">
                <ul class="list-group list-group-flush bg-none">
                    @foreach ($tran as $item)
                        <div class="col-12">
                            <div class="card mb-3 mx-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <div class="avatar avatar-50 shadow rounded-10 align-self-center">
                                                    <img src="{{ url('') }}/assets/images/logoIcon/logo.png"
                                                        alt="">
                                                </div>
                                                <div class="ms-3">
                                                    <p>{{ $user->firstname }} {{ $user->lastname }}</p>
                                                    <p class="small mb-1 text-muted">{{ $item->details }}</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-auto d-flex flex-column align-items-end ps-2">
                                                    <p>{{ $item->trx_type }} {{ $item->amount + 0 }}</p>
                                                    <p class="small mb-1 text-muted">Debit Card 4545</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- main page content ends -->
@endsection
@push('script')
    <script src="{{ asset('assets/admin/js/vendor/apexcharts.min.js') }}"></script>
    <script>
        (function($) {
            "use strict";
            // apex-bar-chart js
            var options = {
                series: [{
                    name: 'Clicks',
                    data: [
                        @foreach ($chart['click'] as $key => $click)
                            {{ $click }},
                        @endforeach
                    ]
                }, {
                    name: 'Earn Amount',
                    data: [
                        @foreach ($chart['amount'] as $key => $amount)
                            {{ $amount }},
                        @endforeach
                    ]
                }],
                chart: {
                    type: 'bar',
                    height: 580,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: [
                        @foreach ($chart['amount'] as $key => $amount)
                            '{{ $key }}',
                        @endforeach
                    ],
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val
                        }
                    }
                }
            };
            var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
            chart.render();

            function createCountDown(elementId, sec) {
                var tms = sec;
                var x = setInterval(function() {
                    var distance = tms * 1000;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    document.getElementById(elementId).innerHTML = days + "d: " + hours + "h " + minutes +
                        "m " + seconds + "s ";
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById(elementId).innerHTML = "{{ __('COMPLETE') }}";
                    }
                    tms--;
                }, 1000);
            }
            createCountDown('counter', {{ \Carbon\Carbon::tomorrow()->diffInSeconds() }});
        })(jQuery);
    </script>
@endpush
