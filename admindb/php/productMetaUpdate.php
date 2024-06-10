<!-- except image others updated things -->
<?php
include "database.php";
$pid = $_GET['p'];


$pName = $_POST['pName'];
$pQuantity = $_POST['pQuantity'];
$pDesc = $_POST['pDesc'];
$pAddInfo = $_POST['pAddInfo'];
$pPolicy = $_POST['pPolicy'];
$Variant1 = $_POST['pSize'];
$VariantValue1 = $_POST['pSizeV'];
$Variant2 = $_POST['pColor'];
$VariantValue2 = $_POST['pColorV'];
$pCategory = $_POST['pCategory'];
$pSubcategory = $_POST['pSubcategory'];
$pOldPrice = $_POST['pOldPrice'];
$pNewPrice = $_POST['pNewPrice'];
$Coupon = $_POST['coupon'];
$vStatus = $_POST['vStatus'];
$primary_image = $_POST['primaryImageSelect'];


$productUpdate = mysqli_query($database, "UPDATE `product` SET `Name`='$pName',`Quantity`='$pQuantity',`Description`='$pDesc',`Information`='$pAddInfo',`Policy`='$pPolicy',`Variant1`='$Variant',`VariantValue1`='$VariantValue1',`Variant2`='$Variant2',`VariantValue2`='$VariantValue2',`Category`='$pCategory',`Subcategory`='$pSubcategory',`OldPrice`='$pOldPrice',`NewPrice`='$pNewPrice',`Coupon`='$Coupon',`Visibillity`='$vStatus' WHERE `Id` = '$pid'");

// $last_id = mysqli_insert_id($database);

    foreach($_FILES['upload_mfiles']['tmp_name'] as $key=>$val){
	$FileName = $_FILES['upload_mfiles']['name'][$key];
	$FileTname = $_FILES['upload_mfiles']['tmp_name'][$key];
	$FileSize = $_FILES['upload_mfiles']['size'][$key];
	$extf = explode('.', $FileName);
	$ext = end($extf);
	$NewName = rand(0000,99999).'.'.$ext;
	
    $MoveFile = move_uploaded_file($FileTname, '../assets/images/product-img/'.$NewName);
	
		if($primary_image == $FileName){
			$InsertMetaa = mysqli_query($database, "INSERT INTO `product_meta`(`productID`, `Image`, `primaryImage`) VALUES ('$pid','$NewName','1')");
			if($InsertMetaa){
				echo "primaryimage is set";
			}else{
				echo "primary img not set";
			}
		}else{

	$InsertMeta = mysqli_query($database, "INSERT INTO `product_meta`(`productID`, `Image`) VALUES ('$pid','$NewName')");
}
    }


if($productUpdate ){
echo $_POST['primaryImageSelect'];
    echo "Product is updated.";
}else{
    echo "wrong";
}

?>
<!-- ================================= -->


