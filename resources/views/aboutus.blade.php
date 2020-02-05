@extends('layouts.app')

@section('content')

{{-- <div class="breadcrumb-wrapper">
  <div class="container">
    <div class="breadcrumb-text">
      <h1>About Us</h1>
      <div class="inner-breadcrumb">
        <ul>
          <li><a href="{{ '/' }}">Home</a></li>
          <li>About Us</li>
        </ul>
      </div>
    </div>
  </div>
</div> --}}
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
                    <div class="sidebar-logo" style="max-width: 138px; max-height: 113px; margin-left: 500px;"><img class="icon" data-animation="animated bounceInLeft" src="{{asset('storage/images/'.$datas->logo)}}" alt=""> </div> <div class="sidebar-content" style="margin-right: 500px;"><h1>About</h1>
                      <div class="inner-breadcrumb" s>
                        <ul>
                          <li><a href="{{ '/' }}">Home</a></li>
                          <li> About Us</li>
                        </ul>
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
<div class="inner-page-wrapper aboutus-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
      <h2>About Us</h2>
    </div>
  <?php $count = 1; ?>
      @foreach($aboutData as $data)
      @if($data->id%2==0)
        <div class="row  m-top-50" >
          <div class="col-sm-5 col-md-5">
            <div class="feature-box">
              <div class="shape">
                <div class="img"> <img src="{{asset('storage/images/'.$data->logo)}}" alt="Barrister"/></div>
              </div>
            </div>
          </div>
      <div class="col-sm-7">
        <div class="about-text">
          {{-- <h3>{{$data->title}}</h3> --}}
          <p>{{$data->content}}</p>
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
    @else
     <div class="row m-top-50">
      <div class="col-sm-7">
        <div class="about-text">
          {{-- <h3>{{$data->title}}</h3> --}}
          <p>{{$data->content}}</p>
          {{-- <ul>
            <li>Put clients at the heart</li>
            <li>Partnership</li>
            <li>Value people</li>
            <li>Respect</li>
          </ul> --}}
        </div>
      </div>
      <div class="col-sm-5 col-md-5 hidden-xs">
        <div class="feature-box one">
          <div class="shape">
            <div class="img"> <img src="{{asset('storage/images/'.$data->logo)}}" alt="Barrister"/></div>
          </div>
        </div>
      </div>
    </div>
    @endif
  @endforeach
   
  </div>
</div>
<style type="text/css">
  

</style>
@endsection