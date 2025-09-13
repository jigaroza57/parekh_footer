@extends('frontend/layout')

@section('content')


<div class="container mt-3 about">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .about-section {
            padding: 60px 20px;
            background: linear-gradient(to right, #fdfbfb, #ebedee);
            text-align: center;
        }

        .about-section h2 {
            font-family: 'Lustria', serif;
            color: #622c2c;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
        }

        .about-section h2::after {
            content: '';
            width: 60px;
            height: 4px;
            background: #622c2c;
            display: block;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .about-section img {
            width: 320px;
            margin: 20px 0;
            transition: transform 0.3s ease-in-out;
        }

        .about-section img:hover {
            transform: scale(1.05);
        }

        .about-text {
            max-width: 800px;
            margin: 20px auto;
            text-align: justify;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            animation: fadeInUp 1s ease-in-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <section class="about-section">
        <h2>Who We Are</h2>
        <img src="{{ asset('images/group-48099402.svg') }}" class="img-fluid" alt="About Us">

        <div class="about-text box show-on-scroll" data-sr="zoom">
            {!! $detail->about_us !!}
        </div>
    </section>
    <br>
    <br>
    <center>
        <div class="row col-12">
            <div class="col-md-12">
                <h2 class="text-center mt-5" style=" font-family: 'Lustria', serif; color: #622c2c; font-size: 40px;">Our Products</h2>
                <img id="design-image" src="{{ asset('images/group-48099402.svg')}}" alt="">
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

    <br>
    <br>
</div>


@endsection