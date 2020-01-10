@extends('layouts.admin-app')


@section('content')
	<main class="app-content">
		
		<div class="app-title">
			<div class="div">
				<h1><i class="fa fa-laptop"></i>  Contact Us</h1>
			</div>
			<ul class="app-breadcrumb breadcrumb">
				<span class="ml-2">
					<a href="{{route('contactus.create')}}" class="btn btn-outline-success">
					<span class="fa fa-plus"></span> Add New</a>
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
					
					<div class="card-body table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr class="text-center">
									<th>S. No.</th>
									<th>Title</th>
									<th>Contents</th>
									<th>Logo</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
						<?php $count = 0; ?>
							@foreach($data as $getDatas)
							<tr class="text-center">
								<td>{{++$count}}</td>
								<td>{{$getDatas->title}}</td>
								<td>{{$getDatas->content}}</td>
								{{-- <td>{{$getDatas->file}}</td> --}}
								<td><img src="{{asset("storage/images/$getDatas->logo")}}" height="50px" width="50px" style="border-radius: 40%;" /></td>
								</td>
								<td >
									<span>
										<a href="{{route('contactus.edit',$getDatas->id)}}" class="btn btn-sm btn-outline-warning"><i class="fa fa-edit"></i> Edit</a>
									</span>
									<span class="ml-2">
										<form  action="{{route('contactus.destroy',$getDatas->id)}}" method="POST" id="delform_{{ $getDatas->id}}">
												@csrf
											@method('DELETE')
											<a href="javascript:$('#delform_{{ $getDatas->id}}').submit();" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" ></i> Delete</a>
										</form>
									</span>
								</td>
							</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</main>
@endsection
