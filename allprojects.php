<?php error_reporting(0); ?>
<?php

 include('boostdb_projet.php');

 //recuperer la ligne pour l'update1
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $update1 = true;
    $record1 = mysqli_query($db, "SELECT * FROM zboostprojet WHERE id=$id");

    if (count($record1) == 1 ) {
        $n = mysqli_fetch_array($record1);
        $Nom= $n['Nom'];
        $id_portfolio = $n['id_portfolio'];
        $id = $n ['id'];
    }
  }

?>

 <?php

  include('boostdb_image_projet.php');

  //recuperer la ligne pour l'update2
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $update2 = true;
    $record2 = mysqli_query($db, "SELECT * FROM zboosttypeformation WHERE id=$id");

    if (count($record2) == 1 ) {
        $n = mysqli_fetch_array($record2);
        $id_projet= $n['id_projet'];
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
  <title>Boostlab | Projects</title>
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
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
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
                <h3 class="card-title">All Projects</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">id</th>
                            <th class="text-center">id_portfolio</th>
                            <th class="text-center">Nom Projet</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = mysqli_fetch_array($results1)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['id_portfolio']; ?></td>
                            <td><?php echo $row['Nom']; ?></td>
                            <td>
                                <a class="edit_btn" href="allprojects.php?edit=<?php echo $row['id']; ?>">Edit</a>
                            </td>
                            <td>
                                <a class="del_btn" href="boostdb_projet.php?del=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <table id="myTable" class="table table-bordered table-hover mt-5">
                    <thead>
                        <tr>
                            <th class="text-center">id</th>
                            <th class="text-center">id_project</th>
                            <th class="text-center">Image projet path</th>
                            <th class="text-center">Date Creation</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = mysqli_fetch_array($results2)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['id_projet']; ?></td>
                            <td><?php echo $row['image_projet']; ?></td>
                            <td><?php echo $row['DateCreation']; ?></td>
                            <td>
                                <a class="edit_btn" href="allprojects.php?edit=<?php echo $row['id']; ?>">Edit</a>
                            </td>
                            <td>
                                <a class="del_btn" href="boostdb_image_project.php?del=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-secondary m-3">
              <div class="card-header">
                <h3 class="card-title">Projects Management</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div id="error" class="text-danger m-3 text-bold"></div>
              <form id="form" method="post" action="boostdb_projet.php">
                <div class="card-body">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="form-group">
                    <label class="form-label">Nom : </label>
                    <input type="text" id="Nom" name="Nom" class="form-control" value="<?php echo $Nom; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">id portfolio :</label>
                    <input type="number" id="id_portfolio" name="id_portfolio" class="form-control" value="<?php echo $NbHeures; ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="input-group">
                    <?php if ($update1 == false): ?>
                        <button class="btn" type="submit" name="save" >Save</button>
                    <?php else: ?>
                        <button class="btn" type="submit" name="update" style="background: #ffe599;" >update</button>
                    <?php endif ?>
                    <button class="btn" type="reset" name="reset" value="Reset" >Clear</button>
                </div>
                </div>
              </form>

              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-secondary m-3">
              <div class="card-header">
                <h3 class="card-title">Project Image Management</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div id="error" class="text-danger m-3 text-bold"></div>
              <form id="form" method="post" action="boostdb_image_projet.php" enctype="multipart/form-data">
                <div class="card-body">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="form-group">
                    <label class="form-label">id projet : </label>
                    <input type="number" id="id_projet" name="id_projet" class="form-control" value="<?php echo $id_projet; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Image de Projet:</label><br>
                    <input type="file" name="image_projet">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="input-group">
                    <?php if ($update2 == false): ?>
                        <button class="btn" type="submit" name="save" >Save</button>
                    <?php else: ?>
                        <button class="btn" type="submit" name="update" style="background: #ffe599;" >update</button>
                    <?php endif ?>
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
