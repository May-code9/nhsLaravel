@extends('dashboard.base')
@section('title')
Picture | Create
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 570px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Upload Picture</div>
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
            <form class="form-horizontal" role="form" method="POST" action="{{ route('pictureUpload.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="picture_title">Picture Title</label>
                  <input type="text" class="form-control" id="title" placeholder="picture Title Here" name="title" required>
                  @if ($errors->has('title'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="picture_file">Picture File</label>
                  <div class="custom-file">
                    <label class="custom-file-label" for="picture_file">Choose Picture file</label>
                    <input type="file" class="custom-file-input" id="image" name="image" required />
                  </div>
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
