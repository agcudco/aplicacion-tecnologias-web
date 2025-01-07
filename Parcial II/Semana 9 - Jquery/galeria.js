const imagenes = ["imagen1.jpg", "imagen2.jpg", "imagen3.jpg", "imagen4.jpg", "imagen5.jpg", "imagen6.jpg"];

let indiceActual = 0;

const mostrarImagen = (indice) => {
    const $imagen = $('#imagen-actual');
    $imagen.fadeOut(500, () => {
        $imagen.attr('src', imagenes[indice]);
        $imagen.fadeIn(500);
    });
}

const anteriorImagen = () => {
    indiceActual = (indiceActual - 1 + imagenes.length) % imagenes.length;
    mostrarImagen(indiceActual);
}

const siguienteImagen = () => {
    indiceActual = (indiceActual + 1) % imagenes.length;
    mostrarImagen(indiceActual);
}

$('#prev').on('click', anteriorImagen);
$('#next').on('click', siguienteImagen);