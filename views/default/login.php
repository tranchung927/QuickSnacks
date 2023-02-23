<form action="">
    <div class="container-login">
        <h1>ĐĂNG NHẬP</h1>
        <div class="form-login">
            <div class="email">
                <input type="text" placeholder="Địa chỉ email của bạn *" name="email" class="input-login">
                <div class="line"></div>
                <p style="color:red">Please enter your email address</p>
            </div>
            <div class="password">
                <input type="password" placeholder="Mật khẩu *" name="password" class="input-login">
                <div class="line"></div>
                <p style="color:red">Please enter your password</p> 
            </div>  
        </div>
        <div class="forgot-password">
            <a href="" style="transition:none;color:black;text-decoration:none">Bạn quên mật khẩu?</a>
        </div>
        <div class="login-register">
            <button name="login" id="login-action" href="#">ĐĂNG NHẬP</button>
        </div>
        <div class="button-newaccount">
            <p>Bạn chưa có tài khoản? <a href="index.php?controller=user&action=register">Đăng ký</a></p>
        </div>
    </div>
</form>