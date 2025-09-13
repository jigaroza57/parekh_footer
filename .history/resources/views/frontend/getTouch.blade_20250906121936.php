@extends('frontend/layout')
@section('content')

<div class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-3" style="color: #622c2c; font-family: 'Lustria', serif;">
            Get In Touch By Social Content
        </h2>
        <p class="text-muted mb-4">Stay connected with us through our social platforms</p>
        <img src="{{ asset('images/group-48099402.svg')}}"  
             class="img-fluid animate__animated animate__zoomIn" 
             style="width: 280px;" alt="">
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 justify-content-center">
        @foreach($gets as $get)
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="card shadow-sm border-0 h-100 rounded-3 overflow-hidden social-card">
                    <a href="{{$get->link}}" target="_blank">
                        <img src="{{ asset('images/get/'. $get->image) }}" 
                             class="img-fluid w-100 social-img" 
                             alt="social">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Animation & Styling --}}
@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<style>
    .social-card {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .social-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 12px 24px rgba(0,0,0,0.15);
    }
    .social-img {
        border-radius: 12px;
        border: 3px solid #581E1E;
        transition: transform 0.4s ease;
    }
    .social-card:hover .social-img {
        transform: scale(1.08) rotate(1deg);
    }
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
    });
</script>
@endpush

@endsection
