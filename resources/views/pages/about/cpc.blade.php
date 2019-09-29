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
                    CPC Members
                </h1>
            </div>
        </div>
    </div>


    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0s">CPC Members</h2>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Ofem Egbe Enang.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Ofem Egbe Enang</h4>
                                <h6>Vice President 2 &amp; Chairman CPC</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Benjamin  Umezurike.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Benjamin  Umezurike</h4>
                                <h6>Deputy Secretary General &amp; Secretary CPC</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Abdulgafar Jimoh.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Abdulgafar Jimoh</h4>
                                <h6>National Financial Secretary &amp; Member CPC</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr Philips Uche.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Ekpe Philips Uche</h4>
                                <h6>Chairman NMA-FCT, Chairman LOC &amp; Member CPC</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Obimakinde.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Obitade Obimakinde</h4>
                                <h6>National Publicity Secretary &amp; Member CPC</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Zara Mairami.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Zara Mairami</h4>
                                <h6>Chairman National Committee on Health Bank &amp; Member CPC</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. imedimfon Okon.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Imedimfon Okon</h4>
                                <h6>Chairman National Committee on Protocol &amp; Member CPC</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection