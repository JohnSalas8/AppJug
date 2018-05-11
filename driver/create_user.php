<?php 

    require("connection.php");

    $connection = connect_to_mysql();

    // Primero checamos si la tarjeta ya existe en la bdd
    $num_card = $_REQUEST['num_card'];
    $query = "select * from tarjeta where num_Tarjeta='$num_card';";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result)==0) {  // No hay una tarjeta igual
        $rfc = $_REQUEST['rfc'];
        $query = "select * from responsable where rfc='$rfc';";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result)==0) { // No existe el rfc
            
            $firstname = $_REQUEST['firstname'];
            $lastnamep = $_REQUEST['lastnamep'];
            $lastnamem = $_REQUEST['lastnamem'];
            $code_card = $_REQUEST['code_card'];
            $sense_year = $_REQUEST['sense_year'];
            $until_month = $_REQUEST['until_month'];
            $until_year = $_REQUEST['until_year'];
            $city = $_REQUEST['city'];
            $postal_code = $_REQUEST['postal_code'];
            $fracc = $_REQUEST['fracc'];
            $street = $_REQUEST['street'];
            $number_home = $_REQUEST['number_home'];
            $cell = $_REQUEST['cell'];
            $email = $_REQUEST['email'];
            $pswd = $_REQUEST['pswd'];

            $query = "insert into responsable "
                . "(nombre, ap_Pat, ap_Mat, RFC, ciudad, calle, CP, telefono, numero, correo, pass, fracc)"
                . " values "
                . "('$firstname', '$lastnamep', '$lastnamem', '$rfc', '$city', '$street', '$postal_code', '$cell', '$number_home', '$email', '$pswd', '$fracc');";
            $result = mysqli_query($connection, $query);

            $query = "select * from responsable where RFC='$rfc';";
            $result = mysqli_query($connection, $query);   // Al parecer si le dejo el exe_uqery truena
            $line = mysqli_fetch_array($result);
            $id_resp = $line['id_Resp'];

            $query = "insert into tarjeta"
                . " (num_Tarjeta, mes, clave, id_Resp, miembro_Desde, anio) "
                . " values "
                . " ('$num_card', '$until_month', '$code_card', '$id_resp', '$sense_year', '$until_year'); ";
            
            $result = mysqli_query($connection, $query);

            echo "";

        } else {    // Si existe el rfc
            echo "Ya existe un usuario con el mismo RFC<br>";
        }
    } else {    // Si hay una tarjeta igual
        echo "Ya existe un usuario con esa tarjeta de crédito.<br>";
    }

    mysqli_close($connection);

?>