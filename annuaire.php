<?php
session_save_path('/var/www/sessions/');
session_start();
if (isset($_SESSION['idAdministrateur']) && !empty($_SESSION['idAdministrateur'])) {
  include('annuaireAdmin.php');
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
    <div class="cat">
      <?php
      require_once 'dbConnect.php';
      $db = createDbConnection();
      $query = mysqli_query($db, "SELECT * FROM categorie;");
      while ($row = mysqli_fetch_assoc($query)) {
        $nom = $row['nom'];
        $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $couleur1 = $row['couleur'];
        $couleur2 = $row['couleur2'];
        echo '<div class="categorie" style="--couleur1: ' . $couleur1 . '; --couleur2: ' . $couleur2 . '">';
        echo '<a href="categorie.php?categorie=' . $nom . '"><img src="assets/img/forum_categorieartsetculture.jpg" />';
        echo '<h3>' . $nom . '</h3>';
        echo '</a>';
        echo '</div>';
      }
      ?>
    </div>
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