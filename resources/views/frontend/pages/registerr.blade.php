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
                    <div class="card">

                        <div class="card-header">Admin {{ __('Register') }}</div>
        
         
        
                        <div class="card-body">
        
                            <form method="POST" action="{{ route('admin-register') }}">
        
                                @csrf 
        
         
        
                                <div class="form-group row">
        
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
         
        
                                    <div class="col-md-6">
        
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        
         
        
                                        @if ($errors->has('email'))
        
                                            <span class="invalid-feedback">
        
                                                <strong>{{ $errors->first('email') }}</strong>
        
                                            </span>
        
                                        @endif
        
                                    </div>
        
                                </div>
        
         
        
                                <div class="form-group row">
        
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
         
        
                                    <div class="col-md-6">
        
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
         
        
                                        @if ($errors->has('password'))
        
                                            <span class="invalid-feedback">
        
                                                <strong>{{ $errors->first('password') }}</strong>
        
                                            </span>
        
                                        @endif
        
                                    </div>
        
                                </div>
        
         
        
                                <div class="form-group row">
        
                                    <div class="col-md-6 offset-md-4">
        
                                        <div class="checkbox">
        
                                            <label>
        
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
        
                                            </label>
        
                                        </div>
        
                                    </div>
        
                                </div>
        
         
        
                                <div class="form-group row mb-0">
        
                                    <div class="col-md-8 offset-md-4">
        
                                        <button type="submit" class="btn btn-primary">
        
                                            {{ __('Login') }}
        
                                        </button>
        
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
        
                                            {{ __('Forgot Your Password?') }}
        
                                        </a>
        
                                    </div>
        
                                </div>
        
                            </form>
        
                        </div>
        
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
