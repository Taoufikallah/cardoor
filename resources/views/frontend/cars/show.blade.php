@extends('frontend/layouts.app')

@section('content')
        <!--== Page Title Area Start ==-->
        <section id="page-title-area" class="section-padding overlay">
            <div class="container">
                <div class="row">
                    <!-- Page Title Start -->
                    <div class="col-lg-12">
                        {{-- <a href="/cars" class="btn btn-default">Go Back</a> --}}
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
                            <h2>{{$car->title}} <span class="price">Rent: <b>${{$car->unit_price}}</b></span></h2>
                            <div class="car-preview-crousel">
                                    <img src={{ URL::to('/') }}/images/>
                                <div class="single-car-preview">
                                    
                                </div>

                                {{-- <div class="single-car-preview">
                                    <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                </div>
                                <div class="single-car-preview">
                                    <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                </div> --}}
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
                                                        <th>Class</th>
                                                        <td>Compact</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fuel</th>
                                                        <td>Petrol</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Doors</th>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <th>GearBox</th>
                                                        <td>Automatic</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
    
                                        <div class="col-lg-6">
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
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <!-- Car List Content End -->
    
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
                            <div class="single-sidebar">
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
                            </div>
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