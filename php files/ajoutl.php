<?php include ("connection.php"); ?>
<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$auteur=$_POST['auteur'];
$titre=$_POST['titre'];
$requet= "insert into livre values
('','$auteur','$titre')";
$ok=mysqli_query($idcon,$requet);
if($ok==FALSE)
echo "Problème d'insertion <br/>";
else
echo "Insertion efectuée avec succes <br/>";

echo"<a href='ajoutl.html'>Back</a> <br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>