function noImplementado(){
    alert("No se ha implementado aun")
}

function hacerclick(){
    var opciones=document.querySelectorAll("#nombre_usuario");
    for(var f=0; f<opciones.length;f++){
        opciones[f].addEventListener("click",noImplementado,false);
    }
}

window.addEventListener("load",hacerclick,false);