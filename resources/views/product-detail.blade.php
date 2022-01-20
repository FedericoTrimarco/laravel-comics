@extends('layout.main')

@section('main-content')
    <section class="product-details">
        <div class="jumbo">
            <div class="container-2">
                <div class="comic-img">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    <span>COMIC BOOK</span><br>
                    <a href="/" class="w-100 text-center text-decoration-none">VIEW GALLERY</a>
                </div>
            </div>
        </div>
        <div class="comic-info">
            <div class="container-2 d-flex align-items-center h-100">
                <div class="d-flex">
                    <div class="left">
                        <h1 class="fs-2">{{ $comic['title'] }}</h1>
                        <div class="price d-flex fw-bold">
                            <div class="flex-grow-1 d-flex justify-content-between p-3">
                                <span>US Price: <span class="detail-white">{{ $comic['price'] }}</span></span>
                                <span>AVAILABLE</span>
                            </div>
                            <div class="p-3 detail-white">
                                <span>Check Availability</span>
                                <i class="fas fa-sort-down"></i>
                            </div>
                        </div>
                        <p class="fw-bold">{{ $comic['description'] }}</p>
                    </div>
                    <div class="right">
                        <h2 class="text-end">ADVERTISEMENT</h2>
                        <img src="{{ asset('images/adv.jpg') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection