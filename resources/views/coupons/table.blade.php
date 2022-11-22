<div class="table-responsive">
    <table class="table" id="coupons-table">
        <thead>
        <tr>
            <th>Coupon</th>
            <th>@lang('models/coupons.fields.codes')</th>
            <th>@lang('models/coupons.fields.is_used')</th>
            <th>@lang('models/coupons.fields.status')</th>
            <th>@lang('models/coupons.fields.user_id')</th>
            <th>@lang('models/coupons.fields.date_used')</th>
            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
         @foreach($coupons as $coupons)
            <tr>
                <td>{{ $coupons->coupon_code_id }}</td>
                <td>{{ $coupons->codes }}</td>
                <td>{{ $coupons->is_used }}</td>
                <td>{{ $coupons->status }}</td>
                <td>{{ $coupons->user_id }}</td>
                <td>{{ $coupons->date_used }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['coupons.destroy', $coupons->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('coupons.show', [$coupons->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('coupons.edit', [$coupons->id]) }}"
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
