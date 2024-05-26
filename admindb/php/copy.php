<?php
include "database.php";

// data user sends relevant to category 
$ctgID = $_POST['id'];
$category = $_POST['category'];
$desc = $_POST['description'];
$visibility = $_POST['visibility'];

$update = mysqli_query($database, "UPDATE `category` SET `category`='$category', `detail`='$desc', `visibility`='$visibility' WHERE `id`='$ctgID'");


// To put items in that category
// data we fetch from previous items table
// itemAdd replace itemsIDs
// itemTitle replace itemsID

if(isset($_POST['itemTitle'])) {
    $itemAdd = $_POST['itemTitle'];
    foreach($itemAdd as $itemTitle) {
        // echo $itemID .'<br>';
        $select = mysqli_query($database, "SELECT * FROM `service` WHERE `title` = '$itemTitle'");
        $count = mysqli_num_rows($select);
        echo $count;
        $rec = mysqli_fetch_array($select);

        $categoryType = $rec['categoryType'];
        $title = $rec['title'];
        $description = $rec['description'];
        $detail = $rec['detail'];
        $coupon = $rec['coupon'];
        $tags = $rec['tags'];
        $image = $rec['image'];

        if($count > 0){

            echo'This item is already existed';

        }else{

            $insert = mysqli_query($database, "INSERT INTO `service` (`category`, `categoryType`, `title`, `description`, `detail`, `coupon`, `tags`, `image`) VALUES ('$category', '$categoryType', '$title', '$description', '$detail', '$coupon', '$tags', '$image')");

            if($insert){
                echo'items are updated';
            }
        }


    }
} else {

    echo "No items selected";
}
?>
