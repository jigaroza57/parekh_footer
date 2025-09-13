@extends('frontend/layout')

@section('content')


<div class="container mt-3 about">
    <section class="py-5" style="background: linear-gradient(to right, #f7f1f1, #ffffff);">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="your-image.jpg" class="img-fluid rounded shadow" alt="About Us">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3" style="color: #622c2c; font-family: 'Lustria', serif;">Who We Are</h2>
                    <p class="lead" style="line-height: 1.8; color: #555;">{!! $detail->about_us !!}</p>
                    <a href="#more" class="btn btn-lg px-4" style="background: #622c2c; color: #fff; border-radius: 30px;">Learn More</a>
                </div>
            </div>
        </div>
    </section>


    <style>
        .show-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-in-out;
        }

        .show-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script>
        document.addEventListener('scroll', function() {
            document.querySelectorAll('.show-on-scroll').forEach(function(el) {
                let position = el.getBoundingClientRect().top;
                let windowHeight = window.innerHeight;
                if (position < windowHeight - 50) {
                    el.classList.add('visible');
                }
            });
        });
    </script>
    <br>
    <br>
    <div class="main-container">
        <!-- Precious Metals Section -->
        <div class="precious-metals">
            <div class="section-title">
                <h2><i class="fas fa-gem me-3"></i>Precious Metals Collection</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="premium-badge">Premium</div>
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=400&h=300&fit=crop&auto=format" alt="Platinum Collection" class="product-image">
                        </div>
                        <div class="card-content">
                            <h3 class="product-title">Platinum</h3>
                            <p class="product-description">
                                Discover our exquisite platinum collection, featuring the finest quality precious metal known for its durability, purity, and timeless elegance. Each piece is crafted with meticulous attention to detail, ensuring exceptional beauty that lasts a lifetime.
                            </p>
                            <i class="fas fa-crown metal-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="premium-badge">Classic</div>
                        <div class="card-image-wrapper">
                            <img src="{{ asset('images/category/gold.png')}}" alt="Gold Collection" class="product-image">
                        </div>
                        <div class="card-content">
                            <h3 class="product-title">Gold</h3>
                            <p class="product-description">
                                Explore our stunning gold jewelry collection, showcasing the perfect blend of traditional craftsmanship and contemporary design. From elegant necklaces to sophisticated rings, each piece radiates luxury and sophistication.
                                <br>
                                <br>
                            </p>
                            <i class="fas fa-star metal-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="premium-badge">Elegant</div>
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?w=400&h=300&fit=crop&auto=format" alt="Silver Collection" class="product-image">
                        </div>
                        <div class="card-content">
                            <h3 class="product-title">Silver</h3>
                            <p class="product-description">
                                Our silver collection offers timeless beauty and versatility. From delicate earrings to bold statement pieces, each item is carefully designed to complement your unique style while maintaining the highest standards of quality.
                            </p>
                            <i class="fas fa-moon metal-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Luxury Items Section -->
        <div class="luxury-items">
            <!-- <div class="section-title">
                <h2><i class="fas fa-gift me-3"></i>Luxury Collection</h2>
            </div> -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="premium-badge">Exclusive</div>
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a?w=400&h=300&fit=crop&auto=format" alt="Precious Stones" class="product-image">
                        </div>
                        <div class="card-content">
                            <h3 class="product-title">Precious Stones</h3>
                            <p class="product-description">
                                Immerse yourself in our extraordinary collection of precious stones, featuring rare gems that capture light and hearts alike. Each stone is carefully selected for its exceptional clarity, color, and brilliance.
                            </p>
                            <i class="fas fa-gem metal-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="premium-badge">Special</div>
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?w=400&h=300&fit=crop&auto=format" alt="Luxury Gifts" class="product-image">
                        </div>
                        <div class="card-content">
                            <h3 class="product-title">Luxury Gifts</h3>
                            <p class="product-description">
                                Perfect for special occasions and cherished moments, our luxury gift collection features handpicked items that express love, appreciation, and celebration. Each piece tells a story of elegance and refinement.
                            </p>
                            <i class="fas fa-heart metal-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.2,
                rootMargin: '0px 0px -60px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.product-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(50px)';
                card.style.transition = 'all 0.8s cubic-bezier(0.23, 1, 0.32, 1)';
                observer.observe(card);
            });

            document.querySelectorAll('.product-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.setProperty('--shadow-color', 'rgba(250, 196, 86, 0.4)');
                    const badge = this.querySelector('.premium-badge');
                    badge.style.transform = 'scale(1.1) rotate(5deg)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.setProperty('--shadow-color', 'rgba(98, 44, 44, 0.25)');
                    const badge = this.querySelector('.premium-badge');
                    badge.style.transform = 'scale(1) rotate(0deg)';
                });
            });
        });
    </script>

    <style>
        :root {
            --primary-color: #622C2C;
            --accent-color: #FAC456;
            --light-bg: #F5F5F5;
            --text-dark: #1A1A1A;
            --shadow-light: rgba(98, 44, 44, 0.15);
            --shadow-medium: rgba(98, 44, 44, 0.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--light-bg) 0%, #f0ece6 100%);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .main-container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
            z-index: 1;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, var(--accent-color), var(--primary-color));
            margin: 15px auto;
            border-radius: 3px;
            box-shadow: 0 2px 10px rgba(250, 196, 86, 0.3);
        }

        .product-card {
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 50px var(--shadow-light);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            height: 100%;
            position: relative;
            border: 2px solid transparent;
        }

        .product-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 30px 70px var(--shadow-medium);
            border-color: var(--accent-color);
        }

        .card-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 320px;
            background: linear-gradient(45deg, #f9f9f9, #ffffff);
        }

        .card-image-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(98, 44, 44, 0.1), rgba(250, 196, 86, 0.2));
            z-index: 1;
            transition: opacity 0.4s ease;
        }

        .product-card:hover .card-image-wrapper::before {
            opacity: 0.6;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.15) rotate(2deg);
        }

        .card-content {
            padding: 35px 30px;
            background: linear-gradient(180deg, #ffffff, #f9f9f9);
            position: relative;
            text-align: center;
        }

        .product-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .product-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: var(--accent-color);
            margin: 12px auto;
            border-radius: 2px;
        }

        .product-description {
            color: #555;
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 20px;
            font-weight: 400;
        }

        .premium-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, var(--accent-color), #e6a63e);
            color: #fff;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            z-index: 2;
            box-shadow: 0 5px 20px rgba(250, 196, 86, 0.5);
            transition: transform 0.3s ease;
        }

        .product-card:hover .premium-badge {
            transform: scale(1.1);
        }

        .metal-icon {
            position: absolute;
            bottom: 25px;
            right: 25px;
            color: var(--accent-color);
            font-size: 1.8rem;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .product-card:hover .metal-icon {
            transform: rotate(360deg);
            opacity: 1;
        }

        .row {
            margin: 0 -15px;
        }

        .col-lg-4 {
            padding: 0 15px;
            margin-bottom: 50px;
        }

        .precious-metals,
        .luxury-items {
            margin-bottom: 80px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2.2rem;
            }

            .product-title {
                font-size: 1.5rem;
            }

            .card-content {
                padding: 25px 20px;
            }

            .main-container {
                padding: 30px 15px;
            }

            .card-image-wrapper {
                height: 250px;
            }
        }

        /* Animation for loading effect */
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

        .product-card {
            animation: fadeInUp 0.7s ease forwards;
        }

        .product-card:nth-child(1) {
            animation-delay: 0.2s;
        }

        .product-card:nth-child(2) {
            animation-delay: 0.4s;
        }

        .product-card:nth-child(3) {
            animation-delay: 0.6s;
        }

        .product-card:nth-child(4) {
            animation-delay: 0.8s;
        }

        .product-card:nth-child(5) {
            animation-delay: 1s;
        }
    </style>

    <br>
    <br>





</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        background: radial-gradient(ellipse at center, #1a1a1a 0%, #000 100%);
        overflow-x: hidden;
        min-height: 100vh;
    }

    /* Animated Particles Background */
    .particles-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: radial-gradient(circle, #FAC04F, transparent);
        border-radius: 50%;
        animation: sparkle 3s linear infinite;
    }

    @keyframes sparkle {
        0% {
            opacity: 0;
            transform: translateY(100vh) scale(0);
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        100% {
            opacity: 0;
            transform: translateY(-100px) scale(1);
        }
    }

    /* Main Section */
    .luxury-section {
        position: relative;
        padding: 120px 0;
        background:
            linear-gradient(135deg, rgba(98, 44, 44, 0.9) 0%, rgba(0, 0, 0, 0.8) 50%, rgba(250, 192, 79, 0.1) 100%),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="diamond" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><polygon points="10,2 18,10 10,18 2,10" fill="none" stroke="rgba(250,192,79,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23diamond)"/></svg>');
        background-attachment: fixed;
        overflow: hidden;
    }

    .luxury-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 20% 30%, rgba(250, 192, 79, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(98, 44, 44, 0.2) 0%, transparent 50%),
            linear-gradient(45deg, transparent 40%, rgba(250, 192, 79, 0.05) 50%, transparent 60%);
        animation: backgroundShift 10s ease-in-out infinite;
    }

    @keyframes backgroundShift {

        0%,
        100% {
            transform: translateX(0) translateY(0);
        }

        25% {
            transform: translateX(20px) translateY(-10px);
        }

        50% {
            transform: translateX(-10px) translateY(20px);
        }

        75% {
            transform: translateX(-20px) translateY(-20px);
        }
    }

    /* Section Header */
    .section-header {
        text-align: center;
        margin-bottom: 100px;
        position: relative;
    }

    .section-header::before {
        content: '◆';
        position: absolute;
        top: -60px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 3rem;
        color: #FAC04F;
        animation: diamondRotate 4s linear infinite;
    }

    @keyframes diamondRotate {
        0% {
            transform: translateX(-50%) rotate(0deg) scale(1);
        }

        50% {
            transform: translateX(-50%) rotate(180deg) scale(1.2);
        }

        100% {
            transform: translateX(-50%) rotate(360deg) scale(1);
        }
    }

    .main-title {
        font-family: 'Cinzel', serif;
        font-size: 4rem;
        font-weight: 700;
        background: linear-gradient(135deg, #FAC04F 0%, #fff 50%, #FAC04F 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 30px;
        text-shadow: 0 0 30px rgba(250, 192, 79, 0.3);
        animation: titleGlow 3s ease-in-out infinite;
        position: relative;
    }

    @keyframes titleGlow {

        0%,
        100% {
            filter: brightness(1);
        }

        50% {
            filter: brightness(1.3);
        }
    }

    .subtitle {
        font-size: 1.4rem;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 300;
        letter-spacing: 2px;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Cards Container */
    .cards-container {
        position: relative;
        perspective: 1000px;
    }

    /* Individual Card Styling */
    .luxury-card {
        background:
            linear-gradient(145deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(250, 192, 79, 0.3);
        border-radius: 30px;
        padding: 0;
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        transform-style: preserve-3d;
        opacity: 0;
        transform: translateY(100px) rotateX(15deg);
    }

    .luxury-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent,
                rgba(250, 192, 79, 0.4),
                transparent);
        transition: left 0.8s ease;
        z-index: 1;
    }

    .luxury-card:hover::before {
        left: 100%;
    }

    .luxury-card:hover {
        transform: translateY(-20px) rotateX(5deg) rotateY(5deg);
        box-shadow:
            0 40px 80px rgba(0, 0, 0, 0.6),
            0 20px 40px rgba(250, 192, 79, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
        border-color: rgba(250, 192, 79, 0.8);
    }

    /* Card Image Section */
    .card-image {
        height: 200px;
        position: relative;
        overflow: hidden;
        border-radius: 30px 30px 0 0;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        filter: brightness(0.8) contrast(1.2);
    }

    .luxury-card:hover .card-image img {
        transform: scale(1.1) rotate(2deg);
        filter: brightness(1) contrast(1.3);
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg,
                rgba(98, 44, 44, 0.7) 0%,
                transparent 50%,
                rgba(250, 192, 79, 0.4) 100%);
        opacity: 0.8;
        transition: opacity 0.6s ease;
    }

    .luxury-card:hover .image-overlay {
        opacity: 0.3;
    }

    /* Card Icon */
    .card-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background: rgba(250, 192, 79, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #FAC04F;
        z-index: 2;
        transition: all 0.4s ease;
        border: 2px solid rgba(250, 192, 79, 0.3);
    }

    .luxury-card:hover .card-icon {
        transform: rotate(360deg) scale(1.2);
        background: rgba(250, 192, 79, 0.4);
        box-shadow: 0 10px 30px rgba(250, 192, 79, 0.4);
    }

    /* Card Content */
    .card-content {
        padding: 40px 30px;
        position: relative;
        z-index: 2;
    }

    .card-title {
        font-family: 'Cinzel', serif;
        font-size: 1.8rem;
        font-weight: 600;
        color: #FAC04F;
        margin-bottom: 20px;
        text-align: center;
        position: relative;
    }

    .card-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #FAC04F, transparent);
        transition: width 0.4s ease;
    }

    .luxury-card:hover .card-title::after {
        width: 100px;
    }

    .card-description {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        line-height: 1.8;
        text-align: center;
        font-weight: 300;
        letter-spacing: 0.5px;
    }

    /* Layout Variations */
    .layout-toggle {
        text-align: center;
        margin-bottom: 60px;
    }

    .layout-btn {
        background: rgba(250, 192, 79, 0.1);
        border: 2px solid rgba(250, 192, 79, 0.3);
        color: #FAC04F;
        padding: 10px 20px;
        margin: 0 10px;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .layout-btn:hover,
    .layout-btn.active {
        background: rgba(250, 192, 79, 0.3);
        border-color: #FAC04F;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(250, 192, 79, 0.3);
    }

    /* Masonry Layout */
    .masonry-layout .luxury-card:nth-child(2n) {
        margin-top: 40px;
    }

    /* Diagonal Layout */
    .diagonal-layout .luxury-card:nth-child(odd) {
        transform: translateY(0) rotateZ(-2deg);
    }

    .diagonal-layout .luxury-card:nth-child(even) {
        transform: translateY(20px) rotateZ(2deg);
    }

    /* Card Animation Classes */
    .card-visible {
        animation: cardSlideUp 0.8s cubic-bezier(0.23, 1, 0.32, 1) forwards;
    }

    @keyframes cardSlideUp {
        to {
            opacity: 1;
            transform: translateY(0) rotateX(0);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-title {
            font-size: 2.5rem;
        }

        .subtitle {
            font-size: 1.1rem;
            padding: 0 20px;
        }

        .luxury-card {
            margin-bottom: 30px;
        }

        .card-content {
            padding: 30px 20px;
        }

        .card-image {
            height: 150px;
        }

        .masonry-layout .luxury-card:nth-child(2n) {
            margin-top: 0;
        }
    }

    /* Jewelry Images as Data URIs for Demo */
    .jewelry-img-1 {
        background-image: url('https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
    }

    .jewelry-img-2 {
        background-image: url('https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
    }

    .jewelry-img-3 {
        background-image: url('https://images.unsplash.com/photo-1617038260897-41a1f14a8ca0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
    }
</style>

<!-- Why Choose Us Section -->
<!-- Particles Background -->
<div class="particles-bg" id="particles"></div>

<!-- Main Section -->
<div class="luxury-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h1 class="main-title">Why Choose Parekh Jewellers</h1>
            <p class="subtitle">Where Every Piece Tells a Story of Excellence, Craftsmanship, and Timeless Beauty</p>
        </div>

        <!-- Layout Toggle -->
        <div class="layout-toggle">
            <button class="layout-btn " data-layout="grid">Grid Layout</button>
            <button class="layout-btn active" data-layout="masonry">Masonry Layout</button>
            <button class="layout-btn" data-layout="diagonal">Diagonal Layout</button>
        </div>

        <!-- Cards Container -->
        <div class="row cards-container" id="cardsContainer">
            <div class="col-lg-4 col-md-6">
                <div class="luxury-card">
                    <div class="card-image jewelry-img-1">
                        <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Certified Jewelry">
                        <div class="image-overlay"></div>
                        <div class="card-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Certified Purity</h3>
                        <p class="card-description">
                            Every piece is hallmarked and certified for absolute purity. Our commitment to transparency ensures you receive only the finest quality gold, silver, and platinum with complete documentation and authentication.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="luxury-card">
                    <div class="card-image jewelry-img-2">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Unique Designs">
                        <div class="image-overlay"></div>
                        <div class="card-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Exquisite Designs</h3>
                        <p class="card-description">
                            Our master artisans blend centuries-old traditional techniques with contemporary innovation to create exclusive, breathtaking jewelry pieces that capture the essence of every special moment and celebration.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="luxury-card">
                    <div class="card-image jewelry-img-3">
                        <img src="https://images.unsplash.com/photo-1617038260897-41a1f14a8ca0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Trusted Legacy">
                        <div class="image-overlay"></div>
                        <div class="card-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Trusted Legacy</h3>
                        <p class="card-description">
                            For generations, Parekh Jewellers has been synonymous with trust, integrity, and uncompromising excellence. Our legacy is built on the foundation of serving families through life's most precious and memorable moments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    // Particle System
    function createParticles() {
        const particlesContainer = document.getElementById('particles');
        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 3 + 's';
            particle.style.animationDuration = (Math.random() * 3 + 2) + 's';
            particlesContainer.appendChild(particle);
        }
    }

    // Card Animation Observer
    function initCardAnimations() {
        const cards = document.querySelectorAll('.luxury-card');

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const cardObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry, index) {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('card-visible');
                    }, index * 200);
                    cardObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        cards.forEach(card => cardObserver.observe(card));
    }

    // Layout Switching
    function initLayoutSwitcher() {
        const layoutBtns = document.querySelectorAll('.layout-btn');
        const container = document.getElementById('cardsContainer');

        layoutBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                layoutBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // Apply layout
                const layout = btn.dataset.layout;
                container.className = `row cards-container ${layout}-layout`;

                // Re-trigger animations
                const cards = document.querySelectorAll('.luxury-card');
                cards.forEach((card, index) => {
                    card.classList.remove('card-visible');
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(100px) rotateX(15deg)';

                    setTimeout(() => {
                        card.classList.add('card-visible');
                    }, index * 150);
                });
            });
        });
    }

    // 3D Tilt Effect
    function init3DTilt() {
        const cards = document.querySelectorAll('.luxury-card');

        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;

                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(20px)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });
    }

    // Parallax Effect
    function initParallax() {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;

            document.querySelector('.luxury-section').style.transform = `translateY(${parallax}px)`;
        });
    }

    // Initialize everything
    document.addEventListener('DOMContentLoaded', function() {
        createParticles();
        initCardAnimations();
        initLayoutSwitcher();
        init3DTilt();
        initParallax();

        // Add performance optimization
        let ticking = false;

        function updateAnimations() {
            // Smooth animation updates
            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateAnimations);
                ticking = true;
            }
        }
    });
</script>


@endsection