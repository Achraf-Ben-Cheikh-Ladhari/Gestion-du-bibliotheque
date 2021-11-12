<?php include ("connection.php"); ?>
<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$prenom=$_POST['per'];
$requet= "insert into abonne values
('','$prenom')";
$ok=mysqli_query($idcon,$requet);
if($ok==FALSE)
echo "Problème d'insertion <br/>";
else
echo "Insertion efectuée avec succes <br/>";

echo"<a href='ajouta.html'>Back</a> <br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>