console.log('Semana 5');

console.log('estructura if')

const edad = 18;

if (edad < 18) {
    console.log('Menor de edad');
} else {
    console.log('Mayor de edad');
}

function verificarEdad(edad) {
    if (edad < 18) {
        console.log('Eres menor de edad');
    } else {
        console.log('Eres mayor de edad');
    }
}

verificarEdad(20);

verificarEdad(10);

const comprobarEdad = (edad) => {
    if (edad < 18) {
        console.log(`Tienes ${edad} años por lo tanto eres menor de edad`);
    } else {
        console.log(`Tienes ${edad} años por lo tanto eres mayor de edad`);
    }
}

comprobarEdad(50);
comprobarEdad(3);

const buscarMaryor = (n1, n2) => {
    n1 < n2 ? console.log(`${n1} es menor que ${n2}`) : console.log(`${n1} es mayor que ${n2}`);
}

buscarMaryor(8, 9);
buscarMaryor(80, 19);

console.log('estructura switch');

const dia = 5;

switch (dia) {
    case 1:
        console.log('Lunes');
        break;
    case 2:
        console.log("Martes");
        break;
    case 3:
        console.log("Miercoles");
        break;
    case 4:
        console.log('Jueves');
        break;
    case 5:
        console.log('Viernes');
        break;
    case 6:
        console.log('Sabado');
        break;
    case 7:
        console.log('Domingo');
        break;
    default:
        console.log('Día no válido');
}

const devolverDia = (dia) => {
    switch (dia) {
        case 1:
            console.log('Lunes');
            break;
        case 2:
            console.log("Martes");
            break;
        case 3:
            console.log("Miercoles");
            break;
        case 4:
            console.log('Jueves');
            break;
        case 5:
            console.log('Viernes');
            break;
        case 6:
            console.log('Sabado');
            break;
        case 7:
            console.log('Domingo');
            break;
        default:
            console.log('Día no válido');
    }
}

devolverDia(6);
devolverDia(2);
devolverDia(9);

console.log('estructuras de repetición');
console.log('CICLO WHILE');


let i = -5;
while (i < 5) {
    console.log(`valor de i ${i}`);
    i++;
}

const cuentaRegresiva = (desde) => {
    while (desde > 0) {
        console.log(`Cuentra regresiva: ${desde}`);
        desde--;
    }
}

cuentaRegresiva(10);
cuentaRegresiva(3);

console.log('Ciclo do-while');
let cont = -1;

do {
    console.log(`Contador: ${cont}`);
    cont++;
} while (cont <= 10);


const generarNumerosAletorios = () => {
    let numero;
    do {
        numero = Math.random();
        console.log(`Numero generado: ${numero}`);
    } while (numero <= 0.8);
}

generarNumerosAletorios();

console.log('CICLO FOR');
for (let i = 0; i < 10; i++) {
    console.log(i * 2)
}

console.log('MUltiplos de 3');
const mostrarNumerosHasta = (hasta) => {
    for (let i = 1; i <= hasta; i++) {
        console.log(`Número: ${i * 3}`);
    }
}

mostrarNumerosHasta(10);

console.log('CICLO FOREACH');
const listaNumeros = [2, 3, 10, 20, 19, 17, 10];

listaNumeros.forEach(numero => {
    console.log(`El interador es : ${numero}`);
});

const estudiantes = ['Juanito', 'Anita', 'Pepito', 'Mary', 'Lulu'];
estudiantes.forEach((estudiante, indice) => {
    console.log(`Estudiante: ${estudiante} Índice: ${indice + 1}`);
});