@extends($activeTemplate.'layouts.frontend')
@section('content')
<style>
    .card {
    background-color: #ffbd17;
    color: var(--fimobile-card-text);
    border-radius: var(--fimobile-rounded);
    border-color: var(--fimobile-theme-bordercolor);
    box-shadow: 0 3px 10px rgb(0 0 0 / 7%), inset 0 2px 0px #ffffff;
    -webkit-box-shadow: 0 3px 10px rgb(0 0 0 / 7%), inset 0 2px 0px #ffffff;
    -moz-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.07), inset 0 2px 0px #ffffff;
}
</style>
<div class="main-container container">

            <!-- Pricing tables small -->

            <!-- Pricing tables -->
            <div class="row">
                @foreach($plans as $plan)
                <div class="col-12 col-md-4">
                    <div class="card mb-4 text-center shadow-sm">
                        <div class="card-body">
                            <i class="avatar avatar-60 bg-success-light text-success rounded-circle bi bi-heart fs-4 mb-2"></i>
                            <h5 class="text-muted mb-4">{{ __($plan->name) }}</h5>
                            <h2 class="mb-0">{{ __(showAmount($plan->price)) }} {{$general->cur_text}} <small class="text-muted">/{{ $plan->validity }} @lang('Days')</small></h2>
                            <p class="text-muted mb-3">{{ $plan->refer }} {{ $general->cur_text }}</p>
                            <p class="text-muted mb-0">
                                {{ $plan->daily_limit }} Advertisement
                                <br> 
                                <br> {{ $plan->earn}} {{$general->cur_text}} Daily Earn
                            </p>
                        </div>
                        <div class="card-footer text-center">
                        @if(auth()->user()->runningPlan && auth()->user()->plan_id == $plan->id)
                            <button class="btn btn-default btn-lg w-100">@lang('Current Plan')</button>
                        @else
                        <button class="btn btn-default btn-lg w-100 buyBtn" data-id="{{ $plan->id }}">Buy Now!</button>
                        @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <!-- main page content ends -->
<div class="modal fade" id="BuyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="post" action="{{ route('user.buyPlan') }}">
                @csrf
                <input type="hidden" name="id">
                <div class="modal-header">
                    <strong class="modal-title"> @lang('Confirmation')</strong>

                    <button type="button" class="close btn btn-sm" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    @auth
                    <strong>@lang('Are you sure to subscribe this plan')?</strong>
                        @if(auth()->user()->runningPlan)
                        <code class="d-block">@lang('If you subscribe to this one. Your old limitation will reset according to this package.')</code>
                        @endif
                    @else
                    <strong>@lang('Please login to subscribe plan')</strong>
                    @endauth
                </div>
                <div class="modal-footer">
                    @auth
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">@lang('No')</button>
                    <button type="submit" class="btn btn--base">@lang('Yes')</button>
                    @else
                    <a href="{{ route('user.login') }}" class="btn btn--base">@lang('Login')</a>
                    @endauth
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
@push('style')
    <style>
        .package-disabled{
            opacity: 0.5;
        }
    </style>
@endpush
@push('script')
<script type="text/javascript">
    (function($){
        "use strict";
        $('.buyBtn').click(function(){
            var modal = $('#BuyModal');
            modal.find('input[name=id]').val($(this).data('id'));
            modal.modal('show');
        });
    })(jQuery);
</script>
@endpush
