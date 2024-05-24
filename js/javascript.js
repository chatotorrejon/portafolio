var nombre;
var contrasena1;
var contrasena2;

do {
    nombre = prompt("TIENES QUE INTRODUCIR UN NOMBRE");
    if (nombre === "") {
        alert("TIENES QUE INTRODUCIR UN NOMBRE");
    }
} while (nombre === "");

do {
    contrasena1 = prompt("TIENES QUE INTRODUCIR UNA CONTRASEÑA");
    if (contrasena1 === "") {
        alert("TIENES QUE INTRODUCIR UNA CONTRASEÑA");
    }
} while (contrasena1 === ""); 

do {
    contrasena2 = prompt("TIENES QUE REPETIR LA CONTRASEÑA");
    if (contrasena2 === "") {
        alert("TIENES QUE INTRODUCIR LA CONTRASEÑA NUEVAMENTE");
    }
} while (contrasena2 === ""); 

while (contrasena1 !== contrasena2) {
    alert("LAS CONTRASEÑAS SON DIFERENTES. INTENTA DE NUEVO.");
    contrasena1 = prompt("TIENES QUE INTRODUCIR UNA CONTRASEÑA");
    while (contrasena1 === "") {
        alert("TIENES QUE INTRODUCIR UNA CONTRASEÑA VÁLIDA");
        contrasena1 = prompt("TIENES QUE INTRODUCIR UNA CONTRASEÑA");
    }

    contrasena2 = prompt("TIENES QUE REPETIR LA CONTRASEÑA");
    while (contrasena2 === "") {
        alert("TIENES QUE INTRODUCIR LA CONTRASEÑA NUEVAMENTE");
        contrasena2 = prompt("TIENES QUE REPETIR LA CONTRASEÑA");
    }
}

alert("CONTRASEÑAS COINCIDEN. PROCESO COMPLETADO.");