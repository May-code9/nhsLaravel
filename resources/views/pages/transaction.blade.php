@extends('layouts.master')
@section('content')

<div class="page-header">
  <div class="container">
    <div class="page-header-inner">
      <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
        <li><a href="/">Home</a></li>
        <li>Register Here</li>
        <li class="page">Make Payment</li>
      </ol>
      <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
        Make Payment
      </h1>
    </div>
  </div>
</div>

<section id="contact">
  <div class="container">
    <div class="row wow fadeInDown" data-wow-delay="0.3s">
      <div class="col-md-8 col-sm-7 col-md-push-2 contact-form" style="margin:0">
        <div role="form" >

          <div class="title-header">
            <h3 class="title-medium pull-left">Make Payment for our Conference</h3>
          </div>
          <div class="row">

            <div class="col-md-12">
              <div class="label-line textarea" style="height: 110px">
                <span class="span"></span>
                <label class="label transition">Registration Fee</label>
                <input type="text" class="input" id="reg_fee" value="<?php echo $price/1000 ?>,000" style="padding-top: 45px" disabled>
                <input type="hidden" id="email" value="{{Auth::user()->email}}">
                <input type="hidden" id="first_name" value="{{Auth::user()->first_name}}">
                <input type="hidden" id="last_name" value="{{Auth::user()->last_name}}">
                <input type="hidden" id="phone" value="{{Auth::user()->phone}}">
                <div class="help-block with-errors"></div>
              </div>
              <button type="submit" id="pay" class="btn btn-common" onclick="payWithPaystack(price)">Pay <i class="icon-paper-plane" aria-hidden="true"></i></button>
              <script src="https://js.paystack.co/v1/inline.js"></script>

              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
