<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["elm"]) && isset($_POST["nouveauContenu"])) {
        $elm = $_POST["elm"];
        $nouveauContenu = $_POST["nouveauContenu"];
        require_once 'dbConnect.php';
        $db = createDbConnection();
        InitialiserIncrement('modification');
        $query = mysqli_query($db, "INSERT INTO modification (`element`, `nouveauContenu`) VALUES ('$elm', '$nouveauContenu');");
    }
}
