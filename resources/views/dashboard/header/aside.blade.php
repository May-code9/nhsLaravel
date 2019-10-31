<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->

        <ul class="sidebar-menu" id="nav-accordion">
            @if(adminStatus() > 1)
                <li>
                    <a class="user" href="#">
                        <i class="fa fa-user"></i>
                        <span> <strong>{{ Auth::user()->first_name }}</strong></span>
                    </a>
                </li>
                <hr style="background-color: #9e9e9e">
                <li>
                    <a class="@if (isset($index)) {{$index}} @endif" href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="@if (isset($allUsers)) {{$allUsers}} @endif">
                        <i class="fa fa-users"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub">
                        <li class="@if (isset($createUser)) {{$createUser}} @endif"><a
                                    href="{{ route('users.create') }}">Upload</a></li>
                        <li class="@if (isset($indexUser)) {{$indexUser}} @endif"><a
                                    href="{{ route('users.index') }}">View</a></li>
                    </ul>
                </li>
            @endif
                @if(adminStatus() == 4)
                <li class="sub-menu">
                    <a href="javascript:;" class="@if (isset($addAdmin)) {{$addAdmin}} @endif">
                        <i class="fa fa-eye"></i>
                        <span>Admin Users</span>
                    </a>
                    <ul class="sub">
                        <li class="@if (isset($addAdminCreate)) {{$addAdminCreate}} @endif"><a
                                    href="{{ route('addAdmin.create') }}">Make Admin</a></li>
                        <li class="@if (isset($addAdminIndex)) {{$addAdminIndex}} @endif"><a
                                    href="{{ route('addAdmin.index') }}">View</a></li>
                    </ul>
                </li>

                <li>
                    <a class="@if (isset($branches)) {{$branches}} @endif" href="#">
                        <i class="fa fa-sitemap"></i>
                        <span>Transactions</span>
                    </a>
                </li>
                <!-- <li>
                    <a class="@if (isset($reg)) {{$reg}} @endif" href="#">
                        <i class="fa fa-money"></i>
                        <span>Registration Fees</span>
                    </a>
                </li> -->
                <hr style="background-color: #9e9e9e">

            @endif
                <li>
                    <a href="{{ route('nma.home') }}">
                        <i class="fa fa-home"></i>
                        <span>Homepage</span>
                    </a>
                </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
