<?php
// Iniciar la sesión para almacenar datos de productos
session_start();

// Inicializar la variable de sesión 'productos' si no existe
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}

// Función para obtener la lista de productos almacenados
function obtenerProductos() {
    return $_SESSION['productos'];
}

// Función para agregar un producto a la lista
function agregarProductos($nombre, $precio, $stock) {
    // Validar los campos antes de agregar
    if (validarCampos($nombre, $precio, $stock)) {
        // Agregar el producto a la sesión
        $_SESSION['productos'][] = [
            'nombre' => htmlspecialchars($nombre), // Sanitizar el nombre
            'precio' => (float)$precio,           // Convertir precio a número flotante
            'stock' => (int)$stock,               // Convertir stock a número entero
        ];
        return true; // Indicar éxito
    }
    return false; // Indicar fallo
}

// Función para actualizar un producto existente
function actualizarProducto($index, $nombre, $precio, $stock) {
    // Verificar que el producto existe y los campos son válidos
    if (isset($_SESSION['productos'][$index]) && validarCampos($nombre, $precio, $stock)) {
        // Actualizar los valores del producto en la sesión
        $_SESSION['productos'][$index] = [
            'nombre' => htmlspecialchars($nombre), // Sanitizar el nombre
            'precio' => (float)$precio,           // Convertir precio a número flotante
            'stock' => (int)$stock,               // Convertir stock a número entero
        ];
        return true; // Indicar éxito
    }
    return false; // Indicar fallo
}

// Función para eliminar un producto por su índice
function eliminarProducto($index) {
    // Verificar que el índice existe en la lista
    if (isset($_SESSION['productos'][$index])) {
        // Eliminar el producto usando array_splice
        array_splice($_SESSION['productos'], $index, 1);
        return true; // Indicar éxito
    }
    return false; // Indicar fallo
}

// Función para validar los campos del formulario
function validarCampos($nombre, $precio, $stock) {
    // Verificar que el nombre no está vacío y que precio y stock son mayores a 0
    return !empty($nombre) && $precio > 0 && $stock > 0;
}

// Variables para manejar mensajes y valores del formulario
$alerta = ''; // Mensaje para alertar al usuario
$nombre = ''; // Nombre del producto (vacío por defecto)
$precio = ''; // Precio del producto (vacío por defecto)
$stock = ''; // Stock del producto (vacío por defecto)
$index = null; // Índice del producto para edición

// Procesar solicitudes POST (para agregar o actualizar productos)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener valores del formulario
    $nombre = $_POST['nombre'] ?? '';
    $precio = $_POST['precio'] ?? 0;
    $stock = $_POST['stock'] ?? 0;
    $index = $_POST['index'] ?? null;

    if ($index !== null && is_numeric($index)) {
        // Actualizar producto si se proporciona un índice válido
        if (actualizarProducto((int)$index, $nombre, $precio, $stock)) {
            $alerta = "Producto actualizado exitosamente.";
            // Limpiar los valores del formulario después de actualizar
            $nombre = $precio = $stock = '';
        } else {
            $alerta = "Error al actualizar el producto.";
        }
    } else {
        // Agregar producto si no se proporciona un índice
        if (agregarProductos($nombre, $precio, $stock)) {
            $alerta = "Producto registrado exitosamente.";
            // Limpiar los valores del formulario después de agregar
            $nombre = $precio = $stock = '';
        } else {
            $alerta = "Error al registrar el producto. Verifica los campos.";
        }
    }
}

// Procesar solicitudes GET (para eliminar o editar productos)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = $_GET['action'] ?? ''; // Obtener acción (edit o delete)
    $index = $_GET['index'] ?? null; // Obtener índice del producto

    if ($action === 'delete' && is_numeric($index)) {
        // Eliminar producto si la acción es delete y el índice es válido
        if (eliminarProducto((int)$index)) {
            $alerta = "Producto eliminado correctamente.";
        } else {
            $alerta = "Error al eliminar el producto.";
        }
    } elseif ($action === 'edit' && is_numeric($index)) {
        // Cargar datos del producto para edición
        $producto = $_SESSION['productos'][$index] ?? null;
        if ($producto) {
            $nombre = $producto['nombre'];
            $precio = $producto['precio'];
            $stock = $producto['stock'];
            $index = (int)$index;
        }
    }
}

// Obtener la lista de productos
$productos = obtenerProductos();

// Función para renderizar la tabla de productos
function renderizarTabla($productos) {
    if (empty($productos)) {
        // Mostrar mensaje si no hay productos
        echo "<tr><td colspan='5'>No existen productos</td></tr>";
    } else {
        foreach ($productos as $index => $producto) {
            // Renderizar cada producto como una fila de la tabla
            echo "
                <tr>
                    <td>" . ($index + 1) . "</td>
                    <td>" . $producto['nombre'] . "</td>
                    <td>" . $producto['precio'] . "</td>
                    <td>" . $producto['stock'] . "</td>
                    <td>
                        <a href='?action=edit&index=$index'>Editar</a>
                        <a href='?action=delete&index=$index'>Eliminar</a>
                    </td>
                </tr>
            ";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <script>
        // Función para validar el formulario antes de enviarlo
        function validarFormulario() {
            const nombre = document.getElementById('nombre').value.trim();
            const precio = parseFloat(document.getElementById('precio').value);
            const stock = parseInt(document.getElementById('stock').value);

            // Validar que el nombre no esté vacío
            if (nombre === '') {
                alert('El nombre no puede estar vacío.');
                return false;
            }

            // Validar que el precio sea un número positivo
            if (isNaN(precio) || precio <= 0) {
                alert('El precio debe ser un número mayor a 0.');
                return false;
            }

            // Validar que el stock sea un número positivo
            if (isNaN(stock) || stock <= 0) {
                alert('El stock debe ser un número mayor a 0.');
                return false;
            }

            return true; // Formulario válido
        }

        // Mostrar alerta en pantalla después de una acción
        <?php if (!empty($alerta)) : ?>
            alert('<?php echo $alerta; ?>');
        <?php endif; ?>
    </script>
</head>
<body>
    <h1>Registro de Productos</h1>
    <div class="form-container">
        <!-- Formulario para agregar o actualizar productos -->
        <form id="form-producto" method="POST" onsubmit="return validarFormulario();">
            <input type="hidden" name="index" value="<?php echo htmlspecialchars($index ?? ''); ?>">
            <label for="nombre">Nombre del producto:</label><br>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre ?? ''); ?>"><br>
            <label for="precio">Precio:</label><br>
            <input type="number" id="precio" name="precio" value="<?php echo htmlspecialchars($precio ?? ''); ?>"><br>
            <label for="stock">Unidades disponibles:</label><br>
            <input type="number" id="stock" name="stock" value="<?php echo htmlspecialchars($stock ?? ''); ?>"><br>
            <button type="submit"><?php echo isset($index) ? 'Actualizar' : 'Registrar'; ?></button>
            <button type="button" onclick="location.href='?';">Limpiar</button>
        </form>
    </div>
    <h3>Lista de productos</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php renderizarTabla($productos); ?>
        </tbody>
    </table>
</body>
</html>
