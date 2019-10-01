@extends('layouts.master')
@section('content')

    <div class="page-header" style="background: url('assets/img/background/tickets.jpg')">
        <div class="container">
            <div class="page-header-inner">
                <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
                    <li><a href="/">Home</a></li>
                    <li class="page">Register Here</li>
                </ol>
                <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
                    Registration
                </h1>
            </div>
        </div>
    </div>

    <section class="countdown-timer" style="background: #f0f3f5">
        <div class="container" >
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="text">
                        <h2>Early Bird<br>Registration Closes in:</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="time-countdown" style="margin-top: 20px">
                        <div id="earlyBird" class="time-count"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr style="margin: 0">

    <section id="contact">
        <div class="container">
            <div class="row wow fadeInDown" data-wow-delay="0.3s">
                <div class="col-md-6 contact-form" id="formMargin" style="margin:0 0 20px; opacity: 0.8; padding-top: 17px">
                    <div class="single-gallery">
                        <div class="post-content">
                            <h3 class="post-title"><a href="#">Registration Details</a></h3>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p style="color: #D62430"><strong>Early Bird:</strong></p>
                                <ul>
                                    <li style="color: black; list-style: circle; text-align: left;margin-left:10px">4th
                                        September to 4th October
                                    </li>
                                    <li style="color: black; list-style: circle; text-align: left;margin-left:10px">
                                        ₦20,000
                                    </li>
                                </ul>
                                <hr style="color: black">
                                <p style="color: #D62430"><strong>Late Registration:</strong></p>
                                <ul>
                                    <li style="color: black; list-style: circle; text-align: left;margin-left:10px">5th
                                        October to 3rd November
                                    </li>
                                    <li style="color: black; list-style: circle; text-align: left;margin-left:10px">
                                        ₦25,000
                                    </li>
                                </ul>
                                <hr style="color: black">
                                <p style="color: #D62430"><strong>Onsite:</strong></p>
                                <ul>
                                    <li style="color: black; list-style: circle; text-align: left;margin-left:10px">
                                        Onsite 4th November
                                    </li>
                                    <li style="color: black; list-style: circle; text-align: left;margin-left:10px">
                                        ₦30,000
                                    </li>
                                </ul>
                            </div>

                            <div class="post-content" style="padding-bottom: 18px">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 contact-form"
                     style="margin:0 0 20px; opacity: 0.8;max-height: 827px;padding-top: 17px">
                    <form role="form" data-toggle="validator" action="{{ route('nma.tickets') }}" method="POST">
                        @csrf
                        <div class="title-header">
                            <h3 class="title-medium pull-left">Register here for our Conference</h3>

                        </div>
                        <div class="row">
                            <small style="color: #ff0000">Password does not have to be your gmail password. Use a password you can remember.</small>
                            <div class="col-md-6">
                                <div class="label-line">
                                    <span class="span" style="background: black"></span>
                                    <label class="label transition" style="color: black">First Name</label>
                                    <input type="text" class="input" id="first_name" name="first_name" required
                                           data-error="Please enter your first name" style="color: #000">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="label-line">
                                    <span class="span" style="background: black"></span>
                                    <label class="label transition" style="color: black">Last Name</label>
                                    <input type="text" class="input" id="last_name" name="last_name" required
                                           data-error="Please enter your last name" style="color: #000">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="label-line">
                                    <span class="span" style="background: black"></span>
                                    <label class="label transition" style="color: black">Phone</label>
                                    <input type="text" class="input" id="phone" name="phone" required
                                           data-error="Please enter your phone" style="color: #000">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="label-line">
                                    <span class="span" style="background: black"></span>
                                    <label class="label transition" style="color: black">Email</label>
                                    <input type="email" class="input @error('email') is-invalid @enderror" id="email"
                                           name="email" required data-error="Please enter your email"
                                           style="color: #000">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="label-line">
                                    <span class="span" style="background: black"></span>
                                    <label class="label transition" style="color: black">Password</label>
                                    <input type="password" class="input @error('password') is-invalid @enderror"
                                           id="password" name="password" required
                                           data-error="Please enter your password" style="color: #000">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="label-line">
                                    <span class="span" style="background: black"></span>
                                    <label class="label transition" style="color: black">Confirm Password</label>
                                    <input type="password" class="input" id="password-confirm"
                                           name="password_confirmation" required
                                           data-error="Please confirm your password" style="color: #000">

                                </div>
                            </div>
                            <div class="col-md-12">

                                <button type="submit" id="form-submit" class="btn btn-common">Send <i
                                            class="icon-paper-plane" aria-hidden="true"></i></button>

                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-6">
                                <p class="label transition">Already registered? <a href="{{ route('login') }}">Login
                                        Here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
