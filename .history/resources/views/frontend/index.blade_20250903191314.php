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






<!--------------------Main Category------------------------>



<!-- Categories Section -->
<section class="shop-category">
    <div class="container">
        <h2 class="category-heading">Shop by Category</h2>
        <p class="category-subtitle">
            Designs feature the world’s finest diamonds and unparalleled craftsmanship signatures of the House for almost two centuries.
        </p>

        <div class="category-grid">
            @foreach($category as $cat)
            <a href="{{ route('frontend.product_by_category',['id' => $cat->id]) }}" class="category-item">
                <div class="category-card">
                    <div class="shine-effect"></div>
                    <div class="category-img">
                        <img src="{{ asset('images/category/'.$cat->image) }}" alt="{{ $cat->name }}">
                    </div>
                    <h3 class="category-name">{{ $cat->name }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* Background & Layout */
    .shop-category {
        background: #f9f9f9;
        padding: 80px 20px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    /* Heading */
    .category-heading {
        font-size: 2.8rem;
        font-weight: 800;
        background: linear-gradient(135deg, #b8860b, #ffd700);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 15px;
        animation: fadeDown 1s ease;
    }

    .category-subtitle {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 50px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        animation: fadeUp 1.2s ease;
    }

    /* Grid */
    .category-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 40px;
        justify-items: center;
    }

    /* Card */
    .category-card {
        position: relative;
        background: #fff;
        border-radius: 20px;
        padding: 20px 15px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        overflow: hidden;
    }

    .category-card:hover {
        transform: translateY(-12px) scale(1.05);
        box-shadow: 0 15px 40px rgba(218, 165, 32, 0.4);
        border: 2px solid rgba(218, 165, 32, 0.3);
    }

    /* Shine Effect */
    .shine-effect {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(120deg,
                transparent,
                rgba(255, 255, 255, 0.4),
                transparent);
        transition: all 0.8s;
    }

    .category-card:hover .shine-effect {
        left: 100%;
    }

    /* Image */
    .category-img {
        width: 150px;
        height: 150px;
        margin: 0 auto 15px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid rgba(218, 165, 32, 0.3);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .category-card:hover .category-img {
        transform: rotate(5deg) scale(1.1);
        box-shadow: 0 10px 25px rgba(218, 165, 32, 0.5);
    }

    /* Image Style */
    .category-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Name */
    .category-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: #222;
        transition: color 0.3s ease;
    }

    .category-card:hover .category-name {
        color: goldenrod;
    }

    /* Animations */
    @keyframes fadeDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>



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