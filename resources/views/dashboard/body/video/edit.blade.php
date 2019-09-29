@extends('dashboard.base')
@section('title')
Video | Edit
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 570px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Edit Video</div>
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
            <form class="form-horizontal" role="form" method="POST" action="/videoUpload/{{$editVideo->id}}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="video_title">Video Title</label>
                  <input type="text" class="form-control" id="video_title" placeholder="Video Title Here" name="video_title" value="{{ $editVideo->video_title }}" required>
                  @if ($errors->has('video_title'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('video_title') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="video_details">Video Details</label>
                  <textarea class="form-control" id="video_details" name="video_details" placeholder="Video Details Here" maxlength="150" required>{{ $editVideo->video_details }}</textarea>
                </div>
              </div>

              <button class="btn btn-primary" type="submit">Upload</button>
              <a class="btn btn-primary right" href="{{ route('videoUpload.index') }}"> Back</a>
            </form>

          </div>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Delete Video</div>
          <div class="card-body">
            <form class="form-horizontal" role="form" method="POST" action="/videoUpload/{{$editVideo->id}}">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <h5 style="color: #c34f30">Please Be sure you want to delete this file. Once deleted, it cannot be retrieved.</h5>
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </div>
        </section>
      </div>
    </div>
  </section>
</section>
@endsection
