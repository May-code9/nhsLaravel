@extends('dashboard.base')
@section('title')
    User | Update Payment
@endsection
@section('content')
    <section id="main-content">
        <section class="wrapper" style="min-height: 592px;">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-6 push-2">
                    <section class="card">
                        <div class="card-header">Update Payment <small style="float: right; color: red">Click Update to confirm User Payment</small></div>
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
                            <div class="form-horizontal" role="form">

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="audio_title">User Name</label>
                                        <input type="text" class="form-control" id="user_name" value="{{ $user->first_name }} {{ $user->last_name }}" name="user_name" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="audio_details">Email</label>
                                        <input type="text" class="form-control" id="email" value="{{ $user->email }}" name="email" disabled>
                                    </div>
                                </div>

                                <input type="hidden" value="{{ $user->id }}" id="user_id" name="user_id">

                                <button class="btn btn-primary" type="submit" id="updatePayment">Update</button>
                                <a class="btn btn-success right" href="/users">Back</a>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
