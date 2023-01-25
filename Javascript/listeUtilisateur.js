if (document.readyState === 'complete') {
    loadUtilisateur();
} else {
    document.addEventListener('DOMContentLoaded', function() {
        loadUtilisateur();  
    });
}

function deleteUser(button){
    var utilisateur = button.parentElement.id
    if(confirm("Vous voulez vraiment supprimer " + utilisateur + " ?")){
        console.log("oui");
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
        xmlhttp.send("action=deleteUtilisateur&utilisateur="+ utilisateur);
        xmlhttp.onreadystatechange=function(){
                console.log(xmlhttp.response)
                alert("L'utilisateur " + utilisateur + " à bien été supprimé !")
                loadUtilisateur();
        }
    }else{
        console.log("non");
    }
}

function gestionUser(button, type){
    var utilisateur = button.parentElement.id
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
    xmlhttp.send("action=promouvoirUtilisateur&utilisateur="+utilisateur+"&type="+type);
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            console.log(xmlhttp.response)
            if(type){
                alert("L'utilisateur " + utilisateur + " à bien été promu !")
            }else{
                alert("L'utilisateur " + utilisateur + " à bien été déchu !")
            }
            loadUtilisateur();
        }   
    }
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
            var container =  document.getElementsByClassName("white container scroller")[0]
            console.log(container.getElementsByClassName("msg"));
            Array.from(container.getElementsByClassName("msg")).forEach(element => {
                if(element.id != "exemple"){
                    element.remove();
                }
            });

            JSON.parse(xmlhttp.response).forEach(element => {
                    console.log(element["mail"])
                    var utilisateur = document.getElementById("exemple").cloneNode(true)
                    utilisateur.style.display = "flex   ";
                    utilisateur.id = element["mail"]
                    var text = utilisateur.querySelector(".admin-text-msg")
                    text.innerHTML = element["mail"]
                    getUserStatus(element["mail"]).then(response =>{
                        if(response == 1){
                            console.log(response)
                            utilisateur.querySelector("#Status").addEventListener("click", function() {
                                gestionUser(utilisateur.querySelector("#Status"), 0)
                            });
                            utilisateur.querySelector("#Status").innerHTML = "Rétrograder"
                        }else{
                            console.log(response)
                            utilisateur.querySelector("#Status").addEventListener("click", function() {
                                gestionUser(utilisateur.querySelector("#Status"), 1)
                            });
                            utilisateur.querySelector("#Status").innerHTML = "Promouvoir"
                        }
                    })
                    .catch(error =>{
                        console.log(error)
                    });
                    
                    container.appendChild(utilisateur); 
                    console.log(utilisateur);        
                })
        }
    }
}

document.getElementById("search").onkeydown = function(e){
    if(e.keyCode == 13){
        loadUtilisateur();
    }
}

function getUserStatus(mail) {
    return new Promise((resolve, reject) => {
      if (window.XMLHttpRequest) {
          var xmlhttp = new XMLHttpRequest();
      } else {
          if (window.ActiveXObject)
              try {
                  var xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
              } catch (e) {
                  try {
                      var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                      reject(e);
                  }
              }
      }
  
      xmlhttp.open("POST", "routeur.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("action=getUserStatus&utilisateur=" + mail);
  
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          resolve(xmlhttp.responseText);
        } else if (xmlhttp.readyState == 4 && xmlhttp.status != 200) {
          reject("Erreur de statut: " + xmlhttp.status);
        }
      };
    });
  }


  function contacter(boutton){
    var utilisateur = getCookie("mail");
    console.log(utilisateur);
    console.log(boutton.parentElement.id);
    var utilisateurs = new Array(boutton.parentElement.parentElement.id, utilisateur);
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
    xmlhttp.send("action=conversationExiste&utilisateurs="+utilisateurs);
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            console.log(xmlhttp.response)
            if(xmlhttp.response == false){
                console.log("vré");
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
                xmlhttp.send("action=créerConversation&utilisateurs="+utilisateurs);
                xmlhttp.onreadystatechange=function(){
                    if (xmlhttp.readyState==4 && xmlhttp.status==200){ 
                        console.log(xmlhttp.response);
                    }
                }
            }
        }   
    }
  }

  var getCookie = function(name) {
    var cookies = document.cookie.split(';');
    for(var i=0 ; i < cookies.length ; ++i) {
        var pair = cookies[i].trim().split('=');
        if(pair[0] == name)
            return pair[1];
    }
    return null;
};
  