<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory)
    <option value="{{$subcategory->id}}">{{$dash}}{{$subcategory->name}}</option>
    @if(count($subcategory->subCatRecursive) > 0)
        @include('admin.subcategoryList-option',['subcategories' => $subcategory->subCatRecursive])
    @endif
@endforeach