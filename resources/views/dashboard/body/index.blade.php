@extends('dashboard.base')
@section('title')
DashBoard
@endsection
@section('content')
<!--main content start-->
<section id="main-content" style="min-height: 652px">
  <section class="wrapper">
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
    <!--state overview start-->
    <div class="row state-overview">
      <div class="col-lg-3 col-sm-6">
        <section class="card">
          <div class="symbol terques">
            <i class="fa fa-users"></i>
          </div>
          <div class="value">
            <h1 class="">
              {{ allUser() }}
            </h1>
            <p>Users</p>
          </div>
        </section>
      </div>

      <div class="col-lg-3 col-sm-6">
        <section class="card">
          <div class="symbol yellow">
            <i class="fa fa-eye"></i>
          </div>
          <div class="value">
            <h1 class=" ">
              {{ countAdmin() }}
            </h1>
            <p>Admin User(s)</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="card">
          <div class="symbol blue">
            <i class="fa fa-sitemap"></i>
          </div>
          <div class="value">
            <h1 class=" ">
              {{ countTransaction() }}
            </h1>
            <p>Transaction(s)</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="card">
          <div class="symbol red">
            <i class="fa fa-money"></i>
          </div>
          <div class="value">
            <h1 class=" ">
              {{ amount() }}
            </h1>
            <p>Fee(s)</p>
          </div>
        </section>
      </div>


    </div>
    <!--state overview end-->

  </section>
</section>
<!--main content end-->

@endsection
