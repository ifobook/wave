<?php require_once('../app.php');
require_once('include/header.php');
$errors = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);



?>
<!-- end app-header -->
<!-- begin app-container -->
<div class="app-container">
    <!-- begin app-nabar -->
    <?= require_once('include/sidenav.php') ?>
    <!-- end app-navbar -->
    <!-- begin app-main -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <!-- begin page title -->
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-sm-0">
                            <h1>Homes <small class="mr-5 mx-5 m-5 text-success">
                                    <a href="#modal" class="mt-10 btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                                        <i class="fa fa-plus"></i> Add Property</a></small></h1>

                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <nav>
                                <ol class="breadcrumb p-0 m-b-0">

                                    <li class="breadcrumb-item">
                                        <a href="index.html"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        Dashboard
                                    </li>
                                    <li class="breadcrumb-item active text-primary" aria-current="page">Home page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <?php if (!empty($errors)) {
                alertMsg('Sorry something went wrong!', $errors);
            } ?>
            <strong>
                <p style="font-size: large; color: green;" class=" mb-3">
                    <?php
                    if (isset($_SESSION["success"])) {
                        echo $_SESSION["success"];
                    }
                    unset($_SESSION['success']);

                    ?></p>
            </strong>
            <!-- end row -->
            <!-- begin row -->
            <div class="container-fluid bg-dark mb-20 p-0">
                <h3 class="text-white m-0 p-3">USA PROPERTIES</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">

                        <?php
                        $listing = " ";
                        $sql = "SELECT * FROM properties WHERE country = 'usa'";
                        $result = $conn->query($sql);
                        while ($data = $result->fetch_assoc()) {
                            extract($data); ?>

                            <div class="col-xl-6 col-xxl-4 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title" id="p_id"><?= $name ?></h4>
                                        <a><a class="mr-3" href="#modal" class="mt-10 btn btn-primary btn-lg" data-toggle="modal" data-target="#modal<?= $p_id ?>"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></p>
                                    </div>
                                    <div class="card-body">
                                        <div class="blog">
                                            <img class="img-fluid" src="<?= $image1 ?>" alt="" style="width: 100%;">
                                            <h4 class="mt-3">Id: <strong><?= $p_id ?></strong></h4>
                                            <p class="mt-1"><?= $description ?></p>
                                        </div>
                                        <div class="product-bar m-t-5">
                                            <div class="d-flex">
                                                <span><b>price: <?= $price ?></b></span>
                                                <span class="ml-auto"><b>net return: <?= $net_return ?></b></span>
                                            </div>
                                            <div class="d-flex">
                                                <span><i class="fa fa-location-arrow"></i> <b><?= $address ?></b></span>
                                                <span class="ml-auto"><i class="fa fa-bookmark"></i><b> <?= $type ?></b></span>
                                            </div>
                                            <div class="d-flex">
                                                <span><i class="fa fa-bed"></i> <b><?= $bedroom ?></b></span>
                                                <span class="ml-auto"><i class="fa fa-bath"></i><b> <?= $bathroom ?></b></span>
                                            </div>
                                            <div class="d-flex">
                                                <span><i class="fa fa-home"></i> <b><?= $city ?></b></span>
                                                <span class="ml-auto"><i class="fa fa-gg-circle"></i><b> <?= $state ?></b></span>
                                            </div>

                                            <div class="d-flex">
                                                <span><i class="fa fa-circle"></i> <b><?= $size ?></b></span>
                                                <span class="ml-auto"><i class="fa fa-deaf"></i><b> <?= $status ?></b></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for updating usa properties-->
                            <div class="modal fade" id="modal<?= $p_id ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Property</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="prop_id" action="<?= ROOT ?>actions/update_prop.php" method="post" enctype="multipart/form-data">
                                            <div class="modal-body mx-3 my-3">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control hidden" name="prop_id" id="prop_id" value="<?= $p_id ?>" hidden>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="property_id" id="property_id" class="form-control" placeholder="four digit property id" value="<?= $p_id ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="property_name" id="property_name" class="form-control" placeholder="full property name" value="<?= $name ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="address" id="address" class="form-control" placeholder="full property address" value="<?= $address ?>">
                                                </div>
                                                <div class="form-group">
                                                    <select class="custom-select" name="country" id="country">
                                                        <option selected value="<?= $country ?>"><?= $country ?></option>
                                                        <option value="usa">USA</option>
                                                        <option value="uk">UK</option>
                                                        <option value="spain">Spain</option>
                                                        <option value="others">others</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="city" id="city" class="form-control" placeholder="property city" value="<?= $city ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="state" id="state" class="form-control" placeholder=" property state" value="<?= $state ?>">
                                                </div>
                                                <div class="form-group">
                                                    <select class="custom-select" name="type" id="type">
                                                        <option selected value="<?= $type ?>"><?= $type ?></option>
                                                        <option value="villa">Villa</option>
                                                        <option value="apartment">Apartment</option>
                                                        <option value="house">House</option>
                                                        <option value="others">Others</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                <select class="custom-select" name="status" id="status">
                                                    <option selected value="<?=$status?>"> <?=$status?> </option>
                                                    <option value="Available">Available</option>
                                                    <option value="Under Renovation">Under Renovation</option>
                                                    <option value="Sold">Sold</option>
                                                </select>
                                            </div>
                                                <div class="form-group">
                                                    <input type="number" name="bedroom" id="bedroom" class="form-control" placeholder="bedroom" value="<?= $bedroom ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="bathroom" id="bathroom" class="form-control" placeholder="Bathroom" value="<?= $bathroom ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="size" id="size" class="form-control" placeholder="property size" value="<?= $size ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="price" id="price" class="form-control" placeholder="property price" value="<?= $price ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="running_cost" id="running_cost" class="form-control" placeholder="running cost" value="<?= $running ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="investment_return" id="investment_return" class="form-control" placeholder="investment return" value="<?= $net_return ?>">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="property description" value="<?= $description ?>"><?= $description ?></textarea>
                                                </div>
                                                <hr>
                                                <center>
                                                    <h4>Property Images</h4>
                                                </center>
                                                <div class="form-group">
                                                    <label for="img1">image-1</label>
                                                    <input type="file" name="img1" id="img1" class="form-control">
                                                    <input type="hidden" name="img_locate1" value="<?= $image1 ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="img2">image-2</label>
                                                    <input type="file" name="img2" id="img2" class="form-control">
                                                    <input type="hidden" name="img_locate2" value="<?= $image2 ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="img3">image-3</label>
                                                    <input type="file" name="img3" id="img3" class="form-control">
                                                    <input type="hidden" name="img_locate3" value="<?= $image3 ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="img4">image-4</label>
                                                    <input type="file" name="img4" id="img4" class="form-control">
                                                    <input type="hidden" name="img_locate4" value="<?= $image4 ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="img5">image-5</label>
                                                    <input type="file" name="img5" id="img5" class="form-control">
                                                    <input type="hidden" name="img_locate5" value="<?= $image5 ?>">
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        <?php
                        };

                        ?>

                    </div>
                </div>
            </div>

            <div class="container-fluid bg-dark mb-20 p-0">
                <h3 class="text-white m-0 p-3">UK PROPERTIES</h3>
            </div>
            <div class="row">

                <?php
                $listing = " ";
                $sql = "SELECT * FROM properties WHERE country = 'uk'";
                $result = $conn->query($sql);
                while ($data = $result->fetch_assoc()) {
                    extract($data); ?>

                    <div class="col-xl-6 col-xxl-4 m-b-30">
                        <div class="card card-statistics h-100 mb-0">
                            <div class="card-header">
                                <h4 class="card-title"><?= $name ?></h4>
                                <a><a class="mr-3" href="#modal" data-toggle="modal" data-target="#modal<?= $p_id ?>"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></p>
                            </div>
                            <div class="card-body">
                                <div class="blog">
                                    <img class="img-fluid" src="<?= $image1 ?>" alt="" style="width: 100%;">
                                    <h4 class="mt-3">Id: <strong><?= $p_id ?></strong></h4>
                                    <p class="mt-1"><?= $description ?></p>
                                </div>
                                <div class="product-bar m-t-5">
                                    <div class="d-flex">
                                        <span><b>price: <?= $price ?></b></span>
                                        <span class="ml-auto"><b>net return: <?= $net_return ?></b></span>
                                    </div>
                                    <div class="d-flex">
                                        <span><i class="fa fa-location-arrow"></i> <b><?= $address ?></b></span>
                                        <span class="ml-auto"><i class="fa fa-bookmark"></i><b> <?= $type ?></b></span>
                                    </div>
                                    <div class="d-flex">
                                        <span><i class="fa fa-bed"></i> <b><?= $bedroom ?></b></span>
                                        <span class="ml-auto"><i class="fa fa-bath"></i><b> <?= $bathroom ?></b></span>
                                    </div>
                                    <div class="d-flex">
                                        <span><i class="fa fa-home"></i> <b><?= $city ?></b></span>
                                        <span class="ml-auto"><i class="fa fa-gg-circle"></i><b> <?= $state ?></b></span>
                                    </div>

                                    <div class="d-flex">
                                        <span><i class="fa fa-circle"></i> <b><?= $size ?></b></span>
                                        <span class="ml-auto"><i class="fa fa-deaf"></i><b> <?= $status ?></b></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for updating uk properties-->
                    <div class="modal fade" id="modal<?= $p_id ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Property</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="prop_id" action="<?= ROOT ?>actions/update_prop.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-body mx-3 my-3">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control hidden" name="prop_id" id="prop_id" value="<?= $p_id ?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="property_id" id="property_id" class="form-control" placeholder="four digit property id" value="<?= $p_id ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="property_name" id="property_name" class="form-control" placeholder="full property name" value="<?= $name ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="address" id="address" class="form-control" placeholder="full property address" value="<?= $address ?>">
                                        </div>
                                        <div class="form-group">
                                            <select class="custom-select" name="country" id="country">
                                                <option selected value="<?= $country ?>"><?= $country ?></option>
                                                <option value="usa">USA</option>
                                                <option value="uk">UK</option>
                                                <option value="spain">Spain</option>
                                                <option value="others">others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="city" id="city" class="form-control" placeholder="property city" value="<?= $city ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="state" id="state" class="form-control" placeholder=" property state" value="<?= $state ?>">
                                        </div>
                                        <div class="form-group">
                                            <select class="custom-select" name="type" id="type">
                                                <option selected value="<?= $type ?>"><?= $type ?></option>
                                                <option value="villa">Villa</option>
                                                <option value="apartment">Apartment</option>
                                                <option value="house">House</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                                <select class="custom-select" name="status" id="status">
                                                    <option selected value="<?=$status?>"><?=$status?></option>
                                                    <option value="Available">Available</option>
                                                    <option value="Under Renovation">Under Renovation</option>
                                                    <option value="Sold">Sold</option>
                                                </select>
                                            </div>
                                        <div class="form-group">
                                            <input type="number" name="bedroom" id="bedroom" class="form-control" placeholder="bedroom" value="<?= $bedroom ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="bathroom" id="bathroom" class="form-control" placeholder="Bathroom" value="<?= $bathroom ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="size" id="size" class="form-control" placeholder="property size" value="<?= $size ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="price" id="price" class="form-control" placeholder="property price" value="<?= $price ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="running_cost" id="running_cost" class="form-control" placeholder="running cost" value="<?= $running ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="investment_return" id="investment_return" class="form-control" placeholder="investment return" value="<?= $net_return ?>">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="property description" value="<?= $description ?>"><?= $description ?></textarea>
                                        </div>
                                        <hr>
                                        <center>
                                            <h4>Property Images</h4>
                                        </center>
                                        <div class="form-group">
                                            <label for="img1">image-1</label>
                                            <input type="file" name="img1" id="img1" class="form-control">
                                            <input type="hidden" name="img_locate1" value="<?= $image1 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="img2">image-2</label>
                                            <input type="file" name="img2" id="img2" class="form-control">
                                            <input type="hidden" name="img_locate2" value="<?= $image2 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="img3">image-3</label>
                                            <input type="file" name="img3" id="img3" class="form-control">
                                            <input type="hidden" name="img_locate3" value="<?= $image3 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="img4">image-4</label>
                                            <input type="file" name="img4" id="img4" class="form-control">
                                            <input type="hidden" name="img_locate4" value="<?= $image4 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="img5">image-5</label>
                                            <input type="file" name="img5" id="img5" class="form-control">
                                            <input type="hidden" name="img_locate5" value="<?= $image5 ?>">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                <?php
                };

                ?>

            </div>

            <div class="container-fluid bg-dark mb-20 p-0">
                <h3 class="text-white m-0 p-3">Spain PROPERTIES</h3>
            </div>
            <div class="row">
                <div class="row" style="z-index: 1;">

                    <?php
                    $listing = " ";
                    $sql = "SELECT * FROM properties WHERE country = 'spain'";
                    $result = $conn->query($sql);
                    while ($data = $result->fetch_assoc()) {
                        extract($data); ?>
                        <!-- onclick="prop('<?//= $p_id ?>')" -->
                        <div class="col-xl-6 col-xxl-4 m-b-30">
                            <div class="card card-statistics h-100 mb-0">
                                <div class="card-header">
                                    <h4 class="card-title"><?= $name ?></h4>
                                    <a><a class="mr-3" href="#modal" data-toggle="modal" data-target="#modal<?= $p_id ?>"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></p>
                                </div>
                                <div class="card-body">
                                    <div class="blog">
                                        <img class="img-fluid" src="<?= $image1 ?>" alt="" style="width: 100%;">
                                        <h4 class="mt-3">Id: <strong><?= $p_id ?></strong></h4>
                                        <p class="mt-1"><?= $description ?></p>
                                    </div>
                                    <div class="product-bar m-t-5">
                                        <div class="d-flex">
                                            <span><b>price: <?= $price ?></b></span>
                                            <span class="ml-auto"><b>net return: <?= $net_return ?></b></span>
                                        </div>
                                        <div class="d-flex">
                                            <span><i class="fa fa-location-arrow"></i> <b><?= $address ?></b></span>
                                            <span class="ml-auto"><i class="fa fa-bookmark"></i><b> <?= $type ?></b></span>
                                        </div>
                                        <div class="d-flex">
                                            <span><i class="fa fa-bed"></i> <b><?= $bedroom ?></b></span>
                                            <span class="ml-auto"><i class="fa fa-bath"></i><b> <?= $bathroom ?></b></span>
                                        </div>
                                        <div class="d-flex">
                                            <span><i class="fa fa-home"></i> <b><?= $city ?></b></span>
                                            <span class="ml-auto"><i class="fa fa-gg-circle"></i><b> <?= $state ?></b></span>
                                        </div>

                                        <div class="d-flex">
                                            <span><i class="fa fa-circle"></i> <b><?= $size ?></b></span>
                                            <span class="ml-auto"><i class="fa fa-deaf"></i><b> <?= $status ?></b></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for updating Spain properties-->
                        <div class="modal fade" id="modal<?= $p_id ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Property</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="prop_id" action="<?= ROOT ?>actions/update_prop.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body mx-3 my-3">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control hidden" name="prop_id" id="prop_id" value="<?= $p_id ?>" hidden>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="property_id" id="property_id" class="form-control" placeholder="four digit property id" value="<?= $p_id ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="property_name" id="property_name" class="form-control" placeholder="full property name" value="<?= $name ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="address" id="address" class="form-control" placeholder="full property address" value="<?= $address ?>">
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" name="country" id="country">
                                                    <option selected value="<?= $country ?>"><?= $country ?></option>
                                                    <option value="usa">USA</option>
                                                    <option value="uk">UK</option>
                                                    <option value="spain">Spain</option>
                                                    <option value="others">others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="city" id="city" class="form-control" placeholder="property city" value="<?= $city ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="state" id="state" class="form-control" placeholder=" property state" value="<?= $state ?>">
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" name="type" id="type">
                                                    <option selected value="<?= $type ?>"><?= $type ?></option>
                                                    <option value="villa">Villa</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="house">House</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" name="status" id="status">
                                                    <option selected value="<?=$status?>"><?=$status?></option>
                                                    <option value="Available">Available</option>
                                                    <option value="Under Renovation">Under Renovation</option>
                                                    <option value="Sold">Sold</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="bedroom" id="bedroom" class="form-control" placeholder="bedroom" value="<?= $bedroom ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="bathroom" id="bathroom" class="form-control" placeholder="Bathroom" value="<?= $bathroom ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="size" id="size" class="form-control" placeholder="property size" value="<?= $size ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="price" id="price" class="form-control" placeholder="property price" value="<?= $price ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="running_cost" id="running_cost" class="form-control" placeholder="running cost" value="<?= $running ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="investment_return" id="investment_return" class="form-control" placeholder="investment return" value="<?= $net_return ?>">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="property description" value="<?= $description ?>"><?= $description ?></textarea>
                                            </div>
                                            <hr>
                                            <center>
                                                <h4>Property Images</h4>
                                            </center>
                                            <div class="form-group">
                                                <label for="img1">image-1</label>
                                                <input type="file" name="img1" id="img1" class="form-control">
                                                <input type="hidden" name="img_locate1" value="<?= $image1 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="img2">image-2</label>
                                                <input type="file" name="img2" id="img2" class="form-control">
                                                <input type="hidden" name="img_locate2" value="<?= $image2 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="img3">image-3</label>
                                                <input type="file" name="img3" id="img3" class="form-control">
                                                <input type="hidden" name="img_locate3" value="<?= $image3 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="img4">image-4</label>
                                                <input type="file" name="img4" id="img4" class="form-control">
                                                <input type="hidden" name="img_locate4" value="<?= $image4 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="img5">image-5</label>
                                                <input type="file" name="img5" id="img5" class="form-control">
                                                <input type="hidden" name="img_locate5" value="<?= $image5 ?>">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    };

                    ?>

                </div>
            </div>

            <div class="container-fluid bg-dark mb-20 p-0">
                <h3 class="text-white m-0 p-3">other PROPERTIES</h3>
            </div>
            <div class="row">
                <div class="row">

                    <?php
                    $listing = " ";
                    $sql = "SELECT * FROM properties WHERE country = 'others'";
                    $result = $conn->query($sql);
                    while ($data = $result->fetch_assoc()) {
                        extract($data); ?>
                        <!-- onclick="prop('<?//= $p_id ?>')" -->
                        <div class="col-xl-6 col-xxl-4 m-b-30">
                            <div class="card card-statistics h-100 mb-0">
                                <div class="card-header">
                                    <h4 class="card-title"><?= $name ?></h4>
                                    <a><a class="mr-3" href="#modal" data-toggle="modal" data-target="#modal<?= $p_id ?>"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></p>
                                </div>
                                <div class="card-body">
                                    <div class="blog">
                                        <img class="img-fluid" src="<?= $image1 ?>" alt="" style="width: 100%;">
                                        <h4 class="mt-3">Id: <strong><?= $p_id ?></strong></h4>
                                        <p class="mt-1"><?= $description ?></p>
                                    </div>
                                    <div class="product-bar m-t-5">
                                        <div class="d-flex">
                                            <span><b>price: <?= $price ?></b></span>
                                            <span class="ml-auto"><b>net return: <?= $net_return ?></b></span>
                                        </div>
                                        <div class="d-flex">
                                            <span><i class="fa fa-location-arrow"></i> <b><?= $address ?></b></span>
                                            <span class="ml-auto"><i class="fa fa-bookmark"></i><b> <?= $type ?></b></span>
                                        </div>
                                        <div class="d-flex">
                                            <span><i class="fa fa-bed"></i> <b><?= $bedroom ?></b></span>
                                            <span class="ml-auto"><i class="fa fa-bath"></i><b> <?= $bathroom ?></b></span>
                                        </div>
                                        <div class="d-flex">
                                            <span><i class="fa fa-home"></i> <b><?= $city ?></b></span>
                                            <span class="ml-auto"><i class="fa fa-gg-circle"></i><b> <?= $state ?></b></span>
                                        </div>

                                        <div class="d-flex">
                                            <span><i class="fa fa-circle"></i> <b><?= $size ?></b></span>
                                            <span class="ml-auto"><i class="fa fa-deaf"></i><b> <?= $status ?></b></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for updating other properties-->
                        <div class="modal fade" id="modal<?= $p_id ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Property</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="prop_id" action="<?= ROOT ?>actions/update_prop.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body mx-3 my-3">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control hidden" name="prop_id" id="prop_id" value="<?= $p_id ?>" hidden>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="property_id" id="property_id" class="form-control" placeholder="four digit property id" value="<?= $p_id ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="property_name" id="property_name" class="form-control" placeholder="full property name" value="<?= $name ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="address" id="address" class="form-control" placeholder="full property address" value="<?= $address ?>">
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" name="country" id="country">
                                                    <option selected value="<?= $country ?>"><?= $country ?></option>
                                                    <option value="usa">USA</option>
                                                    <option value="uk">UK</option>
                                                    <option value="spain">Spain</option>
                                                    <option value="others">others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="city" id="city" class="form-control" placeholder="property city" value="<?= $city ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="state" id="state" class="form-control" placeholder=" property state" value="<?= $state ?>">
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" name="type" id="type">
                                                    <option selected value="<?= $type ?>"><?= $type ?></option>
                                                    <option value="villa">Villa</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="house">House</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" name="status" id="status">
                                                    <option selected value="<?=$status?>"><?=$status?></option>
                                                    <option value="Available">Available</option>
                                                    <option value="Under Renovation">Under Renovation</option>
                                                    <option value="Sold">Sold</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="bedroom" id="bedroom" class="form-control" placeholder="bedroom" value="<?= $bedroom ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="bathroom" id="bathroom" class="form-control" placeholder="Bathroom" value="<?= $bathroom ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="size" id="size" class="form-control" placeholder="property size" value="<?= $size ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="price" id="price" class="form-control" placeholder="property price" value="<?= $price ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="running_cost" id="running_cost" class="form-control" placeholder="running cost" value="<?= $running ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="investment_return" id="investment_return" class="form-control" placeholder="investment return" value="<?= $net_return ?>">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="property description" value="<?= $description ?>"><?= $description ?></textarea>
                                            </div>
                                            <hr>
                                            <center>
                                                <h4>Property Images</h4>
                                            </center>
                                            <div class="form-group">
                                                <label for="img1">image-1</label>
                                                <input type="file" name="img1" id="img1" class="form-control">
                                                <input type="hidden" name="img_locate1" value="<?= $image1 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="img2">image-2</label>
                                                <input type="file" name="img2" id="img2" class="form-control">
                                                <input type="hidden" name="img_locate2" value="<?= $image2 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="img3">image-3</label>
                                                <input type="file" name="img3" id="img3" class="form-control">
                                                <input type="hidden" name="img_locate3" value="<?= $image3 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="img4">image-4</label>
                                                <input type="file" name="img4" id="img4" class="form-control">
                                                <input type="hidden" name="img_locate4" value="<?= $image4 ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="img5">image-5</label>
                                                <input type="file" name="img5" id="img5" class="form-control">
                                                <input type="hidden" name="img_locate5" value="<?= $image5 ?>">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    };

                    ?>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->
</div>

<!-- Modal for adding properties-->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Property</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= ROOT ?>actions/add_property.php" method="post" enctype="multipart/form-data">
                <div class="modal-body mx-3 my-3">
                    <div class="form-group">
                        <input type="number" name="property_id" id="property_id" class="form-control" placeholder="four digit property id">
                    </div>
                    <div class="form-group">
                        <input type="text" name="property_name" id="property_name" class="form-control" placeholder="full property name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" id="address" class="form-control" placeholder="full property address">
                    </div>
                    <div class="form-group">
                        <select class="custom-select" name="country" id="country">
                            <option selected>property country</option>
                            <option value="usa">USA</option>
                            <option value="uk">UK</option>
                            <option value="spain">Spain</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" id="city" class="form-control" placeholder="property city">
                    </div>
                    <div class="form-group">
                        <input type="text" name="state" id="state" class="form-control" placeholder=" property state">
                    </div>
                    <div class="form-group">
                        <select class="custom-select" name="type" id="type">
                            <option selected>property type</option>
                            <option value="villa">Villa</option>
                            <option value="apartment">Apartment</option>
                            <option value="house">House</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="custom-select" name="status" id="status">
                            <option selected value="Available">Available</option>
                            <option value="Under Renovation">Under Renovation</option>
                            <option value="Sold">Sold</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" name="bedroom" id="bedroom" class="form-control" placeholder="bedroom">
                    </div>
                    <div class="form-group">
                        <input type="number" name="bathroom" id="bathroom" class="form-control" placeholder="Bathroom">
                    </div>
                    <div class="form-group">
                        <input type="number" name="size" id="size" class="form-control" placeholder="property size">
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" id="price" class="form-control" placeholder="property price">
                    </div>
                    <div class="form-group">
                        <input type="text" name="running_cost" id="running_cost" class="form-control" placeholder="running cost">
                    </div>
                    <div class="form-group">
                        <input type="text" name="investment_return" id="investment_return" class="form-control" placeholder="investment return">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="description" rows="3">property descriptions</textarea>
                    </div>
                    <hr>
                    <center>
                        <h4>Property Images</h4>
                    </center>
                    <div class="form-group">
                        <label for="img1">image-1</label>
                        <input type="file" name="img1" id="img1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img2">image-2</label>
                        <input type="file" name="img2" id="img2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img3">image-3</label>
                        <input type="file" name="img3" id="img3" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img4">image-4</label>
                        <input type="file" name="img4" id="img4" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img5">image-5</label>
                        <input type="file" name="img5" id="img5" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?= require_once('include/footer.php'); ?>