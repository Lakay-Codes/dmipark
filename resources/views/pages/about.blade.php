@extends('layouts.master')

@section('title', 'About')

@section('content')
    <div class="about_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="about_banner_info">
                        <h1>The Future of neighborhood parking boooking</h1>
                        <p>Automated booking process in private communities </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about_experience">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="about_section_head about_experience_head">
                        <h1>Experience each place
                            like never before</h1>
                        <p>Join this growing community of parking space sharing.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_experience_info">
            <ul>
                <li>
                    <div class="about_experience_box">
                        <img src="{{url('')}}/style/assets/img/affordable icon.png">
                        <h4>Affordable</h4>
                        <p>Spend less time searching and less money from affordable list of available parking slots.</p>
                    </div>
                </li>
                <li>
                    <div class="about_experience_box">
                        <img src="{{url('')}}/style/assets/img/earn cash icon.png">
                        <h4>Earn Cash</h4>
                        <p>Grab the opportunity to earn when your car is away by simply listing your parking slots and set available times. That's helping your guest save money. It’s a win-win.</p>
                    </div>
                </li>
                <li>
                    <div class="about_experience_box">
                        <img src="{{url('')}}/style/assets/img/community icon.png">
                        <h4>Community</h4>
                        <p>Explore different cultures and communities and feel welcome while you do.</p>
                    </div>
                </li>
                <li>
                    <div class="about_experience_box">
                        <img src="{{url('')}}/style/assets/img/user friendly icon.png">
                        <h4>User Friendly</h4>
                        <p>DMIpark offers a user-friendly site to make the listing and booking process effortless. Booking are automatically sent to PMO for security.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="about_images_section">
        <ul>
            <li>
                <img src="{{url('')}}/style/assets/img/camels-caravan.png">
            </li>
            <li>
                <img src="{{url('')}}/style/assets/img/coffee-in-hijab.png">
            </li>
            <li>
                <img src="{{url('')}}/style/assets/img/backpacker.png">
            </li>
        </ul>
    </div>



    <div class="about_strategic">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="about_section_head about_strategic_head">
                        <h1>Strategic Partnerships</h1>
                        <p>To better serve our users we are looking to partner with property management office and soon with other communities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- video Modal -->
    <!-- Modal -->
    <div class="modal fade video_modal" id="video_modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <iframe src="https://www.youtube.com/embed/6YZRjSdacqI?ecver=1" frameborder="0" allowfullscreen></iframe>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

@endsection
