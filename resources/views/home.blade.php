@extends('layouts.app')

@section('content')

<section> 
    <!-- Banner Wrapper Start -->

    <div class="banner-wrapper">
      <div id="first-slider" class="carousel fade-carousel slide">
        <div id="carousel-example-generic" class="carousel slide carousel-fade"> 
          <!-- Overlay -->
          <div class="overlay"></div>
          <!-- Wrapper for slides -->
          <div class="carousel-inner mob-slidercls" role="listbox" style="height: 600px;">
            <?php $count = 1 ; ?>
            @foreach($slideData as $datas)
            <div class="carousel-item slides {{ $count == 1 ? 'active':''}}">
              <div class="slide-{{$count++}}">
                <img src="{{asset('/storage/images/'.$datas->file)}}" alt="Barrister"/>
                {{-- <img src="http://www.libersolution.com/storage/app/public/images/web-development.jpg"> --}}
              </div>
              <div class="row">
                <div class="container">
                  <div class="hero">
                    <img class="icon" data-animation="animated bounceInLeft" src="{{asset('storage/images/'.$datas->logo)}}" alt="" style="width: 300px;margin: auto;display: block;"> <h2 data-animation="animated bounceInLeft" class=""><span class="slidebar-content">{{$datas->contents}}</span></h2>
                   </div>
                    {{-- <a class="btn-one" data-animation="animated bounceInLeft" href="javascript:void(0)">Request a free consultation</a></div> --}}
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
<section> 
<div class="container"> 
  <div class="barrister-callouts-wrapper">
    <div class="container">
      <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
        <h2>Products</h2>
      </div>
    <div class="row" style="margin-bottom: 30px;">
    <?php $count = 1; ?>
      @foreach($productAndServices as $productAndServices)
        <div class="col-md-6 mt" style="margin-bottom: 30px;">
          <div class="callouts callout-img{{$count++}}" style="max-height: 500px;min-height: 500px;">
           <a href="{{$productAndServices->product_url}}"  target="_blank"><h3>{{$productAndServices->product_title}}</h3>
            <span class="callouts-line">
              <img src="{{asset('storage/images/'.$productAndServices->file)}}" alt="" width="100px;" height="100px;" style="margin-top: 60px;">
            </span></a>
            <div class="product-content">
              <p>{{$productAndServices->content}}</p>
            </div>
            <div class="btn-one " style="margin-top: 60px;">
              <a href="{{route('product-view',$productAndServices->id)}}" target="_blank" >Read More</a> 
            </div>
          </div>

        </div>
       @endforeach
      </div>
    </div>
  </div>
</div>
</section>
<section>
    <div class="container">
      <div class="title text-center mb-0"> 
        <span class="title-border-img">
            <img src="../images/h1-line-img1.png" alt="">
        </span>
        <h2 class="text-center">Services</h2>
      </div>
        <div class="row" >
        <?php $count = 1;

         ?>
          @foreach($platformAndFramework as $platformAndFrameworks)
            <div class="col-md-4 col-sm-6" >
              <div class="service-item header" id="myHeader" style="max-width: 350px;min-height: 350px;">
                <h3>{{ $platformAndFrameworks->heading}}</h3>
                <div class="icon-box"> 
                  <a href="{{route('service',$platformAndFrameworks->id)}}" target="_blank"><img src="{{asset('storage/images/'.$platformAndFrameworks->logo)}}" alt="" width="50%" height="50%"></a>
                </div>
                <div class="teaser more service-content" >
                {{ $platformAndFrameworks->content}}
                </div>
                <a  href="{{route('service-view',$platformAndFrameworks->id)}}" target="_blank" >Read More</a>
                {{-- <div class="icon-box"><img src="images/service-item-icon1.png" alt=""></div> --}}
                
              </div>
            </div>
          @endforeach
        </div>
    </div> 

</section>

<script type="text/javascript">
    $('.carousel').carousel();
</script>
<style type="text/css">
  
</style>
@endsection
