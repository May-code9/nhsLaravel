@extends('dashboard.base')
@section('title')
Add Admin
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 593px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-8 push-1">
        <section class="card">
          <div class="card-header">Add Admin</div>
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
            <form class="form-horizontal" role="form" method="POST" action="{{ route('addAdmin.store') }}">
              @csrf
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="audio_title">User Name</label>
                  <select type="text" class="form-control" id="user_id" placeholder="Audio Title Here" name="user_id" required>
                    <option></option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
                    @endforeach
                  </select>

                </div>
                  <div class="col-md-12 mb-3">
                      <label for="audio_title">Role</label>
                      <select type="text" class="form-control" id="slug" name="slug" required>
                          <option disabled selected>-- Select Admin Role --</option>
                          <option value="1">Helper</option>
                          <option value="2">Admin</option>
                          <option value="4">SuperAdmin</option>
                      </select>

                  </div>
              </div>

              <button class="btn btn-primary" type="submit">Approve</button>
            </form>

          </div>
        </section>
      </div>
    </div>
  </section>
</section>
@endsection
