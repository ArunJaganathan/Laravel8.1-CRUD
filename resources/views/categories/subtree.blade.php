
@foreach($subcategories as $subcategory)
    <li class="dd-item step2" data-id="{{$subcategory->id}}">
    	<div class="dd-handle" onclick="getDrag('{{ $subcategory->id }}')">{{$subcategory->name}}</div>
    </li>
   
@endforeach
