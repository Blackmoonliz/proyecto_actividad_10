<?php

#Solución punto 2

#incluir el archivo html
include 'mayor_edad.html';

#Definición de variables
$edad = 0;
const constante_18 = 18;

    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

    #si la edad es mayor o igual a 18, imprime Es mayor de edad 
    if ($edad >= constante_18 && $edad < 110) {
        echo "<h2> Es mayor de edad</h2>";
    }

    #si la edad es menor a 18, imprime No es mayor de edad
    else if ($edad < constante_18 && $edad > 0) {
        echo "<h2>No es mayor de edad</h2>";
    }
    #si el valor ingresado no cumple con lo anterior, imprime No válido!
    else{
        echo "<h2>No válido!</h2>";
    }
    }
?>