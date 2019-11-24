<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="wheel-register-log">
                        <div class="wheel-header">
                            <h5>Bạn đã có tài khoản? Đăng nhập</h5>
                        </div>
                        <form action="{{ action('UserController@postLoginModal') }}" method="POST">
                            {{ csrf_field()}}
                            @include('include.toast')
                            <label for="userName" class="fa fa-user"><input type="text" id="userName" name="emailLogin" placeholder='Email'></label>
                            <label for="userPass" class="fa fa-lock"><input type="password" id='userPass' name="passwordLogin" placeholder='Passsword'></label>
                            <button type="submit" class="wheel-btn">Đăng nhập</button>
                            <label class="password-sing clearfix" for="input-val2">
                                <a href="">Quên mật khẩu?</a>
                            </label>
                        </form>
                        <div class="wheel-register-link">
                            <a href="" class="wheel-btn-link wheel-bg11">Đăng nhập với Facebook</a>
                            <a href="" class="wheel-btn-link wheel-bg12">Đăng nhập với Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
