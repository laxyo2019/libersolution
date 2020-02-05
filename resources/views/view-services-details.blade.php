@extends('layouts.app')

@section('content')

{{-- <div class="breadcrumb-wrapper">
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
</div> --}}
<section>
  <div class="banner-wrapper">
      <div id="first-slider" class="carousel fade-carousel slide">
        <div id="carousel-example-generic" class="carousel slide carousel-fade"> 
          <!-- Overlay -->
          <div class="overlay"></div>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <?php $count = 1 ; ?>
            @foreach($slideData as $datas)
            <div class="carousel-item slides {{ $count == 1 ? 'active':''}}">
              <div class="slide-{{$count++}}">
                <img src="{{asset('/storage/images/'.$datas->file)}}" alt="Barrister"/>
              </div>
              <div class="row">
                <div class="container">
                  <div class="hero">
                    <div class="sidebar-logo" style="max-width: 138px; max-height: 113px; margin-left: 500px;"><img class="icon" data-animation="animated bounceInLeft" src="{{asset('storage/images/'.$datas->logo)}}" alt=""> </div> <div class="sidebar-content" style="margin-right: 500px;">
                      <div class="breadcrumb-text">
                       <h1>Service Details</h1>
                      <div class="inner-breadcrumb">
                        <ul>
                          <li><a href="{{ '/' }}">Home</a></li>
                          <li>Service</li>
                        </ul>
                      </div>
                      </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="slide-arrows">
            <a class="left carousel-control" href="#first-slider" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> 
            <a class="right carousel-control" href="#first-slider" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a>
          </div>
        </div>
      </div>
    </div>
</section>
<div class="inner-page-wrapper aboutus-wrapper">
  <div class="container">
    <div class="title"> {{-- <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span> --}}
      <h2>Service Details</h2>
    </div>
    <div class="row  m-top-10" >
      <div class="col-sm-12 col-md-12">
        {{-- <div class="feature-box"> --}}
          <div class="shape">
            <div >   <span class="callouts-line"><img src="{{asset('storage/images/'.$serviceData->logo)}}" alt="Barrister" width="300px;" height="300px;" /></span></div>
          {{-- </div> --}}
        
            <h3 class="mt-3">{{$serviceData->heading}}</h3>
            <div class="service-content1 mt-3 "><?php echo $serviceData->content; ?></div>
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