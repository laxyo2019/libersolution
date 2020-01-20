@extends('layouts.app')

@section('content')

{{-- <div class="breadcrumb-wrapper">
  <div class="container">
    <div class="breadcrumb-text">
      <h1>Careers</h1>
      <div class="inner-breadcrumb">
        <ul>
          <li><a href="{{ '/' }}">Home</a></li>
          <li>Careers</li>
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
                <img src="{{asset('/storage/app/public/images/'.$datas->file)}}" alt="Barrister"/>
              </div>
              <div class="row">
                <div class="container">
                  <div class="hero">
                       <img class="icon" data-animation="animated bounceInLeft" src="images/header-law-icon.png" alt="">  <h1>Careers</h1>
                      <div class="inner-breadcrumb">
                        <ul>
                          <li><a href="{{ '/' }}">Home</a></li>
                          <li> Careers</li>
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
<div class="barrister-callouts-wrapper">
<div class="container">
  
   <div class="row">
      <div class="col-md-6">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif  
        <div class="consultaiton-form"> 
        	<img class="icon" src="images/header-law-icon.png" alt="">
          <h3>Need a <span>Professional</span> Career?</h3>
            <form method="post" method="{{route('career.store')}}"  enctype='multipart/form-data'>
                @csrf
          
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <input name="name" required="" class="form-control form-item" placeholder="Name" type="text" value="{{ old('name') }}" style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: pointer;">
                  @error('name')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
                <div class="col-sm-12">
                <div class="form-group">
                  <input name="phone" required="" class="form-control form-item" placeholder="Phone Number" type="text" value="{{ old('phone') }}">
                  @error('phone')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <input name="email" required="" class="form-control form-item" placeholder="Email Address" type="text" value="{{ old('email') }}">
                  @error('email')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <input name="file" required="" class="form-control form-item" placeholder="Subject" type="file" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" value="{{ old('file') }}">
                  @error('file')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-xs-12" style="padding-left: 15px; padding-right: 15px; width: 100%">
                <div class="form-group">
                  <textarea name="Message" rows="3" placeholder="Message" class="form-control form-item" value="{{ old('Message') }}"></textarea>
                  @error('Message')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-xs-12 pl-3">
                <button class="btn-one" type="submit">Send Now</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
      	<div class="careerImg">
        <div class="contact-img"> 
         	<img src="images/istockphoto-844081944-1024x1024.jpg" alt=""> 
        </div>
      </div>
      </div>
   </div>
</div>
</div>
{{-- <div class="container">
		<div class="row">
      <div class="col-md-12">
          <div class="col-md-6">
            <div class="callouts callout-img1">
              <h3>CORPORATE and <span>COMMERCIAL LAW</span></h3>
              <span class="callouts-line"><img src="images/callouts-line.png" alt=""></span>
              <p>Etiam commodo mollis felis hendrerit auctor. Mauris eu urna bibendum tortor molestie tincidunt</p>
              <a class="btn-one" href="javascript:void(0)">View Case</a> 
            </div>
          </div>
		      <div class="col-md-6">
		        <div class="consultaiton-form"> <img class="icon" src="images/header-law-icon.png" alt="">
		          <h3>Need a <span>Professional</span> Consultation?</h3>
		          <form>
		            <div class="row">
		              <div class="col-sm-12">
		                <div class="form-group">
		                  <input name="name" required="" class="form-control form-item" placeholder="Name" type="text" style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: pointer;">
		                </div>
		              </div>
		              <div class="col-sm-12">
		                <div class="form-group">
		                  <input name="phone" required="" class="form-control form-item" placeholder="Phone Number" type="text">
		                </div>
		              </div>
		              <div class="col-sm-12">
		                <div class="form-group">
		                  <input name="email" required="" class="form-control form-item" placeholder="Email Address" type="text">
		                </div>
		              </div>
		              <div class="col-sm-12">
		                <div class="form-group">
		                  <input name="subject" required="" class="form-control form-item" placeholder="Subject" type="text">
		                </div>
		              </div>
		              <div class="col-xs-12">
		                <div class="form-group">
		                  <textarea name="Message" rows="3" placeholder="Message" class="form-control form-item">                    </textarea>
		                </div>
		              </div>
		              <div class="col-xs-12">
		                <button class="btn-one" type="submit">Send Now</button>
		              </div>
		            </div>
		          </form>
		        </div>
		      </div>
    	</div>
  	</div>
</div> --}}

@endsection