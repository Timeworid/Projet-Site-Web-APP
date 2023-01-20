<!DOCTYPE html>
<html dir="ltr" lang="fr">
    <head>
        <title>Statistiques</title>
        <link rel="stylesheet" href="Statistiques.css">
        <meta charset="utf-8">
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript">
            if (window.XMLHttpRequest) {
                xmlhttp=new XMLHttpRequest();
            } else {
                if (window.ActiveXObject){
                    try {
                        xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {
                        try {
                            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {
                            console.log(e);
                        }
                    }
                }
            }
            xmlhttp.open("POST","routeur.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send("action=EnvoiMsg");
            xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                    console.log(xmlhttp.responseText);
                }
            }
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data_Temp = google.visualization.arrayToDataTable([
          ['Heure', 'Température'],
          ['00h',  2],
          ['01h',  3],
          ['02h',  3],
          ['03h',  4],
          ['04h',  5], 
          ['05h',  5],
          ['06h',  5],
          ['07h',  6],
          ['08h',  6],
          ['09h',  7],
          ['10h',  7],
          ['11h',  8],
          ['12h',  9],
          ['13h',  9],
          ['14h',  8],
          ['15h',  8],
          ['16h',  7],
          ['17h',  6],
          ['18h',  5],
          ['19h',  4],
          ['20h',  4],
          ['21h',  3],
          ['22h',  2],
          ['23h',  1],
          ['24h',  1]
        ]);

        var options_Temp = {
          title: 'Evolution de la température pendant la journée',
          width: 1200,
          height: 400,
          legend: { position: 'bottom' },
          chartArea: {
            left:55,
            top:50,
            height:300,
            width:1400,
            backgroundColor: {
            fill: '	#FFFFFF',
            fillOpacity: 0.8,
            }
            },
        }

        var chart_Temp = new google.visualization.LineChart(document.getElementById('Temp_Graph'));

        chart_Temp.draw(data_Temp, options_Temp);


        var data_Card = google.visualization.arrayToDataTable([
          ['Heure', 'Température'],
          ['00h',  2],
          ['01h',  3],
          ['02h',  3],
          ['03h',  4],
          ['04h',  5],
          ['05h',  5],
          ['06h',  5],
          ['07h',  6],
          ['08h',  6],
          ['09h',  7],
          ['10h',  7],
          ['11h',  8],
          ['12h',  9],
          ['13h',  9],
          ['14h',  8],
          ['15h',  8],
          ['16h',  7],
          ['17h',  6],
          ['18h',  5],
          ['19h',  4],
          ['20h',  4],
          ['21h',  3],
          ['22h',  2],
          ['23h',  1],
          ['24h',  1]
        ]);

        var options_Card = {
          title: 'Evolution de la température pendant la journée',
          curveType: 'function',
          width: 1200,
          height: 400,
          legend: { position: 'bottom' },
          chartArea: {
            left:55,
            top:50,
            height:300,
            width:1400,
            backgroundColor: {
            fill: '	#FFFFFF',
            fillOpacity: 0.8,
            }
            },
        }

        var chart_Card = new google.visualization.LineChart(document.getElementById('Card_Graph'));

        chart_Card.draw(data_Card, options_Card);

        var data_C02 = google.visualization.arrayToDataTable([
          ['Heure', 'Température'],
          ['00h',  2],
          ['01h',  3],
          ['02h',  3],
          ['03h',  4],
          ['04h',  5],
          ['05h',  5],
          ['06h',  5],
          ['07h',  6],
          ['08h',  6],
          ['09h',  7],
          ['10h',  7],
          ['11h',  8],
          ['12h',  9],
          ['13h',  9],
          ['14h',  8],
          ['15h',  8],
          ['16h',  7],
          ['17h',  6],
          ['18h',  5],
          ['19h',  4],
          ['20h',  4],
          ['21h',  3],
          ['22h',  2],
          ['23h',  1],
          ['24h',  1]
        ]);

        var options_C02 = {
          title: 'Evolution de la température pendant la journée',
          curveType: 'function',
          width: 1200,
          height: 400,
          legend: { position: 'bottom' },
          chartArea: {
            left:55,
            top:50,
            height:300,
            width:1400,
            backgroundColor: {
            fill: '	#FFFFFF',
            fillOpacity: 0.8,
            }
            },
        }

        var chart_C02 = new google.visualization.LineChart(document.getElementById('C02_Graph'));

        chart_C02.draw(data_C02, options_C02);

        var data_Sonore = google.visualization.arrayToDataTable([
          ['Heure', 'Température'],
          ['00h',  2],
          ['01h',  3],
          ['02h',  3],
          ['03h',  4],
          ['04h',  5],
          ['05h',  5],
          ['06h',  5],
          ['07h',  6],
          ['08h',  6],
          ['09h',  7],
          ['10h',  7],
          ['11h',  8],
          ['12h',  9],
          ['13h',  9],
          ['14h',  8],
          ['15h',  8],
          ['16h',  7],
          ['17h',  6],
          ['18h',  5],
          ['19h',  4],
          ['20h',  4],
          ['21h',  3],
          ['22h',  2],
          ['23h',  1],
          ['24h',  1]
        ]);

        var options_Sonore = {
          title: 'Evolution de la température pendant la journée',
          width: 1200,
          height: 400,
          legend: { position: 'bottom' },
          chartArea: {
            left:55,
            top:50,
            height:300,
            width:1400,
            backgroundColor: {
            fill: '	#FFFFFF',
            fillOpacity: 0.8,
            }
            },
        }

        var chart_Sonore = new google.visualization.LineChart(document.getElementById('Sonore_Graph'));

        chart_Sonore.draw(data_Sonore, options_Sonore);
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
                <img class="Logo" src="Data/thermometre.png" style="height:75px; width:75px">
                <div>
                    <p>Température</p>
                </div>
            </a>
            <a class="Pages" id="Card">
                <img class="Logo" src="Data/cardiaque.png" style="height:75px; width:75px">
                <div>
                    <p>Cardiaque</p>
                </div>
            </a>
            <a class="Pages" id="TCO2">
                <img class="Logo" src="Data/co2.png" style="height:75px; width:75px">
                <div>
                    <p>CO2</p>
                </div>
            </a>
            <a class="Pages" id="Géol">
                <img class="Logo" src="Data/geolocalisation.png" style="height:75px; width:75px">
                <div>
                    <p>Géolocalisation</p>
                </div>
            </a>
            <a class="Pages" id="Sono">
                <img class="Logo" src="Data/sonore.png" style="height:75px; width:75px">
                <div>
                    <p>Sonore</p>
                </div>
            </a>
        </div>
    </header>
    <body>
        <div style="justify-content:center; display:flex">
            <div class="g-recaptcha" data-sitekey="6LfY9wQkAAAAAE-iWVoofmGEPaGk06MwRNszlM3l" id="Captcha"></div>
        </div>
        <div class="Température" id="D1">
            <div class="Stats_Graphique">
                <div class="Graphique">
                    <div id="Temp_Graph" style="margin-top:20px"></div>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
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
            </div>
        </div>
        <div class="Cardiaque" id="D2">
            <div class="Stats_Graphique"> 
                <div class="Graphique">
                    <div id="Card_Graph" style="margin-top:20px"></div>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
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
            </div>
        </div>
        <div class="CO2" id="D3">
            <div class="Stats_Graphique">
                <div class="Graphique">
                    <div id="C02_Graph" style="margin-top:20px"></div>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
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
            </div>
        </div>
        <div class="Géolocalisation" id="D4">
            <div class="Stats_Graphique">
                <div class="Graphique">
                    <div>
                        <img class="graph" src="Data/graphique.png">
                    </div>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
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
            </div>
        </div>
        <div class="Sonore" id="D5">
            <div class="Stats_Graphique">
                <div class="Graphique">
                    <div id="Sonore_Graph" style="margin-top:20px"></div>
                    <button class="Button">
                        <img src="Data/plein-ecran.png" height=50px; width=50px>
                        <p>Afficher en plein écran</p>
                    </button>
                </div>
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
            </div>
        </div>
        <script>
            var Captcha=document.getElementById('Captcha');
            var Validation=document.getElementById('recaptcha-accessible-status');
            var Temp=document.getElementById('Temp');
            var Card=document.getElementById('Card');
            var TCO2=document.getElementById('TCO2');
            var Géol=document.getElementById('Géol');
            var Sono=document.getElementById('Sono');
            Temp.addEventListener("click", function() {
                console.log(Validation);
                if (Validation.innerText=='Validation terminée') {
                    document.getElementById('D1').style.display="Contents";
                    document.getElementById('D2').style.display="None";
                    document.getElementById('D3').style.display="None";
                    document.getElementById('D4').style.display="None";
                    document.getElementById('D5').style.display="None";
                }
                else {
                    console.log('Ma bite sur ton front')
                }
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