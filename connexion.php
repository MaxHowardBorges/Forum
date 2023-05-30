<?php
session_save_path('/var/www/sessions/');
session_start();
require_once "dbConnect.php";
$db = createDbConnection();
$email = $_POST['mail'] ?? $_GET['mail'];
$password = $_POST['mdp'] ?? $_GET['mdp'];
$query = mysqli_query($db, "SELECT * FROM administrateur WHERE email ='$email' AND mdp = '$password';");
if (mysqli_num_rows($query) > 0) {
    $_SESSION['idAdministrateur'] = mysqli_fetch_assoc($query)['idAdministrateur'];
    header("Location: index.php");
    exit();
} else {
    header("Location: connexion.html");
    exit();
}
