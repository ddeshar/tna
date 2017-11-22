<header class="main-header hidden-print"><a class="logo" href="{{ url('/admin') }}">TNA</a>
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu">
        <ul class="top-nav">

            <li class="notification-menu"><a href="{{ url('/') }}" target="_blank" ><i class="fa fa-home fa-lg"></i></a></li>
            <!-- User Menu-->
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-lg"></i>Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            </li>
        </ul>
        </div>
    </nav>
    </header>