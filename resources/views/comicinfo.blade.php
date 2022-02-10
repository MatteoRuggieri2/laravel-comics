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
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="comic book">
                    
                        {{-- Comic Type --}}
                        <div class="comic-type comic-target">
                            <span>comic book</span>
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
                comic description
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