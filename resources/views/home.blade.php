@extends('layouts.master')

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
<style>

</style>
    <div class="homepage-slides-wrapper  text-center">

        <div class="homepage-slides">
            <div class="slide-bg-2 bgfix"></div>
            <div class="slide-bg-3 bgfix"></div>
            <div class="slide-bg-4 bgfix"></div>
            <div class="slide-bg-1 bgfix"></div>
            <div class="single-slide-item ">
                <div class="slide-item-table ">
                    <div class="slide-item-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-11 col-md-offset-1 col-sm-12 col-xs-12 slider-text">
                                    <h1>Parking Reservation Simplified</h1>
                                    <p>Rent welcoming &amp; affordable parking slots <br/>from amazing neighbors</p>
                                    @if(!auth()->user())
                                    <div class="muzbnb-btn">
                                        <a href="javascript:;" class="slide-btn signup-btn">Get Started – Sign Up</a>
                                    </div>
                                    @endif
                                    <div class="muzbnb-video-btn">
                                        <a href="" class="slide-video-btn" data-toggle="modal" data-target="#watch-video">
                                            <img src="{{ url('style/assets') }}/img/play%20button%20white.png" alt="">
                                        </a>
                                        <span>Watch Video</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row hidden">
                                <div class="relpos">
                                    <div class="posab">
                                        <div class="col-md-10">
                                            <div class="main-search">
                                                <div class="col-md-3 border-right">
                                                    <p>WHERE</p>
                                                    <input type="text" value="ISTANBUL" class="active">
                                                </div>
                                                <div class="col-md-3">
                                                    <p>CHECK IN</p>
                                                    <input class="myDate" type="text" name="date_from" value="{{ \Carbon\Carbon::now()->format('m/d/Y') }}">
                                                    {{--<input id="datepicker-disable-past" type="text" value="{{ \Carbon\Carbon::now()->format('m/d/Y') }}">--}}
                                                </div>
                                                <div class="col-md-3 border-right">
                                                    <p>CHECK OUT</p>
                                                    <input class="myDate" type="text" name="date_to" value="{{ \Carbon\Carbon::now()->format('m/d/Y') }}">
                                                    {{--<input id="datepicker-disable-out" type="text" value="{{ \Carbon\Carbon::now()->format('m/d/Y') }}">--}}
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        HOW MANY
                                                    </p>
                                                    <input type="text" value="3 Guests">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="muzbnb-go-button">
                                                <a href="" class="">GO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /slider -->

    <section id="select_box" class="home-select-box">
        <div class="container">
            <div class="row">
                <form id="banner_select_area">

                    <div class="col-md-11 col-sm-11 col-xs-12">
                        <div class="select_area">
                            <div class="col-lg-3 col-md-3 col-sm-6 single_select_box active-input">
                                <div class="box_title">
                                    <label class="text-upper text-14-18-2 text-grayB3" for="country">WHERE</label>
                                </div>
                                <input type="text" id="userInput2" name="query" value="{{ request('query') }}" style="border: 0px;">
                                <input type="hidden" name="lat" id="lat2" value="{{ request('lat') }}" />
                                <input type="hidden" name="lng" id="lng2" value="{{ request('lng') }}"/>
                                <input type="hidden" name="address1" id="search_address12" value="{{ request('address1') }}"/>
                                <input type="hidden" name="address2" id="search_address22" value="{{ request('address2') }}"/>
                                <input type="hidden" name="city" id="search_city2" value="{{ request('city') }}"/>
                                <input type="hidden" name="state" id="search_state2" value="{{ request('state') }}"/>
                                <input type="hidden" name="country" id="search_country2" value="{{ request('country') }}"/>
                                <input type="hidden" name="zip_code" id="search_zip_code2" value="{{ request('zip_code') }}"/>
                                {{--<select name="country" id="country" class="text-14-18-2">--}}
                                    {{--<option disabled>Select a country</option>--}}
                                    {{--<option value="DZ">Algeria</option>--}}
                                    {{--<option value="AO">Angola</option>--}}
                                    {{--<option value="BJ">Benin</option>--}}
                                    {{--<option value="BW">Botswana</option>--}}
                                    {{--<option value="BF">Burkina Faso</option>--}}
                                    {{--<option value="BI">Burundi</option>--}}
                                    {{--<option value="CM">Cameroon</option>--}}
                                    {{--<option value="CV">Cape Verde</option>--}}
                                    {{--<option value="CF">Central African Republic--}}
                                    {{--</option>--}}
                                {{--</select>--}}
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 single_select_box border-none">
                                <div class="box_title">
                                    <label class="text-upper text-14-18-2 text-grayB3" for="check_in_date">CHECK IN</label>
                                </div>
                                <input name="check_in_date" type="text" id="check_in_date" class="form-control datepicker myDate" value="{{ date("Y-m-d") }}">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 single_select_box">
                                <div class="box_title">
                                    <label class="text-upper text-14-18-2 text-grayB3" for="check_out_date">CHECK OUT</label>
                                </div>
                                <input name="check_out_date" type="text" id="check_out_date" class="form-control datepicker myDate" value="{{ date("Y-m-d") }}">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 single_select_box">
                                <div class="box_title">
                                    <label class="text-upper text-14-18-2 text-grayB3" for="guests">HOW MANY</label>
                                </div>
                                <select name="no_of_guest" id="guests" class="text-14-18-2">
                                    <option value="0">Cars Count</option>
                                    <option value="1">1 car</option>
                                    <option value="2">2 cars</option>
                                    <option value="3">3 cars</option>
                                    <option value="4">4 cars</option>
                                    <option value="5">5 cars</option>
                                    <option value="5+">5+ cars</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-12">
                        <button class="back-red" id="select_go">GO</button>
                    </div>
                </form>
            </div>
            <div class="row" id="dateErrorRow" style="display:none">
                <div class="text-center" style="width: 50%;margin: 0 auto;margin-top: 10px;">
                    <p class="alert alert-danger" id="errText"></p>
                </div>
            </div>
        </div>
    </section>

    <div class="muzbnb-content-block text-center big-bg-section">
        <div class="container-fluid coutomwidth">
            <div class="row big-bg-title">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1>A Neigborhood Community Starting <br/> a Parking Revolution</h1>
                        <p>Join this growing community of Motorists, parking hosts and adventurers.</p>
                    </div>
                </div>
            </div>
            <div class="row big-bg-box">
                <div class="travel-revolution slider">
                    <div class="item-box">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="bg-one bg-fix"><img class="traveler_color" src="{{ url('style/assets') }}/img/traveler_color.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="bg-one bg-fix"><img class="community_color" src="{{ url('style/assets') }}/img/community_color.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="bg-one bg-fix"><img class="traveler_color" src="{{ url('style/assets') }}/img/home-middleslide-4.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="bg-one bg-fix"><img class="hosts_color" src="{{ url('style/assets') }}/img/hosts_color.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="bg-one bg-fix"><img class="traveler_color" src="{{ url('style/assets') }}/img/traveler_color.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="bg-one bg-fix"><img class="community_color" src="{{ url('style/assets') }}/img/community_color.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="bg-one bg-fix"><img class="traveler_color" src="{{ url('style/assets') }}/img/home-middleslide-4.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="bg-one bg-fix"><img class="hosts_color" src="{{ url('style/assets') }}/img/hosts_color.png" alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="slick-content-container">
                    <div class="slick-content-wrapper">
                        <div class="slider slider-for slick--next">
                            <div>
                                <div class="top-section">
                                    <p>DMIPARK IS FOR</p>
                                    <h1>
                                        <span class="red">Neighbors </span>
                                        <span class="black">who cares for</span>
                                        <span class="red">Fellow Neighbors</span>
                                    </h1>
                                </div>
                            </div>
                            <div>
                                <div class="top-section">
                                    <p>DMIPARK IS FOR</p>
                                    <h1>
                                        <span class="blue">Communities</span>
                                        <span class="black">who love to</span>
                                        <span class="blue">Share and Earn</span>
                                    </h1>
                                </div>
                            </div>
                            <div>
                                <div class="top-section">
                                    <p>DMIPARK IS FOR</p>
                                    <h1>
                                        <span class="red">Travelling Visitors</span>
                                        <span class="black">who appreciate</span>
                                        <span class="red">Comfort and Safety</span>
                                    </h1>
                                </div>
                            </div>
                            <div>
                                <div class="top-section">
                                    <p>DMIPARK IS FOR</p>
                                    <h1>
                                        <span class="blue">Hosts</span>
                                        <span class="black">who enjoy creating</span>
                                        <span class="blue">Experiences</span>
                                    </h1>
                                </div>
                            </div>
                            <div>
                                <div class="top-section">
                                    <p>DMIPARK IS FOR</p>
                                    <h1>
                                        <span class="red">Travelling Visitors</span>
                                        <span class="black">who live for</span>
                                        <span class="red">Adventure</span>
                                    </h1>
                                </div>
                            </div>
                            <div>
                                <div class="top-section">
                                    <p>DMIPARK IS FOR</p>
                                    <h1>
                                        <span class="blue">Communities</span>
                                        <span class="black">who love to</span>
                                        <span class="blue">Connect</span>
                                    </h1>
                                </div>
                            </div>
                            <div>
                                <div class="top-section">
                                    <p>DMIPARK IS FOR</p>
                                    <h1>
                                        <span class="red">Travelling Visitors </span>
                                        <span class="black">who appreciate</span>
                                        <span class="red">Comfort and Safety </span>
                                    </h1>
                                </div>
                            </div>
                            <div>
                                <div class="top-section">
                                    <p>DMIPARK IS FOR</p>
                                    <h1>
                                        <span class="blue">Hosts</span>
                                        <span class="black">who enjoy creating</span>
                                        <span class="blue">Experiences</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <div class="muzbnb-content-block section-bg-3 bgfix marfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h3>With DMIPARK<sup>TM</sup>, finding a parking space to rent when you travel is a thing of the past</h3>
                        </div>
                        <p>Join us today as we revive the tradition of smoothly sharing parking lots.</p>
                        <div class="signup-button">
                            <div class="cta-red-btn"><a href="javascript:;"  class="muzbnn-btn signup-btn">SIGN UP TODAY</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('scripts')

@endsection
