<?php
require_once "dbConnect.php";
$db = createDbConnection();
$nom = mysqli_real_escape_string($db, $_POST['nomInput']);
// $image = $_FILES['imageInput']['name'];
$couleur = $_POST['couleurInput'];
$couleur2 = $_POST['couleurInput2'];
require_once "increment.php";
InitialiserIncrement('categorie');
// if (!empty($image)) {
//     $query = mysqli_query($db, "INSERT INTO categorie (nom, couleur, image) VALUES ('$nom', '$couleur', '$image');");
// } else {
$query = mysqli_query($db, "INSERT INTO categorie (nom, couleur, couleur2) VALUES ('$nom', '$couleur', '$couleur2');");
// }
header("Location: annuaire.php");
mysqli_close($db);
