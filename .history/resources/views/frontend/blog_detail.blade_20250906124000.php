@extends('frontend/layout')
@section('content')

<!-- AOS Animation CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<div class="container py-5">
    
    <!-- Blog Title -->
    <div class="text-center mb-5" data-aos="fade-down">
        <h2 class="fw-bold" style="color: #581E1E; font-family: 'Lustria', serif;">
            {{ $blog->title }}
        </h2>
        <div class="mt-3">
            <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid" style="width: 280px;" alt="decor">
        </div>
    </div>

    <!-- Blog Content -->
    <div class="row align-items-center">
        
        <!-- Blog Image -->
        <div class="col-md-5 mb-4" data-aos="fade-right">
            <div class="card shadow-lg border-0 rounded-3 overflow-hidden">
                <img src="{{ asset('images/blog/'.$blog->image) }}" 
                     alt="Blog Image" 
                     class="img-fluid" 
                     style="object-fit: cover; height: 350px;">
            </div>
        </div>

        <!-- Blog Detail -->
        <div class="col-md-7" data-aos="fade-left">
            <div class="p-4 bg-light rounded-3 shadow-sm">
                <p style="text-align: justify; color: #555; line-height: 1.8; font-size: 1.05rem;">
                    {{ $blog->detail }}
                </p>
            </div>
        </div>
    </div>

    <!-- Decorative Divider -->
    <div class="text-center my-5" data-aos="zoom-in">
        <hr class="mx-auto" style="width: 60px; height: 4px; background-color: #581E1E; border: none; border-radius: 10px;">
    </div>

    <!-- Suggested Section (Optional) -->
    <div class="text-center mt-5" data-aos="fade-up">
        <h4 class="fw-bold" style="color:#581E1E;">You May Also Like</h4>
        <p class="text-muted">Explore more from our latest blogs</p>
        <a href="{{ url('/blogs') }}" class="btn btn-lg px-4 mt-3" style="background:#581E1E; color:#fff; border-radius: 30px;">
            View All Blogs
        </a>
    </div>

</div>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // animation duration
    once: true // run animation only once
  });
</script>

@endsection
