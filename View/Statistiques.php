<?php // content="text/plain; charset=utf-8"
include('phpgraphlib/phpgraphlib.php');

// Set up the graph data
$data = array(
  'Jan' => 10,
  'Feb' => 20,
  'Mar' => 30,
  'Apr' => 40,
  'May' => 50,
  'Jun' => 60
);

// Create a new graph
$graph = new PHPGraphLib(400, 300);

// Set the graph data and title
$graph->addData($data);
$graph->setTitle('My Bar Graph');

// Set the y-axis label
$graph->setYAxis('Units');

// Set the bar colors
$graph->setBarColor('navy', 'teal');

?>
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
    <header class="Selection">
        <style>
            a.Pages:link {color:black; text-decoration:none}
            a.Pages:visited {color:black; text-decoration:none}
            a.Pages:hover {background-color: #f3f3f3}
            a.Pages:active {background-color: #eeeeee}
        </style>
        <div class="Bandeau">
            <a class="Pages" id="Temp">
                <img class="Logo" src="Data/thermometre.png">
                <div>
                    <p>Température</p>
                </div>
            </a>
            <a class="Pages" id="Card">
                <img class="Logo" src="Data/cardiaque.png">
                <div>
                    <p>Cardiaque</p>
                </div>
            </a>
            <a class="Pages" id="TCO2">
                <img class="Logo" src="Data/co2.png">
                <div>
                    <p>CO2</p>
                </div>
            </a>
            <a class="Pages" id="Géol">
                <img class="Logo" src="Data/geolocalisation.png">
                <div>
                    <p>Géolocalisation</p>
                </div>
            </a>
            <a class="Pages" id="Sono">
                <img class="Logo" src="Data/sonore.png">
                <div>
                    <p>Sonore</p>
                </div>
            </a>
        </div>
    </header>
    <body>
        <div class="Température" id="D1">
            <div class="Stats_Graphique">
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
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                        </div>
                    </div>
                </div>
                <div class="Graphique">
                    <?php $graph->createGraph(); ?>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="Cardiaque" id="D2">
            <div class="Stats_Graphique">
                <div class="Stats">
                    <div class="Infos">
                        <div>
                            <p>Rythme cardiaque actuelle :</p>
                        </div>
                    </div>
                    <div class="Infos">
                        <div>
                            <p>Rythme cardiaque moyen sur la journée :</p>
                        </div>
                    </div>
                    <div class="Infos">
                        <div>
                            <p>Rythme cardiaque minimal et maximal du jour :</p>
                        </div>
                    </div>
                    <div class="Conseils">
                        <div>
                            <p>Rythme cardiaque idéal et conseils :</p>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                        </div>
                    </div>
                </div>
                <div class="Graphique">
                    <div>
                        <img class="graph" src="Data/graphique.png">
                    </div>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="CO2" id="D3">
            <div class="Stats_Graphique">
                <div class="Stats">
                    <div class="Infos">
                        <div>
                            <p>Taux de CO2 actuel :</p>
                        </div>
                    </div>
                    <div class="Infos">
                        <div>
                            <p>Taux de CO2 moyen sur la journée :</p>
                        </div>
                    </div>
                    <div class="Infos">
                        <div>
                            <p>Taux de CO2 minimal et maximal du jour :</p>
                        </div>
                    </div>
                    <div class="Conseils">
                        <div>
                            <p>Taux de CO2 idéal et conseils :</p>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                        </div>
                    </div>
                </div>
                <div class="Graphique">
                    <div>
                        <img class="graph" src="Data/graphique.png">
                    </div>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="Géolocalisation" id="D4">
            <div class="Stats_Graphique">
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
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                        </div>
                    </div>
                </div>
                <div class="Graphique">
                    <div>
                        <img class="graph" src="Data/graphique.png">
                    </div>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="Sonore" id="D5">
            <div class="Stats_Graphique">
                <div class="Stats">
                    <div class="Infos">
                        <div>
                            <p>Volume sonore actuelle :</p>
                        </div>
                    </div>
                    <div class="Infos">
                        <div>
                            <p>Volume sonore moyen sur la journée :</p>
                        </div>
                    </div>
                    <div class="Infos">
                        <div>
                            <p>Volume sonore minimal et maximal du jour :</p>
                        </div>
                    </div>
                    <div class="Conseils">
                        <div>
                            <p>Volume sonore idéal et conseils :</p>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                        </div>
                    </div>
                </div>
                <div class="Graphique">
                    <div>   
                        <img class="graph" src="Data/graphique.png">
                    </div>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
            </div>
        </div>
        <script>
            var Temp=document.getElementById('Temp');
            var Card=document.getElementById('Card');
            var TCO2=document.getElementById('TCO2');
            var Géol=document.getElementById('Géol');
            var Sono=document.getElementById('Sono');
            Temp.addEventListener("click", function() {
                document.getElementById('D1').style.display="Contents";
                document.getElementById('D2').style.display="None";
                document.getElementById('D3').style.display="None";
                document.getElementById('D4').style.display="None";
                document.getElementById('D5').style.display="None";
            });
            Card.addEventListener("click", function() {
                document.getElementById('D1').style.display="None";
                document.getElementById('D2').style.display="Contents";
                document.getElementById('D3').style.display="None";
                document.getElementById('D4').style.display="None";
                document.getElementById('D5').style.display="None";
            });
            TCO2.addEventListener("click", function() {
                document.getElementById('D1').style.display="None";
                document.getElementById('D2').style.display="None";
                document.getElementById('D3').style.display="Contents";
                document.getElementById('D4').style.display="None";
                document.getElementById('D5').style.display="None";
            });
            Géol.addEventListener("click", function() {
                document.getElementById('D1').style.display="None";
                document.getElementById('D2').style.display="None";
                document.getElementById('D3').style.display="None";
                document.getElementById('D4').style.display="Contents";
                document.getElementById('D5').style.display="None";
            });
            Sono.addEventListener("click", function() {
                document.getElementById('D1').style.display="None";
                document.getElementById('D2').style.display="None";
                document.getElementById('D3').style.display="None";
                document.getElementById('D4').style.display="None";
                document.getElementById('D5').style.display="Contents";
            });
        </script>
        <?php
            include("View/Footer.php");
        ?>
    </body>
</html>