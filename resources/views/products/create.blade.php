@extends('layouts.app')


@section('content')


<style type="text/css">
img {
    display: block;
    max-width: 100%;
}
.preview {
    overflow: hidden;
    width: 160px; 
    height: 160px;
    margin: 10px;
    border: 1px solid red;
}
.modal-lg{
    max-width: 1000px !important;
}
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <!-- <div class="pull-left">
                <h2>Add New Product</h2>
            </div> -->
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.store') }}" method="POST">
    	@csrf


         <div class="row">
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="img-container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="preview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="crop">Crop</button>
                        </div>
                    </div>
                </div>
            </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detail:</strong>
		            <textarea class="form-control" id="description" name="detail" placeholder="Detail"></textarea>
		        </div>
		    </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Select Main category*</label>
                    <select type="text" name="cat_id" class="form-control" onchange="getSubCategory(this)">
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
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="image">
                   {!! Form::text('image', null, ['class' => 'form-control img_name']) !!}
                </div>
                <div class="col-sm-2">
                    <img src="" id="preview-image-before-upload">
                </div>
            </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		        <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>





@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

<script type="text/javascript">
    function getSubCategory(mnCat) {
        var token = "{{ csrf_token() }}";
        var items = {
            '_token': token, 'mainCatId': mnCat.value
        }
        console.log(items)
        $.ajax({
            type: "POST",
            url: '/ajax-autocomplete-search',
            data: {'_token': token, 'mainCatId': mnCat.value},
            dataType: 'json',
            cache : false,
            success: function(data){
                console.log(data)            
            }
        });
    }

    $( document ).ready(function() {
    cropImage('image','product')
});
    
</script>