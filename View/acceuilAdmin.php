<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Andrea - Admin</title>
    <link rel="stylesheet" href="AdminCSS.css">
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
    <a href="routeur.php?action=listeUtilisateur" class="a-invisible">
        <div class="flex-button">
                <button type="button" class="bouttonContact">Voir la liste des utilisateurs</button>
        </div>
    </a>

    <div class="flex-input">
        <div class="FAQ-no100">
            <input class="input-FAQ" id="search-ticket" type="text" placeholder="Rechercher un ticket">
        </div>
        <div class="FAQ-no100">
            <input class="input-FAQ" id="search-msg" type="text" placeholder="Rechercher une conversation">
        </div>
    </div>

    <div class="flex-messages">
        
        <div class="container scroller"> 
            <!-- a rendre dynamique avec le php-->
            <a href="routeur.php?action=messageAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">FEFNRIUNREIUVNRIUGRURBVRUBRYURBVRUVBRVRBVRB</p>
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
            <a href="routeur.php?action=messageAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/image.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a> 
            
        </div>
        
        <div class="container scroller"> 
            <a href="routeur.php?action=chatAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/bulle.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a> 
            <a href="routeur.php?action=chatAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/bulle.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a> 
            <a href="routeur.php?action=chatAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/bulle.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a> 
            <a href="routeur.php?action=chatAdmin" class="a-invisible">
                <div class="msg">
                    <img src="Data/bulle.png" width="40px">
                    <p class="admin-text-msg">TEST</p>
                </div>
            </a>
            <a href="routeur.php?action=chatAdmin" class="a-invisible">
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