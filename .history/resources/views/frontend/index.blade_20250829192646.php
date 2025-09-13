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
        <div class="gradient-orb orb-3"></div>
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
            <!-- Demo Categories - Replace with your @foreach loop -->
            <a href="#" class="text-decoration-none">
                <div class="category-card featured" data-category="electronics">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i>
                        <span>Featured</span>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>

                    <div class="category-image-container">
                        <div class="image-backdrop"></div>
                        <div class="category-image">
                            <img src="https://images.unsplash.com/photo-1498049794561-7780e7231661?w=400&h=400&fit=crop&crop=center" alt="Electronics">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                    <div class="card-content">
                        <h3 class="category-name">Electronics</h3>
                        <p class="category-desc">Latest gadgets and technology</p>

                        <div class="category-stats">
                            <div class="stat-item">
                                <i class="fas fa-cube"></i>
                                <span>150+ Items</span>
                            </div>
                            <div class="rating-item">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                    </div>

                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none">
                <div class="category-card" data-category="fashion">
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>

                    <div class="category-image-container">
                        <div class="image-backdrop"></div>
                        <div class="category-image">
                            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=400&h=400&fit=crop&crop=center" alt="Fashion">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                    <div class="card-content">
                        <h3 class="category-name">Fashion</h3>
                        <p class="category-desc">Trending styles and apparel</p>

                        <div class="category-stats">
                            <div class="stat-item">
                                <i class="fas fa-cube"></i>
                                <span>200+ Items</span>
                            </div>
                            <div class="rating-item">
                                <i class="fas fa-star"></i>
                                <span>4.7</span>
                            </div>
                        </div>
                    </div>

                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none">
                <div class="category-card" data-category="home">
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>

                    <div class="category-image-container">
                        <div class="image-backdrop"></div>
                        <div class="category-image">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400&h=400&fit=crop&crop=center" alt="Home & Living">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                    <div class="card-content">
                        <h3 class="category-name">Home & Living</h3>
                        <p class="category-desc">Beautiful home decor essentials</p>

                        <div class="category-stats">
                            <div class="stat-item">
                                <i class="fas fa-cube"></i>
                                <span>120+ Items</span>
                            </div>
                            <div class="rating-item">
                                <i class="fas fa-star"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                    </div>

                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none">
                <div class="category-card" data-category="sports">
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>

                    <div class="category-image-container">
                        <div class="image-backdrop"></div>
                        <div class="category-image">
                            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=400&fit=crop&crop=center" alt="Sports">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                    <div class="card-content">
                        <h3 class="category-name">Sports</h3>
                        <p class="category-desc">Premium sports equipment</p>

                        <div class="category-stats">
                            <div class="stat-item">
                                <i class="fas fa-cube"></i>
                                <span>90+ Items</span>
                            </div>
                            <div class="rating-item">
                                <i class="fas fa-star"></i>
                                <span>4.6</span>
                            </div>
                        </div>
                    </div>

                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none">
                <div class="category-card" data-category="beauty">
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>

                    <div class="category-image-container">
                        <div class="image-backdrop"></div>
                        <div class="category-image">
                            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=400&h=400&fit=crop&crop=center" alt="Beauty">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                    <div class="card-content">
                        <h3 class="category-name">Beauty</h3>
                        <p class="category-desc">Luxury beauty products</p>

                        <div class="category-stats">
                            <div class="stat-item">
                                <i class="fas fa-cube"></i>
                                <span>180+ Items</span>
                            </div>
                            <div class="rating-item">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                    </div>

                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none">
                <div class="category-card" data-category="books">
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>

                    <div class="category-image-container">
                        <div class="image-backdrop"></div>
                        <div class="category-image">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=center" alt="Books">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                    <div class="card-content">
                        <h3 class="category-name">Books</h3>
                        <p class="category-desc">Knowledge and inspiration</p>

                        <div class="category-stats">
                            <div class="stat-item">
                                <i class="fas fa-cube"></i>
                                <span>300+ Items</span>
                            </div>
                            <div class="rating-item">
                                <i class="fas fa-star"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                    </div>

                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none">
                <div class="category-card" data-category="automotive">
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>

                    <div class="category-image-container">
                        <div class="image-backdrop"></div>
                        <div class="category-image">
                            <img src="https://images.unsplash.com/photo-1549924231-f129b911e442?w=400&h=400&fit=crop&crop=center" alt="Automotive">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                    <div class="card-content">
                        <h3 class="category-name">Automotive</h3>
                        <p class="category-desc">Car accessories and parts</p>

                        <div class="category-stats">
                            <div class="stat-item">
                                <i class="fas fa-cube"></i>
                                <span>75+ Items</span>
                            </div>
                            <div class="rating-item">
                                <i class="fas fa-star"></i>
                                <span>4.7</span>
                            </div>
                        </div>
                    </div>

                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none">
                <div class="category-card" data-category="health">
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>

                    <div class="category-image-container">
                        <div class="image-backdrop"></div>
                        <div class="category-image">
                            <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=400&fit=crop&crop=center" alt="Health & Wellness">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                    <div class="card-content">
                        <h3 class="category-name">Health & Wellness</h3>
                        <p class="category-desc">Your wellness journey starts here</p>

                        <div class="category-stats">
                            <div class="stat-item">
                                <i class="fas fa-cube"></i>
                                <span>110+ Items</span>
                            </div>
                            <div class="rating-item">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                    </div>

                    <div class="hover-overlay">
                        <span class="explore-text">Explore Collection</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>




< !-------------------/-Main Category------------------------>
    < !-- </div>--><br><br>
        < !--------------------who we are------------------------>
            <section class="about-section">
                <div class="container-fluid">
                    <div class=" no-gutters align-items-center">
                        < !-- Left Side Image -->
                            < !-- Right Side Content -->
                                <div class=" content-side" data-aos="fade-left">
                                    <div class="content-box">
                                        <h2 class="section-title">Who We Are</h2><img src="{{ asset('images/group-48099402.svg')}}" alt="About Us" class="img-fluid">
                                        <p class="section-text"> {
                                            ! ! $detail->about_us ! !
                                            }

                                        </p>
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