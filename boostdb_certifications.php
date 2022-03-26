<?php
	session_start();

    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$Formation = "";
	$Formateur = "";
  $Etudiant = "";
  $DateFin="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
    $Etudiant = $_POST['Etudiant'];
		$Formation = $_POST['Formation'];
		$Formateur = $_POST['Formateur'];
		$DateFin = $_POST['DateFin'];





		mysqli_query($db, "INSERT INTO zboostcertificat (Etudiant, Formation, Formateur , DateFin) VALUES ('$Etudiant', '$Formation','$Formateur', '$DateFin')");

		$_SESSION['message'] = "certificate saved";
		header('location: Certifications.php');
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
	$results = mysqli_query($db, "SELECT * FROM zboostcertificat");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$Etudiant = mysql_real_escape_string($_POST['Etudiant']);
		$Formation = mysql_real_escape_string($_POST['Formation']);
    $Formateur = mysql_real_escape_string($_POST['Formateur']);
    $DateFin = mysql_real_escape_string($_POST['DateFin']);


    $id = mysql_real_escape_string($_POST['id']);


    mysqli_query($db, "UPDATE zboostcertificat SET  Etudiant='$Etudiant' , Formation='$Formation', Formateur='$Formateur' , DateFin='$DateFin' WHERE id=$id");

		$_SESSION['message'] = "certificate updated!";
		header('location: Certifications.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM zboostcertificat WHERE id=$id");
		$_SESSION['message'] = " certificate deleted!";
		header('location: Certifications.php');
	}






// ...
