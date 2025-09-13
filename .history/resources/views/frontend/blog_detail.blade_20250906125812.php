@extends('frontend/layout')

@section('content')

<!-- Add Google Fonts and Font Awesome -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Lustria:wght@400&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
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
        height: 400px;
        overflow: hidden;
    }

    .blog-image {
        width: calc(100% - 30px);
        height: calc(100% - 30px);
        object-fit: cover;
        transition: transform 0.6s ease;
        border-radius: 15px;
        margin: 15px;
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

    .sidebar-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        padding: 2rem;
        margin-bottom: 2rem;
        border: 1px solid rgba(98, 44, 44, 0.08);
        transition: all 0.3s ease;
    }

    .sidebar-card:hover {
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        transform: translateY(-2px);
    }

    .sidebar-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        font-weight: 600;
        color: #622c2c;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .sidebar-content {
        color: #6c757d;
        line-height: 1.6;
    }

    .w-100 {
        width: 100% !important;
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .text-primary {
        color: #622c2c !important;
    }

    /* Contact Items Styling */
    .contact-item i {
        color: #622c2c !important;
        font-size: 1.2rem;
        width: 20px;
    }

    .contact-item strong {
        color: #622c2c;
        font-weight: 600;
    }

    /* Service List Styling */
    .service-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .service-list li {
        padding: 8px 0;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #2c3e50;
        font-weight: 500;
        border-bottom: 1px solid #f1f1f1;
        transition: all 0.3s ease;
    }

    .service-list li:hover {
        padding-left: 10px;
        color: #622c2c;
    }

    .service-list li i {
        color: #622c2c;
        font-size: 0.9rem;
    }

    .service-list li:last-child {
        border-bottom: none;
    }

    /* Feature Items */
    .feature-item {
        display: flex;
        gap: 15px;
        align-items: flex-start;
    }

    .feature-icon {
        background: linear-gradient(135deg, #622c2c 0%, #8B4A4A 100%);
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .feature-content h6 {
        color: #622c2c;
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 1rem;
    }

    .feature-content p {
        margin: 0;
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.4;
    }

    /* Newsletter Form */
    .newsletter-form {
        margin-top: 1rem;
    }

    .newsletter-input {
        border: 2px solid #e9ecef;
        border-radius: 25px;
        padding: 10px 15px;
        transition: all 0.3s ease;
        font-size: 0.9rem;
        width: 100%;
    }

    .newsletter-input:focus {
        border-color: #622c2c;
        box-shadow: 0 0 0 0.2rem rgba(98, 44, 44, 0.15);
        outline: none;
    }

    .newsletter-input::placeholder {
        color: #adb5bd;
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
            height: 250px;
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

<!-- Hero Section -->
<section class="blog-hero">
    <div class="container">
        <div class="blog-hero-content fade-in">
            <h1 class="blog-title">{{ $blog->title }}</h1>
            <img src="{{ asset('images/group-48099402.svg') }}"
                class="blog-decorative-img"
                alt="Decorative Element">
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="blog-content">
    <div class="container">
        <div class="row">
            <!-- Main Blog Content -->
            <div class="col-lg-12 col-md-12">
                <div class="blog-card fade-in">
                    <!-- Blog Image -->
                    <div class="blog-image-container">
                        <img src="{{ asset('images/blog/'.$blog->image) }}"
                            alt="{{ $blog->title }}"
                            class="blog-image">
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
                            <button onclick="likePost()" class="btn-blog btn-primary-blog">
                                <i class="fas fa-heart"></i>
                                Like Article
                            </button>
                            <button onclick="shareArticle()" class="btn-blog btn-outline-blog">
                                <i class="fas fa-share"></i>
                                Share
                            </button>
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