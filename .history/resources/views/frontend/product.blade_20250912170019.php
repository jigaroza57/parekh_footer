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

<!-- Category Navigation -->
<div class="container">
    <br>
    <br>
    <br>
    <br>
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
    <br>
    <br>

    <div class="container">
        <!-- <h2 class="section-title">Featured Products</h2>
        <p class="section-subtitle">Explore our handpicked selection of quality products</p> -->

        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="product-card">
                    @if($product->is_new)
                    <div class="product-badge">New</div>
                    @endif
                    <div class="product-image">
                        <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}">
                            <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
                        </a>
                        <div class="product-overlay">
                            <!-- <a href="#" class="overlay-btn" title="Add to Wishlist"><i class="fas fa-heart"></i></a> -->
                            <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" class="overlay-btn" title="View Details"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4 class="product-title">{{ $product->name }}</h4>
                        <p class="product-description">
                            {{ $product->description ?? 'Discover the amazing features and quality of this premium product.' }}
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

<style>
    /* Add to your <style> section */
    .product-card {
        border: 2px solid transparent;
        background: #fff;
        border-radius: 22px;
        box-shadow: 0 10px 30px rgba(88, 30, 30, 0.13);
        position: relative;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        overflow: hidden;
    }

    .product-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 25px 50px rgba(88, 30, 30, 0.25);
        border-image: linear-gradient(135deg, #581E1E, #FDBE51) 1;
    }

    .product-image {
        position: relative;
        overflow: hidden;
    }

    .product-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(88, 30, 30, 0.65);
        opacity: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 18px;
        transition: opacity 0.3s;
        z-index: 2;
    }

    .product-card:hover .product-overlay {
        opacity: 1;
    }

    .overlay-btn {
        background: #fff;
        color: #581E1E;
        border-radius: 50%;
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        box-shadow: 0 2px 8px rgba(88, 30, 30, 0.15);
        transition: background 0.2s, color 0.2s, transform 0.2s;
        text-decoration: none;
    }

    .overlay-btn:hover {
        background: #FDBE51;
        color: #fff;
        transform: scale(1.12);
    }

    .product-price-ribbon {
        position: absolute;
        top: 15px;
        right: -30px;
        background: linear-gradient(135deg, #FDBE51, #8B3A3A);
        color: #fff;
        padding: 8px 35px;
        font-weight: bold;
        font-size: 1rem;
        transform: rotate(20deg);
        box-shadow: 0 2px 8px rgba(139, 58, 58, 0.15);
        z-index: 3;
    }

    .product-card {
        opacity: 0;
        transform: translateY(40px) scale(0.98);
        animation: fadeInUp 0.7s cubic-bezier(.23, 1.01, .32, 1) forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .products-section .row>div:nth-child(1) .product-card {
        animation-delay: 0.1s;
    }

    .products-section .row>div:nth-child(2) .product-card {
        animation-delay: 0.2s;
    }

    .products-section .row>div:nth-child(3) .product-card {
        animation-delay: 0.3s;
    }

    .products-section .row>div:nth-child(4) .product-card {
        animation-delay: 0.4s;
    }
</style>


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