@extends('user.layouts.frontend')
@section('content')
    <div class="header-background-manage">
        <div class="container padd-lr0">
            <div class="row"><div class="col-lg-6 col-lg-push-6 ">
                    <header class="wheel-header marg-lg-b100 marg-lg-t100  marg-md-b0 marg-md-t0">
                        <span class="lstitle">DÒNG XE</span>
                        <h2>HONDA HR-V G 2017 </h2>
                        <div class="star-profile-car">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>

                        <button class="btn btn-secondary mt-5" style="width: 25%">Ẩn xe</button>
                    </header>
                </div>
                <div class="col-lg-6 col-lg-pull-6  padd-lr0">
                    <div class="wheel-start-form">
                        <img src="https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_danang/honda_hr-v_g_2017/p/g/2019/08/28/17/NDMBndFf7dWoEvjAQ5rZmw.jpg" alt="Cho thuê xe tự lái HONDA HR-V G 2017" width="384px" height="288px">
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="container-manage settings">
                <div class="row collapse show no-gutters d-flex h-100 position-relative">
                    <div class="col-3 p-0 h-100 w-sidebar navbar-collapse collapse d-none d-md-flex sidebar">
                        <!-- fixed sidebar -->
                        <div class="navbar-dark text-white h-100 align-self-start w-sidebar">
                            <ul class="nav flex-column flex-nowrap menu-list-manage">
                                <li class="nav-item">
                                    <a class="nav-link heading">  <p class="title-list">THÔNG TIN CHUNG</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-dark" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Thông tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hình ảnh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Quản lí chuyến</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link heading text-dark"> <p class="title-list">CHO THUÊ XE TỰ LÁI</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="#">Giá cho thuê</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="#">Giao xe tận nơi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="#">Thủ tục cho thuê</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-manage">
                        <div class="tab-content profile-tab" id="myTabContent">
                        <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade show active">
                            <form class="" role="form">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Biển số:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="43H-123456" type="text"  readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Địa chỉ xe:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="Bishop" type="text">
                                    </div>
                                    <div class="row marg-lg-t55 marg-sm-t0 marg-sm-b0 marg-lg-b5">
                                        <div class="col-md-12 marg-lg-b75 marg-sm-b0 padd-lr0">
                                            <div class="wheel-map style-1" id = "mapSingleCar" data-lat="113" data-lng="113" data-marker="images/marker.png"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Thông tin cơ bản:</label>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="col-lg-3" >Số ghê:</label>
                                            <input class="form-control" value="4" type="text" readonly>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="col-lg-4">Chuyển động:</label>
                                            <input class="form-control" value="Số tự động" type="text" readonly/>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-6">
                                            <label class="col-lg-5" >Loại nhiên liệu:</label>
                                            <input class="form-control" value="Xăng" type="text" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Mô tả:</label>
                                    <div class="col-lg-12">
                                        <textarea class="textarea-describe" placeholder="Husyndai Elantra số tự động đăng kí tháng 06/2018. Xe gia đình mới đẹp, nội thất nguyên bản, sạch sẽ, bảo dưỡng thường xuyên, rửa xe miễn phí cho khách. Xe rộng rãi, an toàn, tiện nghi, phù hợp cho gia đình du lịch. Xe trang bị hệ thống cảm biến lùi, gạt mưa tự động, đèn pha tự động, camera hành trình, hệ thống giải trí AV cùng nhiều tiện nghi khác..." type="text"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tính năng:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="janeuser" type="checkbox">
                                        <input class="form-control" value="janeuser" type="checkbox">
                                        <input class="form-control" value="janeuser" type="checkbox">
                                        <input class="form-control" value="janeuser" type="checkbox">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-primary" value="Save Changes" type="button">
                                    </div>
                                </div>
                            </form>
                        </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3>222222222222..</h3>
                                <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape
                                    swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade
                                    ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh
                                    synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>

                                <p>Ethical Kickstarter PBR
                                    asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan
                                    Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb
                                    readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy
                                    leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies,
                                    forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection
