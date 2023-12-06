<?php

#Solución punto 3

#incluir el archivo html
include 'metodo_get.html';

#Definición de variables

$nombre = 0;
$apellido = 0;
$cedula = 0;

    #Método GET
    if (isset($_GET['enviar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cedula'];

        #Muestra la información registrada
        echo "Nombre: ".$nombre."<br>";
        echo "Apellido: ".$apellido."<br>";
        echo "Cédula: ".$cedula."<br><br>";
    
}
?>