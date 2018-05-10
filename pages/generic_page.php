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
                    <li class="active"><a href="index.php">Inicio</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        <img src="../imgs/IconoCompras.png" alt="" style="width: 23px; height: 23px;"> 
                        Mi Perfil
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="DeleteCount.html" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/eliminar.png" alt="">
                                    Borrar Mi Cuenta
                                </a>
                            </li>
                            <li>
                                <a href="ModifyCount.html" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/editar.png" alt="">
                                    Modificar
                                </a>
                            </li>
                            <li>
                                <a href="ModifyCount.html" class="items-menu-dropdown" style="color: #80858a;">
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
                                <a href="#" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/game-icon.png" alt="">
                                    Juegos
                                </a>
                            </li>
                            <li>
                                <a href="#" class="items-menu-dropdown" style="color: #80858a;">
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
                        <img src="../imgs/IconoCompras.png" alt="" style="width: 23px; height: 23px;">
                        Facturas
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background: #080808;">
                            <li>
                                <a href="#" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/game-icon.png" alt="">
                                    Juegos
                                </a>
                            </li>
                            <li>
                                <a href="#" class="items-menu-dropdown" style="color: #80858a;">
                                    <img class="sub-icon" src="../icons-ilse/dlc.png" alt="">
                                    DLC
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="">
                        <a class="dropdown-toggle" href="index.php">
                            Estadísticas
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="pages/consult_curp.php"> <img class="icon" src="../icons-ilse/cerrarses.png" alt=""> Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <br><br>
        <h1>JUG</h1>
        <img id="logo" src="img/logo_mex.jpg" alt="">
        <p>
            < LETRITAS DE AMOR >
        </p>
    </div>
</body>
</html>