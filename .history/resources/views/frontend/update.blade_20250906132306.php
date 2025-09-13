@extends('frontend/layout')
@section('content')

<style>
    /* Custom Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scaleHover {
        to {
            transform: scale(1.03);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
    }

    .animate-card {
        animation: fadeInUp 0.6s ease-out forwards;
        animation-delay: calc(var(--i) * 0.2s);
    }

    .card:hover {
        animation: scaleHover 0.3s ease-out forwards;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    .image-overlay {
        position: relative;
        overflow: hidden;
    }

    .image-overlay::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
        transition: background 0.3s ease;
    }

    .image-overlay:hover::after {
        background: rgba(0, 0, 0, 0.1);
    }

    .title-underline {
        position: relative;
        display: inline-block;
    }

    .title-underline::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: linear-gradient(to right, #581e1e, #f59e0b);
        border-radius: 2px;
    }
</style>

<div class="container my-5 gradient-bg py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-3xl md:text-4xl text-[#581e1e] font-['Lustria',serif] title-underline animate__animated animate__fadeIn">
            What’s New
        </h2>
        <img src="{{ asset('images/group-48099402.svg') }}" class="img-fluid mt-4 mx-auto animate__animated animate__zoomIn" style="max-width: 280px;" alt="What's New">
    </div>

    <div class="row justify-content-center">
        @foreach($update as $key => $up)
            {{-- Gold Section --}}
            @if(!empty($up->gold))
                <div class="col-md-10 mb-5" style="--i: {{ $key + 1 }}">
                    <div class="card shadow-lg border-0 rounded-3xl overflow-hidden bg-white animate-card transition-all duration-300">
                        <div class="row g-0">
                            <div class="col-md-4 image-overlay">
                                <img src="{{ asset('images/gold.jpg') }}" class="img-fluid h-full w-full object-cover transform transition-transform duration-500 hover:scale-110" alt="Gold">
                            </div>
                            <div class="col-md-8 d-flex align-items-center bg-gradient-to-r from-yellow-50 to-white">
                                <div class="p-5">
                                    <h4 class="fw-bold text-2xl text-yellow-600 animate__animated animate__fadeInLeft">Gold Update</h4>
                                    <p class="mt-3 text-lg text-[#581e1e] text-justify leading-relaxed">
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
                <div class="col-md-10 mb-5" style="--i: {{ $key + 2 }}">
                    <div class="card shadow-lg border-0 rounded-3xl overflow-hidden bg-white animate-card transition-all duration-300">
                        <div class="row g-0 flex-row-reverse">
                            <div class="col-md-4 image-overlay">
                                <img src="{{ asset('images/silver.jpg') }}" class="img-fluid h-full w-full object-cover transform transition-transform duration-500 hover:scale-110" alt="Silver">
                            </div>
                            <div class="col-md-8 d-flex align-items-center bg-gradient-to-r from-gray-50 to-white">
                                <div class="p-5">
                                    <h4 class="fw-bold text-2xl text-gray-600 animate__animated animate__fadeInRight">Silver Update</h4>
                                    <p class="mt-3 text-lg text-[#581e1e] text-justify leading-relaxed">
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
                <div class="col-md-10 mb-5" style="--i: {{ $key + 3 }}">
                    <div class="card shadow-lg border-0 rounded-3xl overflow-hidden bg-white animate-card transition-all duration-300">
                        <div class="row g-0">
                            <div class="col-md-4 image-overlay">
                                <img src="{{ asset('images/platinum.jpg') }}" class="img-fluid h-full w-full object-cover transform transition-transform duration-500 hover:scale-110" alt="Platinum">
                            </div>
                            <div class="col-md-8 d-flex align-items-center bg-gradient-to-r from-blue-50 to-white">
                                <div class="p-5">
                                    <h4 class="fw-bold text-2xl text-gray-700 animate__animated animate__fadeInLeft">Platinum Update</h4>
                                    <p class="mt-3 text-lg text-[#581e1e] text-justify leading-relaxed">
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