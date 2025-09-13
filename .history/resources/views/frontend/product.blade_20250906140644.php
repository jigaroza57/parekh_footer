@extends('frontend/layout')
@section('content')

<style>
    /* Global Reset and Enhanced Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        line-height: 1.6;
        overflow-x: hidden;
    }

    /* Hero Section with Parallax Effect */
    .hero-section {
        background: linear-gradient(135deg, #1a0a0a 0%, #3d1818 25%, #622c2c 50%, #8B4A4A 100%);
        padding: 120px 0 140px;
        position: relative;
        overflow: hidden;
        margin-bottom: -80px;
        z-index: 1;
        min-height: 60vh;
        display: flex;
        align-items: center;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 0%, transparent 50%);
        animation: float 6s ease-in-out infinite;
    }

    .hero-section::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
        animation: twinkle 8s linear infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes twinkle {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .hero-title {
        color: #fff;
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        margin-bottom: 20px;
        text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.5);
        letter-spacing: -0.02em;
        animation: heroTitleSlide 1.2s ease-out;
    }

    @keyframes heroTitleSlide {
        0% { 
            opacity: 0; 
            transform: translateY(50px) scale(0.9);
        }
        100% { 
            opacity: 1; 
            transform: translateY(0) scale(1);
        }
    }

    .blog-decorative-img {
        width: 320px;
        max-width: 100%;
        opacity: 0.95;
        filter: brightness(0) invert(1) drop-shadow(0 0 20px rgba(255,255,255,0.3));
        margin-top: 2rem;
        animation: decorativeFloat 1.5s ease-out 0.3s both;
    }

    @keyframes decorativeFloat {
        0% { 
            opacity: 0; 
            transform: translateY(30px) rotate(-5deg);
        }
        100% { 
            opacity: 0.95; 
            transform: translateY(0) rotate(0deg);
        }
    }

    .hero-subtitle {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.4rem;
        font-weight: 300;
        margin-bottom: 40px;
        animation: heroSubtitleSlide 1.2s ease-out 0.2s both;
    }

    @keyframes heroSubtitleSlide {
        0% { 
            opacity: 0; 
            transform: translateY(30px);
        }
        100% { 
            opacity: 1; 
            transform: translateY(0);
        }
    }

    /* Enhanced Category Navigation */
    .category-nav {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 60px;
        padding: 25px 50px;
        box-shadow: 
            0 20px 60px rgba(0, 0, 0, 0.1),
            0 0 0 1px rgba(255, 255, 255, 0.2) inset;
        margin: -40px auto 80px;
        max-width: 95%;
        width: fit-content;
        position: relative;
        z-index: 3;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
        animation: navSlideUp 1s ease-out 0.5s both;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    @keyframes navSlideUp {
        0% { 
            opacity: 0; 
            transform: translateY(50px) scale(0.95);
        }
        100% { 
            opacity: 1; 
            transform: translateY(0) scale(1);
        }
    }

    .product-nav-link {
        color: #581E1E;
        font-weight: 600;
        padding: 15px 25px;
        text-decoration: none;
        border-radius: 30px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
    }

    .product-nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #581E1E, #8B3A3A);
        transition: left 0.4s ease;
        z-index: -1;
    }

    .product-nav-link:hover::before,
    .product-nav-link.active::before {
        left: 0;
    }

    .product-nav-link:hover,
    .product-nav-link.active {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(88, 30, 30, 0.3);
    }

    /* Enhanced Dropdown Styles */
    .dropdown-menu {
        border: none;
        border-radius: 20px;
        box-shadow: 
            0 25px 50px rgba(0, 0, 0, 0.15),
            0 0 0 1px rgba(255, 255, 255, 0.1) inset;
        padding: 20px 0;
        margin-top: 15px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        min-width: 220px;
        animation: dropdownSlide 0.3s ease-out;
    }

    @keyframes dropdownSlide {
        0% { 
            opacity: 0; 
            transform: translateY(-10px) scale(0.95);
        }
        100% { 
            opacity: 1; 
            transform: translateY(0) scale(1);
        }
    }

    .dropdown-item {
        padding: 15px 30px;
        color: #581E1E;
        font-weight: 500;
        transition: all 0.3s ease;
        border-left: 4px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .dropdown-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(88, 30, 30, 0.1), transparent);
        transition: left 0.3s ease;
    }

    .dropdown-item:hover::before {
        left: 0;
    }

    .dropdown-item:hover {
        color: #581E1E;
        border-left-color: #581E1E;
        transform: translateX(10px);
        background: transparent;
    }

    /* Products Section */
    .products-section {
        padding: 60px 0;
        background: linear-gradient(180deg, #fafafa 0%, #ffffff 100%);
    }

    .section-title {
        text-align: center;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 800;
        color: #2c3e50;
        margin-bottom: 25px;
        position: relative;
        letter-spacing: -0.02em;
    }

    .section-title::after {
        content: '';
        width: 100px;
        height: 6px;
        background: linear-gradient(135deg, #581E1E, #8B3A3A);
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 3px;
        animation: underlineGrow 1s ease-out;
    }

    @keyframes underlineGrow {
        0% { width: 0; }
        100% { width: 100px; }
    }

    .section-subtitle {
        text-align: center;
        color: #7f8c8d;
        font-size: 1.2rem;
        margin-bottom: 60px;
        font-weight: 400;
    }

    /* Enhanced Product Cards */
    .product-card {
        background: #fff;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 
            0 10px 40px rgba(0, 0, 0, 0.08),
            0 0 0 1px rgba(0, 0, 0, 0.02);
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        margin-bottom: 40px;
        position: relative;
        transform: translateY(0);
    }

    .product-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(88, 30, 30, 0.05), rgba(139, 58, 58, 0.05));
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
        border-radius: 25px;
    }

    .product-card:hover {
        transform: translateY(-20px) scale(1.03);
        box-shadow: 
            0 30px 80px rgba(88, 30, 30, 0.15),
            0 0 0 1px rgba(88, 30, 30, 0.1);
    }

    .product-card:hover::before {
        opacity: 1;
    }

    .product-image {
        height: 300px;
        overflow: hidden;
        position: relative;
        border-radius: 25px 25px 0 0;
    }

    .product-image::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, transparent 60%, rgba(255,255,255,0.1) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .product-card:hover .product-image::after {
        opacity: 1;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.5s ease;
        filter: brightness(1) contrast(1.05);
    }

    .product-card:hover .product-image img {
        transform: scale(1.15) rotate(1deg);
        filter: brightness(1.1) contrast(1.1);
    }

    .product-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: linear-gradient(135deg, #581E1E, #8B3A3A);
        color: #fff;
        padding: 10px 18px;
        border-radius: 25px;
        font-size: 11px;
        font-weight: 700;
        z-index: 2;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 5px 15px rgba(88, 30, 30, 0.3);
        animation: badgePulse 2s infinite;
    }

    @keyframes badgePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    .product-content {
        padding: 35px;
        position: relative;
        z-index: 2;
    }

    .product-title {
        color: #2c3e50;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 18px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        transition: all 0.3s ease;
        letter-spacing: -0.01em;
    }

    .product-card:hover .product-title {
        color: #581E1E;
        transform: translateY(-2px);
    }

    .product-description {
        color: #7f8c8d;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 25px;
        height: 3.4em;
        overflow: hidden;
        transition: color 0.3s ease;
    }

    .product-card:hover .product-description {
        color: #6c757d;
    }

    .explore-btn {
        background: linear-gradient(135deg, #581E1E, #8B3A3A);
        color: #fff;
        border: none;
        padding: 15px 30px;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        font-size: 14px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .explore-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s ease;
    }

    .explore-btn:hover::before {
        left: 100%;
    }

    .explore-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(88, 30, 30, 0.4);
        color: #fff;
    }

    .explore-btn::after {
        content: '→';
        font-size: 18px;
        transition: transform 0.4s ease;
    }

    .explore-btn:hover::after {
        transform: translateX(8px);
    }

    /* Enhanced Animations */
    .fade-in {
        opacity: 0;
        transform: translateY(50px);
    }

    .fade-in.animate {
        animation: fadeInUp 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Staggered animation delays */
    .product-card:nth-child(1) { animation-delay: 0.1s; }
    .product-card:nth-child(2) { animation-delay: 0.2s; }
    .product-card:nth-child(3) { animation-delay: 0.3s; }
    .product-card:nth-child(4) { animation-delay: 0.4s; }
    .product-card:nth-child(5) { animation-delay: 0.5s; }
    .product-card:nth-child(6) { animation-delay: 0.6s; }
    .product-card:nth-child(7) { animation-delay: 0.7s; }
    .product-card:nth-child(8) { animation-delay: 0.8s; }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-section {
            padding: 80px 0 100px;
        }
        
        .category-nav {
            padding: 20px 25px;
            border-radius: 30px;
            flex-direction: column;
            gap: 5px;
        }

        .product-nav-item,
        .nav-item2 {
            width: 100%;
            text-align: center;
        }

        .product-nav-link {
            padding: 12px 20px;
            font-size: 0.9rem;
        }

        .product-card {
            margin-bottom: 30px;
        }

        .product-image {
            height: 250px;
        }

        .product-content {
            padding: 25px;
        }

        .dropdown-menu {
            position: static !important;
            transform: none !important;
            box-shadow: none;
            border-radius: 15px;
            margin-top: 10px;
        }
    }

    /* Loading Animation */
    .loading-spinner {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 2px solid rgba(255,255,255,.3);
        border-radius: 50%;
        border-top-color: #fff;
        animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Scroll Progress Bar */
    .scroll-progress {
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 4px;
        background: linear-gradient(135deg, #581E1E, #8B3A3A);
        z-index: 1000;
        transition: width 0.3s ease;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Scroll Progress Bar -->
<div class="scroll-progress"></div>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Our Premium Products</h1>
        <img src="{{ asset('images/group-48099402.svg') }}"
            class="blog-decorative-img"
            alt="Decorative Element">
        <p class="hero-subtitle">Discover our exceptional collection of handcrafted excellence</p>
    </div>
</section>

<!-- Category Navigation -->
<div class="container">
    <div class="category-nav">
        <!-- All Category -->
        <div class="nav-item2">
            <a href="{{ route('frontend.product') }}" class="product-nav-link {{ request()->routeIs('frontend.product') ? 'active' : '' }}">
                All Products
            </a>
        </div>

        <!-- Dynamic Category Dropdowns -->
        @foreach($categories as $category)
        <div class="product-nav-item dropdown">
            <span class="product-nav-link dropdown-toggle" id="dropdownMenu{{ $category->id }}"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ $category->name }}
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{ $category->id }}">
                @if($category->subCatRecursive->isEmpty())
                <li>
                    <a class="dropdown-item" href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">
                        {{ $category->name }}
                    </a>
                </li>
                @else
                @foreach($category->subCatRecursive as $subCategory)
                @include('frontend.category_dropdown', ['category' => $subCategory])
                @endforeach
                @endif
            </ul>
        </div>
        @endforeach
    </div>
</div>

<!-- Products Section -->
<section class="products-section">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="product-card fade-in">
                    @if($product->is_new)
                    <div class="product-badge">New Arrival</div>
                    @endif
                    <div class="product-image">
                        <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}">
                            <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                        </a>
                    </div>
                    <div class="product-content">
                        <h4 class="product-title">{{ $product->name }}</h4>
                        <p class="product-description">
                            {{ $product->description ?? 'Experience premium quality and exceptional craftsmanship in every detail of this remarkable product.' }}
                        </p>
                        <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" class="explore-btn">
                            Explore More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll Progress Bar
    function updateScrollProgress() {
        const scrollTop = window.pageYOffset;
        const docHeight = document.body.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        document.querySelector('.scroll-progress').style.width = scrollPercent + '%';
    }
    
    window.addEventListener('scroll', updateScrollProgress);

    // Enhanced Navigation Active States
    const navLinks = document.querySelectorAll('.product-nav-link');
    navLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });

    // Enhanced Intersection Observer with staggered animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('animate');
                }, index * 100);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.product-card').forEach(card => {
        observer.observe(card);
    });

    // Enhanced Dropdown Interactions
    document.querySelectorAll('.dropdown').forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');
        
        dropdown.addEventListener('show.bs.dropdown', function() {
            toggle.style.background = 'linear-gradient(135deg, #581E1E, #8B3A3A)';
            toggle.style.color = '#fff';
            toggle.style.transform = 'translateY(-2px)';
        });

        dropdown.addEventListener('hide.bs.dropdown', function() {
            setTimeout(() => {
                if (!toggle.matches(':hover')) {
                    toggle.style.background = '';
                    toggle.style.color = '#581E1E';
                    toggle.style.transform = '';
                }
            }, 150);
        });

        // Add hover effects for dropdown items
        const dropdownItems = dropdown.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(10px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add loading state to explore buttons
    document.querySelectorAll('.explore-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const originalText = this.innerHTML;
            this.innerHTML = '<span class="loading-spinner"></span> Loading...';
            this.style.pointerEvents = 'none';
            
            // Reset after navigation (in case of SPA or if navigation is prevented)
            setTimeout(() => {
                this.innerHTML = originalText;
                this.style.pointerEvents = 'auto';
            }, 2000);
        });
    });

    // Parallax effect for hero section
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const heroSection = document.querySelector('.hero-section');
        if (heroSection) {
            const speed = scrolled * 0.5;
            heroSection.style.transform = `translateY(${speed}px)`;
        }
    });

    // Add touch support for mobile hover effects
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('touchstart', function() {
            this.classList.add('touch-active');
        });
        
        card.addEventListener('touchend', function() {
            setTimeout(() => {
                this.classList.remove('touch-active');
            }, 300);
        });
    });

    // Performance optimization: Lazy load images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[loading="lazy"]').forEach(img => {
            imageObserver.observe(img);
        });
    }
});

// Add CSS for touch devices
const style = document.createElement('style');
style.textContent = `
    @media (hover: none) and (pointer: coarse) {
        .product-card.touch-active {
            transform: translateY(-10px) scale(1.02) !important;
            box-shadow: 0 20px 60px rgba(88, 30, 30, 0.2) !important;
        }
        
        .product-card.touch-active::before {
            opacity: 1 !important;
        }
        
        .product-card.touch-active .product-image img {
            transform: scale(1.1) !important;
        }
    }
`;
document.head.appendChild(style);
</script>
@endpush