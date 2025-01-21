<?php

///arrays asociativos => clave: valor

$producto = [
    "nombre"=>"Laptop",
    "marca"=>"HP",
    "precio"=>793.44,
    "stock"=>10
];

foreach($producto as $clave=>$valor){
    echo ucfirst($clave).": $valor <br>";
}

$producto["precio"] +=50; 
foreach($producto as $clave=>$valor){
    echo ucfirst($clave).": $valor <br>";
}

$persona = [
    "nombre"    => "Juan",
    "edad"      => 50,
    "profesion" => "Desarrollador",
    "ciudad"    => "Sangolqui"
];

echo "Nombre: ".$persona["nombre"]."<br>";
echo "profesion: ".$persona["profesion"]."<br>";

echo "<br>array_key_exists: verifica si una clave existe <br>";
if(array_key_exists("edad",$persona)){
    echo "La clave 'edad' existe en el arreglo";
}else{
    echo "La clave 'edad' no existe en el arreglo";
}

echo "<br>in_array: verifica si un valor existe <br>";
if(in_array("Juan",$persona)){
    echo "El valor 'Juan' existe en el arreglo";
}else{
    echo "El valor 'Juan' no existe en el arreglo";
}
echo "<br>array_search: devuelve la clave por medio del valor<br>";
$clave = array_search("Desarrollador",$persona);
echo "<br>La clave del valor 'Desarrollador' es: ".$clave;
?>