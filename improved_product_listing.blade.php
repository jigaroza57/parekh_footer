@extends('frontend.layouts.master')
@section('content')

<!-- Category Navigation -->
<div class="category-navigation-wrapper">
    <div class="container">
        <div class="category-nav-container">
            <div class="nav-brand">
                <h3 class="nav-title">Product Categories</h3>
                <div class="nav-underline"></div>
            </div>
            
            <div class="category-nav">
                <!-- All Products -->
                <div class="nav-item-wrapper">
                    <a href="{{ route('frontend.product') }}" 
                       class="product-nav-link {{ request()->routeIs('frontend.product') ? 'active' : '' }}">
                        <i class="fas fa-th-large nav-icon"></i>
                        <span>All Products</span>
                        <div class="nav-hover-effect"></div>
                    </a>
                </div>

                <!-- Dynamic Category Dropdowns -->
                @foreach($categories as $category)
                <div class="nav-item-wrapper dropdown">
                    <span class="product-nav-link dropdown-toggle" 
                          id="dropdownMenu{{ $category->id }}"
                          data-bs-toggle="dropdown" 
                          aria-expanded="false">
                        <i class="fas fa-folder nav-icon"></i>
                        <span>{{ $category->name }}</span>
                        <i class="fas fa-chevron-down dropdown-arrow"></i>
                        <div class="nav-hover-effect"></div>
                    </span>
                    
                    <ul class="dropdown-menu custom-dropdown" aria-labelledby="dropdownMenu{{ $category->id }}">
                        @if($category->subCatRecursive->isEmpty())
                        <li>
                            <a class="dropdown-item" href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">
                                <i class="fas fa-tag"></i>
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
</div>

<!-- Products Section -->
<section class="products-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <div class="header-content">
                <h2 class="section-title">Premium Collection</h2>
                <p class="section-subtitle">Discover our carefully curated selection of exceptional products</p>
                <div class="title-decoration">
                    <div class="decoration-line"></div>
                    <div class="decoration-diamond"></div>
                    <div class="decoration-line"></div>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            @forelse($products as $product)
            <div class="product-item" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="product-card">
                    @if($product->is_new)
                    <div class="product-badge new-badge">
                        <span>New</span>
                        <div class="badge-shine"></div>
                    </div>
                    @endif
                    
                    <div class="product-image-container">
                        <div class="product-image">
                            <img src="{{ asset('images/product/' . $product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 loading="lazy">
                            <div class="image-overlay"></div>
                        </div>
                        
                        <div class="product-actions">
                            <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" 
                               class="action-btn view-btn" 
                               title="View Details">
                                <i class="fas fa-eye"></i>
                                <span class="btn-tooltip">View Details</span>
                            </a>
                            <button class="action-btn wishlist-btn" title="Add to Wishlist">
                                <i class="far fa-heart"></i>
                                <span class="btn-tooltip">Add to Wishlist</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="product-content">
                        <div class="product-category">Premium Quality</div>
                        <h4 class="product-title">{{ $product->name }}</h4>
                        <p class="product-description">
                            {{ Str::limit($product->description ?? 'Discover the amazing features and quality of this premium product designed for excellence.', 80) }}
                        </p>
                        
                        <div class="product-footer">
                            <div class="product-rating">
                                @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= 4 ? 'filled' : '' }}"></i>
                                @endfor
                                <span class="rating-count">(24)</span>
                            </div>
                            
                            <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" 
                               class="explore-btn">
                                <span>Explore More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-glow"></div>
                </div>
            </div>
            @empty
            <div class="no-products">
                <div class="no-products-icon">
                    <i class="fas fa-box-open"></i>
                </div>
                <h3>No Products Found</h3>
                <p>We're sorry, but no products match your current selection.</p>
                <a href="{{ route('frontend.product') }}" class="back-to-all-btn">
                    View All Products
                </a>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if(method_exists($products, 'links'))
        <div class="pagination-wrapper">
            {{ $products->links('custom.pagination') }}
        </div>
        @endif
    </div>
</section>

@endsection

<style>
/* ===== CSS Variables ===== */
:root {
    --primary-color: #3B0000;
    --secondary-color: #FDBA4B;
    --primary-light: rgba(59, 0, 0, 0.1);
    --secondary-light: rgba(253, 186, 75, 0.1);
    --text-dark: #2c2c2c;
    --text-light: #666;
    --bg-light: #f8f9fa;
    --white: #ffffff;
    --shadow-light: 0 2px 10px rgba(0, 0, 0, 0.1);
    --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.12);
    --shadow-heavy: 0 20px 60px rgba(59, 0, 0, 0.15);
    --border-radius: 16px;
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* ===== Category Navigation ===== */
.category-navigation-wrapper {
    background: linear-gradient(135deg, var(--primary-color) 0%, #4a0000 100%);
    padding: 2rem 0;
    position: relative;
    overflow: hidden;
}

.category-navigation-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(253,186,75,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
    opacity: 0.3;
}

.category-nav-container {
    position: relative;
    z-index: 2;
}

.nav-brand {
    text-align: center;
    margin-bottom: 2rem;
}

.nav-title {
    color: var(--white);
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.nav-underline {
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, var(--secondary-color), #ffcc66);
    margin: 0 auto;
    border-radius: 2px;
    position: relative;
}

.nav-underline::after {
    content: '';
    position: absolute;
    top: -2px;
    left: 50%;
    transform: translateX(-50%);
    width: 12px;
    height: 8px;
    background: var(--secondary-color);
    border-radius: 50%;
    box-shadow: 0 0 20px rgba(253, 186, 75, 0.6);
}

.category-nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
    max-width: 1200px;
    margin: 0 auto;
}

.nav-item-wrapper {
    position: relative;
}

.product-nav-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.8rem 1.5rem;
    background: rgba(255, 255, 255, 0.1);
    color: var(--white);
    text-decoration: none;
    border-radius: var(--border-radius);
    font-weight: 600;
    font-size: 0.95rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    position: relative;
    overflow: hidden;
    cursor: pointer;
    transition: var(--transition);
}

.product-nav-link:hover,
.product-nav-link.active {
    background: linear-gradient(135deg, var(--secondary-color), #ffcc66);
    color: var(--primary-color);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(253, 186, 75, 0.4);
}

.nav-icon {
    font-size: 1rem;
    transition: var(--transition);
}

.dropdown-arrow {
    font-size: 0.8rem;
    margin-left: auto;
    transition: var(--transition);
}

.dropdown.show .dropdown-arrow {
    transform: rotate(180deg);
}

.nav-hover-effect {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.product-nav-link:hover .nav-hover-effect {
    left: 100%;
}

/* Custom Dropdown */
.custom-dropdown {
    background: var(--white);
    border: none;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-heavy);
    padding: 0.5rem 0;
    margin-top: 0.5rem;
    min-width: 200px;
}

.custom-dropdown .dropdown-item {
    padding: 0.75rem 1.5rem;
    color: var(--text-dark);
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    transition: var(--transition);
}

.custom-dropdown .dropdown-item:hover {
    background: linear-gradient(135deg, var(--primary-light), var(--secondary-light));
    color: var(--primary-color);
    padding-left: 2rem;
}

.custom-dropdown .dropdown-item i {
    color: var(--secondary-color);
    width: 16px;
}

/* ===== Products Section ===== */
.products-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);
    position: relative;
}

.section-header {
    text-align: center;
    margin-bottom: 4rem;
}

.header-content {
    max-width: 600px;
    margin: 0 auto;
}

.section-title {
    font-size: 3rem;
    font-weight: 800;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1rem;
    position: relative;
}

.section-subtitle {
    font-size: 1.2rem;
    color: var(--text-light);
    margin-bottom: 2rem;
    line-height: 1.6;
}

.title-decoration {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
}

.decoration-line {
    width: 60px;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--secondary-color), transparent);
}

.decoration-diamond {
    width: 12px;
    height: 12px;
    background: var(--secondary-color);
    transform: rotate(45deg);
    position: relative;
    box-shadow: 0 0 20px rgba(253, 186, 75, 0.5);
}

/* ===== Products Grid ===== */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.product-item {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.product-card {
    background: var(--white);
    border-radius: var(--border-radius);
    overflow: hidden;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.product-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: var(--shadow-heavy);
}

.product-card:hover .card-glow {
    opacity: 1;
}

.card-glow {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
    border-radius: var(--border-radius);
    opacity: 0;
    transition: var(--transition);
    z-index: -1;
}

/* Product Badge */
.product-badge {
    position: absolute;
    top: 1rem;
    left: 1rem;
    z-index: 3;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    padding: 0.4rem 0.8rem;
    overflow: hidden;
}

.new-badge {
    background: linear-gradient(135deg, var(--secondary-color), #ffcc66);
    color: var(--primary-color);
    position: relative;
}

.badge-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
    animation: shine 2s infinite;
}

@keyframes shine {
    0% { left: -100%; }
    100% { left: 100%; }
}

/* Product Image */
.product-image-container {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.product-image {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.product-card:hover .product-image img {
    transform: scale(1.1);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 0, 0, 0.7), rgba(253, 186, 75, 0.3));
    opacity: 0;
    transition: var(--transition);
}

.product-card:hover .image-overlay {
    opacity: 1;
}

/* Product Actions */
.product-actions {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    gap: 0.5rem;
    opacity: 0;
    transition: var(--transition);
    z-index: 4;
}

.product-card:hover .product-actions {
    opacity: 1;
}

.action-btn {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    cursor: pointer;
    transition: var(--transition);
    position: relative;
    text-decoration: none;
}

.view-btn {
    background: linear-gradient(135deg, var(--secondary-color), #ffcc66);
    color: var(--primary-color);
}

.wishlist-btn {
    background: rgba(255, 255, 255, 0.9);
    color: var(--primary-color);
}

.action-btn:hover {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

.btn-tooltip {
    position: absolute;
    bottom: -35px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 0, 0, 0.8);
    color: var(--white);
    padding: 0.3rem 0.6rem;
    border-radius: 4px;
    font-size: 0.7rem;
    white-space: nowrap;
    opacity: 0;
    transition: var(--transition);
}

.action-btn:hover .btn-tooltip {
    opacity: 1;
}

/* Product Content */
.product-content {
    padding: 1.5rem;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.product-category {
    color: var(--secondary-color);
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.5rem;
}

.product-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 0.75rem;
    line-height: 1.3;
}

.product-description {
    color: var(--text-light);
    font-size: 0.95rem;
    line-height: 1.5;
    margin-bottom: 1.5rem;
    flex: 1;
}

.product-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.product-rating .fas.fa-star {
    color: #ddd;
    font-size: 0.9rem;
}

.product-rating .fas.fa-star.filled {
    color: var(--secondary-color);
}

.rating-count {
    color: var(--text-light);
    font-size: 0.8rem;
    margin-left: 0.5rem;
}

.explore-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.6rem 1.2rem;
    background: linear-gradient(135deg, var(--primary-color), #4a0000);
    color: var(--white);
    text-decoration: none;
    border-radius: 25px;
    font-weight: 600;
    font-size: 0.9rem;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.explore-btn:hover {
    background: linear-gradient(135deg, var(--secondary-color), #ffcc66);
    color: var(--primary-color);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(253, 186, 75, 0.4);
}

.explore-btn i {
    transition: var(--transition);
}

.explore-btn:hover i {
    transform: translateX(3px);
}

/* No Products State */
.no-products {
    grid-column: 1 / -1;
    text-align: center;
    padding: 4rem 2rem;
    background: var(--white);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-light);
}

.no-products-icon {
    font-size: 4rem;
    color: var(--text-light);
    margin-bottom: 1.5rem;
}

.no-products h3 {
    color: var(--primary-color);
    font-size: 1.8rem;
    margin-bottom: 1rem;
}

.no-products p {
    color: var(--text-light);
    margin-bottom: 2rem;
}

.back-to-all-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.8rem 2rem;
    background: linear-gradient(135deg, var(--secondary-color), #ffcc66);
    color: var(--primary-color);
    text-decoration: none;
    border-radius: 25px;
    font-weight: 600;
    transition: var(--transition);
}

.back-to-all-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(253, 186, 75, 0.4);
}

/* ===== Responsive Design ===== */
@media (max-width: 768px) {
    .nav-title {
        font-size: 1.5rem;
    }
    
    .category-nav {
        flex-direction: column;
        align-items: center;
    }
    
    .nav-item-wrapper {
        width: 100%;
        max-width: 300px;
    }
    
    .product-nav-link {
        width: 100%;
        justify-content: center;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .products-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .product-actions {
        position: static;
        opacity: 1;
        transform: none;
        justify-content: center;
        margin-top: 1rem;
    }
    
    .image-overlay {
        display: none;
    }
}

@media (max-width: 480px) {
    .category-navigation-wrapper {
        padding: 1.5rem 0;
    }
    
    .products-section {
        padding: 2rem 0;
    }
    
    .section-header {
        margin-bottom: 2rem;
    }
    
    .product-content {
        padding: 1rem;
    }
    
    .product-footer {
        flex-direction: column;
        gap: 1rem;
        align-items: stretch;
    }
    
    .explore-btn {
        justify-content: center;
    }
}

/* Animation delays for staggered effect */
.product-item:nth-child(1) { animation-delay: 0.1s; }
.product-item:nth-child(2) { animation-delay: 0.2s; }
.product-item:nth-child(3) { animation-delay: 0.3s; }
.product-item:nth-child(4) { animation-delay: 0.4s; }
.product-item:nth-child(5) { animation-delay: 0.5s; }
.product-item:nth-child(6) { animation-delay: 0.6s; }
.product-item:nth-child(7) { animation-delay: 0.7s; }
.product-item:nth-child(8) { animation-delay: 0.8s; }
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll) if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 600,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });
    }

    // Enhanced navigation active states
    const currentUrl = window.location.href;
    const navLinks = document.querySelectorAll('.product-nav-link');
    
    navLinks.forEach(link => {
        if (link.href && link.href === currentUrl) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });

    // Smooth dropdown animations
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');
        
        if (toggle && menu) {
            // Show dropdown
            dropdown.addEventListener('show.bs.dropdown', function() {
                toggle.style.background = 'linear-gradient(135deg, var(--secondary-color), #ffcc66)';
                toggle.style.color = 'var(--primary-color)';
                menu.style.transform = 'translateY(-10px)';
                menu.style.opacity = '0';
                
                setTimeout(() => {
                    menu.style.transform = 'translateY(0)';
                    menu.style.opacity = '1';
                }, 10);
            });

            // Hide dropdown
            dropdown.addEventListener('hide.bs.dropdown', function() {
                menu.style.transform = 'translateY(-10px)';
                menu.style.opacity = '0';
                
                setTimeout(() => {
                    if (!toggle.matches(':hover')) {
                        toggle.style.background = '';
                        toggle.style.color = '';
                    }
                }, 150);
            });
        }
    });

    // Wishlist functionality
    const wishlistBtns = document.querySelectorAll('.wishlist-btn');
    wishlistBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const icon = this.querySelector('i');
            const isWishlisted = icon.classList.contains('fas');
            
            if (isWishlisted) {
                icon.classList.remove('fas');
                icon.classList.add('far');
                this.style.background = 'rgba(255, 255, 255, 0.9)';
            } else {
                icon.classList.remove('far');
                icon.classList.add('fas');
                this.style.background = 'linear-gradient(135deg, #ff6b6b, #ee5a24)';
                this.style.color = '#fff';
                
                // Add bounce animation
                this.style.animation = 'bounce 0.6s ease';
                setTimeout(() => {
                    this.style.animation = '';
                }, 600);
            }
        });
    });

    // Intersection Observer for enhanced animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
                
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all product cards
    document.querySelectorAll('.product-card').forEach(card => {
        observer.observe(card);
    });

    // Smooth scroll for anchor links
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

    // Loading animation for images
    const images = document.querySelectorAll('.product-image img');
    images.forEach(img => {
        if (!img.complete) {
            img.style.opacity = '0';
            img.addEventListener('load', function() {
                this.style.transition = 'opacity 0.3s ease';
                this.style.opacity = '1';
            });
        }
    });

    // Add bounce keyframes if not already defined
    if (!document.querySelector('#bounce-keyframes')) {
        const style = document.createElement('style');
        style.id = 'bounce-keyframes';
        style.textContent = `
            @keyframes bounce {
                0%, 20%, 53%, 80%, 100% {
                    transform: scale(1);
                }
                40%, 43% {
                    transform: scale(1.1);
                }
                70% {
                    transform: scale(1.05);
                }
                90% {
                    transform: scale(1.02);
                }
            }
        `;
        document.head.appendChild(style);
    }
});

// Performance optimization: Debounce scroll events
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

// Add scroll-based animations
const handleScroll = debounce(() => {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector('.category-navigation-wrapper');
    
    if (parallax) {
        const speed = scrolled * 0.5;
        parallax.style.transform = `translateY(${speed}px)`;
    }
}, 10);

window.addEventListener('scroll', handleScroll);
</script>
@endpush