<!DOCTYPE html>
<html dir="ltr" lang="fr">
    <head>
        <title>Statistiques</title>
        <link rel="stylesheet" href="StatistiquesCSS.css">
        <meta charset="utf-8">
         <script src='https://www.google.com/recaptcha/api.js'></script>
        <?php
        foreach ($_GET as $key => $value)
        $_GET[$key] = htmlspecialchars($value);
        foreach ($_POST as $key => $value)
        $_POST[$key] = htmlspecialchars($value);
        ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="Javascript/Statistiques.js"></script>
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
            <input type="date" id="myDateTemp">
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
                            <p>Rythme cardiaque actuel :</p>
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
                        <img class="Map" src="Data/Map.png" height=auto; width=120px>
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
            <input type="date" id="myDateSon">
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
                            <p>Volume sonore actuel :</p>
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
            var calendarInputTemp = document.getElementById("myDateTemp");
            calendarInputTemp.addEventListener("change", function() {
                var selectedDate = calendarInputTemp.value;
                console.log(selectedDate);
                // Perform any actions or update the chart based on the selected date
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(function () {drawChart("Température")});
            });
            var calendarInputSon = document.getElementById("myDateSon");
            calendarInputSon.addEventListener("change", function() {
                var selectedDate = calendarInputSon.value;
                console.log(selectedDate);
                // Perform any actions or update the chart based on the selected date
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(function () {drawChart("Son")});
            });
            var Captcha=document.getElementById('Captcha');
            var Validation=document.getElementById('recaptcha-accessible-status');
            var Temp=document.getElementById('Temp');
            var Card=document.getElementById('Card');
            var TCO2=document.getElementById('TCO2');
            var Géol=document.getElementById('Géol');
            var Sono=document.getElementById('Sono');
            Temp.addEventListener("click", function() {
                var response = grecaptcha.getResponse();
                if(response.length != 0) {
                    recupStat("Température");
                    document.getElementById('D1').style.display="Contents";
                    document.getElementById('D2').style.display="None";
                    document.getElementById('D3').style.display="None";
                    document.getElementById('D4').style.display="None";
                    document.getElementById('D5').style.display="None";
                }
                else {
                    console.log('Erreur')
                }
            });
            Card.addEventListener("click", function() {
                var response = grecaptcha.getResponse();
                if(response.length != 0) {
                    document.getElementById('D1').style.display="None";
                    document.getElementById('D2').style.display="Contents";
                    document.getElementById('D3').style.display="None";
                    document.getElementById('D4').style.display="None";
                    document.getElementById('D5').style.display="None";
                }
                else {
                    console.log('Erreur')
                }
            });
            TCO2.addEventListener("click", function() {
                var response = grecaptcha.getResponse();
                if(response.length != 0) {
                    document.getElementById('D1').style.display="None";
                    document.getElementById('D2').style.display="None";
                    document.getElementById('D3').style.display="Contents";
                    document.getElementById('D4').style.display="None";
                    document.getElementById('D5').style.display="None";
                }
                else {
                    console.log('Erreur')
                }
            });
            Géol.addEventListener("click", function() {
                var response = grecaptcha.getResponse();
                if(response.length != 0) {
                    document.getElementById('D1').style.display="None";
                    document.getElementById('D2').style.display="None";
                    document.getElementById('D3').style.display="None";
                    document.getElementById('D4').style.display="Contents";
                    document.getElementById('D5').style.display="None";
                }
                else {
                    console.log('Erreur')
                }
            });
            Sono.addEventListener("click", function() {
                var response = grecaptcha.getResponse();
                if(response.length != 0) {
                    recupStat("Son");
                    document.getElementById('D1').style.display="None";
                    document.getElementById('D2').style.display="None";
                    document.getElementById('D3').style.display="None";
                    document.getElementById('D4').style.display="None";
                    document.getElementById('D5').style.display="Contents";
                }
                else {
                    console.log('Erreur')
                }
            });
        </script>
        <?php
            include("View/Footer.php");
        ?>
    </body>
</html>