<!-- Previous file code  -->
<!-- Previous file code  -->
<!-- Previous file code  -->
<!-- Previous file code  -->


                        <div class="card-body">
                        <ul class=" list-group">
                            <div class="row" id="TypeRecords">
            
            
            <!-- when user clicks the radio button the jQuery Load funtion runs the php/html file  -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

                    <script>
                    $(".form-check-input").change(function(){
                    var type = $(this).val();
                    $("#TypeRecords").load('getItemData.php?type='+type);
                    });
                    </script>



<!-- current file code  -->
<!-- current file code  -->
<!-- current file code  -->
<!-- current file code  -->
<?php
include "php/database.php";
$Type = $_GET['type'];

// for services 
if($Type == 'service'){
    $select = mysqli_query($database, "SELECT * FROM `service` WHERE `categoryType` = '$Type'");
    while($rec = mysqli_fetch_array($select)){
  
?>

                            <div class="col-md-6">
                                <ul class="list-group">
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="custom-control" hidden>
                                        <input type="text" class="custom-control-input" value="<?php echo $rec['id'] ?>">
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="">
                                        <label class="custom-control-label" for="checkbox1"></label>
                                    </div>
                                    <div class="px-2 flex-grow-1" style="line-height:5px;">
                                        <p style="transform: translateY(6px);"><?php echo $rec['title'] ?></p>
                                    </div>
                                    <div class="ml-auto responsive-img">
                                        <img src="assets/images/service-img/<?php echo $rec['image'] ?>" class="img-fluid" alt="Img">
                                    </div>
                                </li>
                            </ul>
                                </div>
                              
<?php 
    }
        }
elseif($Type =='product'){

    $select = mysqli_query($database, "SELECT * FROM `service` WHERE `categoryType` = '$Type'");
    while($rec = mysqli_fetch_array($select)){
?>
								<div class="col-md-6">
                                <ul class="list-group">
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="custom-control" hidden>
                                        <input type="text" class="custom-control-input" value="<?php echo $rec['id'] ?>">
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="">
                                        <label class="custom-control-label" for="checkbox1"></label>
                                    </div>
                                    <div class="px-2 flex-grow-1" style="line-height:5px;">
                                        <p style="transform: translateY(6px);"><?php echo $rec['title'] ?></p>
                                    </div>
                                    <div class="ml-auto responsive-img">
                                        <img src="assets/images/service-img/<?php echo $rec['image'] ?>" class="img-fluid" alt="Img">
                                    </div>
                                </li>
                            </ul>
                                </div>
                              
<?php 
    }
        }
?>