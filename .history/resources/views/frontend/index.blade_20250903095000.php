@extends('frontend/layout')

@section('content')



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">


    <div class="carousel-indicators">
        @foreach($slider as $photo)
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
            aria-current="true" aria-label="Slide 1"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($slider as $slide)

        <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
            <img id="up" src="{{ asset('images/slider/'.$slide->image)}}" class="d-block w-100 img-fluid"
                alt="...">
        </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- ---------------------------------------Slider Completed --------------------- -->



<div style="display: flex;">
    <!-- First Banner -->
    <div class="banner">
        <img src="{{ asset('images/new/h1_bn-1.jpg')}}" style="width: 100%; min-height: 550px;" alt="">
        <div class="banner-text">
            <p>Our Earrings</p>
            <h2>Add These <br> To Your Style <br> Roster.</h2>
            <p>Grab the deal right now! You can get <br> extra 15% off this season.</p>
            <br>
            <a href="#">Shop Now</a>
        </div>
    </div>

    <!-- Second Banner -->
    <div class="banner">
        <img src="{{ asset('images/new/h1_bn-2.jpg')}}" style="width: 100%; min-height: 550px;" alt="">
        <div class="banner-text">
            <p>Favorite Items</p>
            <h2>Unique <br> Engagement <br> Rings</h2>
            <p>From special antique diamonds to <br> one-of-a-kind colored gemstones.</p>
            <br>
            <a href="#">Shop Now</a>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    /* Import Inter Tight font */
    @import url('https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;600;700&display=swap');

    .banner {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 100%;
        /* Make banner take full height of parent */
        cursor: pointer;
    }

    .banner img {
        width: 100%;
        height: 100%;
        /* Force image to fill container height */
        object-fit: cover;
        /* Ensures image scales properly without distortion */
        transition: transform 0.6s ease;
        display: block;
    }

    .banner-text {
        position: absolute;
        top: 20%;
        left: 10%;
        max-width: 60%;
        color: #000;
        font-family: 'Inter Tight', sans-serif;
        transition: all 0.6s ease;
    }

    .banner-text p {
        font-size: 14px;
        margin: 5px 0;
    }

    .banner-text h2 {
        font-size: 28px;
        font-weight: 700;
        margin: 5px 0 15px;
    }

    .banner-text a {
        background: #fff;
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        color: #000;
        font-weight: 600;
        font-size: 14px;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .banner:hover img {
        transform: scale(1.1);
    }

    .banner:hover .banner-text {
        transform: translateY(-10px);
        opacity: 0.9;
    }

    .banner-text a:hover {
        background: #000;
        color: #fff;
    }
</style>

<!-- --------Scroling Part------------- -->

<div class="scroll-container">
    <div class="scroll-track">
        <div class="scroll-content">
            <span><i>✨</i> The Iconic Collection</span>
            <span><i>💎</i> Shine With Elegance</span>
            <span><i>🌟</i> Timeless Luxury</span>
            <span><i>💍</i> Perfect Engagement Picks</span>
            <span><i>🛍️</i> Black Friday Exclusive</span>
            <span><i>🎁</i> Gifts That Sparkle</span>
            <span><i>🌸</i> Elegant And Everlasting</span>
            <span><i>💖</i> Color In Your Look</span>
        </div>

        <!-- duplicate for seamless effect -->
        <div class="scroll-content">
            <span><i>✨</i> The Iconic Collection</span>
            <span><i>💎</i> Shine With Elegance</span>
            <span><i>🌟</i> Timeless Luxury</span>
            <span><i>💍</i> Perfect Engagement Picks</span>
            <span><i>🛍️</i> Black Friday Exclusive</span>
            <span><i>🎁</i> Gifts That Sparkle</span>
            <span><i>🌸</i> Elegant And Everlasting</span>
            <span><i>💖</i> Color In Your Look</span>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;600&display=swap');

    .scroll-container {
        width: 100%;
        overflow: hidden;
        background: #581E1E;
        /* deep luxury */
        padding: 14px 0;
    }

    .scroll-track {
        display: flex;
        white-space: nowrap;
    }

    .scroll-content {
        display: flex;
        animation: marquee 28s linear infinite;
        font-family: 'Inter Tight', sans-serif;
        font-size: 18px;
        font-weight: 500;
        color: #fff;
    }

    .scroll-content span {
        margin: 0 40px;
        display: flex;
        align-items: center;
        gap: 10px;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    .scroll-content span i {
        display: inline-block;
        animation: bounce 2s infinite ease-in-out;
        font-style: normal;
        font-size: 20px;
        color: #F8BA4B;
        /* golden accent */
    }

    /* gold divider */
    .scroll-content span::after {
        content: "|";
        margin-left: 40px;
        color: #F8BA4B;
        font-weight: 700;
    }

    .scroll-content span:last-child::after {
        content: "";
    }

    /* hover effect */
    .scroll-content span:hover {
        color: #F8BA4B;
        cursor: pointer;
    }

    /* marquee animation */
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    /* emoji bounce animation */
</style>

<!-- --------Scroling Part End------------- -->

<div class="hero-section2">
    <div class="hero-image">
        <img src="{{ asset('images/new/h1_bg-2.jpg')}}" style="width: 100%;" alt="Jewellery Background">
        <div class="hero-text">
            <div class="hero-icon">💎</div>
            <h1>Jewellery From The<br>World’s Finest Designers</h1>
            <p>
                We believe in the power of jewelry — to tell a story, celebrate a moment,
                create or continue a tradition. There’s a wonder in wearing something
                made from the earth. Each Olight piece is crafted with ethically sourced
                precious metals to reflect our commitment to human rights and
                environmental sustainability.
            </p>
            <a href="#" class="hero-btn">More About Us</a>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;600&display=swap');

    .hero-section2 {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 100vh;
        /* full screen height */
        font-family: 'Inter Tight', sans-serif;
    }

    .hero-image {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .hero-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
        /* slow zoom effect */
    }

    /* zoom effect on hover */
    .hero-section2:hover .hero-image img {
        transform: scale(1.1);
    }

    /* text overlay */
    .hero-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #222;
        max-width: 750px;
        padding: 20px;
    }

    .hero-icon {
        font-size: 40px;
        color: #F8BA4B;
        /* golden accent */
        margin-bottom: 20px;
        animation: sparkle 2s infinite ease-in-out;
    }

    .hero-text h1 {
        font-size: 38px;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .hero-text p {
        font-size: 16px;
        color: #444;
        margin-bottom: 30px;
        line-height: 1.7;
    }

    .hero-btn {
        display: inline-block;
        padding: 12px 28px;
        background: #581E1E;
        color: #fff;
        font-weight: 600;
        text-decoration: none;
        border-radius: 30px;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .hero-btn:hover {
        background: #F8BA4B;
        color: #581E1E;
        transform: translateY(-3px);
    }

    /* subtle emoji sparkle animation */
    @keyframes sparkle {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.2);
            opacity: 0.8;
        }
    }
</style>

<!-- ------------------------------------- -->


<div class="hero-section3">

    <div class="hero-content">
        <br>
        <br>
        <br>

        <br>
        <br>
        <h4>OLIGHT COLLECTION</h4>
        <h1>Shop The Latest Trends</h1>
        <p>Exceptional Handcrafted Design to Enhance the Magnificent Glow</p>
        <a href="#" class="btn">Shop Now</a>
        <br>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>

</div>

<style>
    .hero-section3 {
        position: relative;
        /* height: 100vh; */
        background: url("images/new/h1_bn-6.jpg") no-repeat center center/cover;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        overflow: hidden;
        background-size: 110%;
        transition: all 0.6s ease-in-out;
    }

    .hero-section3::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.6);
        /* overlay effect */
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: #000;
        max-width: 600px;
    }

    .hero-content h1 {
        font-size: 2.5rem;
        margin: 15px 0;
    }

    .hero-content p {
        font-size: 1.1rem;
        margin-bottom: 20px;
    }

    .hero-content .btn {
        padding: 12px 28px;
        background: #fff;
        border-radius: 6px;
        text-decoration: none;
        color: #000;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .hero-content .btn:hover {
        background: #f2c94c;
    }
</style>


<!-- -------------------------------------------------------- -->

<style>
    body {
        font-family: sans-serif;
        background: #f7f7f7;
        margin: 0;
        padding: 0;
    }

    /* --- Slider --- */
    .slider-container {
        overflow-x: auto; /* allow user scroll */
        overflow-y: hidden;
        width: 100%;
        padding: 20px;
        background: #fff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        scroll-snap-type: x mandatory; /* snap images */
        -webkit-overflow-scrolling: touch; /* smooth in iOS */
    }

    .slider {
        display: flex;
        gap: 15px;
        width: max-content;
    }

    .slider img {
        flex: 0 0 auto;
        width: 220px;
        border-radius: 12px;
        cursor: pointer;
        scroll-snap-align: start; /* snap image */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .slider img:hover {
        transform: scale(1.05);
    }

    /* --- Lightbox --- */
    .lightbox {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        justify-content: center;
        align-items: center;
        animation: fadeIn 0.5s ease;
    }

    .lightbox.active {
        display: flex;
    }

    .lightbox img {
        max-width: 90%;
        max-height: 80%;
        border-radius: 15px;
        box-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
        animation: zoomIn 0.4s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes zoomIn {
        from { transform: scale(0.8); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }

    .close,
    .prev,
    .next {
        position: absolute;
        color: white;
        font-size: 2.5rem;
        cursor: pointer;
        padding: 10px;
        user-select: none;
        z-index: 10000;
    }

    .close {
        top: 20px;
        right: 30px;
        font-size: 3rem;
    }

    .prev {
        left: 30px;
        top: 50%;
        transform: translateY(-50%);
    }

    .next {
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
    }

    .close:hover,
    .prev:hover,
    .next:hover {
        color: #ff4081;
    }
</style>

<!-- Slider -->
<div class="slider-container">
    <div class="slider" id="slider">
        <img src="/images/product/01 736x736 (1).jpg" onclick="openLightbox(0)">
        <img src="/images/product/01 736x736 butti.jpg" onclick="openLightbox(1)">
        <img src="/images/product/01 736x736.jpg" onclick="openLightbox(2)">
        <img src="/images/product/01 1024x700 butti.jpg" onclick="openLightbox(3)">
        <img src="/images/product/01 butti.jpg" onclick="openLightbox(4)">
        <img src="/images/product/01 ring sec.jpg" onclick="openLightbox(5)">
        <img src="/images/product/02 butti.jpg" onclick="openLightbox(6)">
        <img src="/images/product/02 ring sec.jpg" onclick="openLightbox(7)">
    </div>
</div>





<!--------------------Main Category------------------------>




<div class="category-wrapper">
    <!-- Animated Background Elements -->
    <div class="floating-elements">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
        <div class="floating-shape shape-5"></div>
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
    </div>


    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-crown"></i>
                <span>Premium Collection</span>
                <i class="fas fa-sparkles"></i>
            </div>
            <h1 class="hero-title">
                <span class="primary-text">Discover Our</span>
                <span class="accent-text">Curated Categories</span>
            </h1>
            <p class="hero-subtitle">
                Expertly crafted collections designed for discerning customers
            </p>
            <div class="hero-decoration">
                <div class="decorative-line left"></div>
                <div class="decorative-center">
                    <i class="fas fa-gem"></i>
                </div>
                <div class="decorative-line right"></div>
            </div>
        </div>
    </div>



    <!-- Categories Grid -->

    <div class="categories-container">

        <!-- <div class="section-header">
            <h2 class="section-title">Browse by Category</h2>
            <div class="section-subtitle">Each category represents excellence and quality</div>
        </div> -->

        <div class="categories-grid">
            @foreach($category as $cat)
            <a href="{{ route('frontend.product_by_category',['id' => $cat->id]) }}" class="text-decoration-none">
                <div class="category-card" data-category="{{ strtolower($cat->name) }}">
                    <div class="card-background"></div>
                    <div class="card-shine"></div>

                    <!-- Category Icon (default / fallback icon) -->
                    <div class="category-icon">
                        <i class="fas fa-box"></i>
                    </div>

                    <!-- Category Image -->
                    <div class="category-image">
                        <img src="{{ asset('images/category/'.$cat->image) }}" style="object-fit: cover !important;" alt="{{ $cat->name }}">
                    </div>

                    <!-- <h3 class="category-name">{{ $cat->name }}</h3> -->
                    <!-- <p class="category-desc">
                        {{ $cat->description ?? 'Explore our premium collection' }}
                    </p> -->

                    <br>
                    <br>
                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>



    <br>
    <br>

</div>

<style>
    :root {
        --primary-dark: #2A1B0D;
        /* Richer, deeper brown for sophistication */
        --primary-gold: #E8B923;
        /* Brighter, luxurious gold */
        --dark-variant: #1A120B;
        /* Darker variant for depth */
        --gold-variant: #F4D03F;
        /* Lighter gold for highlights */
        --light-gold: #FFF8E1;
        /* Softer gold for subtle accents */
        --text-light: #F5F5F5;
        /* Cleaner white for text */
        --text-gray: rgba(245, 245, 245, 0.85);
        /* Softer gray for secondary text */
        --text-muted: rgba(245, 245, 245, 0.65);
        /* Muted text for less emphasis */
        --glass-light: rgba(255, 255, 255, 0.12);
        /* Slightly more opaque glass effect */
        --glass-medium: rgba(255, 255, 255, 0.18);
        /* Enhanced glass effect */
    }


    .category-wrapper {
        min-height: 100vh;
        background: whitesmoke;
        /* Light background */
        background-size: 400% 400%;
        animation: gradientFlow 20s ease infinite;
        position: relative;
    }

    .hero-title .primary-text {
        color: #333;
        /* Dark text */
    }

    .hero-title .accent-text {
        background: linear-gradient(135deg, #B38B00, #FFD700);
        /* Darker gold */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-subtitle {
        color: #555;
    }

    .category-name {
        color: #222;
        /* Darker text for categories */
    }

    @keyframes gradientFlow {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    /* Enhanced Floating Elements */
    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
        overflow: hidden;
    }

    .floating-shape {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg,
                rgba(215, 180, 62, 0.1),
                rgba(215, 180, 62, 0.05));
        backdrop-filter: blur(20px);
        border: 1px solid rgba(215, 180, 62, 0.2);
    }

    .shape-1 {
        width: 200px;
        height: 200px;
        top: 10%;
        left: 5%;
        animation: floatRotate 15s ease-in-out infinite;
    }

    .shape-2 {
        width: 150px;
        height: 150px;
        top: 50%;
        right: 10%;
        animation: floatRotate 18s ease-in-out infinite reverse;
    }

    .shape-3 {
        width: 100px;
        height: 100px;
        bottom: 20%;
        left: 15%;
        animation: floatRotate 12s ease-in-out infinite;
    }

    .shape-4 {
        width: 80px;
        height: 80px;
        top: 30%;
        left: 50%;
        animation: floatRotate 20s ease-in-out infinite reverse;
    }

    .shape-5 {
        width: 120px;
        height: 120px;
        bottom: 40%;
        right: 25%;
        animation: floatRotate 16s ease-in-out infinite;
    }

    .gradient-orb {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle at 30% 30%,
                rgba(215, 180, 62, 0.3),
                rgba(215, 180, 62, 0.1),
                transparent);
        filter: blur(40px);
    }

    .orb-1 {
        width: 300px;
        height: 300px;
        top: 20%;
        right: 20%;
        animation: pulse 8s ease-in-out infinite;
    }

    .orb-2 {
        width: 250px;
        height: 250px;
        bottom: 30%;
        left: 10%;
        animation: pulse 10s ease-in-out infinite reverse;
    }

    @keyframes floatRotate {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg) scale(1);
        }

        33% {
            transform: translateY(-30px) rotate(120deg) scale(1.1);
        }

        66% {
            transform: translateY(20px) rotate(240deg) scale(0.9);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 0.3;
            transform: scale(1);
        }

        50% {
            opacity: 0.6;
            transform: scale(1.2);
        }
    }

    /* Hero Section */
    .hero-section {
        position: relative;
        z-index: 2;
        padding: 100px 20px 80px;
        text-align: center;
    }

    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        opacity: 0;
        transform: translateY(50px);
        animation: heroReveal 1.2s ease-out 0.3s forwards;
    }

    @keyframes heroReveal {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        backdrop-filter: blur(30px);
        padding: 16px 32px;
        border-radius: 50px;
        color: black;
        font-weight: 600;
        margin-bottom: 32px;
        border: 2px solid rgba(215, 180, 62, 0.3);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        animation: badgeGlow 3s ease-in-out infinite;
        font-size: 0.95rem;
    }

    @keyframes badgeGlow {

        0%,
        100% {
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        50% {
            box-shadow: 0 8px 32px rgba(215, 180, 62, 0.4);
        }
    }

    .hero-title {
        font-size: clamp(2.8rem, 6vw, 5rem);
        font-weight: 800;
        margin-bottom: 24px;
        line-height: 1.1;
    }

    .primary-text {
        color: var(--text-light);
        display: block;
        margin-bottom: 8px;
    }

    .accent-text {
        background: linear-gradient(135deg, var(--primary-gold), var(--light-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-family: 'Playfair Display', serif;
        font-style: italic;
        display: block;
        text-shadow: 0 0 60px rgba(215, 180, 62, 0.5);
    }

    .hero-subtitle {
        font-size: 1.3rem;
        /* color: var(--text-gray); */
        margin-bottom: 48px;
        font-weight: 400;
        line-height: 1.6;
    }

    .hero-decoration {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        margin-top: 20px;
    }

    .decorative-line {
        height: 2px;
        width: 80px;
        background: linear-gradient(90deg, transparent, var(--primary-gold), transparent);
        position: relative;
    }

    .decorative-line.left {
        background: linear-gradient(90deg, transparent, var(--primary-gold));
    }

    .decorative-line.right {
        background: linear-gradient(90deg, var(--primary-gold), transparent);
    }

    .decorative-center {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-dark);
        font-size: 1.2rem;
        box-shadow: 0 4px 20px rgba(215, 180, 62, 0.4);
        animation: gemSpin 4s ease-in-out infinite;
    }

    @keyframes gemSpin {

        0%,
        100% {
            transform: rotate(0deg) scale(1);
        }

        50% {
            transform: rotate(180deg) scale(1.1);
        }
    }

    /* Categories Section */
    .categories-container {
        position: relative;
        z-index: 2;
        /* padding: 60px 20px 100px; */
        max-width: 1300px;
        margin: 0 auto;
    }

    .category-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
        opacity: 0;
        transform: translateY(30px);
        animation: sectionReveal 1s ease-out 0.6s forwards;
    }

    @keyframes sectionReveal {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-light);
        margin-bottom: 16px;
        font-family: 'Playfair Display', serif;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: var(--text-gray);
        font-weight: 400;
    }

    .categories-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* 4 columns per row */
        gap: 40px;
        padding: 0 20px;
    }

    .category-card {
        position: relative;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
        border-radius: 32px;
        padding: 8px 13px;
        text-align: center;
        border: 2px solid rgba(255, 215, 0, 0.3);
        cursor: pointer;
        overflow: hidden;
        transform-style: preserve-3d;
        opacity: 0;
        animation: cardAppear 0.8s ease-out forwards;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .category-card:hover {
        box-shadow: 0 20px 50px rgba(255, 215, 0, 0.3),
            0 0 30px rgba(255, 215, 0, 0.5);
    }


    .category-card.hexagon .category-image {
        clip-path: polygon(25% 5%, 75% 5%,
                100% 50%,
                75% 95%, 25% 95%,
                0% 50%);
        border-radius: 0;
    }

    .category-card:nth-child(3n+1) .category-image {
        /* border-radius: 50%; */
    }

    /* Rounded square */
    .category-card:nth-child(3n+2) .category-image {
        border-radius: 25px;
    }

    /* Diamond */
    .category-card:nth-child(3n+3) .category-image {
        transform: rotate(45deg);
        border-radius: 12px;
    }

    .category-card:nth-child(3n+3) .category-image img {
        transform: rotate(-45deg);
        /* keep img upright */
    }

    @keyframes cardAppear {
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .category-card.featured {
        background: linear-gradient(145deg,
                rgba(215, 180, 62, 0.15),
                rgba(215, 180, 62, 0.08));
        border: 2px solid rgba(215, 180, 62, 0.4);
        transform: translateY(60px) scale(1.05);
        box-shadow: 0 20px 50px rgba(215, 180, 62, 0.2);
    }

    .featured-badge {
        position: absolute;
        top: -15px;
        right: 25px;
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        color: var(--primary-dark);
        padding: 12px 20px;
        border-radius: 25px;
        font-size: 0.85rem;
        font-weight: 700;
        box-shadow: 0 6px 20px rgba(215, 180, 62, 0.4);
        display: flex;
        align-items: center;
        gap: 8px;
        z-index: 3;
    }

    .card-background {
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg,
                transparent,
                rgba(215, 180, 62, 0.1),
                transparent);
        border-radius: 28px;
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: -1;
    }

    .card-shine {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent);
        transition: left 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border-radius: 28px;
        z-index: 1;
    }

    .category-card:hover .card-shine {
        left: 100%;
    }

    .category-card:hover {
        transform: translateY(-15px) scale(1.06);
        /* Slightly more lift */
        box-shadow: 0 40px 80px rgba(232, 185, 35, 0.3);
        /* Glowier shadow */
        border-color: var(--primary-gold);
    }

    .category-card.featured:hover {
        transform: translateY(-20px) scale(1.08);
        box-shadow: 0 35px 70px rgba(215, 180, 62, 0.3);
    }

    .category-card:hover .card-background {
        opacity: 1;
    }

    .category-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 25px;
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--primary-dark);
        box-shadow: 0 10px 30px rgba(215, 180, 62, 0.4);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        position: relative;
        z-index: 2;
    }

    .category-card:hover .category-icon {
        /* transform: scale(1.15) rotate(360deg); */
        box-shadow: 0 15px 40px rgba(215, 180, 62, 0.6);
    }

    .category-image {
        width: 180px;
        height: 180px;
        /* object-fit: contain; */
        margin: 0 auto 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.1);
        border: 3px solid rgba(215, 180, 62, 0.3);
        transition: all 0.4s ease;
    }


    .image-placeholder {
        font-size: 3rem;
        color: var(--text-gray);
        transition: all 0.4s ease;
        z-index: 2;
        position: relative;
    }

    .category-card:hover .category-image {
        transform: scale(1.15);
        /* More pronounced zoom */
        box-shadow: 0 15px 50px rgba(232, 185, 35, 0.5);
        /* Stronger glow */
    }

    .category-card:hover .image-placeholder {
        color: var(--primary-gold);
        transform: scale(1.1);
    }

    .category-name {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-light);
        margin-bottom: 12px;
        transition: all 0.3s ease;
        font-family: 'Playfair Display', serif;
    }

    .category-desc {
        color: var(--text-gray);
        font-size: 1rem;
        margin-bottom: 25px;
        font-weight: 400;
        line-height: 1.4;
    }

    .category-stats {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding: 0 15px;
    }

    .stat-item,
    .rating-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.9rem;
        color: var(--text-gray);
        background: rgba(255, 255, 255, 0.1);
        padding: 8px 16px;
        border-radius: 20px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(215, 180, 62, 0.2);
        transition: all 0.3s ease;
    }

    .category-card:hover .stat-item,
    .category-card:hover .rating-item {
        background: rgba(215, 180, 62, 0.15);
        border-color: rgba(215, 180, 62, 0.4);
        color: var(--text-light);
    }

    .hover-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        color: var(--primary-dark);
        padding: 10px;
        transform: translateY(100%);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        font-weight: 600;
        font-size: 1rem;
        border-radius: 0 0 26px 26px;
    }

    .category-card:hover .hover-overlay {
        transform: translateY(0);
    }

    .explore-text {
        font-size: 1rem;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .categories-grid {
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
        }
    }

    @media (max-width: 768px) {
        .categories-grid {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 0 10px;
        }

        .category-card {
            padding: 25px 20px;
        }

        .category-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .category-image {
            width: 110px;
            height: 110px;
        }

        .image-placeholder {
            font-size: 2.5rem;
        }
    }

    /* Performance Optimizations */
    .category-card {
        will-change: transform, box-shadow;
        transform-style: preserve-3d;
    }

    .card-shine {
        will-change: left;
    }

    .floating-shape {
        will-change: transform;
    }

    /* Accessibility */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }

        .category-card:hover {
            transform: translateY(-5px) scale(1.02);
        }
    }

    .category-card:focus {
        outline: 3px solid var(--primary-gold);
        outline-offset: 4px;
    }

    .category-card:focus-visible {
        outline: 3px solid var(--primary-gold);
        outline-offset: 4px;
    }

    /* Loading Animation */
    @keyframes shimmer {
        0% {
            background-position: -1000px 0;
        }

        100% {
            background-position: 1000px 0;
        }
    }

    .loading-shimmer {
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent);
        background-size: 1000px 100%;
        animation: shimmer 2s infinite;
    }

    /* Enhanced Hover States */
    .category-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%),
                rgba(215, 180, 62, 0.1) 0%,
                transparent 50%);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
        border-radius: 28px;
    }

    .category-card:hover::before {
        opacity: 1;
    }

    /* Scrollbar Styling */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: var(--primary-dark);
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, var(--primary-gold), var(--gold-variant));
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, var(--gold-variant), var(--light-gold));
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Enhanced intersection observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -100px 0px",
        };

        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = "running";
                    cardObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll(".category-card, .hero-content, .section-header").forEach((element) => {
            element.style.animationPlayState = "paused";
            cardObserver.observe(element);
        });

        // Enhanced category card interactions
        document.querySelectorAll(".category-card").forEach((card, index) => {
            // Mouse tracking for advanced hover effects
            card.addEventListener("mousemove", function(e) {
                const rect = this.getBoundingClientRect();
                const x = ((e.clientX - rect.left) / rect.width) * 100;
                const y = ((e.clientY - rect.top) / rect.height) * 100;

                this.style.setProperty('--mouse-x', `${x}%`);
                this.style.setProperty('--mouse-y', `${y}%`);
            });

            // Click handler with category navigation
            card.addEventListener("click", function(e) {
                const category = this.dataset.category;

                // Add click animation
                this.style.transform = "scale(0.98)";
                setTimeout(() => {
                    this.style.transform = "";
                }, 150);

                // Simulate navigation (replace with actual routing)
                console.log(`Navigating to category: ${category}`);

                // Add loading state
                this.classList.add('loading-shimmer');
                setTimeout(() => {
                    this.classList.remove('loading-shimmer');
                    // window.location.href = `/category/${category}`;
                }, 800);
            });

            // Enhanced hover effects
            card.addEventListener("mouseenter", function() {
                this.style.zIndex = "100";

                // Add subtle scale to nearby cards
                document.querySelectorAll(".category-card").forEach((otherCard, otherIndex) => {
                    if (otherCard !== this && Math.abs(otherIndex - index) === 1) {
                        otherCard.style.transform = "translateY(-5px) scale(0.98)";
                    }
                });
            });

            card.addEventListener("mouseleave", function() {
                this.style.zIndex = "1";

                // Reset nearby cards
                document.querySelectorAll(".category-card").forEach((otherCard) => {
                    if (otherCard !== this) {
                        otherCard.style.transform = "";
                    }
                });
            });
        });

        // Advanced parallax scrolling
        let ticking = false;

        function updateParallax() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;

            // Parallax for floating shapes
            document.querySelectorAll(".floating-shape").forEach((element, index) => {
                const speed = 0.3 + (index * 0.1);
                const yPos = scrolled * speed;
                const rotation = scrolled * (0.1 + index * 0.05);

                element.style.transform = `translateY(${yPos}px) rotate(${rotation}deg)`;
            });

            // Parallax for gradient orbs
            document.querySelectorAll(".gradient-orb").forEach((orb, index) => {
                const speed = 0.2 + (index * 0.1);
                const yPos = scrolled * speed;
                orb.style.transform = `translateY(${yPos}px) scale(${1 + scrolled * 0.0001})`;
            });

            ticking = false;
        }

        // Throttled scroll handler
        window.addEventListener("scroll", function() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        });

        // Keyboard navigation
        document.addEventListener("keydown", function(e) {
            const cards = document.querySelectorAll(".category-card");
            const focusedCard = document.activeElement;
            const currentIndex = Array.from(cards).indexOf(focusedCard);

            if (e.key === "ArrowRight" && currentIndex < cards.length - 1) {
                e.preventDefault();
                cards[currentIndex + 1].focus();
            } else if (e.key === "ArrowLeft" && currentIndex > 0) {
                e.preventDefault();
                cards[currentIndex - 1].focus();
            } else if (e.key === "Enter" || e.key === " ") {
                if (focusedCard && focusedCard.classList.contains("category-card")) {
                    e.preventDefault();
                    focusedCard.click();
                }
            }
        });

        // Add smooth scroll for better UX
        document.documentElement.style.scrollBehavior = 'smooth';

        // Performance optimization: Reduce animations on low-end devices
        if (navigator.hardwareConcurrency <= 4) {
            document.documentElement.style.setProperty('--animation-speed', '0.5s');
        }

        // Add loading completed class for additional animations
        setTimeout(() => {
            document.body.classList.add('loaded');
        }, 1000);

        // Lazy load optimization for better performance
        const lazyElements = document.querySelectorAll('.category-card');

        if ('IntersectionObserver' in window) {
            const lazyObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        lazyObserver.unobserve(entry.target);
                    }
                });
            });

            lazyElements.forEach(element => {
                lazyObserver.observe(element);
            });
        }
    });

    // Add resize handler for responsive adjustments
    window.addEventListener('resize', debounce(() => {
        // Recalculate any size-dependent animations
        const cards = document.querySelectorAll('.category-card');
        cards.forEach(card => {
            // Reset transforms on resize
            card.style.transform = '';
        });
    }, 250));

    // Utility function for debouncing
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
</script>


<!-------------------/-Main Category------------------------>

<!-- </div> -->

<br>
<br>
<!--------------------who we are------------------------>

<section class="about-section">
    <div class="container-fluid">
        <div class=" no-gutters align-items-center">
            <!-- Left Side Image -->

            <!-- Right Side Content -->
            <div class=" content-side" data-aos="fade-left">
                <div class="content-box">
                    <h2 class="section-title">Who We Are</h2>
                    <img src="{{ asset('images/group-48099402.svg')}}" alt="About Us" class="img-fluid">

                    <p class="section-text">{!! $detail->about_us !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Using a more modern, neutral background and toning down the effects */
    .about-section {
        background-color: #f9f9f9;
        /* A clean, soft white */
        border-radius: 20px;
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    /* Remove the continuous shimmer, or make it extremely subtle */
    /* You could even remove this entirely for a cleaner look */
    .about-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(120deg, rgba(212, 175, 55, 0.05), transparent 50%, rgba(212, 175, 55, 0.05));
        background-size: 200% 200%;
        animation: shimmerMove 18s ease-in-out infinite;
        /* Slower animation */
        pointer-events: none;
    }

    /* Modernized title with subtle gold gradient */
    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        /* Slightly larger for impact */
        font-weight: bold;
        background: linear-gradient(90deg, #d4af37, #f6e27a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        letter-spacing: 1px;
        text-shadow: none;
        /* Removing the text shadow for a cleaner look */
    }

    /* Redesign the content box for a softer, cleaner feel */
    .content-box {
        background: #ffffff;
        border-radius: 16px;
        padding: 3rem;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
        /* A much softer shadow */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Refined hover effect for the content box */
    .content-box:hover {
        transform: translateY(-8px);
        box-shadow: 0px 18px 40px rgba(0, 0, 0, 0.1);
    }

    /* A more modern, subtle image hover effect */
    .img-fluid {
        filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.1));
        transition: transform 0.4s ease;
    }

    .img-fluid:hover {
        transform: scale(1.05);
    }

    /* Use a clean sans-serif font for the body text */
    .section-text {
        font-family: 'Inter', sans-serif;
        /* Or 'Lato', 'Poppins' */
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        margin-top: 20px;
    }
</style>

<!-- Animation library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<!-------------------/-who we are------------------------>

<br>
<br>
<br>
<br>

<!---------best of Jewellers--------------->
<div class="container">
    <center>
        <div class="row col-12" style="padding: 25px;">
            <div class="col-md-3">
                <div style="background-color: white; padding: 8px;">
                    <center>
                        <p style="font-family: 'Aladin', system-ui; color: #622c2c; font-size: 40px;">Best Of <br> PH <br>
                            Jewellers</p>
                        <img src="le-jour-serifremovebgpreview-1-11@2x.png" class="img-fluid"
                            style="width: 150px;" alt="">
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/group-48099189@2x.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/group-48099188@2x.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/group-48099187@2x.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-1"></div>
        </div>
    </center>
</div>
<!--------/-best of Jewellers--------------->

<br>
<br>

<!---Mid Banner Image-->
<div style="padding-left: 20px; padding-right: 20px;">
    <img src="{{ asset('images/group-48099194-1@2x.png')}}" class="img-fluid" alt="">
</div>

<!---/Mid Banner Image-->
<br>
<br>
<br>
<!---Shop by Category-->
<!-- Explore By Collection Header -->
<div class="text-center my-5">
    <h2 style="font-family: 'Aladin', system-ui; font-size: 2.5rem; color: #622c2c; text-transform: uppercase;">Explore By Collection</h2>
    <img src="{{ asset('images/group-48099402.svg') }}" class="img-fluid" style="max-width: 300px;" alt="">
</div>

<!-- Collection Grid -->
<div class="container">
    <div class="row justify-content-center g-4">
        @foreach($collection as $coll)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="{{ route('frontend.product_detail',['id'=>$coll->id]) }}" class="collection-card">
                <div class="collection-wrapper">
                    <img src="{{ asset('images/product/'.$coll->image) }}" alt="{{ $coll->name }}">
                    <div class="collection-overlay">
                        <h5>{{ $coll->name }}</h5>
                        <span>View Collection</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>



@endsection


<style>
    .collection-card {
        text-decoration: none;
    }

    .collection-wrapper {
        position: relative;
        width: 100%;
        height: 320px;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .collection-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .collection-wrapper:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .collection-wrapper:hover img {
        transform: scale(1.08);
    }

    .collection-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));
        color: #fff;
        padding: 20px;
        text-align: left;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        transition: background 0.3s ease;
    }

    .collection-overlay h5 {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .collection-overlay span {
        font-size: 0.9rem;
        color: #f3c9c9;
    }

    .collection-wrapper:hover .collection-overlay {
        /* background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.2)); */
    }
</style>


@push('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var popupOverlay = document.getElementById("welcome-popup");
        var closeButton = document.getElementById("close-popup");

        // Show popup and overlay when the page loads
        popupOverlay.style.display = "flex";

        // Close the popup and overlay when the close button is clicked
        closeButton.addEventListener("click", function() {
            popupOverlay.style.display = "none";
        });
    });
</script>
@endpush