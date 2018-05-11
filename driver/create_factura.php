<?php

    require("connection.php");

    $connection = connect_to_mysql();

    $idResp = $_REQUEST['idResp'];
    $fecha = $_REQUEST['fecha'];
    $kindProduct = $_REQUEST['kindProduct'];
    $idProduct = $_REQUEST['idProduct'];

    $query = "insert into factura(id_Resp, fecha) values (" . $idResp . ",'" . $fecha . "');";

    $result = mysqli_query($connection, $query);

    $query = "select * from factura where factura.id_Resp=" . $idResp . " and factura.fecha='" . $fecha . "';";

    $result = mysqli_query($connection, $query);

    if ($line = mysql_fetch_array($result)!=0) {
        $idFactura = $line['id_Factura'];

        if (kindProduct=="juego") {
            $query = "insert into compra_juego(id_Juego, id_Factura, habilitado) values (" 
                . idProduct . "," 
                . $idFactura 
                . ",1);";
            
                $result = mysqli_query($connection, $query);                
        } else {
            "insert into compra_dlc(id_DLC, id_Factura, habilitado) values (" 
                . $idProduct 
                . ","
                . $idFactura 
                . ",1);";
            
                $result = mysqli_query($connection, $query);
        }
        
    }

    mysqli_close($connection);

?>
