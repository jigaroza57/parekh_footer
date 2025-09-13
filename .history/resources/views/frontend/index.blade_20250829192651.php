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