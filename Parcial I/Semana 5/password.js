const CLAVE_CORRECTA = "12345";

const formulario = document.getElementById('formulario');
const mensaje = document.getElementById('mensaje');

formulario.addEventListener('submit', (event) => {
    event.preventDefault();
    const contrasenia = document.getElementById('contrasenia').value.trim();

    if (contrasenia === CLAVE_CORRECTA) {
        mensaje.textContent = "Contraseña Correcta! Acceso concedido";
        mensaje.className = 'exito';
    } else {
        mensaje.textContent = "Contraseña Incorrecta! Acceso denegado";
        mensaje.className = 'error';
    }

    formulario.reset();

});

