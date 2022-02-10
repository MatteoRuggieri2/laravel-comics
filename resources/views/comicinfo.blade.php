@extends('layouts.app')

@section('page_title')
    Comic Info - DC Comics
@endsection

@section('main_content')

    {{-- Jumbotron --}}
    @include('components.jumbotron')
    
    <section class="comic-info-sect">

        {{-- Comic Book --}}
        <div class="comic-book">
            <div class="small-container">
                
                {{-- Thumb --}}
                <div class="comic-thumb-container">
                    
                    <div class="comic-thumb-content">
                        <img src="{{ $comic_to_show['thumb'] }}" alt="{{ $comic_to_show['series'] }}">
                    
                        {{-- Comic Type --}}
                        <div class="comic-type comic-target">
                            <span>{{ $comic_to_show['type'] }}</span>
                        </div>

                        {{-- Veiw Gallery --}}
                        <div class="view-gallery comic-target">
                            <span>view gallery</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- Comic Description --}}
        <div class="comic-description">
            <div class="small-container">

                {{-- Description --}}
                <div class="col-70">
                    <div class="wrapper">
                        <h2 class="comic-title">{{ $comic_to_show['title'] }}</h2>
                        <div class="price-box">
                            <div class="col-70">
                            <div class="price-info">
                                    <span>U.S. Price: {{ $comic_to_show['price'] }}</span>
                                    <span>available</span>
                            </div>
                            </div>

                            <div class="col-30">
                                <div class="check-availaibility">
                                    <span>Check Availaibility</span>
                                </div>
                            </div>
                        </div>
                        <p>{{ $comic_to_show['description'] }}</p>
                    </div>
                </div>

                {{-- ADV --}}
                <div class="col-30">
                    <div class="adv-title">
                        <span>advertisement</span>
                    </div>

                    <div>
                        <img src="{{ asset('/img/adv.jpg') }}" alt="adv image">
                    </div>
                </div>
            </div>
        </div>

        {{-- Comic Details --}}
        <div class="comic-details">
            <div class="small-container">

                <div class="comic-info-list">
                    <div class="col-47">
                        <h3>Talent</h3>
                        <ul>
                            <li>
                                <span>Art by:</span>
                                <p>
                                    @foreach ($comic_to_show['artists'] as $artist)
                                        {{ $artist }},
                                        @if($loop->last)
                                            {{ $artist }}
                                        @endif
                                    @endforeach
                                </p>
                            </li>
                            <li>
                                <span>Written by:</span>
                                <p>
                                    @foreach ($comic_to_show['writers'] as $artist)
                                        {{ $artist }},
                                        @if($loop->last)
                                            {{ $artist }}
                                        @endif
                                    @endforeach
                                </p>
                            </li>
                        </ul>
                    </div>
    
                    <div class="col-47">
                        <h3>Specs</h3>
                        <ul>
                            <li>
                                <span>Series:</span>
                                <span>{{ $comic_to_show['series'] }}</span>
                            </li>
                            <li>
                                <span>U.S. Price:</span>
                                <span>{{ $comic_to_show['price'] }}</span>
                            </li>
                            <li>
                                <span>On Sale Date:</span>
                                <span>{{ $comic_to_show['sale_date'] }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection