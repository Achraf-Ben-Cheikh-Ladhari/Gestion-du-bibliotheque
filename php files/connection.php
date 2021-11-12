<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$idcon=mysqli_connect("localhost" ,"root", "");
if($idcon)
{
echo "Connexion réussite <br/>" ;
$okbd=mysqli_select_db($idcon,"bibliotheque");
if($okbd==TRUE)
echo "<br/>Base correcte <br/>";
else
echo "<br/>Base incorrect <br/>";
}
else
echo "Erreur de connexion avec le serveur:<br/>";
echo "</p></body>";
?>