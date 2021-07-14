<header class="position-fixed">
    <nav class="container d-flex justify-content-between align-items-center">
        <a href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        <ul class="d-flex">
            @foreach ($links as $link)
                <li class="{{ Route::currentRouteName() == $link['url']? 'active':'' }}">
                    <a href="{{ route($link['url']) }}">{{ $link['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>