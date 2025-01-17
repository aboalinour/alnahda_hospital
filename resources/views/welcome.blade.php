<!DOCTYPE html>
<html lang="{{--str_replace('_', '-', app()->getLocale()) --}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">

    @extends('WebSite.layouts.master')

    @section('content')
        <!-- Main Slider Three -->
        <section class="main-slider-three">
            <div class="banner-carousel">
                <!-- Swiper -->
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <div class="auto-container">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h2>Your Most Trusted Health Partner For Life.</h2>
                                        <div class="text">We offer free consulting and the best project management for your ideas, 100% delivery guaranteed.</div>
                                        <div class="btn-box">
                                            <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">Appointment</span></a>
                                            <a href="services.html" class="theme-btn services-btn">Services</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="images/main-slider/3.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="swiper-slide slide">
                        <div class="auto-container">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h2>Your Most Trusted Health Partner For Life.</h2>
                                        <div class="text">We offer free consulting and the best project management for your ideas, 100% delivery guaranteed.</div>
                                        <div class="btn-box">
                                            <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">Appointment</span></a>
                                            <a href="services.html" class="theme-btn services-btn">Services</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="images/main-slider/3.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="swiper-slide slide">
                        <div class="auto-container">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h2>Your Most Trusted Health Partner For Life.</h2>
                                        <div class="text">We offer free consulting and the best project management for your ideas, 100% delivery guaranteed.</div>
                                        <div class="btn-box">
                                            <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">Appointment</span></a>
                                            <a href="services.html" class="theme-btn services-btn">Services</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="images/main-slider/3.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- End Main Slider -->

        <!-- Health Section -->
        <section class="health-section">
            <div class="auto-container">
                <div class="inner-container">

                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="border-line"></div>
                                <!-- Sec Title -->
                                <div class="sec-title">
                                    <h2>Who We Are <br> Pioneering in Health.</h2>
                                    <div class="separator"></div>
                                </div>
                                <div class="text">Where you are at the heart of our mission. We hope you will consider us as your medical home—the place where you feel safe, comfortable and cared for. As a multi-specialty medical group,</div>
                                <a href="about.html" class="theme-btn btn-style-one"><span class="txt">More About Us</span></a>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <img src="images/resource/image-3.jpg" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- End Health Section -->

        <!-- Featured Section -->
        <section class="featured-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="upper-box">
                                <div class="icon flaticon-doctor-stethoscope"></div>
                                <h3><a href="#">Medical Treatment</a></h3>
                            </div>
                            <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                            <div class="upper-box">
                                <div class="icon flaticon-ambulance-side-view"></div>
                                <h3><a href="#">Emergency Help</a></h3>
                            </div>
                            <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="upper-box">
                                <div class="icon fas fa-user-md"></div>
                                <h3><a href="#">Qualified Doctors</a></h3>
                            </div>
                            <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                            <div class="upper-box">
                                <div class="icon fas fa-briefcase-medical"></div>
                                <h3><a href="#">Medical Professionals</a></h3>
                            </div>
                            <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Featured Section -->

        <!-- Department Section Three -->
        <section class="department-section-three">
            <div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
            <div class="auto-container">
                <!-- Department Tabs-->
                <div class="department-tabs tabs-box">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <!-- Sec Title -->
                            <div class="sec-title light">
                                <h2>Health <br> Department</h2>
                                <div class="separator"></div>
                            </div>
                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#tab-urology" class="tab-btn">Urology Department</li>
                                <li data-tab="#tab-department" class="tab-btn active-btn">Neurology Department</li>
                                <li data-tab="#tab-gastrology" class="tab-btn">Gastrology Department</li>
                                <li data-tab="#tab-cardiology" class="tab-btn">Cardiology Department</li>
                                <li data-tab="#tab-eye" class="tab-btn">Eye Care Department</li>
                            </ul>
                        </div>
                        <!--Column-->
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!-- Tab -->
                                <div class="tab" id="tab-urology">
                                    <div class="content">
                                        <h2>Urology Department</h2>
                                        <div class="title">Department of Neurology</div>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        </div>
                                        <div class="two-column row clearfix">
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>01 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>02 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                        </div>
                                        <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                    </div>
                                </div>

                                <!-- Tab -->
                                <div class="tab active-tab" id="tab-department">
                                    <div class="content">
                                        <h2>Neurology Department</h2>
                                        <div class="title">Department of Neurology</div>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        </div>
                                        <div class="two-column row clearfix">
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>01 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>02 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                        </div>
                                        <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                    </div>
                                </div>

                                <!-- Tab -->
                                <div class="tab" id="tab-gastrology">
                                    <div class="content">
                                        <h2>Gastrology Department</h2>
                                        <div class="title">Department of Neurology</div>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        </div>
                                        <div class="two-column row clearfix">
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>01 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>02 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                        </div>
                                        <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                    </div>
                                </div>

                                <!-- Tab -->
                                <div class="tab" id="tab-cardiology">
                                    <div class="content">
                                        <h2>Cardiology Department</h2>
                                        <div class="title">Department of Neurology</div>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        </div>
                                        <div class="two-column row clearfix">
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>01 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>02 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                        </div>
                                        <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                    </div>
                                </div>

                                <!-- Tab -->
                                <div class="tab" id="tab-eye">
                                    <div class="content">
                                        <h2>Eye Care Department</h2>
                                        <div class="title">Department of Neurology</div>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        </div>
                                        <div class="two-column row clearfix">
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>01 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <h3>02 - Neurology Service</h3>
                                                <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                            </div>
                                        </div>
                                        <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Department Section -->

        <!-- Team Section -->
        <section class="team-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>The Medical Specialists</h2>
                    <div class="separator"></div>
                </div>

                <div class="row clearfix">

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/team-1.jpg" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Andria Jonea</a></h3>
                                <div class="designation">Cancer Specialist</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/team-2.jpg" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Robet Samith</a></h3>
                                <div class="designation">Heart Surgen</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/team-3.jpg" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Sharon Laura</a></h3>
                                <div class="designation">Family Physician</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/team-4.jpg" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Alex Furgosen</a></h3>
                                <div class="designation">Ortho Specialist</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- Video Section -->
        <section class="video-section" style="background-image:url(images/background/5.jpg)">
            <div class="auto-container">
                <div class="content">
                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
                    <div class="text">WE ARE CARE ABOUT YOUR HEALTH</div>
                    <h2>We Care About You</h2>
                </div>
            </div>
        </section>
        <!-- End Video Section -->

        <!-- Appointment Section Two -->
        <section class="appointment-section-two">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <img src="images/resource/doctor-2.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Form Column -->
                        <div class="form-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <!-- Sec Title -->
                                <div class="sec-title">
                                    <h2>Appointment Form</h2>
                                    <div class="separator"></div>
                                </div>

                                <!-- Appointment Form -->
                                <div class="appointment-form">
                                    <form method="post" action="appointment.html">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Name" required="">
                                                <span class="icon fa fa-user"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required="">
                                                <span class="icon fa fa-envelope"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="tel" name="phone" placeholder="Phone No" required="">
                                                <span class="icon fas fa-phone"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="department" placeholder="Department" required="">
                                                <span class="icon fas fa-home"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="day" placeholder="Day">
                                                <span class="icon fa fa-calendar"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="time" placeholder="Time" class="">
                                                <span class="icon far fa-clock"></span>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Book Appointment</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Two -->
        <section class="testimonial-section-two">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>What Patients Saying</h2>
                    <div class="separator"></div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">

                    <!-- Tesimonial Block Two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/author-4.jpg" alt="" />
                            </div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            <div class="lower-box">
                                <div class="clearfix">

                                    <div class="pull-left">
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="author-info">
                                            <h3>Max Winchester</h3>
                                            <div class="author">Kidny Patient</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tesimonial Block Two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/author-5.jpg" alt="" />
                            </div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            <div class="lower-box">
                                <div class="clearfix">

                                    <div class="pull-left">
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="author-info">
                                            <h3>Jack Monita</h3>
                                            <div class="author">Kidny Patient</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tesimonial Block Two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/author-4.jpg" alt="" />
                            </div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            <div class="lower-box">
                                <div class="clearfix">

                                    <div class="pull-left">
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="author-info">
                                            <h3>Max Winchester</h3>
                                            <div class="author">Kidny Patient</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tesimonial Block Two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/author-5.jpg" alt="" />
                            </div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            <div class="lower-box">
                                <div class="clearfix">

                                    <div class="pull-left">
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="author-info">
                                            <h3>Jack Monita</h3>
                                            <div class="author">Kidny Patient</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Testimonial Section Two -->

        <!-- Counter Section -->
        <section class="counter-section style-two" style="background-image: url(images/background/pattern-3.png)">
            <div class="auto-container">

                <!-- Fact Counter -->
                <div class="fact-counter style-two">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon flaticon-logout"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                                    </div>
                                    <h4 class="counter-title">Satisfied Patients</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon flaticon-logout"></div>
                                    <div class="count-outer count-box alternate">
                                        +<span class="count-text" data-speed="3000" data-stop="350">0</span>
                                    </div>
                                    <h4 class="counter-title">Doctor’s Team</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon flaticon-logout"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="2150">0</span>
                                    </div>
                                    <h4 class="counter-title">Success Mission</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon flaticon-logout"></div>
                                    <div class="count-outer count-box">
                                        +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                                    </div>
                                    <h4 class="counter-title">Successfull Surgeries</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Counter Section -->

        <!-- Doctor Info Section -->
        <section class="doctor-info-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Doctor Block -->
                        <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <h3>Working Hours</h3>
                                <ul class="doctor-time-list">
                                    <li>Mon–Fri <span>8:00am–7:00pm</span></li>
                                    <li>Saturday <span>9:00am–5:00pm</span></li>
                                    <li>Sunday <span>9:00am–3:00pm</span></li>
                                </ul>
                                <h4>Emergency Cases</h4>
                                <div class="phone">Call us! <strong>+898 68679 575 09</strong></div>
                            </div>
                        </div>

                        <!-- Doctor Block -->
                        <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <h3>Doctors Timetable</h3>
                                <div class="text">The following is for guidance only to help you plan your appointment with a preferred doctor or nurse. It does not guarantee availability as the doctors or nurses may sometimes be attending to other duties.</div>
                                <a href="#" class="detail">More Detail</a>
                            </div>
                        </div>

                        <!-- Doctor Block -->
                        <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <h3>Primary Health Care</h3>
                                <div class="text">When you know you are using your best talents for something you love, you can’t it. Effective communication is the basis for building brands as solid as the relation-ships with build with our clients..</div>
                                <a href="#" class="detail">Contact Now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Doctor Info Section -->

        <!-- News Section Two -->
        <section class="news-section-two">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Latest News & Articals</h2>
                    <div class="separator style-three"></div>
                </div>
                <div class="row clearfix">

                    <!-- News Block Two -->
                    <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="blog-detail.html"><img src="images/resource/news-4.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="content">
                                    <ul class="post-info">
                                        <li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> 02</li>
                                        <li><span class="icon flaticon-heart"></span> 126</li>
                                    </ul>
                                    <ul class="post-meta">
                                        <li>June 21, 2018 at 8:12pm</li>
                                        <li>Post By: Admin</li>
                                    </ul>
                                    <h3><a href="blog-detail.html">Diagnostic Services for Efficient Results Picking Right </a></h3>
                                    <div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
                                    <a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="blog-detail.html"><img src="images/resource/news-5.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="content">
                                    <ul class="post-info">
                                        <li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> 02</li>
                                        <li><span class="icon flaticon-heart"></span> 126</li>
                                    </ul>
                                    <ul class="post-meta">
                                        <li>June 21, 2018 at 8:12pm</li>
                                        <li>Post By: Admin</li>
                                    </ul>
                                    <h3><a href="blog-detail.html">Reasons to Visit for Heart Specialist Department.</a></h3>
                                    <div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
                                    <a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Clients Section-->
        <section class="clients-section">
            <div class="outer-container">

                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    </ul>
                </div>

            </div>
        </section>
        <!--End Clients Section-->
    @endsection

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>

            @endif

        </div>
    </body>

</body>

</html>
