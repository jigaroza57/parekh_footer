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
        <div class="categories-grid">
            @foreach($category as $cat)
            <a href="{{ route('frontend.product_by_category',['id' => $cat->id]) }}" class="text-decoration-none">
                <div class="category-card shadow-lg" data-category="{{ strtolower($cat->name) }}">
                    <div class="card-background"></div>
                    <div class="card-shine"></div>
                    <!-- Category Icon -->
                    <div class="category-icon gradient-border">
                        <i class="fas fa-box"></i>
                    </div>
                    <!-- Category Image -->
                    <div class="category-image">
                        <img src="{{ asset('images/category/'.$cat->image) }}" style="object-fit: cover !important;" alt="{{ $cat->name }}">
                    </div>
                    <div class="category-info">
                        <h3 class="category-name">{{ $cat->name }}</h3>
                        <p class="category-desc">
                            {{ $cat->description ?? 'Explore our premium collection' }}
                        </p>
                    </div>
                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <br><br>
</div>

<style>
    /* Professional gradient background */
    .category-wrapper {
        min-height: 100vh;
        background: linear-gradient(120deg, #f7e07d 0%, #fffbe6 60%, #fff 100%);
        position: relative;
        padding-bottom: 40px;
    }

    /* Hero Section */
    .hero-section {
        padding: 80px 20px 60px;
        text-align: center;
        background: linear-gradient(90deg, #fffbe6 60%, #f7e07d 100%);
        border-radius: 32px;
        box-shadow: 0 8px 32px rgba(215, 180, 62, 0.08);
        margin-bottom: 40px;
    }

    .hero-title {
        font-size: clamp(2.8rem, 6vw, 4.2rem);
        font-weight: 800;
        margin-bottom: 18px;
        line-height: 1.1;
        letter-spacing: 1px;
    }

    .primary-text {
        color: #581E1E;
        font-family: 'Playfair Display', serif;
        margin-bottom: 8px;
        display: block;
    }

    .accent-text {
        background: linear-gradient(135deg, #D7B43E, #f7e07d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: 'Playfair Display', serif;
        font-style: italic;
        display: block;
        text-shadow: 0 0 30px rgba(215, 180, 62, 0.2);
    }

    .hero-badge {
        background: linear-gradient(135deg, #fffbe6 60%, #f7e07d 100%);
        color: #581E1E;
        font-weight: 700;
        border-radius: 50px;
        padding: 14px 30px;
        font-size: 1rem;
        margin-bottom: 28px;
        box-shadow: 0 4px 18px rgba(215, 180, 62, 0.12);
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .hero-subtitle {
        color: #3d1414;
        font-size: 1.2rem;
        margin-bottom: 32px;
        font-weight: 400;
        letter-spacing: 0.5px;
    }

    .hero-decoration {
        margin-top: 18px;
    }

    /* Categories Grid */
    .categories-container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 10px;
    }

    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 32px;
    }

    .category-card {
        position: relative;
        background: #fff;
        border-radius: 24px;
        padding: 18px 18px 32px;
        text-align: center;
        border: 1.5px solid #f7e07d;
        box-shadow: 0 8px 32px rgba(215, 180, 62, 0.09);
        transition: all 0.4s cubic-bezier(.25, .46, .45, .94);
        cursor: pointer;
        overflow: hidden;
        min-height: 380px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }

    .category-card:hover {
        transform: translateY(-14px) scale(1.04);
        box-shadow: 0 18px 48px rgba(215, 180, 62, 0.18);
        border-color: #D7B43E;
    }

    .category-icon {
        width: 62px;
        height: 62px;
        margin-bottom: 18px;
        background: linear-gradient(135deg, #D7B43E, #f7e07d);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: #fff;
        box-shadow: 0 4px 18px rgba(215, 180, 62, 0.18);
        border: 2px solid #fffbe6;
        transition: all 0.3s;
    }

    .category-card:hover .category-icon {
        transform: scale(1.12) rotate(360deg);
        box-shadow: 0 8px 32px rgba(215, 180, 62, 0.28);
        border-color: #D7B43E;
    }

    .category-image {
        width: 140px;
        height: 140px;
        margin-bottom: 18px;
        border-radius: 18px;
        overflow: hidden;
        background: #fffbe6;
        border: 2px solid #f7e07d;
        box-shadow: 0 2px 12px rgba(215, 180, 62, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .category-card:hover .category-image {
        transform: scale(1.07);
        border-color: #D7B43E;
        box-shadow: 0 0 24px rgba(215, 180, 62, 0.18);
        background: #fffbe6;
    }

    .category-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 16px;
    }

    .category-info {
        margin-bottom: 18px;
    }

    .category-name {
        font-size: 1.35rem;
        font-weight: 700;
        color: #581E1E;
        margin-bottom: 8px;
        font-family: 'Playfair Display', serif;
        letter-spacing: 0.5px;
    }

    .category-desc {
        color: #7a5c2c;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        margin-bottom: 0;
        opacity: 0.85;
    }

    .hover-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(135deg, #D7B43E, #f7e07d);
        color: #581E1E;
        padding: 12px 0;
        transform: translateY(100%);
        transition: all 0.4s cubic-bezier(.25, .46, .45, .94);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-weight: 600;
        font-size: 1rem;
        border-radius: 0 0 22px 22px;
        box-shadow: 0 -2px 12px rgba(215, 180, 62, 0.08);
    }

    .category-card:hover .hover-overlay {
        transform: translateY(0);
    }

    .explore-text {
        font-size: 1rem;
        letter-spacing: 0.5px;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .categories-grid {
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
        }

        .category-card {
            min-height: 320px;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 40px 10px 30px;
        }

        .categories-grid {
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
        }

        .category-card {
            padding: 12px 8px 24px;
            min-height: 220px;
        }

        .category-image {
            width: 90px;
            height: 90px;
        }

        .category-icon {
            width: 38px;
            height: 38px;
            font-size: 1.2rem;
        }
    }
</style>
// ...existing code...

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