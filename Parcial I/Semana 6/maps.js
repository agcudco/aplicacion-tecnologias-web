const miMap = new Map()
console.log(miMap)

const myMap = new Map([
    ['nombre','Juanito'],
    ['edad',20]
]);

console.log(myMap);

//map.set(clave,valor)
myMap.set('nombre','Angel')
myMap.set('edad',50)

console.log(myMap);

const myMap2 = new Map([
    ['nombre','Juanito'],
    ['edad',20],
    ['ciudad','Sangolqui']
]);
console.log(myMap2);
myMap.set('ciudad','Quito')
console.log(myMap);

//uso de maps
const promedios = new Map([
    ['Angel',10.2],
    ['Ana',19.2],
    ['Maria',16.2],
    ['Juan',0.0]
]);

console.log(promedios);