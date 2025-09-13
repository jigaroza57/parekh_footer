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
    /* General Reset and Styling */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Playfair Display', serif;
        /* Elegant font for luxury feel */
        background: linear-gradient(135deg, #0a0a23, #1a1a3a);
        /* Deep navy gradient */
        color: #fff;
        overflow-x: hidden;
    }

    /* Geometric Background */
    .geometric-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        z-index: -1;
        overflow: hidden;
    }

    .geo-shape {
        position: absolute;
        background: linear-gradient(45deg, rgba(250, 192, 79, 0.3), rgba(255, 255, 255, 0.2));
        border-radius: 50%;
        animation: float 10s infinite ease-in-out;
        box-shadow: 0 0 20px rgba(250, 192, 79, 0.5);
    }

    .geo-circle {
        width: 100px;
        height: 100px;
        top: 10%;
        left: 20%;
    }

    .geo-triangle {
        width: 80px;
        height: 80px;
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        top: 30%;
        left: 70%;
    }

    .geo-hexagon {
        width: 90px;
        height: 90px;
        clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
        top: 60%;
        left: 40%;
    }

    .geo-diamond {
        width: 70px;
        height: 70px;
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        top: 80%;
        left: 10%;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-50px) rotate(10deg);
        }
    }

    /* Sparkle Layer */
    .sparkle-layer {
        position: absolute;
        width: 100%;
        height: 100%;
        background: url('https://i.imgur.com/sparkle.png') repeat;
        /* Use a sparkle sprite or image */
        animation: sparkle 5s infinite linear;
        opacity: 0.3;
    }

    @keyframes sparkle {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 100px 100px;
        }
    }

    /* Main Section */
    .main-section {
        position: relative;
        padding: 100px 20px;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
    }

    .section-header {
        margin-bottom: 50px;
    }

    .main-title {
        font-size: 3.5rem;
        color: #fac04f;
        /* Gold accent */
        text-shadow: 0 0 10px rgba(250, 192, 79, 0.7);
        animation: glow 2s ease-in-out infinite;
    }

    .subtitle {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.2rem;
        color: #d4d4d4;
        max-width: 700px;
        margin: 20px auto;
    }

    @keyframes glow {

        0%,
        100% {
            text-shadow: 0 0 10px rgba(250, 192, 79, 0.7);
        }

        50% {
            text-shadow: 0 0 20px rgba(250, 192, 79, 1);
        }
    }

    /* Layout Selector */
    .layout-selector {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 40px;
    }

    .layout-btn {
        padding: 12px 25px;
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        background: transparent;
        border: 2px solid #fac04f;
        color: #fac04f;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .layout-btn:hover,
    .layout-btn.active {
        background: #fac04f;
        color: #0a0a23;
        box-shadow: 0 0 15px rgba(250, 192, 79, 0.7);
    }

    /* Cards Wrapper */
    .cards-wrapper {
        position: relative;
    }

    .layout-hidden {
        display: none;
    }

    /* Card Styling */
    .card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        transition: transform 0.5s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 10px 20px rgba(250, 192, 79, 0.5);
    }

    .card-icon {
        font-size: 2.5rem;
        color: #fac04f;
        margin-bottom: 20px;
    }

    .card-title {
        font-size: 1.8rem;
        color: #fff;
        margin-bottom: 15px;
    }

    .card-description {
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        color: #d4d4d4;
    }

    /* Sparkle Effect for Cards */
    .sparkle-effect {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(250, 192, 79, 0.3) 0%, transparent 70%);
        opacity: 0;
        animation: sparkle-card 3s infinite;
    }

    @keyframes sparkle-card {

        0%,
        100% {
            opacity: 0;
        }

        50% {
            opacity: 0.5;
        }
    }

    /* Bubble Layout */
    .bubble-layout {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
    }

    .bubble-card {
        width: 300px;
        animation: bubble-float 6s infinite ease-in-out;
    }

    @keyframes bubble-float {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }

    /* Honeycomb Layout */
    .honeycomb-layout {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 10px;
        justify-items: center;
    }

    .hex-card {
        width: 200px;
        height: 230px;
        clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
        background: rgba(255, 255, 255, 0.15);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        transition: transform 0.5s ease, background 0.3s ease;
    }

    .hex-card:hover {
        background: rgba(250, 192, 79, 0.3);
        transform: scale(1.1) rotate(3deg);
    }

    /* Wave Layout */
    .wave-layout {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
    }

    .wave-card {
        width: 300px;
        animation: wave-flow 4s infinite ease-in-out;
    }

    @keyframes wave-flow {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(20px);
        }
    }

    /* Mosaic Layout */
    .mosaic-layout {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .mosaic-card {
        width: 100%;
        animation: mosaic-pop 1s ease-out;
    }

    @keyframes mosaic-pop {
        0% {
            transform: scale(0.8);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Card Animation */
    .card-enter {
        opacity: 0;
        transform: translateY(50px) scale(0.8);
    }

    .card-enter-active {
        opacity: 1;
        transform: translateY(0) scale(1);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    /* Ripple Effect */
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-title {
            font-size: 2.5rem;
        }

        .subtitle {
            font-size: 1rem;
        }

        .card {
            width: 100%;
            max-width: 300px;
        }

        .layout-btn {
            padding: 10px 15px;
            font-size: 0.9rem;
        }

        .hex-card {
            width: 150px;
            height: 170px;
        }
    }
</style>

<!-- Geometric Background -->
<!-- Geometric Background -->
<div class="geometric-bg">
    <div class="geo-shape geo-circle"></div>
    <div class="geo-shape geo-triangle"></div>
    <div class="geo-shape geo-hexagon"></div>
    <div class="geo-shape geo-diamond"></div> <!-- Added new shape for variety -->
    <div class="sparkle-layer"></div> <!-- Sparkle effect layer -->
</div>

<div class="main-section">
    <div class="container">
        <!-- Header -->
        <div class="section-header">
            <h1 class="main-title">Why Choose Parekh Jewellers</h1>
            <p class="subtitle">Experience the perfect blend of traditional craftsmanship and modern elegance, where every piece tells your unique story with unmatched quality and timeless beauty.</p>
        </div>

        <!-- Layout Selector -->
        <div class="layout-selector">
            <button class="layout-btn active" data-layout="bubble">Floating Bubbles</button>
            <button class="layout-btn" data-layout="honeycomb">Honeycomb Glow</button>
            <button class="layout-btn" data-layout="wave">Wave Flow</button>
            <button class="layout-btn" data-layout="mosaic">Mosaic Elegance</button>
        </div>

        <!-- Cards Container -->
        <div class="cards-wrapper">
            <!-- Bubble Layout -->
            <div class="bubble-layout" id="bubble-layout">
                <div class="bubble-card card">
                    <div class="card-icon"><i class="fas fa-certificate"></i></div>
                    <h3 class="card-title">Certified Excellence</h3>
                    <p class="card-description">Every piece is hallmarked and certified for absolute purity, ensuring you receive only premium quality gold, silver, and platinum with complete authenticity.</p>
                    <div class="sparkle-effect"></div> <!-- Sparkle effect for cards -->
                </div>
                <div class="bubble-card card">
                    <div class="card-icon"><i class="fas fa-palette"></i></div>
                    <h3 class="card-title">Artistic Mastery</h3>
                    <p class="card-description">Our skilled artisans create unique, breathtaking designs that blend traditional craftsmanship with modern innovation for every special moment.</p>
                    <div class="sparkle-effect"></div>
                </div>
                <div class="bubble-card card">
                    <div class="card-icon"><i class="fas fa-crown"></i></div>
                    <h3 class="card-title">Royal Heritage</h3>
                    <p class="card-description">For generations, we've been the trusted choice for families, building relationships based on integrity, quality, and exceptional service.</p>
                    <div class="sparkle-effect"></div>
                </div>
            </div>

            <!-- Honeycomb Layout -->
            <div class="honeycomb-layout layout-hidden" id="honeycomb-layout">
                <div class="hex-card card">
                    <div class="card-icon"><i class="fas fa-gem"></i></div>
                    <h3 class="card-title">Premium Quality</h3>
                    <p class="card-description">Hallmarked purity and certified excellence in every piece.</p>
                    <div class="sparkle-effect"></div>
                </div>
                <div class="hex-card card">
                    <div class="card-icon"><i class="fas fa-magic"></i></div>
                    <h3 class="card-title">Creative Design</h3>
                    <p class="card-description">Innovative designs that capture hearts and celebrate moments.</p>
                    <div class="sparkle-effect"></div>
                </div>
                <div class="hex-card card">
                    <div class="card-icon"><i class="fas fa-heart"></i></div>
                    <h3 class="card-title">Trusted Legacy</h3>
                    <p class="card-description">Generations of trust, excellence, and memorable experiences.</p>
                    <div class="sparkle-effect"></div>
                </div>
            </div>

            <!-- Wave Layout -->
            <div class="wave-layout layout-hidden" id="wave-layout">
                <div class="wave-card card">
                    <div class="card-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="card-title">Guaranteed Authenticity</h3>
                    <p class="card-description">Every piece comes with complete certification and quality assurance, backed by our reputation for excellence and transparency in all our offerings.</p>
                    <div class="sparkle-effect"></div>
                </div>
                <div class="wave-card card">
                    <div class="card-icon"><i class="fas fa-star"></i></div>
                    <h3 class="card-title">Exceptional Craftsmanship</h3>
                    <p class="card-description">Master artisans pour their expertise into every creation, ensuring each piece reflects the highest standards of jewelry making and artistic expression.</p>
                    <div class="sparkle-effect"></div>
                </div>
                <div class="wave-card card">
                    <div class="card-icon"><i class="fas fa-handshake"></i></div>
                    <h3 class="card-title">Enduring Relationships</h3>
                    <p class="card-description">We build lasting connections with our customers, serving families across generations with unwavering commitment to quality and service excellence.</p>
                    <div class="sparkle-effect"></div>
                </div>
            </div>

            <!-- Mosaic Layout -->
            <div class="mosaic-layout layout-hidden" id="mosaic-layout">
                <div class="mosaic-card card">
                    <div class="card-icon"><i class="fas fa-award"></i></div>
                    <h3 class="card-title">Award-Winning Quality</h3>
                    <p class="card-description">Recognized excellence in jewelry craftsmanship with certified purity and unmatched attention to detail in every piece we create.</p>
                    <div class="sparkle-effect"></div>
                </div>
                <div class="mosaic-card card">
                    <div class="card-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3 class="card-title">Innovative Artistry</h3>
                    <p class="card-description">Contemporary designs meet traditional techniques.</p>
                    <div class="sparkle-effect"></div>
                </div>
                <div class="mosaic-card card">
                    <div class="card-icon"><i class="fas fa-users"></i></div>
                    <h3 class="card-title">Family Tradition</h3>
                    <p class="card-description">Serving generations with trust, integrity, and the finest jewelry for life's most precious moments and celebrations.</p>
                    <div class="sparkle-effect"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Layout Switching System
        const layoutBtns = document.querySelectorAll('.layout-btn');
        const layouts = {
            'bubble': document.getElementById('bubble-layout'),
            'honeycomb': document.getElementById('honeycomb-layout'),
            'wave': document.getElementById('wave-layout'),
            'mosaic': document.getElementById('mosaic-layout')
        };

        function switchLayout(targetLayout) {
            // Hide all layouts
            Object.values(layouts).forEach(layout => {
                layout.classList.add('layout-hidden');
            });

            // Show target layout
            if (layouts[targetLayout]) {
                layouts[targetLayout].classList.remove('layout-hidden');
                animateCards(layouts[targetLayout]);
            }
        }

        function animateCards(container) {
            const cards = container.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.classList.add('card-enter');
                setTimeout(() => {
                    card.classList.remove('card-enter');
                    card.classList.add('card-enter-active');
                }, index * 200); // Increased delay for smoother stagger
            });
        }

        // Button event listeners
        layoutBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                layoutBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // Switch layout
                const layout = btn.dataset.layout;
                switchLayout(layout);
            });
        });

        // Initialize with bubble layout
        animateCards(layouts['bubble']);

        // Add floating animation to geometric shapes
        const shapes = document.querySelectorAll('.geo-shape');
        shapes.forEach(shape => {
            shape.addEventListener('mouseenter', () => {
                shape.style.animationPlayState = 'paused';
                shape.style.boxShadow = '0 0 30px rgba(250, 192, 79, 0.8)';
            });
            shape.addEventListener('mouseleave', () => {
                shape.style.animationPlayState = 'running';
                shape.style.boxShadow = '0 0 20px rgba(250, 192, 79, 0.5)';
            });
        });

        // Enhanced Parallax effect for geometric shapes
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            shapes.forEach((shape, index) => {
                const speed = (index + 1) * 0.2; // Increased speed for more depth
                shape.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.05}deg)`;
            });
        });

        // Card interaction effects
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
                this.querySelector('.sparkle-effect').style.opacity = '0.7';
            });

            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
                this.querySelector('.sparkle-effect').style.opacity = '0';
            });

            // Add click ripple effect
            card.addEventListener('click', function(e) {
                const ripple = document.createElement('div');
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(250, 192, 79, 0.6)';
                ripple.style.width = '100px';
                ripple.style.height = '100px';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s linear';
                ripple.style.left = `${e.clientX - this.offsetLeft - 50}px`;
                ripple.style.top = `${e.clientY - this.offsetTop - 50}px`;

                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    });
</script>


@endsection