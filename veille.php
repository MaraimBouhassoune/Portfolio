<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E4 Portfolio </title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/navfooter.css">
    <link rel="stylesheet" href="./css/veille.css">

</head>
<!-- <h3>LES PRINCIPAUX OUTILS DE MA VEILLE</h3><br>
        <ul>
            <li>Les sites d’actualités (par exemple pour l’informatique : Developpez.com, …)</li>
            <li>Les bases de dépôts de brevets gratuites: Espacenet, Patentscope, UPSTO, The Lens, EAPATIS.</li>
            <li>Les communiqués de presse des fournisseurs et des éditeurs</li>
            <li>Les sites spécialisés</li>
        </ul> -->

<body class="bodyveille">
    <nav>
        <?php include("./include/nav.php") ?>
    </nav>
    <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
        <h2>Veille Technologique</h2><br><br>
        <p></p>
    </header>
    <div class="veille-technologique">
        <!-- <h2>Veille Technologique</h2><br><br> -->
        <h3>LA VEILLE TECHNOLOGIQUE ? C'EST QUOI ?</h3>
        <p>La veille technologique est un processus d'identification et d'analyse des innovations technologiques dans un secteur d'activité donné. Elle permet aux entreprises de devancer leurs concurrents, de développer <br>de nouveaux produits et services et d'exploiter de nouvelles opportunités.</p>
        <br><br>
        <br>
        <h3>SUJET DE MA VEILLE</h3>
        <p>Comme sujet de Veille Technologique, j’ai choisi « l'intelligence artificielle pour le Développement Web ».<br> </p>
        <!-- Vous pouvez lister les thèmes ici ou dans une autre section selon votre préférence -->
        <br><a href="./pages/page_veille.php" class="visualiser">Visualiser</a>
    </div>



    <div id="BackgroundBlock">
        <h2 class="textshadow title">Mon projet professionnel</h2>
        <div class="themeblock">
            <div class="linkblock">
                <a href="https://www.ambient-it.net/" target="_blank">
                    <img src="/img/logo_ambient.png" alt="Ambient-IT">
                    <p class="sourcename merriweather-500"><span>Ambient IT :</span><br>Entreprise d'accueil pour le stage et l'apprentissage</p>
                </a>
            </div>
            <div class="linkblock">
                <a href="https://www.esgi.fr/" target="_blank">
                    <img src="/img/logo_esgi.jpg" alt="ESGI">
                    <p class="sourcename merriweather-500"><span>École Supérieure du Génie Informatique :</span><br>Établissement pour la suite de mon parcours scolaire</p>
                </a>
            </div>
        </div>
        <h2 class="textshadow title">Mon environnement d'apprentissage personnel</h2>
        <div class="themeblock">
            <div class="linkblock">
                <a href="https://www.w3schools.com/" target="_blank">
                    <img src="/img/logo_w3.png" alt="W3Schools">
                    <p class="sourcename merriweather-500"><span>W3Schools :</span><br>Formation en ligne sur des langages de programmation différents</p>
                </a>
            </div>
            <div class="linkblock">
                <a href="https://kinsta.com/fr/base-de-connaissances/fichiers-wordpress/" target="_blank">
                    <img src="/img/logo_kinsta.jpg" alt="Kinsta">
                    <p class="sourcename merriweather-500"><span>Kinsta :</span><br>Un guide complet sur les fichiers WordPress et leur utilisation</p>
                </a>
            </div>
        </div>
        <h2 class="textshadow title">Ma veille informationnelle</h2>
        <div class="themeblock">
            <div class="linkblock">
                <a href="https://www.developpez.com/" target="_blank">
                    <img src="/img/logo_developpez.png" alt="Developpez">
                    <p class="sourcename merriweather-500"><span>Developpez :</span><br>Actualités et événements du milieu informatique</p>
                </a>
            </div>
        </div>
        <h2 class="textshadow title">Mon identité professionnelle</h2>
        <div class="themeblock">
            <div class="linkblock">
                <a href="https://fr.linkedin.com/in/mariam-bouhassoune" target="_blank">
                    <img src="/img/logo_linkedin.jpg" alt="LinkedIn">
                    <p class="sourcename merriweather-500"><span>LinkedIn :</span><br>Mon compte professionnel</p>
                </a>
            </div>
            <div class="linkblock">
                <a href="https://github.com/MaraimBouhassoune" target="_blank">
                    <img src="/img/logo_github.jpg" alt="GitHub">
                    <p class="sourcename merriweather-500"><span>GitHub :</span><br>Mon compte pour la collaboration entre développeurs</p>
                </a>
            </div>
        </div>
    </div>

    <footer>
        <?php include("./include/footer.php") ?>
    </footer>

</body>


</html>