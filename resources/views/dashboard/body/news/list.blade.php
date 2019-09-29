@extends('dashboard.base')
@section('title')
News | List News
@endsection
@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper" style="min-height: 600px;">
    <!-- page start-->
    <div class="row">


      <div class="col-lg-12">
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

        <section class="card col-lg-12">
          <header class="card-header">
            Total News File(s): <strong>{{ allNews() }}</strong>
          </header>
          <table class="table table-striped table-advance table-hover">
            <thead>
              <tr>
                <th><i class="fa fa-user"></i></i> Editor </th>
                <th><i class="fa fa-table"></i> Title</th>
                <th><i class="fa fa-folder-open"></i></i> Details</th>
                <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @forelse($listNews as $listNew)
              <tr>
                <td>{{ $listNew->user_id }}</td>
                <td>{{ $listNew->title }}</td>
                <td>{{ $listNew->detailsNews }}</td>
                <td>{{ $listNew->dater }}</td>
                <td class=""><a href="/newsUpload/{{$listNew->id}}/edit" class="btn btn-md btn-primary mr-2">Edit</a></td>
              </tr>
              @empty
              <center><h1>No News Yet</h2></center>
              @endforelse

              </tbody>
              <tfoot>
                <tr>
                  <th><i class="fa fa-user"></i></i> Editor </th>
                  <th><i class="fa fa-table"></i> Title</th>
                  <th><i class="fa fa-folder-open"></i></i> Details</th>
                  <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
          </section>

        </div>
      </div>

      <!-- page end-->
    </section>
  </section>
  <!--main content end-->
  @endsection
