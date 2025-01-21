<?php

//-----------------------------------------
// FUNCIONES
//-----------------------------------------

//DECLARAR UNA FUNCION
function holaMundo(){
    return "<br> Hola Mundo <br>";
}

echo "<br>".holaMundo()."<br>";

function sumar($a,$b){
    return $a+$b;
}

echo "<br>La suma entre 3 y 5 es: ".sumar(3,5)."<br>";

function mostrarMensaje($mensaje){
    echo $mensaje;
}

mostrarMensaje("Funcion sin retorno");
?>