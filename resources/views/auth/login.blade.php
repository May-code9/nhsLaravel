@extends('layouts.master')
@section('content')

    <div class="page-header" style="background: url('assets/img/background/tickets.jpg')">
        <div class="container">
            <div class="page-header-inner">
                <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
                    <li><a href="/">Home</a></li>
                    <li class="page">Login Here</li>
                </ol>
                <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
                    Login
                </h1>
            </div>
        </div>
    </div>

    <section id="contact">
        <div class="container">
            <div class="row wow fadeInDown" data-wow-delay="0.3s">
                <div class="col-md-8 col-sm-7 col-md-push-2 contact-form" style="margin:0 0 20px; opacity: 0.8">
                    <form role="form" data-toggle="validator" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="title-header">
                            <h3 class="title-medium pull-left">Login to view your Account</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="label-line">
                                    <span class="span" style="background: black"></span>
                                    <label class="label transition" style="color: black">Email</label>
                                    <input type="email" class="input @error('email') is-invalid @enderror" id="email"
                                           name="email" required data-error="Please enter your email"
                                           autocomplete="email" style="color: #000">
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
                                           data-error="Please enter your password" autocomplete="current-password"
                                           style="color: #000">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">

                                <button type="submit" id="form-submit" class="btn btn-common">Send <i
                                            class="icon-paper-plane" aria-hidden="true"></i></button>

                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-6">
                                <p class="label transition">Not registered? <a href="{{ route('nma.tickets') }}">Register
                                        Here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
