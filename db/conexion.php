<?php

#Solución punto 6 

    #variables en donde se trae la información de la base de datos.
    $host = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $basedatos = 'mi_proyecto';
    

    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);


    #informa si hay algún error en la conexión a la base de datos

    if ($conexion->connect_errno) {
        echo "falla en la conexión";
        exit();
    } 
    ?>