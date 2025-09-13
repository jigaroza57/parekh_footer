@extends('frontend/layout')
@section('content')

{{-- Hero Section --}}
<section class="py-5 bg-dark text-center text-white position-relative overflow-hidden">
    <div class="container">
        <h2 class="fw-bold mb-3 display-5 animate__animated animate__fadeInDown" style="font-family: 'Lustria', serif;">
            Get In Touch By Social Content
        </h2>
        <p class="text-light opacity-75 mb-4 animate__animated animate__fadeInUp">
            Stay connected with us — follow our social platforms
        </p>
        <img src="{{ asset('images/group-48099402.svg')}}"  
             class="img-fluid animate__animated animate__zoomIn" 
             style="width: 250px;" alt="">
    </div>
    <div class="floating-bg"></div>
</section>

{{-- Social Cards --}}
<div class="container py-5">
    <div class="row g-4 justify-content-center">
        @foreach($gets as $get)
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="{{ $loop->index * 150 }}">
                <div class="glass-card position-relative">
                    <a href="{{$get->link}}" target="_blank" class="d-block">
                        <img src="{{ asset('images/get/'. $get->image) }}" 
                             class="img-fluid rounded-4 w-100 social-img" 
                             alt="social">
                        <div class="card-overlay d-flex align-items-center justify-content-center">
                            <span class="overlay-text">✨ Explore Now</span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Styling --}}
@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<style>
    body {
        background: #f5f5f5;
    }

    /* Hero background floating gradient */
    .floating-bg {
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle at center, #ffafbd, #ffc3a0, #ffdde1);
        animation: floating 20s linear infinite;
        opacity: 0.2;
        z-index: 0;
    }
    @keyframes floating {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Glassmorphism card style */
    .glass-card {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.25);
        backdrop-filter: blur(10px);
        border-radius: 18px;
        overflow: hidden;
        transition: transform 0.5s ease, box-shadow 0.5s ease;
        position: relative;
    }
    .glass-card:hover {
        transform: translateY(-15px) scale(1.05);
        box-shadow: 0 25px 40px rgba(0,0,0,0.25);
    }

    .social-img {
        height: 260px;
        object-fit: cover;
        transition: transform 0.7s ease;
    }
    .glass-card:hover .social-img {
        transform: scale(1.15) rotate(2deg);
    }

    /* Overlay on hover */
    .card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(98,44,44,0.8), rgba(255,75,75,0.7));
        opacity: 0;
        transition: opacity 0.5s ease;
        border-radius: 18px;
    }
    .overlay-text {
        color: #fff;
        font-weight: 600;
        font-size: 1.3rem;
        transform: translateY(20px);
        transition: transform 0.4s ease;
    }
    .glass-card:hover .card-overlay {
        opacity: 1;
    }
    .glass-card:hover .overlay-text {
        transform: translateY(0);
    }
</style>
@endpush

{{-- Scripts --}}
@push('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endpush

@endsection
