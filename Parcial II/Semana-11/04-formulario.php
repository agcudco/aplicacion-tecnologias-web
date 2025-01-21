<?php
    session_start();

    if(!isset($_SESSION['productos'])){
        $_SESSION['productos']=[];
    }

    function obtenerProductos(){
        return $_SESSION['productos'];
    }

    function agregarProductos($nombre,$precio,$stock){
        if(!empty($nombre) && $precio>0 && $stock>0){
            $_SESSION['productos'][]=[
                'nombre'=>htmlspecialchars($nombre),
                'precio'=>(float)$precio,
                'stock'=>(int)$stock
            ];
            return true;
        }
        return true;
    }

    ///gestionar el envio de valores del formulario
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $nombre = $_POST['nombre']??'';
        $precio = $_POST['precio']??0;
        $stock = $_POST['stock']??0;

        if(agregarProductos($nombre,$precio,$stock)){
            $mensaje = "Insercion exitosa";            
        }else{
            $mensajeError="Error al registrar";
        }
    }

    $productos=obtenerProductos();

    function renderizarTabla($productos){
        if(empty($productos)){
            echo "<tr><td>No existen productos</tr></td>";
        }else{
            foreach($productos as $index=>$producto){
                echo "
                    <tr>
                        <td>".($index+1)."</td>
                        <td>".$producto['nombre']."</td>
                        <td>".$producto['precio']."</td>
                        <td>".$producto['stock']."</td>
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
    <title>Document</title>
</head>
<body>
    <h1>Registro de Productos</h1>
    <div class="form-container">
        <form id="form-producto" method="POST">
            <label for="nombre">Nombre del producto:</label>
            <br>
            <input type="text" id="nombre" name="nombre">
            <br>
            <label for="precio">Precio:</label>
            <br>
            <input type="number" id="precio" name="precio">
            <br>
            <label for="stock">Unidades disponibles:</label>
            <br>
            <input type="number" id="stock" name="stock">
            <br>
            <button type="submit">Registrar</button>
        </form>
    </div>
    <h3>Lista de productos</h3>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $mensaje;?>
            <?php renderizarTabla($productos);?>
        </tbody>
    </table>
</body>
</html>