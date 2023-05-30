<?php
session_save_path('/var/www/sessions/');
session_start();
if (isset($_SESSION['idAdministrateur']) && !empty($_SESSION['idAdministrateur'])) {
  include('journeeForumAdmin.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/quiSommesNous.css" />
  <link rel="stylesheet" href="/css/diaporama_gallery.css" />
  <script src="/js/diaporama_gallery.js"></script>
  <title>Journée - Association Forum de Grasse - Alpes maritimes</title>
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
        <a class="active" href="journéeForum.php">Journée Forum</a>
        <a href="annuaire.php">Annuaire</a>
        <a href="rencontres.php">Rencontres</a>
        <a href="lesExperts.php">Les Experts</a>
        <a href="agenda.php">Agenda</a>
        <a href="infos.php">Infos</a>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">

      <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="assets/img/forum_categorieartsetculture.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="assets/img/forum_categoriebienetre.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="assets/img/forum_categoriehumanitairesocial.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="assets/img/forum_categoriesport.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="assets/img/forum_logo.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="assets/img/forum_logonoirblanc2.png" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <div class="row">
        <div class="column">
          <img class="demo cursor" src="assets/img/forum_categorieartsetculture.jpg" style="width:100%" onclick="currentSlide(1)">
        </div>
        <div class="column">
          <img class="demo cursor" src="assets/img/forum_categoriebienetre.jpg" style="width:100%" onclick="currentSlide(2)">
        </div>
        <div class="column">
          <img class="demo cursor" src="assets/img/forum_categoriehumanitairesocial.jpg" style="width:100%" onclick="currentSlide(3)">
        </div>
        <div class="column">
          <img class="demo cursor" src="assets/img/forum_categoriesport.jpg" style="width:100%" onclick="currentSlide(4)">
        </div>
        <div class="column">
          <img class="demo cursor" src="assets/img/forum_logo.png" style="width:100%" onclick="currentSlide(5)">
        </div>
        <div class="column">
          <img class="demo cursor" src="assets/img/forum_logonoirblanc2.png" style="width:100%" onclick="currentSlide(6)">
        </div>
      </div>
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