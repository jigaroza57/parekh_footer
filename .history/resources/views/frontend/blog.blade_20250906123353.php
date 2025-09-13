@extends('frontend/layout')
@section('content')

<!-- AOS Animation Library -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<style>
    .blog-header {
        text-align: center;
        padding: 70px 20px 40px;
    }
    .blog-header h2 {
        color: #622c2c;
        font-family: 'Lustria', serif;
        font-size: 3rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
        background: linear-gradient(90deg, #622c2c, #b85c5c);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2rem;
    }

    .blog-card {
        position: relative;
        border-radius: 25px;
        overflow: hidden;
        background: #fff;
        transition: all 0.5s ease;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        transform-style: preserve-3d;
        transform: perspective(1000px) rotateX(0) rotateY(0);
    }
    .blog-card:hover {
        transform: perspective(1000px) rotateX(6deg) rotateY(-6deg) scale(1.03);
        box-shadow: 0 25px 50px rgba(0,0,0,0.25);
    }

    /* Animated Border */
    .blog-card::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 25px;
        padding: 2px;
        background: linear-gradient(45deg, #622c2c, #ff8a8a, #622c2c);
        -webkit-mask: 
          linear-gradient(#fff 0 0) content-box, 
          linear-gradient(#fff 0 0);
        -webkit-mask-composite: destination-out;
                mask-composite: exclude;
        animation: borderAnimation 4s linear infinite;
        z-index: 1;
    }
    @keyframes borderAnimation {
        0% { background-position: 0% 50%; }
        100% { background-position: 200% 50%; }
    }

    .blog-img {
        overflow: hidden;
        border-top-left-radius: 25px;
        border-top-right-radius: 25px;
    }
    .blog-img img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        transition: transform 0.7s ease;
    }
    .blog-card:hover .blog-img img {
        transform: scale(1.15) translateY(-8px);
    }

    .blog-card-body {
        padding: 25px;
        position: relative;
        z-index: 2;
    }
    .blog-card-body h3 {
        font-size: 22px;
        font-weight: 700;
        font-family: 'Lustria', serif;
        color: #622c2c;
        margin-bottom: 12px;
    }
    .blog-card-body p {
        font-size: 15px;
        line-height: 1.7rem;
        color: #555;
    }

    /* Animated Button */
    .read-more {
        display: inline-block;
        margin-top: 18px;
        padding: 10px 20px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        color: #fff;
        background: linear-gradient(90deg, #622c2c, #b85c5c, #622c2c);
        background-size: 200% 200%;
        animation: gradientMove 4s ease infinite;
        transition: transform 0.3s ease;
    }
    .read-more:hover {
        transform: scale(1.1);
    }
    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        100% { background-position: 200% 50%; }
    }

    /* Floating Entry Animation */
    [data-aos="card-zoom"] {
        transform: scale(0.8) translateY(50px);
        opacity: 0;
        transition: all 0.8s ease;
    }
    [data-aos="card-zoom"].aos-animate {
        transform: scale(1) translateY(0);
        opacity: 1;
    }
</style>

<div class="blog-header">
    <h2>Our Blogs</h2>
    <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid mt-3" style="width: 280px;" alt="">
</div>

<div class="container">
    <div class="blog-grid">
        @foreach($blogs as $blog)
        <div class="blog-card" data-aos="card-zoom" data-aos-delay="{{ $loop->index * 150 }}">
            <div class="blog-img">
                <img src="{{ asset('images/blog/'.$blog->image) }}" alt="img">
            </div>
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

@endsection
