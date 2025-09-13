






@if($category->subCatRecursive->isEmpty())
    <li><a class="dropdown-item" href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
@else
    <li class="dropdown-submenu">
        <a class="dropdown-item dropdown-toggle" href="#" id="dropdownMenu{{ $category->id }}" data-bs-toggle="dropdown" aria-expanded="false">{{ $category->name }}</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{ $category->id }}">
            @foreach($category->subCatRecursive as $child)
                @include('frontend.category_dropdown', ['category' => $child])
            @endforeach
        </ul>
    </li>
@endif

