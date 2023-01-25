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

        <div class="zonedetxt-utilisateur">
            <p class = "txt-utilisateur">Listes des utilisateurs :</p>
        </div>
        <div class="FAQ-no100">
            <input class="input-FAQ" id="search" type="text" placeholder="Rechercher un utilisateur">
        </div>

            <div class="flex-ticket">
                <div class="white container scroller"> 
                    <!-- a rendre dynamique avec le php-->
                    
                    <div class="msg" style="display:none"  id="exemple">
                        <a href="routeur.php?action=messageAdmin" class="a-invisible-flex">
                            <img src="Data/utilisateur.png" width="40px">
                            <p class="admin-text-msg">Test</p>
                        </a>
                        <button type="button" class="boutton-gris" style="margin-left:auto" onclick=contacter(this)>Contacter</button>
                        <button type="button" class="boutton-gris" onclick="">Commentaires</button>
                        <button type="button" class="boutton-gris" id ="Status">Loading ...</button>
                        <button type="button" class="boutton-rouge" onclick=deleteUser(this)>Supprimer</button>
                    </div>
                   
                </div>

            </div> 
    </div>

    <script src="Javascript\listeUtilisateur.js"></script>


    
    <?php
    include("View/Footer.php");
    ?>

</body>
</html> 