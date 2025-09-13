@extends('frontend.layout')

@section('content')
<!-- Bootstrap CSS (should ideally be in the layout, but included here for completeness) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container my-5">
    <!-- Category Navigation -->
    <div class="d-flex justify-content-center flex-wrap mb-5">
        <!-- All Category -->
        <div class="mx-3 mb-2">
            <a href="{{ route('frontend.product') }}" class="nav-link {{ request()->routeIs('frontend.product') ? 'active' : '' }}" 
               style="color: #581E1E; font-size: 1.5rem; font-weight: 500;">
                All
            </a>
        </div>

        <!-- Dynamic Category Dropdowns -->
        @foreach($categories as $category)
        <div class="dropdown mx-3 mb-2">
            <span class="nav-link {{ request()->routeIs('frontend.product_by_category', ['id' => $category->id]) ? 'active' : '' }}"
                  id="dropdownMenu{{ $category->id }}" 
                  data-bs-toggle="dropdown" 
                  aria-expanded="false"
                  style="color: #581E1E; font-size: 1.5rem; font-weight: 500; cursor: pointer;">
                {{ $category->name }}
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{ $category->id }}">
                @if($category->subCatRecursive->isEmpty())
                <li>
                    <a class="dropdown-item" 
                       href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">
                        {{ $category->name }}
                    </a>
                </li>
                @else
                    @foreach($category->subCatRecursive as $subCategory)
                        @include('frontend.category_dropdown', ['category' => $subCategory])
                    @endforeach
                @endif
            </ul>
        </div>
        @endforeach
    </div>

    <!-- Products Grid -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach($products as $product)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}">
                    <img src="{{ asset('images/product/' . $product->image) }}" 
                         class="card-img-top" 
                         alt="{{ $product->name }}"
                         style="height: 300px; object-fit: cover; border-radius: 5px 5px 0 0;">
                </a>
                <div class="card-body">
                    <h4 class="card-title text-truncate" 
                        style="color: #581E1E; font-size: 1.25rem;">
                        {{ $product->name }}
                    </h4>
                    <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" 
                       class="btn btn-outline-dark mt-2">
                        Explore more...
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('script')
<script>
    // Add active class to current nav link
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });
</script>
@endpush