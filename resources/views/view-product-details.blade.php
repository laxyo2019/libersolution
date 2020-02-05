@extends('layouts.app')

@section('content')

{{-- <div class="breadcrumb-wrapper">
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
                    <div class="sidebar-logo" style="max-width: 138px; max-height: 113px; margin-left: 500px;"><img class="icon" data-animation="animated bounceInLeft" src="{{asset('storage/images/'.$datas->logo)}}" alt=""> </div> <div class="sidebar-content" style="margin-right: 500px;">
                      <div class="breadcrumb-text">
                        <h1>Product Details</h1>
                        <div class="inner-breadcrumb">
                          <ul>
                            <li><a href="{{ '/' }}">Home</a></li>
                            <li>Product</li>
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
<div class="inner-page-wrapper aboutus-wrapper">
  <div class="container">
    <div class="title"> {{-- <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span> --}}
      <h2>Product Details</h2>
    </div>
    <div class="row  m-top-50" >
      <div class="col-sm-12 col-md-12" >
          <div class="shape">
            <div {{-- class="callouts callout-img1 img" --}} ><span class="callouts-line"><a href="{{$productData->product_url}}"  target="_blank"><img src="{{asset('storage/images/'.$productData->file)}}" alt="Barrister"/ style="background: #08a9af; "></a></span></div>
          
           <div class="mt-3"> <strong><a href="{{$productData->product_url}}"  target="_blank"><h3 style="color: #304771;"> {{$productData->product_title}}</h3></a></strong></div>
         <div class="product-content1"><?php echo $productData->content; ?></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection