if (document.readyState === 'complete') {
    document.getElementsByClassName("Button1")[0].addEventListener("click", modif());
} else {
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByClassName("Button1")[0].addEventListener("click", modif()); 
    });
}


function modif(){
    
    if(confirm("êtes vous sûr de modifier vos donnés ?")){
        return true;
    }else{
        return false;
    }
}



function confirmer(){
    alert("Vos donnés ont été modifiés");
}

