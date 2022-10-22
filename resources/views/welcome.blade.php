@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <!-- banner -->
                <section class="banner_main">
                    <div class="container-fluid-fluid pt-5">
                        <div class="row d_flex">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="text-bg">
                                    <h1>FREE LOL NEWS MESSAGES FOR FRIENDS AND FAMILY</h1>
                                    <span>Get your
                                        link and play <br> Lol news</span>
                                    <strong>free!!</strong>
                                    <a href="/register">sign up</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 padding_lert2">

                                <div class="text-img">
                                    <figure><img src="images/LOL.png" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end banner -->
                <!-- about -->
                <div class="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="titlepage">
                                    <span>About </span>
                                    <h2>LOL NEWS</h2>
                                    <p>LOL NEWS gives you link which allows you to receive messages from your friends. It
                                        helps you to send many crazy,funny,joke,love....text/messages to your friendsand
                                        family etc. get your link and send as many messages as you can for free</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="ccol-md-10 offset-md-1">
                                <div class="about_box">
                                    <figure><img src="images/anonymous-text-chat-1.webp" alt="#" /></figure>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>

                <!-- end about -->
                <!-- classified -->


                <!-- contact -->
                <div id="contact" class="contact">
                    <div class="container">
                        <div class="row d_flex">
                            <div class="col-md-6">
                                <div class="contact_box">
                                    <div class="titlepage">
                                        <span>Contact Us</span>
                                        <h2>Let’s talk </h2>
                                    </div>
                                    <p>send your messages to us and get your reply withing 24hours </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form id="contact" class="main_form">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <input class="contactus text-light" placeholder="Name" type="type"
                                                name="Name">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus text-light" placeholder="Phone Number" type="type"
                                                name="Phone Number">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus text-light" placeholder="Email" type="type"
                                                name="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea text-light" placeholder="Message" type="type" Message="Name">Message </textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="send_btn">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end contact -->


                <!-- testimonial -->
                <div class="testimonial">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage">
                                    <h2>Testimonial</h2>
                                    <p>users says about us</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="container">
                                                <div class="carousel-caption ">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-4 col-md-12 margin_boot">
                                                            <div class="test_box1">
                                                                <figure><img src="images/IMG_20220904_141640_995 (3).jpg"
                                                                        alt="#" /></figure>
                                                                <h4></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-8 col-lg-8 col-md-12">
                                                            <div class="test_box">
                                                                <i><img src="images/te1.png" alt="#" /></i>
                                                                <p> hahahahaha this have been my best funny site so far </p>
                                                                <i class="flot_right"><img src="images/te2.png"
                                                                        alt="#" /></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-4 col-md-12 margin_boot">
                                                            <div class="test_box1">
                                                                <figure><img src="images/victor.jpeg" alt="#" />
                                                                </figure>
                                                                <h4> </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-8 col-lg-8 col-md-12">
                                                            <div class="test_box">
                                                                <i><img src="images/te1.png" alt="#" /></i>
                                                                <p>cool site so far......................... </p>
                                                                <i class="flot_right"><img src="images/te2.png"
                                                                        alt="#" /></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-4 col-md-12 margin_boot">
                                                            <div class="test_box1">
                                                                <figure><img src="images/profile.jfif" alt="#" />
                                                                </figure>
                                                                <h4> </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-8 col-lg-8 col-md-12">
                                                            <div class="test_box">
                                                                <i><img src="images/te1.png" alt="#" /></i>
                                                                <p>very nice one </p>
                                                                <i class="flot_right"><img src="images/te2.png"
                                                                        alt="#" /></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#myCarousel" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end testimonial -->

            </div>
        </div>
    </div>
@endsection
