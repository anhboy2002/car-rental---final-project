<footer class="wheel-footer">
    <img src="{{ asset('images/bg4.jpg') }}" alt="" class="wheel-img">
    <div class="container">
        <div class="row">
            <div class="col-md-3  col-sm-6  padd-lr0">
                <div class="wheel-address">
                    <div class="wheel-footer-logo"><a href=""><img src="{{ asset('images/logo2.png') }}" alt=""></a></div>
                    <ul>
                        <li><span><i class="fa fa-map-marker"></i>121 King Street, Melbourne <br>
                                    VIC 3000, Australia  </span>
                        </li>
                        <li><a href=""><span><i class="fa fa-phone"></i> +61 3 8376 6284</span></a></li>
                        <li><a href=""><span><i class="fa fa-envelope"></i>contact@wheel-rental.com</span></a></li>
                    </ul>
                    <div class="wheel-soc">
                        <a href="" class="fa fa-twitter"></a>
                        <a href="" class="fa fa-facebook"></a>
                        <a href="" class="fa fa-linkedin"></a>
                        <a href="" class="fa fa-instagram"></a>
                        <a href="" class="fa fa-share-alt"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6  padd-lr0">
                <div class="wheel-footer-item">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="" class="">About us</a></li>
                        <li><a href="" class="">Customer Service</a></li>
                        <li><a href="" class="">Contact Us</a></li>
                        <li><a href="" class="">Safety Recall</a></li>
                        <li><a href="" class="">Privacy policy</a></li>
                        <li><a href="" class="">Site Map</a></li>
                        <li><a href="" class="">Terms & condition</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6  padd-lr0">
                <div class="wheel-footer-item ">
                    <h3>Vehicles</h3>
                    <ul>
                        <li><a href="" class="">Exotic Cars</a></li>
                        <li><a href="" class="">SUVs</a></li>
                        <li><a href="" class="">Trucks</a></li>
                        <li><a href="" class="">Mini Vans</a></li>
                        <li><a href="" class="">Moving Trucks</a></li>
                        <li><a href="" class="">Vans</a></li>
                        <li><a href="" class="">RVs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 padd-lr0">
                <div class="wheel-footer-gallery">
                    <h3>Photo Gallery</h3>
                    <div class="  clearfix">
                        <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('images/i11.jpg') }}" alt=""></a></div>
                        <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('images/i12.jpg') }}" alt=""></a></div>
                        <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('images/i13.jpg') }}" alt=""></a></div>
                        <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('images/i14.jpg') }}" alt=""></a></div>
                        <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('images/i15.jpg') }}" alt=""></a></div>
                        <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('images/i16.jpg') }}" alt=""></a></div>
                        <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('images/i17.jpg') }}" alt=""></a></div>
                        <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('images/i18.jpg') }}" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="wheel-footer-info wheel-bg6">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 2016 | Designed with Love By Manh Hung</span></div>
            <div class="col-lg-4 col-sm-6 padd-lr0">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href=""> Pages</a></li>
                    <li><a href=""> Listings</a></li>
                    <li><a href=""> Reservation</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Scripts project -->
{{--<script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>--}}
{!! Html::script('assets/js/jquery-2.2.4.min.js') !!}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
{{--<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>--}}
{!! Html::script('app/js/bootstrap.min.js') !!}
{{--<script type="text/javascript" src="app/js/bootstrap.min.js"></script>--}}
<!-- count -->
{!! Html::script('assets/js/jquery.countTo.js') !!}
{{--<script type="text/javascript" src='assets/js/jquery.countTo.js'></script>--}}
<!-- google maps -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8&libraries=places&callback=initAutocomplete"--}}
{{--        async defer></script>--}}
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8&libraries=places"></script>--}}
{!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8&libraries=places') !!}
{{--<script type="text/javascript" src='app/js/gmap.js'></script>--}}
{!! Html::script('app/js/gmap.js') !!}
<!-- swiper -->
{{--<script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>--}}
{!! Html::script('assets/js/idangerous.swiper.min.js') !!}
{!! Html::script('assets/js/equalHeightsPlugin.js') !!}
{!! Html::script('assets/js/jquery.datetimepicker.full.min.js') !!}
{{--<script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>--}}
{{--<script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>--}}
<!-- Latest compiled and minified JavaScript -->
{!! Html::script('assets/js/bootstrap-select.min.js') !!}
{!! Html::script('assets/js/index.js') !!}
{!! Html::script('app/js/app.js') !!}
{!! Html::script('app/js/fileinput/fileinput.js') !!}
{!! Html::script('app/js/fileinput/vi.js') !!}
{{--<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>--}}
{{--<script type="text/javascript" src="assets/js/index.js"></script>--}}
{{--<script type="text/javascript" src='app/js/app.js'></script>--}}
{{--<script type="text/javascript" src='app/js/fileinput/fileinput.js'></script>--}}
{{--<script type="text/javascript" src='app/js/fileinput/vi.js'></script>--}}
