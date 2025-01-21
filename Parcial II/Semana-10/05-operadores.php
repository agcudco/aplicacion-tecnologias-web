<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores aritmeticos</h1>
    <?php
        $n1 = 10.99;
        $n2 = 20.01;
        $resultado = $n1 + $n2;
        echo "La suma entre ".$n1." y ".$n2." es: ".$resultado;
        $resta=$n2-$n1;
        echo "<br>La resta entre ".$n2." y ".$n1." es: ".$resta;
        $multiplicacion=$n1*$n2;
        echo "<br>La multiplicacion entre ".$n1." y ".$n2." es: ".$multiplicacion;
        $division=$n2/$n1;
        echo "<br>La division entre ".$n2." y ".$n1." es: ".$division;
        //residuo 
        $residuo=5%3;
        echo "<br>El residuo entre 5 y 3 es: ".$residuo;
        //potencia - exponente
        $potencia = $n1**3;
        echo "<br>La potencia de ".$n1." elevado a la 3 es: ".$potencia;
        //valores de incremento
        $cont = 5;
        $cont++;
        echo "<br>El valor de cont es: ".$cont;
        $cont++;
        echo "<br>El valor de cont es: ".$cont;
        $cont++;
        $cont--;
        echo "<br>El valor de cont es: ".$cont--;
        echo "<br>El valor de cont es: ".$cont--;
        echo "<br>El valor de cont es: ".--$cont;

        //combinacion de operadores
        $cont +=10;
        echo "<br>El nuevo valor de cont es (+10): ".$cont;
        $cont -=15;
        echo "<br>El nuevo valor de cont es (-15): ".$cont;
        $cont *=2;
        echo "<br>El nuevo valor de cont es (*2): ".$cont;
        $cont /=3;
        echo "<br>El nuevo valor de cont es (/3): ".$cont;
    ?>
    <h1>Operadores comparación</h1>
    <b>Igualdad (==)</b>
    <?php
        echo "<br/>";
        $a = 10;
        $b = "10";
        $c = 10.0;
        echo "<br/>"." a = 10, b = '10', c = 10.0 <br/>";
        var_dump($a == $b);
        echo "<br/>";
        var_dump($a == $c);
    ?>
    <br>
    <b>Identidad (===)</b>
    <?php        
        $a = 10;
        $b = "10";
        $c = 10.0;
        echo "<br/>"." a = 10, b = '10', c = 10.0 <br/>";
        var_dump($a === $b);
        echo "<br/>";
        var_dump($a === $c);
    ?>
    <br>
    <b>Desigualdad (!==)</b>
    <?php        
        $a=5;
        $b="6";
        echo "<br/>"." a = 5, b = '6' <br/>";
        var_dump($a !== $b);
    ?>

    <br>
    <b>No identidad (!==)</b>
    <?php
        $a=5;
        $b="5";
        echo "<br/>"." a = 5, b = '5' <br/>";
        var_dump($a != $b);
    ?>
    <h1>Operadores Lógicos</h1>
    <br>
    <b>AND (&&)</b>
    <?php
        $a = true;
        $b=true;
        $c=false;
    
        echo "<br/>"." a = true, b = true, c = false <br/>";
        var_dump($a && $b);
        echo "<br/>";
        var_dump($a && $c);
    ?>
    <br>
    <b>OR (||)</b>
    <?php
        $a = true;
        $b=true;
        $c=false;
        echo "<br/>"." a = true, b = true, c = false <br/>";
        var_dump($a || $b);
        echo "<br/>";
        var_dump($a || $c);
        echo "<br/>";
        var_dump($a || $b||$c);
    ?>

    <br>
    <b>NOT (!)</b>
    <?php
         $a = true;
         $b=true;
         $c=false;
         echo "<br/>"." a = true, b = true, c = false <br/>";
         var_dump(!$a);
         echo "<br/>";
         var_dump(!$b);
         echo "<br/>";
         var_dump(!$c);
         echo "<br/>";
    ?>
    <br>
    <b>Combindas</b>
    <?php
         $a = true;
         $b=true;
         $c=false;
         echo "<br/>"." a = true, b = true, c = false <br/>";
         $resultado = ($a || $b) && $c;
         echo "<br/>".var_dump($resultado);
         $resultado2 = $a && ($b || $c);
         echo "<br/>".var_dump($resultado2);
    ?>
</body>
</html>