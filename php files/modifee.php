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
$ide=$_POST['ide'];
$requet= "update emprunt set
id_abonne='$idabn',id_livre='$idlvr',date_sortie='$ds',date_rendu='$dr'
where id_emprunt='$ide'";
$ok=mysqli_query($idcon,$requet);
if($ok==FALSE)
echo "Problème de Modification <br/>";
else
echo "Modification efectuée avec succes <br/>";

echo"<a href='modife.php'>Back</a> <br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>