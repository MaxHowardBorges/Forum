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
    <link rel="stylesheet" href="/css/annuaire.css" />
    <title>Annuaire - Association Forum de Grasse - Alpes maritimes</title>
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
        <h1>Annuaire des associations</h1>

        <button class="boutonbeau" id="ajouter" onclick="window.location.href = 'ajouterAssociation.html'">AJOUTER ASSOCIATION</button>

        <div class="cat">

            <div class="categorie"><a href="index.php"><img src="assets/img/forum_categorieartsetculture.jpg" />
                    <h3>Art & Culture</h3>
                </a></div>
            <div class="categorie"><a href="index.php"><img src="assets/img/forum_categoriehumanitairesocial.jpg" />
                    <h3>Humanitaire, lien sociale et Civique</h3>
                </a></div>
            <div class="categorie"><a href="index.php"><img src="assets/img/forum_categoriesport.jpg" />
                    <h3>Sport</h3>
                </a></div>
            <div class="categorie"><a href="index.php"><img src="assets/img/forum_categorieloisirs.jpg" />
                    <h3>Animations, Loisirs et Jeunesse</h3>
                </a></div>
            <div class="categorie"><a href="index.php"><img src="assets/img/forum_categoriebienetre.jpg" />
                    <h3>Bien-être</h3>
                </a></div>
            <div class="categorie"><a href="index.php"><img src="assets/img/avatar.jpg" />
                    <h3>Écologie & environnement</h3>
                </a></div>
            <div class="categorie"><a href="index.php"><img src="assets/img/avatar.jpg" />
                    <h3>Anciens combattants et assimilés</h3>
                </a></div>
            <div class="categorie"><a href="index.php"><img src="assets/img/avatar.jpg" />
                    <h3>Économie et développement</h3>
                </a></div>
            <div class="categorie"><a href="ajouterCategorie.html"><img src="assets/img/addIcon.png" />
                    <h3>Ajouter Catégorie</h3>
                </a></div>

        </div>
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