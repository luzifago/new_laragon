
function IdentificarNumero(num) {
    if (num > 0) {
        return "Positivo";
    } else if (num < 0) {
        return "Negativo";
    } else {
        return "Cero";
    }
}

var ResultadoOriginal = IdentificarNumero(5);
console.log(ResultadoOriginal);

//2) materia aprobadas

function AprobarMateria(nota1, nota2, nota3) {
    const promedio = (nota1 + nota2 + nota3) / 3;
    if (promedio >= 3.5) {
        return "Aprobó";
    } else {
        return "Reprobó";
    }
}


var ResultadoMateria = AprobarMateria(0, 2, 1);
console.log(ResultadoMateria);

//3) hallar hipotenusa
function hallarHipotenusa(cateto1, cateto2) {
    return Math.sqrt(cateto1**2 + cateto2**2);
}

var ResultadoHipotenusa = hallarHipotenusa(5, 4);
console.log(ResultadoHipotenusa);

//identificar edad 

function IdentificarGeneracion(edad) {
    if (edad > 0 && edad <= 12) {
        return "Niño";
    } else if (edad > 12 && edad <= 21) {
        return "Adolescente";
    } else if (edad > 21 && edad <= 31) {
        return "Joven";
    } else if (edad > 31 && edad <= 60) {
        return "Adulto";
    } else if (edad > 60) {
        return "Adulto mayor";
    } else {
        return "Edad no válida"; 
    }
}
var EdadPersona = 25;
var generacion = IdentificarGeneracion(EdadPersona);
console.log(generacion)