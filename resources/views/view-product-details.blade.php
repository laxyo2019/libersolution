@extends('layouts.app')

@section('content')

<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="breadcrumb-text">
      <h1>Product Details</h1>
      <div class="inner-breadcrumb">
        <ul>
          <li><a href="{{ '/' }}">Home</a></li>
          <li>Product Details</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="inner-page-wrapper aboutus-wrapper">
  <div class="container">
    <div class="title"> {{-- <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span> --}}
      <h2>Product Details</h2>
    </div>
    <div class="row  m-top-50" >
      <div class="col-sm-5 col-md-5" >
        {{-- <div class="feature-box"> --}}
          <div class="shape">
            <div {{-- class="callouts callout-img1 img" --}} ><span class="callouts-line"><a href="{{$productData->product_url}}"  target="_blank"><img src="{{asset('storage/images/'.$productData->file)}}" alt="Barrister"/ style="background: #9f280c;"></a></span></div>
          </div>
        {{-- </div> --}}
      </div>
      <div class="col-sm-6">
        <div class="about-text">
          <a href="{{$productData->product_url}}"  target="_blank"><h3>{{$productData->product_title}}</h3></a>
          <p>{{$productData->content}}</p>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection