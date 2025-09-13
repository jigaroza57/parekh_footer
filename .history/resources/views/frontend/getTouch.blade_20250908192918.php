@extends('frontend/layout')
@section('content')



<style>
    /* Custom Styles for Contact Page */
    .contact-hero {
        background: linear-gradient(135deg, #5B2323 0%, #622c2c 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="%23FDBE51" opacity="0.1"/><circle cx="80" cy="40" r="1.5" fill="%23FDBE51" opacity="0.08"/><circle cx="40" cy="80" r="1" fill="%23FDBE51" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') repeat;
        opacity: 0.3;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-family: "Aladin", system-ui;
        letter-spacing: 4px;
        color: white;
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        animation: slideInDown 1s ease-out;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }
    }
</style>
<!-- Hero Section -->
<section class="contact-hero" style="background-image: url('images/new/section_bg_img.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="hero-title">Get In Touch By Social Content</h1>

            <!-- <p class="hero-subtitle" style="color: white;">We'd love to hear from you. Get in touch with our expert team.</p> -->
        </div>
    </div>
</section>

<!-- <center>
    <div class="container">
        <h2 style="color: #622c2c; font-family: 'Lustria', serif;"> Get In Touch By Social Content
        </h2>

        <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid" style="width: 320px;" alt="">

    </div>
</center> -->

<br>
<br>
<br>
<div class="modern-gallery-container">
    <div class="row g-4">
        @foreach($gets as $get)
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="modern-gallery-card">
                <div class="card-inner">
                    <div class="image-container">
                        <div class="dotted-frame">
                            <a href="{{$get->link}}" target="_blank" class="image-link">
                                <img src="{{asset('images/get/'. $get->image)}}"
                                    class="gallery-image"
                                    alt="Gallery Image {{$loop->iteration}}"
                                    loading="lazy">
                                <div class="hover-overlay">
                                    <div class="overlay-content">
                                        <div class="icon-wrapper">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                        <span class="view-text">View Gallery</span>
                                        <div class="decorative-dots">
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="corner-decorations">
                            <div class="corner corner-tl"></div>
                            <div class="corner corner-tr"></div>
                            <div class="corner corner-bl"></div>
                            <div class="corner corner-br"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    body {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .modern-gallery-container {
        padding: 3rem 1rem;
        max-width: 1400px;
        margin: 0 auto;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        position: relative;
    }

    .modern-gallery-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            radial-gradient(circle at 25px 25px, rgba(88, 30, 30, 0.1) 2px, transparent 2px),
            radial-gradient(circle at 75px 75px, rgba(139, 69, 19, 0.08) 1px, transparent 1px);
        background-size: 100px 100px, 50px 50px;
        pointer-events: none;
        opacity: 0.6;
    }

    .modern-gallery-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 20px;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        height: 100%;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.8);
    }

    .modern-gallery-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow:
            0 20px 40px rgba(88, 30, 30, 0.15),
            0 10px 20px rgba(0, 0, 0, 0.1);
        background: rgba(255, 255, 255, 0.98);
    }

    .card-inner {
        position: relative;
        height: 100%;
    }

    .image-container {
        position: relative;
        height: 100%;
    }

    .dotted-frame {
        position: relative;
        border: 3px dotted #581E1E;
        border-radius: 15px;
        padding: 8px;
        background: linear-gradient(45deg,
                rgba(88, 30, 30, 0.02) 0%,
                rgba(139, 69, 19, 0.02) 50%,
                rgba(88, 30, 30, 0.02) 100%);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .modern-gallery-card:hover .dotted-frame {
        border-color: #8B4513;
        border-style: solid;
        animation: borderPulse 2s infinite;
        box-shadow: inset 0 0 20px rgba(88, 30, 30, 0.1);
    }

    @keyframes borderPulse {

        0%,
        100% {
            border-color: #581E1E;
        }

        50% {
            border-color: #8B4513;
        }
    }

    .image-link {
        display: block;
        position: relative;
        border-radius: 10px;
        overflow: hidden;
    }

    .gallery-image {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: all 0.4s ease;
        border-radius: 10px;
        filter: brightness(0.95) contrast(1.05);
    }

    .hover-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg,
                rgba(88, 30, 30, 0.9) 0%,
                rgba(139, 69, 19, 0.85) 50%,
                rgba(88, 30, 30, 0.9) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        border-radius: 10px;
        backdrop-filter: blur(5px);
    }

    .image-link:hover .hover-overlay {
        opacity: 1;
    }

    .image-link:hover .gallery-image {
        transform: scale(1.15);
        filter: brightness(0.7) contrast(1.2);
    }

    .overlay-content {
        text-align: center;
        color: white;
        transform: translateY(20px);
        transition: transform 0.4s ease;
    }

    .image-link:hover .overlay-content {
        transform: translateY(0);
    }

    .icon-wrapper {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border: 2px dotted rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        transition: all 0.3s ease;
    }

    .icon-wrapper i {
        font-size: 1.8rem;
        animation: iconFloat 2s ease-in-out infinite;
    }

    @keyframes iconFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    .view-text {
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        display: block;
        margin-bottom: 10px;
    }

    .decorative-dots {
        display: flex;
        justify-content: center;
        gap: 5px;
    }

    .decorative-dots span {
        width: 6px;
        height: 6px;
        background: white;
        border-radius: 50%;
        display: inline-block;
        animation: dotPulse 1.5s ease-in-out infinite;
    }

    .decorative-dots span:nth-child(1) {
        animation-delay: 0s;
    }

    .decorative-dots span:nth-child(2) {
        animation-delay: 0.2s;
    }

    .decorative-dots span:nth-child(3) {
        animation-delay: 0.4s;
    }

    @keyframes dotPulse {

        0%,
        100% {
            opacity: 0.4;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.2);
        }
    }

    .corner-decorations {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .modern-gallery-card:hover .corner-decorations {
        opacity: 1;
    }

    .corner {
        position: absolute;
        width: 20px;
        height: 20px;
        border: 2px dotted #581E1E;
        background: rgba(255, 255, 255, 0.9);
    }

    .corner-tl {
        top: 10px;
        left: 10px;
        border-right: none;
        border-bottom: none;
        border-radius: 8px 0 0 0;
    }

    .corner-tr {
        top: 10px;
        right: 10px;
        border-left: none;
        border-bottom: none;
        border-radius: 0 8px 0 0;
    }

    .corner-bl {
        bottom: 10px;
        left: 10px;
        border-right: none;
        border-top: none;
        border-radius: 0 0 0 8px;
    }

    .corner-br {
        bottom: 10px;
        right: 10px;
        border-left: none;
        border-top: none;
        border-radius: 0 0 8px 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .modern-gallery-container {
            padding: 2rem 0.5rem;
        }

        .modern-gallery-card {
            padding: 15px;
        }

        .gallery-image {
            height: 240px;
        }

        .icon-wrapper {
            width: 50px;
            height: 50px;
        }

        .icon-wrapper i {
            font-size: 1.5rem;
        }

        .view-text {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .gallery-image {
            height: 220px;
        }

        .dotted-frame {
            padding: 6px;
        }
    }

    /* Loading Animation */
    .gallery-image[src] {
        animation: imageLoad 0.8s ease-out;
    }

    @keyframes imageLoad {
        from {
            opacity: 0;
            transform: scale(0.9);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Focus States for Accessibility */
    .image-link:focus {
        outline: 3px solid #581E1E;
        outline-offset: 2px;
        border-radius: 10px;
    }

    .image-link:focus .hover-overlay {
        opacity: 0.8;
    }

    /* Additional Visual Effects */
    .modern-gallery-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, #581E1E, #8B4513, #581E1E);
        border-radius: 22px;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .modern-gallery-card:hover::before {
        opacity: 0.1;
    }
</style>

<br>
<br>

@endsection