<div class="table-responsive">
    <table class="table" id="subCategories-table">
        <thead>
        <tr>
            <th>@lang('models/subCategories.fields.title')</th>
        <th>@lang('models/subCategories.fields.description')</th>
        <th>@lang('models/subCategories.fields.category_id')</th>
        <th>@lang('models/subCategories.fields.status')</th>
        <th>@lang('models/subCategories.fields.image')</th>
            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
         @foreach($subCategories as $subCategory)
            <tr>
                <td>{{ $subCategory->title }}</td>
            <td>{{ $subCategory->description }}</td>
            <td>{{ $subCategory->category_id }}</td>
            <td>{{ $subCategory->status }}</td>
            <td>{{ $subCategory->image }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['subCategories.destroy', $subCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subCategories.show', [$subCategory->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('subCategories.edit', [$subCategory->id]) }}"
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
