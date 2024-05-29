<?php
include "database.php";
$pName = $_POST['pName'];
$pQuantity = $_POST['pQuantity'];
$pDesc = $_POST['pDesc'];
$pAddInfo = $_POST['pAddInfo'];
$pPolicy = $_POST['pPolicy'];
$pSize = $_POST['pSize'];
$pColor = $_POST['pColor'];
$pCategory = $_POST['pCategory'];
$pSubcategory = $_POST['pSubcategory'];
$pOldPrice = $_POST['pOldPrice'];
$pNewPrice = $_POST['pNewPrice'];
$vStatus = $_POST['vStatus'];
$Coupon = $_POST['coupon'];
$pSizeV = $_POST['pSizeV'];
$pColorV = $_POST['pColorV'];
$primary_image = $_POST['primaryImageSelect'];


$productAdd = mysqli_query($database, "INSERT INTO `product`(`Name`, `Quantity`, `Description`, `Information`, `Policy`, `Variant1`, `VariantValue1`, `Variant2`, `VariantValue2`, `Category`, `Subcategory`, `OldPrice`, `NewPrice`, `Coupon`, `Visibillity`) VALUES ('$pName','$pQuantity','$pDesc','$pAddInfo','$pPolicy','$pSize','$pSizeV','$pColor','$pColorV','$pCategory','$pSubcategory','$pOldPrice','$pNewPrice','$Coupon','$vStatus')");
$last_id = mysqli_insert_id($database);

// Multiple images

    foreach($_FILES['upload_mfiles']['tmp_name'] as $key=>$val){
	$FileName = $_FILES['upload_mfiles']['name'][$key];
	$FileTname = $_FILES['upload_mfiles']['tmp_name'][$key];
	$FileSize = $_FILES['upload_mfiles']['size'][$key];
	$extf = explode('.', $FileName);
	$ext = end($extf);
	$NewName = rand(0000,99999).'.'.$ext;
	
	//This move_uploaded_file is to move the file to the target folder. 
    $MoveFile = move_uploaded_file($FileTname, '../assets/images/product-img/'.$NewName);
	
		if($primary_image == $FileName){
			$InsertMetaa = mysqli_query($database, "INSERT INTO `product_meta`(`productID`, `Image`, `primaryImage`) VALUES ('$last_id','$NewName','1')");
			if($InsertMetaa){
				echo "primaryimage is set";
			}else{
				echo "primary img not set";
			}
		}else{

	$InsertMeta = mysqli_query($database, "INSERT INTO `product_meta`(`productID`, `Image`) VALUES ('$last_id','$NewName')");
}
    }
// end multiple images


if($productAdd ){
echo $_POST['primaryImageSelect'];
    echo "done";
}else{
    echo "wrong";
}

    ?>