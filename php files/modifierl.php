<?php include ("connection.php"); ?>
<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$idlvr=$_POST['idl'];
$auteur=$_POST['au'];
$livre=$_POST['l'];
$requet="update livre set auteur='$auteur', titre='$livre'
 where id_livre='$idlvr'";
$ok=mysqli_query($idcon,$requet);
if($ok==FALSE)
echo "Problème de modification <br/>";
else
echo "modification efectuée avec succes <br/>";

echo "<a href ='modifl.html'>Back</a><br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>