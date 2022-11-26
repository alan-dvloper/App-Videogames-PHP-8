<?php
function description_video($id_video) {

    require '../database/connection.php';

    $info = $database->query("SELECT videos.ID_VIDEO, videos.DESCRIPTION, videos.TITLE FROM videos
    WHERE videos.ID_VIDEO = '$id_video'");

    while ($video_description = $info->fetch(PDO::FETCH_ASSOC)) {

        ?>

        <h3><?php echo $video_description['TITLE']; ?></h3>
        <p><?php echo $video_description['DESCRIPTION']; ?></p>

        <form action="" method="post" class="form-comments">
            <div class="card-input-comment">
                <input type="text" name="comment-text" placeholder="Escribe un comentario">
                <button type="submit" name="bt-add-comment"><i class="bi bi-box-arrow-in-right"></i></button>
            </div>
        </form>

        <div class="reaction-video">
            <button><span class="count-icon"><i class="bi bi-eye"></i></span></button>
            <button><span class="count-icon"><i class="bi bi-heart"></i></span></button>
            <button><span class="count-icon"><i class="bi bi-chat-square"></i></span></button>
        </div>

        <?php

    }

}