<?php
include"header.php";
?>

<style>
    .logo img {
        max-width: 150px;
    }

    .my-form .form-control:focus {
        box-shadow: none;
        border-color: #ced4da; 
    }

    .my-form .input-group input.form-control {
        border-top: none;
        border-left: none;
        border-right: none;
        border-radius: 0;
        border-bottom: 1px solid #ced4da;
    }

    .my-icon span{
        position: absolute;
        transform: translateX(-40px);
        font-size: 22px;
        color: #7258db;
        z-index: 5 !important;
    }
    .my-input-group-text {
    display: flex;
    align-items: center;
    }
    .my-loign-text a{
        color: #7258db !important;
    }
    .my-checkbox input[type="checkbox"] {
    width: 1.20rem;
    height: 1.20rem;
}
</style>    


    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm pb-5 pt-2 px-4">
                    <div class="card-body my-5 px-5">
                        <a href="login-1.html" class="logo d-block text-center mb-4">
                            <img src="favicon.ico" alt="logo" class="img-fluid">
                        </a>
                        <h3 class="text-center my-4">Create An Account</h3>

                        <form action="assets/php/registration.php" class="mt-5 my-form" method="POST">

                            <div class="mb-5 input-group">
                                <input name="reg_username" type="text" class="form-control" placeholder="Username" aria-label="User Name">
                                <div class="input-group-append my-icon">
                                    <span class="my-input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="mb-5 input-group">
                                <input name="reg_name" type="text" class="form-control" placeholder="Full Name" aria-label="Full Name">
                                <div class="input-group-append my-icon">
                                    <span class="my-input-group-text"><i class="fa fa-user-circle"></i></span>
                                </div>
                            </div>
                            <div class="mb-5 input-group">
                                <input name="reg_email" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                <div class="input-group-append my-icon">
                                    <span class="my-input-group-text"><i class="fa fa-envelope-open"></i></span>
                                </div>
                            </div>
                            <div class="mb-5 input-group">
                                <input name="reg_password" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                                <div class="input-group-append my-icon">
                                    <span class="my-input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                            <div class="mb-4 form-check my-checkbox">
                                <input class="form-check-input mt-0" required name="reg_agree" type="checkbox" id="rememberme">
                                <label class="form-check-label px-3 " for="rememberme">
                                    I agree to the terms of service
                                </label>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" name="reg_btn" class="fw-bold btn btn-primary py-2 px-5 w-100"><span>Register</span></button>
                            </div>

                        </form>
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