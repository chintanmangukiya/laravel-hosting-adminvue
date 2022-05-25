<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li class="nav-small-cap m-t-10">--- Main Menu</li>

            @if (auth()->user()->is_admin == 1)
                <li> <a href="{{ route('home') }}" class="waves-effect"><i class="linea-icon linea-basic fa-fw"
                            data-icon="v"></i> <span class="hide-menu"> Dashboard
                    </a>
                </li>
                <li> <a href="{{ route('users.list') }}" class="waves-effect"><i
                            class="fa fa-user linea-icon linea-basic fa-fw"></i> <span
                            class="hide-menu">User</span></a>
                </li>
                <li> <a href="/employees" class="waves-effect {{ request()->is('/employees/*') ? 'active' : '' }}"><i
                            class="fa fa-user linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Employee</span></a>
                </li>
            @else
                <li> <a href="{{ route('users.list') }}" class="waves-effect"><i
                            class="fa fa-user linea-icon linea-basic fa-fw"></i> <span
                            class="hide-menu">User</span></a>
                </li>
            @endif
            {{-- <li> <a href="/tels" class="waves-effect"><i class="fa fa-user linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">tels</span></a>
            </li> --}}
            {{-- <li>
                <a href="{{ route('emp') }}" class="waves-effect"><i
                        class="fa fa-user linea-icon linea-basic fa-fw"></i> <span
                        class="hide-menu">Employee</span></a>
            </li>
            <li>
                <a href="{{ route('tag') }}" class="waves-effect"><i
                        class="fa fa-user linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Tag</span></a>
            </li> --}}
        </ul>
    </div>
</div>
