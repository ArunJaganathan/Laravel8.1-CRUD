<div class="table-responsive">
    <table class="table" id="couponCodes-table">
        <thead>
        <tr>
            <th>@lang('models/couponCodes.fields.coupon_code')</th>
        <th>@lang('models/couponCodes.fields.start_date')</th>
        <th>@lang('models/couponCodes.fields.expiry_date')</th>
        <th>@lang('models/couponCodes.fields.coupon_count')</th>
        <th>@lang('models/couponCodes.fields.coupon_type')</th>
        <th>@lang('models/couponCodes.fields.status')</th>
        <th>Action</th>
        
            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
         @foreach($couponCodes as $couponCode)
            <tr>
                <td>{{ $couponCode->coupon_code }}</td>
            <td>{{ $couponCode->start_date }}</td>
            <td>{{ $couponCode->expiry_date }}</td>
            <td>{{ $couponCode->coupon_count }}</td>
            <td>{{ $couponCode->coupon_type }}</td>
            <td>{{ $couponCode->status }}</td>
            <td>
                <a href="{{ route('coupons.show', [$couponCode->id]) }}"    
                   class='btn btn-default btn-xs'>
                    <i class="far fa-eye"></i>
                </a>
            </td>
                <td width="120">
                    {!! Form::open(['route' => ['couponCodes.destroy', $couponCode->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('couponCodes.show', [$couponCode->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('couponCodes.edit', [$couponCode->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
         @endforeach
        </tbody>
    </table>
</div>
