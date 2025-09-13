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
        gap: 30px;
        justify-content: center;
        margin-bottom: 40px;
    }
    .get-touch-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 6px 24px rgba(88,30,30,0.13);
        overflow: hidden;
        transition: transform 0.3s cubic-bezier(.4,2,.6,1), box-shadow 0.3s;
        position: relative;
        width: 270px;
        min-height: 340px;
        margin-bottom: 10px;
        animation: fadeInUp 0.7s;
    }
    .get-touch-card:hover {
        transform: translateY(-12px) scale(1.04);
        box-shadow: 0 16px 40px rgba(88,30,30,0.22);
        z-index: 2;
    }
    .get-touch-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-bottom: 2px solid #f5e2d2;
        transition: filter 0.3s;
    }
    .get-touch-card:hover .get-touch-img {
        filter: brightness(0.92) blur(1px);
    }
    .get-touch-overlay {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(88,30,30,0.13);
        opacity: 0;
        transition: opacity 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        pointer-events: none;
    }
    .get-touch-card:hover .get-touch-overlay {
        opacity: 1;
        pointer-events: auto;
    }
    .get-touch-link {
        color: #fff;
        background: #622c2c;
        padding: 10px 28px;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        font-size: 1.1rem;
        box-shadow: 0 2px 8px rgba(88,30,30,0.13);
        transition: background 0.2s;
    }
    .get-touch-link:hover {
        background: #FDBE51;
        color: #622c2c;
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px);}
        to { opacity: 1; transform: translateY(0);}
    }
    @media (max-width: 991px) {
        .get-touch-row { gap: 18px; }
        .get-touch-card { width: 46vw; min-width: 180px; }
    }
    @media (max-width: 600px) {
        .get-touch-card { width: 98vw; min-width: 120px; }
        .get-touch-row { gap: 10px; }
    }
</style>

<div class="container">
    <div class="get-touch-row">
        @foreach($gets as $get)
        <div class="get-touch-card">
            <img src="{{ asset('images/get/' . $get->image) }}" class="get-touch-img" alt="">
            <div class="get-touch-overlay">
                <a href="{{ $get->link }}" target="_blank" class="get-touch-link">
                    Visit
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<br>
<br>

@endsection