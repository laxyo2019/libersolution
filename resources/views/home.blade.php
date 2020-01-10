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
                    <img class="icon" data-animation="animated bounceInLeft" src="images/header-law-icon.png" alt=""> <h2 data-animation="animated bounceInLeft" class=""><span>{{$datas->contents}}</span></h2>
                   
                    <a class="btn-one" data-animation="animated bounceInLeft" href="javascript:void(0)">Request a free consultation</a></div>
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
    <!-- Banner Wrapper End --> 
    <!-- <div class="banner-wrapper">
        <div id="first-slider" class="carousel fade-carousel slide">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../images/banner1.jpg" alt="First slide">
              <div class="container">
              <div class="carousel-caption text-center" style="bottom: 130px">
                <img class="icon" data-animation="animated bounceInLeft" src="images/header-law-icon.png" alt="">
                <p>WITH LAWYER & ATTORNEY</p>
                <h1>One more for good measure.</h1>
                <a class="btn-one" href="#" role="button">Browse gallery</a>
              </div>
            </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../images/banner2.jpg" alt="Second slide">
              <div class="container">
              <div class="carousel-caption text-center" style="bottom: 130px">
                <img class="icon" data-animation="animated bounceInLeft" src="images/header-law-icon.png" alt="">
                <p>WITH LAWYER & ATTORNEY</p>
                <h1>One more for good measure.</h1>
                <a class="btn-one" href="#" role="button">Browse gallery</a>
              </div>
            </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../images/banner3.jpg" alt="Third slide">
              <div class="container">
              <div class="carousel-caption text-center" style="bottom: 130px">
                <img class="icon" data-animation="animated bounceInLeft" src="images/header-law-icon.png" alt="">
                <p>WITH LAWYER & ATTORNEY</p>
                <h1>One more for good measure.</h1>
                <a class="btn-one" href="#" role="button">Browse gallery</a>
              </div>
            </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
    </div> -->
</section>
<section> 
<div class="container"> 
  <div class="barrister-callouts-wrapper">
    <div class="container">
      <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
        <h2>Products And Services</h2>
      </div>
      <div class="row">
    <?php $count = 1; ?>
      @foreach($productAndServices as $productAndServices)
        <div class="col-md-4">
          <div class="callouts callout-img1" >
            <h3>{{$productAndServices->product_title}}</h3>
            <span class="callouts-line"><img src="{{asset('storage/images/'.$productAndServices->file)}}" alt="" width="50%" height="50%"></span>
            <div ><p>{{$productAndServices->content}}</p></div>
            <a class="btn-one" href="{{$productAndServices->product_url}}" target="_blank">View Case</a> </div>
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
        <h2 class="text-center">Platform And Frameworks</h2>
      </div>
  <div class="row" >
  <?php $count = 1; ?>
    @foreach($platformAndFramework as $platformAndFrameworks)
      <div class="col-md-4 col-sm-6" >
        <div class="service-item" style="height: 500px;">
          <h3>{{ $platformAndFrameworks->heading}}</h3>
          <div >
            <p>{{ $platformAndFrameworks->content}}</p>
          </div>
          <a href="javascript:void(0)">Read More</a>
          {{-- <div class="icon-box"><img src="images/service-item-icon1.png" alt=""></div> --}}
          <div class="icon-box"><img src="{{asset('storage/images/'.$platformAndFrameworks->logo)}}" alt="" width="50%" height="50%"></div>
        </div>
      </div>
    @endforeach
  </div>
</div>   
</section>
{{-- <section>
    <div class="barrister-broad-range-law-services-wrapper">
      <div class="container">
        <div class="title"> 
            <span class="title-border-img">
                <img src="images/h1-line-img1.png" alt="">
            </span>
          <h2>Broad Range of Law Services</h2>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="barrister-law-single-section">
              <div class="single-section-img"><img src="images/broad-range-img1.jpg" alt=""></div>
              <h3>IN THE COURT OF LAW</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="barrister-law-single-section">
              <div class="single-section-img"><img src="images/broad-range-img2.jpg" alt=""></div>
              <h3>DIRECT WAY OF JUSTICE</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="barrister-law-single-section">
              <div class="single-section-img"><img src="images/broad-range-img3.jpg" alt=""></div>
              <h3>CORPORATE LAWSUITS</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="barrister-law-single-section">
              <div class="single-section-img"><img src="images/broad-range-img4.jpg" alt=""></div>
              <h3>PROTECTING BUSINESS</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section> --}}

<script type="text/javascript">
    $('.carousel').carousel();
</script>
@endsection
