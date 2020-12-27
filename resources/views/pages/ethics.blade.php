@extends('layouts.master')

@section('title', 'Our Standards')

@section('content')
    <!-- Slick -->
    {{--<link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">--}}
    <!-- Custom -->
    {{--<link rel="stylesheet" href="{{ asset('css/style-ethics.css') }}">--}}
    <!-- Mobile -->
    {{--<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">--}}

    <section class="page-cotnent ethics-page">
        {{--<div class="ethics-banner">--}}
            {{--<div class="container">--}}
                {{--<div class="ethics-banner-text">--}}
                    {{--<h1>Ethics, Trust, & Reliability</h1>--}}
                    {{--<p>At DMIPARK, we aim to efficiently facilitate a seamless booking and renting out parking spaces.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="ethics-banner">
            <div class="container">
                <div class="ethics-banner-text">
                    <h1>Ethics, Trust, &amp; Hospitality</h1>
                    <p>At DMIPARK, we aim to efficiently facilitate a seamless booking and renting out parking spaces.</p>
                </div>
            </div>
        </div>

        <div class="ethics-section6">
            <div class="container">
                <h1 class="ethics-section6-title">DMIpark is a safe and secure system that allows you to worry about the fun stuff</h1>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 ethics-section6-fullwidth-box">
                        <div class="ethics-section6-box">
                            <div class="ethics-section6-box-img-wrap">
                                <div class="ethics-section6-box-img">
                                    <img src="{{ asset('images/payments icon.png') }}">
                                </div>
                            </div>
                            <h2>Payments</h2>
                            <p>Guests pay through DMIpark when they book a parking slot. Hosts receive payment through DMIpark 24 hours after guest check-out.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 ethics-section6-fullwidth-box">
                        <div class="ethics-section6-box">
                            <div class="ethics-section6-box-img-wrap">
                                <div class="ethics-section6-box-img">
                                    <img src="{{ asset('images/verification icon.png') }}">
                                </div>
                            </div>
                            <h2>Verification</h2>
                            <p>Guests and hosts are able to verify themselves using a government approved ID or other online profiles.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 ethics-section6-fullwidth-box">
                        <div class="ethics-section6-box">
                            <div class="ethics-section6-box-img-wrap">
                                <div class="ethics-section6-box-img">
                                    <img src="{{ asset('images/messaging icon.png') }}">
                                </div>
                            </div>
                            <h2>Messaging</h2>
                            <p>Easily message hosts or guests to learn more about them, their way to their parking slot. </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 ethics-section6-fullwidth-box">
                        <div class="ethics-section6-box">
                            <div class="ethics-section6-box-img-wrap">
                                <div class="ethics-section6-box-img">
                                    <img src="{{ asset('images/reviews icon.png') }}">
                                </div>
                            </div>
                            <h2>Reviews</h2>
                            <p>What better way to learn about your potential host or guest than from confirmed reviews.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /slider -->

@endsection
