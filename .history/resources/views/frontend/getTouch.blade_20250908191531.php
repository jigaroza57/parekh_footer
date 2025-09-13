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
            <h1 class="hero-title">Get In Touch By Social Content</h1>

            <!-- <p class="hero-subtitle" style="color: white;">We'd love to hear from you. Get in touch with our expert team.</p> -->
        </div>
    </div>
</section>

<!-- <center>
    <div class="container">
        <h2 style="color: #622c2c; font-family: 'Lustria', serif;"> Get In Touch By Social Content
        </h2>

        <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid" style="width: 320px;" alt="">

    </div>
</center> -->

<br>
<br>
<br>
<div class="container py-4">
    @foreach($gets->chunk(4) as $row)
    <div class="row g-3">
        @foreach($row as $get)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-card">
                <a href="{{ $get->link }}" target="_blank" class="text-decoration-none position-relative d-block">
                    <img src="{{ asset('images/get/' . $get->image) }}"
                        alt=""
                        class="img-fluid w-100 card-img-top object-fit-cover"
                        style="aspect-ratio: 4/3;">
                    <span class="overlay-gradient"></span>
                    <span class="overlay-content">
                        <span class="badge bg-light text-dark fw-semibold px-3 py-2">View</span>
                    </span>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>


<style></style>

<br>
<br>

@endsection