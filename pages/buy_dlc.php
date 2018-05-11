<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APP JUG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/eventsWindowModalDLC.js"></script>
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
                    <li><a href="index.php">Inicio</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        <img src="../imgs/IconoPerfil.png" alt="" style="width: 23px; height: 23px;"> 
                        Mi Perfil
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background: #080808;">
                            <li>
                                <a href="delete_count.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/eliminar.png" alt="">
                                    Borrar Mi Cuenta
                                </a>
                            </li>
                            <li>
                                <a href="modify_count.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/editar.png" alt="">
                                    Modificar
                                </a>
                            </li>
                            <li>
                                <a href="add_kid.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/crear.png" alt="">
                                    Agregar Niño
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="active dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        <img src="../imgs/IconoCompras.png" alt="" style="width: 23px; height: 23px;"> 
                        Compras
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background: #080808;">
                            <li>
                                <a href="buy_game.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/game-icon.png" alt="">
                                    Juegos
                                </a>
                            </li>
                            <li>
                                <a href="buy_dlc.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/dlc.png" alt="">
                                    DLC
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        <img src="../imgs/IconoFactura.png" alt="" style="width: 23px; height: 23px;">
                        Facturas
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background: #080808;">
                            <li>
                                <a href="factura_game.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/game-icon.png" alt="">
                                    Juegos
                                </a>
                            </li>
                            <li>
                                <a href="factura_dlc.php" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/dlc.png" alt="">
                                    DLC
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="">
                        <a class="dropdown-toggle" href="estadistics.php">
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

        <div class="container">

            <br><br><br>

            <?php

                require("../driver/connection.php");

                $connection = connect_to_mysql();

                $query = "select * from view_dlc;";
                $result = mysqli_query($connection, $query);
                
                while ($line = mysqli_fetch_array($result)) {
                    ?>
                    <div class="show-game">
                        <h3>
                        <?php
                            $name_game = $line['nombre'];
                            $id_game = $line['id_DLC'];
                            $precio_game = $line['precio'];
                            echo $name_game;
                        ?>
                        </h3>
                        <br>
                        <img class="muestra-game" src="../imgs/ControlGame.png" alt="">
                        <br>
                        <input type="button" class="btn" id="btn-ok" value="Ver" <?php 
                            echo "onclick=\"";
                                echo "updateModalWindow('$name_game', $id_game, $precio_game); showWindowModal();";
                            echo "\"";
                        ?>>
                    </div>
                    <?php
                }

                mysqli_close($connection);
            ?>
            </div>


            <div class="" id="popup">
                <div id="popup-contenedor" class="popup-contenedor">
                    <div id="divCont">
                        <div id="descGame">

                        </div>
                        <div class="todosComentarios allCmnts desc" id="cmntTable">

                        </div>
                        <div id="errFactura" class="todosComentarios">

                        </div>
                        <div class="comentarios desc">
                            <div id="comentarios">
                                <div id="paraComentar">

                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="btnCerrar" onclick="hideWindowModal()">x</button>
                </div>
            </div>

            <script>
                hideWindowModal();
            </script>

</body>
</html>