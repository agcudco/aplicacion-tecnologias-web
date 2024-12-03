//CREACIÓN Y ACCESO A LOS ARRAYS
const nrcs = ["Calculo Diferencial", "Algebra Lineal", "Fundamentos de Programación", "Realidad Nacional"];
console.log("Array: ", nrcs);

//acceder a posiciones especificas
console.log('primer elemento: ', nrcs[0]);
console.log('ultimo elemento: ', nrcs[nrcs.length - 1])

//modificar los elementos de un array
console.log("Array  original: ", nrcs);
nrcs[1] = "Quimica";

console.log("Array  modificado: ", nrcs);

//METODOS DE MODIFICACION
const nums = [2, 4, 5, 7, 8];

console.log(`Arreglo de numeros ${nums}`);
nums.push(10);

console.log(`Nuevo arreglo de numeros ${nums}`);
nrcs.push('Investigación Científica');
console.log(`Nuevo arreglo de NRCS : [${nrcs}]`)

nrcs.pop();
console.log(`Nuevo arreglo de NRCS : [${nrcs}]`)
nrcs.pop();
console.log(`Nuevo arreglo de NRCS : [${nrcs}]`)
nrcs.pop();
console.log(`Nuevo arreglo de NRCS : [${nrcs}]`)

nums.push(10);
nums.push(20);

let i = 0;
while (i <= 2) {
    nums.shift();
    console.log(`Arreglo modificado: [${nums}]`);
    i++;
}


//unshift()

for (let i = 0; i < 5; i++) {
    nums.unshift(i * 3);
    console.log(`Arreglo modificado por unshifth(): [${nums}]`);
}

//splice 
const nums2 = [1, 2, 3];
console.log(`Arreglo nums2: antes =>>> [${nums2}]`)
nums2.splice(10, 20, 30);
console.log(`Arreglo nums2: después =>>> [${nums2}]`)

//reverse()
console.log(`Arreglo nums: antes=>>>>> [${nums}]`);
nums.reverse();
console.log(`Arreglo nums: despues=>>>>> [${nums}]`);

nums.sort();
console.log(`Arreglo nums: ordenado=>>>>> [${nums}]`);

//concat 
console.log(`nums2: [${nums2}]`);
console.log(`nums: [${nums}]`);
const numeros = nums2.concat(nums);
console.log(`numeros: [${numeros}]`);

//slice
const nums3 = nums.slice(1, 3);
console.log(`nums: [${nums}]`);
console.log(`nums3: [${nums3}]`);

//forEach
console.log('foreach');
numeros.forEach(n => {
    console.log(`El cuadrado de ${n} es: ${n * n}`);
});

console.log('for habitual');
for (let i = 0; i < numeros.length; i++) {
    console.log(`EL cuadro de ${numeros[i]} es  ${numeros[i] * numeros[i]}`);
}

//filter: crea un nuevo arreglo con los elementos que cumplen una condicion
console.log(`numeros: [${numeros}]`)
const pares = numeros.filter(num => num % 2 === 0);
console.log(`pares: [${pares}]`)

//map ->crea un nuevo arreglo aplicando una funcion/operacion a cada elemento del array original
console.log(`numeros: [${numeros}]`)
const fractions = numeros.map(x => x / 10);
console.log(`fractions: [${fractions}]`)


//metodos de busqueda

//find: devuelve el primer elemento que cumple una condición
console.log(`numeros: [${numeros}]`)
const findNum3 = numeros.find(y => y % 3 === 0);
console.log(`numero buscado: ${findNum3}`);

//includes: verifica si un array contiene un elemento en especifico
console.log(`numeros: [${numeros}]`)
console.log(numeros.includes(-1) ? "Existe" : "No existe")

for (let i = 0; i < numeros.length; i++) {
    console.log(numeros[i] += 100)
}

const estudiantes = ["Anita", 'Juanito', 'Jaimito', 'Maria', 'Narcisa', 'Angel'];
estudiantes.forEach((est, i) => {
    console.log(`Estudiante: ${i + 1} ${est}`);
});