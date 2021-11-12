<?php include ("connection.php"); ?>
<?php
echo "<title>Gestion Des Abonnees</title>";
echo "<link rel='icon' href='bib.png' type='image/icon type'>";
echo"<head> <link rel='stylesheet' href='emp.css'></head>";
echo "<body>";
echo "<p>";
$sql = "SELECT * FROM abonne";
$result = $idcon->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id_abonne"]. " - Prenom: " . $row["prenom"]. "<br>";
  }
} else {
  echo "0 results";
}
echo" Pour modifier un Abonne"; 
echo"<a href='modifiera.html'> Clicker ici</a> <br>";
echo "Pour Supprimer un Abonne";
echo"<a href='supra.html'> Clicker ici</a> <br>";
echo "Pour Ajouter un Abonne";
echo"<a href='ajouta.html'> Clicker ici</a> <br>";
echo"<a href='index.html'> Back</a> <br>";
echo "</p></body>";
?>
<?php include ("dec.php"); ?>