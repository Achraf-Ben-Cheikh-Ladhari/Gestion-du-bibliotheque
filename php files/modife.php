<?php include ("connection.php"); ?>
<?php
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
echo"<FORM Method='POST' Action='modifee.php' name='f3'>";
echo"<table width='42%' align='center'>";
echo "<tr><td>Id_emprunt: <br>";
echo"<input type=text size=30 name='ide' id='ide'><br></tr></td>";
echo"<tr> <td class='TitreCellule'>";
echo "<p>Abonne</p>";
$sql = "SELECT * FROM abonne";
$res = mysqli_query($idcon,$sql);
echo "<select name='abn'>";
while($data=mysqli_fetch_array($res)) {
    
   echo " <option>".$data['id_abonne']."</option>\n";
}
echo"</select> </td>";
echo "<tr><td> <p>Livre</p>";
echo "<select name='lvr'><br>";
$sql1 = "SELECT id_livre FROM livre";
$res1 = mysqli_query($idcon,$sql1);

while($data1=mysqli_fetch_array($res1)) {
    
   echo " <option>".$data1['id_livre']."</option><br>";
}
echo "</select><br></tr></td>";
echo "<tr><td>Date Sortie: <br>";
echo"<input type=text size=30 name='ds' id='ds'><br></tr></td>";
echo "<tr><td>Date Rendu: <br>";
echo"<input type=text size=30 name='dr' id='dr'><br></tr></td>";
echo"<td colspan='2' align='center'>
<input  type='Submit' value=Enregistrer
name='Send'>
<input type='reset' name='Submit' value='Annuler'></td>
</tr> </table> </FORM>";
echo"<a href='emp.php'> Back</a> <br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>