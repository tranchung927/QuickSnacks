<div class="container-login">
    <form class="flexColumn" method="POST">
        <h1>ĐĂNG NHẬP</h1>
        <div>
            <input class="input-under-line" id="txtEmail" type="text" placeholder="Địa chỉ email của bạn *" name="email">
            <p id="errSignEmail" class="error-message"></p>
        </div>
        <div>
            <input class="input-under-line" id="txtPassword" type="password" placeholder="Mật khẩu *" name="password">
            <span id="errSignPW" class="error-message"></span>
        </div>
        <a class="txtLinkNoneDeco" id="txtForgotPW" href="">Bạn quên mật khẩu?</a>
        <button class="button-primary" id="btnLogin">Đăng nhập</button>
        <p id="txtRegister">Bạn chưa có tài khoản? <a href="index.php?controller=home&action=signup">Đăng ký</a></p>
    </form>
</div>