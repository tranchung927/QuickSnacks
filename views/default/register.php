<div class="row">
    <!-- Grid column -->
    <div class="col-md-8 col-lg-6 col-xl-6 mx-auto">
    <p class="container-fluid error-with-bg"></p>
        <div class="container-fluid" style="margin-top:60px;">
            <form class="d-flex flex-column" method="POST">
                <h1 style="font-family:Roboto-Bold;font-size:28px;text-align:center;">TẠO TÀI KHOẢN</h1>
                <div>
                    <input class="input-under-line" id="txtFistNameRegister" type="text" placeholder="Họ của bạn *" name="fname">
                    <p id="errFistNameRegiste" class="error-message"></p>
                </div>
                <div>
                    <input class="input-under-line" id="txtLastNameRegister" type="text" placeholder="Tên của bạn *" name="lname">
                    <p id="errLastNameRegister" class="error-message"></p>
                </div>
                <div>
                    <input class="input-under-line" id="txtPhoneNumberRegister" type="text" placeholder="Số Điện Thoại *" name="phonenumber">
                    <p id="errPhoneNumberRegister" class="error-message"></p>
                </div>
                <div>
                    <input class="input-under-line" id="txtEmailRegister" type="text" placeholder="Địa chỉ email của bạn *" name="emailsignup">
                    <p id="errEmailRegister" class="error-message"></p>
                </div>
                <div>
                    <input class="input-under-line" id="txtPasswordRegister" type="password" placeholder="Mật khẩu *" name="passsignup">
                    <p id="errPasswordRegister" class="error-message"></p>
                </div>
                <div class="d-flex" style="margin:24px 0px 0px 0px;">
                    <input style="width:28px;height:28px;margin-right:8px" type="checkbox" name="policy-check" id="cbPolicyRegister">
                    <p style="font-family:Roboto;font-size:20px;color:black">Tôi đã đọc và đồng ý với <a style="font-family:Roboto-Bold;font-size:20px;color:black" href="https://kfcvietnam.com.vn/privacy-policy">Chính Sách Hoạt Động Của QuickSnacks</a></p>
                </div>
                <button id="btnRegister" class="button-primary" style="height:64px;margin-top:40px;font-family:Roboto-Bold;font-size:24px;">Tạo tài khoản</button>
                <p class="text-center" style="font-family:Roboto;font-size:20px;color:black;margin:40px 0px;">Bạn đã có tài khoản? <a style="font-family:Roboto-Bold;font-size:20px;color:black" href="index.php?controller=home&action=signin">Đăng Nhập</a></p>
            </form>
        </div>
    </div>
</div>