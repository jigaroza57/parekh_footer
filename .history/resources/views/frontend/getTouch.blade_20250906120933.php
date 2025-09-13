@extends('frontend/layout')
@section('content')

<br>
    <br>
    <br>

    <center>
        <div class="container">
                <h2 style="color: #622c2c; font-family: 'Lustria', serif;"> Get In Touch By Social
                    Content
        </h2>

        <img src="{{ asset('images/group-48099402.svg')}}"  class="img-fluid" style="width: 320px;" alt="">
                
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
                        <a href="{{$get->link}}" target=_blanck><img src="{{asset('public/images/get/'. $get->image) }}" 
                        class="img-fluid" 
                        style="width: 500px; height: 350px; border: 1px solid #581E1E;padding: 8px; border-radius:" alt=""> 
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