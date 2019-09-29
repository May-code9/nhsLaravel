@extends('dashboard.base')
@section('title')
Picture | Edit
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 570px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Edit Picture</div>
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
            <form class="form-horizontal" role="form" method="POST" action="/pictureUpload/{{$editPicture->id}}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="picture_title">picture Title</label>
                  <input type="text" class="form-control" id="picture_title" placeholder="Picture Title Here" name="picture_title" value="{{ $editPicture->picture_title }}" required>
                  @if ($errors->has('picture_title'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('picture_title') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="picture_details">Picture Details</label>
                  <textarea class="form-control" id="picture_details" name="picture_details" placeholder="picture Details Here" maxlength="150" required>{{ $editPicture->picture_details }}</textarea>
                </div>
              </div>

              <button class="btn btn-primary" type="submit">Upload</button>
              <a class="btn btn-primary right" href="{{ route('pictureUpload.index') }}"> Back</a>
            </form>

          </div>
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Delete Picture</div>
          <div class="card-body">
            <form class="form-horizontal" role="form" method="POST" action="/pictureUpload/{{$editPicture->id}}">
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
