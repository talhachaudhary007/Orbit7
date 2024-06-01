<?php
  session_start();
include "../php/database.php";

$login_email = $_POST['login_username'];

$login_password = $_POST['login_password'];

$select = mysqli_query($database,"SELECT * FROM `orbitusers` WHERE `email`='$login_email'");

$user = mysqli_num_rows($select);
$rec = mysqli_fetch_array($select);


if($user > 0){
$sqli_password = $rec['password'];

        if($sqli_password == $login_password){
                    $userId= $rec['id'];
        
                 
                    // use session for user, but it expires autometically if browser close
                  

                    $_SESSION['user_session'] = $userId; 
                    // echo $_SESSION['user_session'];
                    // echo '<script>location.href ="../service_add.php";</script>';
                    header("Location: ../shop.php");
                    //   use cookies if user checks remember me 
                    if(isset($_POST['login_agree'])){
                        $cookie_name = "user";
                        $cookie_value = $userId;
                        setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/"); // 86400 = 1 day
                    }
        }else{
            echo"<div class='alert alert-danger'>Your password couldn't matched</div>";
        }

}else{
    echo'<div class="alert alert-danger">This Email is not registered</div>';
}


?>