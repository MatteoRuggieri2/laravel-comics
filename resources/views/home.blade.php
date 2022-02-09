@extends('layouts.app')

@section('page_title')
    Home - DC Comics
@endsection

@section('main_content')
    
    <section class="jumbotron">
        <img class="jumbo-img" src="{{ asset('/img/jumbotron.jpg') }}" alt="Jumbotron">
    </section>

    <section>
        <div class="container">
            <div class="wrapper">
                <span class="main-title">CURRENT SERIES</span>
                
                @foreach ($comics_array as $comic)
                    
                    {{-- Single series --}}
                    <div class="single-series-container">
                        <a href="#">
                            <div class="series-img-container">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            </div>
                            <h2>{{ $comic['series'] }}</h2>
                        </a>
                    </div>
                @endforeach    

            </div>
            <a class="btn-lg-blue-bckg" href="#">LOAD MORE</a>
        </div>
    </section>

@endsection