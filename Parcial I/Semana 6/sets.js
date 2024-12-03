// creacion de sets

const miSet = new Set();
console.log(miSet);

//agregar elementos
miSet.add(0);
miSet.add(1);
miSet.add(8);
miSet.add(9);

console.log('Elementos de miSet :', miSet);

for (let i = 0; i < 10; i++) {
    miSet.add(i)
}

console.log('Elementos de miSet :', miSet);

console.log(miSet.has(-1) ? "Existe" : "No existe");
console.log(miSet.has(1) ? "Existe" : "No existe");

//eliminar elementos

miSet.delete(0);
miSet.delete(8);
console.log("Elementos de miSet :", miSet);
//vaciar el conjunto
miSet.clear()
console.log("Elementos de miSet :", miSet);

const setNum = new Set()
for (let i = 0; i < 10; i++) {
    let random = Math.floor(Math.random() * 100);
    setNum.add(random);
}

console.log(setNum)
console.log("ForEach");
setNum.forEach(x => {
    console.log(`${x - 10}`)
});

//convertir un set en array
const arrayNum = [...setNum]
console.log("Arreglo: ", arrayNum);
const num = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 10, 10, 11, 12, 14, 20];
console.log("Arreglo repetidos: ", num);
const numeros = [...new Set(num)]
console.log("Arreglo nuevo: ", numeros);


const setA = new Set([1, 2, 3])
const setB = new Set([10, 11, 12])
const union = new Set([...setB, ...setA])
console.log(setA, setB, union);