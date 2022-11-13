<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/categories.fields.name').':') !!}
    <p>{{ $category->name }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    {!! Form::label('slug', __('models/categories.fields.slug').':') !!}
    <p>{{ $category->slug }}</p>
</div>

<!-- Parent Id Field -->
<div class="col-sm-12">
    {!! Form::label('parent_id', __('models/categories.fields.parent_id').':') !!}
    <p>{{ $category->parent_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/categories.fields.created_at').':') !!}
    <p>{{ $category->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/categories.fields.updated_at').':') !!}
    <p>{{ $category->updated_at }}</p>
</div>

