<?php $dash.=$cat . '>> '; ?>
@foreach($subcategories as $subcategory)
    <option value="{{$subcategory->id}}">{{$dash}}{{$subcategory->name}}</option>
    @if(count($subcategory->subcategory))
        @include('subcategoryList-option',['subcategories' => $subcategory->subcategory,'cat'=>$subcategory->name])
    @endif
@endforeach