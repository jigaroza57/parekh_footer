@extends('frontend/layout')
@section('content')

<br>
    <br>
    <center>
        <div class="container">
            <h2 style="color: #622c2c; font-family: 'Lustria', serif;">Our Blogs
</h2>
                <img src="{{ asset('images/group-48099402.svg')}}"  class="img-fluid" style="width: 320px;" alt="">
        </div>
    </center>
    <br>
    <br>
    <br>
    <div class="container">
    <div class="row">
    @foreach($blogs as $blog)
   
    
    <div class="col-md-4" style="padding-bottom:20px;">
	    <div class="card contact-info-card"  style="height: 100%;  border: 1px solid #581E1E;">
            <img src="{{ asset('images/blog/'.$blog->image) }}" alt="img" style="width:100%; height: 300px;  border-radius: 5px 5px 0 0; padding:10px;">
            <div class="card-body" style="margin-top:20px;">

                
                        <h3 style="font-size: 30px; font-family: 'Lustria', serif; color: #622c2c; ">{{$blog->title}}</h3>

                        @if (strlen($blog->detail) > 200) <!-- Adjust 200 to your desired length -->
                            @php
                                $truncatedDetail = substr($blog->detail, 0, 200);
                            @endphp
                            <p style="text-align: justify; color: dimgrey; line-height: 1.563rem; font-weight: 300; height: 7.5rem;">
                                {!! $truncatedDetail !!}... <a href="{{route('frontend.blog_detail',['id'=>$blog->id])}}" style="color:#581E1E; text-decoration:none; font-weight:400;">Read more</a>
                            </p>
                        @else
                            <p style="text-align: justify; color: dimgrey; line-height: 1.563rem; font-weight: 300;">{{$blog->detail}}</p>
                        @endif
                
                </div>     
        </div>

    </div>   
    @if ($loop->iteration % 3 == 0)
                    </div>
                    <div class="row" style="padding-top:20px;">
                @endif
   
    @endforeach
    </div><br>
</div>
<br>
<br>
 
@endsection