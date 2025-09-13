@extends('frontend/layout')
@section('content')

<!-- AOS Animation Library -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<style>
    .blog-header {
        text-align: center;
        padding: 60px 20px;
    }
    .blog-header h2 {
        color: #622c2c;
        font-family: 'Lustria', serif;
        font-size: 2.8rem;
        font-weight: 700;
        position: relative;
        display: inline-block;
    }
    .blog-header h2::after {
        content: '';
        width: 60%;
        height: 3px;
        background: #622c2c;
        display: block;
        margin: 10px auto 0;
        border-radius: 50px;
    }

    /* Masonry Grid */
    .masonry {
        column-count: 3;
        column-gap: 1.5rem;
    }
    @media (max-width: 991px) {
        .masonry { column-count: 2; }
    }
    @media (max-width: 576px) {
        .masonry { column-count: 1; }
    }

    .blog-card {
        background: rgba(255,255,255,0.8);
        border-radius: 20px;
        margin-bottom: 1.5rem;
        display: inline-block;
        overflow: hidden;
        width: 100%;
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        transition: all 0.4s ease;
        backdrop-filter: blur(10px);
    }
    .blog-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 15px 35px rgba(0,0,0,0.18);
    }

    .blog-img {
        position: relative;
        overflow: hidden;
    }
    .blog-img img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }
    .blog-card:hover .blog-img img {
        transform: scale(1.1);
    }

    /* Overlay */
    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0;
        background: linear-gradient(to top, rgba(98,44,44,0.9), transparent);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        padding: 20px;
        opacity: 0;
        transition: all 0.4s ease;
    }
    .blog-card:hover .overlay {
        height: 100%;
        opacity: 1;
    }

    .blog-card-body {
        padding: 20px;
    }
    .blog-card-body h3 {
        font-size: 22px;
        font-weight: 700;
        font-family: 'Lustria', serif;
        color: #622c2c;
        margin-bottom: 10px;
    }
    .blog-card-body p {
        font-size: 15px;
        line-height: 1.6rem;
        color: #444;
    }

    .read-more {
        display: inline-block;
        margin-top: 12px;
        color: #fff !important;
        background: #622c2c;
        padding: 8px 18px;
        border-radius: 30px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.3s;
    }
    .read-more:hover {
        background: #450f0f;
        transform: scale(1.08);
    }

    /* Badge */
    .badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #622c2c;
        color: #fff;
        font-size: 13px;
        padding: 5px 12px;
        border-radius: 20px;
        font-weight: 600;
    }
</style>

<div class="blog-header">
    <h2> Our Blogs </h2>
    <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid mt-3" style="width: 320px;" alt="">
</div>

<div class="container">
    <div class="masonry">
        @foreach($blogs as $blog)
        <div class="blog-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="blog-img">
                <img src="{{ asset('images/blog/'.$blog->image) }}" alt="img">
                <div class="badge">Blog</div>
                <div class="overlay">
                    <a href="{{route('frontend.blog_detail',['id'=>$blog->id])}}" class="read-more">Read More →</a>
                </div>
            </div>
            <div class="blog-card-body">
                <h3>{{$blog->title}}</h3>
                @if (strlen($blog->detail) > 150)
                    @php $truncatedDetail = substr($blog->detail, 0, 150); @endphp
                    <p>{!! $truncatedDetail !!}...</p>
                @else
                    <p>{{$blog->detail}}</p>
                @endif
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
