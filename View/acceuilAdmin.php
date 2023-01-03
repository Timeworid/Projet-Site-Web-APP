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

    <div class="flex-stat">
        <div class="statistiques" style="margin-left: 10%;"> <!-- compense la margin de la msg pour centrer le texte.-->
            <p class="text-stats">STATISTIQUES</p>
        </div>
        <span class="vertical-line"></span>
        <div class="statistiques" style="margin-right: 10%;"> <!-- compense la margin de la msg pour centrer le texte.-->
            <p class="text-stats">STATISTIQUES</p>
        </div>
    </div>

    <div class="flex-messages">
        <div class="container"> 
            <!-- a rendre dynamique avec le php-->
            <a href="routeur.php?action=ticketAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">FEFNRIUNREIUVNRIUGRURBVRUBRYURBVRUVBRVRBVRB</p>
                </div>
            </a>
            <a href="routeur.php?action=ticketAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a>
            <a href="routeur.php?action=ticketAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a>
            <a href="routeur.php?action=ticketAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a> 
            
        </div>
        
        <div class="container scroller"> 
            <a href="routeur.php?action=msgAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/bulle.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a> 
            <a href="routeur.php?action=msgAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/bulle.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a> 
            <a href="routeur.php?action=msgAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/bulle.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a> 
            <a href="routeur.php?action=msgAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/bulle.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a>
            <a href="routeur.php?action=msgAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/bulle.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a>   
        </div>
    </div>
</body> 
    <?php
    include("View/Footer.php");
    ?>
</html>