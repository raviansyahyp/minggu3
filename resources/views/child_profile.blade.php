@extends('profile')

@section('title', 'profile')

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
<div class="row">
        <div id="google-map"></div>
      </div>
      <div class="row">
        <div class="contact-form-container">
          <h2 class="contact-title">Contact Us</h2>
          <p>Jika ada masalah Hubungi saya:
             <br>raviansyah 
             <br> Nome hp: 0895396629202
             <br> instagram: @raviansyahyp
          <form action="#" method="post" class="tm-contact-form">
              <div class="col-lg-5 col-md-5 contact-form-left">
                <div class="form-group">
                    <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                </div>
                <div class="form-group">
                    <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                </div>
                <div class="form-group">
                    <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                </div>                
              </div>
              <div class="col-lg-7 col-md-7 contact-form-right">
                <div class="form-group margin-bottom-0">
                    <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 submit-btn-container">
                <button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Send Message</button>  
              </div>                        
          </form>
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
          <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2021 Raviansyah</p>
        </div>
      </div>
 
@endsection