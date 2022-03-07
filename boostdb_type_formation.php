<?php
	session_start();

    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$Nom = "";
  $datecre="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$Nom = $_POST['Nom'];
    $datecre = date('Y-m-d');

		mysqli_query($db, "INSERT INTO zboosttypeformation (Nom , DateCreation ) VALUES ('$Nom','$datecre')");
		$_SESSION['message'] = "course type saved";

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
	$results2 = mysqli_query($db, "SELECT * FROM zboosttypeformation");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$Nom = mysql_real_escape_string($_POST['Nom']);
    $id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE zboosttypeformation SET Nom='$Nom' WHERE id=$id");
		$_SESSION['message'] = "course type updated!";
		header('location: courses.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM zboosttypeformation WHERE id=$id");
		$_SESSION['message'] = "course type deleted!";
		header('location: courses.php');
	}






// ...
