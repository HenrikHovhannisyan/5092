@extends('layouts.app')
@section('title')
    Home
@endsection

@section('content')
    {{-- Start Slider --}}
    <div class="container-fluid p-0">
        <div id="sync1" class="owl-carousel owl-theme">
            <div class="slider_container_one row d-flex align-items-center">
                <div class="order-1 order-md-0 col-12 col-md-6 p-4">
                    <h2 class="owl-title">
                        Rare Indonesian<br>
                        <span>speciality</span> coffee
                    </h2>
                    <p class="owl-text">
                        Your trusted and reliable choice of heartwarming Indonesian beans & blends.
                    </p>
                    <div class="btn_slider_container">
                        <button class="btn btn_slider_coffee">
                            <span>Coffee</span>
                        </button>
                        <button class="btn btn_slider_call">
                            <span>Contact us</span>
                        </button>
                    </div>
                </div>
                <div class="order-0 order-md-1 col-12 col-md-6">
                    <img src="{{ asset('img/slider/slider-1.png') }}" alt="Slider">
                </div>
            </div>
            <div>
                <div class="position-absolute">
                    <h2 class="owl-title">Flash</h2>
                </div>
                <img src="{{ asset('img/slider/slider-2.png') }}" alt="Slider">
            </div>
            <div>
                <div class="position-absolute">
                    <h2 class="owl-title">Flash</h2>
                </div>
                <img src="{{ asset('img/slider/slider-3.png') }}" alt="Slider">
            </div>
        </div>
    </div>
    {{-- End Slider --}}
@endsection
