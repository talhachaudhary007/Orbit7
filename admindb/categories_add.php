<?php
include "header.php";
include "sidebar.php";
include "navbar.php";
?>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">

        <form action="php/addcategory.php" method="POST">

            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Add Categories</h3>
                        <button type="submit" name="updateservice"
                            class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                    </div>
                </div>

            </div> <!-- Row end  -->

            <div class="row g-3 mb-3">

                <div class="col-xl-8 col-lg-8">

                    <div class="row g-3 mb-2">

                        <div class="card ">
                            <div
                                class="card-header pt-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Category Type</h6>
                            </div>
                            <div class="card-body">
                                <label class="form-label py-1">Select one option</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="service" name="categoryType"
                                                value="<?php echo'service'?>" required>
                                            <label class="form-check-label" for="service"> Service </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="product"
                                                value="<?php echo'product'?>" name="categoryType" required>
                                            <label class="form-check-label" for="product"> Product </label>
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
                                    <input class="form-check-input" type="radio" name="visibility" value="<?php echo 'Published' ?>" checked>
                                    <label class="form-check-label">
                                        Published
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="visibility" value="<?php echo 'Hidden' ?>">
                                    <label class="form-check-label">
                                        Hidden
                                    </label>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Row end  -->

                </div>


                <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Add Category information</h6>
                            </div>
                            <div class="card-body">

                                <div class="row g-3 align-items-center">
                                    
                                    <div class="col-md-6">
                                        <label class="form-label">Category Name</label>
                                        <input type="text" name="category" placeholder="Cloths" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Short Description</label>
                                        <input type="text" name="description" placeholder="Men winter clothes"
                                            class="form-control">
                                    </div>

                                </div>

                            </div>


                            <div class="col-12">
                                    <div class="card mb-3">
                                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                            <h6 class="m-0 fw-bold">Subcategories</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group demo-tagsinput-area">
                                                <div class="form-line">
                                                    <input type="text" name="subcategories" class="form-control" data-role="tagsinput"
                                                        value="Catgeory1,Catgeory2,Catgeory3,Catgeory4,Catgeory5">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </form>
        </div>


<?php
include"footer.php";
?>