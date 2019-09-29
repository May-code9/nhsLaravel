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
                    NOC Members
                </h1>
            </div>
        </div>
    </div>


    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0s">NOC Members</h2>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Francis Adedayo Faduyile.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Francis Adedayo Faduyile</h4>
                                <h6>President NMA</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Tijo Kenneth Mingeh.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Tijo Kenneth Mingeh</h4>
                                <h6>1st Vice President</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Ofem Egbe Enang.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr Ofem Egbe Enang </h4>
                                <h6>2nd Vice President</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Olumuyiwa Peter Odusote.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Olumuyiwa Peter Odusote</h4>
                                <h6>Secretary General</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Benjamin  Umezurike.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr Benjamin Umezuirike</h4>
                                <h6>Deputy Secreatry General NMA</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Ayuwaja Nayagawa.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Ayuwaja Nayagawa</h4>
                                <h6>National Treasurer</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Abdulgafar Jimoh.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr Abdulgafar O. Jimoh </h4>
                                <h6>Financial Secretary NMA </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Obimakinde.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr Obitade Obimakinde </h4>
                                <h6>National Publicity Secretary</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Umoh.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Augustine Umoh</h4>
                                <h6>Editor, NMJ</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Mike Ogirima.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Mike Ogirima</h4>
                                <h6>Immediate Past President</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInDown" data-wow-delay="0.1s">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/img/feature/Dr. Sununu.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="descr">
                                <h4>Dr. Yusuf Tanko Sununu </h4>
                                <h6>Immediate Past Secretary General</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection