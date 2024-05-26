<?php
include "php/database.php";

include "header.php";
include "sidebar.php";
include "navbar.php";

?>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
    <form method="post" action="php/productAdd.php">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div
                    class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Products Add</h3>
                    <button type="submit"
                        class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-xl-8 col-lg-8">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Basic information</h6>
                    </div>
                    <div class="card-body">
                        
                            <div class="row g-3 align-items-center">

                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="name" name="pName">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Total Stock Quantity</label>
                                    <input type="text" class="form-control" placeholder="Total Stock Quantity" name="pQuantity">
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Product Description</label>
                                    <textarea class="form-control" name="pDesc"
                                        placeholder="Enter product description..." id="" rows="1"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Additional Information</label>
                                    <textarea class="form-control" name="pAddInfo"
                                        placeholder="Enter additional information..." id="" rows="1"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Shipping & Return Policy</label>
                                    <textarea class="form-control" name="pPolicy"
                                        placeholder="Enter product return policy..." id="" rows="1"></textarea>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-3">
                            <div
                                class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <div class="col-md-12">
                                    <label class="form-label">Variant Size</label>
                                    <input type="text" class="form-control" name="pSize" placeholder="Sizes">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group demo-tagsinput-area">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pSizeV" data-role="tagsinput"
                                            placeholder="Sahiwal,Okara,Lahore,Islamabad">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3">
                            <div
                                class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <!-- <h6 class="m-0 fw-bold">Shipping Areas</h6> -->
                                <div class="col-md-12">
                                    <label class="form-label">Variant Color</label>
                                    <input type="text" class="form-control" name="pColor" placeholder="Color">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group demo-tagsinput-area">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pColorV"  data-role="tagsinput"
                                            placeholder="Sahiwal,Okara,Lahore,Multan">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                
                <div class="card mb-3">
                    <div
                        class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Search Engine details</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 py-3">
                            <label class="form-label">Product Identifier URL</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">https://eBazar.com</span>
                                <input type="text" class="form-control" value="/product/Fossilsmart">
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
                            <h6 class="m-0 fw-bold">Category Info</h6>
                        </div>

                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Select Category</label>
                                    <select class="form-select" name="category" aria-label="size 3 select example">

                                    <!-- fetch all the added categories form category table  -->
                                    <?php
                                    $select = mysqli_query($database, "SELECT * FROM `category` WHERE `categoryType` = 'product' AND `category` = '$category'");
                                    while($rec = mysqli_fetch_array($select)){
                                    ?>

                                        <option value="<?php echo $rec['category'] ?>"><?php echo $rec['category'] ?></option>

                                    <?php
                                    }
                                    ?>
                                    
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Select Subcategory</label>
                                    <select class="form-select" name="category" aria-label="size 3 select example">

                                        <!-- fetch all the added categories form category table  -->
                                        <?php
                                        $select = mysqli_query($database, "SELECT * FROM `category` WHERE `categoryType` = 'product'");
                                        while($rec = mysqli_fetch_array($select)){
                                        ?>

                                            <option value="<?php echo $rec['category'] ?>"><?php echo $rec['category'] ?></option>

                                        <?php
                                        }
                                        ?>

                                        <!-- <option value="4">Bata</option>
                                        <option value="5">Service</option>
                                        <option value="6">Ndure</option> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card mb-3">
                        <div
                            class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Pricing Info</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Product Price Old</label>
                                    <input type="text" class="form-control" name="pOldPrice" placeholder="$350">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Product Price New</label>
                                    <input type="text" class="form-control" name="pNewPrice" placeholder="$355">
                                </div>
                                <div class="col-md-12">
                                        <label class="form-label">Product Coupon</label>
                                        <?php $coupon = "CPN-" .rand(000000 , 999999); ?>
                                        <input type="text" readonly name="coupon" class="form-control" value="<?php echo $coupon?>">

                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div
                            class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Visibility Status</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Published" name="vStatus" checked>
                                <label class="form-label">
                                    Published
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Hidden" type="radio" name="vStatus">
                                <label class="form-label">
                                    Hidden
                                </label>
                            </div>
                            <div class="form-check py-1">
                                <input class="form-check-input" type="radio" name="couponsstatus">
                                <label class="form-label"> Scheduled </label> <br> <br>
                                <label class="form-check-label">Publish Date</label>
                                <input type="date" class="form-control w-100" value="" placeholder="2021-03-28">
                                <label class="form-check-label"> Select Time </label>
                                <input type="time" class="form-control w-100" value="" placeholder="12:01:00 AM">
                            </div>
                        </div>
                    </div>

                   
            </div>

        </div><!-- Row end  -->

    </div>
</div>


<!-- Modal Cropper-->
<div class="modal docs-cropped" id="getCroppedCanvasModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cropped</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white border lift" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.html">Download</a>
            </div>
        </div>
    </div>
</div>


<?php
include"footer.php";
?>