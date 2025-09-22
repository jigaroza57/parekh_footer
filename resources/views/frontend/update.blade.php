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
            <h1 class="hero-title">Latest News </h1>

            <!-- <p class="hero-subtitle" style="color: white;">We'd love to hear from you. Get in touch with our expert team.</p> -->
        </div>
    </div>
</section>

<div class="container my-5">
    <!-- <div class="text-center mb-5">
        <h2 class="fw-bold" style="color:#581e1e; font-family:'Lustria', serif;">What’s New</h2>
        <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid mt-3" style="max-width: 280px;" alt="">
    </div> -->

    <br>
    <br>

    <div class="row justify-content-center gy-5">
        @foreach($update as $up)

        {{-- Gold Section --}}
        @if(!empty($up->gold))
        <div class="col-md-10 col-12" data-aos="fade-right">
            <div class="update-card glass-gold flex-column flex-md-row">
                <div class="update-img">
                    <img src="{{ asset('images/gold.jpg')}}" alt="Gold">
                </div>
                <div class="update-content">
                    <h2 class="update-title gold-text">
                        <i class="fas fa-coins"></i> Gold Update
                    </h2>
                    <p class="update-text">{!! $up->gold !!}</p>
                </div>
            </div>
        </div>
        @endif

        {{-- Silver Section --}}
        @if(!empty($up->silver))
        <div class="col-md-10 col-12" data-aos="fade-left">
            <div class="update-card glass-silver flex-column flex-md-row-reverse">
                <div class="update-img">
                    <img src="{{ asset('images/silver.jpg')}}" alt="Silver">
                </div>
                <div class="update-content">
                    <h2 class="update-title silver-text">
                        <i class="fas fa-gem"></i> Silver Update
                    </h2>
                    <p class="update-text">{!! $up->silver !!}</p>
                </div>
            </div>
        </div>
        @endif

        {{-- Platinum Section --}}
        @if(!empty($up->platinum))
        <div class="col-md-10 col-12" data-aos="zoom-in-up">
            <div class="update-card glass-platinum flex-column flex-md-row">
                <div class="update-img">
                    <img src="{{ asset('images/platinum.jpg')}}" alt="Platinum">
                </div>
                <div class="update-content">
                    <h2 class="update-title platinum-text">
                        <i class="fas fa-crown"></i> Platinum Update
                    </h2>
                    <p class="update-text">{!! $up->platinum !!}</p>
                </div>
            </div>
        </div>
        @endif

        @endforeach
    </div>



    <style>
        /* General Card Styling */
        .update-card {
            display: flex;
            border-radius: 25px;
            overflow: hidden;
            min-height: 300px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(12px);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            animation: floatCard 6s ease-in-out infinite;
        }

        .update-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.3);
        }

        /* Floating Animation */
        @keyframes floatCard {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        /* Image Section */
        .update-img {
            flex: 1;
            overflow: hidden;
        }

        .update-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .update-card:hover .update-img img {
            transform: scale(1.1) rotate(1deg);
        }

        /* Content Section */
        .update-content {
            flex: 2;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: left;
        }

        /* Text Styling */
        .update-title {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .update-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
        }

        /* Glass Effects */
        .glass-gold {
            background: linear-gradient(135deg, rgba(255, 223, 88, 0.25), rgba(255, 193, 7, 0.15));
        }

        .glass-silver {
            background: linear-gradient(135deg, rgba(189, 189, 189, 0.25), rgba(224, 224, 224, 0.15));
        }

        .glass-platinum {
            background: linear-gradient(135deg, rgba(158, 158, 158, 0.25), rgba(97, 97, 97, 0.15));
        }

        /* Gradient Text */
        .gold-text {
            background: linear-gradient(90deg, #ffb300, #ff8f00);
            -webkit-background-clip: text;
            color: transparent;
        }

        .silver-text {
            background: linear-gradient(90deg, #b0bec5, #78909c);
            -webkit-background-clip: text;
            color: transparent;
        }

        .platinum-text {
            background: linear-gradient(90deg, #9e9e9e, #616161);
            -webkit-background-clip: text;
            color: transparent;
        }

        /* Icon Animation */
        .bounce-icon {
            animation: bounce 1.5s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }
    </style>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true
        });
    </script>



</div>

@endsection