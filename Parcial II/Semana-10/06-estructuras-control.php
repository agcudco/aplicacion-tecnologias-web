<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <h3>Estructuras selectivas</h3>
    <b>if - else - elseif</b>
    <?php
        $nrc = 1836;
        $materia = 'atw';
        if($nrc==1836){
            echo "<br>El NRC es el correcto";
        }else{
            echo "<br>El NRC es incorrecto";
        }

        echo "<br> comparando el NRC con string <br>";
        if($nrc=="1836"){
            echo "<br>El NRC es el correcto";
        }else{
            echo "<br>El NRC es incorrecto";
        }

        echo "<br>";

        if($nrc === 1836 && $materia === 'atw'){
            echo "<br>El NRC y la materia son correctos";
        }else{
            echo "<br>El NRC o la materia son incorrectos";
        }
    ?>
    <b>Switch</b>
    <?php
        $dia = 3;
        echo "<br>El dia es: ".$dia."<br>";

        switch($dia)
        {
            case 1:
                echo "<br>Lunes";
                break;
            case 2:
                echo "<br>Martes";
                break;
            case 3:
                echo "<br>Miercoles";
                break;
            case 4:
                echo "<br>Jueves";
                break;
            case 5:
                echo "<br>Viernes";
                break;
            case 6:
                echo "<br>Sabado";
                break;
            case 7:
                echo "<br>Domingo";
                break;
            default:
                echo "<br>El dia no existe";
        }
    ?>
</body>
</html>