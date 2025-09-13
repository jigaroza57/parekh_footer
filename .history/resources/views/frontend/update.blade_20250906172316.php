@extends('frontend/layout')
@section('content')


<style>
    /* Custom Styles for Contact Page */
    .contact-hero {
        background: linear-gradient(135deg, #5B2323 0%, #622c2c 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="%23FDBE51" opacity="0.1"/><circle cx="80" cy="40" r="1.5" fill="%23FDBE51" opacity="0.08"/><circle cx="40" cy="80" r="1" fill="%23FDBE51" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') repeat;
        opacity: 0.3;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-family: "Aladin", system-ui;
        letter-spacing: 4px;
        color: white;
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        animation: slideInDown 1s ease-out;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }
    }
</style>
<!-- Hero Section -->
<section class="contact-hero" style="background-image: url('images/new/section_bg_img.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="hero-title">What’s New </h1>
        <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid mt-3" style="max-width: 280px;" alt="">

            <!-- <p class="hero-subtitle" style="color: white;">We'd love to hear from you. Get in touch with our expert team.</p> -->
        </div>
    </div>
</section>

<div class="container my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color:#581e1e; font-family:'Lustria', serif;">What’s New</h2>
        <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid mt-3" style="max-width: 280px;" alt="">
    </div>

    <div class="row justify-content-center">
        @foreach($update as $up)

            {{-- Gold Section --}}
            @if(!empty($up->gold))
                <div class="col-md-10 mb-5">
                    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/gold.jpg')}}" class="img-fluid h-100 w-100 object-fit-cover" alt="Gold">
                            </div>
                            <div class="col-md-8 d-flex align-items-center bg-light">
                                <div class="p-4">
                                    <h4 class="fw-bold text-warning">Gold Update</h4>
                                    <p class="mt-2" style="font-size:18px; color:#581e1e; text-align:justify;">
                                        {!! $up->gold !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Silver Section --}}
            @if(!empty($up->silver))
                <div class="col-md-10 mb-5">
                    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                        <div class="row g-0 flex-row-reverse">
                            <div class="col-md-4">
                                <img src="{{ asset('images/silver.jpg')}}" class="img-fluid h-100 w-100 object-fit-cover" alt="Silver">
                            </div>
                            <div class="col-md-8 d-flex align-items-center bg-light">
                                <div class="p-4">
                                    <h4 class="fw-bold text-secondary">Silver Update</h4>
                                    <p class="mt-2" style="font-size:18px; color:#581e1e; text-align:justify;">
                                        {!! $up->silver !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Platinum Section --}}
            @if(!empty($up->platinum))
                <div class="col-md-10 mb-5">
                    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/platinum.jpg')}}" class="img-fluid h-100 w-100 object-fit-cover" alt="Platinum">
                            </div>
                            <div class="col-md-8 d-flex align-items-center bg-light">
                                <div class="p-4">
                                    <h4 class="fw-bold" style="color:#8e8e8e;">Platinum Update</h4>
                                    <p class="mt-2" style="font-size:18px; color:#581e1e; text-align:justify;">
                                        {!! $up->platinum !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        @endforeach
    </div>
</div>

@endsection
