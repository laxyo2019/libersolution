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
            <div class="col-md-6">
              <div class="callouts callout-img1" style="max-height: 500px;min-height: 500px; margin-bottom: 20px;" >
                 <a href="{{$products->product_url}}"  target="_blank"><h3></a>{{$products->product_title}}</h3>
                <span class="callouts-line"><img src="{{asset('storage/images/'.$products->file)}}" alt="" width="100px" height="100px"></span></a>
                <div class="product-content"><p>{{$products->content}}</p></div>
                {{-- <a  href="" target="_blank"></a> --}}

                <a class="btn-one" href="{{route('view',$products->id)}}" target="_blank" style="margin-top: 60px;">Read More</a> </div>
            </div>
           @endforeach
          </div>
          
        </div>
      </div>
    </div>
</section>
</div>
<script>
  $(function(){
    $(".product-content").each(function () {
        len=$(this).text().length;
        str= $(this).text().substr(0,150);
        lastIndexOf = str.lastIndexOf(" "); 
        if(len>150) {
            $(this).text(str.substr(0, lastIndexOf) + '...');
            var txt2 = $("").text(" "); 
        }
    });
});
  $(function(){
    $(".service-content").each(function () {
        len=$(this).text().length;
        str= $(this).text().substr(0,300);
        lastIndexOf = str.lastIndexOf(" "); 
        if(len>300) {
            $(this).text(str.substr(0, lastIndexOf) + '...');
            var txt2 = $("").text(" "); 
        }
    });
});
</script>
@endsection