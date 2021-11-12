<?php include ("connection.php"); ?>
<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
$idabn=$_POST['abn'];
$requet="delete from abonne where id_abonne='$idabn'";
$ok=mysqli_query($idcon,$requet); 
if($ok==FALSE)
echo "Problème de suppression <br/>";
else
echo "Suppression effectuée avec succes <br/>";

echo"<a href='supra.html'>Back</a> <br>";
?>
<?php include ("dec.php"); ?>