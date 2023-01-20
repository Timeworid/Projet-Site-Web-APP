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

        <div class="zonedetxt-utilisateur">
            <p class = "txt-utilisateur">Listes des utilisateurs :</p>
        </div>
        <div class="FAQ-no100">
            <input class="input-FAQ" id="search" type="text" placeholder="Rechercher un utilisateur">
        </div>

            <div class="flex-ticket">
                <div class="white container scroller"> 
                    <!-- a rendre dynamique avec le php-->
                    <a href="routeur.php?action=messageAdmin" class="a-invisible" style="display:none" id="exemple">
                        <div class="msg">
                            <img src="Data/utilisateur.png" width="40px">
                            <p class="admin-text-msg">Test</p>
                            <button type="button" class="boutton-gris">Commentaires</button>
                            <button type="button" class="boutton-gris">Promouvoir</button>
                            <button type="button" class="boutton-rouge" >Supprimer</button>
                        </div>
                    </a>
                </div>

                
                

            </div> 
    </div>

    <script>

if (document.readyState === 'complete') {
    loadUtilisateur();
} else {
    document.addEventListener('DOMContentLoaded', function() {
        loadUtilisateur();
    });
}


function loadUtilisateur(){
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
    xmlhttp.send("action=rechercheUtilisateur&utilisateur="+document.getElementById("search").value);
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            console.log(xmlhttp.responseText);
            var utilisateur = document.getElementById("exemple").cloneNode(true)
            utilisateur.style.display = "block";
            utilisateur.id = "utilisateur";
            var container =  document.getElementsByClassName("white container scroller")[0]
            console.log(container.getElementsByTagName("a"));
            Array.from(container.getElementsByTagName("a")).forEach(element => {
                if(element.id != "exemple"){
                    element.remove();
                }
            });

            JSON.parse(xmlhttp.response).forEach(element => {
                console.log(element)
                utilisateur.id = "utilisateur." + element["mail"]
                utilisateur.querySelector(".admin-text-msg").innerHTML = element["mail"]
                container.appendChild(utilisateur);  
            })
            
            console.log(xmlhttp.responseText);
        }
    }
}

document.getElementById("search").onkeydown = function(e){
    if(e.keyCode == 13){
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
        xmlhttp.send("action=rechercheUtilisateur&utilisateur="+document.getElementById("search").value);
        xmlhttp.onreadystatechange=function(){
            if (xmlhttp.readyState==4 && xmlhttp.status==200){
                console.log(xmlhttp.responseText);
                var utilisateur = document.getElementById("exemple").cloneNode(true)
                utilisateur.style.display = "block";
                utilisateur.id = "utilisateur";
                var container =  document.getElementsByClassName("white container scroller")[0]
                console.log(container.getElementsByTagName("a"));
                Array.from(container.getElementsByTagName("a")).forEach(element => {
                    if(element.id != "exemple"){
                        element.remove();
                    }
                });

                JSON.parse(xmlhttp.response).forEach(element => {
                    console.log(element)
                    utilisateur.id = "utilisateur." + element["mail"]
                    utilisateur.querySelector(".admin-text-msg").innerHTML = element["mail"]
                    container.appendChild(utilisateur);  
                })
                
                console.log(xmlhttp.responseText);
            }
        }
    }

}

        

    </script>

    
    <?php
    include("View/Footer.php");
    ?>

</body>
</html> 