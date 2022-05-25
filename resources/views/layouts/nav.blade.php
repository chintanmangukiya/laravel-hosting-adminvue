<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
            data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <div class="top-left-part"><a class="logo" href=""><b><img
                        src="{{ asset('../plugins/images/eliteadmin-logo.png') }}" alt="home" /></b><span
                    class="hidden-xs"><img src="{{ asset('../plugins/images/eliteadmin-text.png') }}"
                        alt="home" /></span></a>
        </div>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                    @if (Auth::user()->image)
                        <img src="/images/{{ Auth::user()->image }}" alt="user-img" width="50" height="50"
                            class="img-circle">
                    @else
                        <img src="/images/download.jpeg" alt="user-img" width="50" height="50" class="img-circle">
                    @endif

                    <b class="hidden-xs">{{ Auth::user()->name ?? '' }}</b>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="{{ url('profile', Auth::user()->id) }}"><i class="ti-user"></i> My
                            Profile</a>
                        {{-- <li><a href="{{ route('profile', ['id' => 2]) }}"><i class="ti-user"></i> My Profile</a> --}}
                    </li>
                    {{-- <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li> --}}
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
