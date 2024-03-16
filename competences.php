<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E4 Portfolio </title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/navfooter.css">
    <link rel="stylesheet" href="./css/competences.css">
</head>

<body class="bodycompetences">
    <nav>
        <?php include("./include/nav.php.") ?>
    </nav>
    <main>
        
        <div class="competence-container">
            <?php
            // Tableau des compétences
            $competences = array("Compétence 1", "Compétence 2", "Compétence 3", "Compétence 4", "Compétence 5", "Compétence 6");

            // Afficher les 3 premières compétences
            for ($i = 0; $i < 3; $i++) {
                echo "<div class='competence'>";
                echo "<h2 style='color: white;'>{$competences[$i]}</h2>";
                echo "<a href='competence_page/competence" . ($i + 1) . ".php' class='visualiser'>Visualiser</a>";
                echo "</div>";
            }
            ?>
        </div>

        <div class="competence-container">
            <?php
            // Afficher les 3 compétences restantes
            for ($i = 3; $i < 6; $i++) {
                echo "<div class='competence'>";
                echo "<h2 style='color: white;'>{$competences[$i]}</h2>";
                echo "<a href='competence_page/competence" . ($i + 1) . ".php' class='visualiser'>Visualiser</a>";
                echo "</div>";
            }
            ?>
        </div>
    </main>

    <footer>
        <?php include("./include/footer.php") ?>
    </footer>
    <script>
    // Récupère l'élément div que vous souhaitez cacher
    var elementToHide = document.querySelector('div[style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"]');

    // Vérifie si l'élément existe avant de tenter de le cacher
    if (elementToHide) {
        // Cache l'élément en modifiant son style
        elementToHide.style.display = "none";
    }
</script>
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