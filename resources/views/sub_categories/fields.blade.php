<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/subCategories.fields.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-3">
    {!! Form::label('status', __('models/subCategories.fields.status').':') !!}
    <select class="form-select form-control custom-select" name="status">
      <option value="1">Active</option>
      <option value="0">In Active</option>
      
    </select>
</div>
<div class="form-group col-sm-3">
    {!! Form::label('is_hot', __('models/subCategories.fields.is_hot').':') !!}
    <select class="form-select form-control custom-select" name="is_hot">
      <option value="1">Yes</option>
      <option value="0">No</option>
       
    </select>
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/subCategories.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', __('models/subCategories.fields.category_id').':') !!}
    {!! Form::select('category_id', $categoryItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', __('models/subCategories.fields.image').':') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>

