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
        animation: zoomInOut 2s infinite ease-in-out;
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






<!--------------------Main Category------------------------>


<!-- Categories Section -->
<section class="shop-category">

    <div class="">
        <h2 class="category-heading">Shop by Category</h2>
        <p class="category-subtitle">
            Designs feature the world's finest diamonds and unparalleled craftsmanship signatures of the House for almost two centuries.
        </p>

        <div class="category-grid">
            @foreach($category as $index => $cat)
            <a href="{{ route('frontend.product_by_category',['id' => $cat->id]) }}" class="category-item" style="animation-delay: {{ $index * 0.1 }};">
                <div class="category-img">
                    <img src="{{ asset('images/category/'.$cat->image) }}" alt="{{ $cat->name }}">
                    <div class="sparkle" style="top: 20%; left: 20%; animation-delay: 0s;"></div>
                    <div class="sparkle" style="top: 60%; right: 25%; animation-delay: 1s;"></div>
                    <div class="sparkle" style="bottom: 30%; left: 60%; animation-delay: 0.5s;"></div>
                </div>
                <h3 class="category-name">{{ $cat->name }}</h3>
            </a>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* Section Wrapper */
    .shop-category {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(248, 250, 252, 0.95) 100%);
        backdrop-filter: blur(20px);
        padding: 80px 20px;
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

        .shop-category {
            padding: 60px 15px;
        }
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

<br>
<br>

<!-- ---------------------------------------New Section------------------------------- -->

<style>
    .banner-section {
        display: flex;
        gap: 0;
        /* no gap for seamless look */
    }

    .banner-card {
        position: relative;
        flex: 1;
        overflow: hidden;
        cursor: pointer;
    }

    .banner-card img {
        width: 100%;
        height: 100%;
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
        left: 25%;
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
</style>

<div class="banner-section">

    <div class="banner-card">
        <img src="{{ asset('images/new/banner_1.jpg')}}" alt="">

        <!-- Top SVG Image -->
        <img src="{{ asset('images/new/triangle.svg')}}" alt="" class="banner-top-svg">

        <div class="banner-overlay"></div>
        <div class="banner-text2">
            <h3>One-Of-A-Kinds</h3>
            <p>RINGS</p>
        </div>
    </div>


    <div class="banner-card">

        <img src="{{ asset('images/new/banner_2.jpg')}}" alt="">

        <!-- Top SVG Image -->
        <img src="{{ asset('images/new/triangle.svg')}}" alt="" class="banner-top-svg">

        <div class="banner-overlay"></div>
        <div class="banner-text2">
            <h3>High Tide Looks</h3>
            <p>NECKLACES</p>
        </div>
    </div>

    <div class="banner-card">

        <img src="{{ asset('images/new/banner_3.jpg')}}" alt="">

        <!-- Top SVG Image -->
        <img src="{{ asset('images/new/triangle.svg')}}" alt="" class="banner-top-svg">


        <div class="banner-overlay"></div>
        <div class="banner-text2">
            <h3>New Organic Dôme</h3>
            <p>EARRINGS</p>
        </div>
    </div>

    <div class="banner-card">
        <img src="{{ asset('images/new/banner_4.jpg')}}" alt="">

        <!-- Top SVG Image -->
        <img src="{{ asset('images/new/triangle.svg')}}" alt="" class="banner-top-svg">


        <div class="banner-overlay"></div>
        <div class="banner-text2">
            <h3>The Tiffany Icons</h3>
            <p>RINGS</p>
        </div>
    </div>

</div>



<!-- ---------------------------------------New Section End------------------------------- -->

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
    <h2 class="collection-heading">Explore Our Collections</h2>
    <p class="collection-subheading">Discover curated pieces designed to elevate your everyday style.</p>
</div>

<div class="container-fluid py-4">
    <div class="row g-4 justify-content-center">
        @foreach($collection as $coll)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="{{ route('frontend.product_detail',['id'=>$coll->id]) }}" class="collection-link">
                <div class="collection-card">
                    <img src="{{ asset('images/product/'.$coll->image) }}" alt="{{ $coll->name }}">
                    <div class="collection-info">
                        <h5>{{ $coll->name }}</h5>
                        <div class="view-more">
                            <span>View Collection</span>
                            <i class="bi bi-arrow-right"></i> </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<style>
    /* New Styling for a Professional Look */
    .collection-heading {
        font-family: 'Playfair Display', serif; /* Use a more elegant serif font */
        font-size: 2.8rem;
        color: #7A4C4C;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 0.5rem;
    }

    .collection-subheading {
        font-family: 'Lato', sans-serif; /* Use a clean sans-serif font */
        font-size: 1.1rem;
        color: #A38F8F;
        margin-bottom: 3rem;
    }
    
    .collection-link {
        text-decoration: none;
        display: block; /* Ensures the entire card is clickable */
    }

    .collection-card {
        position: relative;
        width: 100%;
        height: 350px; /* Increased height for better visual impact */
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94), box-shadow 0.4s ease;
    }

    .collection-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    /* Hover effect on the card */
    .collection-link:hover .collection-card {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    /* Image zoom on hover */
    .collection-link:hover .collection-card img {
        transform: scale(1.05);
    }

    .collection-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
        color: #fff;
        padding: 24px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 100%;
        opacity: 1; /* Always visible */
        transition: opacity 0.4s ease;
    }

    .collection-info h5 {
        font-size: 1.35rem; /* Slightly larger heading */
        font-weight: 500;
        margin-bottom: 8px;
        line-height: 1.2;
    }

    .view-more {
        display: flex;
        align-items: center;
        font-size: 0.95rem;
        color: rgba(255, 255, 255, 0.8);
        transition: transform 0.3s ease;
    }

    .view-more i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .collection-link:hover .view-more {
        transform: translateX(5px);
    }
    
    .collection-link:hover .view-more i {
        transform: translateX(3px);
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


<br>
<br>
<br>


<!-- ------------------------------------- collection section End------------------------- -->



<!-- ----------------------- Slider Gallery Section ---------------------------- -->




<!-- ----------------------- Slider Gallery Section ---------------------------- -->

<br>
<br>
<br>
<br>






@endsection