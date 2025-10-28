@extends('layouts.app')

@section('content')

<!-- Enhanced Category Navigation with Modern Glass Effect -->
<div class="nav-wrapper">
    <div class="container">
        <div class="category-nav-container">
            <div class="category-nav">
                <!-- All Products Button with Special Design -->
                <div class="nav-item-special">
                    <a href="{{ route('frontend.product') }}" 
                       class="product-nav-link special-link {{ request()->routeIs('frontend.product') ? 'active' : '' }}">
                        <i class="fas fa-grid-2"></i>
                        <span>All Products</span>
                        <div class="link-glow"></div>
                    </a>
                </div>

                <!-- Dynamic Category Dropdowns with Enhanced Design -->
                @foreach($categories as $category)
                <div class="product-nav-item dropdown modern-dropdown">
                    <span class="product-nav-link dropdown-toggle modern-toggle" 
                          id="dropdownMenu{{ $category->id }}"
                          data-bs-toggle="dropdown" 
                          aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <span>{{ $category->name }}</span>
                        <i class="fas fa-chevron-down dropdown-arrow"></i>
                        <div class="hover-effect"></div>
                    </span>
                    <ul class="dropdown-menu modern-dropdown-menu" aria-labelledby="dropdownMenu{{ $category->id }}">
                        @if($category->subCatRecursive->isEmpty())
                        <li>
                            <a class="dropdown-item modern-dropdown-item" 
                               href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">
                                <i class="fas fa-tag"></i>
                                <span>{{ $category->name }}</span>
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
    </div>
</div>

<!-- Enhanced Products Section with Modern Grid -->
<section class="products-section">
    <div class="container">
        <!-- Section Header with Animation -->
        <div class="section-header">
            <div class="header-content">
                <h2 class="section-title">
                    <span class="title-gradient">Premium Collection</span>
                    <div class="title-underline"></div>
                </h2>
                <p class="section-subtitle">Discover our curated selection of exceptional products</p>
            </div>
            <div class="header-decoration">
                <div class="deco-circle circle-1"></div>
                <div class="deco-circle circle-2"></div>
                <div class="deco-circle circle-3"></div>
            </div>
        </div>

        <!-- Enhanced Product Grid -->
        <div class="products-grid">
            @foreach($products as $index => $product)
            <div class="product-item" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="product-card-modern">
                    <!-- Product Badge with Animation -->
                    @if($product->is_new)
                    <div class="product-badge-modern">
                        <span class="badge-text">New</span>
                        <div class="badge-shine"></div>
                    </div>
                    @endif

                    <!-- Enhanced Product Image Container -->
                    <div class="product-image-container">
                        <div class="image-wrapper">
                            <img src="{{ asset('images/product/' . $product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="product-image">
                            <div class="image-overlay">
                                <div class="overlay-gradient"></div>
                            </div>
                        </div>
                        
                        <!-- Modern Action Buttons -->
                        <div class="product-actions">
                            <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" 
                               class="action-btn primary-action" 
                               title="View Details">
                                <i class="fas fa-eye"></i>
                                <span class="btn-tooltip">View Details</span>
                            </a>
                            <button class="action-btn secondary-action" title="Add to Wishlist">
                                <i class="fas fa-heart"></i>
                                <span class="btn-tooltip">Add to Wishlist</span>
                            </button>
                        </div>
                    </div>

                    <!-- Enhanced Product Content -->
                    <div class="product-content-modern">
                        <div class="product-category">
                            <span class="category-tag">Premium</span>
                        </div>
                        
                        <h4 class="product-title-modern">{{ $product->name }}</h4>
                        
                        <p class="product-description-modern">
                            {{ Str::limit($product->description ?? 'Discover the amazing features and quality of this premium product.', 80) }}
                        </p>

                        <!-- Product Rating (Mock) -->
                        <div class="product-rating">
                            <div class="stars">
                                @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= 4 ? 'filled' : '' }}"></i>
                                @endfor
                            </div>
                            <span class="rating-text">(4.0)</span>
                        </div>

                        <!-- Enhanced CTA Button -->
                        <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" 
                           class="explore-btn-modern">
                            <span class="btn-text">Explore More</span>
                            <i class="fas fa-arrow-right btn-icon"></i>
                            <div class="btn-ripple"></div>
                        </a>
                    </div>

                    <!-- Card Glow Effect -->
                    <div class="card-glow"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="load-more-section">
            <button class="load-more-btn">
                <span>Load More Products</span>
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
    </div>

    <!-- Background Elements -->
    <div class="section-bg-elements">
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
        <div class="bg-shape shape-3"></div>
    </div>
</section>

@endsection

<style>
/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    --gold-gradient: linear-gradient(135deg, #FDBE51 0%, #F7931E 100%);
    --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    
    --text-primary: #2d3748;
    --text-secondary: #718096;
    --text-light: #a0aec0;
    
    --bg-primary: #ffffff;
    --bg-secondary: #f7fafc;
    --bg-glass: rgba(255, 255, 255, 0.1);
    
    --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
    --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.1);
    
    --border-radius: 16px;
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Enhanced Navigation Styles */
.nav-wrapper {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    overflow: hidden;
    padding: 2rem 0;
    margin-bottom: 4rem;
}

.nav-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
    opacity: 0.3;
}

.category-nav-container {
    position: relative;
    z-index: 2;
}

.category-nav {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
    align-items: center;
}

.nav-item-special {
    position: relative;
}

.special-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 2rem;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 50px;
    color: white;
    text-decoration: none;
    font-weight: 600;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.special-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.special-link:hover::before {
    left: 100%;
}

.special-link:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    background: rgba(255, 255, 255, 0.25);
}

.modern-dropdown {
    position: relative;
}

.modern-toggle {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 25px;
    color: white;
    cursor: pointer;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.modern-toggle:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-1px);
}

.dropdown-arrow {
    transition: transform 0.3s ease;
    margin-left: 0.25rem;
}

.modern-dropdown.show .dropdown-arrow {
    transform: rotate(180deg);
}

.modern-dropdown-menu {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--border-radius);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    padding: 0.5rem;
    margin-top: 0.5rem;
}

.modern-dropdown-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    border-radius: 12px;
    color: var(--text-primary);
    text-decoration: none;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.modern-dropdown-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: var(--primary-gradient);
    transition: left 0.3s ease;
    z-index: -1;
}

.modern-dropdown-item:hover::before {
    left: 0;
}

.modern-dropdown-item:hover {
    color: white;
    transform: translateX(5px);
}

/* Enhanced Products Section */
.products-section {
    position: relative;
    padding: 4rem 0;
    min-height: 100vh;
}

.section-header {
    text-align: center;
    margin-bottom: 4rem;
    position: relative;
}

.header-content {
    position: relative;
    z-index: 2;
}

.section-title {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 1rem;
    position: relative;
}

.title-gradient {
    background: var(--primary-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
}

.title-underline {
    width: 100px;
    height: 4px;
    background: var(--gold-gradient);
    margin: 1rem auto;
    border-radius: 2px;
    animation: expandLine 2s ease-out;
}

@keyframes expandLine {
    0% { width: 0; }
    100% { width: 100px; }
}

.section-subtitle {
    font-size: 1.2rem;
    color: var(--text-secondary);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.header-decoration {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.deco-circle {
    position: absolute;
    border-radius: 50%;
    background: var(--accent-gradient);
    opacity: 0.1;
    animation: float 6s ease-in-out infinite;
}

.circle-1 {
    width: 200px;
    height: 200px;
    top: -100px;
    left: -100px;
    animation-delay: 0s;
}

.circle-2 {
    width: 150px;
    height: 150px;
    top: -75px;
    right: -75px;
    animation-delay: 2s;
}

.circle-3 {
    width: 100px;
    height: 100px;
    bottom: -50px;
    left: -50px;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

/* Modern Product Grid */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    margin-bottom: 4rem;
}

.product-item {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.6s ease forwards;
}

.product-item:nth-child(1) { animation-delay: 0.1s; }
.product-item:nth-child(2) { animation-delay: 0.2s; }
.product-item:nth-child(3) { animation-delay: 0.3s; }
.product-item:nth-child(4) { animation-delay: 0.4s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.product-card-modern {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 24px;
    overflow: hidden;
    position: relative;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

.product-card-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--primary-gradient);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: -1;
}

.product-card-modern:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.2);
}

.product-card-modern:hover::before {
    opacity: 0.05;
}

/* Enhanced Product Badge */
.product-badge-modern {
    position: absolute;
    top: 1rem;
    left: 1rem;
    z-index: 10;
    background: var(--secondary-gradient);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
}

.badge-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    animation: shine 2s infinite;
}

@keyframes shine {
    0% { left: -100%; }
    100% { left: 100%; }
}

/* Enhanced Image Container */
.product-image-container {
    position: relative;
    overflow: hidden;
    height: 250px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
}

.image-wrapper {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.product-card-modern:hover .product-image {
    transform: scale(1.1) rotate(2deg);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.product-card-modern:hover .image-overlay {
    opacity: 1;
}

/* Modern Action Buttons */
.product-actions {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    gap: 1rem;
    opacity: 0;
    transition: all 0.3s ease;
}

.product-card-modern:hover .product-actions {
    opacity: 1;
}

.action-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    text-decoration: none;
}

.primary-action {
    background: var(--primary-gradient);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
}

.secondary-action {
    background: var(--secondary-gradient);
    box-shadow: 0 8px 20px rgba(240, 147, 251, 0.4);
}

.action-btn:hover {
    transform: scale(1.1) rotate(10deg);
}

.btn-tooltip {
    position: absolute;
    bottom: -35px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.7rem;
    white-space: nowrap;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.action-btn:hover .btn-tooltip {
    opacity: 1;
}

/* Enhanced Product Content */
.product-content-modern {
    padding: 1.5rem;
}

.product-category {
    margin-bottom: 0.75rem;
}

.category-tag {
    background: var(--accent-gradient);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 12px;
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.product-title-modern {
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.75rem;
    line-height: 1.3;
}

.product-description-modern {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 1rem;
    font-size: 0.9rem;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
}

.stars {
    display: flex;
    gap: 0.2rem;
}

.stars i {
    color: #e2e8f0;
    font-size: 0.9rem;
    transition: color 0.2s ease;
}

.stars i.filled {
    color: #fbbf24;
}

.rating-text {
    color: var(--text-light);
    font-size: 0.8rem;
}

/* Enhanced CTA Button */
.explore-btn-modern {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: 100%;
    padding: 1rem 1.5rem;
    background: var(--dark-gradient);
    color: white;
    text-decoration: none;
    border-radius: 16px;
    font-weight: 600;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.explore-btn-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: var(--gold-gradient);
    transition: left 0.3s ease;
    z-index: -1;
}

.explore-btn-modern:hover::before {
    left: 0;
}

.explore-btn-modern:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    border-color: rgba(253, 190, 81, 0.5);
}

.btn-icon {
    transition: transform 0.3s ease;
}

.explore-btn-modern:hover .btn-icon {
    transform: translateX(5px);
}

/* Load More Section */
.load-more-section {
    text-align: center;
}

.load-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 2rem;
    background: var(--primary-gradient);
    color: white;
    border: none;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
}

.load-more-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(102, 126, 234, 0.4);
}

/* Background Elements */
.section-bg-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    z-index: -1;
}

.bg-shape {
    position: absolute;
    border-radius: 50%;
    background: var(--accent-gradient);
    opacity: 0.05;
    animation: floatBg 8s ease-in-out infinite;
}

.shape-1 {
    width: 300px;
    height: 300px;
    top: 10%;
    left: -5%;
    animation-delay: 0s;
}

.shape-2 {
    width: 200px;
    height: 200px;
    top: 60%;
    right: -5%;
    animation-delay: 3s;
}

.shape-3 {
    width: 150px;
    height: 150px;
    bottom: 20%;
    left: 10%;
    animation-delay: 6s;
}

@keyframes floatBg {
    0%, 100% { 
        transform: translateY(0px) rotate(0deg) scale(1);
    }
    33% { 
        transform: translateY(-30px) rotate(120deg) scale(1.1);
    }
    66% { 
        transform: translateY(15px) rotate(240deg) scale(0.9);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .category-nav {
        flex-direction: column;
        align-items: stretch;
    }
    
    .special-link,
    .modern-toggle {
        justify-content: center;
        text-align: center;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .products-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .product-image-container {
        height: 200px;
    }
    
    .header-decoration {
        display: none;
    }
}

@media (max-width: 480px) {
    .nav-wrapper {
        padding: 1rem 0;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    .section-subtitle {
        font-size: 1rem;
    }
    
    .product-content-modern {
        padding: 1rem;
    }
}

/* Advanced Animations */
@keyframes ripple {
    0% {
        transform: scale(0);
        opacity: 1;
    }
    100% {
        transform: scale(4);
        opacity: 0;
    }
}

.btn-ripple {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: scale(0);
    animation: ripple 0.6s linear;
    pointer-events: none;
}

/* Scroll Animations */
@media (prefers-reduced-motion: no-preference) {
    .product-card-modern {
        animation: none;
    }
    
    .product-item {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .product-item.animate {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Dark Mode Support */
@media (prefers-color-scheme: dark) {
    :root {
        --text-primary: #f7fafc;
        --text-secondary: #e2e8f0;
        --text-light: #a0aec0;
        --bg-primary: #1a202c;
        --bg-secondary: #2d3748;
    }
    
    .product-card-modern {
        background: rgba(45, 55, 72, 0.8);
        border-color: rgba(255, 255, 255, 0.1);
    }
    
    .modern-dropdown-menu {
        background: rgba(45, 55, 72, 0.95);
    }
}
</style>

@push('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced navigation active states
    const navLinks = document.querySelectorAll('.product-nav-link');
    navLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });

    // Advanced Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('animate');
                    entry.target.style.animationDelay = `${index * 0.1}s`;
                }, index * 100);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all product items
    document.querySelectorAll('.product-item').forEach(item => {
        observer.observe(item);
    });

    // Enhanced dropdown interactions
    document.querySelectorAll('.modern-dropdown').forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');
        
        dropdown.addEventListener('show.bs.dropdown', function() {
            toggle.style.background = 'rgba(255, 255, 255, 0.25)';
            toggle.style.transform = 'translateY(-1px)';
            menu.style.animation = 'slideDown 0.3s ease';
        });

        dropdown.addEventListener('hide.bs.dropdown', function() {
            setTimeout(() => {
                if (!toggle.matches(':hover')) {
                    toggle.style.background = 'rgba(255, 255, 255, 0.1)';
                    toggle.style.transform = 'translateY(0)';
                }
            }, 100);
        });
    });

    // Ripple effect for buttons
    document.querySelectorAll('.explore-btn-modern').forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('btn-ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // Parallax effect for background shapes
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const shapes = document.querySelectorAll('.bg-shape');
        
        shapes.forEach((shape, index) => {
            const speed = 0.5 + (index * 0.2);
            const yPos = -(scrolled * speed);
            shape.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.1}deg)`;
        });
    });

    // Smooth scroll for load more
    document.querySelector('.load-more-btn')?.addEventListener('click', function() {
        // Add your load more functionality here
        this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
        
        // Simulate loading
        setTimeout(() => {
            this.innerHTML = '<span>Load More Products</span><i class="fas fa-chevron-down"></i>';
        }, 2000);
    });

    // Enhanced hover effects for product cards
    document.querySelectorAll('.product-card-modern').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });

    // Add loading states for images
    document.querySelectorAll('.product-image').forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
        
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.3s ease';
    });
});

// CSS Animation Keyframes
const style = document.createElement('style');
style.textContent = `
    @keyframes slideDown {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;
document.head.appendChild(style);
</script>
@endpush