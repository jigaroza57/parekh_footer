@extends('frontend/layout')
@section('content')

<style>
    /* Global Reset and Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #622c2c 0%, #8B4A4A 100%);
        padding: 80px 0 100px;
        position: relative;
        overflow: hidden;
        margin-bottom: -60px;
        z-index: 1;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.08)" points="0,1000 1000,0 1000,1000"/></svg>');
    }

    .blog-decorative-img {
        width: 280px;
        max-width: 100%;
        opacity: 0.9;
        filter: brightness(0) invert(1);
        margin-top: 1rem;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .hero-title {
        color: #fff;
        font-size: 3.5rem;
        font-weight: 700;
        /* font-family: "Aladin", system-ui;
        letter-spacing: 3px; */
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hero-subtitle {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.3rem;
        font-weight: 300;
        margin-bottom: 40px;
    }

    /* Category Navigation */
    .category-nav {
        background: #fff;
        border-radius: 50px;
        padding: 20px 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin: -30px auto 5px;
        max-width: 90%;
        width: fit-content;
        position: relative;
        z-index: 3;
        border: 1px solid rgba(88, 30, 30, 0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .product-nav-link {
        color: #581E1E;
        font-weight: 500;
        padding: 10px 20px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .product-nav-link:hover,
    .product-nav-link.active {
        background: linear-gradient(135deg, #581E1E, #8B3A3A);
        color: #fff;
        border-radius: 25px;
    }

    /* Dropdown Styles */
    .dropdown-menu {
        border: none;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        padding: 15px 0;
        margin-top: 10px;
        background: #fff;
        backdrop-filter: blur(10px);
        min-width: 200px;
    }

    .dropdown-item {
        padding: 12px 25px;
        color: #581E1E;
        font-weight: 500;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
    }

    .dropdown-item:hover {
        background: linear-gradient(90deg, rgba(88, 30, 30, 0.1), transparent);
        color: #581E1E;
        border-left-color: #581E1E;
        transform: translateX(5px);
    }

    /* Products Section */
    .products-section {
        padding: 40px 0;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 20px;
        position: relative;
    }

    .section-title::after {
        content: '';
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #581E1E, #8B3A3A);
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .section-subtitle {
        text-align: center;
        color: #7f8c8d;
        font-size: 1.1rem;
        margin-bottom: 50px;
        font-weight: 300;
    }

    /* Product Card */
    .product-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        position: relative;
    }

    .product-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 50px rgba(88, 30, 30, 0.2);
    }

    .product-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(88, 30, 30, 0.1), rgba(139, 58, 58, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    .product-card:hover::before {
        opacity: 1;
    }

    .product-image {
        height: 280px;
        overflow: hidden;
        position: relative;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .product-card:hover .product-image img {
        transform: scale(1.1);
    }

    .product-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: linear-gradient(135deg, #581E1E, #8B3A3A);
        color: #fff;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        z-index: 2;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .product-content {
        padding: 25px;
        position: relative;
        z-index: 2;
    }

    .product-title {
        color: #2c3e50;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 15px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        transition: color 0.3s ease;
    }

    .product-card:hover .product-title {
        color: #581E1E;
    }

    .product-description {
        color: #7f8c8d;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .explore-btn {
        background: linear-gradient(135deg, #581E1E, #8B3A3A);
        color: #fff !important;
        border: none;
        padding: 12px 25px;
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .explore-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .explore-btn:hover::before {
        left: 100%;
    }

    .explore-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(88, 30, 30, 0.3);
    }

    .explore-btn::after {
        content: '→';
        transition: transform 0.3s ease;
    }

    .explore-btn:hover::after {
        transform: translateX(5px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .category-nav {
            padding: 15px;
            border-radius: 20px;
            flex-direction: column;
        }

        .product-nav-item,
        .nav-item2 {
            margin: 5px 0;
            width: 100%;
            text-align: center;
        }

        .product-card {
            margin-bottom: 20px;
        }
    }

    /* Animation */
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.6s ease forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
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
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



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
            <h1 class="hero-title">Our Products </h1>

            <!-- <p class="hero-subtitle" style="color: white;">We'd love to hear from you. Get in touch with our expert team.</p> -->
        </div>
    </div>
</section>


<!-- Hero Section -->
<!-- <section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Our Products</h1>
        <img src="{{ asset('images/group-48099402.svg') }}"
            class="blog-decorative-img"
            alt="Decorative Element">
    </div>
</section> -->

<style>
    :root {
        --primary-color: #581E1E;
        --primary-light: #8B3A3A;
        --primary-dark: #3D1515;
        --accent-color: #D4AF37;
        --text-dark: #2C3E50;
        --text-light: #6C757D;
        --white: #ffffff;
        --light-bg: #f8f9fa;
        --shadow-light: rgba(88, 30, 30, 0.1);
        --shadow-medium: rgba(88, 30, 30, 0.15);
        --shadow-strong: rgba(88, 30, 30, 0.25);
        --gradient-primary: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        --gradient-accent: linear-gradient(135deg, var(--accent-color), #F4D03F);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
    }

    /* Category Navigation Styles */
    .category-navigation-wrapper {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(88, 30, 30, 0.1);
        box-shadow: 0 8px 32px var(--shadow-light);
        position: sticky;
        top: 0;
        z-index: 1000;
        padding: 1rem 0;
        margin: 2rem 0;
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .category-nav {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 1rem;
    }

    .nav-item2,
    .product-nav-item {
        position: relative;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .product-nav-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.875rem 1.75rem;
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        color: var(--text-dark);
        background: var(--white);
        border: 2px solid transparent;
        border-radius: 50px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px var(--shadow-light);
        cursor: pointer;
        white-space: nowrap;
    }

    .product-nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: var(--gradient-primary);
        transition: left 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: -1;
    }

    .product-nav-link:hover,
    .product-nav-link.active {
        color: var(--white);
        border-color: var(--primary-color);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px var(--shadow-medium);
    }

    .product-nav-link:hover::before,
    .product-nav-link.active::before {
        left: 0;
    }

    .product-nav-link.active {
        background: var(--gradient-primary);
        color: var(--white);
    }

    .product-nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 3px;
        background: var(--gradient-accent);
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(212, 175, 55, 0.4);
    }

    .dropdown-toggle::after {
        margin-left: 0.5rem;
        transition: transform 0.3s ease;
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        content: '\f107';
        border: none;
        vertical-align: middle;
    }

    .dropdown.show .dropdown-toggle::after {
        transform: rotate(180deg);
    }

    /* Dropdown Menu Styles */
    .dropdown-menu {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(88, 30, 30, 0.1);
        border-radius: 20px;
        box-shadow: 0 20px 40px var(--shadow-medium);
        padding: 1rem 0;
        margin-top: 0.5rem;
        min-width: 250px;
        animation: dropdownFadeIn 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @keyframes dropdownFadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px) scale(0.95);
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .dropdown-item {
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        color: var(--text-dark);
        transition: all 0.3s ease;
        border-radius: 0;
        position: relative;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .dropdown-item::before {
        content: '\f105';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        font-size: 0.8rem;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
        color: var(--primary-color);
    }

    .dropdown-item:hover {
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        color: var(--white);
        padding-left: 2rem;
    }

    .dropdown-item:hover::before {
        opacity: 1;
        transform: translateX(0);
        color: var(--white);
    }

    /* Category Icons */
    .category-icon {
        width: 20px;
        height: 20px;
        margin-right: 0.5rem;
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    .product-nav-link:hover .category-icon,
    .product-nav-link.active .category-icon {
        opacity: 1;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .category-nav {
            justify-content: flex-start;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            -ms-overflow-style: none;
            padding: 1rem 0.5rem;
        }

        .category-nav::-webkit-scrollbar {
            display: none;
        }

        .nav-item2,
        .product-nav-item {
            flex-shrink: 0;
        }

        .product-nav-link {
            padding: 0.75rem 1.5rem;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 768px) {
        .category-navigation-wrapper {
            margin: 1rem 0;
            border-radius: 15px;
        }

        .product-nav-link {
            padding: 0.625rem 1.25rem;
            font-size: 0.85rem;
        }

        .dropdown-menu {
            min-width: 200px;
        }
    }

    /* Loading Animation */
    .nav-item2,
    .product-nav-item {
        animation: slideInUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) both;
    }

    .nav-item2:nth-child(1) {
        animation-delay: 0.1s;
    }

    .product-nav-item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .product-nav-item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .product-nav-item:nth-child(4) {
        animation-delay: 0.4s;
    }

    .product-nav-item:nth-child(5) {
        animation-delay: 0.5s;
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Enhanced Focus States for Accessibility */
    .product-nav-link:focus {
        outline: 2px solid var(--accent-color);
        outline-offset: 2px;
    }

    /* Scroll Indicator for Mobile */
    @media (max-width: 992px) {
        .category-navigation-wrapper::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8));
            pointer-events: none;
            opacity: 0.7;
        }
    }

    /* Demo content styling */
    .demo-content {
        padding: 2rem;
        text-align: center;
        color: var(--text-dark);
    }

    .demo-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .demo-subtitle {
        font-size: 1.1rem;
        color: var(--text-light);
        margin-bottom: 2rem;
    }
</style>

<!-- Products Section -->
 <!-- Category Navigation -->
    <div class="category-navigation-wrapper">
        <div class="container">
            <div class="category-nav">
                <!-- All Products Category -->
                <div class="nav-item2">
                    <a href="#" class="product-nav-link active">
                        <i class="fas fa-th-large category-icon"></i>
                        All Products
                    </a>
                </div>

                <!-- Demo Dynamic Categories -->
                <div class="product-nav-item dropdown">
                    <span class="product-nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-laptop category-icon"></i>
                        Electronics
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Smartphones</a></li>
                        <li><a class="dropdown-item" href="#">Laptops</a></li>
                        <li><a class="dropdown-item" href="#">Tablets</a></li>
                        <li><a class="dropdown-item" href="#">Accessories</a></li>
                    </ul>
                </div>

                <div class="product-nav-item dropdown">
                    <span class="product-nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-tshirt category-icon"></i>
                        Fashion
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Men's Clothing</a></li>
                        <li><a class="dropdown-item" href="#">Women's Clothing</a></li>
                        <li><a class="dropdown-item" href="#">Shoes</a></li>
                        <li><a class="dropdown-item" href="#">Accessories</a></li>
                    </ul>
                </div>

                <div class="product-nav-item dropdown">
                    <span class="product-nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-home category-icon"></i>
                        Home & Living
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Furniture</a></li>
                        <li><a class="dropdown-item" href="#">Decor</a></li>
                        <li><a class="dropdown-item" href="#">Kitchen</a></li>
                        <li><a class="dropdown-item" href="#">Bedding</a></li>
                    </ul>
                </div>

                <div class="product-nav-item dropdown">
                    <span class="product-nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-dumbbell category-icon"></i>
                        Sports & Fitness
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Exercise Equipment</a></li>
                        <li><a class="dropdown-item" href="#">Sportswear</a></li>
                        <li><a class="dropdown-item" href="#">Outdoor Gear</a></li>
                        <li><a class="dropdown-item" href="#">Supplements</a></li>
                    </ul>
                </div>

                <div class="product-nav-item dropdown">
                    <span class="product-nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-book category-icon"></i>
                        Books & Media
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Fiction</a></li>
                        <li><a class="dropdown-item" href="#">Non-Fiction</a></li>
                        <li><a class="dropdown-item" href="#">Educational</a></li>
                        <li><a class="dropdown-item" href="#">Digital Media</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Demo Content -->
    <div class="container">
        <div class="demo-content">
            <h1 class="demo-title">Professional Category Navigation</h1>
            <p class="demo-subtitle">Modern, responsive, and interactive design with glassmorphism effects</p>
        </div>
    </div>


@endsection

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle navigation active states
        const navLinks = document.querySelectorAll('.product-nav-link');
        navLinks.forEach(link => {
            if (link.href === window.location.href) {
                link.classList.add('active');
                link.setAttribute('aria-current', 'page');
            }
        });

        // Intersection Observer for fade-in animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.product-card').forEach(card => {
            observer.observe(card);
        });

        // Dropdown interactions
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            dropdown.addEventListener('show.bs.dropdown', function() {
                toggle.style.background = 'linear-gradient(135deg, #581E1E, #8B3A3A)';
                toggle.style.color = '#fff';
            });

            dropdown.addEventListener('hide.bs.dropdown', function() {
                setTimeout(() => {
                    if (!toggle.matches(':hover')) {
                        toggle.style.background = '';
                        toggle.style.color = '#581E1E';
                    }
                }, 100);
            });
        });
    });
</script>
@endpush