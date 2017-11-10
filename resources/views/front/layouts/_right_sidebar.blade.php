<div class="span3">
    <!-- Search Bar -->
    <div class="headline"><h3>Search Bar</h3></div>
    <div class="input-append  margin-bottom-20">
        <input type="text" class="span9" />
        <button type="button" class="btn-u">Search</button>
    </div>

    <!-- Posts -->
        @include('front.layouts.partials._Latest_Update')
    <!--/posts-->

    <!-- Blog Tags -->
        @include('front.layouts.partials._tags')


    <!-- Tabs Widget -->
    <br>
    <!-- <div class="headline"><h3>Tabs Widget</h3></div> -->
    <ul class="nav nav-tabs tabs">
        <li class="active"><a href="#home" data-toggle="tab">latest Post</a></li>
        <li><a href="#profile" data-toggle="tab">Popular Post</a></li>
    </ul><!--/tabs-->

    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <div class="blog-twitter">
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
            </div>
        </div>
        <div class="tab-pane" id="profile">
            <div class="blog-twitter">
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
            </div>
        </div>
    </div><!--/tab-content-->

</div><!--/span3-->