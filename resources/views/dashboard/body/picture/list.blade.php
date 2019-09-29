@extends('dashboard.base')
@section('title')
Picture | List
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
            Total Picture File(s): <strong>{{ allPictures() }}</strong>
          </header>
          <table class="table table-striped table-advance table-hover">
            <thead>
              <tr>
                <th><i class="fa fa-table"></i> Title</th>
                <th><i class="fa fa-folder-open"></i></i> Details</th>
                <th></th>
                <th><i class="fa fa-file"></i></i> Picture File </th>
                <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
              </tr>
            </thead>
            <tbody>
              @forelse($listpictures as $listpicture)
              <tr>
                <td>{{ $listpicture->picture_title }}</td>
                <td>{{ $listpicture->detailspicture }}</td>
                <td class=""><a href="/pictureUpload/{{$listpicture->id}}/edit" class="btn btn-md btn-primary mr-2">Edit</a></td>
                <td>
                  <div style="text-align: center"><img src="{{asset('picture/' . $listpicture->picture_file)}}" width="55" height="70"></div>
                  <div style="text-align: center"><a href="/Edit Picture/{{$listpicture->id}}">edit</a></div>
                </td>
                <td>{{ $listpicture->dater }}</td>
              </tr>
              @empty
              <center><h1>No picture Yet</h2></center>
                @endforelse

              </tbody>
              <tfoot>
                <tr>
                  <th><i class="fa fa-table"></i> Title</th>
                  <th><i class="fa fa-folder-open"></i></i> Details</th>
                  <th></th>
                  <th><i class="fa fa-file"></i></i> Picture File </th>
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
