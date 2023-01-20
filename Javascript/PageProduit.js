if (document.readyState === 'complete') {
    loadCommentaires();
    ajouterListener();
} else {
    document.addEventListener('DOMContentLoaded', function() {
        loadCommentaires();
        ajouterListener();
    });
}


function loadCommentaires(){
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
                    console.log(e)
                }
            }
    }

    xmlhttp.open("POST", "routeur.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("action=RecupMsgUser"); // -> fonction à appeler dans controlleur accueil

    xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
        console.log(xmlhttp.responseText)
        console.log(JSON.parse(xmlhttp.response)) 
        var test =  JSON.parse(xmlhttp.response) 
        document.getElementById("MsgUser").innerHTML = test[2]["commentaire"];
        document.getElementById("MsgUser1").innerHTML = test[1]["commentaire"];
        document.getElementById("MsgUser2").innerHTML = test[0]["commentaire"];
    }
    }
}

function ajouterListener(){
    console.log(document.getElementsByName("notation"))
    document.getElementsByName("notation").forEach(function(input){
        input.addEventListener("click", function(){
            document.getElementById("etoiles").value = input.value;
            console.log(input.value);
            console.log(input);
        });
    })
}

function checkAvis() {
var avisUser = document.getElementById("AvisUser").value;
if (!avisUser) {
    alert("Veuillez entrer un avis avant de soumettre");
} else {
    EnvoyerCommentaire();
}
}

function EnvoyerCommentaire() {
    // Récupération de la valeur de l'input de commentaire
    var commentaire = document.getElementById("AvisUser").value;
    var notation = document.getElementById("etoiles").value;
    

    // Envoi de la valeur de l'input de commentaire à un script PHP via une requête AJAX
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "routeur.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("action=EnvoyerMsgUser&commentaire="+commentaire+"&notation="+notation);
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            console.log(xmlhttp.responseText)
            console.log(JSON.parse(xmlhttp.response))
            var test = JSON.parse(xmlhttp.response)
            loadCommentaires();
        }
        location.reload();
    }
}