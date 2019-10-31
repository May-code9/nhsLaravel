@extends('dashboard.base')
@section('title')
  List Admin Users
@endsection
@section('content')
  <section id="main-content">
    <section class="wrapper" style="min-height: 592px;">
      <!-- page start-->
      <div class="row">
        <div class="col-lg-12 col-md-12">

          <section class="card col-lg-12">
            <header class="card-header">
              <h4>Number of Admin(s): <strong>---</strong></h4>
            </header>
            <div style="overflow-x: auto">
              <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                  <th><i class="fa fa-user"> Id</th>
                  <th><i class="fa fa-anchor"></i> User</th>
                  <th><i class="fa fa-mail-reply"></i> Email</th>
                  <th><i class="fa fa-asterisk"></i> Role</th>
                  <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($listAdmins as $listAdmin)
                  <tr>
                    <td>{{ $listAdmin->id }}</td>
                    <td>{{ $listAdmin->user->first_name }} {{ $listAdmin->user->last_name }}</td>
                    <td>{{ $listAdmin->user->email }}</td>
                    <td>@if($listAdmin->slug == 4) SuperAdmin @elseif($listAdmin->slug == 2) Admin @else Helper @endif</td>
                    <td>{{ $listAdmin->created_at }}</td>
                    <td>
                      @if($listAdmin->slug == 4)
                      <input type="button" value="Remove" class="btn btn-sm btn-default mr-2" disabled>
                      @else
                      <a href="/addAdmin/{{ $listAdmin->id }}" class="btn btn-sm btn-primary mr-2" onclick="event.preventDefault(); document.getElementById('remove{{ $listAdmin->id }}').submit();">Remove</a>
                      <form id="remove{{ $listAdmin->id }}" action="/addAdmin/{{ $listAdmin->id }}" method="POST" style="display: none;">
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                                          <input type="text" name="user_id" value="{{ $listAdmin->id }}">
                                      </form>

                      @endif
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td>Sorry</td>
                    <td>Nothing</td>
                    <td>Uploaded</td>
                    <td>Yet</td>
                    <td>...</td>
                  </tr>
                @endforelse

                </tbody>
                <tfoot>
                <tr>
                  <th><i class="fa fa-user"> Id</th>
                  <th><i class="fa fa-anchor"></i> User</th>
                  <th><i class="fa fa-mail-reply"></i> Email</th>
                  <th><i class="fa fa-asterisk"></i> Role</th>
                  <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>

          </section>

        </div>

      </div>
    </section>
  </section>
@endsection
