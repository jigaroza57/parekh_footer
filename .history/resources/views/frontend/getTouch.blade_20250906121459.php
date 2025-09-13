<?php
@extends('frontend/layout')
@section('content')

<style>
    .get-touch-section {
        background: linear-gradient(135deg, #f8e8e8 0%, #fff 100%);
        padding: 40px 0;
    }
    .get-touch-title {
        color: #581E1E;
        font-family: 'Lustria', serif;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        letter-spacing: 1px;
    }
    .get-touch-card {
        border: none;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(88, 30, 30, 0.08);
        transition: transform 0.2s, box-shadow 0.2s;
        background: #fff;
    }
    .get-touch-card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 8px 32px rgba(88, 30, 30, 0.18);
    }
    .get-touch-img {
        border-radius: 14px;
        border: 1px solid #581E1E;
        padding: 8px;
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: box-shadow 0.2s;
        background: #faf6f6;
    }
    .get-touch-card a {
        text-decoration: none;
    }
    @media (max-width: 767px) {
        .get-touch-img { height: 160px; }
    }
</style>

<div class="get-touch-section">
    <div class="container text-center">
        <h2 class="get-touch-title">Get In Touch By Social Content</h2>
        <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid mb-4" style="width: 220px;" alt="">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            @foreach($gets as $get)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex align-items-stretch">
                    <div class="card get-touch-card w-100">
                        <a href="{{$get->link}}" target="_blank">
                            <img src="{{ asset('images/get/' . $get->image) }}" class="get-touch-img card-img-top" alt="">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection