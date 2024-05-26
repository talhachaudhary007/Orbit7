<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "orbit";

$database = mysqli_connect($servername, $username, $password, $db);
 
if($database){
    // echo"database is connected <br>";
} else{
    echo"something went wrong";
}

?>