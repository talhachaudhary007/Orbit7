<?php
include "php/database.php";
include "header.php";
include "sidebar.php";
include "navbar.php";

$productID = $_GET['id'];

$select = mysqli_query($database, "SELECT * FROM `product` Where `Id` = '$productID'");
$rec= mysqli_fetch_array($select);


?>


<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
    <!-- php/updateProduct.php -->
        <form method="post" action="updateProduct.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $productID; ?>" name="product_id" />
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Edit Product</h3>
                        <button type="submit"
                            class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <div class="row g-3 mb-3">
                <div class="col-xl-8 col-lg-8">

                    <!-- Select Multiple files with a preview and delete button -->

                    <div class="card mb-3">
                        <div
                            class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Choose Pictures</h6>
                            <div id="ProdImages"></div>
                        </div>
                       <script>
                        $("#ProdImages").load('php/updateProduct.php?productId=<?php echo $productID; ?>');
                       </script>
                       <!--  -->
                       

                                            <!--  -->
                        </div>
                        <div class="card-body pb-4">
                            <input type="file" id="file-input" class="form-control" name="upload_mfiles[]" multiple>
                            <div id="preview-container"></div>
                        </div>
                    </div>

                   <!-- ajax for delete -->
                  

                    <!-- script ends -->

        <!-- basic card information starts -->

                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Basic information</h6>
                        </div>
                        <div class="card-body">

                            <div class="row g-3 align-items-center">

                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="name" value="<?php echo $rec['Name'] ?>" name="pName">
                                </div>

                                <div class="col-6">

                                    <label class="form-label">Select Category</label>
                                    <select class="form-select" id="parent_category" name="pCategory"
                                        aria-label="size 3 select example">
                                        <option id='' value="<?php echo $rec['Category'] ?>">Select Catecogry</option>
                                        <!-- fetch all the added categories form category table  -->
                                        <?php
                                                $category = mysqli_query($database, "SELECT * FROM `category` WHERE `categoryType` = 'product'");
                                                while($show = mysqli_fetch_array($category)){
                                                ?>

                                        <option value="<?php echo $show['id']; ?>"> <?php echo $show['category'] ?> </option>

                                        <?php
                                                }
                                                ?>

                                    </select>

                                    <!-- ajax for subcategorie -->
                                    <script
                                        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                    <script>
                                        $(document).ready(function () {
                                            $('#parent_category').on('change', function () {
                                                var Parent_category_id = this.value;
                                                $.ajax({
                                                    url: "php/get_subcat.php",
                                                    type: "POST",
                                                    data: {
                                                        category_id: Parent_category_id
                                                    },
                                                    cache: false,
                                                    success: function (dataResult) {
                                                        $("#sub_category").html(dataResult);
                                                    }
                                                });


                                            });
                                        });
                                    </script>
                                    <!-- ajax code ends -->

                                </div>
                                <div class="col-12">
                                    <label class="form-label">Select Subcategory</label>
                                    <select class="form-select" id="sub_category" name="pSubcategory"
                                        aria-label="size 3 select example">
                                    </select>
                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="card mb-3">
                        <div
                            class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Additional Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label">Product Description</label>
                                    <textarea class="form-control" name="pDesc" id="" rows="1" style="text-indent: -21%;">
                                    <?php echo $rec['Description'];?>
                                    </textarea>
                                </div>
                                <div class="col-md-12">

                                    <label class="form-label">Additional Information</label>
                                    <textarea class="form-control" name="pAddInfo"
                                        placeholder="Enter additional information..." id="" rows="1"> <?php echo $rec['Information'];?></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Shipping & Return Policy</label>
                                    <textarea class="form-control" name="pPolicy"
                                        placeholder="Enter product return policy..." id="" rows="1"><?php echo $rec['Policy'];?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div
                            class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Variations</h6>
                        </div>
                        <div class="card-body pb-4">

                            <div class="row">
                                <div class="col-6">
                                    <div class="col-md-12">
                                        <label class="form-label">Variant 1</label>
                                        <input type="text" class="form-control" value="<?php echo $rec['Variant1'];?>" name="pColor" placeholder="Color">
                                    </div>

                                    <div class="form-group demo-tagsinput-area">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="<?php echo $rec['VariantValue1'];?>" name="pColorV" data-role="tagsinput"
                                                placeholder="red, black, yellow">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-md-12">
                                        <label class="form-label">Variant 2</label>
                                        <input type="text" class="form-control" value="<?php echo $rec['Variant2'];?>" name="pSize" placeholder="Size">
                                    </div>

                                    <div class="form-group demo-tagsinput-area">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="<?php echo $rec['VariantValue2'];?>" name="pSizeV" data-role="tagsinput"
                                                placeholder="small, medium, large">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-4">

                    <div class="sticky-lg-top">

                        <div class="card mb-3">
                            <div
                                class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Visibility Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Published" <?php if($rec['Visibillity'] == 'Published'){echo 'checked';} ?> name="vStatus"
                                        checked>
                                    <label class="form-label">Published</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="Hidden" <?php if($rec['Visibillity'] == 'Hidden'){echo 'checked';} ?> type="radio" name="vStatus">
                                    <label class="form-label">Hidden</label>
                                </div>
                                <div class="form-check py-1">
                                    <input class="form-check-input" type="radio" name="vStatus" id="scheduledRadio">
                                    <label class="form-label" id="scheduled">Scheduled</label> <br> <br>
                                    <label class="form-check-label togledInput">Publish Date</label>
                                    <input type="date" class="form-control w-100 togledInput" name="vStatus" value="" placeholder="2021-03-28">
                                </div>
                            </div>
                        </div>

                        <!-- Hide the date input and its label initially -->

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

                        <script>
                            $(document).ready(function () {
                                $(".togledInput").hide();
                                $("#scheduledRadio").click(function () {
                                    $(".togledInput").show();
                                });

                                // Hide the date input and its label when other radio buttons are clicked
                                $("input[name='vStatus']").not("#scheduledRadio").click(function () {
                                    $(".togledInput").hide();
                                });
                            });
                        </script>


                        <div class="card mb-3">
                            <div
                                class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Pricing Info</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">Product Price Old</label>
                                        <input type="text" class="form-control" value="<?php echo $rec['OldPrice'];?>" name="pOldPrice" placeholder="$350">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Product Price New</label>
                                        <input type="text" class="form-control" value="<?php echo $rec['NewPrice'];?>" name="pNewPrice" placeholder="$355">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Stock Quantity</label>
                                        <input type="text" class="form-control" value="<?php echo $rec['Quantity'];?>" placeholder="Total Stock Quantity"
                                            name="pQuantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div
                                class="card-header pt-3 pb-2 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Product Coupon</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <!-- <label class="form-label">Product Coupon</label> -->
                                        <input type="text" readonly name="coupon" value="<?php echo $rec['Coupon'];?>" class="form-control" >

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end  -->
            </div>
        </form>
    </div>



    <?php
include "footer.php";
?>