<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
  <script defer src="validation_user.js"></script>
</head>
<body class="hold-transition sidebar-mini">
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Configuration Entreprise</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="form" method="post" action="boostdb_entreprise.php">
                  <div class="card-body">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                      <label class="form-label">Nom Etablissement</label>
                      <input type="text" id="NomEtablissment" name="NomEtablissment" class="form-control" value="">
                    </div>
                    <div class="form-group">
                      <label class="form-label">Activité</label>
                      <input type="text" id="Activité" name="Activité" class="form-control" value="">
                    </div>
                    <div class="form-group">
                      <label class="form-label">Devise</label>
                      <input type="text" class="form-control" id="Devise" name="Devise"  value="">
                    </div>
                    <div class="form-group">
                      <label class="form-label">Pays</label>
                      <input type="text" name="Pays" id="Pays" class="form-control" value="">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <div class="input-group">

                    </div>
                  </div>
                </form>

                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Adresse
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <form id="" method="post" action="boostdb_entreprise.php">
                      <div class="card-body">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-group">
                          <label class="form-label">Adresse</label>
                          <input type="text" id="Adresse" name="Adresse" class="form-control" value="">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Code Postal</label>
                          <input type="text" id="CodePostal" name="CodePostal" class="form-control" value="">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Ville</label>
                          <input type="text" class="form-control" id="Ville" name="Ville"  value="">
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <div class="input-group">

                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Coordonnées
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      <form id="" method="post" action="boostdb_entreprise.php">
                      <div class="card-body">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-group">
                          <label class="form-label">Telephone</label>
                          <input type="text" id="Telephone" name="Telephone" class="form-control" value="">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Site Internet</label>
                          <input type="text" id="SiteInternet" name="SiteInternet" class="form-control" value="">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Page Facebook</label>
                          <input type="text" class="form-control" id="PageFacebook" name="PageFacebook"  value="">
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <div class="input-group">

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Information sur l'entreprise
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <form id="" method="post" action="boostdb_entreprise.php">
                        <div class="card-body">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                          <div class="form-group">
                            <label class="form-label">Type:</label>
                            <input type="text" id="Type" name="Type" class="form-control" value="">
                          </div>
                          <div class="form-group">
                            <label class="form-label">Capital:</label>
                            <input type="text" id="Capital" name="Capital" class="form-control" value="">
                          </div>
                          <div class="form-group">
                            <label class="form-label">N° SIRET:</label>
                            <input type="text" class="form-control" id="N_Siret" name="N_Siret"  value="">
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Code Naf:</label>
                            <input type="text" class="form-control" id="CodeNAF" name="CodeNAf"  value="">
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">N° TVA Intra:</label>
                            <input type="text" class="form-control" id="N_TVA_Intra" name="N_TVA_Intra"  value="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Logo</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="ImageLogo">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                        </div>
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                          <div class="input-group">

                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
              <!-- general form elements -->

            <!-- /.card -->

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
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
