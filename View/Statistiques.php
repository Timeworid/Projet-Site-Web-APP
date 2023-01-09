<!DOCTYPE html>
<html dir="ltr" lang="fr">
    <head>
        <title>Statistiques</title>
        <link rel="stylesheet" href="Statistiques.css">
        <meta charset="utf-8">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heure', 'Température'],
          ['00h',  1000],
          ['01h',  1170],
          ['02h',  660],
          ['03h',  1030],
          ['04h',  660],
          ['05h',  660],
          ['06h',  660],
          ['07h',  660],
          ['08h',  660],
          ['09h',  660],
          ['10h',  660],
          ['11h',  660],
          ['12h',  660],
          ['13h',  660],
          ['14h',  660],
          ['15h',  660],
          ['16h',  660],
          ['17h',  660],
          ['18h',  660],
          ['19h',  660],
          ['20h',  660],
          ['21h',  660],
          ['22h',  660],
          ['23h',  660],
          ['24h',  660]
        ]);

        var options = {
          title: 'Evolution de la température pendant la journée',
          width: 1000,
          height: 500,
          legend: { position: 'bottom' },
          chartArea: {
            backgroundColor: {
            fill: '#FF0000',
            fillOpacity: 0.1,
            }
            },
        backgroundColor: {
        fill: '#FF0000',
        fillOpacity: 0.8,
        }
        }

        var chart = new google.visualization.LineChart(document.getElementById('Temp_Graph'));

        chart.draw(data, options);
      }
    </script>
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
                    <div id="Temp_Graph" style="width: 800; height: 400; z-index:0"></div>
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