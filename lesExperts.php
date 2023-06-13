<?php
session_save_path('/var/www/sessions/');
session_start();
if (isset($_SESSION['idAdministrateur']) && !empty($_SESSION['idAdministrateur'])) {
  include('lesExpertsAdmin.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/experts.css" />
  <title>
    Collège des experts - Association Forum de Grasse - Alpes maritimes
  </title>
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
        <a class="active" href="lesExperts.php">Les Experts</a>
        <a href="agenda.php">Agenda</a>
        <a href="infos.php">Infos</a>
      </div>
    </nav>
  </header>
  <div id="diapo"></div>
  <main>


      <div class="equipe">
          <div class="expert"> <div class="photo"><img src="assets/img/avatar.jpg"> </div> <div class="txtexpert"><h1>John John</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis tortor non odio mattis fringilla. Integer ac dapibus tellus. Etiam sed ipsum eget magna molestie suscipit.</p></div> </div>
          <div class="expert"> <div class="photo"><img src="assets/img/avatar.jpg"> </div> <div class="txtexpert"><h1>John John</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis tortor non odio mattis fringilla. Integer ac dapibus tellus. Etiam sed ipsum eget magna molestie suscipit.</p></div> </div>
          <div class="expert"> <div class="photo"><img src="assets/img/avatar.jpg"> </div> <div class="txtexpert"><h1>John John</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis tortor non odio mattis fringilla. Integer ac dapibus tellus. Etiam sed ipsum eget magna molestie suscipit.</p></div> </div>
          <div class="expert"> <div class="photo"><img src="assets/img/avatar.jpg"> </div> <div class="txtexpert"><h1>John John</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis tortor non odio mattis fringilla. Integer ac dapibus tellus. Etiam sed ipsum eget magna molestie suscipit.</p></div> </div>
          <div class="expert"> <div class="photo"><img src="assets/img/avatar.jpg"> </div> <div class="txtexpert"><h1>John John</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis tortor non odio mattis fringilla. Integer ac dapibus tellus. Etiam sed ipsum eget magna molestie suscipit.</p></div> </div>
          <div class="expert"> <div class="photo"><img src="assets/img/avatar.jpg"> </div> <div class="txtexpert"><h1>John John</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis tortor non odio mattis fringilla. Integer ac dapibus tellus. Etiam sed ipsum eget magna molestie suscipit.</p></div> </div>
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