@foreach ($comics_array as $comic)
                    
    {{-- Single series --}}
    <div class="single-series-container">
        <a href="{{ route('comicinfo') }}">
            <div class="series-img-container">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            </div>
            <h2>{{ $comic['series'] }}</h2>
        </a>
    </div>
                    
@endforeach    