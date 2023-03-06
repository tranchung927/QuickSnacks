<div class="row">
    <!-- Grid column -->
    <div class="col-md-8 col-lg-6 col-xl-6 mx-auto">
        <div class="container-fluid" style="margin-top:60px;">
            <h1 style="font-family:Roboto-Bold;font-size:28px;text-align:center;">CHI TIẾT TÀI KHOẢN</h1>
            <div>
                <div class="input-float-group">
                    <input id="txtFistNameInfo" class="input-float" type="text" value='<?php echo$_SESSION["user"]["first_name"] ?>' required>
                    <span class="bar-float"></span>
                    <label class="label-float">Họ của bạn *</label>
                </div>
                <p id="errFistNameInfo" class="error-message"></p>
            </div>
            <div>
                <div class="input-float-group">
                    <input id="txtLastNameInfo" class="input-float" type="text" value='<?php echo$_SESSION["user"]["last_name"] ?>' required>
                    <span class="bar-float"></span>
                    <label class="label-float">Tên của bạn *</label>
                </div>
                <p id="errLastNameInfo" class="error-message"></p>
            </div>
            <div>
                <div class="input-float-group">
                    <input id="txtPhoneNumberInfo" class="input-float" type="text" value='<?php echo$_SESSION["user"]["phone"] ?>' required>
                    <span class="bar-float"></span>
                    <label class="label-float">Số điện thoại *</label>
                </div>
                <p id="errPhoneNumberInfo" class="error-message"></p>
            </div>
            <div>
                <div class="input-float-group">
                    <input id="txtEmailInfo" class="input-float" type="text" value='<?php echo$_SESSION["user"]["email"] ?>'required>
                    <span class="bar-float"></span>
                    <label class="label-float">Địa chỉ email của bạn *</label>
                </div>
                <p id="errEmailInfo" class="error-message"></p>
            </div>
            <button id="btnUpdateInfo" class="button-primary w-100" style="height:64px;font-family:Roboto-Bold;font-size:24px;margin-top:60px;">Cập nhật tài khoản</button>
            <button id="btnLogout" class="button-primary w-100" style="height:64px;font-family:Roboto-Bold;font-size:24px;margin-top:20px;margin-bottom:60px;">Đăng xuất</button>
        </div>
    </div>
</div>