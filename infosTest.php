<?php
session_save_path('/var/www/sessions/');
session_start();
if (isset($_SESSION['idAdministrateur']) && !empty($_SESSION['idAdministrateur'])) {
    include('infosAdmin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/info.css" />
    <title>Infos - Association Forum de Grasse - Alpes maritimes</title>
</head>

<body>
    <header>
        <nav class="topnav">
            <div class="left">
                <img id="logo" src="/assets/img/forum_logo.png" onclick="window.location.href = 'index.php'" />
            </div>
            <div class="right">
                <div class="dropdown">
                    <a href="index.php">Accueil</a>
                    <div class="dropdown-content">
                        <a href="index.php#Mot">Mot</a>
                        <a href="index.php#Activites">Activites</a>
                    </div>
                </div>
                <a href="quiSommesNous.php">Qui Sommes Nous</a>
                <a href="journéeForum.php">Journée Forum</a>
                <a href="annuaire.php">Annuaire</a>
                <a href="rencontres.php">Rencontres</a>
                <a href="lesExperts.php">Les Experts</a>
                <a href="agenda.php">Agenda</a>
                <a class="active" href="infos.php">Infos</a>
            </div>
        </nav>
    </header>
    <main>
        <?php
        $currentMonth = date('n');
        $currentYear = date('Y');
        $mois = array(
            1 => 'Janvier',
            2 => 'Février',
            3 => 'Mars',
            4 => 'Avril',
            5 => 'Mai',
            6 => 'Juin',
            7 => 'Juillet',
            8 => 'Août',
            9 => 'Septembre',
            10 => 'Octobre',
            11 => 'Novembre',
            12 => 'Décembre'
        );
        $jours = array(
            1 => 'Lundi',
            2 => 'Mardi',
            3 => 'Mercredi',
            4 => 'Jeudi',
            5 => 'Vendredi',
            6 => 'Samedi',
            7 => 'Dimanche'
        );
        $currentMonthName = $mois[$currentMonth];
        $currentMonthYear = $currentMonthName . ' ' . $currentYear;
        echo '<h1>' . $currentMonthYear . '</h1>';
        $currentMonth = date('m');
        require_once 'dbConnect.php';
        $db = createDbConnection();
        $query = mysqli_query($db, "SELECT * FROM evenement ORDER BY 'dateDebut' ASC;");
        while ($row = mysqli_fetch_assoc($query)) {
            $dateDebut = $row['dateDebut'];
            $heureDebut = $row['heureDebut'];
            $dateFin = $row['dateFin'];
            $heureFin = $row['heureFin'];
            $eventMonth = date('m', strtotime($dateDebut));
            if ($eventMonth == $currentMonth || $eventMonth >= $currentMonth) {
                if ($eventMonth > $currentMonth) {
                    $currentMonth = ltrim($eventMonth, '0');
                    $currentMonthName = $mois[$currentMonth];
                    $currentMonthYear = $currentMonthName . ' ' . $currentYear;
                    echo '<h1>' . $currentMonthYear . '</h1>';
                }
                echo '<h1> ------------------------------ </h1>';
                $id = $row['id_evenement'];
                echo '<div onclick="afficherMasquer(' . $id . ')" class="event">';
                $categorie = $row['categorie'];
                $queryColor =  mysqli_query($db, "SELECT couleur FROM categorie WHERE nom='$categorie';");
                $color = mysqli_fetch_assoc($queryColor);
                $categorie = htmlspecialchars($row['categorie'], ENT_QUOTES, 'UTF-8');
                echo '<div class="colorbox" style="background-color: ' . $color['couleur'] . ' "></div>';
                $jourDebut = date('N', strtotime($dateDebut));
                $jourNameDebut = $jours[$jourDebut];
                $dayOfMonthDebut = ltrim(date('d', strtotime($dateDebut)), '0');
                $moisDebut = date('m', strtotime($dateDebut));
                $moisNameDebut = $mois[ltrim($moisDebut, '0')];
                $hourDebut = substr($heureDebut, 0, 2);
                $minuteDebut = substr($heureDebut, 3, 2);
                $jourFin = date('N', strtotime($dateFin));
                $jourNameFin = $jours[$jourFin];
                $dayOfMonthFin = ltrim(date('d', strtotime($dateFin)), '0');
                $moisFin = date('m', strtotime($dateFin));
                $moisNameFin = $mois[ltrim($moisFin, '0')];
                $hourFin = substr($heureFin, 0, 2);
                $minuteFin = substr($heureFin, 3, 2);
                echo '<div class="date">' . $jourNameDebut . ' ' . $dayOfMonthDebut . ' ' . $moisNameDebut . ' ' . $hourDebut . 'h' . $minuteDebut . ' au ' . $jourNameFin . ' ' . $dayOfMonthFin . ' ' . $moisNameFin . ' ' . $hourFin . 'h' . $minuteFin . '</div>';
                echo '<br><br>';
                echo '<div class="titre">' . $row['titre'] . '</div>';
                echo '<br><br>';
                echo '<div class="hide" id=' . $id . '>' . nl2br($row['description']) . '</div>';
                echo '</div>';
            }
        }
        echo '<h1> ------------------------------ </h1>';
        ?>
    </main>
    <footer>
        <div class="bottomnav">
            <div class="left"></div>
            <div class="center">
                <a href="partenaires.html">Partenaires</a>
                <a href="contacter.html">Contacter</a>
                <a href="connexion.html">Connexion</a>
            </div>
            <div class="right"></div>
        </div>
    </footer>
    <script>
        function afficherMasquer(elm) {
            var texte = document.getElementById(elm);
            if (texte.style.display === "none") {
                texte.style.display = "block";
            } else {
                texte.style.display = "none";
            }
        }
    </script>
</body>

</html>