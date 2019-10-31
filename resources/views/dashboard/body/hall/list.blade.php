@extends('dashboard.base')
@section('title')
  List Registered Users
@endsection
@section('content')
  <section id="main-content">
    <section class="wrapper" style="min-height: 570px;">
      <!-- page start-->
      <div class="row">
        <div class="col-lg-6 push-2">
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
          <section class="card">
            <header class="card-header">
              Hall:
            </header>
            <table class="table table-striped table-advance table-hover">
              <thead>
              <tr>
                <th><i class="fa fa-user"> Id</th>
                <th><i class="fa fa-mail-reply"></i> Hall</th>
                <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              @forelse($getHalls as $getHall)
                <tr>
                  <td>{{ $getHall->id }}</td>
                  <td>{{ $getHall->hall }}</td>
                  <td>{{ $getHall->created_at }}</td>
                  <td><a href="/hall/{{ $getHall->id }}/edit" class="btn btn-sm btn-primary mr-2">Edit</a></td>
                </tr>
              @empty
                <tr>
                  <td>Sorry</td>
                  <td>Nothing</td>
                  <td>Uploaded</td>
                  <td>Yet</td>
                </tr>
              @endforelse

              </tbody>
              <tfoot>
              <tr>
                <th><i class="fa fa-user"> Id</th>
                <th><i class="fa fa-mail-reply"></i> Hall</th>
                <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
                <th></th>
              </tr>
              </tfoot>
            </table>
          </section>

        </div>

      </div>
    </section>
  </section>
@endsection
