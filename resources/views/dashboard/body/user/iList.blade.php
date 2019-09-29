@extends('dashboard.base')
@section('title')
    User | List User
@endsection
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper" style="min-height: 570px;">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-5 push-2">
                    <section class="card">
                        <div class="card-header">Scan QR Code</div>
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

                            <div class="form-horizontal" role="form" >
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <div style="text-align: center">{{ $username }}</div>
                                        <div style="text-align: center">Registration Status: <strong>@if($status == 0) Not Completed @else Completed @endif</strong></div>
                                        {!! $qrcode !!}
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-footer"><a class="btn btn-primary right" href="{{ route('users.index') }}"> Back</a></div>
                    </section>
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->
@endsection
