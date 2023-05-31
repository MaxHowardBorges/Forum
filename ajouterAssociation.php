<?php
require_once "dbConnect.php";
$db = createDbConnection();
$nom = $_POST['nomAssociation'];
$themes = $_POST['themes'];
$categorie = $_POST['categorieInput'];
$description = $_POST['message'];
require_once "increment.php";
InitialiserIncrement('association');
$query = mysqli_query($db, "INSERT INTO association (nom, description, themes, categorie) VALUES ('$nom', '$description', '$themes', '$categorie');");
header("Location: annuaire.php");
mysqli_close($db);
