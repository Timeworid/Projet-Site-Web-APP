
    <head>
        <link rel="stylesheet" href="Header.css">
        <?php
            foreach ($_GET as $key => $value)
                $_GET[$key] = htmlspecialchars($value);
            foreach ($_POST as $key => $value)
                $_POST[$key] = htmlspecialchars($value);
        ?>
    </head>
    <header class="headerglobal corentin">
        <div class= "menugauche">
                <div class="menuderoulant">
                    <div>
                        <button class="dropbtn"><img src="Data/menu.png" alt="menu" style="width:40px;height:40px;"></button>
                        <div class="liensmenu">
                            <a href="routeur.php?action=presentationProduit">Fiche Produit</a>
                            <?php if(isset($_SESSION['mail'])){?>
                            <a href="routeur.php?action=Profil">Compte</a>
                            <a href="routeur.php?action=Statistiques">Statistiques</a>
                            <a href="routeur.php?action=Deconnexion">Déconnexion</a>
                            <?php } else { ?>
                            <a href="routeur.php?action=loginUtilisateur">Compte</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </a>
            <a href="routeur.php?action=pageaccueil"><img class="logo" src="Data/logo.png" alt="menu" style="width:80px;padding-top: 16px;"></a>
        </div>
        <div style='align-items: center;' class= "menudroite">
                <div class="searchbar">
                <input type="text" placeholder="Rechercher...">
                </div>
                <a href="https://google.com"><img src="Data/search.png" alt="menu" style="width:40px;height:40px;"></a>
                <div style="color:transparent";><p>__</p></div>
                <a href="routeur.php?action=PageProduit"><img src="Data/utilisateur.png" alt="menu" style="width:40px;height:40px;"></a>
            </a>
        </div>
    </header>
