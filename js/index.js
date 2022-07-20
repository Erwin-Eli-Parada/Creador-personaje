function noImplementado(){
    alert("No se ha implementado aun")
}

function hacerclick(){
    var opciones=document.querySelectorAll("#menu li");
    for(var f=0; f<opciones.length;f++){
        opciones[f].onclick=noImplementado;
    }
}

window.onload=hacerclick;