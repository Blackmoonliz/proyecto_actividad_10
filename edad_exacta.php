<?php

#Solución punto 4

#incluir el archivo html
include 'edad_exacta.html';

#Definición de variables y constante
$fecha = 0;
$edad_exacta = 0;
$edad = 0;
$edad_meses =0;
$edad_dias = 0;
$fecha_actual = 0;

const constante_18 = 18;

# Crear objetos DateTime

if (isset($_POST['calcular'])) {
    $fecha = new DateTime($_POST['fecha_nacimiento']);

    $fecha_actual = new DateTime(date("y-m-d"));

    #Calcular la edad 
    
    $edad_exacta = $fecha->diff($fecha_actual);

    $edad = $edad_exacta->y;
    $edad_meses = $edad_exacta->m;
    $edad_dias = $edad_exacta->d;

    #imprime esto si la fecha ingresada es superior a la actual
    if ($fecha > $fecha_actual) {
        echo "<h2>Error: No puedes seleccionar una fecha futura.</h2>";
    }
    #imprime esto si la edad es mayor o igual a 18
    else if ($edad >= constante_18) {
        echo "<h2> Su edad es  ".$edad." años con " .$edad_meses. " meses y ".$edad_dias." días, por lo tanto: Es mayor de edad!</h2>";
    }
    #imprime esto si la edad es menor a 18
    else if ($edad < constante_18) {
        echo "<h2> Su edad es ".$edad." años con " .$edad_meses. " meses y ".$edad_dias." días, por lo tanto: No es mayor de edad!</h2>";
    }

}
?>