@extends('home')

@section('title', 'home')

@section('header')
<div class="templatemo-header">
            <img class="templatemo-header-img" src="{{ asset('motor/img/header.png') }}" alt="Header">
            <h1 class="templatemo-site-name">Motor</h1>
            <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
            </div>
            <div class="templatemo-nav-container">
            <nav class="templatemo-nav">
                <ul>
            <li><a href="http://127.0.0.1:8000/home" class="active">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="http://127.0.0.1:8000/profile">Profile</a></li>
            </ul>
            </nav> 
        </div>
         </div>

@endsection
<!-- 
@section('sidebar')
 
@endsection -->

@section('content')
<div class="about-container">
      
        <div class="about-container-left">
          <img src="{{ asset('motor/img/about/2.jpg') }}" alt="Image" class="img-responsive">
        </div>
        
        <div class="about-container-right">
          <h2 class="about-title">One Column</h2>
          <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
          <p class="about-description">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
          <a href="#" class="about-link">Duised sitDamet</a>
        </div>
        
      </div>

@endsection

@section('footer')
<div class="container">
        <div class="row margin-bottom-60">
          <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
            <h3 class="tm-footer-div-title">Main Menu</h3>
            <ul>
              <li><a href="{{ asset('motor/index.html') }}">Home</a></li>
              <li><a href="{{ asset('motor/about.html') }}">About Us</a></li>
              <li><a href="{{ asset('motor/gallery.html') }}">Directory</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="{{ asset('motor/services.html') }}">Our Services</a></li>
            </ul>
          </nav>
          <div class="col-lg-5 col-md-5 tm-footer-div">
            <h3 class="tm-footer-div-title">About Us</h3>
            <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
            <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
          </div>
          <div class="col-lg-4 col-md-4 tm-footer-div">
            <h3 class="tm-footer-div-title">Get Social</h3>
            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
            <div class="tm-social-icons-container">
              <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
        <div class="row tm-copyright">
        <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Company Name</p>
        </div>
    </div>
 
@endsection