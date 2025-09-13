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
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Dancing+Script:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(45deg, #fef7e0 0%, #fff5f5 25%, #f0f9ff 50%, #fdf2f8 75%, #fef7e0 100%);
        background-size: 400% 400%;
        animation: gradientShift 15s ease infinite;
        min-height: 100vh;
        overflow-x: hidden;
    }

    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* Floating Geometric Shapes */
    .geometric-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
    }

    .geo-shape {
        position: absolute;
        opacity: 0.1;
    }

    .geo-circle {
        width: 120px;
        height: 120px;
        border: 3px solid #FAC04F;
        border-radius: 50%;
        top: 15%;
        right: 10%;
        animation: floatRotate 8s linear infinite;
    }

    .geo-triangle {
        width: 0;
        height: 0;
        border-left: 40px solid transparent;
        border-right: 40px solid transparent;
        border-bottom: 70px solid #622C2C;
        top: 60%;
        left: 5%;
        animation: floatBounce 6s ease-in-out infinite;
    }

    .geo-hexagon {
        width: 100px;
        height: 57.74px;
        background: linear-gradient(45deg, #FAC04F, #622C2C);
        position: relative;
        top: 25%;
        left: 85%;
        animation: floatPulse 5s ease-in-out infinite;
    }

    .geo-hexagon:before,
    .geo-hexagon:after {
        content: "";
        position: absolute;
        width: 0;
        border-left: 50px solid transparent;
        border-right: 50px solid transparent;
    }

    .geo-hexagon:before {
        bottom: 100%;
        border-bottom: 28.87px solid #FAC04F;
    }

    .geo-hexagon:after {
        top: 100%;
        border-top: 28.87px solid #622C2C;
    }

    @keyframes floatRotate {
        0% {
            transform: rotate(0deg) translateX(0px);
        }

        100% {
            transform: rotate(360deg) translateX(20px);
        }
    }

    @keyframes floatBounce {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-30px);
        }
    }

    @keyframes floatPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.1;
        }

        50% {
            transform: scale(1.2);
            opacity: 0.2;
        }
    }

    /* Main Container */
    .main-section {
        padding: 100px 0;
        position: relative;
    }

    /* Header Section */
    .section-header {
        text-align: center;
        margin-bottom: 80px;
        position: relative;
    }

    .main-title {
        font-family: 'Dancing Script', cursive;
        font-size: 4.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #622C2C 0%, #FAC04F 50%, #622C2C 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
    }

    .main-title::before {
        content: '✨';
        position: absolute;
        left: -60px;
        top: 20px;
        font-size: 2rem;
        animation: sparkle 2s ease-in-out infinite;
    }

    .main-title::after {
        content: '✨';
        position: absolute;
        right: -60px;
        top: 20px;
        font-size: 2rem;
        animation: sparkle 2s ease-in-out infinite 1s;
    }

    @keyframes sparkle {

        0%,
        100% {
            opacity: 0.3;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.2);
        }
    }

    .subtitle {
        font-size: 1.3rem;
        color: #622C2C;
        font-weight: 400;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.8;
        opacity: 0.8;
    }

    /* Layout Selector */
    .layout-selector {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 60px;
        flex-wrap: wrap;
    }

    .layout-btn {
        background: white;
        color: #622C2C;
        border: 2px solid #FAC04F;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .layout-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(250, 192, 79, 0.3), transparent);
        transition: left 0.5s ease;
    }

    .layout-btn:hover::before {
        left: 100%;
    }

    .layout-btn:hover,
    .layout-btn.active {
        background: #FAC04F;
        color: white;
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(250, 192, 79, 0.4);
    }

    /* Cards Container */
    .cards-wrapper {
        position: relative;
        min-height: 600px;
    }

    /* Layout 1: Floating Bubbles */
    .bubble-layout {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        gap: 40px;
    }

    .bubble-card {
        width: 320px;
        height: 320px;
        border-radius: 50%;
        background: white;
        box-shadow:
            0 20px 40px rgba(98, 44, 44, 0.1),
            0 10px 20px rgba(250, 192, 79, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 40px;
        position: relative;
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        cursor: pointer;
        border: 3px solid transparent;
        background-clip: padding-box;
    }

    .bubble-card::before {
        content: '';
        position: absolute;
        top: -3px;
        left: -3px;
        right: -3px;
        bottom: -3px;
        background: linear-gradient(45deg, #FAC04F, #622C2C, #FAC04F);
        border-radius: 50%;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .bubble-card:hover::before {
        opacity: 1;
    }

    .bubble-card:hover {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 30px 60px rgba(98, 44, 44, 0.2);
    }

    /* Layout 2: Honeycomb */
    .honeycomb-layout {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .hex-card {
        width: 300px;
        height: 260px;
        background: white;
        margin: 30px 0;
        position: relative;
        border-radius: 20px;
        transform: rotate(0deg);
        transition: all 0.5s ease;
        box-shadow: 0 15px 30px rgba(98, 44, 44, 0.1);
        padding: 40px 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .hex-card:nth-child(2) {
        transform: translateY(-40px);
    }

    .hex-card:hover {
        transform: translateY(-20px) rotate(3deg);
        box-shadow: 0 25px 50px rgba(250, 192, 79, 0.3);
    }

    /* Layout 3: Wave Flow */
    .wave-layout {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
        align-items: start;
    }

    .wave-card {
        background: white;
        border-radius: 30px;
        padding: 40px 30px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(98, 44, 44, 0.08);
        transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .wave-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, #FAC04F, #622C2C, #FAC04F);
        transform: translateX(-100%);
        transition: transform 0.8s ease;
    }

    .wave-card:hover::before {
        transform: translateX(0);
    }

    .wave-card:nth-child(1) {
        transform: translateY(0);
    }

    .wave-card:nth-child(2) {
        transform: translateY(-30px);
    }

    .wave-card:nth-child(3) {
        transform: translateY(-60px);
    }

    .wave-card:hover {
        transform: translateY(-20px) scale(1.02);
        box-shadow: 0 30px 60px rgba(250, 192, 79, 0.2);
    }

    /* Layout 4: Mosaic */
    .mosaic-layout {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(3, 200px);
        gap: 20px;
        max-width: 1000px;
        margin: 0 auto;
    }

    .mosaic-card:nth-child(1) {
        grid-column: 1 / 3;
        grid-row: 1 / 3;
    }

    .mosaic-card:nth-child(2) {
        grid-column: 3 / 5;
        grid-row: 1 / 2;
    }

    .mosaic-card:nth-child(3) {
        grid-column: 3 / 5;
        grid-row: 2 / 4;
    }

    .mosaic-card {
        background: white;
        border-radius: 25px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        box-shadow: 0 15px 30px rgba(98, 44, 44, 0.1);
        transition: all 0.5s ease;
        position: relative;
        overflow: hidden;
    }

    .mosaic-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #FAC04F, #622C2C);
        transform: scaleX(0);
        transition: transform 0.5s ease;
    }

    .mosaic-card:hover::after {
        transform: scaleX(1);
    }

    .mosaic-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(250, 192, 79, 0.3);
    }

    /* Common Card Elements */
    .card-icon {
        font-size: 3rem;
        color: #FAC04F;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #622C2C;
        margin-bottom: 15px;
        font-family: 'Poppins', sans-serif;
    }

    .card-description {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        font-weight: 400;
    }

    .card:hover .card-icon {
        transform: scale(1.2) rotate(10deg);
        color: #622C2C;
    }

    /* Hidden class for layout switching */
    .layout-hidden {
        display: none !important;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-title {
            font-size: 3rem;
        }

        .subtitle {
            font-size: 1.1rem;
            padding: 0 20px;
        }

        .bubble-card {
            width: 280px;
            height: 280px;
        }

        .mosaic-layout {
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        .mosaic-card {
            grid-column: 1 !important;
            grid-row: auto !important;
        }

        .wave-card:nth-child(n) {
            transform: translateY(0) !important;
        }
    }

    /* Loading Animation */
    .card-enter {
        opacity: 0;
        transform: translateY(50px) scale(0.8);
    }

    .card-enter-active {
        opacity: 1;
        transform: translateY(0) scale(1);
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }
</style>

<!-- Geometric Background -->
<div class="geometric-bg">
    <div class="geo-shape geo-circle"></div>
    <div class="geo-shape geo-triangle"></div>
    <div class="geo-shape geo-hexagon"></div>
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
            <button class="layout-btn" data-layout="honeycomb">Honeycomb</button>
            <button class="layout-btn" data-layout="wave">Wave Flow</button>
            <button class="layout-btn" data-layout="mosaic">Mosaic Grid</button>
        </div>

        <!-- Cards Container -->
        <div class="cards-wrapper">

            <!-- Bubble Layout -->
            <div class="bubble-layout" id="bubble-layout">
                <div class="bubble-card card">
                    <div class="card-icon"><i class="fas fa-certificate"></i></div>
                    <h3 class="card-title">Certified Excellence</h3>
                    <p class="card-description">Every piece is hallmarked and certified for absolute purity, ensuring you receive only premium quality gold, silver, and platinum with complete authenticity.</p>
                </div>
                <div class="bubble-card card">
                    <div class="card-icon"><i class="fas fa-palette"></i></div>
                    <h3 class="card-title">Artistic Mastery</h3>
                    <p class="card-description">Our skilled artisans create unique, breathtaking designs that blend traditional craftsmanship with modern innovation for every special moment.</p>
                </div>
                <div class="bubble-card card">
                    <div class="card-icon"><i class="fas fa-crown"></i></div>
                    <h3 class="card-title">Royal Heritage</h3>
                    <p class="card-description">For generations, we've been the trusted choice for families, building relationships based on integrity, quality, and exceptional service.</p>
                </div>
            </div>

            <!-- Honeycomb Layout -->
            <div class="honeycomb-layout layout-hidden" id="honeycomb-layout">
                <div class="hex-card card">
                    <div class="card-icon"><i class="fas fa-gem"></i></div>
                    <h3 class="card-title">Premium Quality</h3>
                    <p class="card-description">Hallmarked purity and certified excellence in every piece.</p>
                </div>
                <div class="hex-card card">
                    <div class="card-icon"><i class="fas fa-magic"></i></div>
                    <h3 class="card-title">Creative Design</h3>
                    <p class="card-description">Innovative designs that capture hearts and celebrate moments.</p>
                </div>
                <div class="hex-card card">
                    <div class="card-icon"><i class="fas fa-heart"></i></div>
                    <h3 class="card-title">Trusted Legacy</h3>
                    <p class="card-description">Generations of trust, excellence, and memorable experiences.</p>
                </div>
            </div>

            <!-- Wave Layout -->
            <div class="wave-layout layout-hidden" id="wave-layout">
                <div class="wave-card card">
                    <div class="card-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="card-title">Guaranteed Authenticity</h3>
                    <p class="card-description">Every piece comes with complete certification and quality assurance, backed by our reputation for excellence and transparency in all our offerings.</p>
                </div>
                <div class="wave-card card">
                    <div class="card-icon"><i class="fas fa-star"></i></div>
                    <h3 class="card-title">Exceptional Craftsmanship</h3>
                    <p class="card-description">Master artisans pour their expertise into every creation, ensuring each piece reflects the highest standards of jewelry making and artistic expression.</p>
                </div>
                <div class="wave-card card">
                    <div class="card-icon"><i class="fas fa-handshake"></i></div>
                    <h3 class="card-title">Enduring Relationships</h3>
                    <p class="card-description">We build lasting connections with our customers, serving families across generations with unwavering commitment to quality and service excellence.</p>
                </div>
            </div>

            <!-- Mosaic Layout -->
            <div class="mosaic-layout layout-hidden" id="mosaic-layout">
                <div class="mosaic-card card">
                    <div class="card-icon"><i class="fas fa-award"></i></div>
                    <h3 class="card-title">Award-Winning Quality</h3>
                    <p class="card-description">Recognized excellence in jewelry craftsmanship with certified purity and unmatched attention to detail in every piece we create.</p>
                </div>
                <div class="mosaic-card card">
                    <div class="card-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3 class="card-title">Innovative Artistry</h3>
                    <p class="card-description">Contemporary designs meet traditional techniques.</p>
                </div>
                <div class="mosaic-card card">
                    <div class="card-icon"><i class="fas fa-users"></i></div>
                    <h3 class="card-title">Family Tradition</h3>
                    <p class="card-description">Serving generations with trust, integrity, and the finest jewelry for life's most precious moments and celebrations.</p>
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
                }, index * 150);
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
            });
            shape.addEventListener('mouseleave', () => {
                shape.style.animationPlayState = 'running';
            });
        });

        // Parallax effect for geometric shapes
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            shapes.forEach((shape, index) => {
                const speed = (index + 1) * 0.1;
                shape.style.transform += ` translateY(${scrolled * speed}px)`;
            });
        });

        // Card interaction effects
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });

            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });

            // Add click ripple effect
            card.addEventListener('click', function(e) {
                const ripple = document.createElement('div');
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(250, 192, 79, 0.6)';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s linear';
                ripple.style.left = (e.clientX - card.offsetLeft) + 'px';
                ripple.style.top = (e.clientY - card.offsetTop) + 'px';

                card.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    });

    // Add ripple animation CSS
    const style = document.createElement('style');
    style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
    document.head.appendChild(style);
</script>


@endsection