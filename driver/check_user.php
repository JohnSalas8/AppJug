<?php

    require("connection.php");

    $connection = connect_to_mysql();

    $email = $_REQUEST["email"];  // el request es cuando usas ajax

    $query = "select * from responsable where correo='$email';";

    $result = mysqli_query($connection, $query);

    mysqli_close($connection);

    if(mysqli_num_rows($result)==0) {
        echo "";
    } else {
        echo "$email";
    }

?>