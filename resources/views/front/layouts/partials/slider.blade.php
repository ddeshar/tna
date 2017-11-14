<div id="sequence-theme" class="sequence-inner">
    <div id="sequence">
        <img class="prev" src="assets/plugins/horizontal-parallax/images/bt-prev1.png" alt="Previous" />
        <img class="next" src="assets/plugins/horizontal-parallax/images/bt-next1.png" alt="Next" />
        <ul>
            @foreach ($banners as $banner)
                <li>
                    <div class="info">
                        <h2>{{ $banner->banner_name or "" }}</h2>
                        <p>{{ $banner->banner_description or "" }}</p>
                    </div>
                    <img class="{{ $banner->banner_class or "" }}" src="{{ asset('images/banners/'. $banner->banner_image  ) }}" alt="{{ $banner->banner_name or "" }}" />
                </li>
            @endforeach
        </ul>
    </div>
</div><!--/sequence-theme-->