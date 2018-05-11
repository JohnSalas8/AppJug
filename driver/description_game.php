<?php

    require("connection.php");

    $nameGame = $_REQUEST['nameGame'];
    $precio = $_REQUEST['precio'];
    $idGame = $_REQUEST['idGame'];
    $user_id = $_REQUEST['user_id'];

    $query = "select califPromGame("
        . $idGame 
        . ") as promedio;";

    $connection = connect_to_mysql();

    $result = mysqli_query($connection, $query);
    $line = mysqli_fetch_array($result);

?>

<div class="desc">
<h2 class="desc" id="nameGame">
            <?php echo $nameGame; ?>
        </h2>
    <div id="img-desc" class="desc">
        <img src="../imgs/ControlGame.png" style="height: 150px; width: 150px;">
    </div>
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
    </div>
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
                    $query = "select * from compra_juego, factura where compra_juego.id_Juego="
                        . $idGame 
                        . " and factura.id_Factura=compra_juego.id_Factura and factura.id_Resp="
                        . $user_id . ";";
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