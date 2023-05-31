@extends('master')
@section('nav')
<li class="nav-item">
  <a class="nav-link" href="{{route('home')}}">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('about')}}">About</a>
</li>
<li class="nav-item">
   <a class="nav-link" href="{{route('services')}}">Services</a>
</li>
<li class="nav-item">
   <a class="nav-link" href="{{route('blog')}}">Blog</a>
</li>
<li class="nav-item active">
   <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
</li>
@endsection
@section('content')
<!-- contact section start -->
<div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_left0">
                  <div class="mail_section">
                     <div class="contact_img">
                        <h1 class="contact_taital">Best Educations In World Here</h1>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="map_main"><img src="{{asset('temp/images/map-img.png')}}"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
@endsection
