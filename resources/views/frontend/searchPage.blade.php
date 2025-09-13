@extends('frontend/layout')
@section('content')
 
<br>
<br>		

<div class="container">

<div class="row">
			@foreach($products as $product)
				<div class="col-md-3" style="padding-bottom:20px; ">
                    
					<div class="card" style="box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);">
                        <a href="{{ route('frontend.product_detail',['id'=>$product->id]) }}">
						<img src="{{ asset('public/images/product/'.$product->image) }}" alt="Avatar" style="width:100%; height: 300px;  border-radius: 5px 5px 0 0;">
                        </a>
						<div class="container" style="margin-top:20px;padding-bottom:10px;  ">
						<h4 style="color: #581E1E; font-size: 20px; overflow: hidden; 
                            white-space: nowrap; 
                            text-overflow: ellipsis;">{{$product->name}}</h4> 

						<a href="{{ route('frontend.product_detail',['id'=>$product->id]) }}" class="btn viewbtn" style="color:black;">Explore more...</a> 
						</div>
					</div>
                    
				</div>
				<!-- @if ($loop->iteration % 4 == 0)
                    </div>
                    <div class="row" style="padding-top:20px;">
                @endif -->
                @endforeach 
			
			</div>

</div>
<br>
<br>
@endsection

@push('script')
@endpush