<?php
include "php/database.php";
include "header.php";
include "sidebar.php";
include "navbar.php";

$serviceCtg = $_GET['id'];
$select = mysqli_query($database, "SELECT * FROM `service` WHERE `id` = '$serviceCtg'");
$rec = mysqli_fetch_array($select);

?>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div
                    class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Service Details</h3>
                    <a name="" href="service_edit.php?id=<?php echo $rec['id'] ?>" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Edit Service</a>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="product-details">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="product-details-image mt-50">
                                        <div class="product-thumb-image">
                                            <div class="product-thumb-image-active nav flex-column nav-pills me-3"
                                                id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="single-thumb" id="v-pills-one-tab" data-bs-toggle="pill"
                                                    href="#v-pills-one" role="button" aria-controls="v-pills-one">
                                                    <img src="assets/images/product/thunb-1.jpg" alt="">
                                                </a>
                                                <a class="single-thumb" id="v-pills-two-tab" data-bs-toggle="pill"
                                                    href="#v-pills-two" role="button" aria-controls="v-pills-two">
                                                    <img src="assets/images/product/thunb-2.jpg" alt="">
                                                </a>
                                                <a class="single-thumb active" aria-current="page"
                                                    id="v-pills-three-tab" data-bs-toggle="pill" role="button"
                                                    href="#v-pills-three" aria-controls="v-pills-three">
                                                    <img src="assets/images/product/thunb-3.jpg" alt="">
                                                </a>
                                                <a class="single-thumb" id="v-pills-four-tab" data-bs-toggle="pill"
                                                    href="#v-pills-four" role="button" aria-controls="v-pills-four">
                                                    <img src="assets/images/product/thunb-4.jpg" alt="">
                                                </a>
                                                <a class="single-thumb" id="v-pills-five-tab" data-bs-toggle="pill"
                                                    href="#v-pills-five" role="button" aria-controls="v-pills-five">
                                                    <img src="assets/images/product/thunb-5.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <div class="product-image-active tab-content" id="v-pills-tabContent">
                                                <a class="single-image tab-pane fade" id="v-pills-one" role="tabpanel"
                                                    aria-labelledby="v-pills-one-tab">
                                                    <img src="assets/images/service-img/<?php echo $rec['image'] ?>" alt="">
                                                    <!-- <img src="assets/images/product/productslide-1.jpg" alt=""> -->
                                                </a>
                                                <a class="single-image tab-pane fade" id="v-pills-two" role="tabpanel"
                                                    aria-labelledby="v-pills-two-tab">
                                                    <img src="assets/images/product/productslide-2.jpg" alt="">
                                                </a>
                                                <a class="single-image tab-pane fade active show" id="v-pills-three"
                                                    role="tabpanel" aria-labelledby="v-pills-three-tab">
                                                    <img src="assets/images/product/productslide-3.jpg" alt="">
                                                </a>
                                                <a class="single-image tab-pane fade" id="v-pills-four" role="tabpanel"
                                                    aria-labelledby="v-pills-four-tab">
                                                    <img src="assets/images/product/productslide-5.jpg" alt="">
                                                </a>
                                                <a class="single-image tab-pane fade " id="v-pills-five" role="tabpanel"
                                                    aria-labelledby="v-pills-five-tab">
                                                    <img src="assets/images/product/productslide-5.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-details-content mt-45">
                                        <div class="product-price mb-4">
                                            <p><a class="fw-bold " style="color:black; border-bottom:1px solid black" href=""><?php echo $rec['category'] ?></a></p>
                                            <div class="sale-price"><?php echo $rec['title'] ?></div>
                                            <div style="font-size:20px;" class="fw-bold sale-price text-danger">120
                                                Clients</div>
                                            <div class="">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <span class="text-muted ms-3">(449 client reviews)</span>
                                            </div>
                                        </div>
                                        <p><?php echo $rec['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-body-header rounded  d-inline-flex" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#review"
                                    role="tab">Reviews</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#descriptions"
                                    role="tab">Descriptions</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#about"
                                    role="tab">About</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="review">
                            <div class="card-body">
                                <div class="row clearfix g-3">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="feedback-info sticky-top">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h2 class=" display-6 fw-bold mb-0">4.5</h2>
                                                    <small class="text-muted">based on 1,032 ratings</small>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mb-2 me-3">
                                                            <a href="#" class="rating-link active"><i
                                                                    class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i
                                                                    class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i
                                                                    class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i
                                                                    class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i
                                                                    class="bi bi-star-half text-warning"></i></a>
                                                        </span>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">5<i
                                                                    class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i>
                                                            </h6>
                                                            <span class="small text-muted">661</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar light-success-bg"
                                                                role="progressbar" style="width: 92%" aria-valuenow="92"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">4<i
                                                                    class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i>
                                                            </h6>
                                                            <span class="small text-muted">237</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar bg-info-light" role="progressbar"
                                                                style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">3<i
                                                                    class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i>
                                                            </h6>
                                                            <span class="small text-muted">76</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar bg-lightyellow" role="progressbar"
                                                                style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">2<i
                                                                    class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i>
                                                            </h6>
                                                            <span class="small text-muted">19</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar light-danger-bg "
                                                                role="progressbar" style="width: 15%" aria-valuenow="15"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">1<i
                                                                    class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i>
                                                            </h6>
                                                            <span class="small text-muted">39</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar bg-careys-pink" role="progressbar"
                                                                style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="customer-like mt-5">
                                                        <h6 class="mb-0 fw-bold ">What Customers Like</h6>
                                                        <ul class="list-group mt-3">
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-light-success">1</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Fun Factor</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">72 votes</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-light-success">2</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Great Value</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">52 votes</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-light-success">3</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>eBazar</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">35 votes</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="customer-like mt-5">
                                                        <h6 class="mb-0 fw-bold ">What Need Improvement</h6>
                                                        <ul class="list-group mt-3">
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-careys-pink">1</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Value for Money</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">12 votes</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-careys-pink">2</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Customer service</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">8 votes</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-careys-pink">3</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Product Item</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">2 votes</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <ul class="list-unstyled mb-4">
                                            <li class="card mb-2">
                                                <div class="card-body p-lg-4 p-3">
                                                    <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar9.svg"
                                                            alt="">
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <h6 class="mb-0"><span>Joan Dyer</span></h6>
                                                            <span class="text-muted">3 hours ago</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="mb-2 me-3">
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-half text-warning"></i></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-post">
                                                        <h6 class="">Top-Oculus VR</h6>
                                                        <p> A good fit for many households, this Oculus VR has a movable
                                                            deli drawer and door shelves that can accommodate gallon
                                                            containers.Though its low price means fewer features, this
                                                            pick is quiet and an energy-saving option, resulting in a
                                                            lower energy bill.</p>
                                                    </div>
                                                </div>
                                            </li> <!-- .Card End -->
                                            <li class="card mb-2">
                                                <div class="card-body p-lg-4 p-3">
                                                    <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar2.svg"
                                                            alt="">
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <h6 class="mb-0"><span>Phil Glover</span></h6>
                                                            <span class="text-muted">1 Day ago</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="mb-2 me-3">
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-half text-warning"></i></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-post">
                                                        <h6 class="">Oculus VR Full 3D</h6>
                                                        <p>I purchased this Oculus from elsewhere, on last Dipawali. As
                                                            this Oculus contains in-built DDB( means you need not to
                                                            install a separate set-top box), there is less number of
                                                            wire hanging around the set and single remote required.
                                                            Great full HD picture quality. Sound quality of the set is
                                                            far better than most of the sets of the so called big
                                                            brands.</p>
                                                    </div>
                                                </div>
                                            </li> <!-- .Card End -->
                                            <li class="card mb-2">
                                                <div class="card-body p-lg-4 p-3">
                                                    <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar3.svg"
                                                            alt="">
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <h6 class="mb-0"><span>Victor Rampling</span></h6>
                                                            <span class="text-muted">5 Day ago</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="mb-2 me-3">
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i
                                                                        class="bi bi-star-half text-warning"></i></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-post">
                                                        <h6 class="">Oculus VR Wireless Bluetooth</h6>
                                                        <p>The build quality feels really premium.Sound quality is quite
                                                            great compared to its price point.Sound quality is quite
                                                            great compared to its price point.</p>
                                                        <div>
                                                            <div class="d-flex mt-3 pt-3 border-top">
                                                                <img class="avatar rounded"
                                                                    src="assets/images/xs/avatar12.svg" alt="">
                                                                <div class="flex-fill ms-3 text-truncate">
                                                                    <p class="mb-0"><span>Karen Clark</span> <small
                                                                            class="msg-time text-muted">5 Day
                                                                            ago</small></p>
                                                                    <span class="text-muted">Hd quality is quite great
                                                                        compared to its price point.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4">
                                                            <textarea class="form-control"
                                                                placeholder="Replay"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> <!-- .Card End -->
                                        </ul>
                                        <nav aria-label="...">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item disabled">
                                                    <span class="page-link">Previous</span>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active" aria-current="page">
                                                    <span class="page-link">2</span>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div><!-- Row End -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="descriptions">
                            <div class="card-body">
                                <p><?php echo $rec['detail'] ?></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="about">
                            <div class="card-body">
                                <h3>Where can I get some?</h3>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Phasellus accumsan orci sit amet orci malesuada tristique.</li>
                                    <li>Morbi varius odio et lorem ornare, auctor rutrum est rhoncus.</li>
                                    <li>Vivamus consequat tortor eu consequat eleifend.</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet sem in
                                    erat volutpat, nec sollicitudin erat varius. Sed feugiat, leo varius facilisis
                                    sagittis, lorem magna cursus tortor, molestie venenatis odio nunc quis eros.Morbi
                                    volutpat dui vitae efficitur posuere.</p>
                                <p>Donec ut libero imperdiet, eleifend ipsum vitae, laoreet nisl. Morbi volutpat dui
                                    vitae efficitur posuere. Pellentesque mi libero, dapibus ut tellus eu, volutpat
                                    viverra magna. Phasellus vitae erat porta, condimentum enim ac, luctus dui. Fusce
                                    dignissim, neque quis aliquet posuere, ante tortor lobortis eros, et facilisis dolor
                                    ipsum malesuada ante.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row end  -->

    </div>
</div>

<?php
            include"footer.php";
            ?>