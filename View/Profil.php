<?php
     if(isset($_GET["er"])){
        $_message="<p class = 'message' >Merci de remplir le formulaire </p>" ;
            echo $_message;
        }
        
?>

<!DOCTYPE html>
<html dir="ltr" lang="fr">
    <head>
        <link rel="stylesheet" href="./color.css ">
        <script src="./ajax.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
    <?php
    ?>
        <div class="flexcontainer1">
            <div class="fc11">
                <div class="Photo"> Photo de profil </div>
                <form class ="formIP" method= "POST" action="routeur.php">
                    <input type="hidden" name="action" value="modifprofil">
                    <input name="nom_prenom" class="InformationsPersonnelles" type="text" placeholder="Nom Prénom">
                    <input name="age" class="InformationsPersonnelles" type="text" placeholder="Age">
                    <input name="adresse" class="InformationsPersonnelles" type="text" placeholder="Adresse">
                    <input name="mail" class="InformationsPersonnelles" type="text" placeholder="Adresse Mail">
            </div>
                    <div class="fc11">
                        <div class="BigAM">
                            <input id=info class="Aproposdemoi" type="text" placeholder="A propos de moi">
                        </div>
                        
                        <input class="Button1" type="submit" value="Modifier mon profil" onclick="return modif()">
                </form>
                
            </div>
        </div>
        <div class="flexcontainer2">
            <div class="Paramètres">
                <form class="ParamètreGetD">
                    <div class="ParamètreG">
                        <div class="Check"> 
                            <a> Je souhaite recevoir les notifications <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                        <div class="Check"> 
                            <a> J'autorise la géolocalisation <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non
                            </a>
                        </div>
                        <div class="Check"> 
                            <a> J'autorise l'utilisation de capteurs à CO2 <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                    </div>
                    <div class="ParamètreD">
                        <div class="Check"> 
                            <a> J'autorise l'utilisation de capteurs cardiaques <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                        <div class="Check"> 
                            <a> J'autorise l'utilisation de capteurs sonores <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                        <div class="Check"> 
                            <a> J'autorise l'utilisation de capteurs à température corporelle <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6LfY9wQkAAAAAE-iWVoofmGEPaGk06MwRNszlM3l"></div>
                <input class="Button2" type="submit" value="Enregistrer les modifications" onclick="return confirmer()">
            </form>
        </div>
        <?php
         
        ?>
    </body>
</html>