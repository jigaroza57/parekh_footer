@extends('frontend/layout')
@section('content')

<style>
    .social-section {
        background: linear-gradient(135deg, #FDBE51 0%, rgba(253, 190, 81, 0.1) 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    
    .social-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(91, 35, 35, 0.05) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }
    
    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    .section-title {
        color: #5B2323;
        font-family: 'Lustria', serif;
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 1rem;
        position: relative;
        z-index: 2;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .section-subtitle {
        color: #5B2323;
        text-align: center;
        margin-bottom: 3rem;
        font-size: 1.1rem;
        opacity: 0.8;
        position: relative;
        z-index: 2;
    }
    
    .title-decoration {
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, #5B2323, #FDBE51, #5B2323);
        margin: 0 auto 2rem;
        border-radius: 2px;
        position: relative;
        z-index: 2;
    }
    
    .social-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
        position: relative;
        z-index: 2;
    }
    
    .social-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(91, 35, 35, 0.1);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        border: 2px solid transparent;
        background-clip: padding-box;
    }
    
    .social-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #FDBE51, #5B2323);
        border-radius: 20px;
        padding: 2px;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .social-card:hover::before {
        opacity: 1;
    }
    
    .social-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 50px rgba(91, 35, 35, 0.2);
    }
    
    .card-image-wrapper {
        position: relative;
        overflow: hidden;
        height: 280px;
    }
    
    .social-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
        filter: brightness(1.1) contrast(1.1);
    }
    
    .social-card:hover img {
        transform: scale(1.1);
    }
    
    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(91, 35, 35, 0.8), rgba(253, 190, 81, 0.6));
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        font-weight: 600;
        text-decoration: none;
    }
    
    .social-card:hover .card-overlay {
        opacity: 1;
    }
    
    .card-content {
        padding: 1.5rem;
        background: #fff;
        position: relative;
    }
    
    .connect-btn {
        background: linear-gradient(135deg, #5B2323, #FDBE51);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(91, 35, 35, 0.3);
    }
    
    .connect-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(91, 35, 35, 0.4);
        color: white;
        text-decoration: none;
    }
    
    .floating-icon {
        position: absolute;
        width: 60px;
        height: 60px;
        opacity: 0.1;
        animation: float 6s ease-in-out infinite;
    }
    
    .floating-icon:nth-child(1) {
        top: 10%;
        left: 10%;
        animation-delay: 0s;
    }
    
    .floating-icon:nth-child(2) {
        top: 20%;
        right: 15%;
        animation-delay: 2s;
    }
    
    .floating-icon:nth-child(3) {
        bottom: 15%;
        left: 20%;
        animation-delay: 4s;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }
    
    .load-animation {
        opacity: 0;
        transform: translateY(50px);
        animation: loadIn 0.8s ease forwards;
    }
    
    @keyframes loadIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .social-section {
            padding: 60px 0;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .social-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .card-image-wrapper {
            height: 220px;
        }
    }
    
    .pulse-effect {
        animation: pulse 2s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
</style>

<section class="social-section">
    <!-- Floating Background Elements -->
    <div class="floating-icon">
        <svg viewBox="0 0 24 24" fill="#5B2323">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
        </svg>
    </div>
    <div class="floating-icon">
        <svg viewBox="0 0 24 24" fill="#FDBE51">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
        </svg>
    </div>
    <div class="floating-icon">
        <svg viewBox="0 0 24 24" fill="#5B2323">
            <path d="M20 6L9 17l-5-5"/>
        </svg>
    </div>

    <div class="container">
        <h2 class="section-title load-animation">Get In Touch By Social Content</h2>
        <div class="title-decoration load-animation"></div>
        <p class="section-subtitle load-animation">Connect with us through our social platforms and stay updated with our latest content</p>
        
        <img src="{{ asset('images/group-48099402.svg')}}" 
             class="img-fluid pulse-effect load-animation" 
             style="width: 320px; display: block; margin: 0 auto 3rem;" 
             alt="Social Media">
        
        <div class="social-grid">
            @foreach($gets as $index => $get)
                <div class="social-card load-animation" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="card-image-wrapper">
                        <img src="{{asset('images/get/'. $get->image) }}" alt="Social Platform">
                        <a href="{{$get->link}}" target="_blank" class="card-overlay">
                            <span>Visit Platform</span>
                        </a>
                    </div>
                    <div class="card-content">
                        <a href="{{$get->link}}" target="_blank" class="connect-btn">
                            Connect Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add loading animation to elements
    const elements = document.querySelectorAll('.load-animation');
    elements.forEach((el, index) => {
        el.style.animationDelay = (index * 0.1) + 's';
    });
    
    // Add intersection observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });
    
    elements.forEach(el => observer.observe(el));
});
</script>

@endsection