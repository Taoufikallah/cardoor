@extends('frontend/layouts.app')

@section('content')

            <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
            <div class="container">
                <div class="row">
                    <!-- Page Title Start -->
                    <div class="col-lg-12">
                        <div class="section-title  text-center">
                            <h2>Booking Car</h2>
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

                                <?php $no = 1?>

                                <form action="/" method="GET">
                                    <select name="q_brand" id="q_brand" class="form-control" onchange="this.form.submit()">
                                            @foreach ($brands as $key => $brand)
                                                <option value="{{ $brand->id }}" @if ($brand->id == $qBrand)
                                                    selected="selected"
                                                @endif> {{  $brand->name }} </option>
                                            @endforeach
                                        </select>
                                       
                                </form>
                                

                                <br><br><br>
                            <div class="car-list-content">
                                <div class="row">
                                    <!-- Single Car Start -->
                                    <?php $no = 1?>
                                        @foreach ($car as $key => $value)
                                    <div class="col-sm-4 col-md-4" id="demo"> 
                                         
                                        <div class="single-car-wrap">
                                            <div class="car-list-thumb car-thumb-1">
                                                    <img style="width:100%" src="{{asset('app/cover_images/'.$value->cover_image)}}">
                                            </div>
                                            <div class="car-list-info without-bar">
                                                    <p class="lead"  > 
                                                        @if($value->brand !== null)         
                                                            {{  $value->brand->name }}
                                                         @endif
                                                    </p>
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
    
               <script>

$(document).ready(function() {

        $('#select').on('change', function(){
            var labCategId = $(this).val();
        // alert(labCategId);
            if(labCategId) {
                $.ajax({
                    processing : 'true',
                    serverSide : 'true',
                    url: 'get_lab_sub',
                    type:"POST",
                    data : {labCategId:labCategId,"_token":"{{ csrf_token() }}"},
                    dataType:"json",

                    success:function(data) {
                        if(data){
                            $('#labS').empty();

                            $.each(data, function(key, value){
                            // alert(key);
                                $('#labS').append('<option value="'+value.lab_sub_category_id+'">' + value.sub_category_name + '</option>');

                            });
                        }

                    },

                });
            } else {
                $('select[name="labS"]').empty();
            }

        });
    }
        </script>
@endsection