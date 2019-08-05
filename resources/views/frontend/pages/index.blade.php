
@extends('frontend/layouts.app')

@section('content')
    <!--== Slider Area Start ==-->
    <section id="slider-area">
            <!--== slide Item One ==-->
            <div class="single-slide-item overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="book-a-car">
                                <form action="index.html">
                                    <!--== Brand Choose ==-->
                                    <div class="choose-car-type book-item">
                                            <h4>CHOOSE BRAND :</h4>
                                            <select class="custom-select">
                                              <option selected>Select</option>
                                              <option value="1">BMW</option>
                                              <option value="2">Audi</option>
                                              <option value="3">Lexus</option>
                                            </select>
                                        </div>
                                        <!--== Car Choose ==-->
    
                                    <!--== Pick Up Date ==-->
                                    <div class="pick-up-date book-item">
                                        <h4>PICK-UP DATE:</h4>
                                        <input id="startDate" placeholder="Pick Up Date" />
    
                                        <div class="return-car">
                                            <h4>Return DATE:</h4>
                                            <input id="endDate" placeholder="Return Date" />
                                        </div>
                                    </div>
                                    <!--== Pick Up Location ==-->
    
                                    
    
                                    <div class="book-button text-center">
                                        <button class="book-now-btn">Book Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
    
                        <div class="col-lg-7 text-right">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="slider-right-text">
                                        <h1>BOOK A CAR TODAY!</h1>
                                        <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== slide Item One ==-->
        </section>
        <!--== Slider Area End ==-->
    
    
        <!--== About Us Area Start ==-->
        <section id="about-area" class="section-padding">
            <div class="container">
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col-lg-12">
                        <div class="section-title  text-center">
                            <h2>About us</h2>
                            <span class="title-line"><i class="fa fa-car"></i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
    
                <div class="row">
                    <!-- About Content Start -->
                    <div class="col-lg-6">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="about-content">
                                    <p>Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->
    
                    <!-- About Video Start -->
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/img/home-2-about.png" alt="JSOFT">
                        </div>
                    </div>
                    <!-- About Video End -->
                </div>
    
                <!-- About Fretutes Start -->
                <div class="about-feature-area">
                    <div class="row">
                        <!-- Single Fretutes Start -->
                        <div class="col-lg-4">
                            <div class="about-feature-item active">
                                <i class="fa fa-car"></i>
                                <h3>ALL BRANDS</h3>
                                <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                            </div>
                        </div>
                        <!-- Single Fretutes End -->
    
                        <!-- Single Fretutes Start -->
                        <div class="col-lg-4">
                            <div class="about-feature-item">
                                <i class="fa fa-car"></i>
                                <h3>ALL BRANDS</h3>
                                <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                            </div>
                        </div>
                        <!-- Single Fretutes End -->
    
                        <!-- Single Fretutes Start -->
                        <div class="col-lg-4">
                            <div class="about-feature-item">
                                <i class="fa fa-car"></i>
                                <h3>ALL BRANDS</h3>
                                <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                            </div>
                        </div>
                        <!-- Single Fretutes End -->
                    </div>
                </div>
                <!-- About Fretutes End -->
            </div>
        </section>
        <!--== About Us Area End ==-->
    
        <!--== Partner Area Start ==-->
        <div id="partner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="partner-content-wrap">
                            <!-- Single Partner Start -->
                            <div class="single-partner">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Partner End -->
    
                            <!-- Single Partner Start -->
                            <div class="single-partner">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Partner End -->
    
                            <!-- Single Partner Start -->
                            <div class="single-partner">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Partner End -->
    
                            <!-- Single Partner Start -->
                            <div class="single-partner">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Partner End -->
    
                            <!-- Single Partner Start -->
                            <div class="single-partner">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Partner End -->
    
                            <!-- Single Partner Start -->
                            <div class="single-partner">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Partner End -->
    
                            <!-- Single Partner Start -->
                            <div class="single-partner">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Partner End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Partner Area End ==-->
    
        <!--== Services Area Start ==-->
        <section id="service-area" class="section-padding">
            <div class="container">
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col-lg-12">
                        <div class="section-title  text-center">
                            <h2>Our Services</h2>
                            <span class="title-line"><i class="fa fa-car"></i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
    
                <!-- Service Content Start -->
                <div class="row">
                    <div class="col-lg-11 m-auto text-center">
                        <div class="service-container-wrap">
                            <!-- Single Service Start -->
                            <div class="service-item">
                                <i class="fa fa-taxi"></i>
                                <h3>RENTAL CAR</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
                            </div>
                            <!-- Single Service End -->
    
                            <!-- Single Service Start -->
                            <div class="service-item">
                                <i class="fa fa-cog"></i>
                                <h3>CAR REPAIR</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
                            </div>
                            <!-- Single Service End -->
    
                            <!-- Single Service Start -->
                            <div class="service-item">
                                <i class="fa fa-map-marker"></i>
                                <h3>TAXI SERVICE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
                            </div>
                            <!-- Single Service End -->
    
                            <!-- Single Service Start -->
                            <div class="service-item">
                                <i class="fa fa-life-ring"></i>
                                <h3>life insurance</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
                            </div>
                            <!-- Single Service End -->
    
                            <!-- Single Service Start -->
                            <div class="service-item">
                                <i class="fa fa-bath"></i>
                                <h3>car wash</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
                            </div>
                            <!-- Single Service End -->
    
                            <!-- Single Service Start -->
                            <div class="service-item">
                                <i class="fa fa-phone"></i>
                                <h3>call driver</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
                            </div>
                            <!-- Single Service End -->
                        </div>
                    </div>
                </div>
                <!-- Service Content End -->
            </div>
        </section>
        <!--== Services Area End ==-->
    
        <!--== Pricing Area Start ==-->
        <section id="pricing-area" class="section-padding overlay">
                <div class="container">
                    <div class="row">
                        <!-- Section Title Start -->
                        <div class="col-lg-12">
                            <div class="section-title  text-center">
                                <h2>Only quality for clients</h2>
                                <span class="title-line"><i class="fa fa-car"></i></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <!-- Section Title End -->
                    </div>
        
                    <!-- Pricing Table Conatent Start -->
                    <div class="row">
                        <!-- Single Pricing Table -->
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="single-pricing-table">
                                <h3>BUSINESS</h3>
                                <h2>$ 55.99</h2>
                                <h5>PER MONTH</h5>
        
                                <ul class="package-list">
                                    <li>FREE VEHICLE DELIVERY</li>
                                    <li>WEDDINGS CELEBRATIONS</li>
                                    <li>FULL INSURANCE INCLUDED</li>
                                    <li>TRANSPORT ABROAD</li>
                                    <li>ALL INCLUSIVE MINI BAR</li>
                                    <li>CHAUFFER INCLUDED IN PRICE</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Pricing Table -->
        
                        <!-- Single Pricing Table -->
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="single-pricing-table">
                                <h3>Trial</h3>
                                <h2>Free</h2>
                                <h5>PER MONTH</h5>
        
                                <ul class="package-list">
                                    <li>FREE VEHICLE DELIVERY</li>
                                    <li>OTHER CELEBRATIONS</li>
                                    <li>FULL INSURANCE</li>
                                    <li>TRANSPORT ABROAD</li>
                                    <li>MINI BAR</li>
                                    <li>INCLUDED IN PRICE</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Pricing Table -->
        
                        <!-- Single Pricing Table -->
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="single-pricing-table">
                                <h3>standard</h3>
                                <h2>$ 35.99</h2>
                                <h5>PER MONTH</h5>
        
                                <ul class="package-list">
                                    <li>DELIVERY AT AIRPORT</li>
                                    <li>WEDDINGS AND OTHER</li>
                                    <li>FULL INCLUDED</li>
                                    <li>TRANSPORT ABROAD</li>
                                    <li>ALL MINI BAR</li>
                                    <li>CHAUFFER PRICE</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Pricing Table -->
                    </div>
                    <!-- Pricing Table Conatent End -->
                </div>
            </section>
            <!--== Pricing Area End ==-->
    
            
        <!--== Fun Fact Area Start ==-->
        <section id="funfact-area" class="overlay section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 col-md-12 m-auto">
                        <div class="funfact-content-wrap">
                            <div class="row">
                                <!-- Single FunFact Start -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-funfact">
                                        <div class="funfact-icon">
                                            <i class="fa fa-smile-o"></i>
                                        </div>
                                        <div class="funfact-content">
                                            <p><span class="counter">550</span>+</p>
                                            <h4>HAPPY CLIENTS</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FunFact End -->
    
                                <!-- Single FunFact Start -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-funfact">
                                        <div class="funfact-icon">
                                            <i class="fa fa-car"></i>
                                        </div>
                                        <div class="funfact-content">
                                            <p><span class="counter">250</span>+</p>
                                            <h4>CARS IN STOCK</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FunFact End -->
    
                                <!-- Single FunFact Start -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-funfact">
                                        <div class="funfact-icon">
                                            <i class="fa fa-bank"></i>
                                        </div>
                                        <div class="funfact-content">
                                            <p><span class="counter">50</span>+</p>
                                            <h4>office in cities</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FunFact End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Fun Fact Area End ==-->
    
        <!--== Choose Car Area Start ==-->
        <section id="choose-car" class="section-padding">
            <div class="container">
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col-lg-12">
                        <div class="section-title  text-center">
                            <h2>Choose your Car</h2>
                            <span class="title-line"><i class="fa fa-car"></i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
    
                <div class="row">
                    <!-- Choose Area Content Start -->
                    <div class="col-lg-12">
                        <div class="choose-ur-cars">
                            <div class="row">
                                <div class="col-lg-3">
                                    <!-- Choose Filtering Menu Start -->
                                    <div class="home2-car-filter">
                                        <a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".con">Conver</a>
                                        <a href="#" data-filter=".hat">Truck</a>
                                        <a href="#" data-filter=".mpv">MPV</a>
                                        <a href="#" data-filter=".sedan">Sedan</a>
                                        <a href="#" data-filter=".suv">SUV</a>
                                    </div>
                                    <!-- Choose Filtering Menu End -->
                                </div>
    
                                <div class="col-lg-9">
                                    <!-- Choose Cars Content-wrap -->
                                    <div class="row popular-car-gird">
    
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-6 col-md-6 con suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-1.jpg">
                                                        <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                                    </a>
                                                </div>
    
                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>
    
                                                    <h5>HATCHBACK</h5>
    
                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->
    
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-6 col-md-6 hat sedan">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-2.jpg">
                                                        <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                                    </a>
                                                </div>
    
                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>
    
                                                    <h5>HATCHBACK</h5>
    
                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->
    
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-6 col-md-6 suv con mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-3.jpg">
                                                       <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                                    </a>
                                                </div>
    
                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>
    
                                                    <h5>HATCHBACK</h5>
    
                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->
    
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-6 col-md-6 con hat">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                        <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                    </a>
                                                </div>
    
                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>
    
                                                    <h5>HATCHBACK</h5>
    
                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->
                                    </div>
                                    <!-- Choose Cars Content-wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Choose Area Content End -->
                </div>
            </div>
        </section>
        <!--== Choose Car Area End ==-->
    
        <!--== Mobile App Area Start ==-->
        <div id="mobileapp-video-bg"></div>
        <section id="mobile-app-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mobile-app-content">
                            <h2>SAVE 30% WITH THE APP</h2>
                            <p>Easy &amp; Fast - Book a car in 60 seconds</p>
                            <div class="app-btns">
                                <a href="#"><i class="fa fa-android"></i> Android Store</a>
                                <a href="#"><i class="fa fa-apple"></i> Apple Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Mobile App Area End ==-->
    
      
@endsection