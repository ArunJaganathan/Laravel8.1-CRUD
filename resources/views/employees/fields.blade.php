<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/employees.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', __('models/employees.fields.address').':') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>