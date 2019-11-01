@extends('layouts.master')
@section('content')

<div class="page-header">
  <div class="container">
    <div class="page-header-inner">
      <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
        <li><a href="/">Home</a></li>
        <li class="page">Docs</li>
      </ol>
      <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
        Gallery
      </h1>
    </div>
  </div>
</div>

<section id="gallery" class="section">
  <div class="container">
    <div class="col-md-12">
      <h2 class="section-title wow fadeInUp" data-wow-delay="0s">Our Gallery</h2>
    </div>
    <div class="gallery-wrap wow fadeInDown">
      @forelse($getPictures as $getPicture)
      <div class="col-md-4 col-sm-4 col-xs-12 gellery-pn">
        <div class="gallery-item">
          <a href="#"><img src="{{asset('picture/' . $getPicture->image )}}" alt=""></a>
          <div class="overlay">
            <div class="icons">
              <a class="preview lightbox" href="{{asset('picture/' . $getPicture->image )}}"><i class="icon-eye"></i></a>
              <a class="link" href="{{asset('picture/' . $getPicture->image )}}"><i class="icon-link"></i></a>
            </div>
          </div>
        </div>
      </div>
      @empty
      <div class="col-md-12 gellery-pn">
        <div class="gallery-item">
          <h2 class="section-title wow fadeInUp" data-wow-delay="0s">No Image</h2>
        </div>
      </div>
      @endforelse

    </div>
  </div>
</section>


<section id="intro" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="content-text">
          <h2>ARE YOU READY FOR NHS CONFERENCE?</h2>
          <p class="text">If you have not registered, click the <strong>Register Today</strong> button, if you have registered, click <strong>Accomodation</strong> button to view available hotels with discount.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-right">
        <a href="{{ route('nma.tickets') }}" class="btn-cta btn btn-common"><i class="icon-control-play"></i> Register Today</a>
        <a href="{{ route('nma.accomodation') }}" class="btn-cta btn btn-common"><i class="icon-control-play"></i> Accomodation</a>
      </div>
    </div>
  </div>
</section>

@endsection
