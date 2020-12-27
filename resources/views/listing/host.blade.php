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
        $listingLink = '<a href="' . route('add-listing') . '" type="button" class="btn btn-danger btn-lg host-btn">Start Hosting</a>' ;
    } else {
        $listingLink = '<a href="" type="button" class="btn btn-danger btn-lg host-btn" data-toggle="modal" data-target="#signup-social">Become a Host</a>' ;
    }
    ?>
    <div class="host_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="host_banner_info become_a_host_btn">
                        <h1>List Your Parking Lot With<br>DMIpark Today & Earn!</h1>
                        <p>Listing with us is super easy,fun and rewarding.</p>
                        {!!  $listingLink !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container host_center_row">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <span>1</span>
                </p>
                <h3 class="text-center">
                    List your parking lot
                </h3>
                <h4>
                    Begin by creating a profile for your place with all relevant information.
                </h4>
            </div>
            <div class="col-md-4">
                <div class="img-section text-center">
                    <img src="{{url('')}}/style/assets/img/1.png" alt="" class="image-icon">

                    <p >Make sure you indiacate the detailed information like parking unit number, location a reasonable price.</p>
                    <span class="separator-host"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-section text-center">
                    <img src="{{url('')}}/style/assets/img/2..png" alt="" class="image-icon">

                    <p>Default pricing mechanism is selected when no pricing has beeen entered.</p>
                    <span class="separator-host"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-section text-center">
                    <img src="{{url('')}}/style/assets/img/3..png" alt="" class="image-icon">

                    <p>You will also set the dates and time that your parking lot is available for rent, house rules and further specifications.</p>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container host_post">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
                {{--<span></span>--}}
                {{--<h2>What's in a listing?</h2>--}}
                {{--<p>You'll fill out a description,take and upload--}}
                    {{--a resonable price.Your listing helps--}}
                    {{--guest get a sense of what your parking like.--}}
                {{--</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<span></span>--}}
                {{--<h2>Who can book</h2>--}}
                {{--<p>you set availability and house rules for--}}
                    {{--your listing.Host controls and calender--}}
                    {{--settings can help make hosting easier.--}}
                {{--</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<span></span>--}}
                {{--<h2>We're here to help</h2>--}}
                {{--<p>Form getting your home ready and choosing a--}}
                    {{--price,to understanding your responsibilities--}}
                    {{--under local laws-we'have got tools and--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container host_center_row">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <span>2</span>
                </p>
                <h3 class="text-center">
                    Guest find your parking and request to book
                </h3>
                <h4>Once a guest comes across your listing, they’ll request to book your parking lot for specified dates and times.</h4>
            </div>
            <div class="col-md-4">
                <div class="img-section text-center">
                    <img src="{{url('')}}/style/assets/img/4.png" alt="" class="image-icon">

                    <p>Once a guest sends you a reservation request, you’ll be prompted via email, sms, or dashboard message.</p>
                    <span class="separator-host"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-section text-center">
                    <img src="{{url('')}}/style/assets/img/5..png" alt="" class="image-icon">

                    <p>You will then be able to message the guest, getting to know them better and eventually make the decision to accept or reject the request.</p>
                    <span class="separator-host"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-section text-center">
                    <img src="{{url('')}}/style/assets/img/6.png" alt="" class="image-icon">

                    <p>If you accept, an email notification is sent to the property management office for the car information to be forwarded to the security office.</p>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="container host_post">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
                {{--<span></span>--}}
                {{--<h3>What's in a listing?</h3>--}}
                {{--<p>You'll fill out a description,take and upload--}}
                    {{--photos,and pick a price.Your listing helps--}}
                    {{--guest get a sense of what your placeis like.--}}
                {{--</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<span></span>--}}
                {{--<h3>Who can book</h3>--}}
                {{--<p>you set availability and house rules for--}}
                    {{--your listing.Host controls and calender--}}
                    {{--settings can help make hosting easier.--}}
                {{--</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<span></span>--}}
                {{--<h3>We're here to help</h3>--}}
                {{--<p>Form getting your home ready and choosing a--}}
                    {{--price,to understanding your responsibilities--}}
                    {{--under local laws-we'have got tools and--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container host_center_row">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <span>3</span>
                </p>
                <h3 class="text-center">
                    Your guest arrives and parks!
                </h3>
            </div>
            <div class="col-md-4">
                <div class="img-section text-center">
                    <img src="{{url('')}}/style/assets/img/7.png" alt="" class="image-icon">

                    <p>Nothing else to be done. Processing is automated.</p>
                    <span class="separator-host"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-section text-center">
                    <img src="{{url('')}}/style/assets/img/8.png" alt="" class="image-icon">

                    <p>All guests pay electronically before their stay so no need to collect any money.</p>
                    <span class="separator-host"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-section text-center">
                    <img src="{{url('')}}/style/assets/img/9.png" alt="" class="image-icon">

                    <p>Your payment is automatically deposited into the account of your choosing 24 hours after your guest’s check-in date. DMIpark charges 7.5% host service fee on each reservation.</p>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container host_post">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
                {{--<span></span>--}}
                {{--<h3>What's in a listing?</h3>--}}
                {{--<p>You'll fill out a description,take and upload--}}
                    {{--photos,and pick a price.Your listing helps--}}
                    {{--guest get a sense of what your placeis like.--}}
                {{--</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<span></span>--}}
                {{--<h3>Who can book</h3>--}}
                {{--<p>you set availability and house rules for--}}
                    {{--your listing.Host controls and calender--}}
                    {{--settings can help make hosting easier.--}}
                {{--</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<span></span>--}}
                {{--<h3>We're here to help</h3>--}}
                {{--<p>Form getting your home ready and choosing a--}}
                    {{--price,to understanding your responsibilities--}}
                    {{--under local laws-we'have got tools and--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container host_center_row bottom-row">
        <p>
            {!!  $listingLink !!}
        </p>
    </div>
@endsection

@section('scripts')
@endsection
