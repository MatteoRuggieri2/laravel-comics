@extends('layouts.app')

@section('page_title')
    Home - DC Comics
@endsection

@section('main_content')
    
    {{-- Jumbotron --}}
    @include('components.jumbotron')

    {{-- Current Series --}}
    <section class="current-series-sect">
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

    {{-- Pre-Footer --}}
    @include('components.prefooter')

@endsection