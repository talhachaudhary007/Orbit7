<?php
include "php/database.php";
include "header.php";
include "sidebar.php";
include "navbar.php";

// get id from category list page 
$id = $_GET['id'];

$select = mysqli_query($database, "SELECT * FROM `category` WHERE `id` = '$id'");
$rec = mysqli_fetch_array($select);
$Type = $rec['categoryType'];
$ctg = $rec['category'];

// here we chk visibility and store it in variable to active that specific radio button value
$status = $rec['visibility'];

?>


<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">

        <form action="php/updatecategory.php" method="POST" id="">

            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Edit
                            <?php echo $rec['category'] ?>
                        </h3>
                        <button type="submit" name="updateCategory"
                            class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                    </div>
                </div>

            </div> <!-- Row end  -->

            <div class="row g-3 ">

                <div class="col-xl-8 col-lg-8">

                    <div class="card ">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Edit Category information</h6>
                        </div>
                        <div class="card-body">

                            <div class="row align-items-center">

                                <input type="text" name="id" Hidden readonly value="<?php echo $rec['id'] ?>"
                                    class="form-control">

                                <div class="col-md-6">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" name="category" readonly value="<?php echo $rec['category'] ?>"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Short Description</label>
                                    <input type="text" name="description" value="<?php echo $rec['detail'] ?>"
                                        class="form-control">
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="sticky-lg-top">

                        <div class="card">
                            <div
                                class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Visibility Status</h6>
                            </div>
                            <div class="card-body py-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Published" name="visibility"
                                        <?php if($status=='Published' ) echo "checked" ; ?>>
                                    <label class="form-check-label">Published</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Hidden" name="visibility" <?php
                                        if($status=='Hidden' ) echo "checked" ; ?>>
                                    <label class="form-check-label"> Hidden </label>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <!-- here we show all the saved items  -->
            <div class="row g-3 mt-1">
                <div class="col-12">
                    <div class="card mb-3">
                        <div
                            class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Subcategories</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group demo-tagsinput-area">
                                <div class="form-line">
                                    <input type="text" name="subcategories" class="form-control" data-role="tagsinput" value="<?php echo $rec['subcategories'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- here we show all the saved items  -->

            <div class="row g-3 mt-1">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-end pt-3 px-4">
                        <h6 class="mb-0 fw-bold pb-4">Select Given Items</h6>
                        <div class="order-1 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 me-2">
                            <div class="input-group flex-nowrap input-group-lg ">
                                <input type="search" class="form-control" placeholder="Search" aria-label="search"
                                    aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class=" list-group">
                            <div class="row" id="TypeRecords">


    <!-- for service items -->

        <?php

        if ($Type == 'service') {
            $select = mysqli_query($database, "SELECT * FROM `service` WHERE `categoryType` = '$Type'");
            while ($rec = mysqli_fetch_array($select)) {

                $check = mysqli_query($database, "SELECT * FROM `service_meta` WHERE `category` = '$ctg'");
                while ($checked = mysqli_fetch_array($check)) {
                    $check_sigma = $checked['ItemID'];
                    $check_meta = explode(",", $check_sigma);

                    // 
                    if (in_array($rec['id'], $check_meta)) {
                        $checked_status = "checked"; 
                    } else {
                        $checked_status = ""; 
                    }
                }

                ?>


                                <div class="col-md-6">

                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="" name="itemID[]"
                                                value="<?php echo $rec['id']; ?>" <?php echo $checked_status; ?>>
                                            <label class="custom-control-label" for="checkbox1"></label>
                                        </div>
                                        <div class="px-2 flex-grow-1" style="line-height:5px;">
                                            <p style="transform: translateY(6px);">
                                                <?php echo $rec['title'] ?>
                                            </p>
                                        </div>
                                        <div class="ml-auto responsive-img">
                                            <img src="assets/images/service-img/<?php echo $rec['image'] ?>"
                                                class="img-fluid" alt="Img">
                                        </div>
                                    </li>
                                </div>

                                <?php
    }
}

                elseif($Type =='product'){

                    $select = mysqli_query($database, "SELECT * FROM `service` WHERE `categoryType` = '$Type'");
                    while($rec = mysqli_fetch_array($select)){
                ?>
                                <div class="col-md-6">
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="itemID[]"
                                                value="<?php echo $rec['id'] ?>" id="checkbox1">
                                            <label class="custom-control-label" for="checkbox1"></label>
                                        </div>
                                        <div class="px-2 flex-grow-1" style="line-height:5px;">
                                            <p style="transform: translateY(6px);">
                                                <?php echo $rec['title'] ?>
                                            </p>
                                        </div>
                                        <div class="ml-auto responsive-img">
                                            <img src="assets/images/service-img/<?php echo $rec['image'] ?>"
                                                class="img-fluid" alt="Img">
                                        </div>
                                    </li>

                                </div>

                                <?php 
                        }
                            }
                    ?>

                                <!-- loop and if condition both ends here  -->


                            </div>

                        </ul>

                    </div>
                </div>

            </div>

        </form>
    </div>


    <?php
include "footer.php";
?>