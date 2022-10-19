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
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new Category</h4>
                  <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="formFileLg" class="col-sm-2 col-form-label">Picture</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="container bg-light">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-warning">Cancel</button>
                        </div>
                    </div>
                  </form>
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

