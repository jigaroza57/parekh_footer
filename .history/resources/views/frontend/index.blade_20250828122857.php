@extends('frontend/layout')

@section('content')



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">


    <div class="carousel-indicators">
        @foreach($slider as $photo)
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
            aria-current="true" aria-label="Slide 1"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($slider as $slide)

        <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
            <img id="up" src="{{ asset('images/slider/'.$slide->image)}}" class="d-block w-100 img-fluid"
                alt="...">
        </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>




<!--------------------Main Category------------------------>


<div class="category-wrapper">
    <!-- Animated Background Elements -->
    <div class="floating-elements">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
        <div class="floating-shape shape-5"></div>
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
    </div>

 
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-crown"></i>
                <span>Premium Collection</span>
                <i class="fas fa-sparkles"></i>
            </div>
            <h1 class="hero-title">
                <span class="primary-text">Discover Our</span>
                <span class="accent-text">Curated Categories</span>
            </h1>
            <p class="hero-subtitle">
                Expertly crafted collections designed for discerning customers
            </p>
            <div class="hero-decoration">
                <div class="decorative-line left"></div>
                <div class="decorative-center">
                    <i class="fas fa-gem"></i>
                </div>
                <div class="decorative-line right"></div>
            </div>
        </div>
    </div>

   

    <!-- Categories Grid -->
    <div class="categories-container">
        <!-- <div class="section-header">
            <h2 class="section-title">Browse by Category</h2>
            <div class="section-subtitle">Each category represents excellence and quality</div>
        </div> -->

        <div class="categories-grid">
            @foreach($category as $cat)
            <a href="{{ route('frontend.product_by_category',['id' => $cat->id]) }}" class="text-decoration-none">
                <div class="category-card" data-category="{{ strtolower($cat->name) }}">
                    <div class="card-background"></div>
                    <div class="card-shine"></div>

                    <!-- Category Icon (default / fallback icon) -->
                    <div class="category-icon">
                        <i class="fas fa-box"></i>
                    </div>

                    <!-- Category Image -->
                    <div class="category-image">
                        <img src="{{ asset('images/category/'.$cat->image) }}" style="object-fit: cover !important;" alt="{{ $cat->name }}">
                    </div>

                    <h3 class="category-name">{{ $cat->name }}</h3>
                    <!-- <p class="category-desc">
                        {{ $cat->description ?? 'Explore our premium collection' }}
                    </p> -->

                    <br>
                    <br>
                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>



    <br>
    <br>

</div>

<style>
    :root {
        --primary-dark: #581E1E;
        --primary-gold: #D7B43E;
        --dark-variant: #3d1414;
        --gold-variant: #f4c842;
        --light-gold: #f7e07d;
        --text-light: #ffffff;
        --text-gray: rgba(255, 255, 255, 0.8);
        --text-muted: rgba(255, 255, 255, 0.6);
        --glass-light: rgba(255, 255, 255, 0.1);
        --glass-medium: rgba(255, 255, 255, 0.15);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        overflow-x: hidden;
    }

    .category-wrapper {
        min-height: 100vh;
        background: linear-gradient(135deg,
                var(--primary-dark) 0%,
                var(--dark-variant) 20%,
                #2a0e0e 40%,
                var(--dark-variant) 60%,
                var(--primary-dark) 100%);
        background-size: 400% 400%;
        animation: gradientFlow 20s ease infinite;
        position: relative;
    }

    @keyframes gradientFlow {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    /* Enhanced Floating Elements */
    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
        overflow: hidden;
    }

    .floating-shape {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg,
                rgba(215, 180, 62, 0.1),
                rgba(215, 180, 62, 0.05));
        backdrop-filter: blur(20px);
        border: 1px solid rgba(215, 180, 62, 0.2);
    }

    .shape-1 {
        width: 200px;
        height: 200px;
        top: 10%;
        left: 5%;
        animation: floatRotate 15s ease-in-out infinite;
    }

    .shape-2 {
        width: 150px;
        height: 150px;
        top: 50%;
        right: 10%;
        animation: floatRotate 18s ease-in-out infinite reverse;
    }

    .shape-3 {
        width: 100px;
        height: 100px;
        bottom: 20%;
        left: 15%;
        animation: floatRotate 12s ease-in-out infinite;
    }

    .shape-4 {
        width: 80px;
        height: 80px;
        top: 30%;
        left: 50%;
        animation: floatRotate 20s ease-in-out infinite reverse;
    }

    .shape-5 {
        width: 120px;
        height: 120px;
        bottom: 40%;
        right: 25%;
        animation: floatRotate 16s ease-in-out infinite;
    }

    .gradient-orb {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle at 30% 30%,
                rgba(215, 180, 62, 0.3),
                rgba(215, 180, 62, 0.1),
                transparent);
        filter: blur(40px);
    }

    .orb-1 {
        width: 300px;
        height: 300px;
        top: 20%;
        right: 20%;
        animation: pulse 8s ease-in-out infinite;
    }

    .orb-2 {
        width: 250px;
        height: 250px;
        bottom: 30%;
        left: 10%;
        animation: pulse 10s ease-in-out infinite reverse;
    }

    @keyframes floatRotate {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg) scale(1);
        }

        33% {
            transform: translateY(-30px) rotate(120deg) scale(1.1);
        }

        66% {
            transform: translateY(20px) rotate(240deg) scale(0.9);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 0.3;
            transform: scale(1);
        }

        50% {
            opacity: 0.6;
            transform: scale(1.2);
        }
    }

    /* Hero Section */
    .hero-section {
        position: relative;
        z-index: 2;
        padding: 100px 20px 80px;
        text-align: center;
    }

    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        opacity: 0;
        transform: translateY(50px);
        animation: heroReveal 1.2s ease-out 0.3s forwards;
    }

    @keyframes heroReveal {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        background: linear-gradient(135deg,
                var(--glass-medium),
                var(--glass-light));
        backdrop-filter: blur(30px);
        padding: 16px 32px;
        border-radius: 50px;
        color: var(--text-light);
        font-weight: 600;
        margin-bottom: 32px;
        border: 2px solid rgba(215, 180, 62, 0.3);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        animation: badgeGlow 3s ease-in-out infinite;
        font-size: 0.95rem;
    }

    @keyframes badgeGlow {

        0%,
        100% {
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        50% {
            box-shadow: 0 8px 32px rgba(215, 180, 62, 0.4);
        }
    }

    .hero-title {
        font-size: clamp(2.8rem, 6vw, 5rem);
        font-weight: 800;
        margin-bottom: 24px;
        line-height: 1.1;
    }

    .primary-text {
        color: var(--text-light);
        display: block;
        margin-bottom: 8px;
    }

    .accent-text {
        background: linear-gradient(135deg, var(--primary-gold), var(--light-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-family: 'Playfair Display', serif;
        font-style: italic;
        display: block;
        text-shadow: 0 0 60px rgba(215, 180, 62, 0.5);
    }

    .hero-subtitle {
        font-size: 1.3rem;
        color: var(--text-gray);
        margin-bottom: 48px;
        font-weight: 400;
        line-height: 1.6;
    }

    .hero-decoration {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        margin-top: 20px;
    }

    .decorative-line {
        height: 2px;
        width: 80px;
        background: linear-gradient(90deg, transparent, var(--primary-gold), transparent);
        position: relative;
    }

    .decorative-line.left {
        background: linear-gradient(90deg, transparent, var(--primary-gold));
    }

    .decorative-line.right {
        background: linear-gradient(90deg, var(--primary-gold), transparent);
    }

    .decorative-center {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-dark);
        font-size: 1.2rem;
        box-shadow: 0 4px 20px rgba(215, 180, 62, 0.4);
        animation: gemSpin 4s ease-in-out infinite;
    }

    @keyframes gemSpin {

        0%,
        100% {
            transform: rotate(0deg) scale(1);
        }

        50% {
            transform: rotate(180deg) scale(1.1);
        }
    }

    /* Categories Section */
    .categories-container {
        position: relative;
        z-index: 2;
        /* padding: 60px 20px 100px; */
        max-width: 1300px;
        margin: 0 auto;
    }

    .category-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
        opacity: 0;
        transform: translateY(30px);
        animation: sectionReveal 1s ease-out 0.6s forwards;
    }

    @keyframes sectionReveal {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-light);
        margin-bottom: 16px;
        font-family: 'Playfair Display', serif;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: var(--text-gray);
        font-weight: 400;
    }

    .categories-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* 4 columns per row */
        gap: 40px;
        padding: 0 20px;
    }

    .category-card {
        position: relative;
        background: linear-gradient(145deg,
                var(--glass-medium),
                var(--glass-light));
        backdrop-filter: blur(30px);
        border-radius: 28px;
        padding: 8px 13px;
        text-align: center;
        border: 2px solid rgba(215, 180, 62, 0.2);
        cursor: pointer;
        overflow: hidden;
        transform: translateY(60px);
        opacity: 0;
        animation: cardAppear 0.8s ease-out forwards;
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .category-card.hexagon .category-image {
        clip-path: polygon(25% 5%, 75% 5%,
                100% 50%,
                75% 95%, 25% 95%,
                0% 50%);
        border-radius: 0;
    }

    .category-card:nth-child(3n+1) .category-image {
        border-radius: 50%;
    }

    /* Rounded square */
    .category-card:nth-child(3n+2) .category-image {
        border-radius: 25px;
    }

    /* Diamond */
    .category-card:nth-child(3n+3) .category-image {
        transform: rotate(45deg);
        border-radius: 12px;
    }

    .category-card:nth-child(3n+3) .category-image img {
        transform: rotate(-45deg);
        /* keep img upright */
    }

    @keyframes cardAppear {
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .category-card.featured {
        background: linear-gradient(145deg,
                rgba(215, 180, 62, 0.15),
                rgba(215, 180, 62, 0.08));
        border: 2px solid rgba(215, 180, 62, 0.4);
        transform: translateY(60px) scale(1.05);
        box-shadow: 0 20px 50px rgba(215, 180, 62, 0.2);
    }

    .featured-badge {
        position: absolute;
        top: -15px;
        right: 25px;
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        color: var(--primary-dark);
        padding: 12px 20px;
        border-radius: 25px;
        font-size: 0.85rem;
        font-weight: 700;
        box-shadow: 0 6px 20px rgba(215, 180, 62, 0.4);
        display: flex;
        align-items: center;
        gap: 8px;
        z-index: 3;
    }

    .card-background {
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg,
                transparent,
                rgba(215, 180, 62, 0.1),
                transparent);
        border-radius: 28px;
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: -1;
    }

    .card-shine {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent);
        transition: left 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border-radius: 28px;
        z-index: 1;
    }

    .category-card:hover .card-shine {
        left: 100%;
    }

    .category-card:hover {
        transform: translateY(-20px) scale(1.05);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
        border-color: rgba(215, 180, 62, 0.6);
    }

    .category-card.featured:hover {
        transform: translateY(-20px) scale(1.08);
        box-shadow: 0 35px 70px rgba(215, 180, 62, 0.3);
    }

    .category-card:hover .card-background {
        opacity: 1;
    }

    .category-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 25px;
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--primary-dark);
        box-shadow: 0 10px 30px rgba(215, 180, 62, 0.4);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        position: relative;
        z-index: 2;
    }

    .category-card:hover .category-icon {
        transform: scale(1.15) rotate(360deg);
        box-shadow: 0 15px 40px rgba(215, 180, 62, 0.6);
    }

    .category-image {
        width: 180px;
        height: 180px;
        margin: 0 auto 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.08);
        border: 3px solid rgba(215, 180, 62, 0.3);
        transition: all 0.4s ease;
    }


    .image-placeholder {
        font-size: 3rem;
        color: var(--text-gray);
        transition: all 0.4s ease;
        z-index: 2;
        position: relative;
    }

    .category-card:hover .category-image {
        transform: scale(1.1);
        border-color: var(--primary-gold);
        box-shadow: 0 0 40px rgba(215, 180, 62, 0.4);
        background: rgba(215, 180, 62, 0.1);
    }

    .category-card:hover .image-placeholder {
        color: var(--primary-gold);
        transform: scale(1.1);
    }

    .category-name {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-light);
        margin-bottom: 12px;
        transition: all 0.3s ease;
        font-family: 'Playfair Display', serif;
    }

    .category-desc {
        color: var(--text-gray);
        font-size: 1rem;
        margin-bottom: 25px;
        font-weight: 400;
        line-height: 1.4;
    }

    .category-stats {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding: 0 15px;
    }

    .stat-item,
    .rating-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.9rem;
        color: var(--text-gray);
        background: rgba(255, 255, 255, 0.1);
        padding: 8px 16px;
        border-radius: 20px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(215, 180, 62, 0.2);
        transition: all 0.3s ease;
    }

    .category-card:hover .stat-item,
    .category-card:hover .rating-item {
        background: rgba(215, 180, 62, 0.15);
        border-color: rgba(215, 180, 62, 0.4);
        color: var(--text-light);
    }

    .hover-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        color: var(--primary-dark);
        padding: 10px;
        transform: translateY(100%);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        font-weight: 600;
        font-size: 1rem;
        border-radius: 0 0 26px 26px;
    }

    .category-card:hover .hover-overlay {
        transform: translateY(0);
    }

    .explore-text {
        font-size: 1rem;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .categories-grid {
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
        }
    }

    @media (max-width: 768px) {
        .categories-grid {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 0 10px;
        }

        .category-card {
            padding: 25px 20px;
        }

        .category-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .category-image {
            width: 110px;
            height: 110px;
        }

        .image-placeholder {
            font-size: 2.5rem;
        }
    }

    /* Performance Optimizations */
    .category-card {
        will-change: transform, box-shadow;
        transform-style: preserve-3d;
    }

    .card-shine {
        will-change: left;
    }

    .floating-shape {
        will-change: transform;
    }

    /* Accessibility */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }

        .category-card:hover {
            transform: translateY(-5px) scale(1.02);
        }
    }

    .category-card:focus {
        outline: 3px solid var(--primary-gold);
        outline-offset: 4px;
    }

    .category-card:focus-visible {
        outline: 3px solid var(--primary-gold);
        outline-offset: 4px;
    }

    /* Loading Animation */
    @keyframes shimmer {
        0% {
            background-position: -1000px 0;
        }

        100% {
            background-position: 1000px 0;
        }
    }

    .loading-shimmer {
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent);
        background-size: 1000px 100%;
        animation: shimmer 2s infinite;
    }

    /* Enhanced Hover States */
    .category-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%),
                rgba(215, 180, 62, 0.1) 0%,
                transparent 50%);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
        border-radius: 28px;
    }

    .category-card:hover::before {
        opacity: 1;
    }

    /* Scrollbar Styling */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: var(--primary-dark);
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, var(--gold-variant), var(--light-gold));
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Enhanced intersection observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -100px 0px",
        };

        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = "running";
                    cardObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll(".category-card, .hero-content, .section-header").forEach((element) => {
            element.style.animationPlayState = "paused";
            cardObserver.observe(element);
        });

        // Enhanced category card interactions
        document.querySelectorAll(".category-card").forEach((card, index) => {
            // Mouse tracking for advanced hover effects
            card.addEventListener("mousemove", function(e) {
                const rect = this.getBoundingClientRect();
                const x = ((e.clientX - rect.left) / rect.width) * 100;
                const y = ((e.clientY - rect.top) / rect.height) * 100;

                this.style.setProperty('--mouse-x', `${x}%`);
                this.style.setProperty('--mouse-y', `${y}%`);
            });

            // Click handler with category navigation
            card.addEventListener("click", function(e) {
                const category = this.dataset.category;

                // Add click animation
                this.style.transform = "scale(0.98)";
                setTimeout(() => {
                    this.style.transform = "";
                }, 150);

                // Simulate navigation (replace with actual routing)
                console.log(`Navigating to category: ${category}`);

                // Add loading state
                this.classList.add('loading-shimmer');
                setTimeout(() => {
                    this.classList.remove('loading-shimmer');
                    // window.location.href = `/category/${category}`;
                }, 800);
            });

            // Enhanced hover effects
            card.addEventListener("mouseenter", function() {
                this.style.zIndex = "100";

                // Add subtle scale to nearby cards
                document.querySelectorAll(".category-card").forEach((otherCard, otherIndex) => {
                    if (otherCard !== this && Math.abs(otherIndex - index) === 1) {
                        otherCard.style.transform = "translateY(-5px) scale(0.98)";
                    }
                });
            });

            card.addEventListener("mouseleave", function() {
                this.style.zIndex = "1";

                // Reset nearby cards
                document.querySelectorAll(".category-card").forEach((otherCard) => {
                    if (otherCard !== this) {
                        otherCard.style.transform = "";
                    }
                });
            });
        });

        // Advanced parallax scrolling
        let ticking = false;

        function updateParallax() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;

            // Parallax for floating shapes
            document.querySelectorAll(".floating-shape").forEach((element, index) => {
                const speed = 0.3 + (index * 0.1);
                const yPos = scrolled * speed;
                const rotation = scrolled * (0.1 + index * 0.05);

                element.style.transform = `translateY(${yPos}px) rotate(${rotation}deg)`;
            });

            // Parallax for gradient orbs
            document.querySelectorAll(".gradient-orb").forEach((orb, index) => {
                const speed = 0.2 + (index * 0.1);
                const yPos = scrolled * speed;
                orb.style.transform = `translateY(${yPos}px) scale(${1 + scrolled * 0.0001})`;
            });

            ticking = false;
        }

        // Throttled scroll handler
        window.addEventListener("scroll", function() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        });

        // Keyboard navigation
        document.addEventListener("keydown", function(e) {
            const cards = document.querySelectorAll(".category-card");
            const focusedCard = document.activeElement;
            const currentIndex = Array.from(cards).indexOf(focusedCard);

            if (e.key === "ArrowRight" && currentIndex < cards.length - 1) {
                e.preventDefault();
                cards[currentIndex + 1].focus();
            } else if (e.key === "ArrowLeft" && currentIndex > 0) {
                e.preventDefault();
                cards[currentIndex - 1].focus();
            } else if (e.key === "Enter" || e.key === " ") {
                if (focusedCard && focusedCard.classList.contains("category-card")) {
                    e.preventDefault();
                    focusedCard.click();
                }
            }
        });

        // Add smooth scroll for better UX
        document.documentElement.style.scrollBehavior = 'smooth';

        // Performance optimization: Reduce animations on low-end devices
        if (navigator.hardwareConcurrency <= 4) {
            document.documentElement.style.setProperty('--animation-speed', '0.5s');
        }

        // Add loading completed class for additional animations
        setTimeout(() => {
            document.body.classList.add('loaded');
        }, 1000);

        // Lazy load optimization for better performance
        const lazyElements = document.querySelectorAll('.category-card');

        if ('IntersectionObserver' in window) {
            const lazyObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        lazyObserver.unobserve(entry.target);
                    }
                });
            });

            lazyElements.forEach(element => {
                lazyObserver.observe(element);
            });
        }
    });

    // Add resize handler for responsive adjustments
    window.addEventListener('resize', debounce(() => {
        // Recalculate any size-dependent animations
        const cards = document.querySelectorAll('.category-card');
        cards.forEach(card => {
            // Reset transforms on resize
            card.style.transform = '';
        });
    }, 250));

    // Utility function for debouncing
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
</script>


<!-------------------/-Main Category------------------------>

<!-- </div> -->

<br>
<br>
<!--------------------who we are------------------------>

<section class="about-section">
    <div class="container-fluid">
        <div class="row no-gutters align-items-center">
            <!-- Left Side Image -->
            <div class="col-lg-6 image-side" data-aos="fade-right">
                <img src="{{ asset('images/about-jewelry-hero.jpg') }}" alt="Jewelry Collection" class="img-fluid hero-image">
            </div>
            <!-- Right Side Content -->
            <div class="col-lg-6 content-side" data-aos="fade-left">
                <div class="content-box">
                    <h2 class="section-title">Who We Are</h2>
                    <img src="{{ asset('images/group-48099402.svg') }}" alt="About Us Icon" class="img-fluid icon-image">
                    <p class="section-text">{!! $detail->about_us !!}</p>
                    <a href="/contact" class="btn explore-btn">Explore Our Collection</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Modern, luxurious background with subtle elegance for jewelry theme */
    .about-section {
        background-color: #f8f5f0; /* Soft beige for a warm, premium feel */
        border-radius: 0; /* Remove rounding for a full-width modern look */
        padding: 100px 0; /* More padding for breathing space */
        position: relative;
        overflow: hidden;
    }

    /* Subtle sparkle effect instead of shimmer for jewelry vibe */
    .about-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 50%);
        opacity: 0.5;
        pointer-events: none;
        animation: subtleSparkle 20s ease-in-out infinite;
    }

    @keyframes subtleSparkle {
        0%, 100% { opacity: 0.3; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(1.05); }
    }

    /* Hero image styling for left side – assuming a high-quality jewelry photo */
    .hero-image {
        width: 100%;
        height: auto;
        object-fit: cover;
        filter: brightness(1.05) contrast(1.1); /* Enhance for luxury shine */
        transition: transform 0.5s ease;
    }

    .image-side:hover .hero-image {
        transform: scale(1.03);
    }

    /* Elegant title with refined gold gradient and subtle animation */
    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 4rem; /* Larger for impact in modern designs */
        font-weight: 700;
        background: linear-gradient(90deg, #c9a14a, #e6c57e); /* Softer gold tones */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        letter-spacing: 1.5px;
        margin-bottom: 20px;
        position: relative;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 60px;
        height: 2px;
        background: #d4af37;
        margin: 10px auto 0;
        transition: width 0.3s ease;
    }

    .content-box:hover .section-title::after {
        width: 100px;
    }

    /* Content box with premium card-like design */
    .content-box {
        background: #ffffff;
        border-radius: 12px;
        padding: 4rem 3rem; /* More spacious padding */
        box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.08); /* Softer, elevated shadow */
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        text-align: center; /* Center for modern symmetry */
    }

    .content-box:hover {
        transform: translateY(-12px);
        box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.12);
    }

    /* Icon image with subtle rotation hover for engagement */
    .icon-image {
        max-width: 150px; /* Smaller for modern minimalism */
        margin: 20px auto;
        display: block;
        filter: drop-shadow(0px 6px 12px rgba(0, 0, 0, 0.1));
        transition: transform 0.4s ease;
    }

    .content-box:hover .icon-image {
        transform: rotate(5deg) scale(1.1);
    }

    /* Clean, readable body text with luxury font */
    .section-text {
        font-family: 'Montserrat', sans-serif; /* Modern sans-serif for elegance */
        font-size: 1.15rem;
        line-height: 1.9;
        color: #4a4a4a; /* Darker gray for better contrast */
        margin: 25px 0;
    }

    /* Call-to-action button with gold theme */
    .explore-btn {
        background: linear-gradient(90deg, #d4af37, #f6e27a);
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 30px; /* Pill shape for modern feel */
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .explore-btn:hover {
        background: linear-gradient(90deg, #c9a14a, #e6c57e);
        transform: scale(1.05);
        text-decoration: none;
    }

    /* Ensure responsiveness */
    @media (max-width: 992px) {
        .about-section {
            padding: 60px 0;
        }
        .section-title {
            font-size: 3rem;
        }
        .content-box {
            padding: 3rem 2rem;
        }
    }
</style>

<!-- Animation library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1200, // Slightly longer for smooth reveal
        once: true
    });
</script>

<!-------------------/-who we are------------------------>

<br>
<br>
<br>
<br>
<!---------best of Jewellers--------------->
<div class="container">
    <center>
        <div class="row col-12" style="padding: 25px;">
            <div class="col-md-3">
                <div style="background-color: white; padding: 8px;">
                    <center>
                        <p style="font-family: 'Aladin', system-ui; color: #622c2c; font-size: 40px;">Best Of <br> PH <br>
                            Jewellers</p>
                        <img src="le-jour-serifremovebgpreview-1-11@2x.png" class="img-fluid"
                            style="width: 150px;" alt="">
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/group-48099189@2x.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/group-48099188@2x.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/group-48099187@2x.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-1"></div>
        </div>
    </center>
</div>
<!--------/-best of Jewellers--------------->

<br>
<br>

<!---Mid Banner Image-->
<div style="padding-left: 20px; padding-right: 20px;">
    <img src="{{ asset('images/group-48099194-1@2x.png')}}" class="img-fluid" alt="">
</div>

<!---/Mid Banner Image-->
<br>
<br>
<br>
<!---Shop by Category-->
<!-- Explore By Collection Header -->
<div class="text-center my-5">
    <h2 style="font-family: 'Aladin', system-ui; font-size: 2.5rem; color: #622c2c; text-transform: uppercase;">Explore By Collection</h2>
    <img src="{{ asset('images/group-48099402.svg') }}" class="img-fluid" style="max-width: 300px;" alt="">
</div>

<!-- Collection Grid -->
<div class="container">
    <div class="row justify-content-center g-4">
        @foreach($collection as $coll)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="{{ route('frontend.product_detail',['id'=>$coll->id]) }}" class="collection-card">
                <div class="collection-wrapper">
                    <img src="{{ asset('images/product/'.$coll->image) }}" alt="{{ $coll->name }}">
                    <div class="collection-overlay">
                        <h5>{{ $coll->name }}</h5>
                        <span>View Collection</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<!-- WhatsApp Button -->
<a href="https://api.whatsapp.com/send?phone=9824882345" class="whatsapp-float" target="_blank">
    <i class="fa fa-whatsapp" aria-hidden="true"></i>
</a>




@endsection


<style>
    .collection-card {
        text-decoration: none;
    }

    .collection-wrapper {
        position: relative;
        width: 100%;
        height: 320px;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .collection-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .collection-wrapper:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .collection-wrapper:hover img {
        transform: scale(1.08);
    }

    .collection-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));
        color: #fff;
        padding: 20px;
        text-align: left;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        transition: background 0.3s ease;
    }

    .collection-overlay h5 {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .collection-overlay span {
        font-size: 0.9rem;
        color: #f3c9c9;
    }

    .collection-wrapper:hover .collection-overlay {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.2));
    }

    /* WhatsApp Float Button */
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25d366;
        color: white;
        padding: 15px 18px;
        border-radius: 50%;
        font-size: 24px;
        z-index: 999;
        transition: background 0.3s ease;
    }

    .whatsapp-float:hover {
        background-color: #128C7E;
    }
</style>


@push('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var popupOverlay = document.getElementById("welcome-popup");
        var closeButton = document.getElementById("close-popup");

        // Show popup and overlay when the page loads
        popupOverlay.style.display = "flex";

        // Close the popup and overlay when the close button is clicked
        closeButton.addEventListener("click", function() {
            popupOverlay.style.display = "none";
        });
    });
</script>
@endpush