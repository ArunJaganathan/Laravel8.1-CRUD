<div class="table-responsive">
    <table class="table" id="$SCHEMAFILES-table">
        <thead>
        <tr>
            
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($$SCHEMAFILES as $$SCHEMAFILE)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['$SCHEMAFILES.destroy', $$SCHEMAFILE->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('$SCHEMAFILES.show', [$$SCHEMAFILE->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('$SCHEMAFILES.edit', [$$SCHEMAFILE->id]) }}"
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
