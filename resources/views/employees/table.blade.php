<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
        <tr>
            <th>@lang('models/employees.fields.name')</th>
        <th>@lang('models/employees.fields.address')</th>
        <th>@lang('models/employees.fields.email')</th>
            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
         @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->email }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employee->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employees.edit', [$employee->id]) }}"
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
