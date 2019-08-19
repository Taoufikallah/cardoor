@extends('frontend/layouts.app')

@section('content')
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Login</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Login Page Content Start ==-->
<section id="lgoin-page-wrap" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8 m-auto">
                <div class="login-page-content">
                    <div class="login-form">
                        <h3>Sign Up</h3>
                        {!! Form::open(['action' => 'ClientController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::text('email', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('username', 'Username') }}
                                {{ Form::text('username', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('password', 'Password') }}
                                {{ Form::text('password', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::text('email', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            {{ Form::submit('Create Compte', array('class' => 'btn btn-primary', 'style'=> 'margin-top:20px')) }}

                        {!! Form::close() !!}
                      
                    </div>
                    
                    <div class="login-other">
                        <span class="or">or</span>
                        <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Signup With Facebook</a>
                        <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Signup With Google</a>
                    </div>
                    <div class="create-ac">
                        <p>Have an account? <a href="login.html">Sign In</a></p>
                    </div>
                    <div class="login-menu">
                        <a href="about.html">About</a>
                        <span>|</span>
                        <a href="contact.html">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Login Page Content End ==-->
@endsection
