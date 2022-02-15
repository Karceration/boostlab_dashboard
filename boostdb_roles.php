<?php
	session_start();

    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$NomRole = "";
  $datemodif="";
  $datecre="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$NomRole = $_POST['NomRole'];
    $datecre = date('Y-m-d');

		mysqli_query($db, "INSERT INTO zboostrole (NomRole , DateCreation ) VALUES ('$NomRole','$datecre')");
		$_SESSION['message'] = "role saved";
		header('location: allroles.php');
	}
  /*


  //PAGINATION START
  //Get the current page number

  if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
  } else {
    $pageno = 1;
  }

  $no_of_records_per_page = 4;
  $offset = ($pageno-1) * $no_of_records_per_page;

  $total_pages_sql = "SELECT COUNT(*) FROM zboostuser";

  $total_pages = ceil(12 / $no_of_records_per_page);
  */



	//RETRIEVE
	$results = mysqli_query($db, "SELECT * FROM zboostrole");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$NomRole = mysql_real_escape_string($_POST['NomRole']);
    $datemodif=date('Y-m-d');
    $id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE zboostrole SET NomRole='$NomRole', DateModif = '$datemodif' WHERE id=$id");
		$_SESSION['message'] = "role updated!";
		header('location: allroles.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM zboostrole WHERE id=$id");
		$_SESSION['message'] = "role deleted!";
		header('location: allroles.php');
	}






// ...
