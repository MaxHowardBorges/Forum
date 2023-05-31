<?php
require_once "dbConnect.php";
$db = createDbConnection();
$nom = $_POST['nomInput'];
// $image = $_FILES['imageInput']['name'];
$couleur = $_POST['couleurInput'];
require_once "increment.php";
InitialiserIncrement('categorie');
// if (!empty($image)) {
//     $query = mysqli_query($db, "INSERT INTO categorie (nom, couleur, image) VALUES ('$nom', '$couleur', '$image');");
// } else {
$query = mysqli_query($db, "INSERT INTO categorie (nom, couleur) VALUES ('$nom', '$couleur');");
// }
header("Location: annuaire.php");
mysqli_close($db);
