<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __('models/subCategories.fields.title').':') !!}
    <p>{{ $subCategory->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __('models/subCategories.fields.description').':') !!}
    <p>{{ $subCategory->description }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', __('models/subCategories.fields.category_id').':') !!}
    <p>{{ $subCategory->category_id }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', __('models/subCategories.fields.status').':') !!}
    <p>{{ $subCategory->status }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', __('models/subCategories.fields.image').':') !!}
    <p>{{ $subCategory->image }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/subCategories.fields.created_at').':') !!}
    <p>{{ $subCategory->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/subCategories.fields.updated_at').':') !!}
    <p>{{ $subCategory->updated_at }}</p>
</div>

