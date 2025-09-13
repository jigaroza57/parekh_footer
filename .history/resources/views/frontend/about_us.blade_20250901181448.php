@extends('frontend/layout')

@section('content')


<div class="container mt-3 about">
    <section class="py-5" style="background: linear-gradient(to right, #f7f1f1, #ffffff);">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="your-image.jpg" class="img-fluid rounded shadow" alt="About Us">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3" style="color: #622c2c; font-family: 'Lustria', serif;">Who We Are</h2>
                    <p class="lead" style="line-height: 1.8; color: #555;">{!! $detail->about_us !!}</p>
                    <a href="#more" class="btn btn-lg px-4" style="background: #622c2c; color: #fff; border-radius: 30px;">Learn More</a>
                </div>
            </div>
        </div>
    </section>


    <style>
        .show-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-in-out;
        }

        .show-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script>
        document.addEventListener('scroll', function() {
            document.querySelectorAll('.show-on-scroll').forEach(function(el) {
                let position = el.getBoundingClientRect().top;
                let windowHeight = window.innerHeight;
                if (position < windowHeight - 50) {
                    el.classList.add('visible');
                }
            });
        });
    </script>
    <br>
    <br>
    <center>
        <div class="row col-12">
            <div class="col-md-12">
                <h2 class="text-center mt-5" style=" font-family: 'Lustria', serif; color: #622c2c; font-size: 40px;">Our Products</h2>
                <!-- <img id="design-image" src="{{ asset('images/group-48099402.svg')}}" alt=""> -->
            </div>
        </div>
    </center>
    <br>

    <center>
        <div class="row col-12" id="card">

            <div class="col-md-6 col-lg-4 mt-3">
                <div style="border: 1px solid #622c2c; border-radius:5px; padding: 7px;">
                    <img src="{{ asset('images/Platinum.jpg')}}" alt="" class="img-fluid " style="height:300px;">
                </div>
                <h3 class="text-center mt-3">Platinum</h3>
                <p style="text-align: justify;">{{ $home_setting->platinum }}</p>
            </div>

            <div class="col-md-6 col-lg-4 mt-3">
                <div style="border: 1px solid #622c2c;border-radius:5px; padding: 7px;">

                    <img src="{{ asset('images/gold.jpg')}}" alt="" class="img-fluid " style="height:300px;">
                </div>
                <h3 class="text-center mt-3">Gold</h3>
                <p style="text-align: justify;">{{ $home_setting->gold }}</p>
            </div>

            <div class="col-md-6 col-lg-4 mt-3">
                <div style="border: 1px solid #622c2c;border-radius:5px; padding: 7px;">

                    <img src="{{ asset('images/silver.jpg')}}" alt="" class="img-fluid " style="height:300px;">
                </div>
                <h3 class="text-center mt-3">Silver</h3>
                <p style="text-align: justify;">{{ $home_setting->silver }} </p>
            </div>
        </div>

        <div class="row col-12" id="gift-stone">
            <div class="col-md-6 col-lg-4 mt-3">
                <div style="border: 1px solid #622c2c;border-radius:5px; padding: 7px;">
                    <img src="{{ asset('images/stone.jpg')}}" alt="" class="img-fluid " style="height:300px;">
                </div>
                <h3 class="text-center mt-3">Precious Stone</h3>
                <p style="text-align: justify;">{{ $home_setting->stone }}</p>

            </div>

            <div class="col-md-6 col-lg-4 mt-3">
                <div style="border: 1px solid #622c2c;border-radius:5px; padding: 7px;">

                    <img src="{{ asset('images/ring.png')}}" alt="" class="img-fluid " style="height:300px; width:100%;">
                </div>
                <h3 class="text-center mt-3">Gift</h3>
                <p style="text-align: justify;">{{ $home_setting->gift }} </p>
            </div>
        </div>

    </center>


    <style>
        :root {
            --primary-color: #622C2C;
            --accent-color: #FECB63;
            --light-bg: #FAF9F6;
            --text-dark: #2C2C2C;
            --shadow-light: rgba(98, 44, 44, 0.1);
            --shadow-medium: rgba(98, 44, 44, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--light-bg) 0%, #f8f6f0 100%);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            margin: 20px auto;
            border-radius: 2px;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px var(--shadow-light);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            position: relative;
            border: 2px solid transparent;
        }

        .product-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px var(--shadow-medium);
            border-color: var(--accent-color);
        }

        .card-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 280px;
            background: linear-gradient(45deg, #f8f8f8, #ffffff);
        }

        .card-image-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, transparent 0%, rgba(254, 203, 99, 0.1) 100%);
            z-index: 1;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.1);
        }

        .card-content {
            padding: 30px 25px;
            background: white;
            position: relative;
        }

        .product-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            text-align: center;
            position: relative;
        }

        .product-title::after {
            content: '';
            display: block;
            width: 40px;
            height: 2px;
            background: var(--accent-color);
            margin: 10px auto;
            border-radius: 1px;
        }

        .product-description {
            color: #666;
            font-size: 1rem;
            line-height: 1.7;
            text-align: justify;
            margin-bottom: 20px;
        }

        .premium-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, var(--accent-color), #f4b942);
            color: var(--primary-color);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 2;
            box-shadow: 0 4px 15px rgba(254, 203, 99, 0.4);
        }

        .metal-icon {
            position: absolute;
            bottom: 20px;
            right: 20px;
            color: var(--accent-color);
            font-size: 1.5rem;
            opacity: 0.7;
        }

        .row {
            margin: 0 -15px;
        }

        .col-lg-4 {
            padding: 0 15px;
            margin-bottom: 40px;
        }

        .precious-metals {
            margin-bottom: 60px;
        }

        .luxury-items {
            margin-top: 40px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }

            .product-title {
                font-size: 1.4rem;
            }

            .card-content {
                padding: 20px;
            }

            .main-container {
                padding: 20px 15px;
            }
        }

        /* Animation for loading effect */
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

        .product-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .product-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .product-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .product-card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .product-card:nth-child(4) {
            animation-delay: 0.4s;
        }

        .product-card:nth-child(5) {
            animation-delay: 0.5s;
        }

        /* Hover effects for icons */
        .metal-icon {
            transition: all 0.3s ease;
        }

        .product-card:hover .metal-icon {
            transform: scale(1.2);
            opacity: 1;
        }
    </style>
    <br>
    <br>
</div>


@endsection