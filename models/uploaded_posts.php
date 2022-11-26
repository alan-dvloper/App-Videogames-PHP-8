<?php
function show_posts($l1,$l2) {

    require '../database/connection.php';

    $loading_posts = $database->query("SELECT * FROM posts ORDER BY posts.ID_POST DESC LIMIT $l1,$l2");

    while ($post = $loading_posts->fetch(PDO::FETCH_ASSOC)) {

        ?>
        <div class="card-post">
            <div class="image-post"><figure><img src="<?php echo $post['FILE_IMAGE']; ?>" alt=""></figure></div>
            <div class="date-post"><p><?php echo $post['DATE']; ?></p></div>
            <div class="title-post"><a href=""><?php echo $post['TITLE']; ?></a></div>

            <div class="content-reactions">
                <button name=" bt-post-save" type="submit"><i class="bi bi-box-arrow-down"></i></button>
                <button name=" bt-post-heart" type="submit"><i class="bi bi-heart"></i></button>
                <button name=" bt-post-comments" type="submit"><i class="bi bi-chat-square"></i></button>
            </div>
        </div>
        <?php

    }

}