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

xmlhttp.open("GET", "routeur.php", true);
xmlhttp.send("action=RecupMsgUser"); // -> fonction à appeler dans controlleur accueil
console.log("test")

xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
    console.log("ok")
    document.getElementsByClassName("MsgUser").innerHTML = xmlhttp.responseText;
}
}