<?php
require_once "dbConnect.php";
$db = createDbConnection();
$nom = mysqli_real_escape_string($db, $_POST['nomAssociation']);
$themes = mysqli_real_escape_string($db, $_POST['themes']);
$categorie = $_POST['categorieInput'];
$description = mysqli_real_escape_string($db, $_POST['message']);
require_once "increment.php";
InitialiserIncrement('association');
$query = mysqli_query($db, "INSERT INTO association (nom, description, themes, categorie) VALUES ('$nom', '$description', '$themes', '$categorie');");
header("Location: annuaire.php");
mysqli_close($db);
