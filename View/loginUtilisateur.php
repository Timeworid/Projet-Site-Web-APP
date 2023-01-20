<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <title>Andrea - Connexion</title>
</head>
<body>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php
         include("View/Header.php");
    ?>
    <div class="wrapper">
        <div class="erreur">
            <?php 
                if (isset($_SESSION["erreur"])) {
                echo $_SESSION["erreur"];} 
            ?>
        </div>
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
                <form action="routeur.php" method = "post" class="signup">
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
                    <label for="cgu" class="condition"> J'ai lu et j'accepte les <a href="routeur.php?action=cgu">conditions générales d'utilisations.</a> </label>
                    <div class="g-recaptcha" data-sitekey="6LfY9wQkAAAAAE-iWVoofmGEPaGk06MwRNszlM3l"></div>
                    <div class="case btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Inscription">
                    </div>
                </form>
                <div class="separator"></div>
                <form action="routeur.php" method ="post" class="login">
                <input type="hidden" name="action" value="login">
                    <div class="case">
                        <input type="email" placeholder="Adresse Mail" name="mail"required>
                    </div>
                    <div class="case">
                        <input type="password" placeholder="Mot de passe" name="motDePasse" required>
                    </div>
                    <div class="caseRadio">
                        <input type="checkbox" name="remember">
                        <label for="remember" class="condition"> Se souvenir de moi </label>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LfY9wQkAAAAAE-iWVoofmGEPaGk06MwRNszlM3l"></div>
                    <div class="case btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Connexion">
                    </div>
                    <div class="mdpLien">
                        <a id="mdp">Mot de passe oublié ?</a>
                        <script>
                            var forgot=document.getElementById('mdp');
                            forgot.addEventListener("click", function() {
                                window.open("forgot", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
                            });
                        </script>
                    </div>
                    <p>
                        
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php
    include("View/Footer.php");
    ?>
</body>
</html>