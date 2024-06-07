<?php
include "database.php";
$pid = $_GET['p'];
// delete image
if(isset($_GET['i'])){
$imgid = $_GET['i'];
$Get = mysqli_query($database, "SELECT * FROM `product_meta` WHERE `id`='$imgid'"); 
$fd = mysqli_fetch_array($Get);
$FileName = $fd['Image'];
unlink('../assets/images/product-img/'.$FileName);
$DelMeta = mysqli_query($database, "DELETE FROM `product_meta` WHERE `id`='$imgid'"); 
}
// end
// show images
$GetMeta = mysqli_query($database, "SELECT * FROM `product_meta` WHERE `productID`='$pid'");
while($me = mysqli_fetch_array($GetMeta)){
    ?>
    <div style='float:left;margin-right:10px;'>
        <img src="../admindb/assets/images/product-img/<?php echo $me['Image'];?>" width='80px' height='80px' alt="">
        <a style="background: none;
    border: none;
    font-size: 31px;
    padding: 0px 0px;
    margin: 0px;
    color: red;
    cursor:pointer;
    font-weight: bold;
    display:block;
    z-index:9999;
    position: absolute;
    top: 1px;" class='delImage' id='<?php echo $me['id'];?>'>&times;</a>
    </div>
    
<?php 
}
?>
<script>
$(document).ready(function(){
$(".delImage").click(function(){
var id = $(this).attr('id');
$("#ProdImages").load('php/delPmeta.php?p=<?php echo $pid; ?>&i='+id);

});
});
</script>
