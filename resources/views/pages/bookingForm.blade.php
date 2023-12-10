@extends('layout.master')
@section('content')
    <section class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">
                                    A Lifetime of Discounts? It's Genius.
                                </h2>
                                <p data-animation="fadeInUp" data-delay=".4s">
                                    Get rewarded for your travels – unlock instant savings of
                                    10% or more with a free Geairinfo.com account
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">
                                    A Lifetime of Discounts? It's Genius.
                                </h2>
                                <p data-animation="fadeInUp" data-delay=".4s">
                                    Get rewarded for your travels – unlock instant savings of
                                    10% or more with a free Geairinfo.com account
                                </p>
                                {{-- <a href="contact.html" class="btn" data-animation="fadeInUp" data-delay=".6s">Sign in
                                / Register</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg03.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">
                                    A Lifetime of Discounts? It's Genius.
                                </h2>
                                <p data-animation="fadeInUp" data-delay=".4s">
                                    Get rewarded for your travels – unlock instant savings of
                                    10% or more with a free Geairinfo.com account
                                </p>
                                {{-- <a href="contact.html" class="btn" data-animation="fadeInUp" data-delay=".6s">Sign in
                                    / Register</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-3 pt-3">
        <div class="col-12">
        </div>
        <div class="col-12">
            <div class="bg-secondary opacity-75 bg-gradient p-3 text-center mb-2 text-white fw-bolder fs-3">
                Booking Form
            </div>
            <hr>
        </div>
        <form action="{{ route('store.booking') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Seats</label>
                    <input type="number" class="form-control" id="seats" name="seats" required>
                </div>
            </div>
            <div class="mt-3 row">
                <div class="col">
                    <label for="inputAddress" class="form-label">Class</label>
                    <input type="text" class="form-control" id="class" name="class" required>
                </div>
                <div class="col">
                    <label for="inputAddress" class="form-label">Flight To</label>
                    <input type="text" disabled class="form-control" id="flight_name" name="flight_name"
                        value={{ $flight->to }}>
                    <input type="hidden" value="{{ $flight->id }}" name="flight_id">
                </div>
            </div>
            <div class="mt-3 col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Agree to terms and services.
                    </label>
                </div>
            </div>
            <div class="mt-3 mb-3 text-center ">
                <button type="submit" class="btn btn-success">Book me
                    now</button>
            </div>
        </form>
    </div>
@endsection
