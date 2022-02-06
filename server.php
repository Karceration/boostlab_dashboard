<?php
	session_start();

    //connection
	$db = mysqli_connect('localhost', 'root', '', 'CrudTest');

	// initialisation
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')");
		$_SESSION['message'] = "Address saved";
		header('location: students.php');
	}
	

  //PAGINATION START
  //Get the current page number

  if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
  } else {
    $pageno = 1;
  }

  $no_of_records_per_page = 4;
  $offset = ($pageno-1) * $no_of_records_per_page;

  $total_pages_sql = "SELECT COUNT(*) FROM info";

  $total_pages = ceil(12 / $no_of_records_per_page);



	//RETRIEVE
	$results = mysqli_query($db, "SELECT * FROM info LIMIT $offset, $no_of_records_per_page");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$name = mysql_real_escape_string($_POST['name']);
		$address = mysql_real_escape_string($_POST['address']);
		$id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
		$_SESSION['message'] = "Address updated!";
		header('location: students.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info WHERE id=$id");
		$_SESSION['message'] = "Address deleted!";
		header('location: students.php');
	}






// ...
