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
            <img id="up" src="{{ asset('images/slider/'.$slide->image)}}" class="d-block w-100 img-fluid mob_img_slide"
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


<style>
    @media (max-width: 768px) {
        .carousel-item img {
            height: 300px;
            /* mobile ma fixed height */
            object-fit: cover;
            /* image crop thay ne sari fit thase */
        }
    }
</style>

<!-- ---------------------------------------Slider Completed --------------------- -->



<div style="display: flex;">

    <!-- First Banner -->
    <div class="banner">

        <img src="{{ asset('images/new/h1_bn-1.jpg')}}" class="mob_earrings_img" style="width: 100%; min-height: 550px;" alt="">

        <div class="banner-text">
            
            <p>Our Earrings</p>
            <h2>Add These <br> To Your Style <br> Roster.</h2>
            <p>Grab the deal right now! You can get <br> extra 15% off this season.</p>

            <br>

            <a href="{{ route('frontend.product') }}">Shop Now</a>

        </div>

    </div>

    <!-- Second Banner -->
    <div class="banner">

        <img src="{{ asset('images/new/h1_bn-2.jpg')}}" class="mob_earrings_img" style="width: 100%; min-height: 550px;" alt="">

        <div class="banner-text">

            <p>Favorite Items</p>
            <h2>Unique <br> Engagement <br> Rings</h2>
            <p>From special antique diamonds to <br> one-of-a-kind colored gemstones.</p>
            <br>

            <a href="{{ route('frontend.product') }}">Shop Now</a>

        </div>

    </div>

</div>

<!-- Styles -->
<style>
    /* Import Inter Tight font */
    @import url('https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;600;700&display=swap');

    /* 🔥 Animation keyframes */
    @keyframes slideLeft {
        from {
            opacity: 0;
            transform: translateX(-80px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideRight {
        from {
            opacity: 0;
            transform: translateX(80px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .banner {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 100%;
        /* Make banner take full height of parent */
        cursor: pointer;
        opacity: 0;
        transform: scale(1.2);
    }

    .banner.show {
        animation: zoomFade 1.2s ease forwards;
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

    .banner:nth-child(1) {
        opacity: 0;
    }

    .banner:nth-child(2) {
        opacity: 0;
    }

    .banner.show:nth-child(1) {
        animation: slideLeft 1s ease forwards;
    }

    .banner.show:nth-child(2) {
        animation: slideRight 1s ease forwards;
    }


    .banner-text {
        position: absolute;
        top: 20%;
        left: 10%;
        max-width: 60%;
        color: #000;
        font-family: 'Inter Tight', sans-serif;
        transition: all 0.6s ease;

        opacity: 0;
        transform: translateY(20px);
    }

    .banner.show .banner-text {
        animation: fadeUp 1s ease forwards;
        animation-delay: 0.5s;
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

    /* Responsive Styles */
    @media (max-width: 1024px) {
        .banner-text {
            top: 15%;
            left: 8%;
            max-width: 70%;
        }

        .banner-text h2 {
            font-size: 24px;
        }

        .banner-text p {
            font-size: 13px;
        }

        .banner-text a {
            font-size: 13px;
            padding: 8px 16px;
        }
    }

    @media (max-width: 768px) {
        div[style*="display: flex;"] {
            flex-direction: column;
        }

        .banner {
            min-height: 400px;
        }

        .banner-text {
            top: 15%;
            left: 6%;
            max-width: 80%;
        }

        .banner-text h2 {
            font-size: 22px;
            line-height: 1.3;
        }

        .banner-text p {
            font-size: 12px;
        }

        .mob_earrings_img {
            min-height: 325px !important;
        }
    }

    @media (max-width: 480px) {
        .banner {
            min-height: 300px;
        }

        .banner-text {
            top: 10%;
            left: 5%;
            max-width: 90%;
        }

        .banner-text h2 {
            font-size: 18px;
            line-height: 1.2;
        }

        .banner-text p {
            font-size: 11px;
        }

        .banner-text a {
            font-size: 12px;
            padding: 6px 14px;
        }
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const banners = document.querySelectorAll(".banner");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target); // Animate only once
                }
            });
        }, {
            threshold: 0.2
        });

        banners.forEach(banner => observer.observe(banner));
    });
</script>



<!-- ---------------------------------------New Section------------------------------- -->

<style>
    .banner-section {
        display: flex;
        flex-wrap: wrap;
        /* allow wrapping on small screens */
        gap: 0;
        /* seamless look */
    }

    .banner-card {
        position: relative;
        flex: 1 1 25%;
        /* default: 4 per row on desktop */
        min-width: 250px;
        /* prevents collapsing too much */
        overflow: hidden;
        cursor: pointer;

        opacity: 0;
        transform: translateY(30px);
    }

    .banner-card.animate {
        animation: fadeSlideUp 1s ease forwards;
    }


    /* Staggered animation */
    .banner-card.animate:nth-child(1) {
        animation-delay: 0.2s;
    }

    .banner-card.animate:nth-child(2) {
        animation-delay: 0.4s;
    }

    .banner-card.animate:nth-child(3) {
        animation-delay: 0.6s;
    }

    .banner-card.animate:nth-child(4) {
        animation-delay: 0.8s;
    }

    @keyframes fadeSlideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .banner-card:hover .banner-overlay {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
    }

    /* Text pop-up animation */
    .banner-card:hover .banner-text2 {
        transform: translateY(-10px) scale(1.05);
        transition: transform 0.4s ease, opacity 0.4s ease;
        opacity: 1;
    }

    /* Glow effect on text */
    .banner-text2 h2 {
        transition: text-shadow 0.4s ease;
    }

    .banner-card:hover .banner-text2 h2 {
        text-shadow: 0 0 12px rgba(255, 255, 255, 0.9);
    }

    /* Floating SVG subtle animation */
    .banner-top-svg {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }
    }

    .banner-card img {
        width: 100%;
        height: 100%;
        max-height: 450px;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
    }

    /* Gradient overlay at bottom */
    .banner-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0));
        transition: all 0.5s ease;
    }

    /* Text bottom-left */
    .banner-text2 {
        position: absolute;
        bottom: 30px;
        text-align: center;
        left: 37%;
        color: #fff;
    }

    .banner-text2 h3 {
        font-size: 18px;
        margin: 0;
        font-weight: 600;
    }

    .banner-text2 p {
        font-size: 13px;
        margin: 4px 0 0;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0.9;
    }

    /* Hover zoom */
    .banner-card:hover img {
        transform: scale(1.08);
    }

    .banner-top-svg {
        position: absolute;
        top: -136px;
        left: 0;
        width: 100%;
        /* SVG full width ma spread thase */
        height: auto;
        /* proportional rakhva mate */
        opacity: 0.2;
        pointer-events: none;
        /* click prevent */
        z-index: 2;
        /* overlay karta upar ya niche set kari shako */
    }

    /* Large screens (default: 4 per row) */
    @media (min-width: 1200px) {
        .banner-card {
            flex: 1 1 25%;
        }
    }

    /* Medium screens (2 per row) */
    @media (max-width: 1199px) and (min-width: 768px) {
        .banner-card {
            flex: 1 1 50%;
        }

        .banner-text2 h2 {
            font-size: 1.1rem;
        }
    }

    /* Small screens (1 per row) */
    @media (max-width: 767px) {
        .banner-card {
            flex: 1 1 100%;
        }

        .banner-text2 {
            bottom: 35px;
        }

        .banner-text2 h2 {
            font-size: 2rem;
        }

        .banner-text2 {
            left: 40%;
        }
    }
</style>

<div class="shop-category">

    <br>
    <br>
    <br>
    <br>

    <div class="header-wrapper">

        <!-- Animated Line -->
        <div class="creative-line">
            <div class="line-segment"></div>
            <div class="line-diamond">
                <div class="diamond-inner"></div>
            </div>
            <div class="line-segment"></div>
        </div>

        <!-- Main Title -->
        <h1 class="creative-title">
            <span class="title-word word-1">Shop</span>
            <span class="title-word word-2">by</span>
            <!-- <span class="title-word word-3">Premium</span> -->
            <span class="title-accent">Category</span>
        </h1>

    </div>

    <!-- <h2 class="category-heading" style="text-align: center;  font-family: 'Playfair Display', serif; letter-spacing: 3px; ">Shop by Category</h2> -->
    <!-- <p class="category-subtitle">
    Designs feature the world's finest diamonds and unparalleled craftsmanship signatures of the House for almost two centuries.
    </p> -->

    <br>
    <br>


    <div class="banner-section">


        @foreach($category as $index => $cat)

        <div class="banner-card">

            <a href="{{ route('frontend.product') }}">

                <img src="{{ asset('images/new/'.$cat->image) }}" alt="">

                <!-- Top SVG Image -->
                <img src="{{ asset('images/new/triangle.svg')}}" alt="" class="banner-top-svg">

                <div class="banner-overlay"></div>
                <div class="banner-text2">
                    <h2 style="font-weight: bold;">{{ $cat->name }}</h2>
                    <!-- <p>RINGS</p> -->
                </div>

            </a>

        </div>

        @endforeach




    </div>



</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const section = document.querySelector(".shop-category");
        const cards = document.querySelectorAll(".banner-card");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add("animate");
                        }, index * 200); // stagger
                    });
                    observer.unobserve(section); // run only once
                }
            });
        }, {
            threshold: 0.2
        }); // trigger when 20% visible

        observer.observe(section);
    });
</script>



<!-- ---------------------------------------New Section End------------------------------- -->


<!-- 🎨 Creative Collections - Enhanced Product Display -->

<div class="creative-collections-wrapper">
    <!-- Creative Background -->
    <div class="creative-background">
        <div class="bg-mesh"></div>
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
        <div class="gradient-orbs">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>
        </div>
    </div>

    <!-- Creative Header -->
    <div class="creative-header">
        <div class="">
            <div class="header-wrapper">
                <!-- Animated Line -->
                <div class="creative-line">
                    <div class="line-segment"></div>
                    <div class="line-diamond">
                        <div class="diamond-inner"></div>
                    </div>
                    <div class="line-segment"></div>
                </div>

                <!-- Main Title -->
                <h1 class="creative-title">
                    <span class="title-word word-1">Discover</span>
                    <span class="title-word word-2">Our</span>
                    <span class="title-word word-3">Premium</span>
                    <span class="title-accent">Collections</span>
                </h1>

                <!-- Subtitle with Animation -->
                <!-- <div class="creative-subtitle">
                    <p class="subtitle-text">Handpicked luxury pieces for the modern connoisseur</p>
                    <div class="subtitle-decoration">
                        <div class="deco-dot"></div>
                        <div class="deco-dot"></div>
                        <div class="deco-dot"></div>
                    </div>
                </div> -->

                <!-- Creative Stats -->
                <!-- <div class="creative-stats">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-number">200</span>
                            <span class="stat-label">Premium Items</span>
                        </div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-number">4.9</span>
                            <span class="stat-label">Rating</span>
                        </div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Quality</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Creative Collections Grid -->
    <div class="creative-collections">
        <div class="p-3">
            <div class="row g-4">
                @foreach($collection as $index => $coll)
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                    <a href="{{ route('frontend.product_detail', ['id' => $coll->id]) }}" class="creative-card-link">
                        <div class="creative-card">
                            <!-- Card Badge -->
                            <div class="card-badge-wrapper">
                                <!-- <div class="card-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div> -->
                                <!-- <div class="premium-tag">
                                    <span>PREMIUM</span>
                                    <i class="bi bi-gem"></i>
                                </div> -->
                            </div>

                            <!-- Image Section with Creative Frame -->
                            <div class="image-section">
                                <!-- <div class="image-frame">
                                    <div class="frame-corner tl"></div>
                                    <div class="frame-corner tr"></div>
                                    <div class="frame-corner bl"></div>
                                    <div class="frame-corner br"></div>
                                </div> -->

                                <div class="image-container">
                                    <img src="{{ asset('images/product/' . $coll->image) }}"
                                        alt="{{ $coll->name }}" style="height: 355px; object-fit: fill;"
                                        class="product-image"
                                        loading="lazy">
                                    <!-- <div class="image-overlay">
                                        <div class="overlay-gradient"></div>
                                        <div class="overlay-pattern"></div>
                                    </div> -->
                                </div>

                                <!-- Creative Glow Effect -->
                                <!-- <div class="image-glow-effect">
                                    <div class="glow-ring"></div>
                                    <div class="glow-particles">
                                        <div class="particle p1"></div>
                                        <div class="particle p2"></div>
                                        <div class="particle p3"></div>
                                        <div class="particle p4"></div>
                                    </div>
                                </div> -->
                            </div>

                            <!-- Content Section -->
                            <div class="content-section">
                                <!-- <div class="content-bg">
                                    <div class="bg-pattern"></div>
                                </div> -->

                                <div class="content-wrapper">
                                    <!-- <div class="product-category">Premium Collection</div> -->
                                    <h3 class="product-title">{{ $coll->name }}</h3>
                                    <p class="product-description">Exclusive handcrafted piece</p>

                                    <div class="action-area">
                                        <div class="explore-btn">
                                            <span class="btn-text">Explore Now</span>
                                            <div class="btn-arrow">
                                                <i class="bi bi-arrow-right"></i>
                                                <i class="bi bi-arrow-right"></i>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Creative Hover Effects -->
                            <div class="hover-effects">
                                <div class="ripple-effect"></div>
                                <div class="border-animation">
                                    <div class="border-line top"></div>
                                    <div class="border-line right"></div>
                                    <div class="border-line bottom"></div>
                                    <div class="border-line left"></div>
                                </div>
                                <!-- <div class="floating-icons">
                                    <div class="float-icon icon-1"><i class="bi bi-heart"></i></div>
                                    <div class="float-icon icon-2"><i class="bi bi-eye"></i></div>
                                    <div class="float-icon icon-3"><i class="bi bi-cart"></i></div>
                                </div> -->
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    /* Import Creative Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=PlayfairDisplay:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap');

    /* === CREATIVE VARIABLES === */
    :root {
        --primary-burgundy: #3B0000;
        --accent-gold: #FFCC61;
        --burgundy-dark: #2A0000;
        --burgundy-light: #4D0000;
        --gold-dark: #E6B555;
        --gold-light: #FFF5CC;
        --white: #FFFFFF;
        --black: #000000;
        --gray-light: #F8F9FA;
        --gray-medium: #6C757D;
        --gray-dark: #343A40;

        /* Creative Gradients */
        --gradient-primary: linear-gradient(135deg, var(--primary-burgundy) 0%, var(--burgundy-dark) 100%);
        --gradient-accent: linear-gradient(135deg, var(--accent-gold) 0%, var(--gold-dark) 100%);
        --gradient-mixed: linear-gradient(135deg, var(--primary-burgundy) 0%, var(--accent-gold) 100%);
        --gradient-glow: radial-gradient(circle, var(--accent-gold) 0%, transparent 70%);

        /* Creative Shadows */
        --shadow-soft: 0 10px 40px rgba(59, 0, 0, 0.15);
        --shadow-medium: 0 20px 60px rgba(59, 0, 0, 0.25);
        --shadow-strong: 0 30px 80px rgba(59, 0, 0, 0.35);
        --shadow-glow: 0 0 30px rgba(255, 204, 97, 0.4);

        /* Animation Variables */
        --transition-smooth: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        --transition-bounce: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    /* === BASE STYLES === */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--white);
        overflow-x: hidden;
    }

    /* === CREATIVE WRAPPER === */
    .creative-collections-wrapper {
        position: relative;
        min-height: 100vh;
        background: linear-gradient(135deg, #FAFAFA 0%, #F0F0F0 50%, var(--gold-light) 100%);
    }

    /* === CREATIVE BACKGROUND === */
    .creative-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }

    .bg-mesh {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            linear-gradient(90deg, rgba(59, 0, 0, 0.03) 1px, transparent 1px),
            linear-gradient(rgba(59, 0, 0, 0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: meshMove 20s linear infinite;
    }

    @keyframes meshMove {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(50px, 50px);
        }
    }



    /* Gradient Orbs */
    .gradient-orbs {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(40px);
        animation: orbFloat 10s ease-in-out infinite;
    }

    .orb-1 {
        width: 200px;
        height: 200px;
        background: var(--gradient-accent);
        top: 20%;
        left: 10%;
        opacity: 0.1;
        animation-delay: 0s;
    }

    .orb-2 {
        width: 150px;
        height: 150px;
        background: var(--gradient-primary);
        top: 60%;
        right: 15%;
        opacity: 0.08;
        animation-delay: -3s;
    }

    .orb-3 {
        width: 180px;
        height: 180px;
        background: var(--gradient-mixed);
        bottom: 20%;
        left: 30%;
        opacity: 0.1;
        animation-delay: -6s;
    }

    @keyframes orbFloat {

        0%,
        100% {
            transform: translateY(0px) scale(1);
        }

        50% {
            transform: translateY(-50px) scale(1.1);
        }
    }

    /* === CREATIVE HEADER === */
    .creative-header {
        position: relative;
        z-index: 10;
        padding: 6rem 0 4rem;
        text-align: center;
    }

    .header-wrapper {
        max-width: 900px;
        margin: 0 auto;
    }

    /* Creative Line */
    .creative-line {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 3rem;
        opacity: 0;
        animation: slideDown 1s ease 0.3s forwards;
    }

    .line-segment {
        width: 100px;
        height: 2px;
        background: var(--gradient-accent);
        position: relative;
        overflow: hidden;
    }

    .line-segment::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, var(--white), transparent);
        animation: lineShimmer 3s ease-in-out infinite;
    }

    @keyframes lineShimmer {
        0% {
            left: -100%;
        }

        100% {
            left: 100%;
        }
    }

    .line-diamond {
        position: relative;
        width: 20px;
        height: 20px;
        margin: 0 2rem;
        transform: rotate(45deg);
        background: var(--accent-gold);
        box-shadow: 0 0 20px rgba(255, 204, 97, 0.6);
        animation: diamondPulse 2s ease-in-out infinite;
    }

    .diamond-inner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
        width: 8px;
        height: 8px;
        background: var(--primary-burgundy);
        border-radius: 2px;
    }

    @keyframes diamondPulse {

        0%,
        100% {
            transform: rotate(45deg) scale(1);
            box-shadow: 0 0 20px rgba(255, 204, 97, 0.6);
        }

        50% {
            transform: rotate(45deg) scale(1.3);
            box-shadow: 0 0 30px rgba(255, 204, 97, 0.9);
        }
    }

    /* Creative Title */
    .creative-title {
        font-family: 'Playfair Display', serif;
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 2rem;
    }

    .title-word {
        display: inline-block;
        margin-right: 0.5rem;
        color: var(--primary-burgundy);
        opacity: 0;
        transform: translateY(50px);
        animation: wordReveal 0.8s ease forwards;
    }

    .word-1 {
        animation-delay: 0.6s;
    }

    .word-2 {
        animation-delay: 0.8s;
    }

    .word-3 {
        animation-delay: 1s;
    }

    .title-accent {
        display: inline-block;
        background: var(--gradient-accent);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
        opacity: 0;
        transform: translateY(50px);
        animation: wordReveal 0.8s ease 1.2s forwards;
    }

    .title-accent::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--gradient-accent);
        border-radius: 2px;
        transform: scaleX(0);
        animation: underlineGrow 0.8s ease 2s forwards;
    }

    @keyframes wordReveal {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes underlineGrow {
        to {
            transform: scaleX(1);
        }
    }

    /* Creative Subtitle */
    .creative-subtitle {
        margin-bottom: 3rem;
        opacity: 0;
        animation: fadeUp 1s ease 1.8s forwards;
    }

    .subtitle-text {
        font-family: 'Inter', sans-serif;
        font-size: 1.3rem;
        color: var(--gray-medium);
        margin-bottom: 1rem;
        font-weight: 400;
    }

    .subtitle-decoration {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
    }

    .deco-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--accent-gold);
        animation: dotPulse 2s ease-in-out infinite;
    }

    .deco-dot:nth-child(2) {
        animation-delay: 0.3s;
    }

    .deco-dot:nth-child(3) {
        animation-delay: 0.6s;
    }

    @keyframes dotPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.7;
        }

        50% {
            transform: scale(1.5);
            opacity: 1;
        }
    }

    /* Creative Stats */
    .creative-stats {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 3rem;
        opacity: 0;
        animation: fadeUp 1s ease 2.2s forwards;
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.5rem 2rem;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border-radius: 20px;
        border: 1px solid rgba(255, 204, 97, 0.3);
        box-shadow: var(--shadow-soft);
        transition: var(--transition-smooth);
    }

    .stat-item:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-glow);
        border-color: var(--accent-gold);
    }

    .stat-icon {
        width: 50px;
        height: 50px;
        background: var(--gradient-accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-burgundy);
        font-size: 1.2rem;
        box-shadow: var(--shadow-glow);
    }

    .stat-content {
        text-align: left;
    }

    .stat-number {
        display: block;
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-burgundy);
        line-height: 1;
    }

    .stat-label {
        font-size: 0.9rem;
        color: var(--gray-medium);
        font-weight: 500;
    }

    .stat-divider {
        width: 2px;
        height: 60px;
        background: linear-gradient(to bottom, transparent, var(--accent-gold), transparent);
    }

    /* === CREATIVE COLLECTIONS === */
    .creative-collections {
        position: relative;
        z-index: 10;
        padding: 2rem 0 6rem;
    }

    .creative-card-link {
        text-decoration: none;
        display: block;
    }

    .creative-card {
        position: relative;
        height: 500px;
        background: var(--white);
        border-radius: 25px;
        overflow: hidden;
        box-shadow: var(--shadow-soft);
        transition: var(--transition-smooth);
        cursor: pointer;
        border: 2px solid transparent;
    }



    /* Card Badge */
    .card-badge-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 5;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 1.5rem;
    }

    .card-number {
        width: 45px;
        height: 45px;
        background: var(--primary-burgundy);
        color: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        box-shadow: var(--shadow-medium);
        transition: var(--transition-bounce);
    }

    .creative-card:hover .card-number {
        background: var(--accent-gold);
        color: var(--primary-burgundy);
        transform: scale(1.2) rotate(360deg);
    }

    .premium-tag {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        padding: 0.7rem 1.2rem;
        border-radius: 25px;
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--primary-burgundy);
        box-shadow: var(--shadow-soft);
        transition: var(--transition-smooth);
    }

    .premium-tag i {
        color: var(--accent-gold);
        font-size: 0.9rem;
    }

    .creative-card:hover .premium-tag {
        background: var(--accent-gold);
        color: var(--primary-burgundy);
        transform: scale(1.05);
    }

    .creative-card:hover .premium-tag i {
        color: var(--primary-burgundy);
    }

    /* Image Section */
    .image-section {
        position: relative;
        height: 65%;
        overflow: hidden;
    }

    .image-frame {
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        z-index: 3;
        pointer-events: none;
    }

    .frame-corner {
        position: absolute;
        width: 30px;
        height: 30px;
        border: 3px solid var(--accent-gold);
        opacity: 0;
        transition: var(--transition-smooth);
    }

    .frame-corner.tl {
        top: 0;
        left: 0;
        border-right: none;
        border-bottom: none;
    }

    .frame-corner.tr {
        top: 0;
        right: 0;
        border-left: none;
        border-bottom: none;
    }

    .frame-corner.bl {
        bottom: 0;
        left: 0;
        border-right: none;
        border-top: none;
    }

    .frame-corner.br {
        bottom: 0;
        right: 0;
        border-left: none;
        border-top: none;
    }

    .creative-card:hover .frame-corner {
        opacity: 1;
        transform: scale(1.2);
    }

    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        cursor: zoom-in;
    }

    .image-container::after {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at center, rgba(255, 204, 97, 0.2), transparent 70%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }

    /* .image-container:hover::after {
        opacity: 1;
    } */

    .image-container:hover .product-image {
        transform: scale(1.4);
        /* bigger zoom */
        /* filter: brightness(1.05) contrast(1.05); */
        /* make it pop */
    }


    .product-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease, filter 0.4s ease;
        transform-origin: center center;
    }

    .creative-card:hover .product-image {
        transform: none;
        filter: none;
    }

    .creative-card[data-tilt]:hover .product-image {
        transform: scale(1.2) rotate(1deg);
    }



    /* Image Glow Effect */
    .image-glow-effect {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.6s ease;
    }

    .creative-card:hover .image-glow-effect {
        opacity: 1;
    }


    .glow-particles {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: var(--accent-gold);
        border-radius: 50%;
        animation: particleFloat 3s ease-in-out infinite;
    }

    .p1 {
        top: 20%;
        left: 20%;
        animation-delay: 0s;
    }

    .p2 {
        top: 30%;
        right: 25%;
        animation-delay: -1s;
    }

    .p3 {
        bottom: 30%;
        left: 30%;
        animation-delay: -2s;
    }

    .p4 {
        bottom: 25%;
        right: 20%;
        animation-delay: -1.5s;
    }

    @keyframes particleFloat {

        0%,
        100% {
            transform: translateY(0px);
            opacity: 0.5;
        }

        50% {
            transform: translateY(-20px);
            opacity: 1;
        }
    }

    /* Content Section */
    .content-section {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 35%;
        background: var(--white);
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: var(--transition-smooth);
    }

    .creative-card:hover .content-section {
        transform: translateY(-10px);
        box-shadow: 0 -10px 30px rgba(59, 0, 0, 0.1);
    }

    .content-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
    }

    .bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            linear-gradient(45deg, rgba(255, 204, 97, 0.05) 25%, transparent 25%),
            linear-gradient(-45deg, rgba(255, 204, 97, 0.05) 25%, transparent 25%);
        background-size: 20px 20px;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .creative-card:hover .bg-pattern {
        opacity: 1;
    }

    .content-wrapper {
        position: relative;
        z-index: 2;
    }

    .product-category {
        font-size: 0.8rem;
        color: var(--accent-gold);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
        opacity: 0.8;
    }

    .product-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--primary-burgundy);
        margin-bottom: 0.5rem;
        line-height: 1.3;
        transition: var(--transition-smooth);
    }

    .creative-card:hover .product-title {
        transform: none;
    }

    .product-description {
        font-size: 0.9rem;
        color: var(--gray-medium);
        margin-bottom: 1.5rem;
        line-height: 1.4;
    }

    /* Action Area */
    .action-area {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .explore-btn {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        color: var(--primary-burgundy);
        font-weight: 600;
        font-size: 1rem;
        transition: var(--transition-smooth);
        cursor: pointer;
    }

    .btn-text {
        position: relative;
    }

    .btn-text::after {
        content: '';
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--accent-gold);
        transition: width 0.3s ease;
    }

    .creative-card:hover .btn-text::after {
        width: 100%;
    }

    .btn-arrow {
        position: relative;
        width: 35px;
        height: 35px;
        background: var(--accent-gold);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition-bounce);
        overflow: hidden;
    }

    .btn-arrow i {
        position: absolute;
        font-size: 0.9rem;
        color: var(--primary-burgundy);
        transition: var(--transition-smooth);
    }

    .btn-arrow i:first-child {
        transform: translateX(0);
    }

    .btn-arrow i:last-child {
        transform: translateX(30px);
    }

    .creative-card:hover .explore-btn {
        transform: none;
    }

    .creative-card:hover .btn-arrow {
        transform: none;
    }

    .creative-card:hover .btn-arrow i {
        color: var(--accent-gold);
    }

    .creative-card:hover .btn-arrow i:first-child {
        transform: translateX(-30px);
    }

    .creative-card:hover .btn-arrow i:last-child {
        transform: translateX(0);
    }

    .rating-stars {
        display: flex;
        gap: 0.2rem;
    }

    .rating-stars i {
        color: var(--accent-gold);
        font-size: 0.9rem;
        opacity: 0.8;
        transition: var(--transition-smooth);
    }

    .creative-card:hover .rating-stars i {
        opacity: 1;
        transform: scale(1.1);
    }

    /* Hover Effects */
    .hover-effects {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.6s ease;
    }

    .creative-card:hover .hover-effects {
        opacity: 1;
    }



    .creative-card:hover .ripple-effect {
        width: 500px;
        height: 500px;
    }

    .border-animation {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 25px;
    }

    .border-line {
        position: absolute;
        background: var(--gradient-accent);
        opacity: 0.8;
    }

    .border-line.top {
        top: 0;
        left: 0;
        width: 0;
        height: 2px;
        animation: borderTop 1s ease-in-out;
    }

    .border-line.right {
        top: 0;
        right: 0;
        width: 2px;
        height: 0;
        animation: borderRight 1s ease-in-out 0.25s;
    }

    .border-line.bottom {
        bottom: 0;
        right: 0;
        width: 0;
        height: 2px;
        animation: borderBottom 1s ease-in-out 0.5s;
    }

    .border-line.left {
        bottom: 0;
        left: 0;
        width: 2px;
        height: 0;
        animation: borderLeft 1s ease-in-out 0.75s;
    }

    @keyframes borderTop {
        to {
            width: 100%;
        }
    }

    @keyframes borderRight {
        to {
            height: 100%;
        }
    }

    @keyframes borderBottom {
        to {
            width: 100%;
        }
    }

    @keyframes borderLeft {
        to {
            height: 100%;
        }
    }

    .floating-icons {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .float-icon {
        position: absolute;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-burgundy);
        font-size: 1rem;
        box-shadow: var(--shadow-soft);
        animation: iconFloat 2s ease-in-out infinite;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .creative-card:hover .float-icon {
        opacity: 1;
    }

    .icon-1 {
        top: 20%;
        right: 20%;
        animation-delay: 0s;
    }

    .icon-2 {
        top: 50%;
        right: 15%;
        animation-delay: -0.7s;
    }

    .icon-3 {
        bottom: 30%;
        right: 25%;
        animation-delay: -1.4s;
    }

    @keyframes iconFloat {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    /* === RESPONSIVE DESIGN === */
    @media (max-width: 1200px) {
        .creative-title {
            font-size: 3.5rem;
        }

        .creative-card {
            height: 480px;
        }

        .creative-stats {
            gap: 2rem;
        }
    }

    @media (max-width: 992px) {
        .creative-title {
            font-size: 3rem;
        }

        .creative-card {
            height: 450px;
        }

        .creative-header {
            padding: 4rem 0 3rem;
        }

        .floating-shapes .shape {
            transform: scale(0.8);
        }
    }

    @media (max-width: 768px) {
        .creative-title {
            font-size: 2.5rem;
        }

        .creative-card {
            height: 420px;
            margin-bottom: 2rem;
        }

        .creative-stats {
            flex-direction: column;
            gap: 1.5rem;
        }

        .stat-divider {
            display: none;
        }

        .creative-header {
            padding: 3rem 0 2rem;
        }

        .content-section {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.4rem;
        }

        .floating-shapes .shape {
            transform: scale(0.6);
        }
    }

    @media (max-width: 576px) {
        .creative-title {
            font-size: 2rem;
        }

        .creative-card {
            height: 500px;
        }

        .content-section {
            padding: 1.25rem;
        }

        .product-title {
            font-size: 1.2rem;
        }

        .creative-stats {
            padding: 0 1rem;
        }

        .stat-item {
            padding: 1rem 1.5rem;
        }

        .line-segment {
            width: 60px;
        }

        .subtitle-text {
            font-size: 1.1rem;
        }
    }

    /* === ANIMATIONS === */
    @keyframes slideDown {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* === ACCESSIBILITY === */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }

    /* === PERFORMANCE OPTIMIZATIONS === */
    .creative-card {
        will-change: transform;
    }

    .product-image {
        will-change: transform;
    }
</style>

<!-- Creative Libraries -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.0/dist/vanilla-tilt.min.js"></script>

<script>
    // Initialize Creative Animations
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS with creative settings
        AOS.init({
            duration: 1200,
            easing: 'ease-out-cubic',
            once: true,
            offset: 150,
            delay: 50
        });



        // Creative card interactions
        const cards = document.querySelectorAll('.creative-card');

        cards.forEach((card, index) => {
            // Stagger animation delays
            card.style.animationDelay = `${index * 0.1}s`;




        });

        // Parallax effect for background elements
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const shapes = document.querySelectorAll('.shape');
            const orbs = document.querySelectorAll('.orb');

            shapes.forEach((shape, index) => {
                const speed = 0.2(index * 0.1);
                shape.style.transform = `translateY(${scrolled * speed}px)`;
            });

            orbs.forEach((orb, index) => {
                const speed = 0.1(index * 0.05);
                orb.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Creative loading animation
        setTimeout(() => {
            document.body.classList.add('creative-loaded');
        }, 500);
    });

    // Performance optimization
    let ticking = false;

    function updateParallax() {
        // Parallax logic here
        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);
</script>

<script>
    document.querySelectorAll(".image-container").forEach(container => {
        const img = container.querySelector(".product-image");

        container.addEventListener("mousemove", (e) => {
            const rect = container.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            img.style.transformOrigin = `${x}% ${y}%`;
        });

        container.addEventListener("mouseenter", () => {
            img.style.transform = "scale(1.4)";
        });

        container.addEventListener("mouseleave", () => {
            img.style.transform = "scale(1)";
            img.style.transformOrigin = "center center";
        });
    });
</script>





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





<!-- ------------------------------------- collection section End------------------------- -->



<div class="hero-section2">

    <div class="hero-image">
        <img src="{{ asset('images/new/h1_bg-2.jpg')}}" style="width: 100%;" alt="Jewellery Background">
        <div class="hero-text mob_width">
            <div class="hero-icon">💎</div>
            <h1>Jewellery From The<br>World’s Finest Designers</h1>
            <p>
                We believe in the power of jewelry — to tell a story, celebrate a moment,
                create or continue a tradition. There’s a wonder in wearing something
                made from the earth. Each Olight piece is crafted with ethically sourced
                precious metals to reflect our commitment to human rights and
                environmental sustainability.
            </p>
            <a href="{{ route('frontend.about_us') }}" class="hero-btn">More About Us</a>
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
        /* Full screen height */
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
        /* Keeps aspect ratio */
        transition: transform 0.5s ease;
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
        font-size: 2.5rem;
        color: #F8BA4B;
        margin-bottom: 20px;
        animation: zoomInOut 2s infinite ease-in-out;
    }

    .hero-text h1 {
        font-size: 2.4rem;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .hero-text p {
        font-size: 1rem;
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
    @keyframes zoomInOut {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }

    /* RESPONSIVE DESIGN */

    /* Tablets */
    @media (max-width: 992px) {
        .hero-text h1 {
            font-size: 2rem;
        }

        .hero-text p {
            font-size: 0.95rem;
        }

        .hero-btn {
            padding: 10px 22px;
            font-size: 0.9rem;
        }
    }

    /* Mobiles */
    /* Mobiles */
    @media (max-width: 576px) {
        .hero-section2 {
            height: 81vh;
            /* keep full screen height */
        }

        .hero-image {
            height: 100%;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: fill;
            /* crop like desktop instead of contain */
        }

        .mob_width {
            width: 100%;
        }

        .hero-text {
            top: 47%;
            /* 50% karta neeche */
            transform: translate(-50%, -50%);
            max-width: 95%;
            /* text width vadharo */
            padding: 15px;
            /* andar spacing aapo */
        }

        .hero-icon {
            font-size: 2rem;
        }

        .hero-text h1 {
            font-size: 1.6rem;
            /* thodu moto karvo */
            line-height: 1.4;
        }

        .hero-text p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .hero-btn {
            padding: 8px 16px;
            font-size: 0.8rem;
        }
    }
</style>

<!-- ------------------------------------- -->
<!-- --------Scroling Part------------- -->

<div class="scroll-container">
    <div class="scroll-track">
        <div class="scroll-content">
            <span><i>✨</i> The Iconic Collection</span>
            <span><i>💎</i> Shine With Elegance</span>
            <span><i>🌟</i> Timeless Luxury</span>
            <span><i>💍</i> Perfect Engagement Picks</span>
            <!-- <span><i>🛍️</i> Black Friday Exclusive</span> -->
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
            <!-- <span><i>🛍️</i> Black Friday Exclusive</span> -->
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
        <a href="{{ route('frontend.product') }}" class="btn">Shop Now</a>
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
        width: 100%;
        min-height: 60vh;
        background: url("images/new/h1_bn-6.jpg") no-repeat center center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        overflow: hidden;
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
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: #000;
        max-width: 600px;
        width: 100%;
        padding: 40px 20px;
        box-sizing: border-box;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        margin: 0 auto;
    }

    .hero-content h1 {
        font-size: 2.5rem;
        margin: 15px 0;
        font-weight: 700;
        line-height: 1.2;
    }

    .hero-content p {
        font-size: 1.1rem;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .hero-content .btn {
        padding: 12px 28px;
        background: #fff;
        border-radius: 6px;
        text-decoration: none;
        color: #000;
        font-weight: bold;
        transition: background 0.3s ease;
        box-shadow: 0 2px 8px rgba(88, 30, 30, 0.08);
    }

    .hero-content .btn:hover {
        background: #f2c94c;
        color: #581E1E;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .hero-content h1 {
            font-size: 2.1rem;
        }

        .hero-content {
            max-width: 500px;
        }
    }

    @media (max-width: 992px) {
        .hero-section3 {
            min-height: 45vh;
        }

        .hero-content h1 {
            font-size: 1.7rem;
        }

        .hero-content p {
            font-size: 1rem;
        }

        .hero-content {
            max-width: 400px;
            padding: 30px 10px;
        }
    }

    @media (max-width: 768px) {
        .hero-section3 {
            min-height: 40vh;
            background-position: top center;
            background-size: cover;
            /* cover rakho mobile ma bhi */
        }

        .hero-content h1 {
            font-size: 1.3rem;
        }

        .hero-content p {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 576px) {
        .hero-section3 {
            min-height: 300px;
            background-size: cover;
            /* same as desktop */
            background-position: center;
            /* image always center */
        }

        .hero-content {
            padding: 12px 5px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.6);
            /* optional readability */
        }

        .hero-content h1 {
            font-size: 1rem;
        }

        .hero-content p {
            font-size: 0.85rem;
        }
    }
</style>





<!-- -------------------------------------------------------- -->






<!--------------------Main Category------------------------>


<!-- Categories Section -->
<!-- <section class="shop-category">

    <div class="">


        <div class="category-grid">
            @foreach($category as $index => $cat)
            <a href="{{ route('frontend.product_by_category',['id' => $cat->id]) }}" class="category-item" style="animation-delay: {{ $index * 0.1 }};">
                <div class="category-img">
                    <img src="{{ asset('images/new/'.$cat->image) }}" alt="{{ $cat->name }}">
                    <div class="sparkle" style="top: 20%; left: 20%; animation-delay: 0s;"></div>
                    <div class="sparkle" style="top: 60%; right: 25%; animation-delay: 1s;"></div>
                    <div class="sparkle" style="bottom: 30%; left: 60%; animation-delay: 0.5s;"></div>
                </div>
                <h3 class="category-name">{{ $cat->name }}</h3>
            </a>
            @endforeach
        </div>
    </div>
</section> -->

<style>
    /* Section Wrapper */
    .shop-category {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(248, 250, 252, 0.95) 100%);
        backdrop-filter: blur(20px);
        /* padding: 80px 20px; */
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .shop-category::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 20% 80%, rgba(255, 215, 0, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(255, 192, 203, 0.08) 0%, transparent 50%);
        pointer-events: none;
    }

    .container {
        /* max-width: 1200px; */
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    /* Heading with Animation */
    .category-heading {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 20px;
        background: #581E1E;
        background-size: 200% 200%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: gradientShift 4s ease-in-out infinite;
        position: relative;
    }

    .category-heading::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(45deg, #ffd700, #ff6b6b);
        border-radius: 2px;
        animation: pulseGlow 2s ease-in-out infinite;
    }

    @keyframes gradientShift {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    @keyframes pulseGlow {

        0%,
        100% {
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
            transform: translateX(-50%) scaleX(1);
        }

        50% {
            box-shadow: 0 0 30px rgba(255, 107, 107, 0.8);
            transform: translateX(-50%) scaleX(1.2);
        }
    }

    .category-subtitle {
        font-size: 1.2rem;
        color: #581E1E;
        margin-bottom: 60px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.6;
        animation: fadeInUp 1s ease-out 0.3s both;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Grid Layout */
    .category-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 50px;
        justify-items: center;
        perspective: 1000px;
    }

    /* Each Item with Stunning Hover Effects */
    .category-item {
        text-decoration: none;
        color: #000;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        animation: fadeInUp 1s ease-out both;
    }

    .category-item:hover {
        transform: translateY(-20px) rotateY(5deg) scale(1.05);
    }

    /* Category Image with Luxury Effects */
    .category-img {
        width: 300px;
        height: 300px;
        border-radius: 20px;
        overflow: hidden;
        margin: 0 auto 20px;
        position: relative;
        background: linear-gradient(145deg, #f0f0f0, #cacaca);
        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.15),
            inset 0 1px 0 rgba(255, 255, 255, 0.6);
        transition: all 0.4s ease;
    }

    .category-item:hover .category-img {
        box-shadow:
            0 20px 60px rgba(0, 0, 0, 0.25),
            0 0 0 1px rgba(255, 215, 0, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.8);
        transform: scale(1.02);
    }

    .category-img::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg,
                rgba(255, 215, 0, 0.1) 0%,
                transparent 30%,
                transparent 70%,
                rgba(255, 192, 203, 0.1) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
    }

    .category-item:hover .category-img::before {
        opacity: 1;
    }

    .category-img::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg,
                transparent,
                rgba(255, 255, 255, 0.3),
                transparent);
        transform: rotate(45deg) translateY(-100%);
        transition: transform 0.6s ease;
        z-index: 2;
    }

    .category-item:hover .category-img::after {
        transform: rotate(45deg) translateY(100%);
    }

    .category-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.4s ease;
        position: relative;
        z-index: 0;
    }

    .category-item:hover .category-img img {
        transform: scale(1.1);
        filter: brightness(1.1) contrast(1.1) saturate(1.2);
    }

    /* Category Name with Elegant Typography */
    .category-name {
        font-size: 1.3rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
        transition: all 0.3s ease;
        position: relative;
    }

    .category-item:hover .category-name {
        color: #581E1E;
        transform: scale(1.05);
    }

    .category-name::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%) scaleX(0);
        width: 80%;
        height: 2px;
        background: #581E1E;
        transition: transform 0.3s ease;
    }

    .category-item:hover .category-name::after {
        transform: translateX(-50%) scaleX(1);
    }

    /* Floating Animation */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .category-item:nth-child(odd) {
        animation: float 6s ease-in-out infinite, fadeInUp 1s ease-out both;
    }

    .category-item:nth-child(even) {
        animation: float 6s ease-in-out infinite reverse, fadeInUp 1s ease-out both;
    }

    /* Sparkle Effect */
    .sparkle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: #ffd700;
        border-radius: 50%;
        animation: sparkle 2s linear infinite;
        pointer-events: none;
    }

    @keyframes sparkle {

        0%,
        100% {
            opacity: 0;
            transform: scale(0);
        }

        50% {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .category-heading {
            font-size: 2.5rem;
        }

        .category-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }

        .category-img {
            width: 220px;
            height: 220px;
        }

        /* .shop-category {
            padding: 60px 15px;
        } */
    }

    @media (max-width: 480px) {
        .category-heading {
            font-size: 2rem;
        }

        .category-subtitle {
            font-size: 1rem;
            padding: 0 10px;
        }

        .category-img {
            width: 160px;
            height: 160px;
        }

        .category-name {
            font-size: 1.1rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryItems = document.querySelectorAll('.category-item');

        // Add loading animation
        categoryItems.forEach((item, index) => {
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, index * 100);
        });

        // Add sparkle effect on hover
        categoryItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                const sparkles = this.querySelectorAll('.sparkle');
                sparkles.forEach(sparkle => {
                    sparkle.style.animationPlayState = 'running';
                });
            });
        });
    });
</script>



<!-------------------/-Main Category------------------------>

<!-- </div> -->







<!--------------------who we are------------------------>



<!-------------------/-who we are------------------------>



<!---------best of Jewellers--------------->

<!--------/-best of Jewellers--------------->



<!---Mid Banner Image-->


<!---/Mid Banner Image-->

<!---Shop by Category-->









<!-- ----------------------- Slider Gallery Section ---------------------------- -->




<!-- ----------------------- Slider Gallery Section ---------------------------- -->

<br>
<br>
<br>
<br>






@endsection