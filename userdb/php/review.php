<?php
include 'database.php';
$rating = $_POST['rating'];
$userId = $_POST['userId'];
$prod_id = $_POST['prod_id'];
$comment = $_POST['comment'];
$currentDateTime = date('Y-m-d H:i:s');
// 
$insert = mysqli_query($database, "INSERT INTO `reviews`(`userId`, `stars`, `comment`, `status`, `dateTime`, `productId`) VALUES ($userId,'$rating','$comment','0','$currentDateTime', '$prod_id')");
if($insert){
    echo "Your Review is under proccess";
}else{
    echo "some thing wrong";
}
?>