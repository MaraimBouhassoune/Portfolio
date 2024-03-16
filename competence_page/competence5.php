<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E4 Portfolio </title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="../css/navfooter.css">
    <link rel="stylesheet" href="../css/competences.css">
</head>

<body class="bodycompetences">
    <nav>
        <a href="../competences.php" class="home-button">Retour à l'accueil</a>
    </nav>
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
        <?php include("../include/footer.php") ?>
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