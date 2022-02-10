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
                
                @include('components.comicslist', [
                    'comics_array' => $comics_array
                ])

            </div>
            <a class="btn-lg-blue-bckg" href="#">LOAD MORE</a>
        </div>
    </section>

@endsection