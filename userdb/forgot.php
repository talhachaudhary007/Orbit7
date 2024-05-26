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
                        <h3 class="text-center my-4">RECOVER YOUR PASSWORD</h3>
                        <div class="text-muted px-1">Please enter the email address you'd like your password reset information sent to</div>
                        <form class="my-5 my-form" action="assets/php/registration.php" method="POST">
                            <div class="mb-5 input-group">
                                <input name="forgot_username" type="email" class="form-control" placeholder="Email address" aria-label="User Name">
                                <div class="input-group-append my-icon">
                                    <span class="my-input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" name="forgot_btn" class="fw-bold btn btn-primary py-2 px-5 w-100"><span>REQUEST RESET PASSWORD</span></button>
                            </div>
                            <div class="text-muted px-1 py-2">We will send you an email that will allow you to reset your password.</div>

                        </form>

                        <div class="clearfix"></div>
                        
                        <hr>
                        <div class="text-center my-loign-text">
                            <p class="mb-0 ">Already a member? <a href="login.php" class="fw-bold">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include"footer.php";
?>