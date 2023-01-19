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
    document.getElementById("MsgUser").innerHTML = test["commentaire"];
}
}