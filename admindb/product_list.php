<?php
include "php/database.php";
include "header.php";
include "sidebar.php";
include "navbar.php";


// To delete service from main parent table 
if(isset($_GET['id'])){

    $productID = $_GET['id'];

    $delete = mysqli_query($database, "DELETE FROM `product` WHERE `id` = '$productID'");
    $deleteMeta = mysqli_query($database, "DELETE FROM `product_meta` WHERE `productID` = '$productID'");
    if($delete && $deleteMeta){
        echo"deleted";
    }else{
        echo"not deleted";
    }
}

?>


<div class="container">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Product List</h3>
                <a href="product_add.php" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i
                        class="icofont-plus-circle me-2 fs-6"></i> Add Product</a>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-4">

        <!-- here we use while loop to fetch all the rows from database -->
        <?php
        $select = mysqli_query($database, "SELECT * FROM `product`");
        while($rec= mysqli_fetch_array($select)){
        ?>

<div class="col">
    <div class="card h-100">
        <div class="product">
            <div class="product-image" style="height: 200px;"> <!-- Adjust the height as needed -->
            <?php
            $productId = $rec['Id'];
            $selectImgs = mysqli_query($database, "SELECT * FROM `product_meta` WHERE `productID`='$productId' AND `primaryImage`='1'");
            $primaryImage = mysqli_fetch_array($selectImgs);
            ?>
                <div class="product-item active">
                    <img src="<?php echo 'assets/images/product-img/'.$primaryImage['Image'] ?>" alt="product" class="img-fluid w-100 h-100" style="object-fit: cover;">
                </div>

            </div>
            <div class="product-content py-3">
                <span class="rating mb-2 d-block"><?php echo $rec['NewPrice'] .'.00 USD' ?></span>
                <a href="#" class="fw-bold">
                    <?php echo $rec['Name']; ?>
                </a>
                <p class="text-muted" style="overflow: hidden; text-overflow: ellipsis; max-height: 45px;">
                    <?php echo $rec['Description']; ?>
                </p>
                <div>
                    <a href="product_edit.php?id=<?php echo $rec['Id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="service_detail.php?id=<?php echo $rec['Id'] ?>" class="btn btn-primary">View</a>
                    <a href="#exampleModal2<?php echo $rec['Id'] ?>" data-bs-toggle="modal" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>



        <!-- Modal start for delete confirmation -->
<div class="modal fade" id="exampleModal2<?php echo $rec['Id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this "Product" permanently? <br>You can't recover them once you
                    delete.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a type="button" href="product_list.php?id=<?php echo $rec['Id'] ?>" class="btn btn-primary">Yes, Delete it</a>
            </div>
        </div>
    </div>
</div>


<!-- here php loop closes -->

        <?php } ?>

    </div>
</div>


<?php
include "footer.php";
?>