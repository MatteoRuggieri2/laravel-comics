<header>
    
    {{-- Pre-Header --}}
    <div class="pre-header">
        <div class="container">
            <span class="pre-header-info">DC POWERsmVISAr</span>
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
                <li><a href="{{ route('characters') }}">characters</a></li>
                <li class="active"><a href="#">comics</a></li>
                <li><a href="{{ route('movies') }}">movies</a></li>
                <li><a href="#">tv</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">collectibles</a></li>
                <li><a href="#">videos</a></li>
                <li><a href="#">fans</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">shop</a></li>
            </ul>
        </nav>
    </div>

</header>