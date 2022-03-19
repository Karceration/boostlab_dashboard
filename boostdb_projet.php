<?php


    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$Nom= "";
  $id_portfolio="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$Nom = $_POST['Nom'];
    $id_portfolio = $_POST['id_portfolio'];


		mysqli_query($db, "INSERT INTO zboostprojet (id_portfolio,Nom) VALUES ($id_portfolio,'$Nom')");
		$_SESSION['message'] = "project saved";
		header('location: allprojects.php');
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
	$results1 = mysqli_query($db, "SELECT * FROM zboostprojet");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$Nom = mysql_real_escape_string($_POST['Nom']);
    $id_portfolio = mysql_real_escape_string($_POST['id_portfolio']);
    $id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE zboostprojet SET id_portfolio='$id_portfolio' , Nom='$Nom'  WHERE id=$id");
		$_SESSION['message'] = "project updated!";
		header('location: allprojects.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM zboostprojet WHERE id=$id");
		$_SESSION['message'] = "project deleted!";
		header('location: allprojects.php');
	}






// ...
