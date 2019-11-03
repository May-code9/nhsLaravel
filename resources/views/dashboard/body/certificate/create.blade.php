@extends('dashboard.base')
@section('title')
Certificate | Upload
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 570px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Upload {{ $user->first_name }} {{ $user->last_name }}'s Certificate</span> </div>
          <div class="card-body">

            @if(certificate($userId) == 1)
            <div class="form-horizontal" role="form" >
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <img src="{{ asset('certificates/' . $getCertificate->certificate) }}" alt="" class="img-fluid">
                </div>
              </div>

            </div>
            @endif

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

            @if(certificate($userId) == 0)
            <form class="form-horizontal" role="form" method="POST" action="/certificate/create/{{$userId}}" enctype="multipart/form-data">
              @csrf

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="certificate">{{ $user->first_name }} {{ $user->last_name }}'s Certificate File</label>
                  <div class="custom-file">
                    <label class="custom-file-label" for="certificate">Choose Certificate file</label>
                    <input type="file" class="custom-file-input" id="certificate" name="certificate" required />
                  </div>
                </div>
              </div>
              <input type="hidden" name="user_id" value="{{$userId}}">
              <button class="btn btn-primary" type="submit">Upload</button>
            </form>
            @endif
            @if(certificate($userId) == 1)
            <a class="btn btn-primary right" href="/certificate/edit/{{$userId}}"> Edit Certificate</a>
            @endif
          </div>
        </section>
      </div>
    </div>
  </section>
</section>
@endsection
