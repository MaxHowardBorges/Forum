<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/form.css" />
  <link rel="stylesheet" href="/css/quiSommesNous.css" />
  <title>Association Forum de Grasse - Alpes maritimes</title>
</head>
<header>
  <nav class="topnav">
    <div class="left">
      <img id="logo" src="/assets/img/forum_logo.png" onclick="window.location.href = 'index.php'" />
    </div>
    <div class="right">
      <div class="dropdown">
        <a href="index.php">Accueil</a>
        <div class="dropdown-content">
          <a href="#Mot">Mot</a>
          <a href="#Activites">Activites</a>
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

<body>
  <div class="div-form">
    <form class="form" action="ajouterAssociation.php" method="post">
      <p class="title">Ajouter une nouvelle association</p>
      <label>
        <input required="" placeholder="" type="title" class="input" name="nomAssociation" />
        <span>Nom de l'association</span>
      </label>

      <label>
        <input required="" placeholder="" type="text" class="input" name="themes" />
        <span>Themes</span>
      </label>

      <label for="categorieInput" class="input">Sélectionner une catégorie d'association :</label>
      <select id="categorieInput" name="categorieInput" class="input">
        <?php
        require_once 'dbConnect.php';
        $db = createDbConnection();
        $query = mysqli_query($db, "SELECT * FROM categorie;");
        while ($row = mysqli_fetch_assoc($query)) {
          $nom = $row['nom'];
          $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
          echo '<option value="' . $nom . '">' . $nom . '</option>';
        }
        ?>
      </select>

      <label>
        Description
        <textarea data-field-required="true" name="message" class="input"></textarea>
      </label>

      <button type="submit">
        Ajouter
        <div class="arrow-wrapper">
          <div class="arrow"></div>
        </div>
      </button>
    </form>
  </div>
</body>
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

</html>