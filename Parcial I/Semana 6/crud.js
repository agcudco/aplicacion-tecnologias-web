let estudiantes = [
    { id: 1, nombre: 'Juan', apellido: 'Perez', edad: 22, nrc: 'Aplicacion Tecnologias Web' },
    { id: 2, nombre: 'Anita', apellido: 'Lopez', edad: 30, nrc: 'Base de datos' }
] ///el origen de datos - respuesta de una api

const renderizarTabla = () => {
    const tableEstuadiantes = document.getElementById('tableEstudiantes')
    tableEstuadiantes.innerHTML = ''

    estudiantes.forEach((estudiante, index) => {
        const row = document.createElement('tr')
        row.innerHTML = `
            <td>${estudiante.id}</td>
             <td>${estudiante.nombre}</td>
            <td>${estudiante.apellido}</td>
            <td>${estudiante.edad}</td>
            <td>${estudiante.nrc}</td>
            <td>
                <button id="btnEditar" onClick="editarEstudiantes(${index})">Editar</button>
                <button onclick="eliminarEstudiante(${index})">Elimninar</button>
            </td>
        `

        tableEstuadiantes.appendChild(row)
    });
}

let editarIndex = null;
const guardarEstudiante = (event) => {
    event.preventDefault()

    const nombre = document.getElementById('nombre').value
    const apellido = document.getElementById('apellido').value
    const edad = document.getElementById('edad').value
    const nrc = document.getElementById('nrc').value

    if (!nombre || !apellido || !edad || !nrc) {
        alert('Por favor, comnplete los campos');
        return
    }

    if (editarIndex !== null) {
        estudiantes[editarIndex] = {
            id: estudiantes[editarIndex].id,
            nombre,
            apellido,
            edad,
            nrc
        }
        editarIndex = null
    } else {
        const nuevoEstudiante = {
            id: estudiantes.length + 1,
            nombre,
            apellido,
            edad,
            nrc
        }

        estudiantes.push(nuevoEstudiante)
    }

    document.getElementById('frmEstudiantes').reset();
    renderizarTabla()
}

const editarEstudiantes = (index) => {
    const estudiante = estudiantes[index];

    document.getElementById('nombre').value = estudiante.nombre;
    document.getElementById('apellido').value = estudiante.apellido;
    document.getElementById('edad').value = estudiante.edad;
    document.getElementById('nrc').value = estudiante.nrc;

    editarIndex = index;
}

const eliminarEstudiante = (index) => {
    if (confirm('Está seguro de eliminar?')) {
        estudiantes.splice(index, 1)
        renderizarTabla()
    }
}

document.getElementById('frmEstudiantes').addEventListener('submit', guardarEstudiante);
renderizarTabla();

