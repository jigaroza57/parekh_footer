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
                            <img src="...../" alt="Gold Collection" class="product-image">
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
            <div class="section-title">
                <h2><i class="fas fa-gift me-3"></i>Luxury Collection</h2>
            </div>
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


@endsection