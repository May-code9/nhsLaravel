<header id="header-wrap" class="header1" style="box-shadow: 0 4px #f2f2f2;">
    <div class="navigation-menu">
        <nav class="navbar navbar-default navbar-event">
            <div class="container">

                <div class="navbar-header col-md-2">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="headerForSmallScreen navbar-brand" href="#" style="top: 10px"><img
                                src="{{ asset('assets/img/nhs_logo.png') }}" class="addWH" alt="" width="auto" height="60"></a>
                    <a class="headerForSmallScreen navbar-brand" href="#" style="left:100px; top: 10px"><img
                                src="{{ asset('assets/img/nma_logo.png') }}" class="addWH" alt="" width="auto" height="60"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav " style="left:-15%">
                        <li class="@if(isset($index)) {{ $index }} @endif"><a href="{{ route('nma.home') }}">Home</a>
                        </li>
                        <li><a href="#organizers">Organizers</a></li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Organizers<span class="caret"></span></a>
                            <ul class="dropdown-menu" style="margin-top: -27px">
                                <li><a href="{{ route('nma.about.noc') }}">NOC Members</a> </li>
                                <li><a href="{{ route('nma.about.cpc') }}">CPC Members</a> </li>
                                <li><a href="{{ route('nma.about.loc') }}">LOC Members</a> </li>
                                <li><a href="#">Secretariat Members</a> </li>
                            </ul>
                        </li> -->
                        <li><a href="#schedule">Schedule</a></li>
                        <li><a href="#speakers">Speakers</a>
                        </li>
                        <li class="@if(isset($contact)) {{ $contact }} @endif"><a href="{{ route('nma.contacts') }}">Contact</a>
                        </li>
                        @guest
                            <li class="@if(isset($regTickets)) {{ $regTickets }} @endif"><a
                                        href="{{ route('nma.tickets') }}">Register</a>
                            </li>
                            <li class="@if(isset($login)) {{ $login }} @endif"><a
                                        href="{{ route('login') }}">Login</a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                                >{{ Auth::user()->first_name }}<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu" style="margin-top: -27px">
                                    @if(transaction() == 1)
                                        <li class="@if(isset($account)) {{ $account }} @endif"><a
                                                    href="{{ route('nma.account') }}">My Account</a></li>
                                    @endif
                                    @if(checkAdmin() == 1)
                                        <li class=""><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    @endif
                                    @if(transaction() == 0)
                                        <li class="@if(isset($regTickets)) {{ $regTickets }} @endif"><a
                                                    href="{{ route('nma.transaction') }}">Make
                                                Payment</a></li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                            Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        @endguest

                    </ul>
                </div>
            </div>

            <ul class="wpb-mobile-menu">
                <li class="@if(isset($index)) {{ $index }} @endif"><a href="{{ route('nma.home') }}">Home</a></li>
                <li><a href="#organizers">Organizers</a> </li>
                <!-- <li>
                    <a href="#">Organizers</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('nma.about.noc') }}">NOC Members</a> </li>
                        <li><a href="{{ route('nma.about.cpc') }}">CPC Members</a> </li>
                        <li><a href="{{ route('nma.about.loc') }}">LOC Members</a> </li>
                        <li><a href="#">Secretariat Members</a> </li>
                    </ul>
                </li> -->
                <li><a href="#schedule">Schedule</a></li>
                <li><a href="#speakers">Speakers</a></li>
                <li class="@if(isset($contact)) {{ $contact }} @endif"><a href="{{ route('nma.contacts') }}">Contact</a>
                </li>
                @guest
                    <li class="@if(isset($regTickets)) {{ $regTickets }} @endif"><a
                                href="{{ route('nma.tickets') }}">Register</a>
                    </li>
                    <li class="@if(isset($login)) {{ $login }} @endif"><a
                                href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <li><a href="#">{{ Auth::user()->first_name }}</a>
                        <ul class="dropdown">
                            @if(transaction() == 1)
                            <li class="@if(isset($account)) {{ $account }} @endif"><a href="{{ route('nma.account') }}">My
                                    Account</a></li>
                            @endif
                            @if(checkAdmin() == 1)
                                <li class=""><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @endif
                            @if(transaction() == 0)
                                <li class="@if(isset($regTickets)) {{ $regTickets }} @endif"><a
                                            href="{{ route('nma.transaction') }}">Make
                                        Payment</a></li>
                            @endif
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                    Out</a>

                            </li>
                        </ul>
                    </li>

                @endguest
            </ul>

        </nav>
    </div>
</header>
