<?php
function show_comments_video($id_video) {

    require '../database/connection.php';

    $comment = $database->query("SELECT comments_video.COMMENT,users.USERNAME,users.IMAGE FROM comments_video 
    INNER JOIN users ON comments_video.ID_USER_COMMENT = users.ID_USER
    INNER JOIN videos ON comments_video.ID_VIDEO_COMMENT = videos.ID_VIDEO
    WHERE videos.ID_VIDEO = '$id_video'");

    while ($comment_video = $comment->fetch(PDO::FETCH_ASSOC)) {

        ?>
        <div class="card-comment">
                <a  class="text-comment" href=""><?php echo $username = $comment_video['USERNAME'];  ?></a>
                <p class="text-comment"><?php echo $comment_user = $comment_video['COMMENT']; ?> </p>
                <div class="img-user">
                    <h5><?php echo $img_user_comment = $comment_video['IMAGE']; ?></h5>
                </div>
        </div>
        <?php

    }

}