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

// Multiple images
$Names = '';
    foreach($_FILES['upload_mfiles']['tmp_name'] as $key=>$val){
	$FileName = $_FILES['upload_mfiles']['name'][$key];
	$FileTname = $_FILES['upload_mfiles']['tmp_name'][$key];
	$FileSize = $_FILES['upload_mfiles']['size'][$key];
	$extf = explode('.', $FileName);
	$ext = end($extf);
	$NewName = rand(0000,99999).'.'.$ext;
	
	//This move_uploaded_file is to move the file to the target folder. 
	//Temporary Name/LocationFileTname
    $MoveFile = move_uploaded_file($FileTname, '../assets/images/product-img/'.$NewName);
	$Names .= $NewName.'~';
	
    }
// end multiple images

$productAdd = mysqli_query($database, "INSERT INTO `product`(`Name`, `Quantity`, `Description`, `Information`, `Policy`, `Variant1`, `VariantValue1`, `Variant2`, `VariantValue2`, `Category`, `Subcategory`, `OldPrice`, `NewPrice`, `Coupon`, `Visibillity`, `Images`) VALUES ('$pName','$pQuantity','$pDesc','$pAddInfo','$pPolicy','$pSize','$pSizeV','$pColor','$pColorV','$pCategory','$pSubcategory','$pOldPrice','$pNewPrice','$Coupon','$vStatus', '$Names')");

if($productAdd ){
    echo "done";
}else{
    echo "wrong";
}

    ?>