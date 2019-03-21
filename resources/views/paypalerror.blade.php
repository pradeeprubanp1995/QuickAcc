@include('dashboard.userheader')
@extends('dashboard.userleftpanel')
@section('content') 
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  /*background-color: #f2f2f2;*/
  padding: 20px;
}
</style>
<div id="home">
        <!-- top header -->
        
        <!-- //top header -->

        <!-- second header -->
        <div class="main-top">
            <div class="container">
                <div class="header d-md-flex justify-content-between align-items-center py-3">
                    <!-- logo -->
                    <!-- <div id="logo">
                        <h1>
                            <a href="index.html">
                                <span class="fa fa-user-md mr-2"></span>
                                <span class="logo-sp">Be</span> Clinic
                            </a>
                        </h1>
                    </div> -->
                    <!-- //logo -->
                    <!-- nav -->
                    <div class="nav_w3ls">
                        <nav>
                            <label for="drop" class="toggle">Menu</label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                                <li><a href="index.html" class="active">Home</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="about.html">About Us</a></li>
                                <li><a href="gallery.html">pricing</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <!-- First Tier Drop Down -->
                                   <!--  <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label> -->
                                    <!-- <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="#services" class="drop-text">Services</a></li>
                                        <li><a href="#blog" class="drop-text">Blog</a></li>
                                        <li><a href="single.html" class="drop-text">Blog Details</a></li>
                                        <li><a href="#why" class="drop-text">What We do</a></li>
                                        <li><a href="#team" class="drop-text">Our Doctors</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="contact.html">accounts</a></li>
                                <li><a href="{{route('usergenerates')}}">generator</a></li>
                                <!-- <li class="loginbtn"><a href="{{ route('userlogin') }}"><span class="fa fa-sign-in mr-2"></span>Login</a></li> -->
                            </ul>
                        </nav>
                         
                    </div>

                    <!-- //nav -->
                </div>
               <!--  <div class="legreg"  >
                                
                                    
                                    <a href="login.html" class="login-button-2 text-uppercase text-bl">
                                        <span class="fa fa-sign-in mr-2"></span>Login</a>
                                    
                                    <a href="register.html" class="login-button-2 text-uppercase text-bl">
                                        <span class="fa fa-pencil-square-o mr-2"></span>Register</a>
                                    
                                
                            </div> -->
            </div>
        </div>
        <!-- //second header -->

       
    </div>

<?php 

        $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
        $paypalID = 'pradeepruban.p1995@gmail.com'; //Business Email

        ?>


<!-- for accounts -->
<section class="blog_w3ls py-xl-5" id="why" >
    <div class="container py-xl-5 py-3 ">
        <div class="title-section mb-md-5 mb-4">
            
            <h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Error</h3>
            
        </div>
 

            </div>
        </div>
    </section>
                    
@include('dashboard.userfooter')
@endsection
 