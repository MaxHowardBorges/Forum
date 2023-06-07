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
// $image = $_FILES['image']['name'];
$categorie = $_POST['categorieInput'];
require_once "increment.php";
InitialiserIncrement('evenement');
// if (!empty($image)) {
//     $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, image, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$image', '$categorie');");
// } else {
// $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$categorie');");
// }
if ($type == "Une fois") {
    $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$categorie');");
} else if ($type == "Quotidien") {
    $endDate = date("Y-m-d", strtotime($dateDebut . '+ 1 weeks'));
    while ($dateDebut <= $endDate) {
        $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$categorie');");
        $dateDebut = date("Y-m-d", strtotime($dateDebut . '+ 1 days'));
        $dateFin =  date("Y-m-d", strtotime($dateFin . '+ 1 days'));
    }
} else if ($type == "Hebdomadaire") {
    $endDate = date("Y-m-d", strtotime($dateDebut . '+ 2 weeks'));
    while ($dateDebut <= $endDate) {
        $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$categorie');");
        $dateDebut = date("Y-m-d", strtotime($dateDebut . '+ 1 weeks'));
        $dateFin =  date("Y-m-d", strtotime($dateFin . '+ 1 weeks'));
    }
} else if ($type == "Bi-hebdomadaire") {
    $endDate = date("Y-m-d", strtotime($dateDebut . '+ 1 months'));
    while ($dateDebut <= $endDate) {
        $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$categorie');");
        $dateDebut = date("Y-m-d", strtotime($dateDebut . '+ 2 weeks'));
        $dateFin =  date("Y-m-d", strtotime($dateFin . '+ 2 weeks'));
    }
} else if ($type == "Mensuel") {
    $endDate = date("Y-m-d", strtotime($dateDebut . '+ 2 months'));
    while ($dateDebut <= $endDate) {
        $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$categorie');");
        $dateDebut = date("Y-m-d", strtotime($dateDebut . '+ 1 months'));
        $dateFin =  date("Y-m-d", strtotime($dateFin . '+ 1 months'));
    }
} else if ($type == "Annuel") {
    $endDate = date("Y-m-d", strtotime($dateDebut . '+ 2 years'));
    while ($dateDebut <= $endDate) {
        $query = mysqli_query($db, "INSERT INTO evenement (titre, description, dateDebut, heureDebut, dateFin, heureFin, type, categorie) VALUES ('$titre', '$description', '$dateDebut', '$heureDebut', '$dateFin', '$heureFin', '$type', '$categorie');");
        $dateDebut = date("Y-m-d", strtotime($dateDebut . '+ 1 year'));
        $dateFin =  date("Y-m-d", strtotime($dateFin . '+ 1 year'));
    }
}
header("Location: infos.php");
mysqli_close($db);
