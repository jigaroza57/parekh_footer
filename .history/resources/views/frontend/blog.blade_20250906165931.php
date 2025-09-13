@extends('frontend/layout')
@section('content')

<!-- AOS Animation Library -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<style>
    .blog-header {
        text-align: center;
        padding: 50px 20px;
    }

    .blog-header h2 {
        color: #622c2c;
        font-family: 'Lustria', serif;
        font-size: 2.5rem;
        font-weight: 700;
    }

    .blog-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.4s ease-in-out;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        background: #fff;
    }

    .blog-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .blog-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        border-bottom: 5px solid #622c2c;
    }

    .blog-card-body {
        padding: 20px;
    }

    .blog-card-body h3 {
        font-size: 22px;
        font-weight: 700;
        font-family: 'Lustria', serif;
        color: #622c2c;
        margin-bottom: 15px;
    }

    .blog-card-body p {
        font-size: 15px;
        line-height: 1.6rem;
        color: #555;
        text-align: justify;
    }

    .read-more {
        display: inline-block;
        margin-top: 10px;
        color: #fff !important;
        background: #622c2c;
        padding: 8px 16px;
        border-radius: 30px;
        text-decoration: none;
        transition: all 0.3s;
        font-size: 14px;
    }

    .read-more:hover {
        background: #450f0f;
        transform: scale(1.05);
    }
</style>


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
            <h1 class="hero-title">Our Blogs </h1>

            <!-- <p class="hero-subtitle" style="color: white;">We'd love to hear from you. Get in touch with our expert team.</p> -->
        </div>
    </div>
</section>


<div class="blog-header">
    <h2> Our Blogs </h2>
    <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid" style="width: 320px;" alt="">
</div>

<br>

<div class="container">
    <div class="row g-4">
        @foreach($blogs as $blog)
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="blog-card">
                <img src="{{ asset('images/blog/'.$blog->image) }}" alt="img">
                <div class="blog-card-body">
                    <h3>{{$blog->title}}</h3>
                    @if (strlen($blog->detail) > 150)
                    @php $truncatedDetail = substr($blog->detail, 0, 150); @endphp
                    <p>{!! $truncatedDetail !!}...</p>
                    @else
                    <p>{{$blog->detail}}</p>
                    @endif
                    <a href="{{route('frontend.blog_detail',['id'=>$blog->id])}}" class="read-more">Read More →</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Initialize AOS -->
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>

<br>
<br>
<br>
<br>

@endsection