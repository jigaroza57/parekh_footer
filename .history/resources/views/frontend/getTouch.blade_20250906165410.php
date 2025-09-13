@extends('frontend/layout')
@section('content')

<br>
<br>
<br>
<!-- Hero Section -->
<section class="contact-hero" style="background-image: url('images/new/section_bg_img.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="hero-title">Connect With Us</h1>
            <p class="hero-subtitle">We'd love to hear from you. Get in touch with our expert team.</p>
        </div>
    </div>
</section>

<center>
    <div class="container">
        <h2 style="color: #622c2c; font-family: 'Lustria', serif;"> Get In Touch By Social
            Content
        </h2>

        <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid" style="width: 320px;" alt="">

    </div>
</center>

<br>
<br>
<br>
<div class="container">

    <div class="row">
        @foreach($gets as $get)

        <div class="col-md-3 mt-3">
            <div class="card">
                <a href="{{$get->link}}" target=_blanck><img src="{{asset('images/get/'. $get->image) }}"
                        class="img-fluid"
                        style="width: 500px; height: 350px; border: 1px solid #581E1E;padding: 8px; " alt="">
                </a>
            </div>
        </div>
        @if ($loop->iteration % 4 == 0)
    </div>
    <div class="col-md-3 mt-3">
        @endif

        @endforeach
    </div><br>
</div>

<br>
<br>

@endsection