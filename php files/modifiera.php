<?php include ("connection.php"); ?>
<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$ida=$_POST['ida'];
$prenom=$_POST['per'];
$requet="update abonne set prenom='$prenom'
 where id_abonne='$ida'";
$ok=mysqli_query($idcon,$requet);
if($ok==FALSE)
echo "Problème de modification <br/>";
else
echo "modification efectuée avec succes <br/>";

echo "<a href ='modifiera.html'>Back</a><br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>