@extends('dashboard.base')
@section('title')
Video | List
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
            Total Video File(s): <strong>{{ allVideos() }}</strong>
          </header>
          <table class="table table-striped table-advance table-hover">
            <thead>
              <tr>
                <th><i class="fa fa-table"></i> Title</th>
                <th><i class="fa fa-folder-open"></i></i> Details</th>
                <th></th>
                <th><i class="fa fa-file"></i></i> Video File </th>
                <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
              </tr>
            </thead>
            <tbody>
              @forelse($listVideos as $listVideo)
              <tr>
                <td>{{ $listVideo->video_title }}</td>
                <td>{{ $listVideo->detailsVideo }}</td>
                <td class=""><a href="/videoUpload/{{$listVideo->id}}/edit" class="btn btn-md btn-primary mr-2">Edit</a></td>
                <td>
                  <iframe id="youtube" src="{{ $listVideo->video_file }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  
                  <br><a href="/Edit Video/{{$listVideo->id}}">edit</a>
                </td>
                <td>{{ $listVideo->dater }}</td>
              </tr>
              @empty
              <center><h1>No Video Yet</h2></center>
                @endforelse

              </tbody>
              <tfoot>
                <tr>
                  <th><i class="fa fa-table"></i> Title</th>
                  <th><i class="fa fa-folder-open"></i></i> Details</th>
                  <th></th>
                  <th><i class="fa fa-file"></i></i> Video File </th>
                  <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
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
