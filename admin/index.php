      <?php require_once('../app.php');
        require_once('include/header.php');
        ?>

      <div class="app-container">
          <!-- begin app-nabar -->

          <?= require_once('include/sidenav.php'); ?>

          <!-- end app-navbar -->
          <!-- begin app-main -->

          <div class="app-main" id="main">
              <!-- begin container-fluid -->
              <div class="container-fluid">
                  <!-- begin row -->
                  <div class="row">
                      <div class="col-md-12 ">

                          <strong>
                              <p style="font-size: large; color: green;" class="m-t-10">
                                  <?php
                                    if (isset($_SESSION["success"])) {
                                        echo $_SESSION["success"];
                                    }
                                    unset($_SESSION['success']);

                                    ?></p>
                          </strong>

                          <!-- begin page title -->
                          <div class="d-block d-sm-flex flex-nowrap align-items-center">
                              <div class="page-title mb-2 mb-sm-0">
                                  <h1>users</h1>
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
                                          <li class="breadcrumb-item active text-primary" aria-current="page">users</li>
                                      </ol>
                                  </nav>
                              </div>
                          </div>
                          <!-- end page title -->
                      </div>
                  </div>
                  <!-- end row -->
                  <!-- begin row -->

                  <div class="row">
                      <div class="col-xxl-8 m-b-20">
                          <div class="card card-statistics h-100 mb-0">

                              <div class="card-body scrollbar scroll_dark pt-0" style="max-height: 450px;">
                                  <div class="datatable-wrapper table-responsive">

                                      <table id="datatable" class="table table-borderless table-striped">
                                          <thead>
                                              <tr>
                                                  <th>#</th>
                                                  <th>Name</th>
                                                  <th>Email</th>
                                                  <th>Phone</th>
                                                  <th>Total investment</th>
                                                  <th>Net return</th>
                                                  <th>Property1</th>
                                                  <th>Property2</th>
                                                  <th>Property3</th>
                                                  <th>Actions</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                                $sql = "SELECT * FROM users";
                                                $result = $conn->query($sql);
                                                while ($data = $result->fetch_assoc()) {
                                                    extract($data); ?>
                                                  <tr>
                                                      <td><?= $id ?></td>
                                                      <td><?= $username ?></td>
                                                      <td><?= $email ?></td>
                                                      <td><?= $phone ?></td>
                                                      <td><?= $total_invest ?></td>
                                                      <td><?= $net_return ?></td>
                                                      <td><?= $property1 ?></td>
                                                      <td><?= $property2 ?></td>
                                                      <td><?= $property3 ?></td>
                                                      <td> <a class="mr-3" href="javascript:void(0);" data-toggle="modal" data-target="#modelId<?= $id ?>"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                                  </tr>

                                                  <!-- Modal -->
                                                  <div class="modal fade" id="modelId<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <h5 class="modal-title">Modal title</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                              </div>
                                                              <form action="<?= ROOT ?>actions/update_user.php" method="post">
                                                                  <div class="modal-body">
                                                                      <input type="hidden" name="user_id" id="user_id" value="<?= $id ?>">
                                                                      <div class="form-group">
                                                                          <input type="text" class="form-control" name="username" id="username" placeholder="username" value="<?= $username ?>">
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?= $email ?>">
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <input type="text" class="form-control" name="phone" id="phone" placeholder="phone number" value="<?= $phone ?>">
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <input type="text" class="form-control" name="total_invest" id="total_invest" placeholder="total investment" value="<?= $total_invest ?>">
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <input type="text" class="form-control" name="net_return" id="net_return" placeholder="net return" value="<?= $net_return ?>">
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <input type="text" class="form-control" name="property1" id="property1" placeholder="property1" value="<?= $property1 ?>">
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <input type="text" class="form-control" name="property2" id="property2" placeholder="property2" value="<?= $property2 ?>">
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <input type="text" class="form-control" name="property3" id="property3" placeholder="property3" value="<?= $property3 ?>">
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                      <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                  </div>
                                                              </form>
                                                          </div>
                                                      </div>
                                                  </div>

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


                  <!-- end row -->
              </div>
              <!-- end container-fluid -->
          </div>

      </div>

      <?= require_once('include/footer.php'); ?>