@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Setting rental</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> List your car </a></li>
                            <li class="active">Common Setting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-setting">
        <div class="form-setting form-group">
            <form>
                <h1 class="title-setting">Giay to thue xe</h1>
                <p class="describe-title-setting">Set up the required guest documents (original) when renting your car.</p>
                <div class="list-feature">
                    <ol>
                        <li>
                            <input type="checkbox"/> <label class="label-option-setting">ID and driver license</label>
                        </li>
                        <li>
                            <input type="radio" name="gender" value="male">  <label class="label-option-setting">Passport (keep)</label>
                        </li>
                        <li>
                            <input type="radio" name="gender" value="male"><label class="label-option-setting">KT3 and HK (keep)</label>
                        </li>
                    </ol>
                </div>
                <h1 class="title-setting">Tai san the chap</h1>
                <p  class="describe-title-setting">Set up collateral guests must have when renting your car.</p>
                <div class="list-feature">
                    <ol>
                        <li>
                            <input type="radio" name="gender" value="male"><label class="label-option-setting"> 15 trieu or bike</label>
                        </li>
                        <li>
                            <input type="radio" name="gender" value="male"> <label class="label-option-setting"> 30 trieu or bike</label>
                        </li>
                    </ol>
                </div>
                <hr>
                <h1 class="title-setting">Dieu khoan chung</h1>
                <p  class="describe-title-setting">Specify car rental requirements</p>
                <textarea class="textarea-setting" placeholder="  Set up collateral guests must have when renting your car.
                    Set up collateral guests must have when renting your car.">

                </textarea>
                <button class="btn-primary btn-save-setting btn">Save</button>
            </form>
        </div>
    </div>
@endsection
