<?php

    function connect_to_mysql() {
        $server = "localhost";
        $user = "root";
        $pswd = "j24-cb09-ygo94";
        $bdd = "app jug";

        // ESTE TIPO DE CONEXION ES SIN USAR PHPMYADMIN
        $connection = mysqli_connect($server, $user, $pswd) or die ("No se ha podido conectar con MySQL.");
        mysqli_set_charset("UTF8", $connection);
        mysqli_select_db($connection, $bdd) or die ("No existe la basde de datos con el nombre: $bdd");

        return $connection;
    }
        
?>
