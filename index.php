<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E4 Portfolio </title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/navfooter.css">
</head>

<body class="bodyindex">
    <nav>
        <?php include("./include/nav.php.") ?>
    </nav>

    <main>
        <div class="maintitre" id="presentation">
            <h1>
                Portfolio BTS SIO option SLAM
            </h1>
            <p>
                Je m’appelle Mariam, développeuse junior et étudiante en deuxième année de BTS SIO SLAM chez AURLOM PREPA afin <br>d’évoluer en tant que développeuse web full stack.<br> Merci pour votre visite !
            </p>
        </div>
        <div class="mainbloc" id="bloc">
            <div class="grille" id="G1">
                <h2>A Propos de moi</h2>
                <p>Consulter  <br>mon cv.</p>
                <a class="button-Grille" href="./pages/cv.php" >Consulter</a>

            </div>
            <div class="grille" id="G2">
                <h2>Mes Compétences E4</h2>
                <p>Les rapport d'activité liés aux compétences de l'épreuve E4.</p>
                <a class="button-Grille" href="./competences.php">Consulter</a>
            </div>
            <div class="grille" id="G3">
                <h2>Livraison E4</h2>
                <p>Télécharger les rapports d'activités accompagnés du Tableau de Synthèse.</p>
                <a class="button-Grille" href="">Télécharger</a>
            </div>
            <div class="grille" id="G4">
                <h2>Veille Technologique</h2>
                <p>Mon suivi des évenements dans le milieu informatique.</p>
                <a class="button-Grille" href="./veille.php">Consulter</a>
            </div>
        </div>
    </main>
    <footer>
        <?php include("./include/footer.php") ?>
    </footer>
    <script>
    // Attend que la page soit complètement chargée avant d'exécuter le code
    document.addEventListener('DOMContentLoaded', function() {
        // Récupère l'élément div que vous souhaitez cacher
        var elementToHide = document.querySelector('div[style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"]');

        // Vérifie si l'élément existe avant de tenter de le cacher
        if (elementToHide) {
            // Cache l'élément en modifiant son style
            elementToHide.style.display = "none";
        }
    });
</script>
</body>

</html>