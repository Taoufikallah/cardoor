@extends('frontend/layouts.app')

@section('content')
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Booking</h2>
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
                        <h3>Booking Car</h3>
    
                        {!! Form::open(['action' => 'BookingController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::text('email', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('phone', 'Phone') }}
                                {{ Form::text('phone', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('adress', 'Adress') }}
                                {{ Form::text('adress', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('city', 'City') }}
                                {{ Form::select ('city', [
                                                  'AGADIR' => 'AGADIR ', 
                                                  'AL HOCEIMA' => 'AL HOCEIMA ', 
                                                  'CASABLANCA' => 'CASABLANCA ', 
                                                  'CHEFCHAOUEN' => 'CHEFCHAOUEN ',
                                                  'DAKHLA' => 'DAKHLA ',  
                                                  'RABAT' => 'RABAT ', 
                                                  'SAFI' => 'SAFI ', 
                                                  'SALE' => 'SALE ', 
                                                  'TANGER' => 'TANGER ', 
                                                  'TAZA' => 'TAZA ',
                                                  'TEMARA' => 'TEMARA ',
                                                  'TETOUAN' => 'TETOUAN ',
                                                ],
                                                   1 , ['id' =>'year','class' => 'form-control']) 
                                                   }}
                            </div>
                            <!--== Pick Up Date ==-->
                            {{-- <div class="pick-up-date book-item">
                                    <input id="startDate" placeholder="Pick Up Date" />

                                    <div class="return-car">
                                        <input id="endDate" placeholder="Return Date" />
                                    </div>
                                </div> --}}
                                <!--== Pick Up Location ==-->
                            <div class="form-group">
                                 {{ Form::label('age', 'Age') }}
                                 {{ Form::select ('age', ['18' => '18',
                                                           '19' => ' 19',
                                                            '20' => ' 20',
                                                            '21' => ' 21',
                                                            '22' => ' 22',
                                                            '23' => ' 23',
                                                            '24' => ' 24',
                                                            '25' => ' 25',
                                                            '26' => ' 26',
                                                            '27' => ' 27',
                                                            '28' => ' 28',
                                                            '29' => ' 29',
                                                            '30' => ' 30',                    
                                                            '31' => ' 31',
                                                            '31' => ' 32',
                                                            '31' => ' 33',
                                                            '31' => ' 34',
                                                            '31' => ' 35',
                                                            '31' => ' 36',
                                                            '31' => ' 37',
                                                            '31' => ' 38',
                                                            '31' => ' 39',
                                                            '31' => ' 40',
                                                        ],
                                                            2 , ['id' =>'select','class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('license', 'License') }}
                                {{ Form::text('license', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                            </div>
                            
                            {{ Form::submit('Booking Car', array('class' => 'btn btn-primary', 'style'=> 'margin-top:20px')) }}
                            {{ Form::button('Close', array('class' => 'btn btn-secondary', 'style'=> 'margin-top:20px')) }}


                {!! Form::close() !!}
                      
                    </div>
                    
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Login Page Content End ==-->
@endsection
