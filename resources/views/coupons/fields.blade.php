<!-- Coupon Code Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coupon_code_id', __('models/coupons.fields.coupon_code_id').':') !!}
    {!! Form::select('coupon_code_id', $couponcodeItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Codes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codes', __('models/coupons.fields.codes').':') !!}
    {!! Form::text('codes', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Used Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_used', __('models/coupons.fields.is_used').':') !!}
    {!! Form::text('is_used', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/coupons.fields.status').':') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Used Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_used', __('models/coupons.fields.date_used').':') !!}
    {!! Form::text('date_used', null, ['class' => 'form-control','id'=>'date_used']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_used').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush