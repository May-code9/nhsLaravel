@extends('dashboard.base')
@section('title')
    User | List Users
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
                    {{ $listUsers->links() }}
                        <section class="card col-lg-12">
                            <header class="card-header">
                                <a href="/exportPaid/xlsx" class="btn btn-success">Export Registered Users to .xlsx</a>
                                <a href="/exportAll/xlsx" class="btn btn-primary" style="margin-left: 10px">Export All Users to .xlsx</a>
                            </header>
                        </section>
                    <section class="card col-lg-12">
                        <header class="card-header">
                            <div class="top-nav ">
                                Total User(s): <strong>{{ allUser() }}, </strong>Paid User(s): <strong>{{ countTransaction() }}</strong>
                                <!--search & user info start-->
                                <ul class="nav pull-right top-menu">
                                    <li>
                                        <form id="searchUsers" class="form-horizontal" action="{{ route('admin.search.users') }}" method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-8 mb-3">
                                                    <input type="text" name="search_item" class="form-control" placeholder="Type here...">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <button type="submit" class="btn btn-primary" ><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>

                                        </form>
                                    </li>
                                </ul>
                                <!--search & user info end-->
                            </div>
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="fa fa-users"></i> User Full Name</th>
                                <th><i class="fa fa-envelope"></i></i> Email</th>
                                <th><i class="fa fa-phone-square"></i></i> Phone</th>
                                <th><i class="fa fa-star-half-full"></i></i> Status</th>
                                <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
                                <th><i class="fa fa-camera-retro"></i> QR Code</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($listUsers as $listUser)
                                <tr>
                                    <td>{{ $listUser->id }}</td>
                                    <td>{{ $listUser->first_name }} {{ $listUser->last_name }}</td>
                                    <td>{{ $listUser->email }}</td>
                                    <td>{{ $listUser->phone }}</td>
                                    <td>
                                        @if(transactionId($listUser->id) == 0)
                                            Not Completed <br> <a href="update/payment/{{ $listUser->id }}">update</a>
                                        @else
                                            Completed
                                        @endif
                                    </td>
                                    <td>{{ $listUser->created_at }}</td>
                                    @if(transactionId($listUser->id) == 1)
                                    <td class=""><a href="/users/{{$listUser->id}}"
                                                    class="btn btn-sm btn-primary mr-2">View</a></td>
                                        @else
                                    <td><a href="#">No QR</a> </td>
                                        @endif
                                </tr>
                            @empty
                                <div><h1>No User Yet</h2></div>
                            @endforelse

                            </tbody>
                            <tfoot>
                            <tr>
                                <th><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="fa fa-user-secret"></i> User Full Name</th>
                                <th><i class="fa fa-envelope-square"></i></i> Email</th>
                                <th><i class="fa fa-phone-square"></i></i> Phone</th>
                                <th><i class="fa fa-star-half-full"></i></i> Status</th>
                                <th><i class=" fa fa-calendar-o"></i> Upload Date</th>
                                <th><i class="fa fa-camera-retro"></i> QR Code</th>
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
