<?php
	session_start();

    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$nom = "";
	$prenom = "";
  $email = "";
  $password = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
    $email = $_POST['email'];
		$password = $_POST['password'];

		mysqli_query($db, "INSERT INTO zboostuser (nom , prenom , email , password) VALUES ('$nom', '$prenom','$email', '$password')");
		$_SESSION['message'] = "user saved";
		header('location: allusers.php');
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
	$results = mysqli_query($db, "SELECT * FROM zboostuser");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
    $id = mysql_real_escape_string($_POST['id']);
		$nom = mysql_real_escape_string($_POST['nom']);
		$prenom = mysql_real_escape_string($_POST['prenom']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);


		mysqli_query($db, "UPDATE zboostuser SET nom='$nom', prenom='$prenom', email='$email' , password='$password' WHERE id=$id");
		$_SESSION['message'] = "user updated!";
		header('location: allusers.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM zboostuser WHERE id=$id");
		$_SESSION['message'] = "user deleted!";
		header('location: allusers.php');
	}






// ...
