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
                <img src="{{asset('storage/images/'.$datas->file)}}" alt="Barrister"/>
              </div>
              <div class="row">
                <div class="container">
                  <div class="hero">
                     <img class="icon" data-animation="animated bounceInLeft" src="images/header-law-icon.png" alt=""> <h1>Aboutus</h1>
                      <div class="inner-breadcrumb">
                        <ul>
                          <li><a href="{{ '/' }}">Home</a></li>
                          <li> About Us</li>
                        </ul>
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
      <h2>Successful Work</h2>
    </div>
  <?php $count = 1; ?>
      @foreach($aboutData as $data)
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
          <h3>{{$data->title}}</h3>
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
  @endforeach
   {{--  <div class="row m-top-50">
    	<div class="col-sm-7">
        <div class="about-text">
          <h3>Work as one teame</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
          <ul>
            <li>Put clients at the heart</li>
            <li>Partnership</li>
            <li>Value people</li>
            <li>Respect</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-5 col-md-5 hidden-xs">
        <div class="feature-box one">
          <div class="shape">
            <div class="img"><img src="images/about-img2.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</div>

@endsection