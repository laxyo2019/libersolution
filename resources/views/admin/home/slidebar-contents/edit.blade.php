@extends('layouts.admin-app')

@section('content')
	<main class="app-content">
		<div class="app-title">
			<div class="div">
				<h1><i class="fa fa-laptop"></i> Sidebar Content Section</h1>
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
			<div class="col-md-12 col-xl-12">
				<div class="card shadow-xs">
					<div class="card-body">
						<div class="row form-group">
							<div id="emp_docs">
								<form method="post" action="{{route('home.update',$data->id)}}" enctype='multipart/form-data'>
								@csrf
								@method('PATCH')

									<div class="row">
									    <div class="col form-group">
									    	<label for="">Contents</label>
									    	<textarea style="max-height: 101px;" name="contents" value="{{$data->contents}}" class="form-control" cols="30" rows="10">{{$data->contents}}</textarea>
									    	@error('contents')
		                                      <span class="text-danger" role="alert">
		                                          <strong>{{ $message }}</strong>
		                                      </span>
		                                	@enderror
									    </div>
									    <div class="col form-group">
									    	<label for="">Slider Image</label>
									    	<input style="width: 311px;" type="file" name="file" value="{{$data->file}}"><br>
									    	<img src="{{asset("storage/images/$data->file")}}" height="50px" width="50px" style="border-radius: 40%;" />
									    	@error('file')
		                                      <span class="text-danger" role="alert">
		                                          <strong>{{ $message }}</strong>
		                                      </span>
		                                	@enderror
									    </div>
									    
									</div>
									<div class="row mb-5 mt-3">
										<div class="col-md-12 col-sm-12 text-center" >
											<input type="submit" value="Update" class="btn btn-primary"> 
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
@endsection