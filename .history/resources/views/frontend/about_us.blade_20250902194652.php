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
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: #f8f9fa;
        overflow-x: hidden;
    }

    /* Animated Background */
    .animated-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }

    .floating-elements {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .floating-gem {
        opacity: 0.2;
        text-shadow: 0 0 10px rgba(250, 192, 79, 0.7);
        animation: float 6s ease-in-out infinite, glowPulse 3s ease-in-out infinite;
    }

    @keyframes glowPulse {

        0%,
        100% {
            text-shadow: 0 0 10px rgba(250, 192, 79, 0.5);
        }

        50% {
            text-shadow: 0 0 20px rgba(250, 192, 79, 0.8);
        }
    }

    .floating-gem:nth-child(1) {
        top: 10%;
        left: 10%;
        animation-delay: -2s;
        font-size: 2rem;
        color: black;
    }

    .floating-gem:nth-child(2) {
        top: 20%;
        right: 15%;
        animation-delay: -4s;
        font-size: 1.5rem;
        color: #622C2C;
    }

    .floating-gem:nth-child(3) {
        bottom: 20%;
        left: 20%;
        animation-delay: -1s;
        font-size: 2.5rem;
        color: #FAC04F;
    }

    .floating-gem:nth-child(4) {
        bottom: 30%;
        right: 10%;
        animation-delay: -3s;
        font-size: 1.8rem;
        color: #622C2C;
    }

    .floating-gem:nth-child(5) {
        top: 50%;
        left: 5%;
        animation-delay: -5s;
        font-size: 1.2rem;
        color: #FAC04F;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        33% {
            transform: translateY(-20px) rotate(5deg);
        }

        66% {
            transform: translateY(10px) rotate(-3deg);
        }
    }

    /* Main Section Styling */
    .why-choose-us-section {
        background: linear-gradient(135deg,
                rgba(250, 192, 79, 0.05) 0%,
                rgba(255, 255, 255, 0.9) 25%,
                rgba(255, 255, 255, 0.95) 75%,
                rgba(98, 44, 44, 0.05) 100%);
        border-radius: 40px;
        box-shadow:
            0 20px 60px rgba(98, 44, 44, 0.08),
            inset 0 1px 0 rgba(255, 255, 255, 0.4);
        margin: 40px 20px;
        padding: 80px 0;
        position: relative;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .section-title {
        text-align: center;
        margin-bottom: 70px;
        opacity: 0;
        transform: translateY(-30px);
        animation: titleFadeIn 1s ease-out 0.5s forwards;
    }

    .section-title h2 {
        font-family: 'Playfair Display', serif;
        font-size: 3.2rem;
        font-weight: 700;
        color: #622C2C;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, #FAC04F, #622C2C);
        border-radius: 2px;
        animation: underlineGrow 1s ease-out 1.5s forwards;
        transform-origin: center;
        scale: 0;
    }

    .section-title .lead {
        font-size: 1.3rem;
        color: #622C2C;
        font-weight: 400;
        letter-spacing: 0.5px;
        max-width: 600px;
        margin: 0 auto;
    }

    .section-title i {
        color: #FAC04F;
        margin-right: 15px;
        animation: iconPulse 2s infinite;
    }

    /* Card Styling */
    .choose-card {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 25px;
        padding: 50px 30px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(98, 44, 44, 0.15), 0 0 15px rgba(250, 192, 79, 0.2);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .choose-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent,
                rgba(250, 192, 79, 0.1),
                transparent);
        transition: left 0.5s ease;
    }

    .choose-card:hover::before {
        left: 100%;
    }

    .choose-card:hover {
        transform: translateY(-12px) scale(1.05);
        box-shadow: 0 12px 35px rgba(98, 44, 44, 0.2), 0 0 25px rgba(250, 192, 79, 0.4);
    }

    .choose-icon {
        font-size: 3.5rem;
        color: #FAC04F;
        margin-bottom: 25px;
        position: relative;
        display: inline-block;
        animation: iconBounce 2s ease-in-out infinite;
    }

    .choose-icon::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: radial-gradient(circle, rgba(250, 192, 79, 0.2) 0%, transparent 70%);
        border-radius: 50%;
        z-index: -1;
        animation: iconGlow 3s ease-in-out infinite;
    }

    .choose-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.6rem;
        color: #622C2C;
        font-weight: 600;
        margin-bottom: 20px;
        letter-spacing: 1px;
        position: relative;
    }

    .choose-card p {
        color: #666;
        font-size: 1.1rem;
        line-height: 1.8;
        font-weight: 400;
        letter-spacing: 0.3px;
    }

    /* Animations */
    @keyframes titleFadeIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes underlineGrow {
        to {
            scale: 1;
        }
    }

    @keyframes iconPulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    @keyframes iconBounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes iconGlow {

        0%,
        100% {
            opacity: 0.3;
            transform: translate(-50%, -50%) scale(1);
        }

        50% {
            opacity: 0.6;
            transform: translate(-50%, -50%) scale(1.2);
        }
    }

    @keyframes cardFadeUp {
        from {
            opacity: 0;
            transform: translateY(50px) scale(0.9);
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .section-title h2 {
            font-size: 2.5rem;
        }

        .section-title .lead {
            font-size: 1.1rem;
        }

        .choose-card {
            padding: 40px 25px;
            margin-bottom: 30px;
        }

        .choose-icon {
            font-size: 3rem;
        }

        .choose-title {
            font-size: 1.4rem;
        }
    }

    @media (max-width: 576px) {
        .why-choose-us-section {
            margin: 20px 10px;
            padding: 60px 0;
            border-radius: 30px;
        }

        .section-title h2 {
            font-size: 2.2rem;
        }
    }

    /* Loading Animation */
    .card-loading {
        opacity: 0;
        transform: translateY(50px) scale(0.9);
    }

    .card-visible {
        animation: cardFadeUp 0.8s cubic-bezier(0.23, 1, 0.32, 1) forwards;
    }
</style>

<!-- Why Choose Us Section -->
<div class="why-choose-us-section">
    <div class="animated-bg">
        <div class="floating-elements">
            <i class="fas fa-gem floating-gem"></i>
            <i class="fas fa-ring floating-gem"></i>
            <i class="fas fa-crown floating-gem"></i>
            <i class="fas fa-star floating-gem"></i>
            <i class="fas fa-diamond floating-gem"></i>
        </div>
    </div>

    <div class="container">
        <div class="section-title">
            <h2><i class="fas fa-question-circle"></i>Why Choose Parekh Jewellers?</h2>
            <p class="lead">Discover the difference with Parekh Jewellers – where tradition meets innovation in every precious creation.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="choose-card card-loading">
                    <div class="choose-icon"><i class="fas fa-certificate"></i></div>
                    <h4 class="choose-title">Certified Purity</h4>
                    <p>Every piece is hallmarked and certified for purity, ensuring you receive only the finest quality gold, silver, and platinum with complete transparency and trust.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="choose-card card-loading">
                    <div class="choose-icon"><i class="fas fa-palette"></i></div>
                    <h4 class="choose-title">Unique Designs</h4>
                    <p>Our master craftsmen blend traditional artistry with contemporary trends to create exclusive, eye-catching jewelry pieces for every special occasion and milestone.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="choose-card card-loading">
                    <div class="choose-icon"><i class="fas fa-award"></i></div>
                    <h4 class="choose-title">Trusted Legacy</h4>
                    <p>Serving generations with unwavering honesty and excellence, Parekh Jewellers has built a reputation as a name you can trust for life's most precious moments.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate cards on scroll
        const cards = document.querySelectorAll('.card-loading');

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const cardObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const card = entry.target;
                    const index = Array.from(cards).indexOf(card);

                    setTimeout(function() {
                        card.classList.remove('card-loading');
                        card.classList.add('card-visible');
                    }, index * 200);

                    cardObserver.unobserve(card);
                }
            });
        }, observerOptions);

        cards.forEach(function(card) {
            cardObserver.observe(card);
        });

        // Add subtle parallax effect to floating elements
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;

            document.querySelectorAll('.floating-gem').forEach(function(gem, index) {
                const speed = 0.2 + (index * 0.1);
                gem.style.transform = `translateY(${parallax * speed}px) rotate(${parallax * 0.1}deg)`;
            });
        });

        // Add click effects
        cards.forEach(function(card) {
            card.addEventListener('click', function() {
                this.style.transform = 'translateY(-15px) scale(1.05)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 200);
            });
        });
    });

    // Performance optimization for animations
    let ticking = false;

    function updateAnimations() {
        // Animation frame logic here
        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateAnimations);
            ticking = true;
        }
    }
</script>


@endsection