let empleados = [];

const agregarEmpleado = () => {

    //const nombre = document.getElementById('nombre');
    const nombre = $('#nombre').val().trim();
    if (nombre) {
        empleados.push(nombre);
        //document.getElementById('nombre').innerText = '';//usando js
        $('#nombre').val('');
        renderizarTabla();
    } else {
        alert("Ingrese un nombre");
    }
}

const renderizarTabla = () => {
    const $lista = $('#lista-empleados');
    $lista.empty();
    empleados.forEach((empleado, index) => {
        const $li = $('<li></li>').text(empleado);

        const $buttonEliminar = $('<button></button>')
            .addClass('eliminar')
            .text('Eliminar')
            .on('click', () => eliminarEmpleado2(index,$li));

        $li.append($buttonEliminar);
        $lista.append($li);
        $li.fadeIn(500);
    });

}

const eliminarEmpleado = (index) => {
    empleados.splice(index, 1);
    renderizarTabla();
}

const eliminarEmpleado2 = (index, $li) => {
    $li.fadeOut(500, () => {
        empleados.splice(index, 1);
        renderizarTabla();
    })
}

$('#agregar').on('click', agregarEmpleado);

renderizarTabla();