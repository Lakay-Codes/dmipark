@extends('layouts.master')

@section('title', 'Become A Host')

@section('style-top')
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '507371919639437');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=507371919639437&ev=PageView
&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
@endsection
@section('content')

    <?php
    if(auth()->check()) {
        $listingLink = '<a href="' . route('add-listing') . '" type="button" class="btn btn-danger btn-lg host-btn open-signup-social">Start Hosting</a>' ;
    } else {
        $listingLink = '<a href="javascript:;" type="button" class="btn btn-danger btn-lg host-btn open-signup-social">Start hosting</a>' ;
    }
    ?>


    <div class="host-banner-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="about_banner_info">
                        <h1>List Your Parking Lot With<br>DMIpark Today & Earn!</h1>
                        <p>Listing with us is super easy,fun and rewarding.</p>
                        {!!  $listingLink !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="host-tabs">
            <ul class="smooth-scroll">
                <li class="active"><a href="#list">LIST</a></li>
                <li><a href="#communicate">COMMUNICATE</a></li>
                <li><a href="#welcome">WELCOME</a></li>
            </ul>
        </div>
    </div>
    <section class="become-host-first">

            <div class="section-first-host">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="host-first-left">
                                <h2 id="list">List your parking lot</h2>
                                <h3>Begin by creating a profile for your place with all relevant information.</h3>
                                <ul>
                                    <li>Make sure you entered all detailed information like parking unit number a reasonable price</li>
                                    <li>Default pricing mechanism is selected when no pricing has beeen entered.</li>
                                    <li>You will also set the dates that your parking lot is available for rent, house rules and further specifications.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="host-first-right">
                                {{--<div class="host-dashboard">--}}
                                    {{--<div class="dasboard-header">--}}
                                        {{--<ul>--}}
                                            {{--<li><i class="fa fa-circle-o" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-circle-o" aria-hidden="true"></i></li>--}}
                                            {{--<li><i class="fa fa-circle-o" aria-hidden="true"></i></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="dashboard-host-info">--}}
                                        {{--<div class="dashboard-host-inner">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
                                                    {{--<div class="dashboard-left">--}}
                                                        {{--<img src="images/sec1image1.png"/>--}}
                                                        {{--<h2>Juan dela Cruz</h2>--}}
                                                        {{--<ul>--}}
                                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                                            {{--<li><i class="fa fa-star" aria-hidden="true"></i></li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>"My parking lot in B2117."</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
                                                    {{--<div class="dashboard-right">--}}
                                                        {{--<p>Penthouse overlooking the water</p>--}}
                                                        {{--<span>P250/ 24hours</span>--}}
                                                        {{--<h3>Marantina, Calathea Place</h3>--}}
                                                        {{--<img src="images/sec1image2.jpg"/>--}}
                                                        {{--<div class="list">--}}
                                                            {{--<a href="#">List</a>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <img src="images/dashboard-host.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-second-host">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-4">
                            <div class="host-first-left">
                                <h2 id="communicate">Guest find your parking list and request to book</h2>
                                <h3>Once a guest comes across your listing, they’ll request to book your place for specified dates.</h3>
                                <ul>
                                    <li>Once a guest sends you a reservation request, you’ll be prompted via email, sms, or dashboard message.</li>
                                    <li>You will then be able to message the guest, getting to know them better and eventually make the decision to accept or reject the request.</li>
                                    <li>If you accept, an email notification is sent to the property management office for the car information to be forwarded to the security office</li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-4 col-md-pull-8">
                            <div class="host-first-right mobile-text">
                                <img src="images/mobile.png"/>
                                {{--<div class="green-text-mobile">--}}
                                    {{--<p>Hello! We'd love to book your parking lot for today.</p>--}}
                                {{--</div>--}}
                                {{--<div class="blue-text-mobile">--}}
                                    {{--<p>Hello! Sure. Book when you're ready. It's available.</p>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-third-host">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="host-first-left">
                                <h2 id="welcome">Your guest arrives!</h2>
                                <ul>
                                    <li>Everything is done automatically.</li>
                                    <li>All guests pay electronically before their stay so no need to collect any money.</li>
                                    <li>Your payment is automatically deposited into the account of your choosing 24 hours after your guest’s check-out date. DMIpark will not charge service fee reservation.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">

                        </div>

                    </div>
                </div>
                <div class="host-guest-image">
                    <img src="images/mobile-hand.png"/>
                </div>
            </div>

    </section>
    <section class="last-section-host">
        <div class="container">
            <div class="ready-host">
                <h2>Ready to Earn?</h2>
                @if(Auth::user())
                    <a href="{{ route('add-listing') }}" >Start Hosting </a>
                @else
                    <a href="javascript:;" class="open-signup-social">Start Hosting </a>
                @endif
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $(document).on('click', '.open-signup-social', function(){
            $("#signup-social").modal('hide');
            setTimeout(function(){
                $("#signup-social").modal('show');
            }, 500);
        });
    </script>
@endsection
