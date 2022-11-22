<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/employees.fields.name').':') !!}
    <p>{{ $employee->name }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', __('models/employees.fields.address').':') !!}
    <p>{{ $employee->address }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', __('models/employees.fields.email').':') !!}
    <p>{{ $employee->email }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/employees.fields.created_at').':') !!}
    <p>{{ $employee->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/employees.fields.updated_at').':') !!}
    <p>{{ $employee->updated_at }}</p>
</div>

