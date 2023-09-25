@extends('layouts.public')


@section('content')
    <main>
        <div class="card-container">
            @foreach ($comicsList as $comic)
                <div class="card">
                    <div class="img-container">
                        <div class="overlay">
                            <span> {{ $comic['price'] }} </span>
                            <span> {{ $comic['type'] }} </span>
                        </div>
                        <img alt="comic-cover" src="{{ $comic['thumb'] }}">
                    </div>
                    <div class="desc"> {{ $comic['series'] }} </div>
                </div>
            @endforeach
        </div>
        <div class="row-btn">
            <span class="btn">load more</span>
        </div>
    </main>
    @include('partials.blueBar')
@endsection
