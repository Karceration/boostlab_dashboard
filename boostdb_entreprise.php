<?php
	session_start();

    //connection
	$db = mysqli_connect('localhost', 'root', '', 'boostlab');

	// initialisation
	$NomEtablissement = "";
	$Activité = "";
  $Devise = "";
  $Pays = "";
  $Adresse="";
  $CodePostal="";
  $Ville = "";
  $Telephone = "";
  $SiteInternet = "";
  $PageFacebook = "";
  $Type="";
  $Capital = "";
  $N_Siret = "";
  $CodeNAF= "";
  $N_TVA_intra = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$NomEtablissement = $_POST['NomEtablissement'];
		$Activité = $_POST['Activité'];
    $Devise = $_POST['Devise'];
		$Pays = $_POST['Pays'];
		$Adresse = $_POST['Adresse'];
    $CodePostal = $_POST['CodePostal'];
		$Ville = $_POST['Ville'];
    $Telephone = $_POST['Telephone'];
		$SiteInternet = $_POST['SiteInternet'];
    $PageFacebook = $_POST['PageFacebook'];
		$Type = $_POST['Type'];
    $Capital = $_POST['Capital'];
		$N_Siret = $_POST['N_Siret'];
    $CodeNAF = $_POST['CodeNAF'];
		$N_TVA_intra = $_POST['N_TVA_intra'];





		mysqli_query($db, "INSERT INTO zboostentreprise (NomEtablissement , Activité , Devise , Pays , Adresse, CodePostal, Ville , Telephone , SiteInternet , PageFacebook , Type , Capital , N_Siret , CodeNAF , N_TVA_intra) VALUES ('$NomEtablissement' , '$Activité' , '$Devise' , '$Pays' , '$Adresse', '$CodePostal', '$Ville' , '$Telephone' , '$SiteInternet' , '$PageFacebook' , '$Type' , '$Capital' , '$N_Siret' , '$CodeNAF' , '$N_TVA_intra')");

		$_SESSION['message'] = "entreprise saved";
		header('location: my_entreprise.php');
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
	$results = mysqli_query($db, "SELECT * FROM zboostentreprise");
  //PAGINATION END




	//update
	if (isset($_POST['update'])) {
		$NomEtablissement = mysql_real_escape_string($_POST['NomEtablissement']);
		$Activité = mysql_real_escape_string($_POST['Activité']);
    $Devise = mysql_real_escape_string($_POST['Devise']);
		$Pays = mysql_real_escape_string($_POST['Pays']);
		$Adresse = mysql_real_escape_string($_POST['Adresse']);
    $CodePostal = mysql_real_escape_string($_POST['CodePostal']);
		$Ville = mysql_real_escape_string($_POST['Ville']);
    $Telephone = mysql_real_escape_string($_POST['Telephone']);
		$SiteInternet = mysql_real_escape_string($_POST['SiteInternet']);
    $PageFacebook = mysql_real_escape_string($_POST['PageFacebook']);
		$Type = mysql_real_escape_string($_POST['Type']);
    $Capital = mysql_real_escape_string($_POST['Capital']);
		$N_Siret = mysql_real_escape_string($_POST['N_Siret']);
    $CodeNAF = mysql_real_escape_string($_POST['CodeNAF']);
		$N_TVA_intra = mysql_real_escape_string($_POST['N_TVA_intra']);


    $id = mysql_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE zboostentreprise SET NomEtablissement='$NomEtablissement' , Activité='$Activité' , Devise='$Devise' , Pays='$Pays' , Adresse='$Adresse', CodePostal='$CodePostal', Ville='$Ville' , Telephone='$Telephone' , SiteInternet='$SiteInternet' , PageFacebook='$PageFacebook' , Type='$Type' , Capital='$Capital' , N_Siret='$N_Siret' , CodeNAF='$CodeNAF' , N_TVA_intra='$N_TVA_intra' WHERE id=$id");
		$_SESSION['message'] = "entreprise updated!";
		header('location: my_entreprise.php');
	}

	//delete

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM zboostentreprise WHERE id=$id");
		$_SESSION['message'] = "entreprise deleted!";
		header('location: my_entreprise.php');
	}






// ...
