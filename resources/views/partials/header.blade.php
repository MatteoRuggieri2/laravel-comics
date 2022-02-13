<header>
    
    {{-- Pre-Header --}}
    <div class="pre-header">
        <div class="container">
            <span class="pre-header-info">DC POWER<span>&#8480;</span>VISA<span>&reg;</span></span>
            <span class="pre-header-info">ADDITIONAL DC SITES</span>
        </div>
    </div>

    {{-- Header --}}
    <div class="container">
        <nav>
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('/img/dc-logo.png') }}" alt="DC Logo"></a>
            </div>
            <ul>
                <li class="{{ Request::route() && Request::route()->getName() === 'characters' ? 'active' : '' }}"><a href="{{ route('characters') }}">characters</a></li>
                <li class="{{ Request::route() && Request::route()->getName() === 'comics' ? 'active' : '' }}"><a href="#">comics</a></li>
                <li class="{{ Request::route() && Request::route()->getName() === 'movies' ? 'active' : '' }}"><a href="{{ route('movies') }}">movies</a></li>
                <li class="{{ Request::route() && Request::route()->getName() === 'tv' ? 'active' : '' }}"><a href="#">tv</a></li>
                <li class="{{ Request::route() && Request::route()->getName() === 'games' ? 'active' : '' }}"><a href="#">games</a></li>
                <li class="{{ Request::route() && Request::route()->getName() === 'collectibles' ? 'active' : '' }}"><a href="#">collectibles</a></li>
                <li class="{{ Request::route() && Request::route()->getName() === 'videos' ? 'active' : '' }}"><a href="#">videos</a></li>
                <li class="{{ Request::route() && Request::route()->getName() === 'fans' ? 'active' : '' }}"><a href="#">fans</a></li>
                <li class="{{ Request::route() && Request::route()->getName() === 'news' ? 'active' : '' }}"><a href="#">news</a></li>
                <li class="{{ Request::route() && Request::route()->getName() === 'shop' ? 'active' : '' }}"><a href="#">shop</a></li>
            </ul>
        </nav>
    </div>

</header>