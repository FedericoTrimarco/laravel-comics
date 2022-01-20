@extends('layout.main')

@section('main-content')
    <section class="home container py-5">
        <div class="cards d-flex flex-wrap">
            @foreach ($comics as $index => $comic)
                <div class="card">
                    <div class="card-img">
                    <a href="{{ route('comic-detail', ['id' => $index]) }}">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}">
                    </a>
                    </div>
                    <h3>{{ $comic['series'] }}</h3>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <button class="fs-3">LOAD MORE</button>
        </div>
    </section>
@endsection