<div class="header">
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="index.html"><img id="logo-header" src="assets/img/logo2-default.png" alt="Logo" /></a>
        </div><!-- /logo -->

        <!-- Menu -->
        <div class="navbar">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a><!-- /nav-collapse -->
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li class=""><a href="{{ url('/about') }}">About</a></li>
                        <li class=""><a href="{{ url('/news') }}">News & Events</a></li>
                        <li class=""><a href="{{ url('/board_members') }}">Board Members</a></li>
                        <li class=""><a href="{{ url('/contact') }}">Contact Us</a></li>

                        <li><a class="search search-nav"><i class="icon-search search-btn"></i></a></li>
                    </ul>
                    <div class="search-open search-open-inner">
                        <div class="input-append">
                            <form />
                                <input type="text" class="span3" placeholder="Search" />
                                <button type="submit" class="btn-u">Search</button>
                            </form>
                        </div>
                    </div>
                </div><!-- /nav-collapse -->
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
    </div><!-- /container -->
</div><!--/header -->