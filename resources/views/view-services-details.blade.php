@extends('layouts.app')

@section('content')

<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="breadcrumb-text">
      <h1>Service Details</h1>
      <div class="inner-breadcrumb">
        <ul>
          <li><a href="{{ '/' }}">Home</a></li>
          <li>Service Details</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="inner-page-wrapper aboutus-wrapper">
  <div class="container">
    <div class="title"> {{-- <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span> --}}
      <h2>Service Details</h2>
    </div>
    <div class="row  m-top-10" >
      <div class="col-sm-5 col-md-5">
        {{-- <div class="feature-box"> --}}
          <div class="shape">
            <div >   <span class="callouts-line"><img src="{{asset('storage/images/'.$serviceData->logo)}}" alt="Barrister" width="300px;" height="300px;" /></span></div>
          {{-- </div> --}}
        </div>
      </div>
      <div class="col-sm-7">
        <div class="about-text">
          <div class="container">
            <h3>{{$serviceData->heading}}</h3>
            <p>{{$serviceData->content}}</p>
          </div>
          {{-- <ul>
            <li>Put clients at the heart</li>
            <li>Partnership</li>
            <li>Value people</li>
            <li>Respect</li>
            <li>Deliver excellence</li>
            <li>Innovation</li>
            <li>Work as one team</li>
            <li>Entrepreneurship</li>
          </ul> --}}
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection