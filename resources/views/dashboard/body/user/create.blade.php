@extends('dashboard.base')
@section('title')
    User | Payment
@endsection
@section('content')
    <section id="main-content">
        <section class="wrapper" style="min-height: 570px;">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-8 push-1">
                    <section class="card">
                        <div class="card-header">Make Payment</div>
                        <div class="card-body">

                            @if(session('success_status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success_status') }}
                                </div>
                            @endif
                            @if(session('warning_status'))
                                <div class="alert alert-warning" role="alert">
                                    {{ session('warning_status') }}
                                </div>
                            @endif
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('users.store') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="audio_title">First Name</label>
                                        <input type="text" class="form-control" id="first_name"
                                               placeholder="First Name Here" name="first_name" required>
                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('first_name') }}</strong>
                  </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="audio_title">Last Name</label>
                                        <input type="text" class="form-control" id="last_name"
                                               placeholder="Last Name Here" name="last_name" required>
                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                              </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="audio_title">Phone</label>
                                        <input type="text" class="form-control" id="phone"
                                               placeholder="Phone Number Here" name="phone" required>
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                              </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="audio_title">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email Here"
                                               name="email" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="audio_title">Password</label>
                                        <input type="password" class="form-control" id="password"
                                               placeholder="Password Here" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="audio_title">Amount</label>
                                        <input type="text" class="form-control" id="amount" value="₦<?php echo (int)$amount/1000 ?>,000"
                                               disabled>
                                        @if ($errors->has('amount'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                              </span>
                                        @endif
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">Upload</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
