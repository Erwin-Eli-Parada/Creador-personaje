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

window.addEventListener("load", iniciar, false);
