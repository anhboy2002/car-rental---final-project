@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start">
        <img src="http://eskipaper.com/images/car-nature-wallpapers-1.jpg" alt="" class="wheel-img">
        <div class="container padd-lr0">
            <div class="col-lg-6 col-lg-push-6 ">
                <header class="wheel-header marg-lg-b100 marg-lg-t200  marg-md-b0 marg-md-t0">
                    <h2>Sport car rental alternatives </h2>
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
    <!-- /////////////////////////////////// -->
    <div class="prosuct-wrap">
        <div class="container padd-lr0 xs-padd">
            <div class="row">
                <div class="col-sm-8">
                    <header class="wheel-header marg-lg-t25 marg-lg-b65">
                        <h3>Top rated sports cars</h3>
                    </header>
                </div>
            </div>
        </div>
        <div class="container padd-lr0 xs-padd">
            <div class="product-list product-list2 wheel-bgt clearfix">
                <div class="row">
                    <div class="col-lg-4  col-md-6">
                        <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                            <div class="product-table2">
                                <div class="img-wrap img-wrap2 product-cell">
                                    <img src="images/i29.jpg" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-table3  ">
                                <div class="text-wrap text-wrap2 product-cell">
                                    <div class="title">2016 Marcedes-Benz SLK</div>
                                    <div class="price-wrap product-cell">
                                        <span>$79</span><sup>00</sup>/Day
                                    </div>
                                </div>
                                <div class="img-wrap img-wrap3 product-cell">
                                    <img src="images/i40.jpg" alt="img" class="img-responsive">
                                </div>
                                <div class="text-wrap  text-wrap3 product-cell">
                                    <ul class="metadata metadata2">
                                        <li>2 seats</li>
                                        <li>2 bags</li>
                                        <li>150 mpg</li>
                                        <li>airbags</li>
                                        <li>manual/auto</li>
                                        <li>ac</li>
                                    </ul>
                                    <div class="wheel-view-link">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                            <div class="product-table2">
                                <div class="img-wrap img-wrap2 product-cell">
                                    <img src="images/i28.jpg" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-table3  ">
                                <div class="text-wrap text-wrap2 product-cell">
                                    <div class="title">2016 Chevrolet Malibu</div>
                                    <div class="price-wrap product-cell">
                                        <span>$79</span><sup>00</sup>/Day
                                    </div>
                                </div>
                                <div class="img-wrap img-wrap3 product-cell">
                                    <img src="images/i32.jpg" alt="img" class="img-responsive">
                                </div>
                                <div class="text-wrap  text-wrap3 product-cell">
                                    <ul class="metadata metadata2">
                                        <li>2 seats</li>
                                        <li>2 bags</li>
                                        <li>150 mpg</li>
                                        <li>airbags</li>
                                        <li>manual/auto</li>
                                        <li>ac</li>
                                    </ul>
                                    <div class="wheel-view-link">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                            <div class="product-table2">
                                <div class="img-wrap img-wrap2 product-cell">
                                    <img src="images/i27.jpg" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-table3  ">
                                <div class="text-wrap text-wrap2 product-cell">
                                    <div class="title">Bugatti Veyron</div>
                                    <div class="price-wrap product-cell">
                                        <span>$79</span><sup>00</sup>/Day
                                    </div>
                                </div>
                                <div class="img-wrap img-wrap3 product-cell">
                                    <img src="images/i33.jpg" alt="img" class="img-responsive">
                                </div>
                                <div class="text-wrap  text-wrap3 product-cell">
                                    <ul class="metadata metadata2">
                                        <li>2 seats</li>
                                        <li>2 bags</li>
                                        <li>150 mpg</li>
                                        <li>airbags</li>
                                        <li>manual/auto</li>
                                        <li>ac</li>
                                    </ul>
                                    <div class="wheel-view-link">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                            <div class="product-table2">
                                <div class="img-wrap img-wrap2 product-cell">
                                    <img src="images/i31.jpg" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-table3  ">
                                <div class="text-wrap text-wrap2 product-cell">
                                    <div class="title">2016 Nissan Juke</div>
                                    <div class="price-wrap product-cell">
                                        <span>$79</span><sup>00</sup>/Day
                                    </div>
                                </div>
                                <div class="img-wrap img-wrap3 product-cell">
                                    <img src="images/i35.jpg" alt="img" class="img-responsive">
                                </div>
                                <div class="text-wrap  text-wrap3 product-cell">
                                    <ul class="metadata metadata2">
                                        <li>2 seats</li>
                                        <li>2 bags</li>
                                        <li>150 mpg</li>
                                        <li>airbags</li>
                                        <li>manual/auto</li>
                                        <li>ac</li>
                                    </ul>
                                    <div class="wheel-view-link">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                            <div class="product-table2">
                                <div class="img-wrap img-wrap2 product-cell">
                                    <img src="images/i30.jpg" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-table3  ">
                                <div class="text-wrap text-wrap2 product-cell">
                                    <div class="title">2016 Audi S4</div>
                                    <div class="price-wrap product-cell">
                                        <span>$79</span><sup>00</sup>/Day
                                    </div>
                                </div>
                                <div class="img-wrap img-wrap3 product-cell">
                                    <img src="images/i34.jpg" alt="img" class="img-responsive">
                                </div>
                                <div class="text-wrap  text-wrap3 product-cell">
                                    <ul class="metadata metadata2">
                                        <li>2 seats</li>
                                        <li>2 bags</li>
                                        <li>150 mpg</li>
                                        <li>airbags</li>
                                        <li>manual/auto</li>
                                        <li>ac</li>
                                    </ul>
                                    <div class="wheel-view-link">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                            <div class="product-table2">
                                <div class="img-wrap img-wrap2 product-cell">
                                    <img src="images/i28.jpg" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-table3  ">
                                <div class="text-wrap text-wrap2 product-cell">
                                    <div class="title">2016 Chevrolet Malibu</div>
                                    <div class="price-wrap product-cell">
                                        <span>$79</span><sup>00</sup>/Day
                                    </div>
                                </div>
                                <div class="img-wrap img-wrap3 product-cell">
                                    <img src="images/i32.jpg" alt="img" class="img-responsive">
                                </div>
                                <div class="text-wrap  text-wrap3 product-cell">
                                    <ul class="metadata metadata2">
                                        <li>2 seats</li>
                                        <li>2 bags</li>
                                        <li>150 mpg</li>
                                        <li>airbags</li>
                                        <li>manual/auto</li>
                                        <li>ac</li>
                                    </ul>
                                    <div class="wheel-view-link">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container padd-lr0 xs-padd">
            <div class="row">
                <div class="col-sm-12">
                    <header class="wheel-header marg-lg-t25 marg-lg-b65">
                        <h3 class="text-center">Reviews about sport car</h3>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <div class="container-feedback">
        <div class="row">
            <div class="col-lg-4  col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://ttol.vietnamnetjsc.vn/images/2019/07/17/16/06/diem-thi-cua-hot-girl-hot-boy-1.jpg" class="avatar-user" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <a href=""><h5 class="title-car-feedback"> Mercedes-Benz SLC-Class 2018</h5></a>
                                </div>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><strong>Manh Hung.</strong> - <small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://ttol.vietnamnetjsc.vn/images/2019/07/17/16/06/diem-thi-cua-hot-girl-hot-boy-1.jpg" class="avatar-user" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <a href=""><h5 class="title-car-feedback"> Mercedes-Benz SLC-Class 2018</h5></a>
                                </div>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><strong>Manh Hung.</strong> - <small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://ttol.vietnamnetjsc.vn/images/2019/07/17/16/06/diem-thi-cua-hot-girl-hot-boy-1.jpg" class="avatar-user" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <a href=""><h5 class="title-car-feedback"> Mercedes-Benz SLC-Class 2018</h5></a>
                                </div>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><strong>Manh Hung.</strong> - <small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://ttol.vietnamnetjsc.vn/images/2019/07/17/16/06/diem-thi-cua-hot-girl-hot-boy-1.jpg" class="avatar-user" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <a href=""><h5 class="title-car-feedback"> Mercedes-Benz SLC-Class 2018</h5></a>
                                </div>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><strong>Manh Hung.</strong> - <small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://ttol.vietnamnetjsc.vn/images/2019/07/17/16/06/diem-thi-cua-hot-girl-hot-boy-1.jpg" class="avatar-user" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <a href=""><h5 class="title-car-feedback"> Mercedes-Benz SLC-Class 2018</h5></a>
                                </div>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><strong>Manh Hung.</strong> - <small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://ttol.vietnamnetjsc.vn/images/2019/07/17/16/06/diem-thi-cua-hot-girl-hot-boy-1.jpg" class="avatar-user" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                    <a href=""><h5 class="title-car-feedback"> Mercedes-Benz SLC-Class 2018</h5></a>
                                </div>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><strong>Manh Hung.</strong> - <small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-dark">Show more</button>
        </div>
    </div>
    <div class="wheel-collection wheel-bg2">
        <div class="container">
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
@endsection
