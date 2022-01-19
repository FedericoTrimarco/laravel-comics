@extends('layout.main')

@section('main-content')
    <section class="container">
        <div class="cards d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="card">
                    <div class="card-img">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}">
                    </div>
                    <h3>{{ $comic['series'] }}</h3>
                </div>
            @endforeach
        </div>
    </section>
@endsection