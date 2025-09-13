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
                <span class="nav-icon">🌟</span>
                <span class="nav-text">All Products</span>
                <div class="nav-glow"></div>
            </a>
        </div>

        <!-- Dynamic Category Dropdowns -->
        @foreach($categories as $category)
        <div class="product-nav-item dropdown">
            <span class="product-nav-link dropdown-toggle" id="dropdownMenu{{ $category->id }}"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="category-icon">📦</span>
                <span class="category-name">{{ $category->name }}</span>
                <span class="dropdown-arrow">▼</span>
                <div class="category-ripple"></div>
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{ $category->id }}">
                @if($category->subCatRecursive->isEmpty())
                <li>
                    <a class="dropdown-item" href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">
                        <span class="dropdown-icon">🏷️</span>
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
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="product-card fade-in">
                    @if($product->is_new)
                    <div class="product-badge">
                        <span class="badge-icon">✨</span>
                        <span class="badge-text">New</span>
                    </div>
                    @endif
                    <div class="product-image">
                        <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}">
                            <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
                            <div class="image-overlay">
                                <div class="overlay-icon">👁️</div>
                                <div class="overlay-text">Quick View</div>
                            </div>
                        </a>
                        <div class="product-frame"></div>
                    </div>
                    <div class="product-content">
                        <h4 class="product-title">
                            <span class="title-icon">🎯</span>
                            {{ $product->name }}
                        </h4>
                        <p class="product-description">
                            {{ $product->description ?? 'Discover the amazing features and quality of this premium product.' }}
                        </p>
                        <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" class="explore-btn">
                            <span class="btn-icon">🚀</span>
                            <span class="btn-text">Explore More</span>
                            <div class="btn-ripple"></div>
                        </a>
                    </div>
                    <div class="card-decoration">
                        <div class="decoration-dot dot-1"></div>
                        <div class="decoration-dot dot-2"></div>
                        <div class="decoration-dot dot-3"></div>
                        <div class="decoration-dot dot-4"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

<style>
/* Background Pattern */
body {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
}

body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 20% 30%, rgba(88, 30, 30, 0.03) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(139, 58, 58, 0.03) 0%, transparent 50%),
        linear-gradient(45deg, transparent 48%, rgba(88, 30, 30, 0.01) 49%, rgba(88, 30, 30, 0.01) 51%, transparent 52%);
    background-size: 400px 400px, 300px 300px, 20px 20px;
    z-index: -1;
    pointer-events: none;
}

/* Category Navigation Styles */
.category-nav {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
    align-items: center;
    padding: 25px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(15px);
    border-radius: 25px;
    border: 2px dashed rgba(88, 30, 30, 0.2);
    box-shadow: 
        0 10px 30px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.6);
    position: relative;
    overflow: hidden;
}

.category-nav::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(88, 30, 30, 0.02), transparent);
    animation: navShimmer 8s ease-in-out infinite;
    pointer-events: none;
}

@keyframes navShimmer {
    0%, 100% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
    50% { transform: translateX(100%) translateY(100%) rotate(45deg); }
}

.nav-item2, .product-nav-item {
    position: relative;
}

.product-nav-link {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(248, 249, 250, 0.9));
    color: #581E1E;
    text-decoration: none;
    border-radius: 20px;
    font-weight: 600;
    font-size: 14px;
    border: 2px solid transparent;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.product-nav-link:hover,
.product-nav-link.active {
    background: linear-gradient(135deg, #581E1E, #8B3A3A);
    color: white;
    border-color: #581E1E;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(88, 30, 30, 0.3);
}

.nav-icon, .category-icon {
    font-size: 16px;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
}

.dropdown-arrow {
    font-size: 10px;
    transition: transform 0.3s ease;
}

.dropdown.show .dropdown-arrow {
    transform: rotate(180deg);
}

.nav-glow, .category-ripple {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.6) 0%, transparent 70%);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.4s ease;
    pointer-events: none;
}

.product-nav-link:hover .nav-glow,
.product-nav-link:hover .category-ripple {
    width: 100px;
    height: 100px;
}

/* Dropdown Menu Styles */
.dropdown-menu {
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(20px);
    border: 2px dashed rgba(88, 30, 30, 0.2);
    border-radius: 15px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    padding: 10px;
    margin-top: 10px;
}

.dropdown-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 15px;
    border-radius: 10px;
    color: #581E1E;
    font-weight: 500;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.dropdown-item:hover {
    background: linear-gradient(135deg, rgba(88, 30, 30, 0.1), rgba(139, 58, 58, 0.1));
    color: #581E1E;
    transform: translateX(5px);
}

.dropdown-icon {
    font-size: 14px;
}

/* Products Section */
.products-section {
    position: relative;
    padding: 40px 0;
}

/* Product Card Styles */
.product-card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 25px;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    border: 3px dashed transparent;
    position: relative;
    height: 100%;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.product-card:hover {
    transform: translateY(-10px) scale(1.02);
    border-color: rgba(88, 30, 30, 0.3);
    box-shadow: 
        0 25px 50px rgba(88, 30, 30, 0.2),
        0 0 0 1px rgba(255, 255, 255, 0.1);
}

.product-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #FF6B6B, #FF8E53);
    color: white;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    z-index: 10;
    display: flex;
    align-items: center;
    gap: 5px;
    box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
    animation: badgePulse 2s ease-in-out infinite;
}

@keyframes badgePulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.badge-icon {
    animation: sparkle 1.5s ease-in-out infinite;
}

@keyframes sparkle {
    0%, 100% { transform: rotate(0deg) scale(1); }
    50% { transform: rotate(180deg) scale(1.1); }
}

.product-image {
    position: relative;
    height: 280px;
    overflow: hidden;
    border-radius: 20px;
    margin: 15px;
    border: 3px dotted rgba(88, 30, 30, 0.2);
    background: linear-gradient(45deg, #f8f9fa, #e9ecef);
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.4s ease;
    border-radius: 15px;
}

.product-card:hover .product-image img {
    transform: scale(1.1) rotate(1deg);
    filter: brightness(0.9) contrast(1.1);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(88, 30, 30, 0.9), rgba(139, 58, 58, 0.85));
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: all 0.4s ease;
    border-radius: 15px;
    gap: 10px;
}

.product-card:hover .image-overlay {
    opacity: 1;
}

.overlay-icon {
    font-size: 2.5rem;
    animation: float 2s ease-in-out infinite;
}

.overlay-text {
    color: white;
    font-weight: 700;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-8px); }
}

.product-frame {
    position: absolute;
    top: -3px;
    left: -3px;
    right: -3px;
    bottom: -3px;
    border: 2px dotted rgba(88, 30, 30, 0.0);
    border-radius: 20px;
    transition: all 0.3s ease;
    pointer-events: none;
}

.product-card:hover .product-frame {
    border-color: rgba(88, 30, 30, 0.5);
    animation: framePulse 2s infinite;
}

@keyframes framePulse {
    0%, 100% { border-color: rgba(88, 30, 30, 0.5); }
    50% { border-color: rgba(139, 58, 58, 0.7); }
}

.product-content {
    padding: 25px;
    position: relative;
}

.product-title {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.3rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 15px;
    position: relative;
}

.title-icon {
    font-size: 1.1rem;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
}

.product-description {
    color: #6c757d;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 20px;
    position: relative;
}

.explore-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 25px;
    background: linear-gradient(135deg, #581E1E, #8B3A3A);
    color: white;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    border: 2px solid transparent;
}

.explore-btn:hover {
    background: linear-gradient(135deg, #8B3A3A, #A0522D);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(88, 30, 30, 0.3);
    border-color: rgba(255, 255, 255, 0.2);
    color: white;
}

.btn-icon {
    font-size: 16px;
    animation: rocket 2s ease-in-out infinite;
}

@keyframes rocket {
    0%, 100% { transform: translateX(0px); }
    50% { transform: translateX(3px); }
}

.btn-ripple {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.4s ease;
    pointer-events: none;
}

.explore-btn:hover .btn-ripple {
    width: 150px;
    height: 150px;
}

/* Card Decorations */
.card-decoration {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.product-card:hover .card-decoration {
    opacity: 1;
}

.decoration-dot {
    position: absolute;
    width: 8px;
    height: 8px;
    background: linear-gradient(135deg, #581E1E, #8B3A3A);
    border-radius: 50%;
    animation: dotFloat 3s ease-in-out infinite;
}

.dot-1 { top: 20px; left: 20px; animation-delay: 0s; }
.dot-2 { top: 20px; right: 20px; animation-delay: 0.5s; }
.dot-3 { bottom: 20px; left: 20px; animation-delay: 1s; }
.dot-4 { bottom: 20px; right: 20px; animation-delay: 1.5s; }

@keyframes dotFloat {
    0%, 100% { transform: translateY(0px) scale(1); opacity: 0.6; }
    50% { transform: translateY(-5px) scale(1.2); opacity: 1; }
}

/* Fade In Animation */
.fade-in {
    opacity: 0;
    transform: translateY(30px);
}

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

/* Responsive Design */
@media (max-width: 768px) {
    .category-nav {
        gap: 10px;
        padding: 20px 15px;
        border-radius: 20px;
    }
    
    .product-nav-link {
        padding: 10px 15px;
        font-size: 12px;
        border-radius: 15px;
    }
    
    .nav-icon, .category-icon {
        font-size: 14px;
    }
    
    .product-image {
        height: 240px;
        margin: 10px;
    }
    
    .product-content {
        padding: 20px;
    }
    
    .overlay-icon {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .category-nav {
        flex-direction: column;
        align-items: stretch;
        gap: 8px;
    }
    
    .product-nav-link {
        justify-content: center;
        padding: 12px;
    }
    
    .product-image {
        height: 220px;
    }
    
    .product-title {
        font-size: 1.1rem;
    }
}

/* Additional Creative Elements */
@media (prefers-reduced-motion: no-preference) {
    .product-card {
        animation: cardEntry 0.6s ease-out forwards;
    }
    
    .product-card:nth-child(even) {
        animation-delay: 0.1s;
    }
    
    .product-card:nth-child(odd) {
        animation-delay: 0.2s;
    }
}

@keyframes cardEntry {
    from {
        opacity: 0;
        transform: translateY(50px) scale(0.9);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
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