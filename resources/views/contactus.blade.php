@extends('layouts.app')

@section('content')

<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="breadcrumb-text">
      <h1>Contact Us</h1>
      <div class="inner-breadcrumb">
        <ul>
          <li><a href="{{ '/' }}">Home</a></li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="inner-page-wrapper contact-wrapper">
<div class="container">
  <div class="row">    
    <div class="col-sm-7">
      <div class="address">
        <?php $count = 0; ?>
        @foreach($contactData as $data)
        <div class="add" style="margin-left:{{ $count > 0 ? $count*40:'' }}px;"><i><img src="{{asset('storage/images/'.$data->logo)}}"></i>
          <h3>{{$data->title}} <span>{{$data->content}}</span> </h3>
        </div>
        <?php $count++  ?>
        @endforeach
        {{-- <div class="add m-left-40"><i><img src="images/phone-icon.png" alt=""></i>
          <h3>Phone <span>(012) 345-6789, (123) 456-7890</span> </h3>
        </div>
        <div class="add m-left-80"><i><img src="images/email-icon.png" alt=""></i>
          <h3>CONTACT INFO <span><a href="mailto:info@sbtechnosoft.com">info@sbtechnosoft.com</a></span> </h3>
        </div> --}}
      </div>
    </div>
    <div class="col-sm-5">
      <div class="contact-img"> <img src="images/contact-img.png" alt=""> </div>
    </div>
  </div>
</div>
</div>

<div class="map-wrapper" style="border-bottom: 1px solid #fff">
  <div class="container">
      @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
      @endif
   	<div class="row">  
	    <div class="col-sm-6">
		    <div class="row">
		      <form class="contact-us-form" style="width: 100%" action="{{route('contact.store')}}" method="post">
             @csrf
             <div class="form-group col-md-12 input-error">
		          <input name="name" class="form-control required" placeholder="Full Name" type="text">
              @error('name')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
		        </div>
              <div class="form-group col-md-12 input-error">
              <input name="phone" class="form-control required" placeholder="Phone Number" type="number">
               @error('phone')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
		        <div class="form-group col-md-12 input-error">
		          <input name="email" class="form-control required" placeholder="Your E-mail Address*" type="email">
               @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
		        </div>
		        <div class="form-group col-md-12 input-error">
		          <textarea name="message" class="form-control required" placeholder="Describe your case briefly?"></textarea>
              @error('message')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
		        </div>
		        <div class="text-md-left col-md-12">
		          <button type="submit" class="btn-one">Send Message</button>
		        </div>
		      </form>
		    </div>
		  </div>
	    <div class="col-sm-6">
		    <div class="google-map">
				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.092039575819!2d75.91110541446564!3d22.761965331730572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631d507c3c99db%3A0xefd5abf6d4d44ea4!2sLaxyo%20Energy%20Ltd.!5e0!3m2!1sen!2sin!4v1577524437769!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
	    </div>
  	</div>
  </div>
</div>

@endsection