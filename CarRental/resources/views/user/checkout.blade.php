@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Checkout</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> pages </a></li>
                            <li class="active">Checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    <div class="wheel-register-block">
        <div class="container">
            <div class="row">
                <div class="col-md-5 padd-l0">
                    <div class="container-checkout">
                        <header>
                            <div class="bio">
                                <img src="{{ asset('storage/uploads/profile/'. $car->user->avatar) }}" alt="{{$car->user->user_name}}" class="bg">
                            </div>
                            <div class="avatarcontainer">
                                <img src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}" class="avatar">
                            </div>
                        </header>
                        <div class="content">
                            <div class="data">
                                {{$car->user->user_name}}’s
                                <span class="name-car-checkout">{{$car->name}}</span>
                                <div class="row">
                                    <div class="wheel-quote-stars col-lg-5">
                                        @for($i = 0; $i <$car->rate; $i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                        @for($i =0; $i < 5 -$car->rate; $i++)
                                            <span class="fa fa-star"></span>
                                        @endfor
                                    </div>
                                    <div class="col-lg-5"> <span class="trip ">. {{$car->total_trip}} trips</span></div>
                                </div>
                            </div>
                            <div class="tripTime">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul>
                                            <li class="day-tripTime">Sat, Sep 21</li>
                                            <li class="time-tripTime">10:00 AM</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="center-block">=></i>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul>
                                            <li  class="day-tripTime">Sat, Sep 21</li>
                                            <li class="time-tripTime">10:00 AM</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="tripLocation">
                                <span>Địa điểm giao nhận xe</span>
                                <p><i> + </i>{{$car->location_name}}</p>
                            </div>
                            <div class="tripLocation">
                                <div class="">
                                    <ul>
                                        <li  class="time-tripTime">Trip price : CA$250.00/day</li>
                                        <li class="time-tripTime">Trip fee : CA$16.90/day </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tripLocation">
                                <div class="card price-card">
                                    <div class="card-body ">
                                        <ul>
                                            <li  class="time-tripTime">6-day trip: CA$250.00/day</li>
                                            <li class="priceTotal">Trip total : CA$16.90/day </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tripLocation">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="">
                                    </div>
                                    <div class="col-sm-8 ">
                                        <span>
                                            Free cancellation
                                        </span>
                                        <p>
                                            Full refund before September 20, 10:00 AM in local time of the car
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 padd-r0">
                    <div class=" marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                        <div class="wheel-header">
                            <h3>Your <span>infomation</span></h3>
                        </div>
                        <!--Accordion wrapper-->
                        <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree21">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree21"
                                       aria-expanded="false" aria-controls="collapseThree21">
                                        <h3 class="mb-0 title-list">
                                            Mobile number
                                        </h3>
                                    </a>
                                </div>
                                <!-- Card body -->
                                <div id="collapseThree21" class="collapse" role="tabpanel" aria-labelledby="headingThree21"
                                     data-parent="#accordionEx1">
                                    <div class="card-body">
                                        <form>
                                            <div class="row form-group">
                                                <div class="col-lg-3">
                                                    @if($car->user->phone == "")
                                                    <label for="formGroupExampleInput2">Phone number</label>
                                                    <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                                    @endif
                                                </div>
                                            <button class="btn-info">Continue</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree31">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree31"
                                       aria-expanded="false" aria-controls="collapseThree31">
                                        <h3 class="mb-0 title-list">
                                            Driver’s license
                                        </h3>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree31" class="collapse" role="tabpanel" aria-labelledby="headingThree31"
                                     data-parent="#accordionEx1">
                                    <div class="card-body">
                                        <form>
                                            <div class="row form-group">
                                                <div class="col-lg-3">
                                                    <label for="formGroupExampleInput2">First name</label>
                                                    <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="formGroupExampleInput2">Middle name</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                                <div class="col-lg-2">
                                                    <label for="formGroupExampleInput2">Last name</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                            </div>
                                            <div class=" row form-group m-1">
                                                <p class="text-black-50">Enter your name <strong class="text-danger">exactly as it appears on your driver's license
                                                    </strong></p>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-3">
                                                    <label for="formGroupExampleInput2">Day of birth</label>
                                                    <input type="date" class="form-control h-75" id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                            </div>
                                            <button class="btn-info">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingThree41">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree51"
                                   aria-expanded="false" aria-controls="collapseThree51">
                                    <h3 class="mb-0 title-list">
                                        Current address
                                    </h3>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseThree51" class="collapse" role="tabpanel" aria-labelledby="headingThree51"
                                 data-parent="#accordionEx1">
                                <div class="card-body">
                                    <form>
                                        <div class="row form-group">
                                            <div class="col-lg-5">
                                                <label for="formGroupExampleInput2">Country</label>
                                                <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                            </div>
                                        </div>
                                        <div class="row form-group m-1">
                                            <label for="formGroupExampleInput2">Address</label>
                                            <input  type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input"/>
                                        </div>
                                        <div class="row form-group m-1">
                                            <label for="formGroupExampleInput2">City</label>
                                            <input  type="text"  class="form-control" id="formGroupExampleInput" placeholder="Example input"/>
                                        </div>
                                        <button class="btn-info">Save</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        </div>
                        <!-- Accordion wrapper -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////// -->
    <div class="wheel-subscribe wheel-bg2">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-header">
                        <h5>Newsletter Signup </h5>
                        <h3>Subscribe & get<span> 20% </span> Off</h3>
                    </div>
                </div>
                <div class="col-md-6 padd-lr0">
                    <form action="#">
                        <input type="text" placeholder="Your Email Adddress">
                        <button class="wheel-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
