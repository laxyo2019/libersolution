@extends('layouts.admin-app')

@section('content')
	<main class="app-content">
		<div class="app-title">
			<div class="div">
				<h1><i class="fa fa-laptop"></i> Footer Content Section</h1>
			</div>
			<ul class="app-breadcrumb breadcrumb">
				<span class="ml-2">
					<a href="{{ URL::previous() }}" class="btn btn-outline-success"> Back</a>
				</span>
			</ul>
		</div>
		 <div class="container">
		 	@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
			@endif
		</div>
							
	<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title"> Footer contact us Section</h3>
            <div class="tile-body">
              <form method="post" action="{{route('footer-contents.store')}}" enctype='multipart/form-data'>
				@csrf
                <div class="row">
                <div class="form-group col-md-4" >
                  <label class="control-label">Address</label>
                  <textarea class="form-control" rows="4" placeholder="Enter your address" name="address"></textarea>
                  @error('address')
	                  <span class="text-danger" role="alert">
	                      <strong>{{ $message }}</strong>
	                  </span>
            	@enderror
                </div>
                <div class="form-group col-md-4" >
                  <label class="control-label">Phone number</label>
                  <input class="form-control" type="number" placeholder="Enter phone number" name="phone">
                  @error('phone')
	                  <span class="text-danger" role="alert">
	                      <strong>{{ $message }}</strong>
	                  </span>
            	@enderror
                </div>
                
                <div class="form-group col-md-4" >
                  <label class="control-label">Email</label>
                  <input class="form-control" type="email" placeholder="Enter Email Address" name="email">
                  @error('email')
	                  <span class="text-danger" role="alert">
	                      <strong>{{ $message }}</strong>
	                  </span>
            	@enderror
                </div>
              </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
            </div>
           </form>
            </div>
          </div>
        </div>
      </div>
	</div>
						
	
</div>
</main>
<script>
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