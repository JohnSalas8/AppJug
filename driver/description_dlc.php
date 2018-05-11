<?php

    require("connection.php");

    $connection = connect_to_mysql();

    $nameDlc = $_REQUEST['nameDlc'];
    $precio = $_REQUEST['precio'];
    $idDlc = $_REQUEST['idDLC'];
    $user_id = $_REQUEST['user_id'];

?>

<div class="desc">
    <h2 class="desc" id="nameGame">
        <?php echo $nameDlc; ?>
    </h2>
    <div id="img-desc" class="desc">
        <img src="../imgs/ControlGame.png" style="height: 150px; width: 150px;">
    </div>
    <!--
    <div id="Calificacion" class="desc">Calificación: <br>
        <?php 

            $t = mysqli_num_rows($result);

            if ($t==0) {
                for ($i=0; $i < 5; $i++) { 
                ?>
                    <img class="stars" src="../imgs/Estrellag.png" alt="">
                <?php
                }
            } else {
                $prom = $line['promedio'];
                for ($i=0; $i < $prom; $i++) { 
                    ?>
                        <img class="stars" src="../imgs/Estrella.png" alt="">
                    <?php
                }
                for ($i=$prom; $i < 5; $i++) { 
                    ?>
                        <img class="stars" src="../imgs/Estrellag.png" alt="">
                    <?php
                }
            }

        ?>
    </div> -->
    <div id="precio" class="desc">
        <?php if ($precio==0 || $precio==0.0) { ?>
            Gratis.
        <?php } else { ?>
            Precio: $ <?php echo $precio; ?>
        <?php } ?>
    </div>
    <div class="desc">
        <?php   if ($precio==0 || $precio==0.0) { ?>
            
        <?php } else { 
                    $query = "select * from compra_dlc, factura where compra_dlc.id_DLC="
                        . $idDlc
                        . " and factura.id_Factura=compra_dlc.id_Factura and factura.id_Resp="
                        . $user.id
                        . ";";
                    $result = mysqli_query ($connection, $query);
                if (mysqli_num_rows($result)==0) {
        ?>
                    <button class="btn" id="btn-wr" type="submit" onclick="buyGame(<?php echo user_id; ?>)">Comprar</button>
        <?php   } else {    ?>
                    <button class="btn" id="btn-sold" type="submit" >Comprado</button>
        <?php      }
                } ?>
    </div>
</div>

<?php

    mysqli_close($connection);

?>