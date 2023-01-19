<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Andrea - Admin</title>
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <?php
         include("View/Header.php");
    ?>


    <div class="flex-FAQ">
        <div class="Envoyer">
            <div class="bouttonAdmin">
                <a href ="routeur.php?action=chatAdmin">
                    <button type="button" class="bouttonContact">Envoyer un message à un admin</button>
                </a>
            </div>
            <div class="bouttonAdmin">
                <a href ="routeur.php?action=messageAdmin">
                    <button type="button" class="bouttonContact">Créer une nouvelle conversation</button>
                </a>
            </div>   
        </div>
        <div class="zonedetxt">
            <p>Vos conversation :</p>
        </div>


            <div class="flex-ticket">
                <div class="white container scroller "> 
                    <!-- a rendre dynamique avec le php-->
                    <a href="routeur.php?action=messageAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">Utilisateur : FEFNRIUNREIUVNRIUGRURBVRUBRYURBVRUVBRVRBVRB</p>
                </div>
            </a>
            <a href="routeur.php?action=messageAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">Admin : TEST</p>
                </div>
            </a>
            <a href="routeur.php?action=messageAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a>
            <a href="routeur.php?action=messageAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a> 
                    
                </div>

                
                

            </div> 
    </div>

    
    <?php
    include("View/Footer.php");
    ?>

</body>
</html> 