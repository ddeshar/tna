<div id="clients-flexslider" class="flexslider home clients">
    <div class="headline"><h3>our partners</h3></div>
    <ul class="slides">
        @foreach ($sponsors as $sponsor)
            <li>
                <a href="{{ $sponsor->banner_link or "#" }}">
                    <img src="{{ asset('images/banners/'. $sponsor->banner_image  ) }}" alt="{{ $sponsor->banner_name or "" }}" />
                    <img src="{{ asset('images/banners/'. $sponsor->banner_image  ) }}" class="color-img" alt="{{ $sponsor->banner_name or "" }}" />
                </a>
            </li>
        @endforeach
    </ul>
</div><!--/flexslider-->