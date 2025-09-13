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
<style>
    .get-touch-row {
        display: flex;
        flex-wrap: wrap;
        gap: 36px;
        justify-content: center;
        margin-bottom: 40px;
    }

    .get-touch-card {
        position: relative;
        width: 270px;
        min-height: 360px;
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.18);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
        backdrop-filter: blur(8px);
        border: 2px solid rgba(255, 255, 255, 0.24);
        overflow: hidden;
        transition: transform 0.4s cubic-bezier(.4, 2, .6, 1), box-shadow 0.4s;
        margin-bottom: 10px;
        animation: fadeInUp 0.9s;
        animation-fill-mode: both;
    }

    .get-touch-card::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 22px;
        padding: 2px;
        background: linear-gradient(135deg, #FDBE51, #622c2c, #FDBE51 80%);
        background-size: 200% 200%;
        animation: borderGradient 3s linear infinite;
        z-index: 0;
        opacity: 0.7;
    }

    .get-touch-card>* {
        position: relative;
        z-index: 2;
    }

    .get-touch-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 18px 18px 0 0;
        transition: filter 0.4s, transform 0.4s;
        box-shadow: 0 2px 12px rgba(88, 30, 30, 0.10);
    }

    .get-touch-card:hover .get-touch-img {
        filter: brightness(0.85) blur(1.5px);
        transform: scale(1.04) rotate(-1deg);
    }

    .get-touch-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        background: linear-gradient(135deg, rgba(98, 44, 44, 0.18) 60%, rgba(253, 190, 81, 0.12));
        transition: opacity 0.4s;
        z-index: 3;
    }

    .get-touch-card:hover .get-touch-overlay {
        opacity: 1;
    }

    .get-touch-link {
        color: #fff;
        background: linear-gradient(90deg, #622c2c, #FDBE51 90%);
        padding: 12px 34px;
        border-radius: 30px;
        font-weight: 700;
        text-decoration: none;
        font-size: 1.15rem;
        box-shadow: 0 2px 12px rgba(98, 44, 44, 0.13);
        transition: background 0.2s, color 0.2s, transform 0.2s;
        border: none;
        outline: none;
        letter-spacing: 1px;
        transform: scale(1);
    }

    .get-touch-link:hover {
        background: linear-gradient(90deg, #FDBE51, #622c2c 90%);
        color: #622c2c;
        transform: scale(1.08);
    }

    .get-touch-icon {
        font-size: 2.5rem;
        margin-bottom: 18px;
        color: #FDBE51;
        text-shadow: 0 2px 8px #622c2c33;
        animation: floatIcon 2.2s infinite ease-in-out;
        display: block;
        text-align: center;
    }

    .get-touch-title {
        font-family: 'Lustria', serif;
        font-size: 1.25rem;
        color: #622c2c;
        font-weight: 600;
        margin: 18px 0 10px 0;
        text-align: center;
        letter-spacing: 1px;
    }

    .get-touch-desc {
        color: #7a5c5c;
        font-size: 1rem;
        text-align: center;
        margin: 0 18px 18px 18px;
        min-height: 48px;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes borderGradient {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 100% 50%;
        }
    }

    @keyframes floatIcon {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @media (max-width: 991px) {
        .get-touch-row {
            gap: 18px;
        }

        .get-touch-card {
            width: 46vw;
            min-width: 180px;
        }
    }

    @media (max-width: 600px) {
        .get-touch-card {
            width: 98vw;
            min-width: 120px;
        }

        .get-touch-row {
            gap: 10px;
        }
    }
</style>

<div class="container">
    <div class="get-touch-row">
        @foreach($gets as $get)
        <div class="get-touch-card">
            <img src="{{ asset('images/get/' . $get->image) }}" class="get-touch-img" alt="">
            <span class="get-touch-icon">
                @if(Str::contains($get->link, 'facebook'))
                <i class="fab fa-facebook-f"></i>
                @elseif(Str::contains($get->link, 'instagram'))
                <i class="fab fa-instagram"></i>
                @elseif(Str::contains($get->link, 'twitter'))
                <i class="fab fa-twitter"></i>
                @elseif(Str::contains($get->link, 'linkedin'))
                <i class="fab fa-linkedin-in"></i>
                @else
                <i class="fas fa-globe"></i>
                @endif
            </span>
            <div class="get-touch-title">{{ $get->title ?? 'Social Link' }}</div>
            <div class="get-touch-desc">{{ $get->description ?? '' }}</div>
            <div class="get-touch-overlay">
                <a href="{{ $get->link }}" target="_blank" class="get-touch-link">
                    Visit
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Font Awesome CDN for icons (add in your layout if not already included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

<br>
<br>

@endsection