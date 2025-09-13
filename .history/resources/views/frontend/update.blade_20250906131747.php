@extends('frontend/layout')
@section('content')


<div class="container">
        <center>
            <br>
            <br>
            <h2 style="color: #581e1e;font-weight: 400; font-family: 'Lustria', serif;">What’s New</h2>
            <img src="{{ asset('images/group-48099402.svg')}}"  class="img-fluid" style="width: 320px;" alt="">

        </center>
        <br>
        <br>
        <br>
        <center>
        @foreach($update as $up)
        @if($up->gold != "")
        
            <div style="border: 1px solid black; border-radius:7px; padding: 20px;">
                <div class="row">
                    <div class="col-md-4" style="text-align: justify;">
                        <img src="{{ asset('images/gold.jpg')}}" class="img-fluid" style="width: 250px; height: 150px; border-radius:7px; " alt="">
                    </div>
                    <div class="col-md-8">
                        <p id="main-text " class="mx-3 mt-3" style="text-align: justify; font-size: 22px; color: #581e1e;">
                        {!! $up->gold !!}
                        </p>
                    </div>
                </div>
            </div>
        </center>

        <br>
        <br>
        @endif
        @if($up->silver != "")
        <center>
            <div style="border: 1px solid black; border-radius:7px; padding: 20px; ">
                <div class="row">
                    <div class="col-md-4" style="text-align: justify;">
                        <img src="{{ asset('images/silver.jpg')}}" class="img-fluid" style="width: 250px; height: 150px; border-radius:7px; " alt="">
                    </div>
                    <div class="col-md-8">
                        <p id="main-text" class="mx-3 mt-3" style="text-align: justify; font-size: 22px; color: #581e1e;">
                        {!! $up->silver !!}
                        </p>
                    </div>
                </div>
            </div>
        </center>
        @endif
        <br>
        <br>
        @if($up->platinum != "")
        <center>
            <div style="border: 1px solid black; border-radius:7px;  padding: 20px; ">
                <div class="row">
                    <div class="col-md-4" style="text-align: justify;">
                        <img src="{{ asset('public/images/Platinum.jpg')}}" class="img-fluid" style="width: 250px; height: 150px; border-radius:7px; " alt="">
                    </div>
                    <div class="col-md-8">
                        <p class="mx-3 mt-3" style="text-align: justify; font-size: 22px; color: #581e1e;">
                        {!! $up->platinum !!}
                        </p>
                    </div>
                </div>
            </div>
        </center>
    @endif
    @endforeach
    </div>

    <br>
    <br>

   


<!------------------------------------------------------------------>

 
@endsection