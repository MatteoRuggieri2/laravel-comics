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

                <div class="col-70">
                    <h2>{{ $comic_to_show['title'] }}</h2>
                    <div class="price-box">
                        <div class="col-70">
                           <div class="price-info">
                                <span>{{ $comic_to_show['price'] }}</span>
                                <span>available</span>
                           </div>
                        </div>

                        <div class="col-30">
                            <span class="check-availaibility">check</span>
                        </div>
                    </div>
                    <p>{{ $comic_to_show['description'] }}</p>
                </div>

                {{-- ADV --}}
                <div class="col-30">
                    <div class="adv-title">
                        advertisement
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
                comic details
            </div>
        </div>
    </section>

@endsection