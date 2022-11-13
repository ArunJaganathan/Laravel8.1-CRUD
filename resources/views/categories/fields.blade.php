<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/categories.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" placeholder="Category title" value="{{old('title')}}" required />
    </div>
</div>
<!-- Slug Field -->
<div class="col-sm-6">
    <div class="form-group">
        <label>Category Slug*</label>
        <input type="text" name="slug" class="form-control" placeholder="Category name" value="{{old('slug')}}" required />
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label>Select parent category*</label>
        <select type="text" name="parent_id" class="form-control">
            <option value="">None</option>
            @if($categories)
                @foreach($categories as $category)
                    <?php $dash=''; ?>
                    <option value="{{$category->id}}">{{$category->name}}</option>
                   
                        @include('categories.subCategoryList-option',['subcategories' => $category->subcategory,'cat'=>$category->name])
                   
                @endforeach
            @endif
        </select>
    </div>
</div>