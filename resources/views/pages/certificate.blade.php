@extends('layouts.master')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
                    <li><a href="/">Home</a></li>
                    <li class="page">My Certificate</li>
                </ol>
                <h1 class="page-title wow fadeInRight" data-wow-delay="300ms"> Welcome {{ Auth::user()->first_name }}</h1>
            </div>
        </div>
    </div>

    <section id="content" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-post single-gallery">
                        <div class="post-content">
                            <h3 class="post-title"><a href="#">Here is your certificate</a></h3>
                            <div class="meta">

                            </div>
                            <p><strong>Full Name:</strong> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                            <img src="{{ asset('certificates/' . $getCertificate->certificate) }}" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
