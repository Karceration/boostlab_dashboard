<?php
if (isset($_POST['submit'])) {
  $font = "AGENCYR.TTF";
  $image=imagecreatefrompng("Certificat_boost_fin.PNG");
  $color=imagecolorallocate($image,19,21 ,22);
  $name= $_POST['Etudiant'];
  imagettftext($image,30,0,350,270,$color,$font,$name);
  $Formation= $_POST['Formation'];
  imagettftext($image,30,0,350,365,$color,$font,$Formation);
  $Formateur= $_POST['Formateur'];
  imagettftext($image,30,0,445,430,$color,$font,$Formateur);
  $DateFin= $_POST['DateFin'];
  imagettftext($image,30,0,110,430,$color,$font,$DateFin);
  imagejpeg($image,"Certificates/Cert.jpg");
  imagedestroy($image);
  echo "created succesfully";


}

?>

<form method="post">
  <input type="text" name="Etudiant" placeholder="Nom Etudiant">
  <input type="text" name="Formation" placeholder="Nom Formation">
  <input type="text" name="Formateur" placeholder="Nom Formateur">
  <input type="text" name="DateFin" placeholder="Date Fin">
  <input type="submit" name="submit" value="GENERATE">
</form>
