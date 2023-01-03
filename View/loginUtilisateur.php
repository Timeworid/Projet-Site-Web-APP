<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <title>Andrea - Connexion</title>
</head>
<body>
    <?php
        include("View/Header.php")
    ?>
    <div class="wrapper">
        <div class="title-text">
            <div class="title insc">
                Inscription
            </div>
            <div class="title co">
                Connexion
            </div>
        </div>
        <div class="form1">
            <div class="form2">
                <form action="routeur.php" method = "get" class="signup">
                <input type="hidden" name="action" value="register">
                    <div class="case">
                        <input type="Text" placeholder="Nom" name="nom">
                    </div>
                    <div class="case">
                        <input type="Text" placeholder="Prénom" name="prenom">
                    </div>
                    <div class="case">
                        <input type="email" placeholder="Addresse Mail" name="mail"required>
                    </div>
                    <div class="case">
                        <input type="date" placeholder="Date de naissance" name="dateNaissance" required>
                    </div>
                    <div class="case">
                        <input type="password" placeholder="Mot de passe" name="motDePasse" required>
                    </div>
                    <div class="case">
                        <input type="password" placeholder="Confirmation Mot de passe" name="motDePasse2" required>
                    </div>
                    <input type="checkbox" name="cgu" required>
                    <label for="cgu" class="condition"> J'ai lu et j'accepte les <a href="./cgu.html">conditions générales d'utilisations.</a> </label>
                    <div class="case btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Inscription">
                    </div>
                </form>
                <div class="separator"></div>
                <form action="login" class="login">
                    <div class="case">
                        <input type="email" placeholder="Adresse Mail" required>
                    </div>
                    <div class="case">
                        <input type="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="caseRadio">
                        <input type="checkbox" name="cremember">
                        <label for="cremember" class="condition"> Se souvenir de moi </label>
                    </div>
                    <div class="case btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Connexion">
                    </div>
                    <div class="mdpLien">
                        <a id="mdp">Mot de passe oublié ?</a>
                        <script>
                            var forgot=document.getElementById('mdp');
                            forgot.addEventListener("click", function() {
                                window.open("./forgot.html", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
                            });
                        </script>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include("View/Footer.php");
    ?>
</body>
</html>