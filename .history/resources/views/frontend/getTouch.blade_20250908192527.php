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
<div class="image-gallery-container">
    <div class="row g-4">
        @foreach($gets as $get)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="gallery-card">
                <div class="image-wrapper">
                    <a href="{{$get->link}}" target="_blank" class="image-link">
                        <img src="{{asset('images/get/'. $get->image)}}"
                            class="gallery-image"
                            alt="Gallery Image {{$loop->iteration}}"
                            loading="lazy">
                        <div class="image-overlay">
                            <div class="overlay-content">
                                <i class="fas fa-external-link-alt"></i>
                                <span>View Details</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .image-gallery-container {
        padding: 2rem 1rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .gallery-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
        transition: all 0.3s ease;
        height: 100%;
    }

    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .image-wrapper {
        position: relative;
        overflow: hidden;
        background: #f8f9fa;
    }

    .gallery-image {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: transform 0.3s ease;
        border: none;
    }

    .image-link {
        display: block;
        text-decoration: none;
        position: relative;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(88, 30, 30, 0.8), rgba(139, 69, 19, 0.8));
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .image-link:hover .image-overlay {
        opacity: 1;
    }

    .image-link:hover .gallery-image {
        transform: scale(1.1);
    }

    .overlay-content {
        text-align: center;
        color: white;
        font-weight: 500;
    }

    .overlay-content i {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        display: block;
    }

    .overlay-content span {
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .image-gallery-container {
            padding: 1rem 0.5rem;
        }

        .gallery-image {
            height: 220px;
        }
    }

    @media (max-width: 576px) {
        .gallery-image {
            height: 200px;
        }

        .overlay-content i {
            font-size: 1.2rem;
        }

        .overlay-content span {
            font-size: 0.8rem;
        }
    }

    /* Loading animation for images */
    .gallery-image {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }

    .gallery-image[src] {
        background: none;
        animation: none;
    }

    @keyframes loading {
        0% {
            background-position: 200% 0;
        }

        100% {
            background-position: -200% 0;
        }
    }

    /* Focus styles for accessibility */
    .image-link:focus {
        outline: 3px solid #581E1E;
        outline-offset: 2px;
    }

    .image-link:focus .image-overlay {
        opacity: 1;
    }
</style>

<br>
<br>

@endsection