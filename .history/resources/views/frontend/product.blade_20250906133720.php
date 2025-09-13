@extends('frontend/layout')
@section('content')

<style>
/* Custom CSS for Professional Product Catalog */
.hero-section {
    background: linear-gradient(135deg, #581E1E 0%, #8B3A3A 100%);
    padding: 60px 0;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="50" cy="10" r="1" fill="rgba(255,255,255,0.03)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-title {
    color: white;
    font-size: 3.5rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.hero-subtitle {
    color: rgba(255,255,255,0.9);
    font-size: 1.3rem;
    text-align: center;
    margin-bottom: 40px;
    font-weight: 300;
}

/* Navigation Styles */
.category-nav {
    background: white;
    border-radius: 50px;
    padding: 20px 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin: -30px auto 60px;
    max-width: fit-content;
    position: relative;
    z-index: 3;
    border: 1px solid rgba(88, 30, 30, 0.1);
}

.nav-item2 {
    margin: 0 15px;
    position: relative;
}

.nav-link2 {
    color: #581E1E;
    font-size: 18px;
    font-weight: 600;
    text-decoration: none;
    padding: 12px 20px;
    border-radius: 25px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.nav-link2:hover, .nav-link2.active {
    background: linear-gradient(135deg, #581E1E, #8B3A3A);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(88, 30, 30, 0.3);
}

.nav-link2::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.nav-link2:hover::before {
    left: 100%;
}

/* Dropdown Styles */
.dropdown-menu {
    border: none;
    border-radius: 15px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    padding: 15px 0;
    margin-top: 10px;
    background: white;
    backdrop-filter: blur(10px);
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

/* Product Grid Styles */
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

.product-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(0,0,0,0.05);
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}

.product-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(88, 30, 30, 0.1), rgba(139, 58, 58, 0.1));
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
}

.product-card:hover::before {
    opacity: 1;
}

.product-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 25px 50px rgba(88, 30, 30, 0.2);
}

.product-image {
    position: relative;
    overflow: hidden;
    height: 280px;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.4s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.1);
}

.product-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: linear-gradient(135deg, #581E1E, #8B3A3A);
    color: white;
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
    color: white;
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
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.explore-btn:hover::before {
    left: 100%;
}

.explore-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(88, 30, 30, 0.3);
    color: white;
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
        flex-direction: column;
        padding: 20px;
        border-radius: 20px;
    }
    
    .nav-item2 {
        margin: 5px 0;
        text-align: center;
    }
    
    .product-card {
        margin-bottom: 20px;
    }
}

/* Loading Animation */
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

/* Stagger animation for cards */
.product-card:nth-child(1) { animation-delay: 0.1s; }
.product-card:nth-child(2) { animation-delay: 0.2s; }
.product-card:nth-child(3) { animation-delay: 0.3s; }
.product-card:nth-child(4) { animation-delay: 0.4s; }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Our Products</h1>
        <p class="hero-subtitle">Discover our premium collection of carefully curated products</p>
    </div>
</section>

<!-- Category Navigation -->
<div class="container">
    <div class="category-nav d-flex flex-wrap justify-content-center align-items-center">
        <!-- All Category -->
        <div class="nav-item2">
            <a href="{{ route('frontend.product') }}" class="nav-link2 active">
                All Products
            </a>
        </div>

        <!-- Dynamic Category Dropdowns -->
        @foreach($categories as $category)
        <div class="nav-item2 dropdown">
            <span class="nav-link2 dropdown-toggle" id="dropdownMenu{{ $category->id }}" 
                  data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
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
        <h2 class="section-title">Featured Products</h2>
        <p class="section-subtitle">Explore our handpicked selection of quality products</p>
        
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="product-card fade-in">
                    <!-- <div class="product-badge">New</div> -->
                    <div class="product-image">
                        <a href="{{ route('frontend.product_detail',['id'=>$product->id]) }}">
                            <img src="{{ asset('images/product/'.$product->image) }}" alt="{{ $product->name }}">
                        </a>
                    </div>
                    <div class="product-content">
                        <h4 class="product-title">{{ $product->name }}</h4>
                        <p class="product-description">
                            Discover the amazing features and quality of this premium product.
                        </p>
                        <a href="{{ route('frontend.product_detail',['id'=>$product->id]) }}" class="explore-btn">
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
    // Enhanced navigation active state management
    document.addEventListener('DOMContentLoaded', function() {
        // Handle navigation active states
        document.querySelectorAll(".nav-link").forEach((link) => {
            if (link.href === window.location.href) {
                link.classList.add("active");
                link.setAttribute("aria-current", "page");
            }
        });

        // Add fade-in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.product-card').forEach(card => {
            observer.observe(card);
        });

        // Add smooth hover effects
        document.querySelectorAll('.product-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Enhanced dropdown interactions
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.addEventListener('show.bs.dropdown', function() {
                this.querySelector('.dropdown-toggle').style.background = 'linear-gradient(135deg, #581E1E, #8B3A3A)';
                this.querySelector('.dropdown-toggle').style.color = 'white';
            });
            
            dropdown.addEventListener('hide.bs.dropdown', function() {
                setTimeout(() => {
                    if (!this.querySelector('.dropdown-toggle').matches(':hover')) {
                        this.querySelector('.dropdown-toggle').style.background = '';
                        this.querySelector('.dropdown-toggle').style.color = '#581E1E';
                    }
                }, 100);
            });
        });
    });
</script>
@endpush