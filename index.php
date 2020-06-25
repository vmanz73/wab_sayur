<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <?php
include ("db/get_data.php");
if ($_GET['status'] == 'ok'){
  echo '<script type="text/javascript">';
echo ' alert("Data Disimpan")';  //not showing an alert box.
echo '</script>';
}
?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MySayur</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Harga</span></a>
      </li>
      <!-- Divider -->
      
      <!-- Heading -->
        <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Timbangan Sayur</h1>
          

        </div>
        <!-- /.container-fluid -->
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Harga Sayur</h6>
                </div>
                <div class="card-body">
                  <form class="user" action="db/add.php" method=GET>
                    <div class="form-group">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1" >Tomat</div>
                      <input type="text" class="form-control form-control-label" name="Tomat" aria-describedby="harga tomat" value="<?php echo data('Tomat'); ?>">
                      
                    </div>
                    <div class="form-group">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Mentimun</div>
                      <input type="text" class="form-control form-control-label" name="Mentimun" aria-describedby="harga mentimun" value="<?php echo data('Mentimun'); ?>">
                      
                    </div>
                    <div class="form-group">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Wortel</div>
                      <input type="text" class="form-control form-control-label" name="Wortel" aria-describedby="harga wortel" value="<?php echo data('Wortel'); ?>">
                      
                    </div>
                    <div class="form-group">
                      <div class="text-xs font-weight-bold text-terung text-uppercase mb-1">Terung</div>
                      <input type="text" class="form-control form-control-label" name="Terung" aria-describedby="harga terung" value="<?php echo data('Terung'); ?>">
                      
                    </div>
                    <div class="form-group">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kubis</div>
                      <input type="text" class="form-control form-control-label" name="Kubis" aria-describedby="harga kubis" value="<?php echo data('Kubis'); ?>">
                      
                    </div>
                    <div class="form-group">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kentang</div>
                      <input type="text" class="form-control form-control-label" name="Kentang" aria-describedby="harga kentang" value="<?php echo data('Kentang'); ?>">
                      
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="save">
                      
                    
                    
                  </form>
                  
                </div>
              </div>
      </div>
            </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; vmanz 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
