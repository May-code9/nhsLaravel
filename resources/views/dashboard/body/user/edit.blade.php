@extends('dashboard.base')
@section('title')
User | Edit
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 570px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Edit User</div>
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
            <form class="form-horizontal" role="form" method="POST" action="/users/{{$user->id}}">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="audio_title">First Name</label>
                  <input type="text" class="form-control" id="first_name"
                  placeholder="First Name Here" name="first_name" value="{{ $user->first_name }}" required>
                  @if ($errors->has('first_name'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('first_name') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="col-md-6 mb-3">
                  <label for="audio_title">Last Name</label>
                  <input type="text" class="form-control" id="last_name"
                  placeholder="Last Name Here" name="last_name" value="{{ $user->last_name }}" required>
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
                  placeholder="Phone Number Here" name="phone" value="{{ $user->phone }}" required>
                  @if ($errors->has('phone'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="col-md-6 mb-3">
                  <label for="audio_title">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email Here"
                  name="email" value="{{ $user->email }}" required>
                  @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <button class="btn btn-primary" type="submit">Update</button>
              <a class="btn btn-success" href="{{ route('users.index') }}" style="float: right">Back</a>
            </form>

          </div>
        </section>
      </div>
    </div>
  </section>
</section>
@endsection
