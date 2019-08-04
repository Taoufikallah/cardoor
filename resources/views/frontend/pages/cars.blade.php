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
                    <div class="col-lg-12">
                        <div class="car-list-content">
                            <div class="row">
                                <!-- Single Car Start -->
                                <?php $no=1 ?>
                                     @foreach ($car as $key => $value)
                                <div class="col-lg-6 col-md-6">
                                     
                                    <div class="single-car-wrap">
                                        <div class="car-list-thumb car-thumb-1">
                                                <img style="width:100%" src="{{asset('app/cover_images/'.$value->cover_image)}}">
                                        </div>
                                        <div class="car-list-info without-bar">
                                            <h2><a href="#">{{$value->title}}</a></h2>
                                            <h5>{{$value->price}}DH Rent /per a day</h5>
                                            {{-- <p>{{$value->body}}</p> --}}
                                            <ul class="car-info-list">
                                                <li>Year:  <span> {{$value->year}}</span></li>
                                                <li>Fuel : <span>{{$value->fuel}}</span></li>
                                                <li>Gearbox :<span>{{$value->gearbox}}</span></li>
                                            </ul>
                                            
                                        <a href="{{route('frontend.post.show', ['id' => $value->id])}}" class="rent-btn">Select</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                @endforeach
                                <!-- Single Car End -->
    
                            </div>
                        </div>
    
                        <!-- Page Pagination Start -->
                        <div class="page-pagi">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Page Pagination End -->
                    </div>
                    <!-- Car List Content End -->
                </div>
            </div>
        </section>
        <!--== Car List Area End ==-->
    
@endsection