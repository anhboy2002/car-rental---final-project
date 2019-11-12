@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Đăng ký xe</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> pages </a></li>
                            <li class="active">Đăng ký xe</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-register-block">
        <div class="container container-list-car">
            <form action="{{ action('CarController@createCar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}
                <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo1">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo11"
                               aria-expanded="false" aria-controls="collapseTwo11">
                                <h3 class="mb-0 title-list">
                                    Thông tin xe
                                </h3>
                            </a>
                        </div>
                        <div id="collapseTwo11" class="collapse" role="tabpanel" aria-labelledby="headingTwo11"
                             data-parent="#accordionEx1">
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Địa chỉ xe</label>
                                        <input type="hidden" id="inputLatCar" name="lat">
                                        <input type="hidden" id="inputLongCar" name="lng">
                                        <div class="row ml-1">
                                            <input type="text" class="form-control w-25" id="inputCarLocation" name="carLocation" data-lat="" data-lng="">
                                            <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#myModal">
                                                Map
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label for="formGroupExampleInput2">Hãng xe</label>
                                            <select class="form-control" id="SelectCarCategoryParent" name="selectCarCategoryParent">
                                                @foreach ($categories as $category)
                                                    @if ($category->id_parent == '0')
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="formGroupExampleInput2">Mẫu xe</label>
                                            <select class="form-control" id="SelectCarCategoryChilren" name="selectCarCategoryChildren">
                                                @foreach ($categories as $category)
                                                    @if ($category->id_parent == '1')
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="formGroupExampleInput2">Năm sản xuất</label>
                                            <select class="form-control" id="SelectCarYear" name="selectCarYear">
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                               aria-expanded="false" aria-controls="collapseTwo21">
                                <h3 class="mb-0 title-list">
                                    Thông tin chủ xe
                                </h3>
                            </a>
                        </div>
                        <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
                             data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="form-group">
                                    <p class="text-secondary">Chúng tôi xin số của bạn để liên lạc với bạn về chuyến đi của bạn và kết nối chủ nhà với khách..</p>
                                    <label for="formGroupExampleInput2">Số điện thoại</label>
                                    <input type="text" class="form-control w-25" id="formGroupExampleInput" name="phone" value="{{($user->phone != "") ? "" : $user->phone }}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">

                                        @if($user->avatar != "")
                                            <img src="{{ asset('storage/uploads/profile/'. $user->avatar) }}" width="245px" height="163px" alt=" {{$user->user_name}}"/>
                                        @else
                                            <label for="formGroupExampleInput2">Ảnh cá nhân</label>
                                            <input type="file" class="file" name="profilePhoto" id="profilePhoto">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree41">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree41"
                               aria-expanded="false" aria-controls="collapseThree41">
                                <h3 class="mb-0 title-list">
                                    Chi tiết xe
                                </h3>
                            </a>
                        </div>
                        <div id="collapseThree41" class="collapse" role="tabpanel" aria-labelledby="headingThree41"
                             data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="row form-group">
                                        <div class="col-lg-5">
                                            <label for="formGroupExampleInput2">Biển số</label>
                                            <input type="text" class="form-control" name="plateNumber">
                                        </div>
                                        <div class="col-lg-5">
                                            <label for="formGroupExampleInput2">Đơn giá thuê</label>
                                            <input type="text" class="form-control" name="priceCar" value="1000">
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
                                        <label for="formGroupExampleInput2">Mô tả</label>
                                        <textarea  cols="2" class="form-control" name="carDescription" placeholder="Huyndai Elantra số tự động đăng kí tháng 06/2018. Xe gia đình mới đẹp, nội thất nguyên bản, sạch sẽ, bảo dưỡng thường xuyên, rửa xe miễn phí cho khách.
                                            Xe rộng rãi, an toàn, tiện nghi, phù hợp cho gia đình du lịch. Xe trang bị hệ thống cảm biến lùi, gạt mưa tự động, đèn pha tự động, camera hành trình, hệ thống giải trí AV cùng nhiều tiện nghi khác.."></textarea>
                                    </div>
                                <div class="row form-group mt-3">
                                        <div class="col-lg-3">
                                            <label for="formGroupExampleInput2">Tính năng</label><br>
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
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree51">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree51"
                               aria-expanded="false" aria-controls="collapseThree51">
                                <h3 class="mb-0 title-list">
                                    Hình ảnh
                                </h3>
                            </a>
                        </div>
                        <div id="collapseThree51" class="collapse" role="tabpanel" aria-labelledby="headingThree51"
                             data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col-lg-7">
                                        <p class="text-secondary">Nó rất quan trọng đối với khách để xem xe của bạn trước khi họ yêu cầu. Khi bạn đã có một bức ảnh đẹp cho thấy toàn bộ chiếc xe, hãy thêm nhiều hình ảnh hiển thị chi tiết và nội thất của xe. Tìm hiểu thêm về chụp ảnh tuyệt vời.</p>
                                        <p class="text-secondary">Đăng nhiều hình ở các góc độ khác nhau để tăng thông tin cho xe của bạn.</p>
                                        <div class="file-loading">
                                            <input id="file-5" type="file" class="file " name="photoCar[]" multiple data-preview-file-type="any" data-upload-url="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <button type="submit" class="wheel-btn">Đăng kí</button>
                    </div>
                </div>
            </form>
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
                </div>
            </div>
        </div>
    </div>
@endsection
