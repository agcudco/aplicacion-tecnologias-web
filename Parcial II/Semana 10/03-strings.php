<?php
    //gestion de strings
    $cadena = "Hola Mundo";

    echo $cadena;
    echo "<br/>";

    $cadena2 = 'en PHP';

    echo $cadena." ".$cadena2;

    //funciones sobre cadenas
    echo "<br/>";

    //concatenar cadenas
    $cadena3 = $cadena." - ".$cadena2;
    echo $cadena3;

    echo "<br/>";

    //obtener la longitud de una cadena strlen
    echo "Longitud de la cadena 1: ".strlen($cadena);
    echo "<br/>";
    echo "Longitud de la cadena 2: ".strlen($cadena2);
    echo "<br/>";
    echo "Longitud de la cadena 3: ".strlen($cadena3);
    echo "<br/>";

    //buscar una cadena dentro de otra
    $cadena4 = "Aplicacion de tecnologias wweb con PHP";
    echo "<br/>";
    echo $cadena4;
    echo "<br/>";
    echo strrpos($cadena4, "PHP");
    echo "<br/>";
    //reemplazar una cadena por otra
    //str_replace   
    $cadena5 = "Hola Mundo en PHP con PHP";
    echo $cadena5;
    echo "<br/>";
    $cadena6 = "PHP";
    echo $cadena6;
    echo "<br/>";
    echo str_replace($cadena6, "JavaScript", $cadena5);

    //convertir a mayusculas

    echo "<br/>";
    $estudiante = "aNGEL gARCIA";
    echo $estudiante;
    echo "<br/>";
    echo strtoupper($estudiante);

    //convertir a minusculas
    echo "<br/>";
    echo strtolower($estudiante);

    //convertir la primera letra de cada palabra a mayusculas
    echo "<br/>";
    $nrc = "kevin israel yugla suntaxi";
    echo "<br/>";
    echo ucwords($nrc);

    //quitar espacios en blanco al inicio y al final de una cadena
    $nrc0 = "El nrc seleccionado es: ";
    echo "<br/>";
    $nrc2 = "                      aplicacion de tecnologias web                                                       ";
    echo  strlen($nrc2);
    echo "<br/>";
    echo strlen(trim($nrc2));

    //quitar espacios en blanco al inicio de una cadena
    echo "<br/>";
    echo strlen(ltrim($nrc2));
    //quitar espacios en blanco al final de una cadena
    echo "<br/>";
    echo strlen(rtrim($nrc2));

    //strcmp compara dos cadenas
    echo "<br/>";
    $username="admin";
    $ingresado="aDmIN";
    echo strcmp($username, $ingresado);
    echo "<br/>";
    echo strcmp(strtolower($username), strtolower($ingresado));

    //compara pero ignora mayusculas y minusculas
    echo "<br/>";
    echo strcasecmp($username, $ingresado);

//funcion empty
    echo "<br/> Empty: <br/>";

    $empleado="";
    echo "<br/>";
    echo strlen($empleado);
    echo "<br/>";
    echo empty($empleado);

    echo "<br/>";

    if(empty($empleado)){
        echo "La variable esta vacia";
    }else{
        echo "La variable tiene valores";
    }

    //eliminar una variable
    unset($empleado);

    echo "<br/>";
    //verificar si una variable esta definida 
    if(isset($empleado)){
        echo "La variable esta definida";
    }else{
        echo "La variable no esta definida";
    }
?>