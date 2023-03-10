<div class="row">
    <!-- Grid column -->
    <div class="col-md-8 col-lg-6 col-xl-6 mx-auto">
        <div class="container-fluid" style="margin-top:60px;">
            <form class="d-flex flex-column" method="POST">
                <h1 style="font-family:Roboto-Bold;font-size:28px;text-align:center;">LOGIN</h1>
                <div>
                    <input class="input-under-line" id="txtEmail" type="text" placeholder="Email *"
                        name="email">   
                    <p id="errSignEmail" class="error-message"></p>
                </div>
                <div>
                    <input class="input-under-line" id="txtPassword" type="password" placeholder="Password *"
                        name="password">
                    <span id="errSignPW" class="error-message"></span>
                </div>
                <a class="txtLinkNoneDeco" id="txtForgotPW" href="">Forgot Your Password?</a>
                <button class="button-primary" id="btnLogin">Login</button>
                <p style="color:black;font-family:Roboto;font-size:20px;text-align:center;margin:40px 0px;">Haven’t got an account?  <a style="color:black;font-family:Roboto-Bold;font-size:20px;" href="index.php?controller=index&action=signup">Sign Up</a>
                </p>
            </form>
        </div>
    </div>
</div>