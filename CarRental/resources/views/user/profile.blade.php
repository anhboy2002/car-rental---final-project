@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Profile</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> pages </a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="prosuct-wrap">
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                Kshiti Ghelani
                            </h5>
                            <h6>
                                Tham gia: 23/09/2019
                                Chưa có chuyến
                            </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Kshiti123</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Kshiti Ghelani</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>kshitighelani@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>123 456 7890</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Web Developer and Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Experience</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Hourly Rate</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>10$/hr</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Total Projects</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>230</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>English Level</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Availability</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>6 months</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <h1 class="title-list-car-profile">Your Car List (4)</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="item active">
                        <div class="thumbnails">
                            <div class="col-sm-3">
                                <div class="casing">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Lux A2.2</h4>
                                        <div class="star-profile-car">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p>Sơn trà, Đà Nẵng</p>
                                        <a class="btn btn-mini" href="#">» Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="casing">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Lux A2.2</h4>
                                        <div class="star-profile-car">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p>Sơn trà, Đà Nẵng</p>
                                        <a class="btn btn-mini" href="#">» Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="casing">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Lux A2.2</h4>
                                        <div class="star-profile-car">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p>Sơn trà, Đà Nẵng</p>
                                        <a class="btn btn-mini" href="#">» Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="casing">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Lux A2.2</h4>
                                        <div class="star-profile-car">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p>Sơn trà, Đà Nẵng</p>
                                        <a class="btn btn-mini" href="#">» Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="casing">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Lux A2.2</h4>
                                        <div class="star-profile-car">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p>Sơn trà, Đà Nẵng</p>
                                        <a class="btn btn-mini" href="#">» Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="casing">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Lux A2.2</h4>
                                        <div class="star-profile-car">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p>Sơn trà, Đà Nẵng</p>
                                        <a class="btn btn-mini" href="#">» Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
