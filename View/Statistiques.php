<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');

$datay1 = array(20,15,23,15);
$datay2 = array(12,9,42,8);
$datay3 = array(5,17,32,24);

// Setup the graph
$graph = new Graph(300,250);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Filled Y-grid');
$graph->SetBox(false);

$graph->SetMargin(40,20,36,63);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array('A','B','C','D'));
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Line 1');

// Create the second line
$p2 = new LinePlot($datay2);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Line 2');

// Create the third line
$p3 = new LinePlot($datay3);
$graph->Add($p3);
$p3->SetColor("#FF1493");
$p3->SetLegend('Line 3');

$graph->legend->SetFrameWeight(1);

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
                    <?php $graph->Stroke(); ?>
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