<?php

function add_comment_video($id_user,$id_video,$comment) {

    require '../database/connection.php';

    $add_comment = $database->exec("INSERT INTO comments_video (ID_USER_COMMENT,ID_VIDEO_COMMENT,COMMENT )
    VALUES ('$id_user','$id_video','$comment')");

    if ($add_comment) {

        echo "Se ha agregado tu comentario";

    } else {

        echo "Ocurrio un error al agregar tu comentario";

    }

}