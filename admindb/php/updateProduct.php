<?php
    include "database.php";
   $Product_id = $_GET['productId'];
  
   if(isset($_GET['ID'])){
    $id = $_GET['ID'];
    $query = mysqli_query($database, "SELECT * FROM `product_meta` WHERE `id` = '$id'");
    $show = mysqli_fetch_array($query);
    $img = $show['Image'];
    unlink('../assets/images/product-img/'.$img);
    $query = mysqli_query($database, "DELETE FROM `product_meta` WHERE `id` = '$id'");
   }
   $product_meta = mysqli_query($database, "SELECT * FROM `product_meta` WHERE `productID` = '$Product_id'");
  while( $rec = mysqli_fetch_array($product_meta)){?>
  <div style="display: flex;
    flex-direction: column;
    width: 70px;
    cursor:pointer;
}   ">
    <img src="assets/images/product-img/<?php echo $rec['Image']?>" id='<?php $rec['id']?>' widt='70px' height='70px' alt="">
    <a class='delImage' id='<?php echo $rec['id'];?>'>abc</a>
  </div>
 <?php }

?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
     $(".delImage").click(function(){
        var ids = $(this).attr('id');
        $("#ProdImages").load('php/updateProduct.php?productId=<?php echo $Product_id; ?>&ID='+ids);
     });
    });
</script>