@extends('frontend/layout')
@section('content')
 
<br>
<br>		

<div class="div" style="display: flex; justify-content: center;">
    <!-- All Category -->
    <div class="mx-4">
        <a href="{{ route('frontend.product') }}" class="active op" style="color: #581E1E; font-size: 30px; cursor: pointer;">
            All
        </a>
    </div>
    
    <!-- Dynamic Category Dropdowns -->
    @foreach($categories as $category)
        <div class="dropdown mx-4">
            <span class="active op" id="dropdownMenu{{ $category->id }}" data-bs-toggle="dropdown" aria-expanded="false"
                style="color: #581E1E; font-size: 30px; cursor: pointer;">
                {{ $category->name }}
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{ $category->id }}">
                @if($category->subCatRecursive->isEmpty())
                    <li><a class="dropdown-item" href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
                @else
                    @foreach($category->subCatRecursive as $subCategory)
                        @include('frontend.category_dropdown', ['category' => $subCategory])
                    @endforeach
                @endif
            </ul>
        </div>
    @endforeach
</div>



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
<script>
document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.href === window.location.href) {
        link.classList.add("active");
        link.setAttribute("aria-current", "page");
    }
});
</script>
@endpush