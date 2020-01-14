@extends('layouts.admin-app')

@section('content')
	<main class="app-content" >
		<div class="app-title">
			<div class="div">
				<h1><i class="fa fa-laptop"></i> Header Logo Section</h1>
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
		<div class="row" >
			<div class="col-md-12 col-xl-12">
				<div class="card shadow-xs">
					<div class="card-body">
						<div class="row form-group">
							<div id="logo">
								<form method="post" action="{{route('logo.update',$data->id)}}" enctype='multipart/form-data'>
								@csrf
								@method('PATCH')

									<div class="row" >
									    <div class="col form-group">
									    	<label for="">Contents</label>
									    	<input style="max-height: 101px;" name="title" value="{{$data->title}}" class="form-control" ></input>
									    	@error('title')
		                                      <span class="text-danger" role="alert">
		                                          <strong>{{ $message }}</strong>
		                                      </span>
		                                	@enderror
									    </div>
									    <div class="col form-group">
									    	<label for="">Logo Image</label>
									    	<input style="width: 311px;" type="file" name="logo" value="{{$data->logo}}"><br>
									    	<img src="{{asset("storage/images/$data->logo")}}" height="50px" width="50px" style="border-radius: 40%;" />
									    	@error('logo')
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