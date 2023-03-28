
<div class="header-top">
    <div class="container">
            <a href="/"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
            <ul>
                @foreach ($links_comics as $link)
                <li><a href={{$link['url']}}>{{ $link['title'] }}</a></li>
                @endforeach
            </ul>
    </div>
</div>