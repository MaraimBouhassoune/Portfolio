<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificat Stage</title>
    <style>
        body {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            /* Ajout pour organiser les éléments en colonne */
        }

        #pdf-container {
            width: 90%;
            height: 90%;
        }

        .home-button {
            margin-top: 20px;
            padding: 10px 20px;
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .button-Grille {
            color: white;
            cursor: pointer;
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            border: none;
            color: white;
            padding: 0.81rem 2rem;
            display: inline-block;
            font-size: 20px;
            border-radius: 50px;
            transition: transform 0.2s, box-shadow 0.2s;
            text-transform: uppercase;
            font-weight: 600;
            text-align: center;

        }

        .home-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div id="pdf-container">
        <embed src="../pdf/Certificat_stage.pdf" type="application/pdf" width="100%" height="100%">
    </div>
    <!-- Bouton de retour à l'accueil -->
    <a href="../apropo.php" class="home-button">Retour</a>
</body>

</html>