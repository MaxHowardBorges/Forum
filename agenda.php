<?php
require_once 'dbConnect.php';
$db = createDbConnection();
$query = mysqli_query($db, "SELECT * FROM evenement;");
while ($row = mysqli_fetch_assoc($query)) {
  $dateDebut = $row["dateDebut"];
  $couleur = $row["couleur"];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/style.css" />
  <title>Agenda - Association Forum de Grasse - Alpes maritimes</title>
</head>

<body>
  <header>
    <nav class="topnav">
      <div class="left">
        <img id="logo" src="/assets/img/forum_logo.png" onclick="window.location.href = 'index.html'" />
      </div>
      <div class="right">
        <div class="dropdown">
          <a href="index.html">Accueil</a>
          <div class="dropdown-content">
            <a href="index.html#Mot">Mot</a>
            <a href="index.html#Activites">Activites</a>
          </div>
        </div>
        <a href="quiSommesNous.html">Qui Sommes Nous</a>
        <a href="journéeForum.html">Journée Forum</a>
        <a href="annuaire.html">Annuaire</a>
        <a href="rencontres.html">Rencontres</a>
        <a href="lesExperts.html">Les Experts</a>
        <a class="active" href="agenda.php">Agenda</a>
        <a href="infos.html">Infos</a>
      </div>
    </nav>
  </header>
  <main>
    <script>
      // var titre = "titre";
      // var description = "description";
      // var dateDebut = "2023-05-24";
      // var dateFin = "2023-05-24";
      // var type = "annuel";
      // var couleur = "Art et Culture";
      // var couleur = "Humanitaire, lien social et Civique";

      var dateDebut = "<?php echo $dateDebut; ?>";
      var couleur = "<?php echo $couleur; ?>";
      console.log(dateDebut);
      var currentMonth = new Date().getMonth();
      var currentYear = new Date().getFullYear();

      function previousMonth() {
        currentMonth--;
        if (currentMonth < 0) {
          currentMonth = 11;
          currentYear--;
        }
        updateCalendar();
      }

      function nextMonth() {
        currentMonth++;
        if (currentMonth > 11) {
          currentMonth = 0;
          currentYear++;
        }
        updateCalendar();
      }

      function updateCalendar() {
        var monthNames = [
          "Janvier",
          "Février",
          "Mars",
          "Avril",
          "Mai",
          "Juin",
          "Juillet",
          "Août",
          "Septembre",
          "Octobre",
          "Novembre",
          "Décembre",
        ];
        var jours = ["Lu", "Ma", "Me", "Je", "Ve", "Sa", "Di"];
        var monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        var today = new Date();
        var thisDay = today.getDate();
        var year = currentYear;
        if ((year % 4 == 0 && year % 100 != 0) || year % 400 == 0) {
          monthDays[1] = 29;
        }
        var nDays = monthDays[currentMonth];
        var firstDay = new Date(year, currentMonth, 0);
        var startDay = firstDay.getDay();
        var tb = document.createElement("table");
        var tbr = tb.insertRow(-1);
        var tbh = document.createElement("th");
        tbh.setAttribute("colspan", "5");
        var tbhtxt = document.createTextNode(
          monthNames[currentMonth] + " " + year
        );
        tbh.appendChild(tbhtxt);
        var before = document.createElement("th");
        before.setAttribute("class", "onclick");
        var beforetxt = document.createTextNode("<");
        before.appendChild(beforetxt);
        before.addEventListener("click", previousMonth);
        tbr.appendChild(before);
        tbr.appendChild(tbh);
        var after = document.createElement("th");
        after.setAttribute("class", "onclick");
        var aftertxt = document.createTextNode(">");
        after.appendChild(aftertxt);
        after.addEventListener("click", nextMonth);
        tbr.appendChild(after);
        var tbr = tb.insertRow(-1);
        for (var i = 0; i < jours.length; i++) {
          tbr.insertCell(-1).appendChild(document.createTextNode(jours[i]));
        }
        var tbr = document.createElement("tr");
        var column = 0;
        for (var i = 0; i < startDay; i++) {
          tbr.insertCell(0);
          column++;
        }
        for (var i = 1; i <= nDays; i++) {
          var tdd = tbr.insertCell(-1);
          if (currentMonth === new Date().getMonth()) {
            i === thisDay ? (tdd.style.color = "#FF0000") : null;
          }
          tdd.appendChild(document.createTextNode(i));
          column++;
          if (column === 7) {
            tb.appendChild(tbr);
            var tbr = document.createElement("tr");
            column = 0;
          }
          i === nDays ? tb.appendChild(tbr) : null;

          //oui
          var date = currentYear + "-" + (currentMonth + 1) + "-" + i;
          if (currentMonth + 1 < 10) {
            var date = currentYear + "-0" + (currentMonth + 1) + "-" + i;
          }
          if (date == dateDebut) {
            var div = document.createElement("div");
            div.style.width = "100%";
            div.style.height = "4px";
            if (couleur == "Art et Culture") {
              div.style.backgroundColor = "#02b804";
            } else if (couleur == "Humanitaire, lien social et Civique") {
              div.style.backgroundColor = "#4a03c1";
            }
            tdd.appendChild(div);
          }
          //oui
        }
        while (column < 7) {
          tbr.insertCell(column);
          column++;
        }
        var oldCalendar = document.getElementById("calendar");
        if (oldCalendar) {
          oldCalendar.parentNode.removeChild(oldCalendar);
        }
        var contCalendar = document.getElementById("contcalendar");
        contCalendar.appendChild(tb);
        tb.setAttribute("id", "calendar");
      }
      typeof window.addEventListener === "undefined" ?
        window.attachEvent("onload", updateCalendar) :
        addEventListener("load", updateCalendar, false);
    </script>
    <div id="contcalendar"></div>
  </main>
  <footer>
    <div class="bottomnav">
      <div class="left"></div>
      <div class="center">
        <a href="partenaires.html">Partenaires</a>
        <a href="contacter.html">Contacter</a>
      </div>
      <div class="right"></div>
    </div>
  </footer>
</body>

</html>