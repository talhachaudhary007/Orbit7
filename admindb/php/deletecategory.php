<?php
include "database.php";

$id = $_GET['id'];

if(isset($id)){


    $select = mysqli_query($database, "SELECT * FROM `category` WHERE `id` = '$id'");
    $rec = mysqli_fetch_array($select);
    $category = $rec['category'];
    // echo $category;


    if($category){
        $update = mysqli_query($database, "UPDATE `service` SET `category`='' WHERE `category` = '$category'");

        $delete = mysqli_query($database, "DELETE FROM `category` WHERE `id` = '$id'");
        if($delete){
            echo "Category is deleted";
            header('location: ../categories_list.php');
        }else{
            echo "Something went wrong";
        }
    }else{
        echo"category is not find in category table";
    }

}

?>