@extends('layouts.app')

@section('content')

{{-- <div class="breadcrumb-wrapper">
  <div class="container">
    <div class="breadcrumb-text">
      <h1>Our Services</h1>
      <div class="inner-breadcrumb">
        <ul>
          <li><a href="{{ '/' }}">Home</a></li>
          <li> Services</li>
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
                <a href="#"><img src="{{asset('/storage/images/'.$datas->file)}}" alt="Barrister"/></a>
              </div>
              <div class="row">
                <div class="container">
                  <div class="hero">
                       <div class="sidebar-logo" style="max-width: 138px; max-height: 113px; margin-left: 500px;"><img class="icon" data-animation="animated bounceInLeft" src="{{asset('storage/images/'.$datas->logo)}}" alt=""> </div> <div class="sidebar-content" style="margin-right: 500px;">  <h1>Our Services</h1>
                      <div class="inner-breadcrumb">
                        <ul>
                          <li><a href="{{ '/' }}">Home</a></li>
                          <li> Services</li>
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
    <div class="container">
      <div class="title text-center mb-0"> 
        <span class="title-border-img">
            <img src="../images/h1-line-img1.png" alt="">
        </span>
        <h2 class="text-center">Our Services</h2>
      </div>
  <div class="row" >
  <?php $count = 1; ?>
    @foreach($servicesData as $servicesDatas)
    
       <div class="col-md-4 col-sm-6" >
              <div class="service-item header" id="myHeader" style="max-height: 400px;min-height: 400px;">
                <h3>{{ $servicesDatas->heading}}</h3>
                <div class="icon-box"> <a href="{{route('service',$servicesDatas->id)}}" target="_blank"><img src="{{asset('storage/images/'.$servicesDatas->logo)}}" alt="" width="50%" height="50%"></a></div>
                <div class="teaser more service-content" >
                 <?php echo $servicesDatas->content; ?>
                  </div>
                <a href="{{route('service',$servicesDatas->id)}}" target="_blank">Read More</a>
                {{-- <div class="icon-box"><img src="images/service-item-icon1.png" alt=""></div> --}}
              </div>
            </div>
    @endforeach
  </div>
</div>   
</section>
<script>
// // Slide Up Slide Down
// $('.show_hide').toggle(function(){
// $(this).text().replace("Read More", "Read Less");
// $('.' + $(this).attr('data-content')).slideDown();

// },function(){
// $(this).text().replace("Read Less", "Read More");
// $('.' + $(this).attr('data-content')).slideUp();
// });
</script>
<script>
 $(document).ready(function() {
  var showChar = 500;
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