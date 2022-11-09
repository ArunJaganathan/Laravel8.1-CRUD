<div class="table-responsive">
    <table class="table" id="pictures-table">
        <thead>
        <tr>
            <th>@lang('models/pictures.fields.name')</th>
            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
         @foreach($pictures as $pictures)
            <tr>
                <td>{{ $pictures->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pictures.destroy', $pictures->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pictures.show', [$pictures->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pictures.edit', [$pictures->id]) }}"
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
