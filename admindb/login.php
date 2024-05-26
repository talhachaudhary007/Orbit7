<?php
include "header.php";
?>
   

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm pb-5 pt-2 px-4">
                    <div class="card-body my-5 px-5">
                        <a href="login-1.html" class="my-logo d-block text-center mb-5">
                            <img src="favicon.ico" alt="logo" class="img-fluid">
                        </a>
                        <h3 class="text-center my-4">SIGN INTO YOUR ACCOUNT</h3>

                        <form class="my-5 my-form" action="php/login_user.php" method="POST">

                            <div class="mb-5 input-group">
                                <input name="login_username" type="email" class="form-control" placeholder="Username / Email address" aria-label="User Name">
                                <div class="input-group-append my-icon">
                                    <span class="my-input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="mb-5 input-group">
                                <input name="login_password" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                                <div class="input-group-append my-icon">
                                    <span class="my-input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                            <div class="mb-4 form-check my-checkbox">
                                <input class="form-check-input mt-0" required name="login_agree" type="checkbox" id="rememberme">
                                <label class="form-check-label px-3 " for="rememberme">
                                    Remember me
                                </label>
                                <a href="forgot.php" class="text-dark float-end forgot-password">Forgot your password?</a>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" name="login_btn" class="fw-bold btn btn-primary py-2 px-5 w-100"><span>LOGIN</span></button>
                            </div>

                        </form>

                        <div class="clearfix"></div>
                        <div class="social-list">
                            <div class="buttons">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="#" class="dribbble-bg"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>

                        <hr>
                        <div class="text-center my-loign-text">
                            <p class="mb-0 ">Don't have an account? <a href="register.php" class="fw-bold">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include"footer.php";
?>