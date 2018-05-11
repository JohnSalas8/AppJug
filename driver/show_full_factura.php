<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APP JUG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/css_factura.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>

</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a id="title-jug" class="navbar-brand" href="#">
                    APP JUG
                </a>

                <script>
                    randomColor();
                </script>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="../pages/generic_page.php">Inicio</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        <img src="../imgs/IconoPerfil.png" alt="" style="width: 23px; height: 23px;"> 
                        Mi Perfil
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background: #080808;">
                            <li>
                                <a href="../pages/delete_count.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/eliminar.png" alt="">
                                    Borrar Mi Cuenta
                                </a>
                            </li>
                            <li>
                                <a href="../pages/modify_count.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/editar.png" alt="">
                                    Modificar
                                </a>
                            </li>
                            <li>
                                <a href="../pages/add_kid.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/crear.png" alt="">
                                    Agregar Niño
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        <img src="../imgs/IconoCompras.png" alt="" style="width: 23px; height: 23px;"> 
                        Compras
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background: #080808;">
                            <li>
                                <a href="../pages/buy_game.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/game-icon.png" alt="">
                                    Juegos
                                </a>
                            </li>
                            <li>
                                <a href="../pages/buy_dlc.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/dlc.png" alt="">
                                    DLC
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="active dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        <img src="../imgs/IconoFactura.png" alt="" style="width: 23px; height: 23px;">
                        Facturas
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background: #080808;">
                            <li>
                                <a href="../pages/factura_game.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/game-icon.png" alt="">
                                    Juegos
                                </a>
                            </li>
                            <li>
                                <a href="../pages/factura_dlc.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/dlc.png" alt="">
                                    DLC
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="">
                        <a class="dropdown-toggle" href="../pages/estadistics.php">
                            <img src="../imgs/IconoEstadisticas.png" alt="" style="width: 23px; height: 23px;">
                            Estadísticas
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php" onclick="logout();">
                            <img class="icon" src="../icons-ilse/cerrarses.png" alt=""> 
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
    <div class="container">
        <table style="width:800px;" id="fullFactura">
            <th class="header" colspan="6">FACTURA</th>
            <?php

                $idFactura = $_REQUEST['idFactura'];
                $kindProduct = $_REQUEST['kindProduct'];

                require("connection.php");

                $connection = connect_to_mysql();

                $query = "select toDateText(fecha) as fecha from factura where factura.id_Factura="
                    . $idFactura
                    . ";";

                $result = mysqli_query ($connection, $query);
                $line = mysqli_fetch_array($result);

                if (mysqli_num_rows($result)!=0) {
                    $fechaFactura = $_REQUEST['fecha'];
                }

            ?>
            <tr>
                <td colspan="1">
                    Folio <?php echo $idFactura; ?>
                </td>
                <td colspan="5" style="text-align: right;">
                    <?php echo $fechaFactura; ?>
                </td>
            </tr>
            <tr>
                <td class="def" colspan="2">
                    <b>Emite:</b><br>
                    App Jug S.A. de C.V.<br>
                    APJ242509119495<br>
                    johnsalaslp@gmail.com<br>
                    Av., Aguascalientes S/N<br>
                    Aguascalientes, Aguascalientes, México
                    <br>20298
                </td>
                <td class="def" colspan="4">
                    <b>Receptor:</b><br>
                    <?php                    
                        $query = "select responsable.* from responsable, factura where factura.id_Factura="
                            . $idFactura . " and responsable.id_Resp=factura.id_Resp;";
                        
                        $result = mysqli_query($connection, $query);

                        if (mysqli_num_rows($result)!=0) {
                            $line = mysqli_fetch_array($result);
                            $fullname = (
                                    $line["ap_Pat"] . " " .
                                    $line["ap_Mat"] . " " .
                                    $line["nombre"]
                                );
                            echo "$fullname<br>";
                            echo $line['rfc'] . "<br>";
                            echo $line['correo'] . "<br>";
                            echo $line['telefono'] . "<br>";
                            echo $line['calle'] . " " . $line['numero'] . "<br>";
                            echo $line['fracc'] . "<br>";
                            echo $line['cp'] . "<br>";
                            echo $line['ciudad'] . ", Aguascalientes, México<br>";
                        }
                    ?>
                </td>
            </tr>
            <tr class="header">
                <td class="headers">CLAVE DE UNIDAD</td>
                <td class="headers">UNIDAD</td>
                <td class="headers">DESCRIPCIÓN</td>
                <td class="headers">CANTIDAD</td>
                <td class="headers">VALOR UNITARIO</td>
                <td class="headers">IMPORTE</td>
            </tr>
            <tr>
                <?php
                    if ($kindProduct=="juego") {
                        $query = "select juego.*, (juego.precio*0.16) as iva, ((juego.precio*0.16)+juego.precio) as total "
                            . " from juego, compra_juego, factura where factura.id_Factura=" . $idFactura
                            . " and compra_juego.id_Factura=factura.id_Factura"
                            . " and compra_juego.id_Juego=juego.id_Juego;";
                    } else {
                        $query = "select dlc.*, (dlc.precio*0.16) as iva, ((dlc.precio*0.16)+dlc.precio) as total "
                            . " from dlc, compra_dlc, factura where factura.id_Factura=" . $idFactura
                            . " and compra_dlc.id_Factura=factura.id_Factura"
                            . " and compra_dlc.id_DLC=dlc.id_DLC;";
                    }

                    $result = mysqli_query($connection, $query);

                    $idProducto = "";
                    $line = none;
                    $nameGame = "";
                    $descGame = "";
                    $iva = "";
                    $total = "";
                    if(mysqli_num_rows($result)!=0) {
                        $line = mysqli_fetch_array($result);
                        if ($kindProduct=="juego") {
                            $idProducto = $line["id_Juego"];
                        } else {
                            $idProducto = $line["id_DLC"];
                        }
                        $nameGame = $line["nombre"];
                        $descGame = $line["descripcion"];
                        $precio = $line["precio"];
                        $iva = $line["iva"];
                        $total = $line["total"];
                    }
                ?>
                <td class="cantidades"><?php echo $idProducto; ?></td>
                <td><?php echo $nameGame; ?></td>
                <td><?php echo $descGame; ?></td>
                <td class="cantidades"><?php echo 1; ?></td>
                <td class="cantidades"><?php echo $precio; ?></td>
                <td class="cantidades"><?php echo $precio ?></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="3"></td>
                <td colspan="3" class="headers">Subtotal</td>
                <td class="cantidades"><?php echo $precio; ?></td>
            </tr>
            <tr>
                <td colspan="3" class="headers">Iva 16%</td>
                <td class="cantidades">
                    <?php

                        echo number_format($iva, 2, '.', ',');

                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="headers">Total</td>
                <td class="cantidades">
                    <?php

                        echo number_format($total, 2, '.', ',');

                    ?>
                </td>
            </tr>
            <tr>
                <td class="headers">Moneda</td>
                <td class="def">MXN</td>
                <td colspan="4" rowspan="3"></td>
            </tr>
            <tr>
                <td class="headers">Forma de Pago</td>
                <td class="def">tarjeta</td>
            </tr>
            <tr>
                <td class="headers">Método de Pago</td>
                <td class="def">pago en una sola exhibición</td>
            </tr>
            <?php

                mysqli_close($connection);

            ?>
            <tr>
               <td colspan="6">
                   <br><br>
                   <button id="btn-ok" class="btn" onclick="history.back();">
                       <- Volver
                   </button>
               </td> 
            </tr>
        </table>
    </div>

</body>
</html>