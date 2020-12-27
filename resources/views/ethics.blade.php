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
                    {{--<h1>Ethics, Trust, & Hospitality</h1>--}}
                    {{--<p>At DMIPARK, we aim to facilitate a seamless booking and reting out parking spaces.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="ethics-banner">
            <div class="container">
                <div class="ethics-banner-text">
                    <h1>Ethics, Trust, &amp; Hospitality</h1>
                    <p>At DMIPARK, we aim to facilitate a seamless booking and reting out parking spaces.</p>
                </div>
            </div>
        </div>

        <div class="ethics-section2">
            <div class="container">
                <div class="ethics-section2-head">
                    <h1>A Pledge to Protect</h1>
                    <p>As we begin our journey, we hope to outline standards within which we expect our vast community to operate. The three pillars below, serve as our core ethics guidelines and affirm our commitment to an open, trustworthy and inclusive community.</p>
                </div>
                <div class="ethics-section2-info">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4 brd-right ethics-section2-full-width">
                            <div class="ethics-section2-box">
                                <img src="{{ asset('images/truthful icon.png') }}">
                                <h6>Truthful</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 brd-right ethics-section2-full-width">
                            <div class="ethics-section2-box">
                                <img src="{{ asset('images/equitable icon.png') }}">
                                <h6>Equitable</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 ethics-section2-full-width">
                            <div class="ethics-section2-box">
                                <img src="{{ asset('images/trusthworthy icon.png') }}">
                                <h6>Trustworthy</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ethics-section3">
            <div class="ethics-section3-img">
                <img src="{{ asset('images/truthful-photo.png') }}">
            </div>
            <div class="ethics-section3-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 ethics-section3-left-width">
                            <div class="ethics-section3-info-box">
                                <h2>Truthful</h2>
                                <div class="ethics-section3-box">
                                    <h6>Misrepresenting yourself</h6>
                                    <p>As a user of DMIpark, you must be authentic and only offer information that is 100% accurate. Make sure to provide your true name, car model and car plate number.
                                        Also make sure to use only one account. When communicating with other users, always be truthful when representing who you are and your intentions as a guest and host.</p>
                                </div>
                                <div class="ethics-section3-box">
                                    <h6>Misrepresenting your spaces</h6>
                                    <p>A lot of trust is put in the hands of our hosts and we expect them to be completely truthful when listing their parking lot. This includes accurate location information,
                                        Parking lot unit number and calendar availability among other information. </br></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ethics-section4">
            <div class="ethics-section3-info ethics-section4-info">
                <div class="row">
                    <div class="ethics-section4-left-section">
                        <div class="ethics-section4-info-box">
                            <h2>Equitable</h2>
                            <div class="ethics-section3-box">
                                <h6>Discriminatory behavior or hate speech</h6>
                                <p>DMIpark was created with the intention of inclusivity and acceptance for all our users. No user, whether a host or guest should have to deal with rude or unjust behavior from a fellow DMIpark user, and that’s what we expect – respectful and dignified interactions amongst each other. Any interaction between users that is deemed discriminatory in any manner will not be tolerated, and may result in the suspension or termination of a user’s account.
</p>
                            </div>
                            <div class="ethics-section3-box">
                                <h6>Bullying or harassing others</h6>
                                <p>It is forbidden to continually target fellow users with unsolicited behavior which may include; defamation, sexual advances, shaming, extortion, intimidation, and unauthorized sharing of personal information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ethics-section3-img">
                <img src="{{ asset('images/Mockup-05.png') }}">
            </div>
        </div>

        <div class="ethics-section5 ethics-section3">
            <div class="ethics-section3-img ethics-section5-img">
                <img src="{{ asset('images/trusthworthy-photo.png') }}">
            </div>
            <div class="ethics-section3-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="ethics-section3-info-box">
                                <h2>Trustworthy</h2>
                                <div class="ethics-section3-box">
                                    <h6>Harming yourself or others</h6>
                                    <p>The safety of our users is paramount, so causing any harm to yourself or others is completely prohibited and will leave you legally liable. Physical or sexual assault, sexual abuse, domestic violence, robbery, human trafficking, kidnapping, or other acts of violence and/or misconduct which is deemed an illegal offence is prohibited while using DMIpark. </p>
                                </div>
                                <div class="ethics-section3-box">
                                    <h6>Spam, phishing, or fraud</h6>
                                    <p>To protect yourself and others from financial risk, make sure to never make transactions outside of Muzbnb’s payments system. This may lead to credit card fraud, money laundering, and other scams which are completely prohibited by DMIpark.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <p>Guests pay through DMIpark when they book a home. Hosts receive payment through DMIpark 24 hours after guest check-out.</p>
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
                            <p>Easily message hosts or guests to learn more about them, their trip or their property. </p>
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

        <div class="ethics-section7">
            <div class="container">
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 ethics-section7-padding">
                    <div class="ethics-section7-head">
                        <h1>Superior Hospitality</h1>
                        <p>Take your guest’s experiences to the next level by implementing our three pillars of hosting</p>
                    </div>

                </div>
                <div class="ethics-section7-bottom-section">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="ethics-section7-bottom-box">
                                <h2>Accuracy</h2>
                                <p>The accuracy of the information you provide is critical to a good review. Your guests will have the opportunity to rate your accuracy. Be sure to be as accurate as possible so your guests won’t be let down.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="ethics-section7-bottom-box">
                                <h2>Check-In Check-Out Times</h2>
                                <p>Being able to check in and check out on reserved times avoid unnecessary misunderstanding with the other guest before or after you. We always advice to occupy parking spaces only on your booked time slots.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="ethics-section7-bottom-box">
                                <h2>Communication</h2>
                                <p>Being responsive puts everyone at ease. It also shows that you’re a responsible and considerate guest or host. Keep the lines of communication open and never leave someone hanging.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="ethics-section7-btn" href="/become-a-host">become a host</a>
            </div>
        </div>
    </section>
    <!-- /slider -->

@endsection
