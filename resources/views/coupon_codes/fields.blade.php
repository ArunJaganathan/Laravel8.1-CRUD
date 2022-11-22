<!-- Coupon Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coupon_code', __('models/couponCodes.fields.coupon_code').':') !!}
    {!! Form::text('coupon_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-3">
    {!! Form::label('start_date', __('models/couponCodes.fields.start_date').':') !!}
    {!! Form::text('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Expiry Date Field -->
<div class="form-group col-sm-3">
    {!! Form::label('expiry_date', __('models/couponCodes.fields.expiry_date').':') !!}
    {!! Form::text('expiry_date', null, ['class' => 'form-control','id'=>'expiry_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#expiry_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Coupon Count Field -->
<div class="form-group col-sm-3">
    {!! Form::label('coupon_count', __('models/couponCodes.fields.coupon_count').':') !!}
    {!! Form::text('coupon_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Coupon Type Field -->
<div class="form-group col-sm-3">
    {!! Form::label('coupon_type', __('models/couponCodes.fields.coupon_type').':') !!}
    {!! Form::text('coupon_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-3">
    {!! Form::label('status', __('models/couponCodes.fields.status').':') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

