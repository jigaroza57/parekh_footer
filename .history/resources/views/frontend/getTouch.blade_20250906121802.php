@extends('frontend/layout')
@section('content')

{{-- Hero Section --}}
<section class="py-5 bg-gradient-to-r from-[#fff0f0] to-[#f7e6e6] text-center">
    <div class="container">
        <h2 class="fw-bold mb-3 text-3xl md:text-4xl tracking-wide" style="color: #622c2c; font-family: 'Lustria', serif;">
            Get In Touch By Social Content
        </h2>
        <p class="text-muted mb-5">Stay connected with us on social platforms — click to explore</p>
        <img src="{{ asset('images/group-48099402.svg')}}"  
             class="img-fluid animate__animated animate__fadeInUp" 
             style="width: 260px;" alt="">
    </div>
</section>

{{-- Social Cards --}}
<div class="container py-5">
    <div class="row g-4 justify-content-center">
        @foreach($gets as $get)
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 120 }}">
                <div class="social-card shadow-lg rounded-4 overflow-hidden position-relative">
                    <a href="{{$get->link}}" target="_blank">
                        <img src="{{ asset('images/get/'. $get->image) }}" 
                             class="img-fluid w-100 social-img" 
                             alt="social">
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <span class="overlay-text">Visit Now →</span>
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
    .social-card {
        border: none;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        cursor: pointer;
    }
    .social-card:hover {
        transform: translateY(-12px) scale(1.05);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }
    .social-img {
        height: 280px;
        object-fit: cover;
        border-radius: 16px;
        transition: transform 0.6s ease;
    }
    .social-card:hover .social-img {
        transform: scale(1.1) rotate(2deg);
    }
    .overlay {
        position: absolute;
        inset: 0;
        background: rgba(98,44,44,0.65);
        opacity: 0;
        transition: opacity 0.4s ease;
        border-radius: 16px;
    }
    .overlay-text {
        color: #fff;
        font-weight: 600;
        font-size: 1.2rem;
        transform: translateY(20px);
        transition: transform 0.4s ease;
    }
    .social-card:hover .overlay {
        opacity: 1;
    }
    .social-card:hover .overlay-text {
        transform: translateY(0);
    }
</style>
@endpush

{{-- Animation Scripts --}}
@push('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 900,
        once: true,
    });
</script>
@endpush

@endsection
