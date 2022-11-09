<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/pictures.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="container">
<h1>Laravel Cropper Js - Crop Image Before Upload - Tutsmake.com</h1>
<input type="file" name="image" class="image">
</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalLabel">Laravel Cropper Js - Crop Image Before Upload - Tutsmake.com</h5>
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
</div>
</div>



</body>
</html> 