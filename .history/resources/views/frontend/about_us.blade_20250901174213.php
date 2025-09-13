@extends('frontend/layout')

@section('content')


<div class="container mt-3 about">
    <section class="py-5 bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="font-family: 'Lustria', serif; color: #622c2c;">
                    Who We Are
                </h2>
                <div class="underline mx-auto" style="width: 80px; height: 4px; background: #622c2c; border-radius: 2px;"></div>
            </div>

            <!-- Content Box -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="p-4 shadow-lg rounded bg-white show-on-scroll"
                        style="font-family: 'Lustria', serif; text-align: justify; line-height: 1.8; color: #444;">
                        {!! $detail->about_us !!}
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