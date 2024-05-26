<?php
include "database.php";

$image = $_FILES['image'];

$fileName = $_FILES['image']['name'];
$fileTmpName = $_FILES['image']['tmp_name'];
$explode = explode('.', $fileName);
$ext = end($explode);
$newImgName = rand(0000,1234) .'.' .$ext;
$moveFile = move_uploaded_file($fileTmpName, '../assets/images/service-img/'.$newImgName);


$serviceID = $_POST['serviceID'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$detail = $_POST['detail'];
$visibillity = $_POST['visibillity'];
$tags = $_POST['tags'];


$update = mysqli_query($database, "UPDATE `service` SET `title`='$title', `category`='$category', `Visibillity`='$visibillity', `description`='$description', `detail`='$detail', `tags`='$tags', `image`='$newImgName' WHERE `id`='$serviceID'");

?>
