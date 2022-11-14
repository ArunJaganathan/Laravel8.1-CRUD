
@foreach($subcategories as $subcategory)
    <li class="dd-item step1" data-id="{{$subcategory->id}}">
    	<div class="dd-handle" onclick="getDrag('{{ $subcategory->id }}')">{{$subcategory->name}}</div>
    </li>
    @if(count($subcategory->subcategory))
    <ol class="dd-list">
        @include('categories.subtree',['subcategories' => $subcategory->subcategory,'cat'=>$subcategory->name])
    </ol>
    @endif
@endforeach