<!DOCTYPE html>
<html lang="en">
    <?php include '../layouts/includes/head.php';?>
<body>
  <div class="container-scroller">
        <?php include '../layouts/includes/navbar.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">   
        <?php include '../layouts/includes/sidebar.php';?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Striped Table</h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>image</th>
                          <th>#</th>
                          <th>Name</th>
                          <th>Progress</th>
                          <th>Amount</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1"><img src="../../images/faces/face1.jpg" alt="image"/></td>
                          <td> 1 </td>
                          <td> Herman Beck</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>$ 77.99</td>
                          <td>May 15, 2015</td>
                          <td><label class="badge badge-success">Active</label></td>
                          <td><button class="badge badge-info">Edit</button><button class="badge badge-danger">Delete</button></td>
                        </tr>
                        <tr>
                          <td class="py-1"><img src="../../images/faces/face1.jpg" alt="image"/></td>
                          <td> 2 </td>
                          <td> Asmaa Muhammed</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>$ 77.99</td>
                          <td>May 15, 2015</td>
                          <td><label class="badge badge-danger">Disabled</label></td>
                          <td><button class="badge badge-info">Edit</button><button class="badge badge-danger">Delete</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <?php include '../layouts/includes/footer.php';?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
        <?php include '../layouts/includes/scripts.php';?>
</body>
</html>

