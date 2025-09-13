@extends('frontend/layout')

@section('content')

<!-- Add Google Fonts and Font Awesome -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        overflow-x: hidden;
    }

    /* Modern Hero Section */
    .blog-hero {
        min-height: 70vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .blog-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(255, 118, 117, 0.3) 0%, transparent 50%),
            radial-gradient(circle at 40% 80%, rgba(255, 177, 153, 0.2) 0%, transparent 50%);
        animation: gradientShift 8s ease-in-out infinite alternate;
    }

    @keyframes gradientShift {
        0% { opacity: 0.8; }
        100% { opacity: 1; }
    }

    .floating-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .shape {
        position: absolute;
        opacity: 0.1;
        animation: float 6s ease-in-out infinite;
    }

    .shape:nth-child(1) {
        top: 20%;
        left: 10%;
        width: 80px;
        height: 80px;
        background: white;
        border-radius: 50%;
        animation-delay: 0s;
    }

    .shape:nth-child(2) {
        top: 60%;
        right: 15%;
        width: 120px;
        height: 120px;
        background: rgba(255,255,255,0.2);
        transform: rotate(45deg);
        animation-delay: 2s;
    }

    .shape:nth-child(3) {
        bottom: 20%;
        left: 60%;
        width: 60px;
        height: 60px;
        background: white;
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        animation-delay: 4s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(10deg); }
    }

    .hero-content {
        position: relative;
        z-index: 10;
        text-align: center;
        color: white;
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .blog-category {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 8px 20px;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 2rem;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .hero-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 700;
        margin-bottom: 1.5rem;
        line-height: 1.2;
        text-shadow: 2px 4px 6px rgba(0, 0, 0, 0.3);
        background: linear-gradient(135deg, #ffffff 0%, #f8f9ff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .scroll-indicator {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        color: rgba(255, 255, 255, 0.8);
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
        40% { transform: translateX(-50%) translateY(-10px); }
        60% { transform: translateX(-50%) translateY(-5px); }
    }

    /* Main Content Area */
    .main-content {
        margin-top: -100px;
        position: relative;
        z-index: 5;
    }

    .content-wrapper {
        background: white;
        border-radius: 30px 30px 0 0;
        box-shadow: 0 -10px 50px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .content-header {
        padding: 60px 0 40px;
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        text-align: center;
    }

    .article-meta {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 10px 20px;
        background: white;
        border-radius: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        font-size: 0.9rem;
        font-weight: 500;
        color: #64748b;
        transition: transform 0.3s ease;
    }

    .meta-item:hover {
        transform: translateY(-2px);
    }

    .meta-item i {
        color: #667eea;
        font-size: 1rem;
    }

    /* Image Section */
    .image-section {
        padding: 0 40px 40px;
        background: white;
    }

    .image-container {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        transition: transform 0.5s ease;
    }

    .image-container:hover {
        transform: translateY(-10px);
    }

    .featured-image {
        width: 100%;
        height: 500px;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .image-container:hover .featured-image {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        padding: 40px 30px 20px;
        color: white;
    }

    /* Content Section */
    .content-section {
        padding: 60px 40px;
        background: white;
    }

    .content-grid {
        display: grid;
        grid-template-columns: 1fr 300px;
        gap: 4rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .main-article {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #374151;
    }

    .article-content {
        margin-bottom: 3rem;
    }

    .article-content::first-letter {
        font-size: 4.5rem;
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: #667eea;
        float: left;
        line-height: 1;
        margin: 0 15px 0 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .article-content p {
        margin-bottom: 1.5rem;
        text-align: justify;
    }

    /* Sidebar */
    .sidebar {
        position: sticky;
        top: 2rem;
        height: fit-content;
    }

    .sidebar-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-radius: 20px;
        padding: 30px;
        margin-bottom: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
    }

    .sidebar-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #1e293b;
    }

    .tags-container {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .tag {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .tag:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        color: white;
        text-decoration: none;
    }

    /* Action Buttons */
    .article-actions {
        display: flex;
        gap: 1rem;
        margin-top: 3rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-modern {
        padding: 15px 30px;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
        font-size: 1rem;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .btn-modern::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .btn-modern:hover::before {
        left: 100%;
    }

    .btn-primary-modern {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    }

    .btn-primary-modern:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        color: white;
        text-decoration: none;
    }

    .btn-outline-modern {
        background: transparent;
        color: #667eea;
        border: 2px solid #667eea;
    }

    .btn-outline-modern:hover {
        background: #667eea;
        color: white;
        transform: translateY(-3px);
        text-decoration: none;
    }

    /* Progress Bar */
    .reading-progress {
        position: fixed;
        top: 0;
        left: 0;
        width: 0;
        height: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        z-index: 1000;
        transition: width 0.3s ease;
    }

    /* Social Share */
    .social-share {
        text-align: center;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 1px solid #e2e8f0;
    }

    .share-title {
        font-weight: 600;
        margin-bottom: 1rem;
        color: #1e293b;
    }

    .social-buttons {
        display: flex;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .social-btn {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }

    .social-btn:hover {
        transform: translateY(-3px);
        text-decoration: none;
        color: white;
    }

    .social-btn.facebook { background: #3b5998; box-shadow: 0 5px 15px rgba(59, 89, 152, 0.3); }
    .social-btn.twitter { background: #1da1f2; box-shadow: 0 5px 15px rgba(29, 161, 242, 0.3); }
    .social-btn.linkedin { background: #0077b5; box-shadow: 0 5px 15px rgba(0, 119, 181, 0.3); }
    .social-btn.whatsapp { background: #25d366; box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3); }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .content-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        
        .sidebar {
            position: static;
        }
    }

    @media (max-width: 768px) {
        .blog-hero {
            min-height: 60vh;
        }
        
        .main-content {
            margin-top: -60px;
        }
        
        .image-section, .content-section {
            padding: 30px 20px;
        }
        
        .featured-image {
            height: 300px;
        }
        
        .article-meta {
            gap: 1rem;
        }
        
        .meta-item {
            padding: 8px 15px;
            font-size: 0.8rem;
        }
        
        .article-actions {
            flex-direction: column;
            align-items: center;
        }
        
        .btn-modern {
            width: 100%;
            max-width: 300px;
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .hero-content {
            padding: 0 15px;
        }
        
        .content-header {
            padding: 40px 0 30px;
        }
        
        .sidebar-card {
            padding: 20px;
        }
        
        .social-buttons {
            gap: 0.5rem;
        }
        
        .social-btn {
            width: 45px;
            height: 45px;
            font-size: 1.1rem;
        }
    }

    /* Animation Classes */
    .fade-in-up {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .fade-in-left {
        opacity: 0;
        transform: translateX(-30px);
        animation: fadeInLeft 0.8s ease forwards;
    }

    .fade-in-right {
        opacity: 0;
        transform: translateX(30px);
        animation: fadeInRight 0.8s ease forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<!-- Reading Progress Bar -->
<div class="reading-progress" id="reading-progress"></div>

<!-- Hero Section -->
<section class="blog-hero">
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="container">
        <div class="hero-content fade-in-up">
            <div class="blog-category">Blog Article</div>
            <h1 class="hero-title">{{ $blog->title }}</h1>
            <p class="hero-subtitle">Discover insights and stories that inspire</p>
        </div>
    </div>
    
    <div class="scroll-indicator">
        <span style="font-size: 0.8rem;">Scroll Down</span>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- Main Content -->
<div class="main-content">
    <div class="content-wrapper">
        
        <!-- Content Header -->
        <div class="content-header">
            <div class="container">
                <div class="article-meta fade-in-up" style="animation-delay: 0.2s;">
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
            </div>
        </div>

        <!-- Featured Image -->
        <div class="image-section">
            <div class="container">
                <div class="image-container fade-in-up" style="animation-delay: 0.4s;">
                    @if(!empty($blog->image) && file_exists(public_path('images/blog/'.$blog->image)))
                        <img src="{{ asset('images/blog/'.$blog->image) }}" 
                             alt="{{ $blog->title }}" 
                             class="featured-image"
                             loading="lazy">
                    @else
                        <img src="{{ asset('images/default-blog.jpg') }}" 
                             alt="Default Blog Image" 
                             class="featured-image"
                             loading="lazy">
                    @endif
                    <div class="image-overlay">
                        <h2 style="font-size: 1.2rem; margin: 0;">{{ $blog->title }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article Content -->
        <div class="content-section">
            <div class="container">
                <div class="content-grid">
                    
                    <!-- Main Article -->
                    <div class="main-article fade-in-left" style="animation-delay: 0.6s;">
                        <div class="article-content">
                            {!! nl2br(e($blog->detail)) !!}
                        </div>
                        
                        <!-- Social Share -->
                        <div class="social-share">
                            <h3 class="share-title">Share this article</h3>
                            <div class="social-buttons">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                                   target="_blank" class="social-btn facebook" title="Share on Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}" 
                                   target="_blank" class="social-btn twitter" title="Share on Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" 
                                   target="_blank" class="social-btn linkedin" title="Share on LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($blog->title . ' - ' . request()->url()) }}" 
                                   target="_blank" class="social-btn whatsapp" title="Share on WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="article-actions">
                            <a href="javascript:history.back()" class="btn-modern btn-outline-modern">
                                <i class="fas fa-arrow-left"></i>
                                Back to Blog
                            </a>
                            <button onclick="likeArticle()" class="btn-modern btn-primary-modern" id="like-btn">
                                <i class="far fa-heart"></i>
                                Like Article
                            </button>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="sidebar fade-in-right" style="animation-delay: 0.8s;">
                        
                        <!-- Quick Info -->
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Article Info</h3>
                            <div style="display: flex; flex-direction: column; gap: 1rem;">
                                <div style="display: flex; align-items: center; gap: 0.5rem;">
                                    <i class="fas fa-stopwatch" style="color: #667eea;"></i>
                                    <span style="font-size: 0.9rem; color: #64748b;">{{ ceil(str_word_count(strip_tags($blog->detail)) / 200) }} minutes read</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.5rem;">
                                    <i class="fas fa-text-height" style="color: #667eea;"></i>
                                    <span style="font-size: 0.9rem; color: #64748b;">{{ str_word_count(strip_tags($blog->detail)) }} words</span>
                                </div>
                                @if(isset($blog->views))
                                <div style="display: flex; align-items: center; gap: 0.5rem;">
                                    <i class="fas fa-chart-line" style="color: #667eea;"></i>
                                    <span style="font-size: 0.9rem; color: #64748b;">{{ number_format($blog->views) }} views</span>
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Tags (if available) -->
                        @if(isset($blog->tags) && !empty($blog->tags))
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Tags</h3>
                            <div class="tags-container">
                                @foreach(explode(',', $blog->tags) as $tag)
                                    <a href="#" class="tag">{{ trim($tag) }}</a>
                                @endforeach
                            </div>
                        </div>
                        @else
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Related Topics</h3>
                            <div class="tags-container">
                                <a href="#" class="tag">Lifestyle</a>
                                <a href="#" class="tag">Tips</a>
                                <a href="#" class="tag">Inspiration</a>
                                <a href="#" class="tag">Guide</a>
                            </div>
                        </div>
                        @endif

                        <!-- Quick Actions -->
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Quick Actions</h3>
                            <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                                <button onclick="printArticle()" style="background: #f8f9fa; border: 1px solid #e2e8f0; padding: 10px 15px; border-radius: 10px; cursor: pointer; transition: all 0.3s ease;">
                                    <i class="fas fa-print"></i> Print Article
                                </button>
                                <button onclick="bookmarkArticle()" style="background: #f8f9fa; border: 1px solid #e2e8f0; padding: 10px 15px; border-radius: 10px; cursor: pointer; transition: all 0.3s ease;">
                                    <i class="fas fa-bookmark"></i> Bookmark
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize animations with intersection observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0) translateX(0)';
            }
        });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
        observer.observe(el);
    });

    // Reading progress bar
    updateReadingProgress();
    window.addEventListener('scroll', updateReadingProgress);
});

function updateReadingProgress() {
    const article = document.querySelector('.article-content');
    if (!article) return;
    
    const articleTop = article.offsetTop;
    const articleHeight = article.offsetHeight;
    const windowTop = window.pageYOffset;
    const windowHeight = window.innerHeight;
    
    const progress = Math.min(100, Math.max(0, 
        ((windowTop + windowHeight - articleTop) / articleHeight) * 100
    ));
    
    document.getElementById('reading-progress').style.width = progress + '%';
}

function likeArticle() {
    const btn = document.getElementById('like-btn');
    const icon = btn.querySelector('i');
    
    if (icon.classList.contains('far')) {
        icon.classList.remove('far');
        icon.classList.add('fas');
        btn.innerHTML = '<i class="fas fa-heart"></i> Liked!';
        btn.style.background = 'linear-gradient(135deg, #ef4444 0%, #dc2626 100%)';
        
        // Add animation
        btn.style.transform = 'scale(1.1)';
        setTimeout(() => {
            btn.style.transform = 'scale(1)';
        }, 200);
    } else {
        icon.classList.remove('fas');
        icon.classList.add('far');
        btn.innerHTML = '<i class="far fa-heart"></i> Like Article';
        btn.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
    }
}

function printArticle() {
    window.print();
}

function bookmarkArticle() {
    // Simple bookmark functionality
    if (typeof(Storage) !== "undefined") {
        const bookmarks = JSON.parse(localStorage.getItem('bookmarkedArticles') || '[]');
        const currentUrl = window.location.href;
        const title = document.querySelector('.hero-title').textContent;
        
        if (!bookmarks.find(b => b.url === currentUrl)) {
            bookmarks.push({ url: currentUrl, title: title, date: new Date() });
            localStorage.setItem('bookmarkedArticles', JSON.stringify(bookmarks));
            alert('Article bookmarked successfully!');
        } else {
            alert('Article already bookmarked!');
        }
    }
}

// Smooth scrolling for anchor links
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

// Add hover effects to sidebar buttons
document.querySelectorAll('.sidebar-card button').forEach(btn => {
    btn.addEventListener('mouseenter', function() {
        this.style.background = '#667eea';
        this.style.color = 'white';
        this.style.transform = 'translateY(-2px)';
        this.style.boxShadow = '0 5px 15px rgba(102, 126, 234, 0.3)';
    });
    
    btn.addEventListener('mouseleave', function() {
        this.style.background = '#f8f9fa';
        this.style.color = '#374151';
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = 'none';
    });
});

// Parallax effect for floating shapes
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const shapes = document.querySelectorAll('.shape');
    
    shapes.forEach((shape, index) => {
        const speed = (index + 1) * 0.1;
        shape.style.transform = `translateY(${scrolled * speed}px)`;
    });
});

// Auto-hide reading progress when not in article
window.addEventListener('scroll', function() {
    const article = document.querySelector('.article-content');
    const progressBar = document.getElementById('reading-progress');
    
    if (!article) return;
    
    const articleRect = article.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    
    if (articleRect.bottom < 0 || articleRect.top > windowHeight) {
        progressBar.style.opacity = '0.3';
    } else {
        progressBar.style.opacity = '1';
    }
});

// Image lazy loading with fade effect
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.5s ease';
                
                img.onload = function() {
                    this.style.opacity = '1';
                };
                
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
});

// Enhanced sharing functionality
function shareToSocial(platform, url, title) {
    const shareUrls = {
        facebook: `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`,
        twitter: `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(title)}`,
        linkedin: `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`,
        whatsapp: `https://wa.me/?text=${encodeURIComponent(title + ' - ' + url)}`
    };
    
    if (shareUrls[platform]) {
        window.open(shareUrls[platform], '_blank', 'width=600,height=400');
    }
}

// Copy URL to clipboard
function copyArticleUrl() {
    navigator.clipboard.writeText(window.location.href).then(function() {
        showNotification('Article URL copied to clipboard!', 'success');
    }).catch(function() {
        // Fallback for older browsers
        const textArea = document.createElement('textarea');
        textArea.value = window.location.href;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        showNotification('Article URL copied to clipboard!', 'success');
    });
}

// Show notification function
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div style="
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? '#10b981' : '#667eea'};
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            z-index: 10000;
            font-weight: 500;
            animation: slideInRight 0.3s ease;
        ">
            <i class="fas fa-${type === 'success' ? 'check' : 'info'}-circle"></i>
            ${message}
        </div>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}

// Add CSS animations for notifications
const notificationStyles = document.createElement('style');
notificationStyles.textContent = `
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
`;
document.head.appendChild(notificationStyles);

</