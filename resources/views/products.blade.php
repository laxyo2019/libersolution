@extends('layouts.app')

@section('content')

{{-- <div class="breadcrumb-wrapper">
  <div class="container">
    <div class="breadcrumb-text">
      <h1>Our Products</h1>
      <div class="inner-breadcrumb">
        <ul>
          <li><a href="{{ '/' }}">Home</a></li>
          <li>Products</li>
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
                <img src="{{asset('storage/images/'.$datas->file)}}" alt="Barrister"/>
              </div>
              <div class="row">
                <div class="container">
                  <div class="hero">
                       <img class="icon" data-animation="animated bounceInLeft" src="images/header-law-icon.png" alt="">  <h1>Our Products</h1>
                      <div class="inner-breadcrumb">
                        <ul>
                          <li><a href="{{ '/' }}">Home</a></li>
                          <li> Products</li>
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
    <div class="mt-2">
      <div class="container"> 
      <div class="barrister-callouts-wrapper">
        <div class="container">
          <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
            <h2>Products</h2>
          </div>
          <div class="row">
        <?php $count = 1; ?>
          @foreach($productsData as $products)
            <div class="col-md-4 ">
              <div class="callouts callout-img1" style="overflow: scroll;max-height: 300px;min-height: 300px; margin-bottom: 20px;" >
                <h3>{{$products->product_title}}</h3>
                <span class="callouts-line"><img src="{{asset('storage/images/'.$products->file)}}" alt="" width="50%" height="50%"></span>
                <div class=""><p>{{$products->content}}</p></div>
                <a class="btn-one" href="{{$products->product_url}}" target="_blank">View Case</a> </div>
            </div>
           @endforeach
          </div>
        </div>
      </div>
    </div>
</section>
    </div>
@endsection