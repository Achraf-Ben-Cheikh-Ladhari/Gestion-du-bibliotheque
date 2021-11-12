<?php include ("connection.php"); ?>
<?php
echo "<title>Gestion D'emprunt</title>";
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$sql = "SELECT * FROM emprunt";
$result = $idcon->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id_emprunt"]. " - id Livre: " . $row["id_livre"]." - Id Abonne: ".$row["id_abonne"]." - Date Sortie:  ".$row["date_sortie"]." - Date Rendu:  ".$row["date_rendu"]. "<br>";
  }
} else {
  echo "0 results";
}

echo" Pour modifier un Emprunt"; 
echo"<a href='modife.php'> Clicker ici</a> <br>";
echo "Pour Supprimer un Emprunt";
echo"<a href='supre.html'> Clicker ici</a> <br>";
echo "Pour Ajouter un Emprunt";
echo"<a href='ajoute.php'> Clicker ici</a> <br>";
echo"<a href='index.html'> Back</a> <br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>
