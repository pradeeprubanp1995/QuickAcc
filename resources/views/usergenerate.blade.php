@include('dashboard.userheader')
@extends('dashboard.userleftpanel')
@section('content') 
    

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




<!-- for accounts -->
<section class="blog_w3ls py-xl-5" id="why" >
    <div class="container py-xl-5 py-3 py-3 ">
        
        <div class="title-section mb-md-5 mb-4" style="padding-top: 40px;">
            
            <h3 class="w3ls-title text-uppercase text-bl font-weight-bold">ACCOUNTS</h3>
            
        </div>
 
        <div class="row">
             @foreach($dept_data as $key => $data)
                
                <div class="col-lg-3" style="text-align: center;align-items: center; padding-bottom:50px;">
                    <img src="{{asset('uploads/'.$data->image)}}" width="160px" height="120px" />
                    <h2>{{ ucfirst($data->service_name) }}</h2>
                    <!-- <span style="background-color: #eee;">{{ ucfirst($data->username) }} : {{ ucfirst($data->password) }}</span> -->
                    <div><a href="{{ url('/generatelink/'.$data->id ) }}" class="btn btn-danger">Generate</a></div>
                </div>
                @endforeach
                
            </div>


            </div>
            
        </div>
    </section>
                    

@endsection
 