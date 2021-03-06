@extends('layouts.admin-app')

@section('content')
	<main class="app-content">
		<div class="app-title">
			<div class="div">
				<h1><i class="fa fa-laptop"></i> Our Product</h1>
			</div>
			<ul class="app-breadcrumb breadcrumb">
				<span class="ml-2">
					<a href="{{ URL::previous() }}" class="btn btn-outline-success"> Back</a>
				</span>
			</ul>
		</div>
		@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
		<div class="row" align="">
			<div class="col-md-12">
				<div class="card shadow-xs">
					<div class="card-body">
						<div class="row form-group">								
							<form method="post" action="{{route('our-products.store')}}" enctype='multipart/form-data'>
							@csrf
							    <div class="row">
							    <div class="col form-group">
							    	<label for="">Product Title	</label>
							    	<input style="width: 311px;" type="product_title" name="product_title" id="product_title"><br>
							    	@error('product_title')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                	@enderror
							    </div>
							    <div class="col form-group">
							    	<label for="">Logo</label>
							    	<input style="width: 311px;" type="file" name="file" id="image" class="image"><br>
							    	<div class="image" style="height: 30px;"></div>

							    	@error('file')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                	@enderror
							    </div>
							     <div class="col form-group">
							    	<label for="">Product URL</label>
							    	<input style="width: 311px;" type="text" name="product_url" id="product_url" class="product_url"><br>
							    	@error('product_url')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                	@enderror
							    </div>
							    <div class="col form-group">
							    	<label for="">Contents</label>
							    	{{-- <textarea style="max-height: 101px; " name="content" id="content" class="form-control" cols="30" rows="10" ></textarea> --}}
							    	<textarea class="form-control" cols="30" rows="10" id="summary-ckeditor" name="content"></textarea>
							    	@error('content')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                	@enderror
							    </div>
							</div>
							<div class="row mb-5 mt-3">
								<div class="col-md-12 col-sm-12 text-center" >
									<input type="submit" value="Submit" class="btn btn-primary"> 
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</main>
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );

$(document).ready(function(){
	$(".image").change(function () {
        var img_id = $(this).attr('id');
        filePreview(this,img_id);
    });
});
 function filePreview(input,img_id) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#'+img_id+' + img').remove();
            $('.'+img_id).html('<img src="'+e.target.result+'" width="100" height="78"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection