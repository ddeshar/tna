<aside class="main-sidebar hidden-print">
    <section class="sidebar">
        <div class="user-panel">
        <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
        <div class="pull-left info">
            <p>John Doe</p>
            <p class="designation">Frontend Developer</p>
        </div>
        </div>
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="{!! (Request::is('admin') ? 'class="active"' : '') !!}"><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::is('admin/banners*') ? 'active' : '' }}"><a href="{{ url('/admin/banners') }}"><i class="fa fa-dashboard"></i><span>Banners</span></a></li>
            <li class="{{ Request::is('admin/board*') ? 'active' : '' }}"><a href="{{ url('/admin/board') }}"><i class="fa fa-dashboard"></i><span>Board Members</span></a></li>
            <li class="{{ Request::is('admin/categories*') ? 'active' : '' }}"><a href="{{ url('/admin/categories') }}"><i class="fa fa-dashboard"></i><span>Categories</span></a></li>
            <li class="{{ Request::is('admin/posts*') ? 'active' : '' }}"><a href="{{ url('/admin/posts') }}"><i class="fa fa-dashboard"></i><span>Posts</span></a></li>
            <li class="{{ Request::is('admin/pages*') ? 'active' : '' }}"><a href="{{ url('/admin/pages') }}"><i class="fa fa-dashboard"></i><span>Pages</span></a></li>
            <li class="{{ Request::is('admin/tags*') ? 'active' : '' }}"><a href="{{ url('/admin/tags') }}"><i class="fa fa-dashboard"></i><span>tags</span></a></li>
            <li class="{{ Request::is('admin/quotes*') ? 'active' : '' }}"><a href="{{ url('/admin/quotes') }}"><i class="fa fa-dashboard"></i><span>Quotes</span></a></li>
            <hr>
            <li class="{{ Request::is('admin/settings*') ? 'active' : '' }}"><a href="{{ url('/admin/settings') }}"><i class="fa fa-dashboard"></i><span>Settings</span></a></li>
        </ul>
    </section>
</aside>