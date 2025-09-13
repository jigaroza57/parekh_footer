@extends('frontend/layout')
@section('content')

<style>
    * {
        box-sizing: border-box;
    }
    
    .social-hero-section {
        background: linear-gradient(135deg, #fff9e6 0%, #fef7e0 50%, #fff 100%);
        min-height: 100vh;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }
    
    /* Beautiful floating particles */
    .social-hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            radial-gradient(circle at 20% 20%, rgba(253, 190, 81, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 90%, rgba(173, 216, 230, 0.1) 0%, transparent 50%);
        animation: floatingBg 15s ease-in-out infinite;
        z-index: 1;
    }
    
    @keyframes floatingBg {
        0%, 100% { transform: translateY(0) scale(1); }
        50% { transform: translateY(-10px) scale(1.05); }
    }
    
    .hero-title {
        font-family: 'Poppins', sans-serif;
        font-size: 3.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcf7f, #4ecdc4);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 1rem;
        position: relative;
        z-index: 10;
        animation: gradientShift 4s ease-in-out infinite;
        text-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    @keyframes gradientShift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    .hero-subtitle {
        font-family: 'Poppins', sans-serif;
        font-size: 1.3rem;
        color: #666;
        text-align: center;
        margin-bottom: 3rem;
        position: relative;
        z-index: 10;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .decorative-line {
        width: 150px;
        height: 6px;
        background: linear-gradient(90deg, #ff9a9e, #fecfef, #fecfef);
        margin: 0 auto 3rem;
        border-radius: 10px;
        position: relative;
        z-index: 10;
        animation: shimmer 2s ease-in-out infinite;
    }
    
    @keyframes shimmer {
        0%, 100% { opacity: 1; transform: scaleX(1); }
        50% { opacity: 0.8; transform: scaleX(1.1); }
    }
    
    .main-logo {
        display: block;
        margin: 0 auto 4rem;
        max-width: 280px;
        position: relative;
        z-index: 10;
        animation: gentleFloat 3s ease-in-out infinite;
        filter: drop-shadow(0 10px 25px rgba(0,0,0,0.1));
    }
    
    @keyframes gentleFloat {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .cards-container {
        position: relative;
        z-index: 10;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2.5rem;
        perspective: 1000px;
    }
    
    .magic-card {
        background: linear-gradient(145deg, #ffffff, #f8f9ff);
        border-radius: 25px;
        overflow: hidden;
        position: relative;
        transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        box-shadow: 
            0 10px 40px rgba(0,0,0,0.1),
            0 2px 8px rgba(0,0,0,0.05);
        border: 1px solid rgba(255,255,255,0.8);
        backdrop-filter: blur(10px);
        transform-style: preserve-3d;
    }
    
    .magic-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, 
            rgba(255,182,193,0.1) 0%, 
            rgba(173,216,230,0.1) 25%, 
            rgba(255,218,185,0.1) 50%, 
            rgba(221,160,221,0.1) 75%, 
            rgba(250,240,230,0.1) 100%);
        border-radius: 25px;
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
    }
    
    .magic-card:hover::before {
        opacity: 1;
    }
    
    .magic-card:hover {
        transform: translateY(-15px) rotateX(5deg);
        box-shadow: 
            0 30px 60px rgba(0,0,0,0.15),
            0 10px 25px rgba(0,0,0,0.1);
    }
    
    .card-image-container {
        position: relative;
        height: 300px;
        overflow: hidden;
        border-radius: 20px 20px 0 0;
        background: linear-gradient(45deg, #f0f2f5, #ffffff);
    }
    
    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.6s ease;
        filter: brightness(1.1) contrast(1.05) saturate(1.1);
        position: relative;
        z-index: 2;
    }
    
    .magic-card:hover .card-image {
        transform: scale(1.08);
        filter: brightness(1.2) contrast(1.1) saturate(1.2);
    }
    
    .card-shine {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent 0%, 
            rgba(255,255,255,0.4) 50%, 
            transparent 100%);
        transition: left 0.6s ease;
        z-index: 3;
    }
    
    .magic-card:hover .card-shine {
        left: 100%;
    }
    
    .card-content {
        padding: 2rem;
        position: relative;
        z-index: 2;
        background: rgba(255,255,255,0.95);
        backdrop-filter: blur(20px);
    }
    
    .visit-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 15px 35px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.4s ease;
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        position: relative;
        overflow: hidden;
    }
    
    .visit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s ease;
    }
    
    .visit-btn:hover::before {
        left: 100%;
    }
    
    .visit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        color: white;
        text-decoration: none;
    }
    
    .btn-icon {
        width: 20px;
        height: 20px;
        transition: transform 0.3s ease;
    }
    
    .visit-btn:hover .btn-icon {
        transform: translateX(5px);
    }
    
    /* Staggered animation */
    .magic-card {
        opacity: 0;
        transform: translateY(50px);
        animation: fadeInUp 0.8s ease forwards;
    }
    
    .magic-card:nth-child(1) { animation-delay: 0.1s; }
    .magic-card:nth-child(2) { animation-delay: 0.2s; }
    .magic-card:nth-child(3) { animation-delay: 0.3s; }
    .magic-card:nth-child(4) { animation-delay: 0.4s; }
    .magic-card:nth-child(5) { animation-delay: 0.5s; }
    .magic-card:nth-child(6) { animation-delay: 0.6s; }
    
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
            padding: 0 1rem;
        }
        
        .cards-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        
        .card-image-container {
            height: 250px;
        }
        
        .social-hero-section {
            padding: 40px 0;
        }
    }
    
    @media (max-width: 480px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .cards-container {
            padding: 0 15px;
        }
        
        .magic-card {
            border-radius: 20px;
        }
        
        .card-content {
            padding: 1.5rem;
        }
    }
    
    /* Add some beautiful cursor effects */
    .magic-card {
        cursor: pointer;
    }
    
    .magic-card:hover {
        cursor: pointer;
    }
</style>

<section class="social-hero-section">
    <div class="cards-container">
        <h2 class="hero-title">✨ Get In Touch By Social Content</h2>
        <div class="decorative-line"></div>
        <p class="hero-subtitle">Connect with us through our vibrant social platforms and discover amazing content that inspires and engages</p>
        
        <img src="{{ asset('images/group-48099402.svg')}}" 
             class="main-logo" 
             alt="Social Media Hub">
        
        <div class="cards-grid">
            @foreach($gets as $get)
                <div class="magic-card">
                    <div class="card-image-container">
                        <img src="{{asset('images/get/'. $get->image) }}" 
                             class="card-image" 
                             alt="Social Platform">
                        <div class="card-shine"></div>
                    </div>
                    <div class="card-content">
                        <a href="{{$get->link}}" target="_blank" class="visit-btn">
                            <span>Visit Platform</span>
                            <svg class="btn-icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection