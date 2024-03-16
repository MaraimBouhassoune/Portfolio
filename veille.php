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

<body class="bodyveille">
    <nav>
        <?php include("./include/nav.php.") ?>
    </nav>
    <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
        <h2>Veille Technologique</h2><br><br>
        <p></p>
    </header>
    <div class="veille-technologique">
        <!-- <h2>Veille Technologique</h2><br><br> -->
        <h3>LA VEILLE TECHNOLOGIQUE ? C'EST QUOI ?</h3>
        <p>La veille technologique est un processus d'identification et d'analyse des innovations technologiques dans un secteur d'activité donné. Elle permet aux entreprises de devancer leurs concurrents, de développer <br>de nouveaux produits et services et d'exploiter de nouvelles opportunités.</p>
        <br>
        <h3>LES PRINCIPAUX OUTILS DE MA VEILLE</h3>
        <p>Les types de sources les plus utilisés sont :</p>
        <ul>
            <li>Les sites d’actualités (par exemple pour l’informatique : Developpez.com, …)</li>
            <li>Les bases de dépôts de brevets gratuites: Espacenet, Patentscope, UPSTO, The Lens, EAPATIS.</li>
            <li>Les communiqués de presse des fournisseurs et des éditeurs</li>
            <li>Les sites spécialisés</li>
        </ul>
        <p>Pour la vérification de la fiabilité des sites, j'ai utilisé : FranceVerif</p>
        <br>
        <h3>SUJET DE MA VEILLE</h3>
        <p>Comme sujet de Veille Technologique, j’ai choisi « l'intelligence artificielle au service de la cybersécurité ».<br> Pour cette thématique, je vous présenterai 4 thèmes :</p>
        <!-- Vous pouvez lister les thèmes ici ou dans une autre section selon votre préférence -->
    </div>
    <main class="articles">

        <!-- <h1>Blog sur les Dernières Technologies</h1> -->
        <article class="card">
            <img src="./img/blog-1.jpg" alt="Article Image 1">
            <h3>Devin ai</h3>
            <p>https://medium.com/@sufianmustafa0900/devin-ai-the-worlds-first-ai-software-engineer-1b4c5318bb00
                https://iaweb.fr/ia/programmation/devin-ai/
            </p>
            <a href="#">Lire la suite</a>
        </article>
        <article class="card">
            <img src="./img/blog-1.jpg" alt="Article Image 1">
            <h3>Titre de l'Article 1</h3>
            <p>Description courte de l'article 1.</p>
            <a href="#">Lire la suite</a>
        </article>
        <article class="card">
            <img src="./img/blog-1.jpg" alt="Article Image 1">
            <h3>Titre de l'Article 1</h3>
            <p>Description courte de l'article 1.</p>
            <a href="#">Lire la suite</a>
        </article>
        <article class="card">
            <img src="./img/blog-1.jpg" alt="Article Image 1">
            <h3>Titre de l'Article 1</h3>
            <p>Description courte de l'article 1.</p>
            <a href="#">Lire la suite</a>
        </article>
        <!-- Répétez les balises <article> pour plus d'articles -->
        <!-- <h1>Blog sur les Dernières Technologies</h1> -->
        <article class="card">
            <img src="./img/blog-1.jpg" alt="Article Image 1">
            <h3>Titre de l'Article 1</h3>
            <p>Description courte de l'article 1.</p>
            <a href="#">Lire la suite</a>
        </article>
        <article class="card">
            <img src="./img/blog-1.jpg" alt="Article Image 1">
            <h3>Titre de l'Article 1</h3>
            <p>Description courte de l'article 1.</p>
            <a href="#">Lire la suite</a>
        </article>

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