@extends('layout.index')
@section('content')
<div class="home" id="home">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="/">
                <img src="{{('frontend/img/Alumni-Logo.jpg')}}">
            </a>
            
            <ul class="navbar-nav ml-auto">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Type your thinking ...." name="search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
            </ul>
        </div>
    </nav>
    <!-- Home Section -->
    <div class="home-section">
        <div class="dark-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h1>Alumni Association Info</h1>
                        <a href="/about" class="btn">Read more
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <h3>Registration Info</h3>
                        <form class="registration" action="" method="post">
                            {{ csrf_field() }}
                            <p class="line">Please complete the form</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter your full name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email-Address">
                            </div>

                            <div class="form-group">
                                <input type="ID" class="form-control" name="ID" placeholder="Type your ID">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Repeat your password">
                            </div>
                            <div class="submit-session">
                                <a href="/Profile_info" value="submit" class="form-control">Create an account</a>
                            </div>
                            
                            <div class="d-flex justify-content-center mb-4">
                                <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                                <a href="#" class="linkedin-login btn btn-linkedin">Linkedin</a>
                            </div>
                                
                            <p class="login">Have already an account?<a href="/Alumni_login" style="color: #fff;text-decoration: underline;"> Login here</a></p>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection