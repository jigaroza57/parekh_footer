@extends('frontend/layout')
@section('content')

<style>

    body
/* Professional Product Detail Styles */
.product-container {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    min-height: 100vh;
    padding: 2rem 0;
}

.product-wrapper {
    background: white;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.1);
    overflow: hidden;
    margin: 2rem 0;
    transform: translateY(20px);
    opacity: 0;
    animation: fadeInUp 0.8s ease forwards;
}

@keyframes fadeInUp {
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Image Gallery Styles */
.image-gallery {
    position: relative;
    padding: 2rem;
    background: linear-gradient(145deg, #ffffff, #f8f9fa);
}

.main-image-container {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    margin-bottom: 1rem;
}

.main-image {
    width: 100%;
    height: 500px;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    cursor: zoom-in;
}

.main-image:hover {
    transform: scale(1.05);
}

.thumbnail-container {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 1rem;
}

.thumbnail {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    border: 3px solid transparent;
    opacity: 0.7;
}

.thumbnail:hover, .thumbnail.active {
    transform: scale(1.1);
    opacity: 1;
    border-color: #5a1010;
    box-shadow: 0 8px 25px rgba(90, 16, 16, 0.3);
}

/* Mobile Carousel Styles */
.mobile-carousel {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
}

.carousel-item img {
    height: 300px;
    object-fit: cover;
}

.carousel-indicators {
    bottom: 10px;
}

.carousel-indicators li {
    background-color: #5a1010;
    border-radius: 50%;
    width: 12px;
    height: 12px;
}

/* Product Info Styles */
.product-info {
    padding: 3rem 2rem;
    background: white;
}

.product-title {
    color: #2c3e50;
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.2;
    background: linear-gradient(45deg, #5a1010, #8b2635);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: slideInRight 0.8s ease 0.2s both;
}

@keyframes slideInRight {
    from {
        transform: translateX(50px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.rating-section {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 2rem;
    animation: slideInRight 0.8s ease 0.3s both;
}

.stars {
    width: 120px;
    height: auto;
    filter: drop-shadow(0 2px 4px rgba(255, 193, 7, 0.3));
}

.product-specs {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 15px;
    padding: 2rem;
    margin: 2rem 0;
    border: 1px solid rgba(90, 16, 16, 0.1);
    animation: slideInLeft 0.8s ease 0.4s both;
}

@keyframes slideInLeft {
    from {
        transform: translateX(-50px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.spec-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    padding: 0.5rem 0;
    border-bottom: 1px solid rgba(90, 16, 16, 0.1);
}

.spec-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.spec-label {
    font-weight: 600;
    color: #5a1010;
    min-width: 100px;
    font-size: 1.1rem;
}

.spec-value {
    color: #2c3e50;
    font-size: 1.1rem;
    font-weight: 500;
}

.product-description {
    color: #555;
    font-size: 1.1rem;
    line-height: 1.7;
    margin: 2rem 0;
    padding: 1.5rem;
    background: rgba(90, 16, 16, 0.02);
    border-left: 4px solid #5a1010;
    border-radius: 0 10px 10px 0;
    animation: slideInUp 0.8s ease 0.5s both;
}

@keyframes slideInUp {
    from {
        transform: translateY(30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* CTA Button Styles */
.cta-section {
    text-align: center;
    margin: 3rem 0;
    animation: bounceIn 1s ease 0.6s both;
}

@keyframes bounceIn {
    0% {
        transform: scale(0.3);
        opacity: 0;
    }
    50% {
        transform: scale(1.05);
    }
    70% {
        transform: scale(0.9);
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

.cta-button {
    background: linear-gradient(45deg, #5a1010, #8b2635);
    color: white;
    border: none;
    padding: 1rem 1rem;
    font-size: 1.2rem;
    font-weight: 600;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    box-shadow: 0 10px 30px rgba(90, 16, 16, 0.3);
    position: relative;
    overflow: hidden;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(90, 16, 16, 0.4);
    background: linear-gradient(45deg, #8b2635, #5a1010);
}

.cta-button:active {
    transform: translateY(-1px);
}

.cta-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.cta-button:hover::before {
    left: 100%;
}

/* Success Alert Styles */
.success-alert {
    background: linear-gradient(45deg, #28a745, #20c997);
    color: white;
    border: none;
    border-radius: 10px;
    padding: 1rem;
    margin: 1rem 0;
    box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
    animation: slideInDown 0.5s ease;
}

@keyframes slideInDown {
    from {
        transform: translateY(-30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Modal Styles */
.modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 30px 80px rgba(0,0,0,0.2);
    overflow: hidden;
}

.modal-header {
    background: linear-gradient(45deg, #5a1010, #8b2635);
    color: white;
    border: none;
    padding: 1.5rem 2rem;
}

.modal-title {
    font-weight: 600;
    font-size: 1.3rem;
}

.modal-body {
    padding: 2rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 0.5rem;
    display: block;
}

.form-control {
    border: 2px solid #e9ecef;
    border-radius: 10px;
    padding: 12px 15px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.form-control:focus {
    border-color: #5a1010;
    box-shadow: 0 0 0 3px rgba(90, 16, 16, 0.1);
    background: white;
}

.submit-btn {
    background: linear-gradient(45deg, #5a1010, #8b2635);
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
    width: 100%;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(90, 16, 16, 0.3);
}

/* Responsive Design */
@media (max-width: 768px) {
    .product-wrapper {
        margin: 1rem;
        border-radius: 15px;
    }
    
    .product-info {
        padding: 2rem 1rem;
    }
    
    .image-gallery {
        padding: 1rem;
    }
    
    .main-image {
        height: 300px;
    }
    
    .product-specs {
        margin: 1rem 0;
        padding: 1.5rem;
    }
    
    .thumbnail {
        width: 60px;
        height: 60px;
    }
}

/* Loading Animation */
.loading {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #5a1010;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Pulse animation for interactive elements */
.pulse {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(90, 16, 16, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(90, 16, 16, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(90, 16, 16, 0);
    }
}
</style>

<div class="product-container">
    <div class="container">
        <div class="product-wrapper">
            <div class="row g-0">
                <!-- Mobile Carousel -->
                <div class="col-12 d-md-none">
                    <div id="mobileCarousel" class="carousel slide mobile-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @if($product->images)
                                @foreach(explode('|', $product->images) as $index => $img)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ asset('images/product/'.$img) }}" class="d-block w-100" alt="Product Image {{ $index + 1 }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="carousel-indicators">
                            @if($product->images)
                                @foreach(explode('|', $product->images) as $index => $img)
                                    <li data-bs-target="#mobileCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Desktop Image Gallery -->
                <div class="col-md-6 d-none d-md-block">
                    <div class="image-gallery">
                        <div class="main-image-container">
                            <img id="mainProductImage" src="{{ asset('images/product/'.$product->image) }}" class="main-image" alt="Main Product Image">
                        </div>
                        
                        <div class="thumbnail-container">
                            @if($product->images)
                                @foreach(explode('|', $product->images) as $index => $img)
                                    <img src="{{ asset('images/product/'.$img) }}" 
                                         class="thumbnail {{ $index == 0 ? 'active' : '' }}" 
                                         alt="Thumbnail {{ $index + 1 }}"
                                         onclick="changeMainImage(this)">
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="col-md-6">
                    <div class="product-info">
                        <h1 class="product-title">{{ $product->name }}</h1>
                        
                        <div class="rating-section">
                            <img src="{{ asset('images/Stars.svg') }}" class="stars" alt="5 Star Rating">
                            <span class="text-muted">Premium Quality</span>
                        </div>

                        <div class="product-specs">
                            <div class="spec-item">
                                <span class="spec-label">Purity:</span>
                                <span class="spec-value">{{ $product->karat }} KT Gold</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Weight:</span>
                                <span class="spec-value">{{ $product->weight }}</span>
                            </div>
                        </div>

                        <div class="product-description">
                            <p>{{ $product->description }}</p>
                        </div>

                        @if(session('message'))
                            <div class="alert success-alert">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="cta-section">
                            <button class="cta-button pulse" type="button" data-bs-toggle="modal" data-bs-target="#detailsModal">
                                <i class="fas fa-gem me-2"></i>
                                Get More Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Enhanced Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">
                    <i class="fas fa-user-edit me-2"></i>
                    Enter Your Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="detailsForm" action="{{ route('frontend.inquiry', ['id'=>$product->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">
                            <i class="fas fa-user me-2"></i>Full Name
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="mobile">
                            <i class="fas fa-phone me-2"></i>Mobile Number
                        </label>
                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="city">
                            <i class="fas fa-map-marker-alt me-2"></i>City
                        </label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">
                            <i class="fas fa-comment me-2"></i>Message
                        </label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us about your requirements..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane me-2"></i>
                        Submit Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>

<script>
// Enhanced Image Gallery
function changeMainImage(thumbnail) {
    const mainImage = document.getElementById('mainProductImage');
    const thumbnails = document.querySelectorAll('.thumbnail');
    
    // Remove active class from all thumbnails
    thumbnails.forEach(thumb => thumb.classList.remove('active'));
    
    // Add active class to clicked thumbnail
    thumbnail.classList.add('active');
    
    // Change main image with fade effect
    mainImage.style.opacity = '0';
    
    setTimeout(() => {
        mainImage.src = thumbnail.src;
        mainImage.style.opacity = '1';
    }, 200);
}

// Mobile Carousel Auto-play
document.addEventListener('DOMContentLoaded', function() {
    const mobileCarousel = document.getElementById('mobileCarousel');
    if (mobileCarousel) {
        const carousel = new bootstrap.Carousel(mobileCarousel, {
            interval: 3000,
            wrap: true,
            touch: true
        });
    }
});

// Form Validation and Animation
document.getElementById('detailsForm').addEventListener('submit', function(e) {
    const submitBtn = this.querySelector('.submit-btn');
    const originalText = submitBtn.innerHTML;
    
    // Add loading state
    submitBtn.innerHTML = '<span class="loading"></span> Submitting...';
    submitBtn.disabled = true;
    
    // Reset after 3 seconds if form doesn't submit
    setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 3000);
});

// Add smooth scroll behavior
document.documentElement.style.scrollBehavior = 'smooth';

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animationPlayState = 'running';
        }
    });
}, observerOptions);

// Observe all animated elements
document.querySelectorAll('[style*="animation"]').forEach(el => {
    el.style.animationPlayState = 'paused';
    observer.observe(el);
});

// Image zoom effect on hover
const mainImage = document.getElementById('mainProductImage');
if (mainImage) {
    mainImage.addEventListener('mouseenter', function() {
        this.style.cursor = 'zoom-in';
    });
    
    mainImage.addEventListener('click', function() {
        // You can add lightbox functionality here
        const modal = document.createElement('div');
        modal.className = 'image-zoom-modal';
        modal.innerHTML = `
            <div class="zoom-backdrop" onclick="this.parentElement.remove()">
                <img src="${this.src}" style="max-width: 90vw; max-height: 90vh; object-fit: contain;">
                <button class="zoom-close" onclick="this.parentElement.parentElement.remove()">×</button>
            </div>
        `;
        modal.style.cssText = `
            position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
            background: rgba(0,0,0,0.9); z-index: 9999; display: flex; 
            align-items: center; justify-content: center; cursor: zoom-out;
        `;
        document.body.appendChild(modal);
    });
}

// Add parallax effect to background
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector('.product-container');
    const speed = scrolled * 0.5;
    
    if (parallax) {
        parallax.style.backgroundPosition = `center ${speed}px`;
    }
});

// Mobile touch gestures for image gallery
let startX = null;
let startY = null;

if (window.innerWidth <= 768) {
    const gallery = document.querySelector('.image-gallery');
    if (gallery) {
        gallery.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
        });

        gallery.addEventListener('touchmove', function(e) {
            if (!startX || !startY) return;
            
            const diffX = e.touches[0].clientX - startX;
            const diffY = e.touches[0].clientY - startY;
            
            if (Math.abs(diffX) > Math.abs(diffY)) {
                e.preventDefault(); // Prevent scrolling
            }
        });

        gallery.addEventListener('touchend', function(e) {
            if (!startX || !startY) return;
            
            const diffX = e.changedTouches[0].clientX - startX;
            
            if (Math.abs(diffX) > 50) {
                const thumbnails = Array.from(document.querySelectorAll('.thumbnail'));
                const activeThumbnail = document.querySelector('.thumbnail.active');
                const activeIndex = thumbnails.indexOf(activeThumbnail);
                
                if (diffX > 0 && activeIndex > 0) {
                    // Swipe right - previous image
                    changeMainImage(thumbnails[activeIndex - 1]);
                } else if (diffX < 0 && activeIndex < thumbnails.length - 1) {
                    // Swipe left - next image
                    changeMainImage(thumbnails[activeIndex + 1]);
                }
            }
            
            startX = null;
            startY = null;
        });
    }
}
</script>

<style>
/* Additional CSS for image zoom modal */
.image-zoom-modal {
    animation: fadeIn 0.3s ease;
}

.zoom-backdrop {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.zoom-close {
    position: absolute;
    top: 20px;
    right: 30px;
    background: rgba(255,255,255,0.2);
    border: none;
    color: white;
    font-size: 30px;
    cursor: pointer;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.zoom-close:hover {
    background: rgba(255,255,255,0.3);
    transform: scale(1.1);
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Custom scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, #5a1010, #8b2635);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(45deg, #8b2635, #5a1010);
}
</style>
@endpush