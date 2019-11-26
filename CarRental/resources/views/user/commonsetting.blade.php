@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Thủ tục cho thuê</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Thủ tục cho thuê</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-setting">
        <div class="form-setting form-group">
            <form>
                <h1 class="title-setting">Giấy tờ thuê xe</h1>
                <p class="describe-title-setting">Thiết lập các tài liệu khách cần thiết (bản gốc) khi thuê xe của bạn..</p>
                <div class="list-feature">
                    <ol>
                        <li>
                            <input type="checkbox"/> <label class="label-option-setting">CMND và bằng lái xe</label>
                        </li>
                        <li>
                            <input type="radio" name="gender" value="male">  <label class="label-option-setting">Passport (được giữ lại)</label>
                        </li>
                        <li>
                            <input type="radio" name="gender" value="male"><label class="label-option-setting">KT3 và sổ hộ khẩu (được giữ lại)</label>
                        </li>
                    </ol>
                </div>
                <h1 class="title-setting">Tài sản thế chấp</h1>
                <p  class="describe-title-setting">Thiết lập tài sản thế chấp khách phải có khi thuê xe của bạn..</p>
                <div class="list-feature">
                    <ol>
                        <li>
                            <input type="radio" name="gender" value="male"><label class="label-option-setting"> 15 triệu hoặc giữ xe máy</label>
                        </li>
                        <li>
                            <input type="radio" name="gender" value="male"> <label class="label-option-setting"> 30 triệu hoặc giữ xe máy</label>
                        </li>
                    </ol>
                </div>
                <hr>
                <h1 class="title-setting">Điều khoản chung</h1>
                <p  class="describe-title-setting">Chỉ định yêu cầu thuê xe</p>
                <textarea class="textarea-setting" placeholder=" Set up collateral guests must have when renting your car.
                    Set up collateral guests must have when renting your car.">
                </textarea>
                <button class="btn-primary btn-save-setting btn">Lưu</button>
            </form>
        </div>
    </div>
    @include('user.includes.footer')
@endsection
