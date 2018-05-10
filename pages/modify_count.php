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
                        Modificar Cuenta
                    </td>
                </tr>
                <tr>
                    <td>
                        Nombre(s):
                    </td>
                    <td>
                        <input type="text" name="firstname" id="firstname" placeholder="Escriba su(s) Nombre(s)">
                        <input type="checkbox" name="modify_firstname">
                    </td>
                </tr>
                <tr>
                    <td>
                        Apellido Paterno:
                    </td>
                    <td>
                        <input type="text" name="lastnamep" id="lastnamep" placeholder="Escriba su Apellido Paterno">
                        <input type="checkbox" name="modify_lastnamep">
                    </td>
                </tr>
                <tr>
                    <td>
                        Apellido Materno:
                    </td>
                    <td>
                        <input type="text" name="lastnamem" id="lastnamem" placeholder="Escriba su Apellido Materno">
                        <input type="checkbox" name="modify_lastnamem">
                    </td>
                </tr>
                <tr>
                    <td>
                        RFC:
                    </td>
                    <td>
                        <input type="text" name="rfc" id="rfc" placeholder="Escriba su RFC">
                        <input type="checkbox" name="modify_rfc">
                    </td>
                </tr>
                <tr>
                    <td>
                        Num. de Tarjeta:
                    </td>
                    <td>
                        <input type="text" name="num-card" id="num-card" placeholder="Escriba su Número de Tarjeta">
                        <input type="checkbox" name="modify_num-card">
                    </td>
                </tr>
                <tr>
                    <td>
                        Clave:
                    </td>
                    <td>
                        <input type="text" name="code-card" id="code-card" placeholder="Escriba la clave de su Tarjeta">
                        <input type="checkbox" name="modify_code-card">
                    </td>
                </tr>
                <tr>
                    <td>
                        Miembro desde:
                    </td>
                    <td>
                        <input type="date" name="sense-year" id="sense-year">
                        <input type="checkbox" name="modify_sense-year">
                    </td>
                </tr>
                <tr>
                    <td>
                        Hasta que Mes y Año:
                    </td>
                    <td>
                        <input type="month" name="until-month-year" id="until-month-year" min="2018-04">
                        <input type="checkbox" name="modify_month-year">
                    </td>
                </tr>
                <tr>
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
                        <input type="checkbox" name="modify_city">
                    </td>
                </tr>
                <tr>
                    <td>
                        Código Postal:
                    </td>
                    <td>
                        <input type="number" name="postal-code" id="postal-code" min="0">
                        <input type="checkbox" name="modify_postal-code">
                    </td>
                </tr>
                <tr>
                    <td>
                        Fraccionamiento:
                    </td>
                    <td>
                        <input type="text" name="fracc" id="fracc">
                        <input type="checkbox" name="modify_fracc">
                    </td>
                </tr>
                <tr>
                    <td>
                        Calle:
                    </td>
                    <td>
                        <input type="text" name="street" id="street">
                        <input type="checkbox" name="modify_street">
                    </td>
                </tr>
                <tr>
                    <td>
                        Número de Casa:
                    </td>
                    <td>
                        <input type="number" name="number-home" id="number-home" placeholder="S/N = 0" min="0">
                        <input type="checkbox" name="modify_number-home">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefono:
                    </td>
                    <td>
                        <input type="text" name="phone" id="phone" placeholder="Ej: X-XX-XX-XX">
                        <input type="checkbox" name="modify_phone">
                    </td>
                </tr>
                <tr>
                    <td>
                        Celular:
                    </td>
                    <td>
                        <input type="text" name="cellphone" id="cellphone" placeholder="Ej: 044-449-XXX-XXXX">
                        <input type="checkbox" name="modify_cellphone">
                    </td>
                </tr>
                <tr>
                    <td>
                        Correo:
                    </td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="ejemplo@dominio.com">
                        <input type="checkbox" name="modify_email">
                    </td>
                </tr>
                <tr>
                    <td>
                        Contraseña:
                    </td>
                    <td>
                        <input type="password" name="pswd1" id="pswd1" placeholder="Escriba su Contraseña">
                        <input type="checkbox" name="modify_pswd">
                    </td>
                </tr>
                <tr>
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
                        <button type="submit" class="btn" id="btn-ok">
                            Guardar Cambios
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>