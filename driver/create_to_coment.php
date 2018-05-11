<?php

    $email = $_REQUEST['email'];
    $user_id = $_REQUEST['user_id'];

?>

<table id="to-cmnt" class="comentario">
    <tr>
        <td id="nameUser" class=""><?php echo $email; ?></td>
        <td class="starts">
            <img class="stars" name="stars" onclick="setStarY(1)" src="../imgs/Estrellag.png">
            <img class="stars" name="stars" onclick="setStarY(2)" src="../imgs/Estrellag.png">
            <img class="stars" name="stars" onclick="setStarY(3)" src="../imgs/Estrellag.png">
            <img class="stars" name="stars" onclick="setStarY(4)" src="../imgs/Estrellag.png">
            <img class="stars" name="stars" onclick="setStarY(5)" src="../imgs/Estrellag.png">
        </td>
    </tr>
    <tr>
        <td colspan="2" >
            <textarea id="opinion" placeholder="Escribe tu comentario aquí."></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right">
            <button id="btn-ok" class="btn" type="submit" onclick="setComentario(<?php echo $user_id; ?>);">Comentar</button>
        </td>
    </tr>
</table>