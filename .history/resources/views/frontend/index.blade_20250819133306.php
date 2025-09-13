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

    <br>
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
    
    <br>

    <center>
        <div class="row col-12">
            <div class="col-md-12">
                <!-- hero-intro wraps the header + image and will animate once when visible -->
                <div class="hero-intro">
                    <h2 class="hero-title mt-5">
                        Explore Our Top Categories
                    </h2>
                    <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid hero-image" style="width:320px;" alt="">
                </div>
            </div>
        </div>
    </center>

    <br>
    <br>

    <div class="container py-5 bg-light-pattern category-section">
        <div class="row justify-content-center">
            <div class="d-flex flex-wrap justify-content-center gap-4">
                @foreach($category as $cat)
                <a href="{{ route('frontend.product_by_category',['id' => $cat->id]) }}" class="text-decoration-none">
                    <div class="category-card text-center">
                        <div class="category-image mb-3">
                            <img src="{{ asset('images/category/'.$cat->image) }}" alt="{{ $cat->name }}">
                        </div>
                        <h5>{{ $cat->name }}</h5>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>


    <br>
    <br>

</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // HERO: animate once when visible
        const hero = document.querySelector('.hero-intro');
        if (hero) {
            const heroObserver = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // add class to play animation
                        hero.classList.add('show');
                        // stop observing so it plays only once
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.9
            });
            heroObserver.observe(hero);
        }

        // --- your existing category observer (keeps original behaviour) ---
        const catObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const cards = entry.target.querySelectorAll(".category-card");
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add("show");
                        }, index * 250); // 0.25s stagger
                    });
                    catObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.9
        });

        document.querySelectorAll(".category-section").forEach(section => {
            catObserver.observe(section);
        });
    });
</script>


<style>
    .category-card {
        /* width: 250px; */
        padding: 1.5rem;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transform: translateY(40px) scale(0.95);
        transition: opacity 0.8s cubic-bezier(0.25, 1, 0.3, 1),
            transform 0.8s cubic-bezier(0.25, 1, 0.3, 1);
        position: relative;
        overflow: hidden;
    }

    .category-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.15);
        background: rgba(255, 255, 255, 0.9);
    }

    .category-image img {
        width: 180px;
        height: 180px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #581E1E;
        padding: 5px;
        transition: transform 0.4s ease;
    }

    .category-card:hover .category-image img {
        transform: scale(1.07);
    }

    .category-card h5 {
        color: #581E1E;
        font-weight: 600;
        margin-top: 1rem;
    }

    .category-card {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .category-card.show {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    /* HERO (header + image) initial + show animation */
    .hero-intro {
        display: inline-block;
        text-align: center;
        opacity: 0;
        transform: translateY(20px) scale(0.98);
        transition: opacity 700ms cubic-bezier(0.22, 1, 0.36, 1),
            transform 700ms cubic-bezier(0.22, 1, 0.36, 1);
        will-change: opacity, transform;
    }

    .hero-intro .hero-title {
        font-family: 'Aladin', system-ui;
        color: #622c2c;
        letter-spacing: 3px;
        font-weight: bold;
        margin-bottom: 1rem;
        opacity: 0;
        transform: translateY(6px);
        transition: opacity 520ms ease, transform 520ms ease;
    }

    .hero-intro .hero-image {
        opacity: 0;
        transform: translateY(10px) rotate(-3deg) scale(0.98);
        transition: opacity 520ms ease 120ms, transform 520ms cubic-bezier(0.22, 1, 0.36, 1) 120ms;
        /* no inline styles for animation timing: small delay for image after title */
    }

    /* When visible, add .show to play the animation */
    .hero-intro.show {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .hero-intro.show .hero-title {
        opacity: 1;
        transform: translateY(0);
    }

    .hero-intro.show .hero-image {
        opacity: 1;
        transform: translateY(0) rotate(0deg) scale(1);
    }

    /* small accessibility: reduce-motion respect */
    @media (prefers-reduced-motion: reduce) {

        .hero-intro,
        .hero-intro .hero-title,
        .hero-intro .hero-image {
            transition: none !important;
            transform: none !important;
            opacity: 1 !important;
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

<!-- WhatsApp Button -->
<a href="https://api.whatsapp.com/send?phone=9824882345" class="whatsapp-float" target="_blank">
    <i class="fa fa-whatsapp" aria-hidden="true"></i>
</a>




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
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.2));
    }

    /* WhatsApp Float Button */
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25d366;
        color: white;
        padding: 15px 18px;
        border-radius: 50%;
        font-size: 24px;
        z-index: 999;
        transition: background 0.3s ease;
    }

    .whatsapp-float:hover {
        background-color: #128C7E;
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