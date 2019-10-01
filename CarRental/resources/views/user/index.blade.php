@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start">
        <img src="http://eskipaper.com/images/car-nature-wallpapers-1.jpg" alt="" class="wheel-img">
        <div class="container padd-lr0">
            <div class="col-lg-6 col-lg-push-6 ">
                <header class="wheel-header marg-lg-b100 marg-lg-t200  marg-md-b0 marg-md-t0">
                    <h2>Way better than a rental car  </h2>
                    <span>We Help you Rent Car in Viet Nam</span>
                </header>
            </div>
            <div class="col-lg-6 col-lg-pull-6  padd-lr0">
                <div class="wheel-start-form">
                    <form action="#">
                        <label for="input-val11"><span>Where</span>
                            <input type="text" id='input-val11' placeholder="City, Airport or Address" required>
                        </label>
                        <div class="clearfix">
                            <div class="wheel-date">
                                <span>From</span>
                                <label for="input-val13" class="fa fa-calendar">
                                    <input  class="datetimepicker" id='input-val13' type="text" value="29 Apr">
                                </label>
                            </div>
                            <div class="wheel-date ">
                                <span>Time</span>
                                <label for="input-val14" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val14' type="text" value="18:00">
                                </label>
                            </div>
                            <div class="wheel-date">
                                <span>Until</span>
                                <label for="input-val15" class="fa fa-calendar">
                                    <input  class="datetimepicker" id='input-val15' type="text" value="29 Apr">
                                </label>
                            </div>
                            <div class="wheel-date">
                                <span>Time</span>
                                <label for="input-val16" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val16' type="text" value="18:00">
                                </label>
                            </div>
                        </div>
                        <label for="input-val18" class="promo promo2">
                            <button class="wheel-btn" id="input-val18">Search</button>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>
    <div class="wheel-bg2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header text-center marg-lg-t140 marg-lg-b340 marg-md-t140 marg-md-b140 marg-sm-t70 ">
                        <h5>the Biggest Online </h5>
                        <h3>car <span>Rental</span>  Service</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-clients">
        <div class="container padd-lr0">
            <div class="row">
                <div class="col-md-4 padd-r0 padd-md-lr15">
                    <div class="wheel-service-item text-center wheel-bg3">
                        <div class="wheel-service-logo">
                            <img src="images/ico1.png" alt="">
                        </div>
                        <h5>Most Affordable</h5>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                    </div>
                </div>
                <div class="col-md-4 padd-lr0 padd-md-lr15">
                    <div class="wheel-service-item text-center wheel-service-active wheel-bg4">
                        <div class="wheel-service-logo">
                            <img src="images/ico2.png" alt="">
                        </div>
                        <h5>Best Rated</h5>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                    </div>
                </div>
                <div class="col-md-4 padd-l0 padd-md-lr15">
                    <div class="wheel-service-item  text-center wheel-bg5">
                        <div class="wheel-service-logo">
                            <img src="images/ico3.png" alt="">
                        </div>
                        <h5>Excellent Service</h5>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 ">
                <div class="wheel-service-img">
                    <img src="https://demos.jeweltheme.com/wheel/images/i1.png" alt="" class="wheel-img">
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-collection wheel-bg2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header text-center marg-lg-t140 marg-lg-b65  marg-md-t50 ">
                        <h5>We have a Great </h5>
                        <h3>collection of <span>vehicles</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="tabs">
                        <div class="tabs-header">
                            <ul>
                                <li class="active"><a href="#">Browse by category</a></li>
                            </ul>
                        </div>
                        <div class="tabs-content  marg-lg-b30">
                            <div class="tabs-item active ">
                                <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'><img src="images/i5.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/i4.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/i3.png" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/i2.png" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="swiper-arrow-left fa fa-angle-left"></div>
                                    <div class="swiper-arrow-right fa fa-angle-right"></div>
                                    <div class="pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container padd-lr0">
        <div class="row">
            <div class="col-md-6 ">
                <div class="wheel-info-img  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100">
                    <img src="images/i7.png" alt="" class="wheel-img">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="wheel-info-text  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100 marg-sm-t50 marg-sm-b50">
                    <div class="wheel-header">
                        <h3>The car that pays for <span>itself</span></h3>
                    </div>
                    <span>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </span>
                    <p>Make a dent in your monthly car payments — on average, Turo hosts can cover their payments by sharing their cars just nine days per month.

                        As a host, you’re covered by our CA$2 million insurance policy and we’ll be here to guide you every step of the way. Or bring your own commercial rental insurance and take a bigger piece of the pie.* </p>
                    <a href="" class="wheel-btn">List your car</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-quote text-center">
        <img src="images/bg3.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="swiper-container" data-autoplay="7000" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="1" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="wheel-quote-item">
                                    <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <h6>Catrina Romero</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wheel-quote-item">
                                    <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <h6>Catrina Romero</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wheel-quote-item">
                                    <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <h6>Catrina Romero</h6>
                                </div>
                            </div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                    <div class="swiper-outer-left fa fa-angle-left"></div>
                    <div class="swiper-outer-right fa fa-angle-right"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-quote-partners">
                        <a href=""><img src="images/p1.png" alt=""></a>
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <a href=""><img src="images/p3.png" alt=""></a>
                        <a href=""><img src="images/p4.png" alt=""></a>
                        <a href=""><img src="images/p5.png" alt=""></a>
                        <a href=""><img src="images/p6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

