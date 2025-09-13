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
{{-- Add this CSS to your main stylesheet or in a <style> section --}}
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .gallery-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 40px 20px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        position: relative;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
        animation: fadeInDown 1s ease-out;
    }

    .section-title {
        font-size: 3rem;
        font-weight: 700;
        background: linear-gradient(45deg, #fff, #e0e7ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 10px;
        text-shadow: 0 4px 20px rgba(255, 255, 255, 0.3);
    }

    .section-subtitle {
        color: rgba(255, 255, 255, 0.8);
        font-size: 1.2rem;
        font-weight: 300;
    }

    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        padding: 20px 0;
    }

    .card-wrapper {
        animation: fadeInUp 0.8s ease-out;
        animation-fill-mode: both;
    }

    .professional-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        overflow: hidden;
        box-shadow:
            0 10px 40px rgba(0, 0, 0, 0.1),
            0 0 0 1px rgba(255, 255, 255, 0.2);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        backdrop-filter: blur(10px);
        cursor: pointer;
    }

    .professional-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s ease;
        z-index: 2;
    }

    .professional-card:hover::before {
        left: 100%;
    }

    .professional-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow:
            0 25px 60px rgba(0, 0, 0, 0.2),
            0 0 0 1px rgba(255, 255, 255, 0.3);
    }

    .card-image-container {
        position: relative;
        overflow: hidden;
        height: 280px;
        background: linear-gradient(45deg, #f8fafc, #e2e8f0);
    }

    .professional-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border: none;
        padding: 0;
    }

    .professional-card:hover .professional-card-image {
        transform: scale(1.1);
    }

    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg,
                rgba(88, 30, 30, 0.8) 0%,
                rgba(139, 69, 19, 0.6) 50%,
                rgba(0, 0, 0, 0.4) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .professional-card:hover .card-overlay {
        opacity: 1;
    }

    .overlay-content {
        text-align: center;
        color: white;
        transform: translateY(20px);
        transition: transform 0.4s ease;
    }

    .professional-card:hover .overlay-content {
        transform: translateY(0);
    }

    .view-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.3);
        font-size: 20px;
    }

    .view-text {
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .card-content {
        padding: 25px;
        text-align: center;
        position: relative;
    }

    .card-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #1a202c;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .card-description {
        color: #64748b;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .card-footer {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 15px;
        border-top: 1px solid rgba(0, 0, 0, 0.08);
    }

    .professional-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(45deg, #581e1e, #8b4513);
        color: white !important;
        text-decoration: none;
        padding: 12px 24px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(88, 30, 30, 0.3);
    }

    .professional-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(88, 30, 30, 0.4);
        background: linear-gradient(45deg, #6b2424, #a0521a);
        color: white !important;
        text-decoration: none;
    }

    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        overflow: hidden;
    }

    .floating-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        animation: float 6s ease-in-out infinite;
    }

    .floating-circle:nth-child(1) {
        width: 100px;
        height: 100px;
        top: 10%;
        left: 80%;
        animation-delay: 0s;
    }

    .floating-circle:nth-child(2) {
        width: 60px;
        height: 60px;
        top: 70%;
        left: 10%;
        animation-delay: 2s;
    }

    .floating-circle:nth-child(3) {
        width: 80px;
        height: 80px;
        top: 30%;
        left: 5%;
        animation-delay: 4s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(180deg);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Animation delays for staggered effect */
    .card-wrapper:nth-child(4n+1) {
        animation-delay: 0.1s;
    }

    .card-wrapper:nth-child(4n+2) {
        animation-delay: 0.2s;
    }

    .card-wrapper:nth-child(4n+3) {
        animation-delay: 0.3s;
    }

    .card-wrapper:nth-child(4n+4) {
        animation-delay: 0.4s;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .section-title {
            font-size: 2rem;
        }

        .cards-grid {
            grid-template-columns: 1fr;
            gap: 20px;
            padding: 10px;
        }

        .card-image-container {
            height: 200px;
        }

        .gallery-container {
            padding: 20px 10px;
        }
    }
</style>

{{-- Floating background elements --}}
<div class="floating-elements">
    <div class="floating-circle"></div>
    <div class="floating-circle"></div>
    <div class="floating-circle"></div>
</div>

<div class="gallery-container">
    <div class="section-header">
        <h1 class="section-title">Premium Collection</h1>
        <p class="section-subtitle">Discover our curated selection of professional content</p>
    </div>

    <div class="cards-grid">
        @foreach($gets as $get)
        <div class="card-wrapper">
            <div class="professional-card">
                <div class="card-image-container">
                    <img src="{{ asset('images/get/'. $get->image) }}"
                        alt="{{ $get->title ?? 'Professional Content' }}"
                        class="professional-card-image">

                    <div class="card-overlay">
                        <div class="overlay-content">
                            <div class="view-icon">👁️</div>
                            <div class="view-text">View Details</div>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <h3 class="card-title">{{ $get->title ?? 'Professional Item ' . $loop->iteration }}</h3>
                    <p class="card-description">{{ $get->description ?? 'Discover premium content designed to enhance your experience with professional quality and attention to detail.' }}</p>

                    <div class="card-footer">
                        <a href="{{ $get->link }}"
                            target="_blank"
                            class="professional-link">
                            Explore Now
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- Add this JavaScript before closing body tag --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.professional-card');
        const images = document.querySelectorAll('.professional-card-image');

        // Add loading effect to images
        images.forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });

            // Handle image loading errors
            img.addEventListener('error', function() {
                this.src = 'https://via.placeholder.com/500x350/f8fafc/64748b?text=Image+Not+Found';
            });
        });

        // Enhanced hover effects
        cards.forEach((card, index) => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });

            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });

            // Add click ripple effect
            card.addEventListener('click', function(e) {
                // Only add ripple if not clicking on a link
                if (!e.target.closest('a')) {
                    const ripple = document.createElement('div');
                    const rect = card.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255,255,255,0.3);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s ease-out;
                    pointer-events: none;
                    z-index: 1;
                `;

                    card.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                }
            });
        });

        // Smooth scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe all card wrappers
        document.querySelectorAll('.card-wrapper').forEach(card => {
            observer.observe(card);
        });

        // Add CSS for ripple animation and other dynamic styles
        const style = document.createElement('style');
        style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
        
        .animate-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
        
        .professional-card-image {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .professional-card-image[src] {
            opacity: 1;
        }
        
        /* Preloader for images */
        .card-image-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 40px;
            height: 40px;
            margin: -20px 0 0 -20px;
            border: 3px solid rgba(88, 30, 30, 0.3);
            border-top: 3px solid #581e1e;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            z-index: 1;
        }
        
        .professional-card-image[src]::before {
            display: none;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    `;
        document.head.appendChild(style);
    });
</script>

<br>
<br>

@endsection