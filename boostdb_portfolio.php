<?php


    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$Nom = "";
  $datecre="";
  $Domaine="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {

		$Nom = $_POST['Nom'];
    $datecre = date('Y-m-d');
    $Domaine = $_POST['Domaine'];


		mysqli_query($db, "INSERT INTO zboostportfolio (Nom,DateCreation,Domaine) VALUES ('$Nom', '$datecre','$Domaine')");

		$_SESSION['message'] = "portfolio saved";
    header('location: allportfolios.php');
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
	$results = mysqli_query($db, "SELECT * FROM zboostportfolio");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$Nom = mysql_real_escape_string($_POST['Nom']);
    $Domaine = mysql_real_escape_string($_POST['Domaine']);
    $id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE zboostportfolio SET Nom='$Nom', Domaine='$Domaine' WHERE id=$id");

		$_SESSION['message'] = "portfolio updated!";
		header('location: allportfolios.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM zboostporfolio WHERE id=$id");
		$_SESSION['message'] = "portfolio deleted!";
		header('location: allportfolios.php');
	}






// ...
