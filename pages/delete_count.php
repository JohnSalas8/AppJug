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
                    <li><a href="generic_page.php">Inicio</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="active dropdown">
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
                    <li class="dropdown">
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
        <form action="">
            <table>
                <tr>
                    <td colspan="2" id="titulo-tabla">
                        Eliminar Cuenta
                    </td>
                </tr>
                <tr>
                    <td>
                        Contraseña:
                    </td>
                    <td>
                        <input type="password" name="pswd" id="" placeholder="Escriba Contraseña">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="mssg">

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn" id="btn-danger">
                            Eliminar
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <footer class="footer " style="color: white; position: absolute; bottom: 0; width:100%;">
       <div class="container" style="background-color:#AAB7B8">
        !Contactanos¡
        <br>
            <a href="https://www.facebook.com">
                <img src="../imgs/Fnegro.png" width="32px" height="32px">
            </a>
            <a href="https://twitter.com/">
                <img src="../imgs/twitterN.png" width="32px" height="32px">
            </a>
        <br>
        Copyright © 2018 | Ilse, Juan, Martin, Carlos
    </div>
</body>
</html>