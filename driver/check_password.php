<?php 

    require("connection.php");

    $connection = connect_to_mysql();

    $email = $_REQUEST["email"];
    $pswd = $_REQUEST["pswd"];

    $query = "select nombre from responsable where correo='$email' and pass='$pswd';";

    $result = exe_query($connection, $query);

    close_connection($connection);

    if(mysqli_num_rows($result)==0) {
        echo "";
    } else {
        $line = mysqli_fetch_array($result);
        $name_user = $line['nombre'];
        echo "$name_user";
    }

?>