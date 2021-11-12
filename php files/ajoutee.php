<?php include ("connection.php"); ?>
<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$idabn=$_POST['abn'];
$idlvr=$_POST['lvr'];
$ds=$_POST['ds'];
$dr=$_POST['dr'];
$requet= "insert into emprunt values
('','$idlvr','$idabn','$ds','$dr')";
$ok=mysqli_query($idcon,$requet);
if($ok==FALSE)
echo "Problème d'insertion <br/>";
else
echo "Insertion efectuée avec succes <br/>";

echo"<a href='ajoute.php'>Back</a> <br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>
