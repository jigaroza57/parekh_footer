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
                <i class="dropdown-icon fas fa-chevron-down"></i>
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
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="product-card fade-in">
                    @if($product->is_new)
                    <div class="product-badge">New</div>
                    @endif
                    <div class="product-image">
                        <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}">
                            <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <i class="fas fa-eye overlay-icon"></i>
                                    <span>Quick View</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product-content">
                        <h4 class="product-title">{{ $product->name }}</h4>
                        <p class="product-description">
                            {{ $product->description ?? 'Discover the amazing features and quality of this premium product.' }}
                        </p>
                        <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" class="explore-btn">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right btn-arrow"></i>
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
/* Professional Background */
body {
    background: linear-gradient(135deg, #fafbfc 0%, #f1f3f4 100%);
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: 
        radial-gradient(600px circle at 25% 25%, rgba(88, 30, 30, 0.02) 0%, transparent 50%),
        radial-gradient(800px circle at 75% 75%, rgba(139, 58, 58, 0.02) 0%, transparent 50%);
    z-index: -1;
    pointer-events: none;
}

/* Professional Category Navigation */
.category-nav {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
    align-items: center;
    padding: 30px 25px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border-radius: 16px;
    border: 1px solid rgba(88, 30, 30, 0.08);
    box-shadow: 
        0 8px 32px rgba(0, 0, 0, 0.06),
        0 1px 0 rgba(255, 255, 255, 0.8) inset;
    position: relative;
}

.category-nav::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, transparent, #581E1E, transparent);
    border-radius: 2px;
}

.nav-item2, .product-nav-item {
    position: relative;
}

.product-nav-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 24px;
    background: rgba(255, 255, 255, 0.8);
    color: #2c3e50;
    text-decoration: none;
    border-radius: 12px;
    font-weight: 500;
    font-size: 14px;
    border: 1px solid rgba(88, 30, 30, 0.1);
    position: relative;
    overflow: hidden;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    cursor: pointer;
    letter-spacing: 0.3px;
}

.product-nav-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #581E1E, #8B3A3A);
    transition: left 0.3s ease;
    z-index: -1;
}

.product-nav-link:hover::before,
.product-nav-link.active::before {
    left: 0;
}

.product-nav-link:hover,
.product-nav-link.active {
    color: white;
    border-color: #581E1E;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(88, 30, 30, 0.2);
}

.dropdown-icon {
    font-size: 10px;
    transition: transform 0.3s ease;
    margin-left: auto;
}

.dropdown.show .dropdown-icon {
    transform: rotate(180deg);
}

/* Professional Dropdown */
.dropdown-menu {
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(88, 30, 30, 0.1);
    border-radius: 12px;
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
    padding: 8px;
    margin-top: 8px;
    min-width: 200px;
}

.dropdown-item {
    padding: 12px 16px;
    border-radius: 8px;
    color: #2c3e50;
    font-weight: 500;
    font-size: 14px;
    transition: all 0.3s ease;
    position: relative;
    border: none;
}

.dropdown-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 3px;
    height: 0;
    background: #581E1E;
    border-radius: 2px;
    transition: height 0.3s ease;
}

.dropdown-item:hover {
    background: rgba(88, 30, 30, 0.05);
    color: #581E1E;
    padding-left: 20px;
}

.dropdown-item:hover::before {
    height: 60%;
}

/* Professional Products Section */
.products-section {
    position: relative;
    padding: 60px 0;
}

/* Professional Product Cards */
.product-card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 18px;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    border: 1px solid rgba(88, 30, 30, 0.06);
    position: relative;
    height: 100%;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.product-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, #581E1E, transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.product-card:hover::before {
    opacity: 1;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 
        0 20px 40px rgba(88, 30, 30, 0.12),
        0 8px 16px rgba(0, 0, 0, 0.08);
    border-color: rgba(88, 30, 30, 0.15);
}

.product-badge {
    position: absolute;
    top: 16px;
    right: 16px;
    background: linear-gradient(135deg, #581E1E, #8B3A3A);
    color: white;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    z-index: 10;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 3px 12px rgba(88, 30, 30, 0.3);
}

.product-image {
    position: relative;
    height: 280px;
    overflow: hidden;
    margin: 16px 16px 0;
    border-radius: 14px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border: 1px solid rgba(88, 30, 30, 0.08);
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(44, 62, 80, 0.85);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: all 0.4s ease;
    backdrop-filter: blur(2px);
}

.product-card:hover .image-overlay {
    opacity: 1;
}

.overlay-content {
    text-align: center;
    color: white;
    transform: translateY(20px);
    transition: transform 0.4s ease;
}

.product-card:hover .overlay-content {
    transform: translateY(0);
}

.overlay-icon {
    font-size: 2rem;
    margin-bottom: 8px;
    display: block;
}

.overlay-content span {
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.product-content {
    padding: 24px 20px;
    position: relative;
}

.product-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 12px;
    line-height: 1.4;
    position: relative;
}

.product-title::after {
    content: '';
    position: absolute;
    bottom: -6px;
    left: 0;
    width: 30px;
    height: 2px;
    background: #581E1E;
    border-radius: 1px;
    transition: width 0.3s ease;
}

.product-card:hover .product-title::after {
    width: 50px;
}

.product-description {
    color: #6c757d;
    font-size: 13px;
    line-height: 1.6;
    margin-bottom: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.explore-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    background: linear-gradient(135deg, #581E1E, #8B3A3A);
    color: white;
    text-decoration: none;
    border-radius: 10px;
    font-weight: 500;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    border: none;
}

.explore-btn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.3s ease;
}

.explore-btn:hover::before {
    width: 100px;
    height: 100px;
}

.explore-btn:hover {
    background: linear-gradient(135deg, #8B3A3A, #A0522D);
    transform: translateX(3px);
    color: white;
    box-shadow: 0 6px 20px rgba(88, 30, 30, 0.25);
}

.btn-arrow {
    font-size: 11px;
    transition: transform 0.3s ease;
}

.explore-btn:hover .btn-arrow {
    transform: translateX(3px);
}

/* Fade In Animation */
.fade-in {
    opacity: 0;
    transform: translateY(20px);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Professional Responsive Design */
@media (max-width: 768px) {
    .category-nav {
        gap: 8px;
        padding: 24px 16px;
        border-radius: 14px;
    }
    
    .product-nav-link {
        padding: 12px 18px;
        font-size: 13px;
        border-radius: 10px;
    }
    
    .product-image {
        height: 240px;
        margin: 12px 12px 0;
    }
    
    .product-content {
        padding: 20px 16px;
    }
    
    .overlay-icon {
        font-size: 1.8rem;
    }
    
    .overlay-content span {
        font-size: 12px;
    }
}

@media (max-width: 576px) {
    .category-nav {
        flex-direction: column;
        align-items: stretch;
        gap: 8px;
        padding: 20px 16px;
    }
    
    .product-nav-link {
        justify-content: center;
        padding: 14px 16px;
    }
    
    .product-image {
        height: 220px;
        margin: 10px 10px 0;
    }
    
    .product-title {
        font-size: 1rem;
    }
    
    .product-description {
        font-size: 12px;
    }
}

/* Professional Loading States */
.product-card {
    animation: cardSlideIn 0.6s ease-out forwards;
}

@keyframes cardSlideIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Stagger animation for cards */
.product-card:nth-child(1) { animation-delay: 0.1s; }
.product-card:nth-child(2) { animation-delay: 0.2s; }
.product-card:nth-child(3) { animation-delay: 0.3s; }
.product-card:nth-child(4) { animation-delay: 0.4s; }

/* Professional Focus States */
.product-nav-link:focus,
.explore-btn:focus {
    outline: 2px solid #581E1E;
    outline-offset: 2px;
}

.dropdown-item:focus {
    background: rgba(88, 30, 30, 0.05);
    outline: 1px solid #581E1E;
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