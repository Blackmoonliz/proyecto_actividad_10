<?php

#Solución 1

#incluir el archivo html
include 'calculadora.html';

#Definición de variables
$n1 = 0;
$n2 = 0;
$tipo =0;
$resultado = 0;

if (isset($_POST['operar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $tipo = $_POST['tipo'];

    #operación suma
    switch ($tipo) {
        case '1':
            $resultado = $n1 + $n2;
            break;
    }

    #operación resta
    switch ($tipo) {
        case '2':
            $resultado = $n1 - $n2;
            break;
    }

    #operación mutiplicación
    switch ($tipo) {
        case '3':
            $resultado = $n1 * $n2;
            break;
    }

    #operación división
    switch ($tipo) {
        case '4':
            $resultado = $n1 / $n2;
            break;
    }

    #imprime el resultado
    echo "<h2>".$resultado."</h2>";
}

?>