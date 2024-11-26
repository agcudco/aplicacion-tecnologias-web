const formulario = document.getElementById('frmRegistro');

formulario.addEventListener("submit", (event) => {
    event.preventDefault();

    const nombre = document.getElementById('nombre').value.trim();

    const edad = parseInt(document.getElementById('edad').value);

    const resultado = document.getElementById('resultado');

    if(!nombre){
        alert('Ingrese un nombre');
        return;
    }

    if(edad<18){
        alert(`${nombre} debes ser mayor de edad`);
        return;
    }

    resultado.textContent = `Se registro a ${nombre} que tiene ${edad} años`;
});