@extends('layouts.master')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
                    <li><a href="/">Home</a></li>
                    <li class="page">About Us</li>
                </ol>
                <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
                    Secretariat
                </h1>
            </div>
        </div>
    </div>


    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0s">Secretariat</h2>
                    <div class="col-md-2"></div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Akpa Emeka.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Akpa Emeka</h4>
                                <h6>Head of Administration</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Solomon Ogbaje.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Solomon Ogbaje</h4>
                                <h6>Admin/Protocol</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Abdulazeez O. Ochu.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Abdulazeez O. Ochu </h4>
                                <h6>Admin/Protocol</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection