<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/couponCodes.fields.id').':') !!}
    <p>{{ $couponCode->id }}</p>
</div>

<!-- Coupon Code Field -->
<div class="col-sm-12">
    {!! Form::label('coupon_code', __('models/couponCodes.fields.coupon_code').':') !!}
    <p>{{ $couponCode->coupon_code }}</p>
</div>

<!-- Start Date Field -->
<div class="col-sm-12">
    {!! Form::label('start_date', __('models/couponCodes.fields.start_date').':') !!}
    <p>{{ $couponCode->start_date }}</p>
</div>

<!-- Expiry Date Field -->
<div class="col-sm-12">
    {!! Form::label('expiry_date', __('models/couponCodes.fields.expiry_date').':') !!}
    <p>{{ $couponCode->expiry_date }}</p>
</div>

<!-- Coupon Count Field -->
<div class="col-sm-12">
    {!! Form::label('coupon_count', __('models/couponCodes.fields.coupon_count').':') !!}
    <p>{{ $couponCode->coupon_count }}</p>
</div>

<!-- Coupon Type Field -->
<div class="col-sm-12">
    {!! Form::label('coupon_type', __('models/couponCodes.fields.coupon_type').':') !!}
    <p>{{ $couponCode->coupon_type }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', __('models/couponCodes.fields.status').':') !!}
    <p>{{ $couponCode->status }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/couponCodes.fields.created_at').':') !!}
    <p>{{ $couponCode->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/couponCodes.fields.updated_at').':') !!}
    <p>{{ $couponCode->updated_at }}</p>
</div>

<!-- Deleted At Field -->
<div class="col-sm-12">
    {!! Form::label('deleted_at', __('models/couponCodes.fields.deleted_at').':') !!}
    <p>{{ $couponCode->deleted_at }}</p>
</div>

