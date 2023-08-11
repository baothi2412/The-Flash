@extends('layouts.client.client-layout')


@section('content')
<!--Main Slider Start-->
<div class="inner-banner-header wf100">
    <h1 data-generated="Contact Us">Contact Us</h1>
    <div class="gt-breadcrumbs">
       <ul>
          <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
          <li> <a href="#"> Contact Us </a> </li>
       </ul>
    </div>
 </div>
 <!--Main Slider Start-->
 <!--Main Content Start-->
 <div class="main-content p80 innerpagebg wf100">
    <!--Contact Page Start-->
    <div class="contact-two">
       <div class="container">
          <div class="row mb-80">
             <!--Start-->
             <div class="col-md-4">
                <div class="contact-box">
                   <img src="images/loc-icon.png" alt="">
                   <h5>Address:</h5>
                   <p> 1 Đ. Lý Tự Trọng, An Phú, Ninh Kiều, Cần Thơ
                   </p>
                </div>
             </div>
             <!--End-->
             <!--Start-->
             <div class="col-md-4">
                <div class="contact-box">
                   <img src="images/phone-icon.png" alt="">
                   <h5>Contact:</h5>
                   <p><strong>Phone:</strong>  0292 3731 072</p>

                </div>
             </div>
             <!--End-->
             <!--Start-->
             <div class="col-md-4">
                <div class="contact-box">
                   <img src="images/mail-icon.png" alt="">
                   <h5>For More Information:</h5>
                   <p> <strong>Email:</strong>nnbthia22082@cusc.ctu.edu.vn</p>
                   <p>contact@soccerverse.com</p>
                </div>
             </div>
             <!--End-->
          </div>
       </div>
    </div>
    <!--Contact Page End-->
    <div class="google-map">
       <div class="google-map">
          <iframe src="https://www.google.com/maps/dir/10.0440251,105.7703291/cusc/@10.0388529,105.7647662,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x31a0881f9a732075:0xfa43fbeb2b00ca73!2m2!1d105.7795715!2d10.0336437?entry=ttu"></iframe>
       </div>
    </div>
    <div class="contact-two wf100 p80-0">
       <div class="container">
          <div class="row">
             <div class="col-lg-1"></div>
             <!--Form Start-->
             <div class="col-lg-10">
                <div class="contact-form">
                   <h2> Contact us</h2>
                   <ul class="form-row">

                      <li class="half-col">
                         <input type="text" class="form-control" placeholder="Email">
                      </li>
                      <li class="half-col">
                        <input type="text" class="form-control" placeholder="Phone">
                     </li>

                      <li class="half-col">
                         <input type="text" class="form-control" placeholder="Subject">
                      </li>
                      <li class="full-col">
                         <textarea class="form-control" placeholder="Content"></textarea>
                      </li>
                      <li class="full-col">
                         <button type="button">Contact us Now</button>
                      </li>
                   </ul>
                </div>
             </div>
             <!--Form End-->
          </div>
       </div>
    </div>
 </div>
 <!--Main Content End-->
 @endsection
