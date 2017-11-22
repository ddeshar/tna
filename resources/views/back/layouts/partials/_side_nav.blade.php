<aside class="main-sidebar hidden-print">
    <section class="sidebar">
        <div class="user-panel">
        <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
        <div class="pull-left info">
            <p>Admin</p>
            <p class="designation">Developer</p>
        </div>
        </div>
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::is('admin/banners*') ? 'active' : '' }}"><a href="{{ url('/admin/banners') }}"><i class="fa fa-dashboard"></i><span>Banners</span></a></li>
            <li class="{{ Request::is('admin/board*') ? 'active' : '' }}"><a href="{{ url('/admin/board') }}"><i class="fa fa-dashboard"></i><span>Board Members</span></a></li>
            <li class="{{ Request::is('admin/categories*') ? 'active' : '' }}"><a href="{{ url('/admin/categories') }}"><i class="fa fa-dashboard"></i><span>Categories</span></a></li>
            <li class="{{ Request::is('admin/posts*') ? 'active' : '' }}"><a href="{{ url('/admin/posts') }}"><i class="fa fa-dashboard"></i><span>Posts</span></a></li>
            <li class="{{ Request::is('admin/pages*') ? 'active' : '' }}"><a href="{{ url('/admin/pages') }}"><i class="fa fa-dashboard"></i><span>Pages</span></a></li>
            <li class="{{ Request::is('admin/tags*') ? 'active' : '' }}"><a href="{{ url('/admin/tags') }}"><i class="fa fa-dashboard"></i><span>tags</span></a></li>
            <li class="{{ Request::is('admin/quotes*') ? 'active' : '' }}"><a href="{{ url('/admin/quotes') }}"><i class="fa fa-dashboard"></i><span>Quotes</span></a></li>
            <li class="{{ Request::is('admin/user*') ? 'active' : '' }}"><a href="{{ url('/admin/user') }}"><i class="fa fa-dashboard"></i><span>user</span></a></li>
            <hr>
        </ul>
    </section>
</aside>