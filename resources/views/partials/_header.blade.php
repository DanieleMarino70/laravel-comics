
<div class="header-top">
    <div class="container">
            <img src="" alt="">
            <ul>
                @foreach ($links_comics as $link)
                <li><a href={{$link['url']}}>{{ $link['title'] }}</a></li>
                @endforeach
            </ul>
    </div>
</div>