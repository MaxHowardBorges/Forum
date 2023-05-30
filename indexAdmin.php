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
                    <button class="ajouter">MODIFIER</button>
                    <img src="assets/img/forum_journeeforum2.JPG" width="700px" />
                    <button class="ajouter">MODIFIER</button>
                </div>
                <div class="divtexte">
                    <h2 id="Mot">Le mot du Président</h2>
                    <p>
                        Chers amis, <br />Le conseil d’administration de FORUM est fier de
                        pouvoir mettre à votre disposition, en dépit des difficultés liées
                        à la covid-19, ce magnifique outil qu’est l’ANNUAIRE DES
                        ASSOCIATIONS 2021. <br />Avec le FORUM des associations,
                        l’événement phare de notre rentrée à mi-septembre, l’annuaire que
                        nous avons créé pour vous est un incontournable de la vie
                        grassoise.<br />Ce guide est destiné à mieux faire connaitre les
                        associations grassoises (et du pays de Grasse), leurs richesses et
                        leurs complémentarités. Il offre un panoramique de la dynamique
                        associative.<br />Chacun y trouvera son compte, quelque soient ses
                        pôles d’intérêt. <br />En 2020 cette dynamique aura souffert des
                        confinements imposés. Il a fallu se montrer encore plus créatifs,
                        utiliser de nouveaux modes de communication. Pour nombre d’entre
                        nous, les réunions « virtuelles » ont remplacé nos rencontres et
                        échanges de vive voix. La plupart de nos manifestations ont été
                        reportées, voire annulées … Les finances du monde associatif en
                        souffrent …<br />De ces nouvelles contraintes tirons ensemble une
                        force nouvelle, une dynamique salutaire, qui nous serviront dans
                        le futur.<br />2021 sera, nous l’espérons, une année de
                        consolidation et de reprise du cours normal de nos activités, mais
                        avec de nouveaux savoir-faire acquis pendant cette crise
                        sanitaire. <br />Quoiqu’il en soit la vie associative a toujours
                        été et restera un des piliers du savoir-vivre ensemble, un lieu de
                        partage et d’échanges, un lien de solidarité. <br />C’est ainsi
                        que nous le vivons à FORUM, au service du monde associatif depuis
                        maintenant 41 ans.<br />Acteur et fédérateur du monde associatif
                        grassois, FORUM se renouvelle aussi.<br />Changement de
                        présidence, de nouveaux challenges et discussions autour de la
                        reprise totale de l’accueil de la Maison Des Associations par les
                        structures municipales, voilà les nouveaux horizons 2021.
                        <br />FORUM continue aussi sa mission fédératrice, de conseil et
                        d’appui au monde associatif.<br />Nous créons un collège
                        d’experts, en cours de mise en place. Son rôle sera de vous
                        apporter les meilleurs éclairages dans la plupart des compétences
                        utiles à la vie associative (comptable, juridique, social,
                        informatique, nouvelles technologies, communication, etc…).<br />Enfin
                        nous restons plus que jamais à votre écoute et serons vos relais
                        de communication des manifestations et évènements associatifs, au
                        travers de notre site internet
                        (http://www.assoforum-paysdegrasse.fr/) et de notre page Facebook
                        (http://www.facebook.com/forum.grasse.paysdegrasse). <br />Que
                        vous soyez à la recherche de VOTRE future association, déjà
                        membres ou responsables associatifs, FORUM est plus que jamais à
                        votre service.
                    </p>
                    <p>Georges BRUNETTI <br />Président de Forum</p>
                </div>
                <button class="ajouter">MODIFIER</button>
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