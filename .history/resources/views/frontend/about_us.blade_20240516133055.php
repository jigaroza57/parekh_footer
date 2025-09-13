@extends('frontend/layout')

@section('content')


<div class="container mt-3 about">
        <center>
            <div class="row col-12">
                <div class="col-md-12">
                    <h2 class="text-center mt-5" style=" font-family: 'Lustria', serif; color: #622c2c; ">Who We Are</h2>
                    <img src="{{ asset('public/images/group-48099402.svg')}}"  class="img-fluid" style="width: 320px;" alt="">
                </div>
            </div>
        </center>
        <br>
        <br>

        <center>
            <div class="row col-12">
                <div class="content" style="text-align: justify;">
                    <br>
					<div class="box show-on-scroll" data-sr="zoom" >{!! $detail->about_us !!}</div>
				</div>
                    

                <!-- <div class="col-md-5">
                    
					<div id="myCarousel" class="carousel slide" data-ride="carousel"  >
						
						<div class="carousel-inner" id="proparallax">
							@foreach($about_slider as $about_slide)
								<div class="item {{ $loop->first ? ' active' : '' }}">
								<img src="{{ asset('public/images/about_slider/'.$about_slide->image)}}" alt="Slide" class="img-fluid ig" >
								</div>
							@endforeach
						</div>
					</div>
                </div>
            </div> -->
			<!--<div class="col-md-5 about_img">-->
   <!--                 <div>-->
   <!--                     <img src="{{ asset('public/images/about_slider/'.$about_slide->image)}}" alt="" class="img-fluid ig">-->
   <!--                 </div>-->
   <!--             </div>-->
        </center>
        <br>
        <br>
        <center>
            <div class="row col-12">
                <div class="col-md-12">
                    <h2 class="text-center mt-5" style=" font-family: 'Lustria', serif; color: #622c2c; font-size: 40px;">Our Products</h2>
                    <img id="design-image" src="{{ asset('public/images/group-48099402.svg')}}" alt="">
                </div>
            </div>
        </center>
        <br>

        <center>
            <div class="row col-12" id="card">

				<div class="col-md-6 col-lg-4 mt-3">
                    <div style="border: 1px solid #622c2c; border-radius:5px; padding: 7px;">
                        <img src="{{ asset('public/images/Platinum.jpg')}}" alt="" class="img-fluid " style="height:300px;">
                    </div>
                    <h3 class="text-center mt-3">Platinum</h3>
                    <p style="text-align: justify;">{{ $home_setting->platinum }}</p>
                </div>

                <div class="col-md-6 col-lg-4 mt-3">
                    <div style="border: 1px solid #622c2c;border-radius:5px; padding: 7px;">

                        <img src="{{ asset('public/images/gold.jpg')}}" alt="" class="img-fluid " style="height:300px;">
                    </div>
                    <h3 class="text-center mt-3">Gold</h3>
                    <p style="text-align: justify;">{{ $home_setting->gold }}</p>
                </div>

                <div class="col-md-6 col-lg-4 mt-3">
                    <div style="border: 1px solid #622c2c;border-radius:5px; padding: 7px;">

                        <img src="{{ asset('public/images/silver.jpg')}}" alt="" class="img-fluid " style="height:300px;">
                    </div>
                    <h3 class="text-center mt-3">Silver</h3>
                    <p style="text-align: justify;">{{ $home_setting->silver }} </p>
                </div>
            </div>

            <div class="row col-12" id="gift-stone">
				<div class="col-md-6 col-lg-4 mt-3">
                    <div style="border: 1px solid #622c2c;border-radius:5px; padding: 7px;">
                        <img src="{{ asset('public/images/stone.jpg')}}" alt="" class="img-fluid " style="height:300px;">
                    </div>
                    <h3 class="text-center mt-3">Precious Stone</h3>
                    <p style="text-align: justify;">{{ $home_setting->stone }}</p>
					
                </div>
                
                <div class="col-md-6 col-lg-4 mt-3">
                    <div style="border: 1px solid #622c2c;border-radius:5px; padding: 7px;">

                        <img src="{{ asset('public/images/ring.png')}}" alt="" class="img-fluid " style="height:300px; width:100%;">
                    </div>
                    <h3 class="text-center mt-3">Gift</h3>
                    <p style="text-align: justify;">{{ $home_setting->gift }} </p>
                </div>
            </div>

        </center>

        <br>
        <br>

       

@endsection