@extends('frontend/layout')
@section('content')

<!-- AOS Animation CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Hero Section -->
<section class="position-relative">
    <div class="hero-banner" 
         style="background: url('{{ asset('images/blog/'.$blog->image) }}') center/cover no-repeat; height: 70vh; filter: brightness(0.7);">
    </div>
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-3" data-aos="zoom-in">
        <h1 class="fw-bold display-4" style="font-family: 'Lustria', serif;">
            {{ $blog->title }}
        </h1>
        <p class="mt-3 fst-italic">Published on {{ $blog->created_at->format('F d, Y') }}</p>
    </div>
</section>

<!-- Blog Content -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="bg-white shadow-lg rounded-4 p-5" data-aos="fade-up" style="margin-top: -100px;">
                
                <!-- Blog Detail -->
                <p class="text-muted fs-5" style="line-height: 1.9; text-align: justify;">
                    {{ $blog->detail }}
                </p>

                <!-- Author Info -->
                <div class="d-flex align-items-center mt-5 p-3 bg-light rounded-3" data-aos="fade-left">
                    <img src="{{ asset('images/group-48099402.svg')}}" 
                         alt="author" 
                         class="rounded-circle me-3" 
                         style="width: 70px; height: 70px; object-fit: cover;">
                    <div>
                        <h6 class="mb-1 fw-bold" style="color:#581E1E;">Admin</h6>
                        <small class="text-muted">Sharing knowledge & insights</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Suggested Blogs -->
<div class="container my-5">
    <h3 class="text-center fw-bold mb-4" style="color:#581E1E;" data-aos="fade-up">You May Also Like</h3>
    <div class="row g-4">
        @foreach($relatedBlogs as $rel)
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                <img src="{{ asset('images/blog/'.$rel->image) }}" class="card-img-top" style="height:200px; object-fit:cover;" alt="">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $rel->title }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($rel->detail, 100) }}</p>
                    <a href="{{ url('blog/'.$rel->id) }}" class="btn btn-sm" style="background:#581E1E; color:#fff; border-radius:20px;">
                        Read More
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

@endsection
