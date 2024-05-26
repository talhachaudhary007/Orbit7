<?php
include "database.php";

if(isset($_POST['addservice'])){

    $image = $_FILES['image'];

    // echo "<pre>";
    // print_r($image);
    // echo "</pre>";

    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $explode = explode('.', $fileName);
    $ext = end($explode);
    $newImgName = rand(0000,1234) .'.' .$ext;
    $moveFile = move_uploaded_file($fileTmpName, '../assets/images/service-img/'.$newImgName);

    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $detail = $_POST['detail'];
    $coupon = $_POST['coupon'];
    $categoryType = 'service';
    $date = date('M-d-Y');
    $Visibillity = $_POST['visibillity'];

// we explode tags to show them individually
    $tags = $_POST['tags'];

    // $newtags = explode(',', $tags);

    $insert = mysqli_query($database, "INSERT INTO `service` (`category`,`categoryType`, `title`, `description`, `detail`, `coupon`, `tags`, `image`, `date`, `Visibillity`) 
    VALUES ('$category','$categoryType', '$title', '$description', '$detail', '$coupon', '$tags', '$newImgName', '$date', '$Visibillity')");
    if($insert){
        $select = mysqli_query($database, "SELECT * FROM `service` WHERE `coupon` = '$coupon'");
        $rec = mysqli_fetch_array($select);
        $itemID = $rec['id'];
        $updatemeta = mysqli_query($database, "UPDATE `service_meta` SET `itemID`='$itemID' WHERE `category` = '$category'");
        if($updatemeta){
            echo 'ok done ';
        }

    }

}
?>