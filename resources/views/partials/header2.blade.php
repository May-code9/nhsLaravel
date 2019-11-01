<header class="header1" id="header-wrap" style="box-shadow: 0 4px #f2f2f2;padding-bottom: 22px;padding-top: 15px">

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
                    <a class="navbar-brand headerForBigScreen" href="#"><img src="{{ asset('assets/img/nhs_logo.png') }}" alt="" width="auto" height="60"></a>
                    <a class="headerForSmallScreen navbar-brand" href="#" style="top: 10px"><img
                                src="{{ asset('assets/img/nhs_logo.png') }}" class="addWH" alt="" width="auto" height="60"></a>
                    <a class="headerForSmallScreen navbar-brand" href="#" style="left:100px; top: 10px"><img
                                src="{{ asset('assets/img/nma_logo.png') }}" class="addWH" alt="" width="auto" height="60"></a>
                </div>
                <div class="collapse navbar-collapse col-md-2 navbar-right headerForBigScreen">
                    <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/nma_logo.png') }}" alt="" width="auto" height="60"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav ">
                        <li class="@if(isset($index)) {{ $index }} @endif"><a href="{{ route('nma.home') }}"
                                                                              style="margin-top: 12px; margin-bottom:0">Home</a>
                        </li>
                        <li><a href="{{ route('nma.home') }}#organizers" style="margin-top: 12px; margin-bottom:0">Organizers</a></li>
                        <!-- <li class="dropdown @if(isset($about)) {{ $about }} @endif">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-top: 12px; margin-bottom:0">Organizers<span class="caret"></span></a>
                            <ul class="dropdown-menu" style="margin-top: -27px">
                                <li class="@if(isset($about_noc)) {{ $about_noc }} @endif"><a href="{{ route('nma.about.noc') }}">NOC Members</a> </li>
                                <li class="@if(isset($about_cpc)) {{ $about_cpc }} @endif"><a href="{{ route('nma.about.cpc') }}">CPC Members</a> </li>
                                <li class="@if(isset($about_loc)) {{ $about_loc }} @endif"><a href="{{ route('nma.about.loc') }}">LOC Members</a> </li>
                                <li><a href="#">Secretariat Members</a> </li>
                            </ul>
                        </li> -->
                        @if(Route::currentRouteName() != 'nma.schedule')
                        <li><a href="{{ route('nma.schedule') }}" style="margin-top: 12px; margin-bottom:0">Program</a></li>
                        @endif
                        <li class="@if(isset($docs)) {{$docs}} @endif dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="margin-top: 12px; margin-bottom:0">Docs <span class="caret"></span></a>
                          <ul class="dropdown-menu" style="margin-top: -27px">
                            <li class="@if(isset($pdf)) {{$pdf}} @endif"><a href="{{ route('nma.docs.pdf') }}">PDFs &amp; docs</a></li>
                            <li class="@if(isset($gallery)) {{$gallery}} @endif"><a href="{{ route('nma.docs.gallery') }}">Images</a></li>
                          </ul>
                        </li>
                        @if(Route::currentRouteName() == 'nma.speakers')
                        <li><a href="{{ route('nma.home') }}#speakers" style="margin-top: 12px; margin-bottom:0">Speakers</a>
                        </li>
                        @endif
                        @if(Route::currentRouteName() != 'nma.contacts')
                        <li class="@if(isset($contact)) {{ $contact }} @endif"><a href="{{ route('nma.contacts') }}" style="margin-top: 12px; margin-bottom:0">Contact</a></li>
                        @endif
                        @guest
                            @if(Route::currentRouteName() != 'nma.tickets')
                            <li class="@if(isset($regTickets)) {{ $regTickets }} @endif"><a
                                        href="{{ route('nma.tickets') }}" style="margin-top: 12px; margin-bottom:0">Register</a>
                            </li>
                            @endif
                            @if(Route::currentRouteName() != 'login')
                            <li class="@if(isset($login)) {{ $login }} @endif"><a
                                        href="{{ route('login') }}" style="margin-top: 12px; margin-bottom:0">Login</a>
                            </li>
                                @endif
                        @else
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                                   style="margin-top: 12px; margin-bottom:0">{{ Auth::user()->first_name }}<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu" style="margin-top: -27px">
                                    @if(transaction() == 1)
                                    <li class="@if(isset($account)) {{ $account }} @endif"><a href="{{ route('nma.account') }}">My Account</a></li>
                                    @endif
                                    @if(checkAdmin() == 1)
                                        <li class=""><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    @endif
                                    @if(transaction() == 0)
                                    <li class="@if(isset($regTickets)) {{ $regTickets }} @endif"><a
                                                href="{{ route('nma.transaction') }}" >Make
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
                <li><a href="{{ route('nma.accomodation') }}">Accomodation</a></li>
                <li><a href="{{ route('nma.home') }}#organizers">Organizers</a></li>
                <!-- <li>
                    <a href="#">Organizers</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('nma.about.noc') }}">NOC Members</a> </li>
                        <li><a href="{{ route('nma.about.cpc') }}">CPC Members</a> </li>
                        <li><a href="{{ route('nma.about.loc') }}">LOC Members</a> </li>
                        <li><a href="{{ route('nma.about.secretariat') }}">Secretariat Members</a> </li>
                    </ul>
                </li> -->
                <li><a href="{{ route('nma.schedule') }}">Program</a></li>
                <li><a href="#">Docs</a>
                  <ul class="dropdown">
                    <li><a href="#">PDFs &amp; Docs</a></li>
                    <li><a href="#">Images</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('nma.home') }}#speakers">Speakers</a></li>
                <li class="@if(isset($contact)) {{ $contact }} @endif"><a href="{{ route('nma.contacts') }}">Contact</a></li>
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
                            <li class="@if(isset($account)) {{ $account }} @endif"><a href="{{ route('nma.account') }}">My Account</a></li>
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
