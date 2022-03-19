<?php

  function randomString($n){
    $characters ='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0 ; $i< $n ; $i++){
      $index = rand(0,strlen($characters)-1);
      $str .= $characters[$index];
    }
  }


    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$id_projet = "";
  $datecre="";
  $image_projet="";
	$id = 0;

	$update = false;

	if (isset($_POST['save'])) {

		$id_projet = $_POST['id_projet'];
    $datecre = date('Y-m-d');
    $image_projet = $_FILES['image_projet'];
    $imagepath="";

    if ($image_projet) {

      $imagepath='uploads_image_projet/'.randomString(8).$image_projet['name'];
      mkdir(dirname($imagepath));
      move_uploaded_file($image_projet['tmp_name'],$imagepath);
    }




    mysqli_query($db, "INSERT INTO zboostimageprojet (id_projet, image_projet , DateCreation ) VALUES ('$id_projet', '$imagepath', '$datecre')");


		$_SESSION['message'] = "project image saved";
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
	$results2 = mysqli_query($db, "SELECT * FROM zboostimageprojet");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$id_projet = mysql_real_escape_string($_POST['id_projet']);

    $id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE zboostimageprojet SET id_projet='$id_projet' WHERE id=$id");

		$_SESSION['message'] = "project image updated!";
		header('location: allprojects.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];

		mysqli_query($db, "DELETE FROM zboostimageprojet WHERE id=$id");

		$_SESSION['message'] = "project image deleted!";
		header('location: allprojects.php');
	}






// ...
