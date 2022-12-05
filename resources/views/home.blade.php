@extends('layouts.app')
@section('title')
    Home
@endsection

@section('content')
    {{-- Start Slider --}}
    <div class="container-fluid p-0">
        <div id="sync1" class="owl-carousel owl-theme owl-loaded d-flex align-items-center">
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
                <div class="order-0 order-md-1 col-12 col-md-6 p-0">
                    <img src="{{ asset('img/slider/slider-1.png') }}" alt="Slider">
                </div>
            </div>
            <div class="slider_container_two row d-flex align-items-center">
                <div class="order-1 order-md-0 col-12 col-md-6 p-4">
                    <h2 class="owl-title_two">
                        Enjoy the <span>taste</span> of<br> <span>quality</span> Indonesian coffee
                    </h2>
                    <p class="owl-text">
                        Expertly cultivated and grown tropical island green beans, for all occasions.
                    </p>
                    <div class="btn_slider_container">
                        <button class="btn btn_slider_coffee btn_slider_all_products">
                            <span>All products</span>
                        </button>
                        <button class="btn btn_slider_call btn_slider_call_two">
                            <span>Contact us</span>
                        </button>
                    </div>
                </div>
                <div class="order-0 order-md-1 col-12 col-md-6 p-0">
                    <img src="{{ asset('img/slider/slider-2.png') }}" alt="Slider">
                </div>
            </div>
            <div class="slider_container_two row d-flex align-items-center">
                <div class="order-1 order-md-0 col-12 col-md-6 p-4">
                    <h2 class="owl-title">
                        The worlds <span>hidden</span> <br> <span>treasure</span>. A gift from us, to you!
                    </h2>
                    <p class="owl-text">
                        Only qulality sourced and nutured indonesian beans. A truly unique bean to cup story.
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
                <div class="order-0 order-md-1 col-12 col-md-6 p-0">
                    <img src="{{ asset('img/slider/slider-3.png') }}" alt="Slider">
                </div>
            </div>
        </div>
        <div class="">
            <p>TEST</p>
        </div>
    </div>
    {{-- End Slider --}}
@endsection
