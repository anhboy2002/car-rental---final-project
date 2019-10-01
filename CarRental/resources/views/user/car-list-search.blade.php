@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Listing - List View</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Listing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////// -->
    <div class="body-search">
        <div class="container padd-lr0 xs-padd ">
            <div class=" row">
                <div class="wheel-start-form wheel-start-form2">
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
                            <button class="btn wheel-btn" id="input-val18">Search</button>
                        </label>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="select select-1">
                        <span class="">All category</span>
                        <ul class="list">
                            <li>All category</li>
                            <li>Item1</li>
                            <li>Item2</li>
                            <li>Item3</li>
                            <li>Item4</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="select select-2">
                        <span class="">All brands</span>
                        <ul class="list">
                            <li>All brands</li>
                            <li>Item1</li>
                            <li>Item2</li>
                            <li>Item3</li>
                            <li>Item4</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="select select-3">
                        <span class="">Any price</span>
                        <ul class="list">
                            <li>Any price</li>
                            <li>Item1</li>
                            <li>Item2</li>
                            <li>Item3</li>
                            <li>Item4</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-search row">
            <div class="product-list product-list2 wheel-bgt clearfix searchResultsGrid col-lg-7">
                <div class="row">
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div class="row">
                                <div class="wheel-quote-stars col-lg-2"><img src="images/stars.png" alt=""></div>
                                <div><h4 class="col-lg-8">30 trips</h4></div>
                                <div class="col-lg-1">
                                    <button><i class="fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                <div><span class="">30 trips</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                <div><span class="">30 trips</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                <div><span class="">30 trips</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                <div><span class="">30 trips</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                <div><span class="">30 trips</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                <div><span class="">30 trips</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                <div><span class="">30 trips</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                <div><span class="">30 trips</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-10">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">2016 Marcedes-Benz SLK</div>
                                <div class="price-wrap product-cell">
                                    <span>$79</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/i40.jpg" alt="img" class="img-responsive">
                            </div>
                            <div>
                                <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                <div><span class="">30 trips</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="searchResultsMap col-lg-5" id="map">

            </div>
        </div>
    </div>
@endsection
