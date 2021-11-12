<?php include ("connection.php"); ?>
<?php
echo "<title>Gestion Des Livres</title>";
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$sql = "SELECT * FROM livre";
$result = $idcon->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id_livre"]. " - Auteur: " . $row["auteur"]." - Titre:  ".$row["titre"]. "<br>";
  }
} else {
  echo "0 results";
}
echo" Pour modifier un Livre"; 
echo"<a href='modifl.html'> Clicker ici</a> <br>";
echo "Pour Supprimer un Livre";
echo"<a href='suprl.html'> Clicker ici</a> <br>";
echo "Pour Ajouter un Livre";
echo"<a href='ajoutl.html'> Clicker ici</a> <br>";
echo"<a href='index.html' >Back </a> <br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>