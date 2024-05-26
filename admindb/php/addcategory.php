<?php
// error_reporting(0);
include "database.php";

$category = $_POST['category'];
$description = $_POST['description'];
$categoryType = $_POST['categoryType'];
$visibility = $_POST['visibility'];
$subcategories = $_POST['subcategories'];
$date = date('M-d-Y');
$select = mysqli_query($database, "SELECT * FROM `category` WHERE `category` = '$category'");
$check = mysqli_num_rows($select);

if($check > 0){
    echo "This category already exists";
 
} else {
    $insert = mysqli_query($database, "INSERT INTO `category`(`category`, `subcategories`, `detail`, `categoryType`, `visibility`, `date`) VALUES ('$category', '$subcategories', '$description','$categoryType', '$visibility', '$date')");
    echo "This category is added successfully";
    if($insert){
        $select = mysqli_query($database, "SELECT * FROM `category` WHERE `category` = '$category'");
        $rec = mysqli_fetch_array($select);
        $id = $rec['id'];
        // insert id into meta item meta table
        $insertmeta = mysqli_query($database, "INSERT INTO `service_meta` (`catID`, `category`) VALUE ('$id', '$category')");
        if($insertmeta){
            echo 'ok done ';
        }


    }
}

?>

