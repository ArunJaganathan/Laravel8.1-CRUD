<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $category->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $category->description }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{$category->status == 1 ? 'Active' : 'In Active' }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p><img src="/{{ $category->image }}" width="350px;"></p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $category->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $category->updated_at }}</p>
</div>

