@extends('layouts.app')
@section('page_title')
{{$comic['title']}}
@endsection
@section('content')
    {{-- <h3>{{ $comic['title'] }}</h3> --}}
    <div class="show-comic">
        <div class="hero position-relative">
            <img class="jumbo" src="/images/jumbotron.jpg" alt="hero">
            <img class="thumb" src="{{ $comic['thumb'] }}" alt="">
        </div>
        <div class="my-blue"></div>
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="w-75">
                <h3 class="text-uppercase mt-5 fw-bold">{{ $comic['title'] }}</h3>
                <div class="d-flex my-green mt-3 border-bottom border-1 border-dark text-white">
                    <div class="w-75 p-2 d-flex justify-content-between align-items-center">
                        <div>
                            <span class="opacity-50 fw-bold">U.S. Price:</span>
                            <span>{{ $comic['price'] }}</span>
                        </div>
                        <span class="opacity-50 fw-bold text-uppercase">Available</span>
                    </div>
                    <div class="w-25 p-2 border-start border-1 border-dark">
                        <span>Check Availability<i class="fa-solid ms-1 fa-angle-down"></i></span>
                    </div>
                </div>
                <p class="pt-3">
                    {{ $comic['description'] }}
                </p>
                </div>
            <div class="w-25">
                <h6 class="text-end">cip</h6>
                <div>
                    <img  class="" src="/images/adv.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
