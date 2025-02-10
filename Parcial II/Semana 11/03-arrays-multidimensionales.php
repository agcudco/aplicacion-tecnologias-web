<?php

echo "<br>Gestion de pedidos<br>";

$pedidos = [
    ["cliente"=>"Juan Perez","producto"=>"Smart-Tv","cantidad"=>10,"total"=>2000.54],
    ["cliente"=>"Angel Cudco","producto"=>"SmartPhone","cantidad"=>5,"total"=>1800.99],
    ["cliente"=>"Ana Lopez","producto"=>"Laptop HP","cantidad"=>1,"total"=>1500.98],
    ["cliente"=>"Maria Gomez","producto"=>"Teclado","cantidad"=>20,"total"=>3500.99],
    ["cliente"=>"Luis Torres","producto"=>"Impresora","cantidad"=>8,"total"=>8500.98]
];

echo "<br>Pedidos realizados:<br>";
foreach($pedidos as $pedido){
    echo "Cliente: ".$pedido["cliente"]." Total a pagar: ".$pedido["total"]."<br>";
}

$totalIngreso =0;

foreach($pedidos as $p){
    $totalIngreso +=$pedido["total"];
}

echo "<br>Venta total es: ".$totalIngreso."<br>";
echo "<br>Venta total (formateada) es: ".number_format($totalIngreso,2)."<br>";
?>