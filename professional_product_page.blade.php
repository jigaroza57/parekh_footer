@extends('layouts.app')

@section('content')

<!-- Category Navigation -->
<div class="nav-section">
    <div class="container">
        <div class="category-nav">
            <!-- All Products -->
            <div class="nav-item">
                <a href="{{ route('frontend.product') }}" 
                   class="nav-link {{ request()->routeIs('frontend.product') ? 'active' : '' }}">
                    <i class="fas fa-th-large"></i>
                    All Products
                </a>
            </div>

            <!-- Category Dropdowns -->
            @foreach($categories as $category)
            <div class="nav-item dropdown">
                <span class="nav-link dropdown-toggle" 
                      id="dropdown{{ $category->id }}"
                      data-bs-toggle="dropdown" 
                      aria-expanded="false">
                    {{ $category->name }}
                    <i class="fas fa-chevron-down"></i>
                </span>
                <ul class="dropdown-menu" aria-labelledby="dropdown{{ $category->id }}">
                    @if($category->subCatRecursive->isEmpty())
                    <li>
                        <a class="dropdown-item" 
                           href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">
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
</div>

<!-- Products Section -->
<section class="products-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title">Our Premium Collection</h2>
            <p class="section-subtitle">Discover quality products crafted with excellence</p>
            <div class="title-line"></div>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            @foreach($products as $product)
            <div class="product-card">
                <!-- Product Badge -->
                @if($product->is_new)
                <div class="product-badge">New</div>
                @endif

                <!-- Product Image -->
                <div class="product-image">
                    <img src="{{ asset('images/product/' . $product->image) }}" 
                         alt="{{ $product->name }}">
                    <div class="image-overlay">
                        <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" 
                           class="view-btn">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="product-content">
                    <h4 class="product-title">{{ $product->name }}</h4>
                    <p class="product-description">
                        {{ Str::limit($product->description ?? 'Premium quality product with excellent features.', 60) }}
                    </p>
                    <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" 
                       class="explore-btn">
                        Explore More
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

<style>
/* Theme Variables */
:root {
    --primary-color: #3B0000;
    --accent-color: #FDBA4B;
    --white: #ffffff;
    --light-gray: #f8f9fa;
    --gray: #6c757d;
    --dark-gray: #343a40;
    --shadow: 0 4px 15px rgba(59, 0, 0, 0.1);
    --shadow-hover: 0 8px 25px rgba(59, 0, 0, 0.2);
    --transition: all 0.3s ease;
}

/* Navigation Section */
.nav-section {
    background: linear-gradient(135deg, var(--primary-color) 0%, #5d0000 100%);
    padding: 2rem 0;
    margin-bottom: 3rem;
}

.category-nav {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
    align-items: center;
}

.nav-item {
    position: relative;
}

.nav-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: rgba(255, 255, 255, 0.1);
    color: var(--white);
    text-decoration: none;
    border-radius: 25px;
    font-weight: 500;
    transition: var(--transition);
    border: 1px solid rgba(255, 255, 255, 0.2);
    cursor: pointer;
}

.nav-link:hover,
.nav-link.active {
    background: var(--accent-color);
    color: var(--primary-color);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(253, 186, 75, 0.3);
}

.nav-link i {
    font-size: 0.9rem;
}

/* Dropdown Styles */
.dropdown-menu {
    background: var(--white);
    border: none;
    border-radius: 12px;
    box-shadow: var(--shadow);
    padding: 0.5rem;
    margin-top: 0.5rem;
}

.dropdown-item {
    padding: 0.75rem 1rem;
    color: var(--primary-color);
    border-radius: 8px;
    transition: var(--transition);
}

.dropdown-item:hover {
    background: var(--accent-color);
    color: var(--primary-color);
}

/* Section Header */
.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.section-subtitle {
    font-size: 1.1rem;
    color: var(--gray);
    margin-bottom: 1rem;
}

.title-line {
    width: 60px;
    height: 3px;
    background: var(--accent-color);
    margin: 0 auto;
    border-radius: 2px;
}

/* Products Grid */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

/* Product Card */
.product-card {
    background: var(--white);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: var(--transition);
    position: relative;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-hover);
}

/* Product Badge */
.product-badge {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: var(--accent-color);
    color: var(--primary-color);
    padding: 0.4rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    z-index: 2;
}

/* Product Image */
.product-image {
    position: relative;
    height: 220px;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
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
    background: rgba(59, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: var(--transition);
}

.product-card:hover .image-overlay {
    opacity: 1;
}

.view-btn {
    width: 50px;
    height: 50px;
    background: var(--accent-color);
    color: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 1.2rem;
    transition: var(--transition);
}

.view-btn:hover {
    background: var(--white);
    transform: scale(1.1);
}

/* Product Content */
.product-content {
    padding: 1.5rem;
}

.product-title {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 0.75rem;
    line-height: 1.3;
}

.product-description {
    color: var(--gray);
    line-height: 1.5;
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
}

.explore-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: var(--primary-color);
    color: var(--white);
    text-decoration: none;
    border-radius: 25px;
    font-weight: 500;
    transition: var(--transition);
}

.explore-btn:hover {
    background: var(--accent-color);
    color: var(--primary-color);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(253, 186, 75, 0.3);
}

.explore-btn i {
    transition: var(--transition);
}

.explore-btn:hover i {
    transform: translateX(3px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .nav-section {
        padding: 1.5rem 0;
        margin-bottom: 2rem;
    }
    
    .category-nav {
        flex-direction: column;
        gap: 0.75rem;
    }
    
    .nav-link {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }
    
    .product-image {
        height: 200px;
    }
    
    .product-content {
        padding: 1.2rem;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 1.7rem;
    }
    
    .products-grid {
        grid-template-columns: 1fr;
        gap: 1.2rem;
    }
    
    .nav-link {
        width: 100%;
        justify-content: center;
    }
}

/* Loading Animation */
.product-card {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.6s ease forwards;
}

.product-card:nth-child(1) { animation-delay: 0.1s; }
.product-card:nth-child(2) { animation-delay: 0.2s; }
.product-card:nth-child(3) { animation-delay: 0.3s; }
.product-card:nth-child(4) { animation-delay: 0.4s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Focus States for Accessibility */
.nav-link:focus,
.explore-btn:focus,
.view-btn:focus {
    outline: 2px solid var(--accent-color);
    outline-offset: 2px;
}

/* Print Styles */
@media print {
    .nav-section {
        display: none;
    }
    
    .product-card {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #ddd;
    }
}
</style>

@push('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Navigation active states
    const currentUrl = window.location.href;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add('active');
        }
    });

    // Dropdown interactions
    const dropdowns = document.querySelectorAll('.dropdown');
    
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        
        dropdown.addEventListener('show.bs.dropdown', function() {
            toggle.style.background = 'var(--accent-color)';
            toggle.style.color = 'var(--primary-color)';
        });
        
        dropdown.addEventListener('hide.bs.dropdown', function() {
            if (!toggle.matches(':hover')) {
                toggle.style.background = 'rgba(255, 255, 255, 0.1)';
                toggle.style.color = 'var(--white)';
            }
        });
    });

    // Smooth scroll for internal links
    const internalLinks = document.querySelectorAll('a[href^="#"]');
    
    internalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
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

    // Image loading optimization
    const images = document.querySelectorAll('.product-image img');
    
    images.forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
        
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.3s ease';
    });

    // Intersection Observer for animations
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.product-card').forEach(card => {
            card.style.animationPlayState = 'paused';
            observer.observe(card);
        });
    }
});
</script>
@endpush