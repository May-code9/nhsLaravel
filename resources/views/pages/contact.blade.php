@extends('layouts.master')
@section('content')

    <div class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
                    <li><a href="/">Home</a></li>
                    <li class="page">Contact</li>
                </ol>
                <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
                    Contact
                </h1>
            </div>
        </div>
    </div>


    <section id="map">
        <div class="container-fluid">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.2187390899076!2d7.489713714786787!3d9.043801393510627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b9781d265ad%3A0x8d4a23560f90ad88!2sAbuja%20International%20Conference%20Centre!5e0!3m2!1sen!2sng!4v1568112499313!5m2!1sen!2sng" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>


    <div class="main-content">

        <section id="contact">
            <div class="container">
                <div class="row wow fadeInDown" data-wow-delay="0.3s">
                    <div class="col-md-8 col-sm-7 contact-form">
                        <form role="form" id="contactForm" action="#" method="post">
                            @csrf
                            <div class="title-header">
                                <h3 class="title-medium pull-left">Send us a message</h3>
                                <div class="icon pull-right"><i class="icon-envelope"></i></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="label-line">
                                        <span class="span"></span>
                                        <label class="label transition">Name</label>
                                        <input type="text" class="input" id="name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label-line">
                                        <span class="span"></span>
                                        <label class="label transition">Email</label>
                                        <input type="email" class="input" id="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="label-line textarea">
                                        <span class="span"></span>
                                        <label class="label transition">Message</label>
                                        <textarea id="message" class="input" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <button type="submit" id="form-submit" class="btn btn-common">Send <i class="icon-paper-plane" aria-hidden="true"></i></button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-5 information">
                        <div class="title-header">
                            <h3 class="title-medium">Contact Information</h3>
                        </div>
                        <div class="contact-datails">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="info">
                                <span class="detail">8 Benghazi Street off Addis Ababa Cresent, Wuse Zone 4, FCT, Abuja.</span>
                            </div>
                        </div>
                        <div class="contact-datails">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="info">
                                <span class="detail">{{ config('app.phone') }}</span>
                            </div>
                        </div>
                        <div class="contact-datails">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="info">
                                <span class="detail"><a href="mailto:nhs.nma@gmail.com" style="color: #fff">nhs.nma@gmail.com</a></span>
                            </div>
                        </div>
                        <div class="social text-center">
                            <a class="social" href="https://twitter.com/HealthNma" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a class="social" href="https://www.instagram.com/nationalhealthsummit/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a class="social" href="https://facebook.com/NMA-National-Health-Summit-2019-101251764570661/" target="_blank"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    @endsection