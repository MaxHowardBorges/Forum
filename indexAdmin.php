<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_save_path('/var/www/sessions/');
    session_start();
}
if (!isset($_SESSION['idAdministrateur']) || empty($_SESSION['idAdministrateur'])) {
    header("Location: connexion.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/index.css" />
    <title>Association Forum de Grasse - Alpes maritimes</title>
</head>

<body>
    <header>
        <nav class="topnav">
            <div class="left">
                <img id="logo" src="/assets/img/forum_logo.png" onclick="window.location.href = 'index.php'" />
            </div>
            <div class="right">
                <div class="dropdown">
                    <a class="active" href="index.php">Accueil</a>
                    <div class="dropdown-content">
                        <a href="#Mot">Mot</a>
                        <a href="#Activites">Activites</a>
                    </div>
                </div>
                <a href="quiSommesNous.php">Qui Sommes Nous</a>
                <a href="journéeForum.php">Journée Forum</a>
                <a href="annuaire.php">Annuaire</a>
                <a href="rencontres.php">Rencontres</a>
                <a href="lesExperts.php">Les Experts</a>
                <a href="agenda.php">Agenda</a>
                <a href="infos.php">Infos</a>
            </div>
        </nav>
    </header>
    <div id="diapo"></div>
    <main>
        <div class="container reveal fade-left">
            <div class="div4">
                <div class="img">
                    <img src="assets/img/avatar.jpg" width="700px" />
                    <button class="boutonbeau">MODIFIER</button>
                    <img src="assets/img/forum_journeeforum2.JPG" width="700px" />
                    <button class="boutonbeau">MODIFIER</button>
                </div>
                <div class="divtexte" id="mot" contenteditable="true">
                    <?php
                    include('modifications.php');
                    require_once 'dbConnect.php';
                    $db = createDbConnection();
                    $result = mysqli_query($db, "SELECT nouveauContenu FROM modification WHERE element='mot' ORDER BY id_modification DESC LIMIT 1;");
                    if ($row = mysqli_fetch_assoc($result)) {
                        $contenu = $row['nouveauContenu'];
                        echo $contenu;
                    }
                    ?>
                </div>
                <button class="boutonbeau" onclick="enregistrerModifications('mot')">MODIFIER</button>
            </div>
        </div>

        <h2 id="Activites">Activites</h2>
        <a href="journéeForum.php">Journée FORUM mi-sept</a>
        <br />
        <a href="annuaire.php">Annuaire des associations</a>
        <br />
        <a href="rencontres.php">Rencontres associatives</a>
        <br />
        <a href="rencontres.php">Conférences</a>
        <br />
        <a href="https://www.facebook.com/forum.grasse.paysdegrasse">Site internet et FB</a>
        <br />
        <a href="rencontres.php">Manifestations ponctuelles, sorties associatives</a>
        <br />
        <a href="lesExperts.php">Collège d’experts</a>
        <script>
            function reveal() {
                var reveals = document.querySelectorAll(".reveal");

                for (var i = 0; i < reveals.length; i++) {
                    var windowHeight = window.innerHeight;
                    var elementTop = reveals[i].getBoundingClientRect().top;
                    var elementVisible = 150;

                    if (elementTop < windowHeight - elementVisible) {
                        reveals[i].classList.add("active");
                    } else {
                        reveals[i].classList.remove("active");
                    }
                }
            }

            window.addEventListener("scroll", reveal);

            function enregistrerModifications(elm) {
                var nouveauContenu = document.getElementById(elm).innerHTML;
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "modifications.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {}
                };
                var data = "elm=" + encodeURIComponent(elm) + "&nouveauContenu=" + encodeURIComponent(nouveauContenu);
                xhr.send(data);
            }
        </script>
    </main>
    <footer>
        <div class="bottomnav">
            <div class="left"></div>
            <div class="center">
                <a href="partenaires.html">Partenaires</a>
                <a href="contacter.html">Contacter</a>
                <a href="deconnexion.php">Deconnexion</a>
            </div>
            <div class="right"></div>
        </div>
    </footer>
</body>

</html>