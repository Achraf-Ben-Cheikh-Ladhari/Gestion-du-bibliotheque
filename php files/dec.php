<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$idcon=mysqli_connect("localhost" ,"root", "");
$okdec=mysqli_close($idcon);
if($okdec)
echo 'Déconnexion réussite <br/>'
; else
echo 'Echec de la déconnexion <br/>' ;
echo "</p></body>";
?>