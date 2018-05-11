<?php

    require("connection.php");

    $idGame = $_REQUEST['idGame'];

    $query = "select responsable.correo, opinion.descrip_Opinion, opinion.puntuacion, toDateText(opinion.fecha) as fecha " .
    "from opinion, responsable " .
    "where opinion.id_Juego=" . $idGame .
    " and responsable.id_Resp=opinion.id_Resp order by opinion.fecha desc;";

    $connection = connect_to_mysql();
    $result = mysqli_query($connection, $query);

    $t = mysqli_num_rows($result);

    if ($t!=0) {
        while ($line = mysqli_fetch_array($result)) {
            $email = $line['correo'];
            $opinion = $line['descrip_Opinion'];
            $puntos = $line['puntuacion'];
            $fecha = $line['fecha'];

            ?>

            <tr class="contornoCmnt">
                <td colspan="2">
                    <table class="comentarios">
                        <tr>
                            <td class="user_name">
                                <?php echo "$email"; ?>
                            </td>
                            <td class="starts">
                                <?php
                                for ($i=0; $i < $puntos; $i++) { 
                                    ?> 
                                    <img class="stars" src="../imgs/Estrella.png" alt="">
                                    <?php
                                }

                                for ($i=$puntos; $i < 5; $i++) { 
                                    ?>
                                    <img class="stars" src="../imgs/Estrellag.png" alt="">
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="descCmnt" colspan="2">
                                <?php echo $opinion; ?>
                            </td>
                        </tr>
                        <tr>
                            <td id="descFecha" colspan="2">
                                <?php echo $fecha; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <?php

        }
    } else {
        ?>
        <tr class="contornoCmnt">
            <td>
                Sin comentarios.
            </td>
        </tr>
        <?php
    }

    mysqli_close($connection);
    
?>