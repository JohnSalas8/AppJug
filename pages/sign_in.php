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
                    <button class="btn navbar-btn" id="btn-games">Juegos</button>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="pages/sign_in.php"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a></li>
                    <li><a href="pages/create_count.php"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <br><br><br>
        <form id="form-sign-in" action="../pages/generic_page.php" method="post">
            <table>
                <tr>
                    <td colspan="2" id="titulo-tabla">
                        Iniciar Sesión
                    </td>
                </tr>
                <tr>
                    <td>
                        Correo:
                    </td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="Escriba Correo Electrónico">
                    </td>
                </tr>
                <tr>
                    <td>
                        Contraseña:
                    </td>
                    <td>
                        <input type="password" name="pswd" id="pswd" placeholder="Escriba Contraseña">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="mssg">

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="button" class="btn" id="btn-ok" value="Iniciar Sesión" onclick="checkUser();">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>