<form method="POST">
    <div class="container-register">
        <h1>TẠO TÀI KHOẢN</h1>
        <div>
            <input class="input-under-line" id="txtFname" type="text" placeholder="Họ của bạn *" name="fname">
            <p id="errFname" class="error-message"></p>
        </div>
        <div>
            <input class="input-under-line" id="txtLname" type="text" placeholder="Tên của bạn *" name="lname">
            <p id="errLname" class="error-message"></p>
        </div>   
        <div>
            <input class="input-under-line" id="txtPhoneNumber" type="text" placeholder="Số Điện Thoại *" name="phonenumber">
            <p id="errPhoneNumber" class="error-message"></p>
        </div>   
        <div>
            <input class="input-under-line" id="txtEmailSignup" type="text" placeholder="Địa chỉ email của bạn *" name="emailsignup">
            <p id="errEmailSignup" class="error-message"></p>
        </div>   
        <div>
            <input class="input-under-line" id="txtPassSignup" type="password" placeholder="Mật khẩu *" name="passsignup">
            <p id="errPasswordSignup" class="error-message"></p>
        </div>      
        <div class="check-policy">
            <div class="checker"><input type="checkbox" name="policy-check" id="check"></div> 
            <div class="policy"><p>Tôi đã đọc và đồng ý với <a href="https://kfcvietnam.com.vn/privacy-policy">Chính Sách Hoạt Động Của QuickSnacks</a></p></div>
        </div>
        <button id="btnRegister" class="button-primary">Tạo Tài Khoản</button>
        <div class="have-account">
            <div class="text">Bạn đã có tài khoản?</div>
            <div class="login"><a href="index.php?controller=home&action=signin">Đăng Nhập</a></div>
        </div> 
    </div>
</form>