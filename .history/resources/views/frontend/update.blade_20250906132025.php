@extends('frontend/layout')
@section('content')

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
