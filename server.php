<?php
	session_start();

    //connection
	$db = mysqli_connect('localhost', 'root', '', 'CrudTest');

	// initialisation
	$name = "";
	$Email = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$Email = $_POST['Email'];

		mysqli_query($db, "INSERT INTO info (name, Email) VALUES ('$name', '$Email')");
		$_SESSION['message'] = "Student saved";
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
		$Email = mysql_real_escape_string($_POST['Email']);
		$id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE info SET name='$name', Email='$Email' WHERE id=$id");
		$_SESSION['message'] = "Student updated!";
		header('location: students.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info WHERE id=$id");
		$_SESSION['message'] = "Student deleted!";
		header('location: students.php');
	}






// ...
