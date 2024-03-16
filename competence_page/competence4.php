<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E4 Portfolio </title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="../css/navfooter.css">
    <link rel="stylesheet" href="../css/competences.css">
    <link rel="stylesheet" href="../css/veille.css">
</head>

<body class="bodycompetences">
    <nav>
        <a style="color:red" href="../competences.php" class="home-button">Retour à l'accueil</a>
    </nav>
    <main>
        <article style="margin-top:8px" class="C4">
            <img id="myImg" src="../img/Clickup.png" alt="Article Image 1" style="width:50%; cursor:pointer; ">

            <h3>Gestion de Projet et Organisation des Tâches</h3>
            <br>
            <p>
                En tant qu'unique membre de l'équipe informatique au sein de Ambient it, une structure en démarrage, j'ai été amenée à collaborer étroitement avec mon tuteur, le directeur de l'entreprise et ingénieur informatique de formation. Cette collaboration directe m'a permis de m'immerger pleinement dans la gestion de projet, en mettant l'accent sur l'analyse, la planification et le suivi des activités.
            </p>
            <br>
            <p>
                Analyse des objectifs et modalités d'organisation d'un projet : <br>
                Les objectifs étaient clarifiés quotidiennement grâce aux tâches assignées sur ClickUp. Cette interaction quotidienne avec mon tuteur permettait d'expliciter les modalités d'organisation du projet et de m'assurer que je travaillais en adéquation avec la vision stratégique de l'entreprise.
            </p>
            <br>
            <p>
                Planification des activités :<br>
                Chaque matin, nous révisions ensemble mon tableau de bord sur ClickUp pour discuter de l'avancement des tâches en cours. Lorsque toutes les tâches assignées étaient complétées, je prenais l'initiative de m'auto-attribuer des activités, comme la correction des erreurs de code, démontrant ainsi ma capacité à planifier efficacement mes activités en fonction des besoins immédiats du projet.
            </p>
            <br>
            <p>
                Évaluation des indicateurs de suivi d'un projet et analyse des écarts :<br>
                Mon outil de prise de notes, utilisé comme brouillon, jouait un rôle crucial dans la préparation des échanges avec mon tuteur. J'y consignais les points essentiels à discuter, ce qui me permettait de préparer un compte rendu clair et concis. Cet outil m'aidait à justifier les écarts entre les résultats attendus et ceux obtenus, et à documenter le projet, en accord avec les indicateurs de compétence.
            </p>
            <br>
            <p>
                En adoptant ces pratiques, j'ai pu atteindre les objectifs fixés et contribuer de manière significative au développement informatique de l'entreprise. Mon rôle de seule développeuse m'a offert une vue d'ensemble sur la gestion de projet et m'a permis de développer des compétences cruciales telles que la planification stratégique, l'autogestion et la communication technique efficace.

            </p>
        </article>

    </main>
    <footer>
        <?php include("../include/footer.php") ?>
    </footer>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
    <script>
        // Récupère les éléments
        var modal = document.getElementById("myModal");
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        // Lorsque l'utilisateur clique sur l'image, ouvre la modal
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Lorsque l'utilisateur clique sur <span> (x), ferme la modal
        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
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