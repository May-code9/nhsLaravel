<!--header start-->
<header class="header white-bg clickMe">
        <div class="sidebar-toggle-box clickMe">
            <i class="fa fa-bars clickMe"></i>
        </div>
      <!--logo start-->
      <a href="{{ url('/') }}" class="logo"><img src="{{ asset('favicon.png') }}" width="30" height="30">NMA <span>&amp; NHS</span></a>
      <!--logo end-->
      
      <div class="top-nav ">
          <!--search & user info start-->
          <ul class="nav pull-right top-menu">
              <li>
                  <input type="text" class="form-control search" placeholder="Search">
              </li>
              <!-- user login dropdown start-->
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <span class="username"><i class=" fa fa-money pr-2"></i>Sales: </span>
                      <span class="username">₦<strong>0</strong></span>
                      <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu extended logout dropdown-menu-right">
                      <div class="log-arrow-up"></div>
                      <li><a href="/"><i class=" fa fa-home"></i>Home</a></li>
                      <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                      <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Log Out</a></li>
                  </ul>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
              </li>
              <li class="sb-toggle-right">
                  <i class="fa  fa-align-right"></i>
              </li>
              <!-- user login dropdown end -->
          </ul>
          <!--search & user info end-->
      </div>
  </header>
<!--header end-->
