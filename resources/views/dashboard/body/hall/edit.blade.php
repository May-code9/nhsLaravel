@extends('dashboard.base')
@section('title')
Hall | Edit
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 570px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-6 push-2">
        <section class="card">
          <div class="card-header">Edit Hall</div>
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
            <form class="form-horizontal" role="form" method="POST" action="/hall/{{ $editHall->id }}" >
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="hall">Hall Name</label>
                  <input type="text" class="form-control" id="hall" placeholder="Hall Here" name="hall" value="{{ $editHall->hall }}" required>
                  @if ($errors->has('hall'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('hall') }}</strong>
                  </span>
                  @endif
                </div>

              </div>

              <button class="btn btn-primary" type="submit">Update</button>
            </form>
          </div>
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Delete Audio</div>
          <div class="card-body">
            <form class="form-horizontal" role="form" method="POST" action="/hall/{{$editHall->id}}">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <h5 style="color: #c34f30">Please Be sure you want to delete this Hall. Once deleted, it cannot be retrieved.</h5>
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </div>
        </section>
      </div>
    </div>
  </section>
</section>
@endsection
