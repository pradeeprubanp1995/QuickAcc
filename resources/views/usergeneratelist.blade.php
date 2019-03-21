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
        <!-- //second header -->

       




<!-- for accounts -->
<section class="blog_w3ls py-xl-5 " id="why" >
    <div class="container py-xl-5 py-3 ">
        <div class="title-section mb-md-5 mb-4">
            <br/><br/>
            <h3 class="w3ls-title text-uppercase text-bl font-weight-bold">{{ $service->service_name }}</h3>
            
        </div>
 
        <div class="row">
            
                
                 <table class="table table-striped" border="1">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>User Name</th>
                                <th>Password</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                         @if($list)
                         
                        <tr>
                            <td>1.</td>
                            <td><?php  echo $list->username;  ?></td>       
                            <td><?php  echo $list->password; ?></td>
                         </tr>
                         @endif 
                        
                      </tbody>
                    </table>

            </div>


            </div>
        
    </section>




                   </div>
                   </div> 

@endsection
 