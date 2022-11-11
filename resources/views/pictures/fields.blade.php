<!-- Name Field -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/pictures.fields.name').':') !!}
    {!! Form::text('profile_name', null, ['class' => 'form-control profile_name']) !!}
</div>

<div class="form-group col-sm-12">
	<div class="form-group col-sm-6">
		<input type="file" name="image" class="image">
		{!! Form::text('name', null, ['class' => 'form-control img_name']) !!}
	</div>
	<div class="form-group col-sm-6">
		<img src="" id="preview-image-before-upload">
	</div>
</div>
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

<script>
var $modal = $('#modal');
$(".img_name").hide()
var image = document.getElementById('image');
var cropper;
$("body").on("change", ".image", function(e){
	var files = e.target.files;
	var done = function (url) {
		image.src = url;
		$modal.modal('show');
	};
	var reader;
	var file;
	var url;
	if (files && files.length > 0) {
		file = files[0];
		if (URL) {
			done(URL.createObjectURL(file));
		} else if (FileReader) {
			reader = new FileReader();
			reader.onload = function (e) {
			done(reader.result);
		};
			reader.readAsDataURL(file);
		}
	}
});
$modal.on('shown.bs.modal', function () {
	cropper = new Cropper(image, {
		aspectRatio: 1,
		viewMode: 3,
		preview: '.preview'
	});
}).on('hidden.bs.modal', function () {
	cropper.destroy();
	cropper = null;
});
$("#crop").click(function(){
	canvas = cropper.getCroppedCanvas({
		width: 160,
		height: 160,
	});
	canvas.toBlob(function(blob) {
		url = URL.createObjectURL(blob);

		var reader = new FileReader();
		reader.readAsDataURL(blob); 
		reader.onloadend = function() {
			var base64data = reader.result; 
			$('#preview-image-before-upload').attr('src', base64data);
			var _token = document.getElementsByName("_token")[0].value			
			var profile_name = document.getElementsByName("profile_name")[0].value			
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "/crop-image-upload",
				data: {'_token': _token, 'image': base64data, 'profile_name': profile_name},
				success: function(data){
					$modal.modal('hide');
					console.log(data)
					$(".img_name").val(data.image)
					$(".image").val(data.image)
				}
			});
		}
	});
})
</script>


</body>
</html> 