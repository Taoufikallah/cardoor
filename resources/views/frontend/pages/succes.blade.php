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
                        <div class="card-header">{{ __('Register') }}</div>
        
                        <div class="card-body">
                           
                                <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                
                                      <div class="form-group has-feedback">
                                          
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                      </div>
                                      <div class="form-group has-feedback">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                      </div>
                                      <div class="form-group has-feedback">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                      </div>
                                      <div class="form-group has-feedback">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                      </div>
                                      <div class="row">
                                        <div class="col-xs-8">
                                          <div class="checkbox icheck">
                                            <label>
                                              <input type="checkbox"> I agree to the <a href="#">terms</a>
                                            </label>
                                          </div>
                                        </div>
                                        <!-- /.col -->
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        <div class="col-xs-4">
                                             
                                          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                                        </div>
                                        <!-- /.col -->
                                      </div>
                                    </form>
                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Login Page Content End ==-->
@endsection
