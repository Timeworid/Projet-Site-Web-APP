
    <head>
        <link rel="stylesheet" href="Header.css">
    </head>
    <header class="headerglobal corentin">
        <div class= "menugauche">
                <div class="menuderoulant">
                    <div>
                        <button class="dropbtn"><img src="Data/menu.png" alt="menu" style="width:40px;height:40px;"></button>
                        <div class="liensmenu">
                            <a href="presentationProduit">Fiche Produit</a>
                            <a href="pageFAQ">FAQ</a>
                            <?php if(isset($_SESSION['mail'])){?>
                            <a href="Profil">Compte</a>
                            <a href="Statistiques">Statistiques</a>
                            <a href="Deconnexion">Déconnexion</a>
                            <?php if (isset($_SESSION['admin'])) {
                                if ($_SESSION['admin'] == 1) { ?>
                                    <a href="accueilAdmin">Menu Admin</a>
                            <?php 
                                }
                            }
                            } else { ?>
                            <a href="loginUtilisateur">Compte</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </a>
            <a href="pageaccueil"><img class="logo" src="Data/logo.png" alt="menu" style="width:80px;height:56px;padding-top: 16px;"></a>
        </div>
        <div style='align-items: center;' class= "menudroite">
                <div class="searchbar">
                <input type="text" placeholder="Rechercher...">
                </div>
                <a href="https://google.com"><img src="Data/search.png" alt="menu" style="width:40px;height:40px;"></a>
                <div style="color:transparent";><p>__</p></div>
                <a href="loginUtilisateur"><img src="Data/utilisateur.png" alt="menu" style="width:40px;height:40px;"></a>
            </a>
        </div>
    </header>
