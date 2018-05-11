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
                    <li class="active dropdown">
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


    <div id="div-games" class="container">
                
    </div>

    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("div-games").innerHTML = this.responseText;
            }
        };
        var email = localStorage.getItem('appjuguser');
        var idResp = localStorage.getItem(email);
        xhttp.open("GET", "../driver/show_all_facturas.php?idResp=" + idResp + "&kindProduct=juego", true);
        xhttp.send();
    </script>

</body>
</html>