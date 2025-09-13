@extends('frontend/layout')

@section('content')

<!-- Add Google Fonts and Font Awesome -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Lustria:wght@400&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">





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
            <h1 class="hero-title">Get In Touch By Social Content</h1>

            <p class="hero-subtitle" style="color: white;">We'd love to hear from you. Get in touch with our expert team.</p>
        </div>
    </div>
</section>


<!-- Hero Section -->
<!-- <section class="blog-hero">
    <div class="container">
        <div class="blog-hero-content fade-in">
            <h1 class="blog-title">{{ $blog->title }}</h1>
           
        </div>
    </div>
</section> -->

<!-- Main Content -->
<section class="blog-content">
    <div class="container">
        <div class="row">
            <!-- Main Blog Content -->
            <div class="col-lg-12 col-md-12">
                <div class="blog-card fade-in">
                    <!-- Blog Image -->
                    <div class="blog-image-container">
                        @if(!empty($blog->image) && file_exists(public_path('images/blog/'.$blog->image)))
                        <img src="{{ asset('images/blog/'.$blog->image) }}"
                            alt="{{ $blog->title }}"
                            class="blog-image"
                            loading="lazy">
                        @else
                        <img src="{{ asset('images/default-blog.jpg') }}"
                            alt="Default Blog Image"
                            class="blog-image"
                            loading="lazy">
                        @endif

                        <div class="image-overlay">
                            <i class="fas fa-image me-2"></i>
                            Featured Image
                        </div>
                    </div>

                    <!-- Blog Content -->
                    <div class="blog-text-content">
                        <!-- Blog Meta -->
                        <div class="blog-meta">
                            <div class="meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span>{{ isset($blog->created_at) ? $blog->created_at->format('M d, Y') : 'September 6, 2025' }}</span>
                            </div>
                            @if(isset($blog->author))
                            <div class="meta-item">
                                <i class="fas fa-user"></i>
                                <span>{{ $blog->author }}</span>
                            </div>
                            @endif
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span>{{ ceil(str_word_count(strip_tags($blog->detail)) / 200) }} min read</span>
                            </div>
                            @if(isset($blog->views))
                            <div class="meta-item">
                                <i class="fas fa-eye"></i>
                                <span>{{ number_format($blog->views) }} views</span>
                            </div>
                            @endif
                        </div>

                        <!-- Blog Text -->
                        <div class="blog-text">
                            {{ $blog->detail }}
                        </div>

                        <!-- Action Buttons -->
                        <div class="blog-actions">

                            <a href="javascript:history.back()" class="btn-blog btn-outline-blog">
                                <i class="fas fa-arrow-left"></i>
                                Back to Blog
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<script>
    // Initialize animations
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.fade-in');
        elements.forEach((el, index) => {
            setTimeout(() => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, index * 150);
        });
    });

    // Like post function
    function likePost() {
        const btn = event.target.closest('.btn-primary-blog');
        const icon = btn.querySelector('i');

        if (icon.classList.contains('fas')) {
            icon.classList.remove('fas');
            icon.classList.add('far');
            btn.innerHTML = '<i class="far fa-heart"></i> Like Article';
        } else {
            icon.classList.remove('far');
            icon.classList.add('fas');
            btn.innerHTML = '<i class="fas fa-heart"></i> Liked!';
            btn.style.background = '#dc3545';
        }
    }

    // Share article function
    function shareArticle() {
        if (navigator.share) {
            navigator.share({
                title: '{{ $blog->title }}',
                url: window.location.href
            });
        } else {
            // Copy to clipboard
            const tempInput = document.createElement('input');
            tempInput.value = window.location.href;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            alert('Link copied to clipboard!');
        }
    }
</script>

@endsection