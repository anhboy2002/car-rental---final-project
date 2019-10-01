@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>List your car</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> pages </a></li>
                            <li class="active">List your car</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    <div class="wheel-register-block">
        <div class="container container-list-car">
            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo1">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo11"
                           aria-expanded="false" aria-controls="collapseTwo11">
                            <h3 class="mb-0 title-list">
                                Your car
                            </h3>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo11" class="collapse" role="tabpanel" aria-labelledby="headingTwo11"
                         data-parent="#accordionEx1">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Where is your car located?</label>
                                    <input type="text" class="form-control w-25" id="formGroupExampleInput" placeholder="Example input">
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label for="formGroupExampleInput2">Category</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Ford</option>
                                            <option>Audi</option>
                                            <option>VinFast</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="formGroupExampleInput2">Name</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Ford</option>
                                            <option>Audi</option>
                                            <option>VinFast</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-1">
                                        <label for="formGroupExampleInput2">Year</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>2020</option>
                                            <option>2019</option>
                                            <option>2018</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn-info">Next</button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo2">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                           aria-expanded="false" aria-controls="collapseTwo21">
                            <h3 class="mb-0 title-list">
                                Profile
                            </h3>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
                         data-parent="#accordionEx1">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <p>We ask for your number to contact you about your trip and to connect hosts with guests.</p>
                                    <label for="formGroupExampleInput2">Phone number</label>
                                    <input type="text" class="form-control w-25" id="formGroupExampleInput" placeholder="Example input">
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label for="formGroupExampleInput2">Profile Photo</label>
                                        <input type="file" name="profilePhoto" id="profilePhoto">
                                    </div>
                                </div>
                                <button class="btn-info">Next</button>
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
                                <button class="btn-info">Next</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree41">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree41"
                           aria-expanded="false" aria-controls="collapseThree41">
                            <h3 class="mb-0 title-list">
                                Car details
                            </h3>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree41" class="collapse" role="tabpanel" aria-labelledby="headingThree41"
                         data-parent="#accordionEx1">
                        <div class="card-body">
                            <form>
                                <div class="row form-group">
                                    <div class="col-lg-5">
                                        <label for="formGroupExampleInput2">License plate number</label>
                                        <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                    </div>
                                </div>
                                <div class="row form-group m-1">
                                    <label for="formGroupExampleInput2">Car description</label>
                                    <textarea  cols="2" class="form-control" id="formGroupExampleInput" placeholder="Example input"></textarea>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-3">
                                        <label for="formGroupExampleInput2">Car features</label><br>
                                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="formGroupExampleInput2"></label><br>
                                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="formGroupExampleInput2"></label><br>
                                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                    </div>
                                </div>
                                <button class="btn-info">Next</button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree51">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree51"
                       aria-expanded="false" aria-controls="collapseThree51">
                        <h3 class="mb-0 title-list">
                            Car photos
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
                                    <p for="formGroupExampleInput2">It’s important for guests to see your car before they request it. Once you have a good photo that shows the whole car, add more photos displaying the car’s details and interior. Learn more about taking great photos.</p>
                                    <p> Photos must be at least 640px by 320px and smaller than 10mb</p>
                                    <input type="file" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                </div>
                            </div>
                            <button class="btn-info">Next</button>
                        </form>
                    </div>
                </div>
            </div>
                <div class="p-2">
                    <button class="wheel-btn">Public</button>
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
