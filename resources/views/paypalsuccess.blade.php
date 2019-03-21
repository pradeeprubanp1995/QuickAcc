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
       

        <!-- second header -->
        <div class="main-top">
            <div class="container" >
                <div class="header d-md-flex  py-3">
                    <!-- logo -->
                    <div id="logo">
                        <h4>
                            <a href="{{ route('userprofile') }}">
                                <img src="{{asset('uploads/face1.jpg')}}" width="50px" height="40px" style="border-radius: 100px;" />
                                <span class="logo-sp">Quick</span> Acc
                            </a>
                        </h4>
                    </div>
                    <!-- //logo -->
                    <!-- nav -->
                    <div class="nav_w3ls" style="padding-top:8px;">
                        <nav>
                            <label for="drop" class="toggle">Menu</label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                                <li><a href="#" class="active">Home</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="#">About Us</a></li>
                                <li><a href="#">Pricing</a></li>
                                
                                <li><a class="mx-lg-4 mx-md-3 my-md-0 my-2" href="#">Accounts</a></li>
                                <li><a href="#">Generator</a></li>
                                <li> <a class=""></a></li>

                            <li><a href="{{ route('admin.logout')}}" class=""><span class="fa fa-sign-in mr-2"></span>Logout</a></li> 
                            </ul>
                        </nav>
                    </div>
                    <!-- //nav -->
                </div>
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

        <div class="title-section mb-md-5 mb-4 " style="padding-top: 50px;">
            
            <!-- <h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Success</h3> -->
            <div class="jumbotron text-xs-center" >
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Your Premium Accepted.</strong> for further instructions on how to complete your account setup.</p>
  <hr>
  <p>
    Having Login? Then Go to<a href="{{ url('/admin/logout')}}">LOGIN</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" role="button" href="{{ url('/admin/logout')}}">Continue to Login</a>
  </p>
</div>


            </div>
        </div>
    </section>
                    
@include('dashboard.userfooter')
@endsection
 