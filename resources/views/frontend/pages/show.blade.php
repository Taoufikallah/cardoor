@extends('frontend/layouts.app')

@section('content')
 <!--== Page Title Area Start ==-->
 <section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Our Cars</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Car List Content Start -->
            <div class="col-lg-8">
                <div class="car-details-content">
                    <h2>{{$car->title}} <span class="price">Rent: <b>{{$car->price}}DH</b></span></h2>
                    <div class="car-list-thumb car-thumb-1">
                        <img style="width:100%" src="{{asset('app/cover_images/'.$car->cover_image)}}">
                    </div>
                    <div class="car-details-info">
                        <h4>Additional Info</h4>
                        <p>{{$car->body}}</p>

                        <div class="technical-info">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tech-info-table">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Brand</th>
                                                <td>@if($car->brand !== null)         
                                                        {{  $car->brand->name }}
                                                     @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                    <th>Year</th>
                                                    <td>{{$car->year}}</td>
                                                </tr>
                                            <tr>
                                                <th>Color</th>
                                                <td>{{$car->color}}</td>
                                            </tr>
                                            <tr>
                                                <th>Number Doors</th>
                                                <td>{{$car->number_doors}}</td>
                                            </tr>
                                            <tr>
                                                <th>Number Places</th>
                                                <td>{{$car->number_places}}</td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                                
                                {{-- <div class="col-lg-6">
                                    <div class="tech-info-list">
                                        <ul>
                                            <li>ABS</li>
                                            <li>Air Bags</li>
                                            <li>Bluetooth</li>
                                            <li>Car Kit</li>
                                            <li>GPS</li>
                                            <li>Music</li>
                                            <li>Bluetooth</li>
                                            <li>ABS</li>
                                            <li>GPS</li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="input-submit">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Add Car
                                    </button>
                                {{-- <button type="submit">Booking Car</button> --}}
                            </div>
                    </div>
                </div>
            </div>
            <!-- Car List Content End -->
            <!-- Button trigger modal -->
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                            {!! Form::open(['action' => 'PagesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
            <!-- Sidebar Area Start -->
            <div class="col-lg-4">
                <div class="sidebar-content-wrap m-t-50">
                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>For More Informations</h3>

                        <div class="sidebar-body">
                            <p><i class="fa fa-mobile"></i> +8801816 277 243</p>
                            <p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
                        </div>
                    </div>
                    <!-- Single Sidebar End -->

                    <!-- Single Sidebar Start -->
                    {{-- <div class="single-sidebar">
                        <h3>Rental Tips</h3>

                        <div class="sidebar-body">
                            <ul class="recent-tips">
                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="assets/img/we-do/service1-img.png" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="assets/img/we-do/service2-img.png" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- Single Sidebar End -->

                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>Connect with Us</h3>

                        <div class="sidebar-body">
                            <div class="social-icons text-center">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar End -->
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</section>
<!--== Car List Area End ==-->
@endsection