<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title >{{ config('app.name', 'Liber') }}</title>
    {{-- <img src="{{ asset('/images/loc.png') }}"> --}}
  {{--   <link rel="icon" type="image/ico" href="{{ asset('/images/loc.png') }}" />
    <link rel="shortcut icon" type="image/png" href="loc.png"/>  --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('web/assets/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('popper/popper.min.js')}}"></script>
    <script src="{{ asset('tether/tether.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dropdown/js/nav-dropdown.js')}}"></script>
    <script src="{{ asset('dropdown/js/navbar-dropdown.js')}}"></script>
    <script src="{{ asset('touchswipe/jquery.touch-swipe.min.js')}}"></script>
    <script src="{{ asset('parallax/jarallax.min.js')}}"></script>
    <script src="{{ asset('smoothscroll/smooth-scroll.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">  
    <link rel="stylesheet" href="{{ asset('web/assets/mobirise-icons/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{ asset('socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>
<style type="text/css">
    .row.justify-content-center {
    margin-top: 100px;
    margin-bottom: 30px;
}
</style>
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
<body>
    <div id="app">        
        <section class="menu cid-ruNsw1yRec" once="menu" id="menu1-0">   
            <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="menu-logo">
                    <div class="navbar-brand">
                      <?php
                        $headerSession = session()->get('headerLogo');
                          foreach ($headerSession as $value) { ?>
                            
                        <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="{{ '/' }}"><img src="{{asset('storage/images/'.$value->logo)}}" alt="" data-popupalt-original-title="null" title="" width="32px"> <span>{{$value->title}}</span></a></span>
                        <?php } ?>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ '/' }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ '/contactus' }}">Contact us</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ '/products' }}">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ '/services' }}"> Services</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ '/career' }}">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ '/aboutus' }}">About us</a>
                    </li>
                {{-- @guest --}}
                 {{--    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ '/login' }}">Login</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a> 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li> --}}
                {{-- @endguest --}}
                  </ul>                  
                </div>
            </nav>
        </section>      

        @yield('content')

        <section>

            <div class="footer-wrapper">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-3 col-md-4" > 
                        {{-- <img src="images/law-icon.png" alt="" data-popupalt-original-title="null" title="" width="50px"> --}}
                        <span class="navbar-caption-wrap ml-3">
                            <a class="navbar-caption text-white display-5" style="font-size:40px" href="{{ '/' }}"> <h3>Our Group Companies </h3></a></span>
                          <div class="mt-3">
                            <ul class="wfoot_content" >
                              <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.laxyofinance.com/"> Laxyo Finance Limited</a></li>
                              <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.yolaxinfra.com/"> Yolax Infranergy Pvt. Ltd.</a></li>
                              <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.laxyosolutionsoft.com/"> Liber Solutions Pvt. Ltd.</a></li>
                               <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://lakshyainternationalschool.org/"> Lakshya International School</a></li>
                              <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.apnagps.com/"> Apna GPS</a></li>
                              <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.discountbrandfactory.com/"> Discount Brand Factory</a></li>
                              <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.advocatemail.com/"> Advocat Email</a></li>
                                <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.adlaw.in/"> Adlaw</a></li>
                              <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="https://www.courtsjudgments.com/"> Courts Judgments</a></li>
                              <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.maagayatrihospital.org/"> Maa Gayatri Hospital</a></li>
                            </ul>
                       </div>
                        
                      </div>
                        <div class="col-sm-3 col-md-4 "> 
                        {{-- <img src="images/law-icon.png" alt="" data-popupalt-original-title="null" title="" width="50px"> --}}
                        <span class="navbar-caption-wrap ml-3">
                            <a class="navbar-caption text-white display-5" style="font-size:40px" href="{{ '/' }}"> <h3>Contacts Us</h3> </a></span>
                       <div class="wfoot_content mt-3">
                          <div>
                            <ul class="contact-details-alt">
                            <li><i class="fa fa-map-marker"></i>
                              <p>Laxyo House, Plot No.-2,<br>County Park,  MR-5, Mahalaxmi Nagar, Indore</p>
                            </li>
                            <li><i class="fa fa-phone"></i> <p><span>Phone</span>: +91-731-4996625</p> </li>
                            <li><i class="fa fa-phone"></i> <p><span>Phone</span>: +91-731-4043798</p> </li>
                            <li><i class="fa fa-envelope"></i>
                              <p><span>E-mail</span>: info@laxyo.com</p>
                            </li><li>
                          </li></ul>
                          </div>
                        </div>
                        
                      </div>
                        <div class="col-sm-3 col-md-4"> 
                        {{-- <img src="images/law-icon.png" alt="" data-popupalt-original-title="null" title="" width="50px"> --}}
                        <span class="navbar-caption-wrap ml-3">
                            <a class="navbar-caption text-white display-5" style="font-size:40px" href="{{ '/' }}"><h3> Rig. Off. - Ratlam</h3></a></span>
                       <div class="wfoot_content mt-3">
                           <ul class="contact-details-alt">
                              <li><i class="fa fa-map-marker"></i>
                                <p>Laxyo Tower, 46/1 T.I.T. Road, Ratlam (MP) 457001 </p>
                              </li>
                              <li><i class="fa fa-phone"></i>
                                <p><span>Phone</span>: +91-7412-232432</p>
                              </li>
                              <li><i class="fa fa-fax"></i>
                                <p><span>Fax</span>: +91-7412-232432</p>
                              </li>
                            </ul>

                          </div>
                          <ul class="social-icons" style="margin-left: 12px;">
                              <li><a class="fb" href="https://www.facebook.com/laxyoGroup/" data-placement="top" data-toggle="tooltip" title="Facbook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twtr" href="https://twitter.com/LaxyoGroup" data-placement="top" data-toggle="tooltip" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="twtr" href="https://in.linkedin.com/in/laxyo-group-21242a118" data-placement="top" data-toggle="tooltip" title="Linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
             
                        </ul>                      </div>
                        <div class="container mt-4 footer">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <p class="copyright">Copyright © 2020 LAXYO -  All rights reserved.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <p class="desined-by pull-right">Designed And Developed by <a href="http://www.laxyosolutionsoft.com/" target="_blank">Liber Solutions Pvt.Ltd.</a></p>
                            </div>
                          </div>
                        </div>
                     </div>
                    </div>
                  </div>
                        
              </div>
              </section>
              <style type="text/css">
                a, a:hover {color: #fff;}
                .fa.fa-map-marker {color: #fff;margin-inline: 10px;margin-top: 5px;}
                .fa.fa-phone {color: #fff;margin-inline: 10px;margin-top: 5px;}
                .fa.fa-envelope {color: #fff;margin-inline: 10px;margin-top: 5px;}
                .fa.fa-fax {color: #fff;margin-inline: 10px;margin-top: 5px;}
                li {display: flex; }
                .footer-wrapper {
                    padding: block;
                    padding-block: inherit;
                }
                .carousel-fade .carousel-inner .active, .carousel-fade .carousel-inner .next.left, .carousel-fade .carousel-inner .prev.right {
                  max-height: 420px;}
                  .banner-wrapper .carousel-control.left  {
                    background-image: none;
                    top: -202px;
                    z-index: 2;
                    position: relative;
                    margin-left: 67px;
                }
                 .banner-wrapper .carousel-control.right  {
                    background-image: none;
                    top: -202px;
                    z-index: 2;
                    position: relative;
                    margin-left: 67px;
                }
                .inner-page-wrapper.aboutus-wrapper {
                padding: 10px 0 114px;}
                .fa.fa-angle-double-right {
                  margin-right: 5px;
                  margin-top: 5px;
                  color: #fff;
              }
              </style>
                     
</html>
