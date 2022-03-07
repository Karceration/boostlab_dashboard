<?php


    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$NomFormation = "";
  $NbHeures="";
  $Prix="";
  $NomResponsable="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$Nom = $_POST['Nom'];
    $datecre = date('Y-m-d');

		mysqli_query($db, "INSERT INTO zboostformation (NomFormation,NbHeures,Prix,NomResponsable) VALUES ('$NomFormation', $NbHeures,$Prix,'$NomResponsable')");
		$_SESSION['message'] = "course saved";
		header('location: courses.php');
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
	$results1 = mysqli_query($db, "SELECT * FROM zboostformation");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$NomFormation = mysql_real_escape_string($_POST['NomFormation']);
    $NbHeures = mysql_real_escape_string($_POST['NbHeures']);
    $Prix = mysql_real_escape_string($_POST['Prix']);
    $NomResponsable = mysql_real_escape_string($_POST['NomResponsable']);
    $id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE zboostformation SET Nom='$Nom' WHERE id=$id");
		$_SESSION['message'] = "course updated!";
		header('location: courses.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM zboostformation WHERE id=$id");
		$_SESSION['message'] = "course deleted!";
		header('location: courses.php');
	}






// ...
