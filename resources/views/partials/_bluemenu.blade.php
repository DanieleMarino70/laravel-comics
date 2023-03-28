<div class="background">
        <div class="container">
            <ul>
                @foreach ($blue_links as $link)
                        <li>
                            <div class="img-container">
                                <img src='{{ asset("images{$link['src']}") }}' alt="">
                            </div>
                            <a href={{$link['url']}}>{{ $link['title'] }}</a>
                        </li>    
                @endforeach
            </ul>
    </div>
</div>