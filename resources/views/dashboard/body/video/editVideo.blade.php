@extends('dashboard.base')
@section('title')
Video | Edit Full
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 570px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Edit Full Video</div>
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

            <form class="form-horizontal" role="form" method="POST" action="/Edit Video/{{$editFull->id}}" enctype="multipart/form-data">
              @csrf

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="video_title">Video Title</label>
                  <input type="text" class="form-control" value="{{ $editFull->video_title }}" disabled>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="video_file">Youtube Embeded Link</label>
                  <input type="text" class="form-control" id="video_file" name="video_file" placeholder="https://......." required />
                  <h5 style="font-size: 12px">You can get this from afrh youtube's channel, just click on share and copy the embedded link</h5>
                  <h5 style="font-size: 12px">From the embedded link, copy the src file, and paste in the column above</h5>
                </div>
              </div>

              <button class="btn btn-primary" type="submit">Upload</button>
              <a class="btn btn-primary right" href="{{ route('videoUpload.index') }}"> Back</a>
            </form>

          </div>
        </section>
      </div>
    </div>
  </section>
</section>
@endsection
