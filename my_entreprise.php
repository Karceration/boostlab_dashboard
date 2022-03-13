<?php
 include('boostdb_entreprise.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Boostlab | Entreprise</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<div class="wrapper">

  <?php include ('navbar.php')?>

  <?php include ('main_sidebar.php')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Entreprise</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Entreprise</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card card-secondary m-3">
              <div class="card-header">
                <h3 class="card-title">Configuration entreprise</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div id="error" class="text-danger m-3 text-bold"></div>
              <form id="form" method="post" action="boostdb_entreprise.php">
                <div class="card-body">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="form-group">
                    <label class="form-label">Nom Etablissement</label>
                    <input type="text" id="NomEtablissement" name="NomEtablissement" class="form-control" value="<?php echo $NomEtablissement; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Activite</label>
                    <input type="text" id="Activite" name="Activite" class="form-control" value="<?php echo $Activite; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Devise</label>
                    <input type="text" class="form-control" id="Devise" name="Devise"  value="<?php echo $Devise; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Pays</label>
                    <input type="text" name="Pays" id="Pays" class="form-control" value="<?php echo $Pays; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Adresse</label>
                    <input type="text" id="Adresse" name="Adresse" class="form-control" value="<?php echo $Adresse; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Code Postal</label>
                    <input type="number" id="CodePostal" name="CodePostal" class="form-control" value="<?php echo $CodePostal; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Ville</label>
                    <input type="text" class="form-control" id="Ville" name="Ville"  value="<?php echo $Ville; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Telephone</label>
                    <input type="text" id="Telephone" name="Telephone" class="form-control" value="<?php echo $Telephone; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Site Internet</label>
                    <input type="text" id="SiteInternet" name="SiteInternet" class="form-control" value="<?php echo $SiteInternet; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Page Facebook</label>
                    <input type="text" class="form-control" id="PageFacebook" name="PageFacebook"  value="<?php echo $PageFacebook; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Type:</label>
                    <input type="text" id="Type" name="Type" class="form-control" value="<?php echo $Type; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Capital:</label>
                    <input type="number" id="Capital" name="Capital" class="form-control" value="<?php echo $Capital; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">N° SIRET:</label>
                    <input type="number" class="form-control" id="N_Siret" name="N_Siret"  value="<?php echo $N_Siret; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Code Naf:</label>
                    <input type="number" class="form-control" id="CodeNAF" name="CodeNAF"  value="<?php echo $CodeNAF; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">N° TVA Intra:</label>
                    <input type="number" class="form-control" id="N_TVA_intra" name="N_TVA_intra"  value="<?php echo $N_TVA_intra; ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="input-group">
                    <button class="btn" type="submit" name="save" >Save</button>
                    <button class="btn" type="reset" name="reset" value="Reset" >Clear</button>
                  </div>
                </div>
              </form>

              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>BoostLab</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <?php include ('footer.php')?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
