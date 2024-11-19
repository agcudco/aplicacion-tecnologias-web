console.log("Declaración de variables");

//var a = 10; 

let num1 = 10;  //let permite reasignar
const PI = 3.14159; //variable inmutable
let num2 = num1*20;

console.log("El valor de num1 es: ",num1," el valor de PI es: ",PI," el valor de num2 es: ",num2);
console.log(`El valor de num1 es: ${num1}, el valor de PI es: ${PI} y el valor de num2 es: ${num2}`);

let esEstudiante = true;

let adultoMayor = false;

console.log("Cadenas de texto - STRINGS");

let cadena1 = "Hola Mundo";

let cadena2 = 'Chaoo Mundo';

let nombre = 'Juanito';

let mensaje = `Hola, bienvenido ${nombre}`;

let mensaje2 = 'Hola, bienvenido '+nombre;

console.log(mensaje);
console.log(mensaje2);

console.log('Propiedades de los strings');
console.log(mensaje.length)

console.log('Métodos sobre strings');
let frase = 'Introducción al lenguaje JavaScript'
console.log('toUpperCase');
console.log(frase.toUpperCase());
console.log('toLowerCase');
console.log(frase.toLocaleLowerCase());
console.log('Buscar dentro de una cadena: indexOf("texto a buscar")')
console.log(frase);
console.log(frase.indexOf('lenguaje'))
console.log("slice: extraer partes de una cadena");
console.log(frase.slice(16,24))

console.log('reemplazar palabras: replace');
console.log(`Cadena original ${frase}`)
console.log(frase.replace("JavaScript","PHP"));

console.log('concatenación de cadenas');
let parte1 = "JavaScript"
let parte2 = 'es poderoso'
let fraseCompleta = parte1 +" " + parte2;
console.log(fraseCompleta);

console.log("divir cadenas");
let estudiantes = "Juanito, Pepito, Anita, Rosita, Jaimito"
let arrayEstudiantes = estudiantes.split(',');
console.log(`Cadena original: ${estudiantes}`);
console.log(arrayEstudiantes);

console.log('Eliminar espacios en blanco');
let cadena3 = "         hola, mundo                      "
console.log(cadena3.trim());

console.log('validaciones de contenido');
let cadena4 = "Aprender JavaScript es divertido"
console.log(cadena4.includes("JavaScript"));
console.log("verificar que una cadena inicia con una palabra en especifico");
console.log(cadena4.startsWith('A'))
console.log("verificar que termina con una palabra en especifico")
console.log(cadena4.endsWith('divertido'))
console.log(cadena4.endsWith('ido'))

console.log('funciones sobre numeros');
let numero1 = -20;
let numero2 = 100;

console.log(Math.abs(numero1)); //valor absoluto
console.log(Math.pow(numero1,3))
console.log(Math.sqrt(numero2))