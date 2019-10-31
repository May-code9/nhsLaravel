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
      <div class="col-lg-4">
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
                  <div style="text-align: center">Registration Status: <strong>@if($status == 0) <span style="color: red">Not Completed</span> @else Completed @endif</strong></div>
                  {!! $qrcode2 !!}
                </div>
              </div>

            </div>

          </div>
          <div class="card-footer"><a class="btn btn-primary right" href="{{ route('users.index') }}"> Back</a></div>
        </section>
      </div>

      <div class="col-lg-8">
        <section class="card col-lg-12">

          <header class="card-header">
            <strong>Attendance:</strong>
          </header>
          @if(session('attendance_status'))
          <div class="alert alert-success" role="alert">
            {{ session('attendance_status') }}
          </div>
          @endif
          @if(session('warning_status'))
          <div class="alert alert-warning" role="alert">
            {{ session('warning_status') }}
          </div>
          @endif
          <div style="overflow-x:auto">
            <table class="table table-striped table-advance table-hover">
              <thead>
                <tr>
                  <th><i class="fa fa-user"></i> Id</th>
                  <th><i class="fa fa-building-o"></i> Hall</th>
                  <th><i class="fa fa-folder-open"></i> 04 Nov</th>
                  <th><i class="fa fa-folder-open"></i> 05 Nov</th>
                  <th><i class="fa fa-folder-open"></i> 06 Nov</th>
                  <th><i class="fa fa-folder-open"></i> 07 Nov</th>
                  <th><i class="fa fa-folder-open"></i> 08 Nov</th>
                </tr>
              </thead>
              <tbody>
                @forelse($getHalls as $hall)
                <tr>
                  <td>{{ $hall->id }}</td>
                  <td>{{ $hall->hall }}</td>
                  @if(attendance($hall->id, 1, $user->id) == 0)
                  <td><a href="{{ route('attendance.store') }}" class="btn btn-sm btn-primary mr-2" onclick="event.preventDefault();
                    document.getElementById('attend{{ $hall->id }}{{ $user->id }}1').submit();">Attend</a></td>
                    <form id="attend{{ $hall->id }}{{ $user->id }}1" action="{{ route('attendance.store') }}" method="POST" style="display: none;">
                      @csrf
                      <input type="hidden" name="hall_id" value="{{ $hall->id }}">
                      <input type="hidden" name="day" value="1">
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </form>
                    @else
                    <td><a href="javascript:;" class="btn btn-sm btn-success mr-2"><i class="fa fa-check"></i></a></td>
                    @endif
                    @if(attendance($hall->id, 2, $user->id) == 0)
                    <td><a href="{{ route('attendance.store') }}" class="btn btn-sm btn-primary mr-2" onclick="event.preventDefault();
                      document.getElementById('attend{{ $hall->id }}{{ $user->id }}2').submit();">Attend</a></td>
                      <form id="attend{{ $hall->id }}{{ $user->id }}2" action="{{ route('attendance.store') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="hall_id" value="{{ $hall->id }}">
                        <input type="hidden" name="day" value="2">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                      </form>
                      @else
                      <td><a href="javascript:;" class="btn btn-sm btn-success mr-2"><i class="fa fa-check"></i></a></td>
                      @endif
                      @if(attendance($hall->id, 3, $user->id) == 0)
                      <td><a href="{{ route('attendance.store') }}" class="btn btn-sm btn-primary mr-2" onclick="event.preventDefault();
                        document.getElementById('attend{{ $hall->id }}{{ $user->id }}3').submit();">Attend</a></td>
                        <form id="attend{{ $hall->id }}{{ $user->id }}3" action="{{ route('attendance.store') }}" method="POST" style="display: none;">
                          @csrf
                          <input type="hidden" name="hall_id" value="{{ $hall->id }}">
                          <input type="hidden" name="day" value="3">
                          <input type="hidden" name="user_id" value="{{ $user->id }}">
                        </form>
                        @else
                        <td><a href="javascript:;" class="btn btn-sm btn-success mr-2"><i class="fa fa-check"></i></a></td>
                        @endif
                        @if(attendance($hall->id, 4, $user->id) == 0)
                        <td><a href="{{ route('attendance.store') }}" class="btn btn-sm btn-primary mr-2" onclick="event.preventDefault();
                          document.getElementById('attend{{ $hall->id }}{{ $user->id }}4').submit();">Attend</a></td>
                          <form id="attend{{ $hall->id }}{{ $user->id }}4" action="{{ route('attendance.store') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="hall_id" value="{{ $hall->id }}">
                            <input type="hidden" name="day" value="4">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                          </form>
                          @else
                          <td><a href="javascript:;" class="btn btn-sm btn-success mr-2"><i class="fa fa-check"></i></a></td>
                          @endif
                          @if(attendance($hall->id, 5, $user->id) == 0)
                          <td><a href="{{ route('attendance.store') }}" class="btn btn-sm btn-primary mr-2" onclick="event.preventDefault();
                            document.getElementById('attend{{ $hall->id }}{{ $user->id }}5').submit();">Attend</a></td>
                            <form id="attend{{ $hall->id }}{{ $user->id }}5" action="{{ route('attendance.store') }}" method="POST" style="display: none;">
                              @csrf
                              <input type="hidden" name="hall_id" value="{{ $hall->id }}">
                              <input type="hidden" name="day" value="5">
                              <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </form>
                            @else
                            <td><a href="javascript:;" class="btn btn-sm btn-success mr-2"><i class="fa fa-check"></i></a></td>
                            @endif
                      </tr>

                      @empty
                      <tr>
                        <td>No</td>
                        <td>Hall</td>
                        <td>Added</td>
                        <td>Yet</td>
                        <td>----</td>
                        <td>----</td>
                        <td>----</td>
                      </tr>
                      @endforelse
                    </tbody>
                    <tfoot>
                      <tr>
                        <th><i class="fa fa-user"></i> Id</th>
                        <th><i class="fa fa-building-o"></i> Hall</th>
                        <th><i class="fa fa-folder-open"></i> Monday</th>
                        <th><i class="fa fa-folder-open"></i> Tuesday</th>
                        <th><i class="fa fa-folder-open"></i> Wedsday</th>
                        <th><i class="fa fa-folder-open"></i> Thursday</th>
                        <th><i class="fa fa-folder-open"></i> Friday</th>
                      </tr>
                    </tfoot>
                  </table>
                </section>
              </div>
            </div>
          </div>

        </section>
      </section>
      <!--main content end-->
      @endsection
