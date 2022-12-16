<!DOCTYPE html>
<html dir="ltr" lang="fr">
    <head>
        <title>Statistiques</title>
        <link rel="stylesheet" href="Statistiques.css">
        <meta charset="utf-8">
    </head>
    <?php
        include("View/Header.php");
    ?>
    <header>
        <div class="Bandeau">
            <a class="Pages" href="Stats-Température.html">
                <img class="Logo" src="Data/temperature.png">
                <div>
                    <p>Température</p>
                </div>
            </a>
            <a class="Pages" href="Stats-Cardiaque.html">
                <img class="Logo" src="Data/cardiaque.png">
                <div>
                    <p>Cardiaque</p>
                </div>
            </a>
            <a class="Pages" href="Stats-CO2.html">
                <img class="Logo" src="Data/">
                <div>
                    <p>CO2</p>
                </div>
            </a>
            <a class="Pages" href="Stats-Géolocalisation.html">
                <img class="Logo" src="Data/geolocalisation.png">
                <div>
                    <p>Géolocalisation</p>
                </div>
            </a>
            <a class="Pages" href="Stats-Sonore.html">
                <img class="Logo" src="Data/sonore.png">
                <div>
                    <p>Sonore</p>
                </div>
            </a>
        </div>
    </header>
    <body>
        <div class="Stats">
            <div class="Infos">
                <div>
                    <p>Température actuelle :</p>
                </div>
            </div>
            <div class="Infos">
                <div>
                    <p>Température moyenne sur la journée :</p>
                </div>
            </div>
            <div class="Infos">
                <div>
                    <p>Température minimale et maximale du jour :</p>
                </div>
            </div>
            <div class="Conseils">
                <div>
                    <p>Température idéale et conseils :</p>
                </div>
            </div>
        </div>
        <div class="Graphique">
            
        </div>
        <?php
            include("View/Footer.php");
        ?>
    </body>
</html>