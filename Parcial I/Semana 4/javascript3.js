console.log('dentro del script 3');

const getInputValue = (id) => {

    const inputElement = document.getElementById(id);
    const inputValue = inputElement.value;
    const numberValue = parseFloat(inputValue);
    return numberValue;
}

const showResult = (result) => {
    document.getElementById('result').textContent = `El resultado es: ${result}`;
}

const handleSubmit = (event) => {
    event.preventDefault();
    const numero1 = getInputValue('num1');
    const numero2 = getInputValue('num2');
    showResult(numero1 + numero2);
}

//Añadir el listener del formulario
document.getElementById('myForm').addEventListener('submit',handleSubmit);