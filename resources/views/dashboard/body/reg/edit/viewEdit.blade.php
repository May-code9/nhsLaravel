@extends('dashboard.base')
@section('title')
Registration Fee
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper" style="min-height: 570px;">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-6">

        <section class="card col-lg-12">
          <header class="card-header">
            Categories: <strong>{{ $countFee }}</strong>
          </header>
          <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
              <th><i class="fa fa-user"> Id</th>
              <th><i class="fa fa-table"></i> Category</th>
              <th><i class="fa fa-money"></i></i> Fee</th>
              <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
            </tr>
            </thead>
            <tbody>
            @forelse($fee as $pay)
              <tr>
                <td>{{ $pay->id }}</td>
                <td>{{ $pay->category }}</td>
                <td>₦<?php echo (int) $pay->fee/1000 ?>,000</td>
                <td>{{ $pay->dater }}</td>
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
              <th><i class="fa fa-table"></i> Category</th>
              <th><i class="fa fa-money"></i></i> Fee</th>
              <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
            </tr>
            </tfoot>
          </table>
        </section>

      </div>
      <div class="col-lg-6 ">
        <section class="card">
          <div class="card-header">Edit Registration Fee</div>
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
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edit.reg.fee') }}">
              @csrf
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="audio_title">Select Category</label>
                  <select class="form-control" id="category" name="category" required>
                    <option disabled selected></option>
                    @foreach($fee as $pay)
                      <option value="{{ $pay->id }}">{{ $pay->category }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('category'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('category') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="col-md-12 mb-3">
                  <label for="audio_title">Update Amount</label>
                  <input type="text" class="form-control" id="fee" placeholder="Should be typed in without a comma, e.g 20000 is correct, 20,000 is not" name="fee" required>
                  @if ($errors->has('fee'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('fee') }}</strong>
                  </span>
                  @endif
                </div>

              </div>

              <button class="btn btn-primary" type="submit">Change</button>
            </form>

          </div>
        </section>
      </div>
    </div>
  </section>
</section>
@endsection
