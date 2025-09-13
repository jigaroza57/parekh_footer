@extends('frontend/layout')

@section('content')

<!-- Add Google Fonts and Font Awesome -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Lustria:wght@400&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%) !important;
    }

    .blog-hero {
        background: linear-gradient(135deg, #622c2c 0%, #8B4A4A 100%);
        padding: 80px 0 100px;
        position: relative;
        overflow: hidden;
        margin-bottom: -60px;
        z-index: 1;
    }

    .blog-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.08)" points="0,1000 1000,0 1000,1000"/></svg>');
    }

    .blog-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
    }

    .blog-title {
        font-family: 'Lustria', serif;
        font-size: 3rem;
        font-weight: 400;
        margin-bottom: 1.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        line-height: 1.2;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .blog-decorative-img {
        width: 280px;
        max-width: 100%;
        opacity: 0.9;
        filter: brightness(0) invert(1);
        margin-top: 1rem;
    }

    .blog-content {
        position: relative;
        z-index: 2;
        margin-top: 60px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 40px 0;
    }

    .blog-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        overflow: hidden;
        margin-bottom: 2rem;
        border: 1px solid rgba(98, 44, 44, 0.1);
        transition: all 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .blog-image-container {
        position: relative;
        width: 100%;
        height: auto;
        max-height: 600px;
        /* optional, tamari layout ni requirement pramane */
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        background: #f8f9fa;
        /* blank space mate background color */
    }

    .blog-image {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
        /* no cut, no stretch */
        border-radius: 15px;
    }

    .blog-image:hover {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(98, 44, 44, 0.9);
        color: white;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .blog-text-content {
        padding: 2.5rem;
    }

    .blog-meta {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 2rem;
        padding-bottom: 1.5rem;
        border-bottom: 2px solid #f8f9fa;
        flex-wrap: wrap;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #6c757d;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .meta-item i {
        color: #622c2c;
        font-size: 1rem;
    }

    .blog-text {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #2c3e50;
        text-align: justify;
        margin-bottom: 2rem;
        font-family: 'Inter', sans-serif;
    }

    .blog-text::first-letter {
        font-size: 4rem;
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        color: #622c2c;
        float: left;
        line-height: 1;
        margin: 0 0.5rem 0 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .blog-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btn-blog {
        padding: 12px 25px;
        border: none;
        border-radius: 50px;
        font-weight: 500;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
        font-size: 0.95rem;
        cursor: pointer;
    }

    .btn-primary-blog {
        background: linear-gradient(135deg, #622c2c 0%, #8B4A4A 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(98, 44, 44, 0.3);
    }

    .btn-primary-blog:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(98, 44, 44, 0.4);
        color: white;
        text-decoration: none;
    }

    .btn-outline-blog {
        background: transparent;
        color: #622c2c;
        border: 2px solid #622c2c;
    }

    .btn-outline-blog:hover {
        background: #622c2c;
        color: white;
        transform: translateY(-2px);
        text-decoration: none;
    }







    /* Responsive */
    @media (max-width: 768px) {
        .blog-title {
            font-size: 2.2rem;
        }

        .blog-hero {
            padding: 60px 0 80px;
        }

        .blog-text-content {
            padding: 2rem 1.5rem;
        }

        .blog-image-container {
            height: 350px;
        }

        .blog-meta {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }

        .blog-actions {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (max-width: 576px) {

        .blog-hero {
            padding: 40px 0 60px;
            margin-bottom: -40px;
        }

        .blog-image-container {
            max-height: 250px;
            /* smaller height for mobile */
        }

        .blog-content {
            margin-top: 40px;
        }

        .blog-decorative-img {
            width: 220px;
        }
    }

    /* Animation */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .fade-in-delay {
        animation-delay: 0.3s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>


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
<section class="contact-hero" style="background-image: url('images/new/h1_bg-2'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="hero-title">Our Blogs </h1>

            <!-- <p class="hero-subtitle" style="color: white;">We'd love to hear from you. Get in touch with our expert team.</p> -->
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