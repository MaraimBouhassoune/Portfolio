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
        <?php include("./include/nav.php") ?>
    </nav>
    <main>
        <!-- Div for each group of three competences -->
        <?php
        $competences = array("Compétence 1", "Compétence 2", "Compétence 3", "Compétence 4", "Compétence 5", "Compétence 6","Rapport Stage","Rapport Alternance","Rapport Projet","Rapport Site Portfolio");
        $total_competences = count($competences);

        // Process every three competences
        for ($j = 0; $j < $total_competences; $j += 3) {
            echo "<div class='competence-container'>";
            for ($i = $j; $i < $j + 3 && $i < $total_competences; $i++) {
                echo "<div class='competence'>";
                echo "<h2 style='color: white;'>{$competences[$i]}</h2>";
                echo "<a href='competence_page/competence" . ($i + 1) . ".php' class='visualiser'>Visualiser</a>";
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </main>

    <footer>
        <?php include("./include/footer.php") ?>
    </footer>

</body>

</html>
