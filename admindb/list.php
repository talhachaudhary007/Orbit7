<?php
// include "php/database.php";
// include "header.php";
// include "sidebar.php";
// include "navbar.php";
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
                $select = mysqli_query($database, "SELECT * FROM `category`");
                    // number of items in that category.
                    while($rec = mysqli_fetch_array($select)){
                        $ctg = $rec['category'];
                        $items = mysqli_query($database, "SELECT * FROM `service` WHERE `category` = '$ctg'");
                        $itemsTotal = mysqli_num_rows($items); // Correct way to count rows

                        ?>

                        <tr>
                            <td><strong><?php echo $rec['id'] ?></strong></td>
                            <td><?php echo $rec['categoryType'] ?></td>
                            <td><?php echo $rec['category'] ?></td>
                            <td><?php echo $itemsTotal ?></td> <!-- Display the count of items -->
                            <td><?php echo $rec['date'] ?></td>
                            <td><span class="badge bg-primary"><?php echo $rec['visibility'] ?></span></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <a href="categories_edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                    <button type="button" href="#exampleModal1" data-bs-toggle="modal" class="btn btn-outline-secondary"><i class="icofont-ui-delete text-danger"></i></button>
                                </div>
                            </td>
                        </tr>

            <?php
            }
            ?>


</tbody>
    </table>


<!-- Modal start for delete confirmation -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel">Confirm Deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this "Category" permanently? <br>You can't recover it once you delete.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" href="" class="btn btn-primary">Yes, Delete it</button>
      </div>
    </div>
  </div>
</div>
<!-- modal ends  -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






<?php
include"footer.php";
?>