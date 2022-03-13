<?php
	session_start();

    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$Nom = "";
	$Prenom = "";
  $Specialite = "";
  $DateDeNaissance="";
  $Email="";
  $Adresse="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {

		$Nom = $_POST['Nom'];
		$Prenom = $_POST['Prenom'];
    $Specialite = $_POST['Specialite'];
		$DateDeNaissance = $_POST['DateDeNaissance'];
    $Email = $_POST['Email'];
    $Adresse = $_POST['Adresse'];


    mysqli_query($db, "INSERT INTO zboostformateur (Nom , Prenom , Specialite , DateDeNaissance , Email, Adresse ) VALUES ('$Nom', '$Prenom','$Specialite','$DateDeNaissance','$Email','$Adresse')");


		$_SESSION['message'] = "trainer saved";
		header('location: trainers.php');
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
	$results = mysqli_query($db, "SELECT * FROM zboostformateur");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$Nom = mysql_real_escape_string($_POST['Nom']);
		$Prenom = mysql_real_escape_string($_POST['Prenom']);
    $Specialite = mysql_real_escape_string($_POST['Specialite']);
    $Email = mysql_real_escape_string($_POST['Email']);
    $Adresse = mysql_real_escape_string($_POST['Adresse']);

    $id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE zboostformateur SET Nom='$Nom', Prenom='$Prenom', Specialite='$Specialite' , Email='$Email', Adresse='$Adresse' WHERE id=$id");

		$_SESSION['message'] = "trainer updated!";
		header('location: trainers.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];

		mysqli_query($db, "DELETE FROM zboostformateur WHERE id=$id");

		$_SESSION['message'] = "trainer deleted!";
		header('location: trainers.php');
	}






// ...
