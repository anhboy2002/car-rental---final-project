@extends('user.layouts.frontend')
@section('content')
    <div class="">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                         alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
                         alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                         alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid padd-lr0">
        <div class="row padd-lr0">
            <div class="col-xs-12 padd-lr0">
                <div class="container padd-lr0 xs-padd">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="listing-hedlines t-center">
                                <h5 class="title">Lamborghini Sesto Elemento 2013</h5>
                                <div class="subtitle">Exotic Car Collection</div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 padd-lr0 xs-padd sm-addpadd">
                            <div class="wheel-collection style-2">
                                <div class="tabs">
                                    <div class="tabs-header">
                                        <ul>
                                            <li class="active"><a href="#">Common</a></li>
                                            <li><a href="#">Description</a></li>
                                            <li><a href="#">(4)reviews</a></li>
                                        </ul>
                                    </div>
                                    <div class="tabs-content marg-lg-b30">
                                        <div class="tabs-item text-item active group-car-detail">
                                            <span class="lstitle-new">Features</span>
                                            <div>
                                                <ul class="tabslist">
                                                    <li class="item">2 Adult Passanger Seats</li>
                                                    <li class="item">1 Baby Seat</li>
                                                    <li class="item">2 Doors</li>
                                                    <li class="item">Air Conditioning</li>
                                                </ul>
                                                <ul class="tabslist">
                                                    <li class="item">Airbags</li>
                                                    <li class="item">Power Steering</li>
                                                    <li class="item">Automatic Transmission</li>
                                                    <li class="item">Central Locking</li>
                                                </ul>
                                            </div>
                                            <span class="lstitle-new">GIẤY TỜ THUÊ XE (BẢN GỐC)</span>
                                            <div class="group-car-detail">
                                                <div class="ctn-desc-new">
                                                    <ul class="required">
                                                        <li> <img style="width: 20px; height: 20px; margin-right: 10px;" class="img-ico" src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/cmnd.png" alt="Mioto - Thuê xe tự lái"> CMND và GPLX (đối chiếu)</li>
                                                        <li> <img style="width: 20px; height: 20px; margin-right: 10px;" class="img-ico" src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/passport.png" alt="Mioto - Thuê xe tự lái"> Hộ Khẩu hoặc KT3 hoặc Passport (giữ lại)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="lstitle-new">TÀI SẢN THẾ CHẤP</span>
                                            <div class="group-car-detail">
                                                <div class="ctn-desc-new">
                                                    <ul class="required">
                                                        <li>15 triệu tiền mặt hoặc Xe máy (cà vẹt gốc) giá trị 15 triệu</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="lstitle-new">VI TRI</span>
                                            <div class="row marg-lg-t55 marg-sm-t0 marg-sm-b0 marg-lg-b75">
                                                <div class="col-xs-12 marg-lg-b75 marg-sm-b0 padd-lr0">
                                                    <div class="wheel-map style-1" id = "map" data-lat="40.7143528" data-lng="-74.0059731" data-marker="images/marker.png" data-zoom="10" data-style="style-1" data-string="WPC string"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-item text-item">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est expedita harum neque odio perspiciatis tempora? Aliquid aut autem debitis, deserunt ipsum nesciunt placeat quas voluptatum. Accusantium beatae nobis sint.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eveniet id natus nesciunt, quis quisquam reiciendis similique. Cum debitis doloribus et facere iste modi nam necessitatibus obcaecati, placeat quasi, repellat.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est expedita harum neque odio perspiciatis tempora? Aliquid aut autem debitis, deserunt ipsum nesciunt placeat quas voluptatum. Accusantium beatae nobis sint.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur dicta eos error exercitationem ipsam laudantium libero, magni molestias necessitatibus nesciunt nobis non omnis, possimus quis recusandae sed vel vitae.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsa, ipsum. Deleniti dicta eos numquam odio quasi quis reiciendis, velit veniam. Architecto consectetur ducimus esse mollitia, natus nemo quia repellat?
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid, aperiam architecto dicta dolores eaque est exercitationem fugit iusto, molestias placeat praesentium ratione sit sunt temporibus ullam voluptatum. Deleniti, non?
                                            </p>
                                        </div>
                                        <div class="tabs-item text-item">
                                            <div class="wheel-comments-area wheel-bg1">
                                                <div class="wheel-comments-list">
                                                    <ul>
                                                        <li>
                                                            <div class="wheel-comment-body">
                                                                <div class="clearfix">
                                                                    <div class="comment-author">
                                                                        <img src="images/l3.png" alt="">
                                                                        <a href="">Anthony Martial</a>
                                                                        <div class="ratings">
                                                                            <img src="images/stars.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-metadata">
                                                                        <time datetime="2015-01-10T20:15:40+00:00">  13:05, May 27</time>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="wheel-comment-body">
                                                                <div class="clearfix">
                                                                    <div class="comment-author">
                                                                        <img src="images/l4.png" alt=""><a href="">Katherine Sanders</a>
                                                                        <div class="ratings">
                                                                            <img src="images/stars.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-metadata">
                                                                        <time datetime="2015-01-10T20:15:40+00:00">  13:05, May 27</time>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="wheel-comment-body">
                                                                <div class="clearfix">
                                                                    <div class="comment-author">
                                                                        <img src="images/l5.png" alt=""><a href="">Vicki Rogers</a>
                                                                        <div class="ratings">
                                                                            <img src="images/stars.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-metadata">
                                                                        <time datetime="2015-01-10T20:15:40+00:00">  13:05, May 27</time>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <section class="wheel-reply-form wheel-bg1">
                                                <header>
                                                    <h3>Add Your Review</h3>
                                                </header>
                                                <form action="#">
                                                    <input type="text" placeholder="Your Name *">
                                                    <input type="text" placeholder="Your Email *">
                                                    <textarea placeholder="Your Message *"></textarea>
                                                    <button>Submit Now</button>
                                                </form>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padd-lr0 z-bg-1">
        <div class="row marg-lg-t75 marg-xs-t0">
            <div class="col-xs-12 padd-lr0 xs-padd">
                <div class="container padd-lr0 xs-padd">
                    <div class="row">
                        <div class="col-xs-12 padd-lr0 xs-padd marg-lg-b90 marg-lg-t70 marg-sm-t30">
                            <div class="wheel-header text-center">
                                <h5>book now</h5>
                                <h3>Make a <span>reservation</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row marg-lg-b20">
                        <div class="col-xs-12 padd-lr0 xs-padd marg-lg-b60 marg-sm-b10">
                            <div class="wheel-start-form wheel-start-form2    ">
                                <fickorm action="#">
                                    <div class="clearfix">
                                        <div class="wheel-date">
                                            <span>Trip start</span>
                                            <label class="fa fa-calendar" for="input-val22">
                                                <input  class="datetimepicker" type="text" id=input-val22 value="29 Apr">
                                            </label>
                                        </div>
                                        <div class="wheel-date ">
                                            <span>Pickup time</span>
                                            <label for="input-val23" class="fa fa-clock-o">
                                                <input class="timepicker" type="text" id=input-val23 value="18:00">
                                            </label>
                                        </div>
                                        <div class="wheel-date">
                                            <span>Trip end</span>
                                            <label class="fa fa-calendar" for="input-val24">
                                                <input  class="datetimepicker" type="text" id=input-val24 value="29 Apr">
                                            </label>
                                        </div>
                                        <div class="wheel-date">
                                            <span>Return Time</span>
                                            <label for="input-val25" class="fa fa-clock-o">
                                                <input class="timepicker" type="text" id='input-val25' value="18:00">
                                            </label>
                                        </div>
                                        <label for="input-val26" class="promo">
                                            <input type="text" id=input-val21 placeholder="Pickup & return location" required>
                                        </label>
                                        <label for="input-val27" class="promo promo2">
                                            <button class="wheel-btn" id='input-val27'>Checkout</button>
                                        </label>
                                    </div>
                                </fickorm>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
