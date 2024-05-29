<?php
include "php/database.php";

include "header.php";
include "sidebar.php";
include "navbar.php";

?>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <form method="post" action="php/productAdd.php" enctype="multipart/form-data">
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

                    <!-- Select Multiple files with a preview and delete button -->

                    <div class="card mb-3">
                        <div
                            class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Choose Pictures</h6>
                        </div>
                        <div class="card-body pb-4">
                            <input type="file" id="file-input" class="form-control" name="upload_mfiles[]" multiple>
                            <div id="preview-container"></div>
                            <input type="hidden" id="primary-image" name="primaryImage" value="">
                        </div>
                    </div>

                    <!-- script to view multiple files -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
        $(document).ready(function () {
            $("#file-input").on("change", function () {
                var files = $(this)[0].files;
                $("#preview-container").empty();
                if (files.length > 0) {
                    for (var i = 0; i < files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = (function (file, index) {
                            return function (e) {
                                var uniqueId = "radio-" + index;
                                $("<div class='preview-box'>\
                                    <div class='preview'>\
                                        <img src='" + e.target.result + "' alt='Preview Image'>\
                                        <input type='radio' id='" + uniqueId + "' name='primaryImageSelect' value='" + file.name + "'>\
                                        <label for='" + uniqueId + "'>Primary Image</label>\
                                        <button class='delete gallery-button' type='button'>Delete</button>\
                                    </div>\
                                </div>").appendTo("#preview-container");
                            };
                        })(files[i], i);
                        reader.readAsDataURL(files[i]);
                    }
                }
            });

            $("#preview-container").on("click", ".delete", function () {
                $(this).closest(".preview-box").remove();
                // Optionally, you can clear the file input if needed
                // $("#file-input").val("");
            });

            $("#preview-container").on("change", "input[name='primaryImageSelect']", function () {
                var primaryImage = $(this).val();
                $("#primary-image").val(primaryImage);
            });

            $("#image-upload-form").on("submit", function (e) {
                if (!$("input[name='primaryImageSelect']:checked").val()) {
                    alert("Please select a primary image.");
                    return false; // Prevent form submission
                }
            });
        });
    </script>

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
                                    <input type="text" class="form-control" placeholder="name" name="pName">
                                </div>

                                <div class="col-6">

                                    <label class="form-label">Select Category</label>
                                    <select class="form-select" id="parent_category" name="pCategory"
                                        aria-label="size 3 select example">
                                        <option id='' value="">Select Catecogry</option>
                                        <!-- fetch all the added categories form category table  -->
                                        <?php
                                                $select = mysqli_query($database, "SELECT * FROM `category` WHERE `categoryType` = 'product'");
                                                while($rec = mysqli_fetch_array($select)){
                                                ?>

                                        <option value="<?php echo $rec['id']; ?>">
                                            <?php echo $rec['category'] ?>
                                        </option>

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
                            <div class="row g-3 align-items-center">
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
                                        <input type="text" class="form-control" name="pColor" placeholder="Color">
                                    </div>

                                    <div class="form-group demo-tagsinput-area">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="pColorV" data-role="tagsinput"
                                                placeholder="red, black, yellow">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-md-12">
                                        <label class="form-label">Variant 2</label>
                                        <input type="text" class="form-control" name="pSize" placeholder="Size">
                                    </div>

                                    <div class="form-group demo-tagsinput-area">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="pSizeV" data-role="tagsinput"
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
                                    <input class="form-check-input" type="radio" value="Published" name="vStatus"
                                        checked>
                                    <label class="form-label">Published</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="Hidden" type="radio" name="vStatus">
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
                                        <input type="text" class="form-control" name="pOldPrice" placeholder="$350">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Product Price New</label>
                                        <input type="text" class="form-control" name="pNewPrice" placeholder="$355">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Stock Quantity</label>
                                        <input type="text" class="form-control" placeholder="Total Stock Quantity"
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
                                        <?php $coupon = rand(00000000 , 44444444); ?>
                                        <input type="text" readonly name="coupon" class="form-control"
                                            value="<?php echo $coupon?>">

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