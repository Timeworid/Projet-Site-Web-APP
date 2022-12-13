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
    <title>Andrea - Admin</title>
    <link rel="stylesheet" href="../Admin.css">
</head>
<body>
    <header>
    </header>

    <div class="flex-ticket">
        <div class= "flex-container-half">
            <div class="msg">
                <p class="admin-text">De&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
            <div class="msg">
                <p class="admin-text">Objet&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
            <div class="msg">
                <p class="admin-text">Priorité&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
        </div>
        <div class="flex-container-half">
            <div class="msg">
                <p class="admin-text">Date&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
            <div class="msg">
                <p class="admin-text">Catégorie&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
            <div class="boutton">
                <button type="button" id="boutton-envoyer">Envoyer</button>
            </div>
        </div>

        <div class="flex-container-100">
            <textarea id="freeform" rows="4" cols="50" placeholder="Write down your text here"></textarea>

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