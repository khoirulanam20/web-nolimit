@extends('template_web.layout')

@section('content')
    <!-- bradcam_area -->
    <div class="bradcam_area">
        <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="bradcam_text text-center">
                            <h3>Membership</h3>
                            <p>There are many variations of passages of lorem Ipsum available, but the majority have
                                suffered alteration unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area end -->

    <div class="priscing_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_prising text-center">
                        <div class="prising_header">
                            <h3>Beginner</h3>
                            <span>$45</span>
                        </div>
                        <div class="pricing_body">
                            <ul>
                                <li>24h unlimited access</li>
                                <li>Trainer Advice</li>
                                <li class="off-color">Locker + Bathroom</li>
                                <li class="off-color">Personal trainer</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="boxed-btn3">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_prising text-center">
                        <div class="prising_header">
                            <h3>Expert</h3>
                            <span>$45</span>
                        </div>
                        <div class="pricing_body">
                            <ul>
                                <li>24h unlimited access</li>
                                <li>Trainer Advice</li>
                                <li class="off-color">Locker + Bathroom</li>
                                <li class="off-color">Personal trainer</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="boxed-btn3">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_prising text-center">
                        <div class="prising_header">
                            <h3>Pro</h3>
                            <span>$45</span>
                        </div>
                        <div class="pricing_body">
                            <ul>
                                <li>24h unlimited access</li>
                                <li>Trainer Advice</li>
                                <li class="off-color">Locker + Bathroom</li>
                                <li class="off-color">Personal trainer</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="boxed-btn3">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offer_area offer_bg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="offer_text">
                        <h4>A Big Offer for <br>
                            This Summer</h4>
                        <h3>50% Off</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have suffered
                            alteration.</p>
                        <a href="#" class="boxed-btn3">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- features_area_start  -->
    <div class="features_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3>Our Features</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have
                            suffered alteration.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center mb-73">
                        <div class="icon">
                            <img src="{{ asset('web') }}/img/svg_icon/1.svg" alt="">
                        </div>
                        <h4>Weightlifting</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="{{ asset('web') }}/img/svg_icon/2.svg" alt="">
                        </div>
                        <h4>Specific Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="{{ asset('web') }}/img/svg_icon/3.svg" alt="">
                        </div>
                        <h4>Flex Your Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="{{ asset('web') }}/img/svg_icon/4.svg" alt="">
                        </div>
                        <h4>Cardio Exercises</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end  -->
    <!-- big_offer_area start  -->
    <div class="big_offer_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="offter_text text-center">
                        <h3>A Big Offer for <br>
                            This Summer</h3>
                        <a href="#" class="boxed-btn3">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- big_offer_area end  -->
@endsection
