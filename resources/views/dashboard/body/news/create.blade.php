@extends('dashboard.base')
@section('title')
News | Create
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 570px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Upload News</div>
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
            <form class="form-horizontal" role="form" method="POST" action="{{ route('newsUpload.store') }}">
              @csrf
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="audio_title">News Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Title Here" name="title" maxlength="20" required>
                  @if ($errors->has('title'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="audio_details">News Details</label>
                  <textarea class="form-control" id="details" name="details" placeholder="News Details Here" maxlength="350" required></textarea>
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
