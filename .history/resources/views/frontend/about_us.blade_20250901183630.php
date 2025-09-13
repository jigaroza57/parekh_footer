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
                            <div class="placeholder-image platinum-bg">
                                <i class="fas fa-crown placeholder-icon"></i>
                                <span class="placeholder-text">PLATINUM</span>
                            </div>
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
                            <div class="placeholder-image gold-bg">
                                <i class="fas fa-star placeholder-icon"></i>
                                <span class="placeholder-text">GOLD</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="product-title">Gold</h3>
                            <p class="product-description">
                                Explore our stunning gold jewelry collection, showcasing the perfect blend of traditional craftsmanship and contemporary design. From elegant necklaces to sophisticated rings, each piece radiates luxury and sophistication.
                            </p>
                            <i class="fas fa-star metal-icon"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="premium-badge">Elegant</div>
                        <div class="card-image-wrapper">
                            <div class="placeholder-image silver-bg">
                                <i class="fas fa-moon placeholder-icon"></i>
                                <span class="placeholder-text">SILVER</span>
                            </div>
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
            <div class="section-title">
                <h2><i class="fas fa-gift me-3"></i>Luxury Collection</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="premium-badge">Exclusive</div>
                        <div class="card-image-wrapper">
                            <div class="placeholder-image stone-bg">
                                <i class="fas fa-gem placeholder-icon"></i>
                                <span class="placeholder-text">PRECIOUS STONES</span>
                            </div>
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
                            <div class="placeholder-image gift-bg">
                                <i class="fas fa-gift placeholder-icon"></i>
                                <span class="placeholder-text">LUXURY GIFTS</span>
                            </div>
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
        // Add smooth scrolling and enhanced interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Add staggered animation on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all product cards
            document.querySelectorAll('.product-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });

            // Enhanced hover effects
            document.querySelectorAll('.product-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.setProperty('--shadow-color', 'rgba(254, 203, 99, 0.3)');
                });

                card.addEventListener('mouseleave', function() {
                    this.style.setProperty('--shadow-color', 'rgba(98, 44, 44, 0.2)');
                });
            });
        });
    </script>

    <style>
        :root {
            --primary-color: #622C2C;
            --accent-color: #FECB63;
            --light-bg: #FAF9F6;
            --text-dark: #2C2C2C;
            --shadow-light: rgba(98, 44, 44, 0.1);
            --shadow-medium: rgba(98, 44, 44, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--light-bg) 0%, #f8f6f0 100%);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            margin: 20px auto;
            border-radius: 2px;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px var(--shadow-light);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            position: relative;
            border: 2px solid transparent;
        }

        .product-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px var(--shadow-medium);
            border-color: var(--accent-color);
        }

        .card-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 280px;
            background: linear-gradient(45deg, #f8f8f8, #ffffff);
        }

        .card-image-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, transparent 0%, rgba(254, 203, 99, 0.1) 100%);
            z-index: 1;
        }

        .placeholder-image {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.5s ease;
        }

        .placeholder-icon {
            font-size: 4rem;
            margin-bottom: 15px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .placeholder-text {
            font-size: 1.2rem;
            font-weight: 700;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            letter-spacing: 2px;
        }

        .platinum-bg {
            background: linear-gradient(135deg, #e5e4e2, #c0c0c0, #f8f8ff);
        }

        .gold-bg {
            background: linear-gradient(135deg, var(--accent-color), #ffd700, #ffed4e);
        }

        .silver-bg {
            background: linear-gradient(135deg, #c0c0c0, #e5e5e5, #f0f0f0);
        }

        .stone-bg {
            background: linear-gradient(135deg, #8a2be2, #9370db, #ba55d3);
        }

        .gift-bg {
            background: linear-gradient(135deg, var(--primary-color), #8b4444, var(--accent-color));
        }

        .product-card:hover .placeholder-icon {
            transform: scale(1.2) rotate(10deg);
        }

        .product-card:hover .placeholder-image {
            transform: scale(1.05);
        }

        .card-content {
            padding: 30px 25px;
            background: white;
            position: relative;
        }

        .product-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            text-align: center;
            position: relative;
        }

        .product-title::after {
            content: '';
            display: block;
            width: 40px;
            height: 2px;
            background: var(--accent-color);
            margin: 10px auto;
            border-radius: 1px;
        }

        .product-description {
            color: #666;
            font-size: 1rem;
            line-height: 1.7;
            text-align: justify;
            margin-bottom: 20px;
        }

        .premium-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, var(--accent-color), #f4b942);
            color: var(--primary-color);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 2;
            box-shadow: 0 4px 15px rgba(254, 203, 99, 0.4);
        }

        .metal-icon {
            position: absolute;
            bottom: 20px;
            right: 20px;
            color: var(--accent-color);
            font-size: 1.5rem;
            opacity: 0.7;
        }

        .row {
            margin: 0 -15px;
        }

        .col-lg-4 {
            padding: 0 15px;
            margin-bottom: 40px;
        }

        .precious-metals {
            margin-bottom: 60px;
        }

        .luxury-items {
            margin-top: 40px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }

            .product-title {
                font-size: 1.4rem;
            }

            .card-content {
                padding: 20px;
            }

            .main-container {
                padding: 20px 15px;
            }
        }

        /* Animation for loading effect */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .product-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .product-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .product-card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .product-card:nth-child(4) {
            animation-delay: 0.4s;
        }

        .product-card:nth-child(5) {
            animation-delay: 0.5s;
        }

        /* Hover effects for icons */
        .metal-icon {
            transition: all 0.3s ease;
        }

        .product-card:hover .metal-icon {
            transform: scale(1.2);
            opacity: 1;
        }
    </style>
    <br>
    <br>
</div>


@endsection