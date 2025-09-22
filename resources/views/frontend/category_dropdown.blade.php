@if($category->subCatRecursive->isEmpty())
<li>
    <a class="dropdown-item {{ isset($currentCategory) && $currentCategory->id == $category->id ? 'active' : '' }}"
        href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">
        {{ $category->name }}
    </a>
</li>
@else
<li class="dropdown-submenu">

    <a href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}"
        class="dropdown-item dropdown-toggle {{ isset($currentCategory) && $currentCategory->id == $category->id ? 'active' : '' }}">
        {{ $category->name }}
    </a>
    <ul class="dropdown-menu">
        <!-- <li>
            <a class="dropdown-item {{ isset($currentCategory) && $currentCategory->id == $category->id ? 'active' : '' }}"
                href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">
                All {{ $category->name }}
            </a>
        </li> -->
        @foreach($category->subCatRecursive as $child)
        @include('frontend.category_dropdown', ['category' => $child, 'currentCategory' => $currentCategory ?? null])
        @endforeach
    </ul>

</li>
@endif