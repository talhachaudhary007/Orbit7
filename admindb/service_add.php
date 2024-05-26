<?php
include "php/database.php";
include"header.php";
include"sidebar.php";
include"navbar.php";
?>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">

        <form action="php/addservice.php" method="POST" enctype="multipart/form-data">

            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Add Service</h3>
                        <button type="submit" name="addservice"
                            class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                    </div>
                </div>
            </div> <!-- Row end  -->

            <div class="row g-3 mb-3">
                <div class="col-xl-8 col-lg-8">

                    <div class="row g-3 mb-2">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Choose Picture</h6>
                                </div>
                                <div id="preview-container" style="margin:auto"></div>

                                <div class="card-body pb-4">
                                    <input type="file" id="file-input" class="form-control" name="image">
                                    <small class="d-block text-muted mt-2">Only portrait or square images, 15M max and 2000px max-height.</small>
                                </div>
                            </div>
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
                      reader.onload = function (e) {
                          $("<div class='preview-box'> <div class='preview'><img src='" + e.target.result + "'><button class='delete gallery-button' >Delete</button></div> </div>").appendTo("#preview-container");
                      };
                      reader.readAsDataURL(files[i]);
                  }
              }
          });
          $("#preview-container").on("click", ".delete", function () {
              $(this).parent(".preview").remove();
              $("#file-input").val(""); // Clear input value if needed
          });
      });
  </script>
  <!-- script ends -->

                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <h6 class="mb-0 fw-bold pb-4">Choose Category</h6>
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <label class="form-label">Select one Category</label>
                                            <select class="form-select" name="category"
                                                aria-label="size 3 select example">

                                                <!-- fetch all the added categories form category table  -->
                                                <?php
                                            $select = mysqli_query($database, "SELECT * FROM `category` WHERE `categoryType` = 'service'");
                                             while($rec = mysqli_fetch_array($select)){
                                            ?>

                                                <option value="<?php echo $rec['category'] ?>">
                                                    <?php echo $rec['category'] ?>
                                                </option>

                                                <?php
                                             }
                                            ?>


                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Basic information</h6>
                            </div>
                            <div class="card-body">

                                <div class="row g-3 align-items-center">

                                    <div class="col-md-6">
                                        <label class="form-label">Service Name</label>
                                        <input type="text" name="title" class="form-control" placeholder="Service Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Short Description</label>
                                        <input type="text" name="description" class="form-control"
                                            placeholder="short description of service">
                                    </div>

                                </div>

                                <div class="col-md-12 pt-4">
                                    <label class="form-label">Complete Details</label>
                                    <textarea class="form-control" name="detail" placeholder="Enter complete details..."
                                        id="" rows="1"></textarea>
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
                                    <input class="form-check-input" type="radio" name="visibillity" value="Published" checked>
                                    <label class="form-check-label">
                                        Published
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Hidden" name="visibillity">
                                    <label class="form-check-label">
                                        Hidden
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div
                                class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Tags</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group demo-tagsinput-area">
                                    <div class="form-line">
                                        <input type="text" name="tags" class="form-control" data-role="tagsinput"
                                            value="Amsterdam,Washington,Sydney,Beijing,Cairo">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div
                                class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Service Info</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">

                                    <div class="col-md-12">
                                        <label class="form-label">Service Coupon</label>
                                        <?php $coupon = "CPN-" .rand(000000 , 999999); ?>
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
include"footer.php";
?>