@extends('frontend/layout')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    .card img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        transition: transform 0.3s ease;
    }
    .card:hover img {
        transform: scale(1.05);
    }
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #622c2c;
        font-family: 'Lustria', serif;
        margin-bottom: 2rem;
        position: relative;
        display: inline-block;
    }
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 50%;
        height: 4px;
        background: linear-gradient(to right, #622c2c, #f4a261);
        border-radius: 2px;
    }
    .hero-image {
        max-width: 350px;
        margin: 1.5rem auto;
        animation: fadeInUp 1s ease-in-out;
    }
    @media (max-width: 768px) {
        .section-title {
            font-size: 1.8rem;
        }
        .hero-image {
            max-width: 250px;
        }
    }
</style>

<div class="py-12 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h2 class="section-title animate__animated animate__fadeInDown">Get In Touch By Social Content</h2>
            <img src="{{ asset('images/group-48099402.svg') }}" class="hero-image img-fluid" alt="Social Content">
        </div>

        <div class="mt-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($gets as $get)
                    <div class="card animate__animated animate__fadeIn" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                        <a href="{{ $get->link }}" target="_blank">
                            <img src="{{ asset('images/get/' . $get->image) }}" class="img-fluid" alt="{{ $get->image }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection