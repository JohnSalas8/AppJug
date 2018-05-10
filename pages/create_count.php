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
    
    <!--
        FALTA LA NAVBAR
    -->

    <div class="container">
        <br><br>
        <form action="">
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
                        <input type="text" name="firstname" id="" placeholder="Escriba su(s) Nombre(s)">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Apellido Paterno:
                    </td>
                    <td>
                        <input type="text" name="lastnamep" id="" placeholder="Escriba su Apellido Paterno">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Apellido Materno:
                    </td>
                    <td>
                        <input type="text" name="lastnamem" id="" placeholder="Escriba su Apellido Materno">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        RFC:
                    </td>
                    <td>
                        <input type="text" name="rfc" id="" placeholder="Escriba su RFC">
                    </td>
                </tr>
                <tr>
                    <td>
                        Num. de Tarjeta:
                    </td>
                    <td>
                        <input type="text" name="num-card" id="" placeholder="Escriba su Número de Tarjeta">
                    </td>
                </tr>
                <tr>
                    <td>
                        Clave:
                    </td>
                    <td>
                        <input type="text" name="code-card" id="" placeholder="Escriba la clave de su Tarjeta">
                    </td>
                </tr>
                <tr>
                    <td>
                        Miembro desde:
                    </td>
                    <td>
                        <input type="date" name="sense-year" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Hasta que Mes y Año:
                    </td>
                    <td>
                        <input type="month" name="until-month-year" id="" min="2018-04">
                    </td>
                </tr>
                <tr>
                    <td>
                        Ciudad:
                    </td>
                    <td>
                        <select name="city">
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
                <tr>
                    <td>
                        Código Postal:
                    </td>
                    <td>
                        <input type="number" name="sense" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Fraccionamiento:
                    </td>
                    <td>
                        <input type="number" name="sense" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Calle:
                    </td>
                    <td>
                        <input type="number" name="sense" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Número de Casa:
                    </td>
                    <td>
                        <input type="number" name="number-home" id=""placeholder="S/N = 0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefono:
                    </td>
                    <td>
                        <input type="text" name="phone" id="" placeholder="Ej: X-XX-XX-XX">
                    </td>
                </tr>
                <tr>
                    <td>
                        Celular:
                    </td>
                    <td>
                        <input type="text" name="cellphone" id="" placeholder="Ej: 044-449-XXX-XXXX">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Correo:
                    </td>
                    <td>
                        <input type="email" name="email" id="" placeholder="ejemplo@dominio.com">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Contraseña:
                    </td>
                    <td>
                        <input type="password" name="pswd1" id="" placeholder="Escriba su Contraseña">
                    </td>
                </tr>
                <tr class="obligatory">
                    <td>
                        Comprobar Contraseña:
                    </td>
                    <td>
                        <input type="password" name="pswd2" id="" placeholder="Escriba de Nuevo su Contraseña">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="mssg">

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn" id="btn-ok">
                            Crear Cuenta
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<!--
    
<script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response").innerHTML = this.responseText;
        } else {
            console.log('Hola');
        }
    };
    xhttp.open(
            "GET", "http://tucodigo.mx/index.php?estado=1&mpio=1&b_query=mpio",
            true);
    xhttp.send(null);
</script>

-->