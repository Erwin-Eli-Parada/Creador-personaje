/*
function iniciar() {
    var usuario = document.getElementById("usuario");
    var password = document.getElementById("password");

    usuario.addEventListener("input", validacion1, false);
    password.addEventListener("input", validacion2, false);

    validacion1();
    validacion2();
}

function validacion1() {
    if (usuario.value == "") {
        usuario.setCustomValidity("Inserte el usuario");
        usuario.style.background = "#FFDDDD";
    } else {
        usuario.setCustomValidity("");
        usuario.style.background = "#FFFFFF";
    }
}

function validacion2(){
    if (password.value == "") {
        password.setCustomValidity("Inserte la contraseña");
        password.style.background = "#FFDDDD";
    }else{
        password.setCustomValidity("");
        password.style.background = "#FFFFFF";
    }
}
*/

function  iniciar(){
    document.formulario.addEventListener("input", controlar, false);
}

function controlar(e){
    var elemento=e.target;
    var valido=document.informacion.checkValidity();

    if(valido){
        document.informacion.submit();
        
    }else if(elemento.validity.valueMissing){
        elemento.setCustomValidity("Campo requerido");
        elemento.style.background="#FFDDDD";
    }
}

window.addEventListener("load", iniciar, false);
