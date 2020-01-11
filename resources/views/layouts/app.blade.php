<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Liber') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('web/assets/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('popper/popper.min.js')}}"></script>
    <script src="{{ asset('tether/tether.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dropdown/js/nav-dropdown.js')}}"></script>
    <script src="{{ asset('dropdown/js/navbar-dropdown.js')}}"></script>
    <script src="{{asset('touchswipe/jquery.touch-swipe.min.js')}}"></script>
    <script src="{{asset('parallax/jarallax.min.js')}}"></script>
    <script src="{{asset('smoothscroll/smooth-scroll.js')}}"></script>
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
                        <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="{{ '/' }}"><img src="images/law-icon.png" alt="" data-popupalt-original-title="null" title="" width="32px"> <span>AAVAS</span></a></span>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ '/' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ '/aboutus' }}">About us</a>
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
                        <a class="nav-link link text-white display-4" href="{{ '/login' }}">Login</a>
                    </li>
                  </ul>                  
                </div>
            </nav>
        </section>      

        @yield('content')

        <section>
                    <div class="footer-wrapper">
                          <div class="container">
                            <div class="row">
                              <div class="col-sm-6 col-md-4"> 
                                <img src="images/law-icon.png" alt="" data-popupalt-original-title="null" title="" width="50px">
                                <span class="navbar-caption-wrap ml-3">
                                    <a class="navbar-caption text-white display-5" style="font-size:40px" href="{{ '/' }}">AAVAS</a></span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <ul class="social-icons">
                                  <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                  <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                  <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                  <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                  <li><a href="javascript:void(0)"> <i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                              </div>
                              <div class="col-sm-6 col-md-5">
                                <div class="bullet-section">
                                  <h2><img src="images/link-icon.png" alt="">ADDITIONAL RESEARCH LINKS</h2>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                  <ul>
                                    <li><a href="javascript:void(0)">FREQUENTLY ASKED QUESTIONS</a></li>
                                    <li><a href="javascript:void(0)">LEGAL ADVICE</a></li>
                                    <li><a href="javascript:void(0)">HOW TO WRITE STATEMENTS</a></li>
                                    <li><a href="javascript:void(0)">PROMOTING CONCIOUSNESS</a></li>
                                    <li><a href="javascript:void(0)">CULTURAL SCHEMAS</a></li>
                                    <li><a href="javascript:void(0)">PERFORMING IN COURT</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-3">
                                <div class="form-section">
                                   <div class="container">
                                    @if(session()->has('message'))
                                      <div class="alert alert-success">
                                          {{ session()->get('message') }}
                                      </div>
                                    @endif
                                  </div>
                                    <h2><img src="images/contact-icon.png" alt="">QUICK CONTACT</h2>
                                    <form action="{{route('contact.store')}}" method="post">
                                      @csrf
                                      <div class="form-group">
                                      <input name="name" class="form-control required" placeholder="Full Name" type="text">
                                        @error('name')
                                          <span class="text-danger" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <input name="phone" placeholder="Phone Number" type="number" style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                        @error('phone')
                                          <span class="text-danger" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <input name="email" placeholder="Your E-mail Address*" type="email">
                                        @error('email')
                                          <span class="text-danger" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                      </div>  
                                      <div class="form-group">
                                        {{-- <input name="message" placeholder="Describe your case briefly." type="text"> --}}
                                        <textarea name="message" placeholder="Describe your case briefly." style="width: 100%"></textarea>
                                        @error('message')
                                          <span class="text-danger" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                      </div>
                                      <button type="submit" class="btn">Send Message</button>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </section>  
    </div>
</body>
</html>
