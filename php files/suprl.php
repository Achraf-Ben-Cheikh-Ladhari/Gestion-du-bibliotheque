<?php include ("connection.php"); ?>
<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
$idlivre=$_POST['livre'];
$requet="delete from livre where id_livre='$idlivre'";
$ok=mysqli_query($idcon,$requet); 
if($ok==FALSE)
echo "Problème de suppression <br/>";
else
echo "Suppression effectuée avec succes <br/>";

echo"<a href='suprl.html'>Back</a> <br>";
?>
<?php include ("dec.php"); ?>