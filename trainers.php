
<?php
 include('boostdb_formateur.php');

 //recuperer la ligne pour l'update
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];

  $update = true;
  $record = mysqli_query($db, "SELECT * FROM zboostformateur WHERE id=$id");

  if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $Nom= $n['Nom'];
      $Prenom = $n['Prenom'];
      $Specialite = $n['Specialite'];
      $Email = $n['Email'];
      $Adresse = $n['Adresse'];

      $id = $n ['id'];
  }
}

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Boostlab | Trainers</title>
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
            <h1>Trainers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Trainers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Trainers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Prenom</th>
                            <th class="text-center">Specialite</th>
                            <th class="text-center">Date de Naissance</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Adresse</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                        <tr>
                          <td><?php echo $row['Nom']; ?></td>
                          <td><?php echo $row['Prenom']; ?></td>
                          <td><?php echo $row['Specialite']; ?></td>
                          <td><?php echo $row['DateDeNaissance']; ?></td>
                          <td><?php echo $row['Email']; ?></td>
                          <td><?php echo $row['Adresse']; ?></td>
                          <td>
                              <a class="edit_btn" href="trainers.php?edit=<?php echo $row['id']; ?>">Edit</a>
                          </td>
                          <td>
                              <a class="del_btn" href="boostdb_formateur.php?del=<?php echo $row['id']; ?>">Delete</a>
                          </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
            <div class="card card-secondary m-3">
              <div class="card-header">
                <h3 class="card-title">Trainers Management</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div id="error" class="text-danger m-3 text-bold"></div>
              <form id="form" method="post" action="boostdb_formateur.php" enctype="multipart/form-data">
                <div class="card-body">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="form-group">
                    <label class="form-label">Nom: </label>
                    <input type="text" id="Nom" name="Nom" class="form-control" value="<?php echo $Nom; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Prenom: </label>
                    <input type="text" id="Prenom" name="Prenom" class="form-control" value="<?php echo $Prenom; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Specialite :</label>
                    <input type="text" id="Specialite" name="Specialite" class="form-control" value="<?php echo $Specialite; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Date De Naissance: </label>
                    <input type="text" class="form-control" id="DateDeNaissance" name="DateDeNaissance"  value="<?php echo $DateDeNaissance; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Email:</label>
                    <input type="text" name="Email" id="Email" class="form-control" value="<?php echo $Email; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Adresse:</label>
                    <input type="text" name="Adresse" id="Adresse" class="form-control" value="<?php echo $Adresse; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Image Formateur:</label><br>
                    <input type="file" name="image_formateur">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="input-group">
                    <?php if ($update == false): ?>
                        <button class="btn" type="submit" name="save" >Save</button>
                    <?php else: ?>
                        <button class="btn" type="submit" name="update" style="background: #ffe599;" >update</button>
                    <?php endif ?>
                    <button class="btn" type="reset" name="reset" value="Reset" >Clear</button>
                </div>
                </div>
              </form>


              <!-- /.card-body -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
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
