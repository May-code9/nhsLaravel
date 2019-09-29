@extends('layouts.master')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
                    <li><a href="/">Home</a></li>
                    <li class="page">My Account</li>
                </ol>
                <h1 class="page-title wow fadeInRight" data-wow-delay="300ms"> Welcome {{ Auth::user()->first_name }}</h1>
            </div>
        </div>
    </div>

    <section id="content" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="blog-post single-gallery">
                        <div class="post-content">
                            <h3 class="post-title"><a href="#">Here are your details</a></h3>
                            <div class="meta">

                            </div>
                            <p><strong>Full Name:</strong> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                            <p><strong>Phone Number:</strong> {{ Auth::user()->phone }}</p>
                            <p><strong>Registration Status:</strong> @if(transaction() == 0 ) Not Completed @else Completed @endif</p>
                            <div class="share">
                                <div class="">
                                    <span>Share this Website</span>
                                </div>
                                {!! $share !!}
                            </div>

                            <div class="post-content">
                                @if(transaction() == 0)
                                <a href="{{ route('nma.transaction') }}" class="btn btn-common">Complete Registration</a>
                                    @endif
                            </div>
                        </div>

                    </div>

                </div>

                <aside id="sidebar" class="col-md-4 right-sidebar">

                    <div class="widget">
                        <h5 class="widget-title">Your QR Code</h5>
                        <div id="post-carousel" class="post-slide owl-carousel" data-slider-pagination="true">
                            <div class="item">
                                {!! $qrcode !!}
                                <div class="post-content">
                                    <h3><a href="#">Scan QR Code to confirm details</a></h3>

                                </div>
                            </div>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>
@endsection