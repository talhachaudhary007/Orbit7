<?php
include "database.php";

// data user sends relevant to category 
$ctgID = $_POST['id'];
$category = $_POST['category'];
$desc = $_POST['description'];
$subcategories = $_POST['subcategories'];
$visibility = $_POST['visibility'];


$update = mysqli_query($database, "UPDATE `category` SET `category`='$category', `subcategories`='$subcategories', `detail`='$desc', `visibility`='$visibility' WHERE `id`='$ctgID'");

$update_meta = mysqli_query($database, "UPDATE `service_meta` SET `ItemID`='' WHERE `catID`='$ctgID'");


if(isset($_POST['itemID'])) {
    $itemAdd = $_POST['itemID'];

        $str = implode(",", $itemAdd );
        $selection = mysqli_query($database, "UPDATE `service_meta` SET `ItemID`='$str' WHERE `catID`='$ctgID'");

} 
?>
