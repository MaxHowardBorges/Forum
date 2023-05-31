<?php
require_once "dbConnect.php";
$db = createDbConnection();
$titre = $_POST['titre'];
$description = $_POST['message'];
$dateDebut = $_POST['dateDebut'];
$heureDebut = $_POST['heureDebut'];
$dateFin = $_POST['dateFin'];
$heureFin = $_POST['heureFin'];
$type = $_POST['typeInput'];
$image = $_FILES['image']['name'];
$categorie = $_POST['categorieInput'];
require_once "increment.php";
InitialiserIncrement('evenement');
if (!empty($image)) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, image, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$image', '$categorie');");
} else {
    $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$categorie');");
}
header("Location: infos.php");
mysqli_close($db);
