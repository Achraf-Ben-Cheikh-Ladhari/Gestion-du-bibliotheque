<?php include ("connection.php"); ?>
<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$idemprunt=$_POST['emprunt'];
$requet="delete from emprunt where id_emprunt='$idemprunt'";
$ok=mysqli_query($idcon,$requet); 
if($ok==FALSE)
echo "Problème de suppression <br/>";
else
echo "Suppression effectuée avec succes <br/>";

echo"<a href='supre.html'>Back</a> <br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>