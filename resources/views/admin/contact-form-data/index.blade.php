@extends('layouts.admin-app')


@section('content')
	<main class="app-content">
		
		<div class="app-title">
			<div class="div">
				<h1><i class="fa fa-laptop"></i>  Contact Form Data</h1>
			</div>
			{{-- <ul class="app-breadcrumb breadcrumb">
				<span class="ml-2">
					<a href="{{route('contactus.create')}}" class="btn btn-outline-success">
					<span class="fa fa-plus"></span> Add New</a>
				</span>
			</ul> --}}
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
						<table class="table table-striped table-hover" id="ClientsTable">
							<thead>
								<tr class="text-center">
									<th>S. No.</th>
									<th>Full Name>
									<th>Phome Number</th>
									<th>Email</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php $count = 0; ?>
							@foreach($data as $getDatas)
							<tr class="text-center">
								<td>{{++$count}}</td>
								<td>{{$getDatas->name}}</td>
								<td>{{$getDatas->phone}}</td>
								<td>{{$getDatas->email}}</td>
								<td>{{$getDatas->message}}</td>
								<td >
								<span class="ml-2">
									<form  action="{{route('contact.destroy',$getDatas->id)}}" method="POST" id="delform_{{ $getDatas->id}}">
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
