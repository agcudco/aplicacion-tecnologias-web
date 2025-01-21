<?php

// ----------------------------------------
// GESTION DE ARRAYS
// ----------------------------------------
echo "Lista de tareas<br>";
//arreglos indexados
$tareas = ["Limpiar cuartos","Lavar platos","Planchar","Lavar ropa"];

$numeros = [0,20,14,15,8];

function imprimirArray($array){
    foreach($array as $indice=>$elemento){
        echo ($indice+1).": $elemento<br>";
    }
}

echo "<br> Con foreach<br>";
foreach($tareas as $indice => $tarea){
    echo ($indice +1).": $tarea<br>";
}

echo "<br>";
//agregar un nuevo elemento
$tareas[]="Preparar el almuerzo";
$tareas[]="Preparar la cena";
imprimirArray($tareas);

//eliminar elementos
unset($tareas[1]);
echo "<br>Después de elimninar<br>";
imprimirArray($tareas);

echo "<br>array_push: <br>";
array_push($tareas,"Comprar despensa","Recoger a los hijos de la escuela");
imprimirArray($tareas);

echo "<br>array_pop: <br>";
$ultimoElemento = array_pop($tareas);
echo "<br>Ultimo elemento eliminado: ".$ultimoElemento."<br>";
imprimirArray($tareas);

echo "<br>array_shift: <br>";
$primerElemento = array_shift($tareas);
echo "<br>Primer elemento eliminado: ".$primerElemento."<br>";
imprimirArray($tareas);

echo "<br>array_unshift: <br>";
array_unshift($tareas,"Pagar internet","Comprar detergentes");
imprimirArray($tareas);

echo "<br>array_merge: <br>";
$tareasTrabajo= ["Formatear PC","Subir codigo a produccion","Documentar bd"];
$misTareas = array_merge($tareasTrabajo,$tareas);
echo "<br>Tareas hogar<br>";
imprimirArray($tareas);
echo "<br>Tareas trabajo<br>";
imprimirArray($tareasTrabajo);
echo "<br>Mis tareas<br>";
imprimirArray($misTareas);

echo "<br>array_slice: <br>";
$subTareas = array_slice($misTareas,1,3);
imprimirArray($subTareas);

echo "<br>in_array: verifica si un valor existe en el arreglo <br>";
$task = "Formatear PC";
$existe = in_array($task,$misTareas);
echo $existe ? "SI": "NO";

?>