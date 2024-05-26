<?php
include"header.php";
?>
   

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm pb-5 pt-2 px-4">
                    <div class="card-body my-5 px-5">
                        <a href="login-1.html" class="my-logo d-block text-center mb-5">
                            <img src="favicon.ico" alt="logo" class="img-fluid">
                        </a>
                        <h3 class="text-center my-4">ENTER OTP CODE</h3>
                        <div class="text-muted px-3">We just sent a 6 digit otp code. Enter that code here to proceed</div>
                        <form class="my-5 my-form" action="assets/php/registration.php" method="POST">
                            <div class="mb-5 input-group">
                                <input name="forgot_username" type="number" class="form-control" placeholder="Enter Your OTP Code" aria-label="User Name">
                                <div class="input-group-append my-icon">
                                    <span class="my-input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" name="forgot_btn" class="fw-bold btn btn-primary py-2 px-5 w-100"><span>Validate OTP Key</span></button>
                            </div>
                            <div class="text-muted px-3 py-1">I Already have an OTP code.</div>

                        </form>

                        <div class="clearfix"></div>
                        
                        <hr>
                        <div class="text-center my-loign-text">
                            <p class="mb-0 "><a href="login.php" class="fw-bold">Resend OTP </a></p>
                        </div>
                        <div class="text-center my-loign-text">
                            <p class="mb-0 py-2">Not Received Yet? </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include"footer.php";
?>