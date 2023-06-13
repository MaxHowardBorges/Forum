<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $categorie = $_GET['categorie'];
    echo '<title>' . $categorie . ' - Association Forum de Grasse - Alpes maritimes</title>'
    ?>
    <link rel="stylesheet" href="/css/annuaire.css" />
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
                <a class="active" href="annuaire.php">Annuaire</a>
                <a href="rencontres.php">Rencontres</a>
                <a href="lesExperts.php">Les Experts</a>
                <a href="agenda.php">Agenda</a>
                <a href="infos.php">Infos</a>
            </div>
        </nav>
    </header>
    <div id="diapo"></div>
    <main>
        <?php
        echo '<h1>' . $categorie . '</h1>';
        require_once 'dbConnect.php';
        $db = createDbConnection();
        $query = mysqli_query($db, "SELECT * FROM association WHERE categorie='$categorie';");
        while ($row = mysqli_fetch_assoc($query)) {
            $nom = $row['nom'];
            $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            echo '<div class="asso">';
            echo '<a href="association.php?association=' . $nom . '">' . $nom . '<p>Themes : ' . $row['themes'] . ' </p> </a>';
            echo '</div>';
        }
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
</body>

</html>