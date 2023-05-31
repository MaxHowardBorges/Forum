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
    <link rel="stylesheet" href="/css/quiSommesNous.css" />
    <title>
        Qui Sommes Nous - Association Forum de Grasse - Alpes maritimes
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
                <a class="active" href="quiSommesNous.php">Qui Sommes Nous</a>
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
        <h2>Qui sommes-nous ?</h2>
        <p>
            FORUM est une association grassoise, du type loi de 1901, créée en 1984.
            Son objet est de promouvoir la vie associative par toutes initiatives
            concourant a l'amélioration de la communication entre les associations
            elles-mêmes d'une part et les associations et le public d'autre part.
            Conformément à ses statuts rénovés du 28 mars 2012, elle est ouverte à
            toutes les associations ayant un but culturel, sportif, social,
            humanitaire, éducatif, touristique, de loisirs ou d'animations,
            reconnues sans but lucratif, politique ou confessionnel exclusivement.
            L'activité de ces associations devant s'exercer sur la commune de Grasse
            ou sur des communes du Pays de Grasse.
        </p>
        <button class="boutonbeau">MODIFIER</button>
        <div class="container reveal fade-right">
            <div class="div2">
                <div class="img">
                    <img src="assets/img/forum_journeeforum1.JPG" width="700px" />
                    <button class="ajouter">MODIFIER</button>
                </div>
                <div class="divtexte">
                    <p>
                        Dès le départ, il y avait un « esprit forum » avec les
                        caractéristiques suivantes :<br />

                        Volonté de conserver une indépendance vis-à-vis du monde
                        associatif quelle que soit la puissance.<br />
                        Explorer la convivialité et la fraternité société.<br />
                        FORUM a lieu une fois par an en automne Associations Pays de
                        Grasse, le grand événement qui rend possible les membres sont,
                        stands et animations.<br />
                        La première de ces manifestations prit l'initiative en 1981. Jeune
                        Chambre de Commerce et Pays Grassois de Grasse.<br />
                        En 1984, l'association reprend FORUM. Depuis lors, le nombre de
                        participants et le succès n'ont cessé de croître Il n'y a eu aucun
                        démenti de cet événement. Au 37e Forum, En septembre 2017, le
                        nombre d'organisations représentatives dépassait 150, Pour plus de
                        300 membres. <br />
                    </p>
                    <button class="boutonbeau">MODIFIER</button>
                </div>
            </div>
        </div>
        <div class="div3">
            <p>
                L’Association FORUM publie annuellement l’Annuaire des Associations de
                Grasse et du Pays Grassois, commencée en 1990, et qui s’enrichit
                chaque année d’un nombre croissant d’associations adhérentes.
                <br />Une autre action très importante de FORUM a été la réalisation
                de son Site Internet (www.assoforum-paysdegrasse.fr) qui est devenu un
                outil incontournable. Avec plus de 6 000 visites mensuelles, il est le
                reflet incontestable de son succès et offre la possibilité aux
                associations adhérentes ainsi qu’au grand public d’entrer en relation,
                de diffuser leurs manifestations et de trouver l’information qu’ils
                recherchent. Il en appelle beaucoup d’autres à venir nous rejoindre.
                <br />Un site web mobile est aussi à votre disposition afin de nous
                suivre même de votre smartphone. <br />L'Association FORUM organise
                aussi de grandes manifestations culturelles, récréatives et
                humanitaires pour fédérer les associations entre elles.
            </p>
            <button class="boutonbeau">MODIFIER</button>
        </div>
        <h3>Une équipe au service des associations</h3>
        <div class="aaa">
            <div class="flip-card">
                <div id="flip-card-inner1" class="flip-card-inner">
                    <div class="flip-card-front">
                        <h2>Le bureau</h2>
                    </div>
                    <div class="flip-card-back">
                        <p>
                            Président : BRUNETTI Georges (Amphore International)<br />Vice-Président
                            : GUIGNARD Roger (Patrimoine Vivant du Pays de Grasse)<br />Trésorière
                            : MENARD Françoise (Amicale Grassoise Radio Assistance
                            Sécurité)<br />Secrétaire : SABORET Danièle (Découverte Moyen et
                            Haut Pays)
                        </p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div id="flip-card-inner2" class="flip-card-inner">
                    <div class="flip-card-front">
                        <h2>Les administrateurs</h2>
                    </div>
                    <div class="flip-card-back">
                        <p>
                            MICHELLIS Mireille : Rotary Club Grasse Amiral<br />PECOURT Luc
                            : Fenêtre sur cour<br />BONIN Nicole : Cercle Culturel du Pays
                            de Grasse<br />LAGET Jean-René : Grasse à l'Unisson<br />MENARD
                            Hervé : Club d'Aviron de St Cassien<br />LAMOUREUX Jean-Marie :
                            Solidarités Nouvelles Face au Chomage 06<br />LURKIN Claudie :
                            Grasse Accueil Villes Françaises<br />CORNER Maxime : Un
                            partage, Un sourire, Un bonheur
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <button class="boutonbeau">MODIFIER</button>
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

</html>