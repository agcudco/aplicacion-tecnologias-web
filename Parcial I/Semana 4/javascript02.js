//operadores de comparacion
let num1 = 20;
let num2 = 30;

if (num1 > num2) {
    console.log(`${num1} es mayor que ${num2}`)
} else {
    console.log(`${num2} es mayor que ${num1}`)
}

function verificar(a, b) {
    if (a > b) {
        console.log(`${a} es mayor que ${b}`);
        return a;
    } else {
        console.log(`${b} es mayor que ${a}`);
        return b;
    }
}

console.log(verificar(6, 7));
console.log(verificar(61, 17));
console.log(verificar(16, 27));


console.log("Arrow functions")

const mayorNumero = (a,b) => {
    if (a > b) {
        console.log(`${a} es mayor que ${b}`);
        return a;
    } else {
        console.log(`${b} es mayor que ${a}`);
        return b;
    }
}

console.log(mayorNumero(-100,20));