@extends('frontend/layout')

@section('content')


<div class="container mt-3 about">
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 style="font-family: 'Lustria', serif; color: #622c2c;">Who We Are</h2>
                <p class="text-muted">Our mission, values, and what makes us unique.</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow border-0 p-4 text-center">
                        <div class="icon mb-3">
                            <i class="bi bi-people" style="font-size: 40px; color: #622c2c;"></i>
                        </div>
                        <p>{!! $detail->about_us !!}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-0 p-4 text-center">
                        <i class="bi bi-lightbulb" style="font-size: 40px; color: #622c2c;"></i>
                        <p>Our vision is to innovate and inspire.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-0 p-4 text-center">
                        <i class="bi bi-award" style="font-size: 40px; color: #622c2c;"></i>
                        <p>We strive for excellence in everything we do.</p>
                    </div>
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