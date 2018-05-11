<br><br><br>
<table>
<?php

    require("connection.php");

    $connection = connect_to_mysql();

    $idResp = $_REQUEST['idResp'];
    $kindProduct = $_REQUEST['kindProduct'];

    if ($kindProduct=="juego") {
        ?>

            <tr>
                <td colspan="2" id="titulo-tabla">
                    Facturas de Juegos
                </td>
            </tr>

        <?php
        $query = "select factura.*, compra_juego.id_Juego, toDateText(factura.fecha) as fechatxt from factura, compra_juego where factura.id_Resp="
            . $idResp
            . " and factura.id_Factura=compra_juego.id_Factura order by factura.fecha desc;";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result)==0) {
            ?> 
                <tr>
                    <td>
                        Usted no ha comprado algún producto.
                    </td>
                </tr>
            <?php
        }

        while ($line = mysqli_fetch_array($result)) {
            $idFactura = $line['id_Factura'];
            $idProducto = $line['id_Juego'];
            $fecha = $line['fechatxt'];

            ?>

                <tr>
                    <td> <?php echo $fecha; ?> </td>
                    <td>
                        <form method="post" <?php
                                echo "action=\"";
                                    echo "../driver/show_full_factura.php?idFactura=$idFactura&kindProduct=juego";
                                echo "\"";
                            ?> >
                            <button id="btn-wr" class="btn">
                                Ver
                            </button>
                        </form>
                    </td>
                </tr>

            <?php
        }
    } else {

        ?>

            <tr>
                <td colspan="2" id="titulo-tabla">
                    Facturas de Juegos
                </td>
            </tr>

        <?php

        $query = "select factura.*, compra_dlc.id_DLC, toDateText(factura.fecha) as fechatxt from factura, compra_dlc where factura.id_Resp="
            . $idResp 
            . " and factura.id_Factura=compra_dlc.id_Factura order by factura.fecha desc;";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result)==0) {
            ?> 
                <tr>
                    <td>
                        Usted no ha comprado algún producto.
                    </td>
                </tr>
            <?php
        }

        while ($line = mysqli_fetch_array($result)) {
            $idFactura = $line['id_Factura'];
            $idProducto = $line['id_dlc'];
            $fecha = $line['fechatxt'];

            ?>

                <tr>
                    <td> <?php echo $fecha; ?> </td>
                    <td>
                        <form method="post" <?php
                                echo "action=\"";
                                    echo "../driver/show_full_factura.php?idFactura=$idFactura&kindProduct=dlc";
                                echo "\"";
                            ?> >
                            <button id="btn-wr" class="btn">
                                Ver
                            </button>
                        </form>
                    </td>
                </tr>

            <?php
        }
    }

    mysqli_close($connection);
    
?>
</table>