<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/pictures.fields.name').':') !!}
    <p>{{ $pictures->name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/pictures.fields.created_at').':') !!}
    <p>{{ $pictures->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/pictures.fields.updated_at').':') !!}
    <p>{{ $pictures->updated_at }}</p>
</div>

