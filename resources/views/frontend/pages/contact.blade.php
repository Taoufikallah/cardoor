@extends('frontend/layouts.app')

@section('content')
     <!--== Page Title Area Start ==-->
     <section id="page-title-area" class="section-padding overlay">
            <div class="container">
                <div class="row">
                    <!-- Page Title Start -->
                    <div class="col-lg-12">
                        <div class="section-title  text-center">
                            <h2>Contact Us</h2>
                            <span class="title-line"><i class="fa fa-car"></i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <!-- Page Title End -->
                </div>
            </div>
        </section>
        <!--== Page Title Area End ==-->
    
        <!--== Contact Page Area Start ==-->
        <div class="contact-page-wrao section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="contact-form">
                                {!! Form::open(['action' => 'MessageController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}

                                {{ Form::label('email', 'Email') }}
                                {{ Form::text('email', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}

                                {{ Form::label('phone', 'Phone') }}
                                {{ Form::text('phone', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}

                                {{ Form::label('subject', 'Subject') }}
                                {{ Form::text('subject', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}

                                {{ Form::label('message', 'Message') }}
                                {{ Form::text('message', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
            
                                
                                
                                {{ Form::submit('Add Car', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px')) }}
            
            
                            {!! Form::close() !!}
                            {{-- <form action="index.html">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="name-input">
                                            <input type="text" placeholder="Full Name">
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="email-input">
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="website-input">
                                            <input type="url" placeholder="Website">
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="subject-input">
                                            <input type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="message-input">
                                    <textarea name="review" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
    
                                <div class="input-submit">
                                    <button type="submit">Submit Message</button>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Contact Page Area End ==-->
    
        <!--== Map Area Start ==-->
        <div class="maparea">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105884.88504844962!2d-6.927302610220097!3d33.96934138169133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76b871f50c5c1%3A0x7ac946ed7408076b!2sRabat!5e0!3m2!1sen!2sma!4v1565360185533!5m2!1sen!2sma" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!--== Map Area End ==-->
    
@endsection