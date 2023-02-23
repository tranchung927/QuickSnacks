<form action="">
    <div class="container-register">
        <h1>TẠO TÀI KHOẢN</h1>
        <div class="form-register">
            <div class="input">
                <input type="text" placeholder="Họ của bạn *" name="first_name" class="input-register">
                <div class="line"></div>
                <p style="color:red">Vui lòng nhập họ của bạn</p>
            </div>
            <div class="input">
                <input type="text" placeholder="Tên của bạn *" name="last_name" class="input-register">
                <div class="line"></div>
                <p style="color:red">Vui lòng nhập tên của bạn</p>
            </div>
            <div class="input">
                <input type="text" placeholder="Số Điện Thoại *" name="phone-number" class="input-register">
                <div class="line"></div>
                <p style="color:red">Vui lòng số điện thoại của bạn</p>
            </div>
            <div class="input">
                <input type="text" placeholder="Địa chỉ email của bạn *" name="email" class="input-register">
                <div class="line"></div>
                <p style="color:red">Vui lòng nhập địa chỉ email của bạn</p>
            </div>
            <div class="input">
                <input type="password" placeholder="Mật khẩu *" name="password" class="input-register">
                <div class="line"></div>
                <p style="color:red">Vui lòng nhập mật khẩu của bạn</p>
            </div>
        </div>
        <div class="check-policy">
            <div class="checker"><input type="checkbox" name="policy-check" id="check"></div> 
            <div class="policy"><p>Tôi đã đọc và đồng ý với <a href="https://kfcvietnam.com.vn/privacy-policy">Chính Sách Hoạt Động Của QuickSnacks</a></p></div>
        </div>
        <button>Tạo Tài Khoản</button>
        <div class="have-account">
            <div class="text">Bạn đã có tài khoản?</div>
            <div class="login"><a href="index.php?controller=user&action=login">Đăng nhập</a></div>
        </div>
    </div>
</form>