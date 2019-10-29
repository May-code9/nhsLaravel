@extends('layouts.master')
@section('content')

    <!-- for big screens -->
    <header class="bigScreen" style="display: none;padding-bottom: 22px;padding-top: 15px">

        <div class="navigation-menu">
            <nav class="navbar navbar-default navbar-event">
                <div class="container">

                    <div class="navbar-header col-md-2">
                        <a class="navbar-brand" href="#"><img src="assets/img/nhs_logo.png" alt="" width="auto"
                                                              height="60"></a>
                    </div>

                    <div class="navbar-header col-md-2 navbar-right" style="padding-right: 25%">
                        <a class="navbar-brand" href="#"><img src="assets/img/nma_logo.png" alt="" width="auto"
                                                              height="60"></a>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <div id="carousel-area" class="bigScreen" style="display: none">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/img/slider/bg.jpg" alt="">
                    <div class="carousel-caption">
                        <h2 class="wow fadeInRight" data-wow-delay="300ms">2nd National Health Summit <span style="font-size: 26px; color: #D62430"><br>THEME: Patient Centered Care</span></h2>
                        <div class="buttons fadeInDown" data-wow-delay="0.2s">
                            <a class="btn btn-lg btn-common wow" href="{{ route('nma.tickets') }}"><strong style="font-size: 20px">Register</strong> </a>
                            <a class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="300ms" href="{{ route('nma.accomodation') }}"> <strong style="font-size: 20px">Accomodation</strong></a>
                        </div>
                        <a data-scroll href="#featured">
                            <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/slider/nhsflier.jpg" alt="">
                    <div class="carousel-caption">
                        <a data-scroll href="#featured">
                            <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/slider/bg-2.jpg" alt="">
                    <div class="carousel-caption">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">2nd National Health Summit <span style="font-size: 26px; color: #D62430"><br> International
                            Conference Center, Abuja. <br> Nov 04 - Nov 08, 2019</span> </h2>
                        <div class="buttons">
                            <a class="btn btn-lg btn-common wow fadeInLeft" data-wow-delay="300ms"
                               href="{{ route('nma.tickets') }}"> <strong style="font-size: 20px">Register</strong></a>
                            <a class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="300ms" href="{{ route('nma.accomodation') }}"> <strong style="font-size: 20px">Accomodation</strong></a>
                        </div>
                        <a data-scroll href="#featured">
                            <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
                <span class="icon-arrow-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
                <span class="icon-arrow-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <!-- end for big screens -->
    @include('partials.header')
    <!-- for small screens -->
    <div id="carousel-area" class="smallScreen" style="display: none">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/img/slider/bg.jpg" alt="">
                    <div class="carousel-caption">
                        <h2 class="wow fadeInRight" data-wow-delay="300ms">2nd National Health Summit<br> <span style="color: #00f000">THEME</span><br>
                            Patient Centered Care</h2>
                        <div class="buttons">
                            <a class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="300ms"
                               href="{{ route('nma.tickets') }}">Register</a>
                        </div>
                        <a data-scroll href="#featured">
                            <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/slider/nhsflier.jpg" alt="">
                    <div class="carousel-caption">
                        <a data-scroll href="#featured">
                            <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/slider/bg-2.jpg" alt="">
                    <div class="carousel-caption">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">2nd National Health Summit<br> International
                            Conference Center, Abuja.<br> Nov 04 - Nov 08, 2019</h2>
                        <div class="buttons">
                            <a class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="300ms"
                               href="{{ route('nma.tickets') }}">Register</a>
                        </div>
                        <a data-scroll href="#featured">
                            <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
                <span class="icon-arrow-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
                <span class="icon-arrow-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <!-- end for small screens -->
    <section id="featured" class="section" style="box-shadow: 0 4px #f2f2f2; background: url('assets/img/background/pcc.jpg'); background-size: contain">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInLeft" data-wow-delay="0.2s"><span style="color: #42b3e5">Patient Centered Care</span>
                    </h2>
                    <!-- <p class="section-subcontent" style="text-align:left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. A <br> enean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p> -->
                    <div class="col-md-6 col-sm-6">
                        <div class="blog-post single-gallery">
                            <div class="post-content" style="background-color: #fff; opacity: 0.8;">
                                <div class="wow fadeInLeft" data-wow-delay="0.1s">

                                    <h4 style="text-align:left">Expectations?</h4>
                                    <div class="expectationsShort">
                                        <p style="text-align:left; color: #000; font-size: 18px">This November, Abuja will host an epoch-making event
                                            where stakeholders in Health will proffer solutions to the numerous challenges... <a href="javascript:;" data-id="expectations" class="showExpect">  Read More</a></p>
                                    </div>
                                    <div class="expectationsLong" style="display: none">
                                        <p style="text-align:left; color: #000; font-size: 18px">This November, Abuja will host an epoch-making event
                                        where stakeholders in Health will proffer solutions to the numerous challenges
                                        in our dear country Nigeria. <br> Nigeria Medical Association is hosting its 2nd
                                        National Health Summit and delegates can expect:</p>
                                        <ul style="color: #000; font-size: 18px">
                                            <li style="list-style: circle; text-align: left;margin-left:10px">Inspiring
                                                keynote speakers with decades of experience in Health issues.
                                            </li>
                                            <li style="list-style: circle; text-align: left;margin-left:10px">Interactive
                                                communique sessions.
                                            </li>
                                            <li style="list-style: circle; text-align: left;margin-left:10px">Informative
                                                question and answer sessions.
                                            </li>
                                            <li style="list-style: circle; text-align: left;margin-left:10px">New
                                                breakthrough scientific sessions.
                                            </li>
                                        </ul>
                                        <h5 style="text-align:left">Share this page</h5>
                                        <div style="text-align: left">
                                            {!! $share !!}
                                        </div>
                                        <a href="javascript:;" class="hideExpect" data-id="expectations" style="float: right; font-size: 19px; margin-top: -20px">  Read Less</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="blog-post single-gallery">
                            <div class="post-content" style="background-color: #fff; opacity: 0.8;">
                                <div class=" wow fadeInLeft" data-wow-delay="0.2s">

                                    <h4 style="text-align:left">Why Attend?</h4>
                                    <div class="whyAttendShort">
                                        <p style="text-align:left; color: #000; font-size: 18px">The National Health Summit has become a major event of the Nigerian Medical Association (NMA) held every five (5) years... <a href="javascript:;" data-id="whyAttend" class="showExpect"> Read More</a></p>
                                    </div>
                                    <div class="whyAttendLong" style="display: none">
                                        <p style="text-align:left; color: #000; font-size: 18px">The National Health Summit has become a major event of the Nigerian Medical Association (NMA) held every five (5) years.
                                        It serves the strategic purpose of planning and policy formulation for the entire Nigerian Health Sector. </p>
                                        <h5 style="color: #000; font-size: 18px">This has resulted in:</h5>
                                        <ul style="color: #000; font-size: 18px">
                                            <li style="list-style: circle; text-align: left;margin-left:10px">Basic Healthcare Development Fund.</li>
                                            <li style="list-style: circle; text-align: left;margin-left:10px">National Health Act.</li>
                                            <li style="list-style: circle; text-align: left;margin-left:10px">NMA Strategic Plan 2017 – 2022.</li>
                                        </ul>
                                        <h5 style="text-align:left">Share this page</h5>
                                        <div style="text-align: left;">{!! $share !!}</div>
                                        <a href="javascript:;" class="hideExpect" data-id="whyAttend" style="float: right; font-size: 19px; margin-top: -20px"> Read Less</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12 col-sm-12">
                        <div class="blog-post single-gallery">
                            <div class="post-content" style="background-color: #fff; opacity: 0.8;">
                                <div class="wow fadeInLeft" data-wow-delay="0.2s">

                                    <h4 style="text-align:left">Who Should Attend?</h4>
                                    <div class="whoShouldShort">
                                        <div class="col-md-6" style="color: #000; font-size: 18px">
                                            <ul>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">All Stakeholders in the Health Sector.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6" style="color: #000; font-size: 18px">
                                            <ul style="color: #000; font-size: 18px">
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Medical and Dental practitioners. </li>
                                            </ul>
                                        </div>
                                        <p><a href="javascript:;" data-id="whoShould" class="showExpect" style="font-size: 19px"> Read More</a></p>
                                    </div>
                                    <div class="whoShouldLong" style="display: none">
                                        <div class="col-md-6" style="color: #000; font-size: 18px">
                                            <ul>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">All Stakeholders in the Health Sector.</li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Leaders in health care industries, Ministers, Permanent Secretaries. </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Commissioners Directors of MDA (Ministries, Agencies and Parastatals). </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Medical and Health Students. </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Patients, Health Journalist/Media. </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">All Health Sector Workers. </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul style="color: #000; font-size: 18px">
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Medical and Dental practitioners. </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Pharmacist and Pharmaceuticals. </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Nurses. </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Medical laboratory Scientists. </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">All Health workers at Primary, Secondary and Tertiary level. </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Medical NGO’s. </li>
                                                <li style="list-style: circle; text-align: left;margin-left:10px">Medical and Health Unions and Associations.</li>
                                            </ul>
                                        </div>
                                        <h5 style="text-align:left">Share this page</h5>
                                        <div style="text-align: left;">{!! $share !!}</div>
                                        <a href="javascript:;" class="hideExpect" data-id="whoShould" style="float: right; font-size: 19px; margin-top: -20px"> Read Less</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="face_of_nhs" class="section" style="padding: 30px 0;background-color: #efefef;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class=" wow fadeInDown" data-wow-delay="0.3s">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="day1">
                                <div class="row">
                                    <div class="col-md-12 board text-center">
                                        <div class="member stephen" style="padding-bottom: 1px; padding-top: 0">
                                            <img src="{{ asset('assets/img/slider/face of nhs.jpg') }}" alt="cma" class="img-responsive" style="display: unset">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="section">
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-sm-12 col-xs-12" style="padding-right: 0; padding-left: 0">
            <div class="pricing-table wow fadeInLeft" data-wow-delay="0.3s">
              <h3>NMA President's Invitation</h3>
              <p style="text-align: justify; padding: 0 15px">
                <img src="assets/img/teacher/team-2.png" width="30%" height="auto" style="margin: 0 auto; border-radius: 50%;">
              On behalf of the National Officers Committee, National Executive Council and all Nigerian Medical and Dental Practitioners, I am delighted to invite you to the 2nd Edition of the National Health Summit organized by the Nigerian Medical Association holding between 4th and 8th November 2019.</p>
              <div class="button-area">
                <a href="{{ asset('pdf/President remarks on summit.pdf') }}" class="btn btn-common">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12" style="padding-right: 0; padding-left: 0">
            <div class="pricing-table pricing-active wow fadeInDown" data-wow-delay="0.3s">
              <h3>CPC Chairman's Remark</h3>
              <p style="text-align: justify; padding: 0 15px">
              <img src="assets/img/teacher/team-5.png" width="30%" height="auto" style="margin: 0 auto; border-radius: 50%;">
              I am delighted as Chairman of the Central Planning Committee on behalf of the President and National Officers’ Committee of the Nigerian Medical Association (NMA) to respectfully invite you and your esteemed organisation to participate in the events of the 2nd National Health Summit (NHS) ...
              </p>
              <div class="button-area">
                <a href="{{ asset('pdf/THE CHAIRMAN NHS 2019.pdf') }}" class="btn btn-common">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12" style="padding-right: 0; padding-left: 0">
            <div class="pricing-table pricing-active wow fadeInDown" data-wow-delay="0.3s">
              <h3>LOC Chairman's Welcome Address</h3>
              <p style="text-align: justify; padding: 0 15px">
                <img src="assets/img/teacher/team-6.png" width="30%" height="auto" style="margin: 0 auto; border-radius: 50%;">
                Invitation to the 2nd National Health Summit (NHS) Abuja 2019. <br>It is my pleasure to invite you to the 2nd Nigeria Medical Association (NMA) National Health Summit (NHS) 2019, on behalf of the Local Organizing Committee.</p>
              <div class="button-area">
                <a href="{{ asset('pdf/EVENT BROCHURE OF THE 2ND NATIONAL HEALTH SUMMIT ABUJA 2019.pdf') }}" class="btn btn-common">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="organizers" class="section" style="background: url('assets/img/background/NOC-Group-pix.jpg'); background-size: contain;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0s"><span
                                style="color: #42b3e5">Organizers</span></h2>
                    <p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s" ><span style="color: #fff">Meet the organizing committee</span></p>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 about">
                    <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.1s">
                        <a href="{{ route('nma.about.noc') }}" class="btn-cta btn btn-common">NOC Members</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 about" style="margin-bottom: 10px">
                    <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('nma.about.cpc') }}" class="btn-cta btn btn-common">CPC Members</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 about">
                    <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.3s">
                        <a href="{{ route('nma.about.loc') }}" class="btn-cta btn btn-common">LOC Members</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 about">
                    <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ route('nma.about.secretariat') }}" class="btn-cta btn btn-common" >Secretariat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInUp animated" data-wow-delay="0s"
                        style="visibility: visible;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">
                        <span style="color: #42b3e5">Guests </span></h2>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInRight animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="team-desc">
                            <h3>Special Guest of Honour</h3>
                            <h5>His Excellency, President Mohammadu Buhari GCFR</h5>
                            <p>Muhammadu Buhari GCFR is the President of
                                Nigeria and Commander-in-chief of the Armed Forces. <a
                                        href="https://en.wikipedia.org/wiki/Muhammadu_Buhari"
                                        target="_blank">Read More</a></p>

                        </div>
                        <div class="team-img">
                            <img src="assets/img/teacher/mohammadu_buhari.png" alt="" style="background: none">

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInLeft animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="team-desc">
                            <h3>Guest of Honour</h3>
                            <h5>His Excellency, Prof. Yemi Osinbajo.</h5>
                            <p>Oluyemi Oluleke "Yemi" Osinbajo is the Vice President of Federal Republic of Nigeria.<a href="https://en.wikipedia.org/wiki/Yemi_Osinbajo" target="_blank"> Read More</a> </p>
                        </div>
                        <div class="team-img">
                            <img src="assets/img/teacher/osibanjo_vp.png" alt="">

                        </div>
                    </div>
                </div>

                <div class="col-md-push-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInLeft animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="team-desc">
                            <h3>Chairman of the Occasion</h3>
                            <h5>General Yakubu Gowon Rtd GcfR, former head of state</h5>
                            <p>General Yakubu "Jack" Dan-Yumma Gowon is the former head of
                                state
                                (Head of the Federal Military Government) of Nigeria from 1966 to 1975. <a href="https://en.wikipedia.org/wiki/Yakubu_Gowon" target="_blank">Read More</a> </p>
                        </div>
                        <div class="team-img">
                            <img src="assets/img/teacher/img-4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="intro" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="content-text">
                        <h2>Register for NHS Conference Here</h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <a href="{{ route('nma.tickets') }}" class="btn-cta btn btn-common" style="margin-top: 10px"><i class="icon-control-play"></i> Register Today</a>
                </div>
            </div>
        </div>
    </section>

    <section id="speakers" class="section " style="background-color: #000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInUp animated" data-wow-delay="0s"
                        style="visibility: visible;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">
                        <span style="color: #fff">Speakers</span></h2>
                </div>
                <div class="col-md-2 col-xs-12"></div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="speakers-member wow fadeIn animated" data-wow-delay="0.3s"
                         style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                        <div class="member-img">
                            <img src="assets/img/teacher/img-2.png" alt="">
                        </div>
                        <div class="member-desc">
                            <h3>Keynote Speaker</h3>
                            <h5>His Excellency, Senator Ifeanyi Okowa</h5>
                            <p>Ifeanyi Arthur Okowa (born 8 July, 1959) is a Nigerian politician who is the incumbent
                                Governor of Delta State. He was inaugurated as a governor on 29 May 2015...</p>
                            <p><a href="https://en.wikipedia.org/wiki/Ifeanyi_Okowa" target="_blank">Read More</a></p>
                            <div class="social-icon">
                                <a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="speakers-member wow fadeIn animated" data-wow-delay="0.1s"
                         style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                        <div class="member-img">
                            <img src="assets/img/teacher/img-1.png" alt="">
                        </div>
                        <div class="member-desc">
                            <h3>Guest Speaker</h3>
                            <h5>His Excellency, Abdul Rahman Mohammed Al-owels</h5>
                            <p>Abdul Rahman Bin Mohammed Al Owais (1967) is the minister of Ministry of Health in the
                                United Arab Emirates. A graduate of ...</p>
                            <p><a href="https://en.wikipedia.org/wiki/Abdul_Rahman_Mohammed_Al_Owais" target="_blank">Read
                                    More</a></p>
                            <div class="social-icon">
                                <a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="intro" class="section">
        <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: center; margin-bottom: 10px">
                <div class="content-text">
                    <h2>NHS Conference App available</h2>
                </div>
              </div>
                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 10px">
                  <a href="https://play.google.com/store/apps/details?id=com.evolveIT.nhsconference" target="_blank"><img src="assets\img\sponsors\Google play.png" class="img-responsive"></a>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 ">
                  <a href="#"><img src="assets\img\sponsors\App Store.png" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInUp animated" data-wow-delay="0s"
                        style="visibility: visible;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">
                        <span style="color: #42b3e5">Hosts </span></h2>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInRight animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="team-desc">
                            <h3>Chief Host</h3>
                            <h5>Minister FCT Alhaji Bello Mohammed</h5>
                            <p>Alhaji Muhammad Musa Bello, who hails from Adamawa state, was born on 8th January 1959.
                                An old boy of the prestigious Barewa College, Zaria, the Minister is a graduate of
                                Ahmadu Bello University (ABU), ... <a
                                        href="https://www.fcda.gov.ng/index.php/administration/fct-ministers"
                                        target="_blank">Read More</a></p>

                        </div>
                        <div class="team-img">
                            <img src="assets/img/teacher/team-1.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInLeft animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="team-desc">
                            <h3>Chief Co-Host</h3>
                            <h5>Governor of Nasarawa State; Abdullahi Sule</h5>
                            <p>Engineer Abdullahi Sule (born December 26, 1959) is a Nigerian entrepreneur, businessman and politician. He is the Governor of Nasarawa State in the 2019 Governorship ...<a
                                        href="https://en.wikipedia.org/wiki/Abdullahi_Sule"
                                        target="_blank">Read More</a></p>
                        </div>
                        <div class="team-img">
                            <img src="assets/img/teacher/team-7.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInLeft animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                         <div class="team-img">
                            <img src="assets/img/teacher/team-2.png" alt="">

                        </div>
                        <div class="team-desc">
                            <h3>Host</h3>
                            <h5>Dr. Francis Adedayo Faduyile</h5>
                            <p>Dr Faduyile is a highly experienced pathologist who has extensive experienced in care of
                                patient with any tissue,body fluid related disease and cancer.He is also a forensic
                                expert. He is the President of NMA </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInLeft animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                         <div class="team-img">
                            <img src="assets/img/teacher/Osahon Enabulele.png" alt="">

                        </div>
                        <div class="team-desc">
                            <h5>Dr Osahon Enabulele</h5>
                            <p>Dr Osahon Enabulele, past President of NMA & President Elect Commonwealth Medical Association.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInLeft animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="team-desc">
                            <!-- <h3>Host</h3> -->
                            <h5>Dr. Ofem Enang</h5>
                            <h4>Chairman of CPC</h4>
                            <p>Dr Ofem Enang is a Consultant Physician/Endocrinologist with the University of Calabar Teaching Hospitals.

                                </p>
                        </div>
                        <div class="team-img">
                            <img src="assets/img/teacher/team-5.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInLeft animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="team-desc">
                            <h5>Dr. Ekpe Philips Uche</h5>
                            <h4>Chairman of LOC</h4>
                            <p>He is a Consultant Obstetrician Gynecologists, Medical Director of Nyanya General Hospital, CEO Guinea Savannah Medical Center & Chairman NMA-FCT</p>
                        </div>
                        <div class="team-img">
                            <img src="assets/img/teacher/team-6.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInRight animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="team-desc">
                            <h5>Prof. Vajira H. W. Dissanayake</h5>
                            <p>Prof. Dissanayake is a Medical Geneticist. His special interests are Genetics & Genomic
                                Medicine; Biomedical informatics; and Bioethics. He is currently the President of the
                                Commonwealth Medical Association ... <a
                                        href="https://www.emedevents.com/speaker-profile/vajira-h-w-dissanayake"
                                        target="_blank">Read More</a></p>
                        </div>
                        <div class="team-img">
                            <img src="assets/img/teacher/team-3.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInLeft animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="team-desc">
                            <h5>Dr. Osagie Ehanire</h5>
                            <p>Dr. Osagie E. Ehanire is an outstanding surgeon and holds an (MD) of college of Medicine,
                                Ludwig Maximillians University, Munich. He is the Minister of Health Federal republic of
                                Nigeria..
                                <a href="https://www.tydanjumafoundation.org/board-of-trustees/dr-osagie-e-ehanire"
                                   target="_blank">Read More</a></p>
                        </div>
                        <div class="team-img">
                            <img src="assets/img/teacher/team-4.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-member wow fadeInLeft animated" data-wow-delay="0.2s"
                         style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                         <div class="team-img">
                            <img src="assets/img/teacher/Adeleke Mamora.png" alt="">

                        </div>
                        <div class="team-desc">
                            <h5>Dr. Adeleke Mamora</h5>
                            <p>Dr. Adeleke Olorunnimbe Mamora is the newly-appointed Nigerian Minister of State for Health. President Muhammadu Buhari inaugurated new ministers on 21st August 2019.
                                <a href="https://healthguide.ng/nigerian-minister-of-state-health-adeleke-olorunnimbe-mamora/"
                                   target="_blank">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="countdown-timer section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="text">
                        <h2>2nd National <br>Health Summit</h2>
                        <h4>International Conference Center, Abuja. ICC <br> Nov 04, 2019 - Nov 08, 2019 </h4>
                        <a href="{{ route('nma.tickets') }}" class="btn btn-lg btn-common">Register</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style='padding-left: 50px;'>
                    <div class="time-countdown">
                        <div id="clock" class="time-count"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="event" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="tab-block wow fadeInDown" data-wow-delay="0s">
                        <a href="https://goo.gl/maps/Z61t8zB6WaraJ2s2A" target="_blank">
                            <div class="icon">
                                <i class="icon-location-pin"></i>
                            </div>
                        </a>
                        <div class="desc">
                            <h4>Location</h4>
                            <p>International Conference Center, Abuja.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="tab-block wow fadeInDown" data-wow-delay="0.2s">
                        <div class="icon">
                            <i class="icon-calendar"></i>
                        </div>
                        <div class="desc left">
                            <h4>Date</h4>
                            <p>04 Nov - 08 Nov</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="content-text">
                        <h3 class="wow fadeInUp" data-wow-delay="0.8s">Get fresh insights on Patient Centered Care.</h3>
                        <h3 class="wow fadeInUp" data-wow-delay="0.5s"><strong>Sub-Theme:</strong> </h3>
                        <p class="wow fadeInUp" data-wow-delay="1s"><span style="color: #fff">Improving the Nigerian Health Indices, Inter-professional Relationship, Brain Drain &amp; Brain Gain, Universal Health Coverage, Public Private Partnership, Reversing Medical Tourism.</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cma" class="section" style="padding: 30px 0;background-color: #efefef;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class=" wow fadeInDown" data-wow-delay="0.3s">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="day1">
                                <div class="row">
                                    <div class="col-md-12 board text-center">
                                        <div class="member stephen" style="padding-bottom: 1px; padding-top: 0">
                                            <img src="{{ asset('assets/img/slider/cma.jpg') }}" alt="cma" class="img-responsive" style="display: unset">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="schedule" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0s"><span
                                style="color: #42b3e5">Schedule</span></h2>
                    <p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">The Schedule is designed to be
                        convenient for both lecturers and participants.</p>

                    <div class="main-board wow fadeInDown" data-wow-delay="0.3s">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="day1">
                                <div class="row">
                                    <div class="col-md-12 board text-center">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="member stephen" style="padding-bottom: 1px">
                                                <div class="button">
                                                    <a href="#" class="btn-large bg-1"><img
                                                                src="assets/img/microphone.png" alt=""> Theme</a>
                                                </div>
                                                <h4>Patient Centered Care</h4>
                                            </div>
                                            <div class="member jeson">
                                                <div class="button">
                                                    <a href="#" class="btn-large bg-2"><img
                                                                src="assets/img/microphone.png" alt=""> Sub Theme</a>
                                                </div>

                                                <ul style="margin-top: 30px">
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Improving the Nigerian Health Indices.
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Inter-professional Relationship.
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Brain Drain &amp; Brain Gain.
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Universal Health Coverage.
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Public Private Partnership.
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Reversing Medical Tourism.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="member stephen">
                                                <div class="button">
                                                    <a href="#" class="btn-large bg-1"><img
                                                                src="assets/img/microphone.png" alt=""> 03 NOV</a>
                                                </div>

                                                <ul style="margin-top: 30px">
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Arrival of the Commonwealth Medical Association. CMA
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="member stephen">
                                                <div class="button">
                                                    <a href="#" class="btn-large bg-1"><img
                                                                src="assets/img/microphone.png" alt=""> 04 NOV</a>
                                                </div>
                                                <ul style="margin-top: 30px">
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        CMA Triennial Conference Meeting at Hawthorn Suites & Apartment.
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Arrival and Cocktail, (Banquet Hall, ICC).
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="member jeson">
                                                <div class="button">
                                                    <a href="#" class="btn-large bg-2"><img
                                                                src="assets/img/microphone.png" alt=""> 05 NOV</a>
                                                </div>
                                                <ul style="margin-top: 30px">
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        The Investiture of the New President of Commonwealth Medical Association (CMA), Dr. Osahon Enabulele: A past NMA President.
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Opening Ceremony - National Health Summit.
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Presentation, Panel &amp; Plenary.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="member stephen">
                                                <div class="button">
                                                    <a href="#" class="btn-large bg-1"><img
                                                                src="assets/img/microphone.png" alt=""> 06 NOV</a>
                                                </div>
                                                <ul style="margin-top: 30px">
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Presentation, Panel &amp; Plenary.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="member stephen">
                                                <div class="button">
                                                    <a href="#" class="btn-large bg-2"><img
                                                                src="assets/img/microphone.png" alt=""> 07 NOV</a>
                                                </div>
                                                <ul style="margin-top: 30px">
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Presentation, Panel &amp; Plenary.
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        FCT Tour.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="member jeson">
                                                <div class="button">
                                                    <a href="#" class="btn-large bg-1"><img
                                                                src="assets/img/microphone.png" alt=""> 08 NOV</a>
                                                </div>
                                                <ul style="margin-top: 30px">
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Closing Ceremony CAMAN &amp; CMA
                                                        <ul>
                                                            <li style="list-style: disc; text-align: left;margin-left:10px">
                                                                Triennial Conference/Meeting.
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Presentation, Resolution, Communique &amp; Dinner.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="member stephen">
                                                <div class="button">
                                                    <a href="#" class="btn-large bg-2"><img
                                                                src="assets/img/microphone.png" alt=""> 09 NOV</a>
                                                </div>
                                                <ul style="margin-top: 30px">
                                                    <li style="list-style: circle; text-align: left;margin-left:10px">
                                                        Departure!.
                                                    </li>
                                                </ul>
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
    </section>

@endsection
