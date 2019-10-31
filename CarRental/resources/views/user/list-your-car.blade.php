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
            <form action="{{ action('CarController@createCar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}
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
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Where is your car located?</label>
                                    <input type="text" class="form-control w-25" id="inputCarLocation" name="carLocation" placeholder="Example input" data-lat="" data-lng="">
                                    <input type="hidden" id="inputLatCar" name="lat">
                                    <input type="hidden" id="inputLongCar" name="lng">
                                    <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#myModal">
                                        Location
                                    </button>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label for="formGroupExampleInput2">Category</label>
                                        <select class="form-control" id="SelectCarCategoryParent" name="selectCarCategoryParent">
                                            @foreach ($categories as $category)
                                                @if ($category->id_parent == '0')
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="formGroupExampleInput2">Name</label>
                                        <select class="form-control" id="SelectCarCategoryChilren" name="selectCarCategoryChildren">
                                            @foreach ($categories as $category)
                                                @if ($category->id_parent == '1')
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-1">
                                        <label for="formGroupExampleInput2">Year</label>
                                        <select class="form-control" id="SelectCarYear" name="selectCarYear">
                                            <option>2020</option>
                                            <option>2019</option>
                                            <option>2018</option>
                                            <option>2017</option>
                                            <option>2016</option>
                                            <option>2015</option>
                                            <option>2014</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn-info">Next</button>
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
                            <div class="form-group">
                                <p>We ask for your number to contact you about your trip and to connect hosts with guests.</p>
                                <label for="formGroupExampleInput2">Phone number</label>
                                <input type="text" class="form-control w-25" id="formGroupExampleInput" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-5">
                                    <label for="formGroupExampleInput2">Profile Photo</label>
                                    <div class="file-loading">
                                        <input id="file-5" type="file" class="file " name="profilePhoto" id="profilePhoto"  data-preview-file-type="any" data-upload-url="#">
                                    </div>
                                </div>
                            </div>
                            <button class="btn-info">Next</button>
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
                            <div class="row form-group">
                                <div class="col-lg-3">
                                    <label for="formGroupExampleInput2">First name</label>
                                    <input type="text" class="form-control " name="fristName" placeholder="First name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="formGroupExampleInput2">Middle name</label>
                                    <input type="text" class="form-control" name="middleName" placeholder="Middle name">
                                </div>
                                <div class="col-lg-2">
                                    <label for="formGroupExampleInput2">Last name</label>
                                    <input type="text" class="form-control" name="lastName" placeholder="Last name">
                                </div>
                            </div>
                                <div class=" row form-group m-1">
                                    <p class="text-black-50">Enter your name <strong class="text-danger">exactly as it appears on your driver's license
                                        </strong></p>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-3">
                                        <label for="formGroupExampleInput2">Day of birth</label>
                                        <input type="date" class="form-control h-75" name="dayOfBirth" placeholder="Example input">
                                    </div>
                                </div>
                            <button class="btn-info">Next</button>
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
                                <div class="row form-group">
                                    <div class="col-lg-5">
                                        <label for="formGroupExampleInput2">License plate number</label>
                                        <input type="text" class="form-control" name="plateNumber" placeholder="Plate Number">
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="formGroupExampleInput2">Price/1 day</label>
                                        <input type="text" class="form-control" name="priceCar" placeholder="Price Car 1 Day">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-5">
                                        <label for="formGroupExampleInput2">Số ghế</label>
                                        <select class="form-control" name="numSeat">
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="7">7</option>
                                            <option value="16">16</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="formGroupExampleInput2">Chuyển động xe</label>
                                        <select class="form-control" name="moveCar">
                                            <option value="Số sàn">Số sàn</option>
                                            <option value="Số tự động">Số tự động</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group m-1">
                                    <label for="formGroupExampleInput2">Car description</label>
                                    <textarea  cols="2" class="form-control" name="carDescription" placeholder="Car description"></textarea>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-3">
                                        <label for="formGroupExampleInput2">Car features</label><br>
                                        <input type="checkbox" name="featured[]" value="Cửa sổ trời"> Cửa sổ trời<br>
                                        <input type="checkbox" name="featured[]" value="GPS"> GPS<br>
                                        <input type="checkbox" name="featured[]" value="Ghế trẻ em"> Ghế trẻ em<br>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="formGroupExampleInput2"></label><br>
                                        <input type="checkbox" name="featured[]" value="Camera sau"> Camera sau<br>
                                        <input type="checkbox" name="featured[]" value="Bluetooth"> Bluetooth<br>
                                        <input type="checkbox" name="featured[]" value="USB port"> USB port<br>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="formGroupExampleInput2"></label><br>
                                        <input type="checkbox" name="featured[]" value="Map"> Map<br>
                                    </div>
                                </div>
                                <button class="btn-info">Next</button>
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
                            <div class="row form-group">
                                <div class="col-lg-7">
                                    <p for="formGroupExampleInput2">It’s important for guests to see your car before they request it. Once you have a good photo that shows the whole car, add more photos displaying the car’s details and interior. Learn more about taking great photos.</p>
                                    <p> Photos must be at least 640px by 320px and smaller than 10mb</p>
                                    <div class="file-loading">
                                        <input id="file-5" type="file" class="file " name="photoCar[]" multiple data-preview-file-type="any" data-upload-url="#">
                                    </div>
                                </div>
                            </div>
                            <button class="btn-info">Next</button>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <button type="submit" class="wheel-btn">Public</button>
                </div>
            </form>
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
    <!-- Modal location -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 modal_body_content">
                            <p id="carLocationName"> Location :</p>
                            <div id="current">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 modal_body_map">
                            <div class="location-map" id="location-map">
                                <div style="width: 600px; height: 400px;" id="map_canvas"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 modal_body_end">
                            <button class="btn btn-info" id="saveCarLocation">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
