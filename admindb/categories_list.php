<?php
include "php/database.php";
include "header.php";
include "sidebar.php";
include "navbar.php";
?>

<!-- Body: Body -->


<div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Categorie List</h3>
                                <a href="categories_add.php" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Add Categories</a>
                            </div>
                        </div>
                    </div> 
                    <!-- Row end  -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Type</th>
                                                <th>Categorie</th>
                                                <th>Items</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        



               
                                            <?php 
                                                    // Fetch categories
                                                    $select = mysqli_query($database, "SELECT * FROM `category`");

                                                    // Check if query was successful
                                                    if (!$select) {
                                                        // Query failed
                                                        die("Query failed: " . mysqli_error($database));
                                                    }

                                                    while($rec = mysqli_fetch_array($select)) {
                                                        $catID = $rec['id'];

                                                        // Fetch items for current category
                                                        $items_query = mysqli_query($database, "SELECT * FROM `service_meta` WHERE `catID` = $catID");
                                                        // print_r($items_query);
                                                        
                                                        // Check if query was successful
                                                        if (!$items_query) {
                                                            // Query failed
                                                            die("Query failed: " . mysqli_error($database));
                                                        }
                                                        $count = "0";

                                                        // Fetch items data
                                                        while ($item = mysqli_fetch_array($items_query)) {
                                                            // Explode the comma-separated values into an array
                                                            $ItemID_array = explode(",", $item['ItemID']);
                                                            // Count the number of items in the array
                                                            $count .= count($ItemID_array);
                                                        }
                                                        ?>

                                                        <tr>
                                                                <td><strong><?php echo $catID ?></strong></td>
                                                                <td><?php echo $rec['categoryType'] ?></td>
                                                                <td><?php echo $rec['category'] ?></td>
                                                                <td><?php echo $count ?></td>
                                                                <td><?php echo $rec['date'] ?></td>
                                                                <td><span class="badge bg-primary"><?php echo $rec['visibility'] ?></span></td>
                                                                <td>
                                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                                        <a href="categories_edit.php?id=<?php echo $catID ?>" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                                        <button type="button" href="#exampleModal1<?php echo $catID ?>" data-bs-toggle="modal" class="btn btn-outline-secondary"><i class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <!-- Modal start for delete confirmation -->
                                                            <div class="modal fade" id="exampleModal1<?php echo $rec['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Confirm Deletion </h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are you sure you want to delete "<?php echo $rec['category'] ?>" permanently? <br>You can't recover it once you delete.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                                    <a type="button" href="php/deletecategory.php?id=<?php echo $rec['id'] ?>" class="btn btn-primary">Yes, Delete it</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <!-- modal ends  -->

                                                <?php
                                                }
                                            
                                                ?>


</tbody>
    </table>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






<?php
include"footer.php";
?>