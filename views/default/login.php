<?php
    $erroremail = "";
    $errorpassword = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["email"])){
            $erroremail =  "Please enter your email";
        } else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $erroremail = "Invalid email";
            }
        }
        if(empty($_POST["password"])){
            $errorpassword =  "Please enter your password";
        } else {
            $pass = $_POST["password"];
            if (!preg_match("/^[a-zA-Z0-9]*$/",$pass)){
              $erroremail = "Invalid password";
            }
        }
    }
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">">
    <div class="container-login">
        <h1>ĐĂNG NHẬP</h1>
        <div class="form-login">
            <div class="email">
                <input type="text" placeholder="Địa chỉ email của bạn *" name="email" class="input-login">
                <div class="line"></div>
                <div class="error-alert" style="color:red;width: 748px;height:90px"><?php echo $erroremail;?></div>
                <!-- doan nay css cua em tu nhien no khong an vao cai class nay (ben register cung tuong tu khong an vao may cai class moi tao) -->
            </div>
            <div class="password">
                <input type="password" placeholder="Mật khẩu *" name="password" class="input-login">
                <div class="line"></div>
                <div class="error-alert" style="color:red;width: 748px;height:90px"><?php echo $errorpassword;?></div>
            </div>  
        </div>
        <div class="forgot-password">
            <a href="" style="transition:none;color:black;text-decoration:none">Bạn quên mật khẩu?</a>
        </div>
        <div class="login-register">
            <!-- <input type = "submit" name = "login" id="login-action" value="ĐĂNG NHẬP" > -->
            <button  type = "submit" name = "login" id="login-action" >ĐĂNG NHẬP</button>
            <!-- nut nay cua em nhan vao no bi nhay man home -->
        </div>
        <div class="button-newaccount">
            <p>Bạn chưa có tài khoản? <a href="index.php?controller=user&action=register">Đăng ký</a></p>
        </div>
    </div>
</form>
