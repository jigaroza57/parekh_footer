@extends('frontend/layout')
@section('content')

<br>
    <br>
    <center>
        <div class="container">
            <h2 style="color: #622c2c; font-family: 'Lustria', serif;">{{$blog->title}}
</h2>
                <img src="{{ asset('images/group-48099402.svg')}}"  class="img-fluid" style="width: 320px;" alt="">
        </div>
    </center>
    <br>
    <br>
    <br>
    <div class="container">
    <div class="row">
            <div class="col-md-4" style="padding-bottom:20px;">
                <div class="card contact-info-card"  style="height: 100%;  border: 1px solid #581E1E;">
                    <img src="{{ asset('images/blog/'.$blog->image) }}" alt="img" style="width:100%; height: 300px;  border-radius: 5px 5px 0 0; padding:10px;">
                </div>
            </div>  
            <div class="col-md-8" style="padding-bottom:20px;">
                <p style="text-align: justify; color: dimgrey; line-height: 1.563rem; font-weight: 300;">{{$blog->detail}}</p>
            </div>
    </div><br>
</div>
<br>
<br>
 
@endsection