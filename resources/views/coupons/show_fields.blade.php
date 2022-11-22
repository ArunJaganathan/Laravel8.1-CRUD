<!-- Coupon Code Id Field -->
<div class="col-sm-2">
    {!! Form::label('coupon_code_id', __('models/coupons.fields.coupon_code_id').':') !!}
    <p>{{ $coupons->coupon_name }}</p>
</div>

<div class="col-sm-3">
    {!! Form::label('codes', __('models/coupons.fields.start_date').':') !!}
    <p>{{ $coupons->start_date }}</p>
</div>

<div class="col-sm-3">
    {!! Form::label('codes', __('models/coupons.fields.expiry_date').':') !!}
    <p>{{ $coupons->expiry_date }}</p>
</div>
<div class="col-sm-2">
    {!! Form::label('date_used', __('models/coupons.fields.date_used').':') !!}
    <p>{{ $coupons->date_usedq }}</p>
</div>
<div class="col-sm-2">
    {!! Form::label('date_used', __('models/coupons.fields.coupon_type').':') !!}
    <p>{{ $coupons->coupon_type }}</p>
</div>
<div class="col-sm-6">
    {!! Form::label('date_used', __('models/coupons.fields.balDays').':') !!}
    <p>{{ $coupons->balDays }}</p>
</div>
<div class="col-sm-2">
    {!! Form::label('date_used', __('models/coupons.fields.coupon_status').':') !!}
    <p>{{ $coupons->coupon_status }} / {{ $coupons->coupon_bal }}</p>
</div>
<hr>


<div class="table-responsive "> <h4>Summary</h4><hr>
    <table class="table" id="coupons-table">
        <thead>
        <tr>
            <th>Coupon</th>
            <th>@lang('models/coupons.fields.is_used')</th>
            <th>@lang('models/coupons.fields.user_id')</th>
            <th>@lang('models/coupons.fields.date_used')</th>
            
        </tr>
        </thead>
        <tbody>
         @foreach($coupons['q'] as $cop)

            <tr>
                <td>{{ $cop['codex'] }}</td>
                <td>{!! $cop['is_usedx'] !!}</td>
                <td>{{ $cop['user_idx'] }}</td>
                <td>{{ $cop['date_usedx'] }}</td>
                
                
            </tr>
         @endforeach
        </tbody>
    </table>
</div>

