<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
        $handle = fopen("./Header.html", "r");
        if($handle){
            while (!feof($handle)) {
                $buffer = fgets($handle);
                echo $buffer;
            }
            if(feof($handle)){
                fclose($handle);
            };
        };  
    ?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../login.css">
    <title>Andrea - Connexion</title>
</head>
<body>
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
                <form action="#" class="signup">
                    <div class="case">
                        <input type="Text" placeholder="Nom">
                    </div>
                    <div class="case">
                        <input type="Text" placeholder="Prénom">
                    </div>
                    <div class="case">
                        <input type="email" placeholder="Addresse Mail" required>
                    </div>
                    <div class="case">
                        <input type="date" placeholder="Date de naissance" required>
                    </div>
                    <div class="case">
                        <input type="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="case">
                        <input type="password" placeholder="Confirmation Mot de passe" required>
                    </div>
                    <input type="checkbox" name="cgu" required>
                    <label for="cgu" class="condition"> J'ai lu et j'accepte les <a href="./cgu.html">conditions générales d'utilisations.</a> </label>
                    <div class="case btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Inscription">
                    </div>
                </form>
                <div class="separator"></div>
                <form action="#" class="login">
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
</body>
<?php
$handle = fopen("./Footer.html", "r");
    if($handle){
		while (!feof($handle)) {
            $buffer = fgets($handle);
            echo $buffer;
        }
        if(feof($handle)){
            fclose($handle);
        };
    }; 
    ?>
</html>