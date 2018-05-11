<?php 

    $idGame = $_REQUEST['idGame'];
    $idResp = $_REQUEST['idResp'];
    $calificacion = $_REQUEST['calificacion'];
    $opinion = $_REQUEST['opinion'];
    $fecha = $_REQUEST['fecha'];

    $query = "insert into opinion(id_Resp, id_Juego, descrip_Opinion, puntuacion, fecha) values ("
     . $idResp . "," . $idGame . ",'" . $opinion . "'," . $calificacion . ",'" . $fecha . "');";

    require("connection.php");

    $connection = connect_to_mysql();

    $result = mysqli_query($connection, $query);

    mysqli_close($connection);

?>