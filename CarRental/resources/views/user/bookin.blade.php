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
                            <li class="active">Book</li>
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
                                <img src="http://www.croop.cl/UI/twitter/images/up.jpg" alt="background" class="bg">
                            </div>
                            <div class="avatarcontainer">
                                <img src="http://www.croop.cl/UI/twitter/images/carl.jpg" alt="avatar" class="avatar">
                            </div>
                        </header>
                        <div class="content">
                            <div class="data">
                                Philippe’s
                                <span class="name-car-checkout">Chevrolet Corve 2015</span>
                                <div class="">
                                    <img src="images/stars.png" alt="">
                                    <span class="trip">. 2 trips</span>
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
                                <span>Meeting Location</span>
                                <p><i> + </i>Laval, QC H7C 1M6</p>
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
                            <h3> <span>Checkout</span></h3>
                        </div>
                        <!--Accordion wrapper-->
                            <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingThree31">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree31"
                                           aria-expanded="false" aria-controls="collapseThree31">
                                            <h3 class="mb-0 title-list">
                                                Payment method
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
                                 <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree21">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree21"
                                       aria-expanded="false" aria-controls="collapseThree21">
                                        <h3 class="mb-0 title-list">
                                            Message to Calos
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
                                                    <label for="formGroupExampleInput2">Phone number</label>
                                                    <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                            <button class="btn-info">Continue</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- Accordion wrapper -->
                    <button class="wheel-btn"> Book this trip</button>
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
