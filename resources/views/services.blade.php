@extends('master')
@section('nav')
<li class="nav-item">
  <a class="nav-link" href="{{route('home')}}">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('about')}}">About</a>
</li>
<li class="nav-item active">
   <a class="nav-link" href="{{route('services')}}">Services</a>
</li>
<li class="nav-item">
   <a class="nav-link" href="{{route('blog')}}">Blog</a>
</li>
<li class="nav-item">
   <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
</li>
@endsection
@section('content')
<!-- services section start -->
<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital"><span style="color: #fcce2d">Our</span> Courses</h1>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="{{asset('temp/images/img-2.png')}}" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">Art And Design</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="{{asset('temp/images/img-3.png')}}" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">Science</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="{{asset('temp/images/img-4.png')}}" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">Business Stady</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="{{asset('temp/images/img-5.png')}}" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">English Speaking</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>            
      </div>
      <!-- services section end -->
@endsection