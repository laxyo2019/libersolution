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
          <div class="callouts callout-img1" style="overflow: scroll;max-height: 400px;min-height: 400px;">
            <h3>{{$productAndServices->product_title}}</h3>
            <span class="callouts-line"><img src="{{asset('storage/images/'.$productAndServices->file)}}" alt="" width="50%" height="50%"></span>
            <div ><p>{{$productAndServices->content}}</p></div>
            <a  href="{{$productAndServices->product_url}}" target="_blank">View Case</a> </div>
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
              <div class="service-item header" id="myHeader" style="overflow: scroll;max-height: 400px;min-height: 400px;">
                <h3>{{ $platformAndFrameworks->heading}}</h3>
                <div class="teaser more" >
                {{ $platformAndFrameworks->content}}
                </div>
                {{-- <a href="javascript:void(0)">Read More</a> --}}
                {{-- <div class="icon-box"><img src="images/service-item-icon1.png" alt=""></div> --}}
                <div {{-- class="icon-box" --}}><img src="{{asset('storage/images/'.$platformAndFrameworks->logo)}}" alt="" width="50%" height="50%"></div>
              </div>
            </div>
          @endforeach
        </div>
    </div>   
</section>
<script>
 $(document).ready(function() {
  var showChar = 300;
  var ellipsestext = "...";
  var moretext = "less";
  var lesstext = "more";
  $('.more').each(function() {
    var content = $(this).html();

    if(content.length > showChar) {

      var c = content.substr(0, showChar);
      var h = content.substr(showChar-1, content.length - showChar);

      var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

      $(this).html(html);
    }

  });

  $(".morelink").click(function(){
    if($(this).hasClass("less")) {
      $(this).removeClass("less");
      $(this).html(moretext);
    } else {
      $(this).addClass("less");
      $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
  });
});
</script>
<script type="text/javascript">
    $('.carousel').carousel();
</script>
<style type="text/css">
  a {
  color: #0254EB
}
a:visited {
  color: #0254EB
}
a.morelink {
  text-decoration:none;
  outline: none;
}
.morecontent span {
  display: none;
}
.comment {
  width: 400px;
  background-color: #f0f0f0;
  margin: 10px;
}
</style>
@endsection
