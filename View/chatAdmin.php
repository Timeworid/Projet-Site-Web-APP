<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Andrea - Admin</title>
    <link rel="stylesheet" href="CSSAdminCSS.css">
</head>
<body>
    <?php
     include("View/Header.php");
    ?>

    <div class="flex-ticket">
        <div class="container-msg ">
            <div class="rep-msg">
                <p>Titre de la conversation</p>
            </div>
            <div class="container-bulles scroller">
                <?php

                ?>
                <div class="bubble-text-left">
                    <p>Blablabla</p>
                </div>
                <div class="bubble-text-right">
                    <p>Blablabla</p>
                </div>
                <div class="bubble-text-left">
                    <p>Blablabla</p>
                </div>
                <div class="bubble-text-right">
                    <p>Blablabla</p>
                </div>
                <div class="bubble-text-left">
                    <p>Blablabla</p>
                </div>
                <div class="bubble-text-right">
                    <p>Blablablazf,efnefnefneienfeinfeifnefuebeufhufheneiufneiufenuienfeiufeufebfyujebfeufhehfuj</p>
                </div>  
            </div>
            <input class="input-send-msg"  id="sendmsg" type="text" placeholder="Type your message here ...">
        </div>
    </div>
    <script>
        document.getElementById("sendmsg").onkeydown = function(e){
            if(e.keyCode == 13){
                if(document.getElementById("sendmsg").value != ""){
                    if (window.XMLHttpRequest) {
                        xmlhttp=new XMLHttpRequest();
                    } else {
                        if (window.ActiveXObject)
                            try {
                                xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (e) {
                                try {
                                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (e) {
                                    console.log(e);
                                }
                            }
            }
            xmlhttp.open("POST","routeur.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send("action=EnvoiMsg&msg="+document.getElementById("sendmsg").value);
            xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                    console.log(xmlhttp.responseText);
                }
            }
                }
            }

        }

    </script>


    <?php
    include("View/Footer.php");
    ?>

</body> 