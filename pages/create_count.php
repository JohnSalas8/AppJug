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
                    <li><a href="sign_in.php"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a></li>
                    <li><a href="../pages/create_count.php"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <br><br><br>
        <form id="form-create-count" action="sign_in.php" method="post">
            <table>
                <tr>
                    <td colspan="2" id="titulo-tabla">
                        Crear Cuenta
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Los campos con fondo gris son obligatorios.
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Nombre(s):
                    </td>
                    <td>
                        <input type="text" name="firstname" id="firstname" placeholder="Escriba su(s) Nombre(s)">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Apellido Paterno:
                    </td>
                    <td>
                        <input type="text" name="lastnamep" id="lastnamep" placeholder="Escriba su Apellido Paterno">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Apellido Materno:
                    </td>
                    <td>
                        <input type="text" name="lastnamem" id="lastnamem" placeholder="Escriba su Apellido Materno">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        RFC:
                    </td>
                    <td>
                        <input type="text" name="rfc" id="rfc" placeholder="Escriba su RFC">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Num. de Tarjeta:
                    </td>
                    <td>
                        <input type="text" name="num-card" id="num-card" placeholder="Escriba su Número de Tarjeta">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Clave:
                    </td>
                    <td>
                        <input type="text" name="code-card" id="code-card" placeholder="Escriba la clave de su Tarjeta">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Miembro desde:
                    </td>
                    <td>
                        <input type="number" name="sense-year" id="sense-year" min="1990" value="2018" max="2018">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Hasta que Mes y Año:
                    </td>
                    <td>
                        <input type="month" name="until-month-year" id="until-month-year" min="2018-04">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Ciudad:
                    </td>
                    <td>
                        <select name="city" id="city">
                            <option>Selección</option>
                            <option>Aguascalientes</option>
                            <option>Asientos</option>
                            <option>Calvillo</option>
                            <option>Cosio</option>
                            <option>El Llano</option>
                            <option>Jesús María</option>
                            <option>Pabellón de Arteaga</option>
                            <option>Rincón de Romos</option>
                            <option>San Francisco de los Romo</option>
                            <option>San José de Gracia</option>
                            <option>Tepezalá</option>
                        </select>
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Código Postal:
                    </td>
                    <td>
                        <input type="number" name="postal-code" id="postal-code" min="0">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Fraccionamiento:
                    </td>
                    <td>
                        <input type="text" name="fracc" id="fracc">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Calle:
                    </td>
                    <td>
                        <input type="text" name="street" id="street">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Número de Casa:
                    </td>
                    <td>
                        <input type="number" name="number-home" id="number-home" placeholder="S/N = 0" min="0">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Telefono:
                    </td>
                    <td>
                        <input type="text" name="cell" id="cell" placeholder="Ej: Tel. Casa o Celular">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Correo:
                    </td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="ejemplo@dominio.com">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Contraseña:
                    </td>
                    <td>
                        <input type="password" name="pswd1" id="pswd1" placeholder="Escriba su Contraseña">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Comprobar Contraseña:
                    </td>
                    <td>
                        <input type="password" name="pswd2" id="pswd2" placeholder="Escriba de Nuevo su Contraseña">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="mssg">

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="button" class="btn" id="btn-ok" value="Crear Cuenta" onclick="createCount();">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>