<?php

function uploaded_miniatures($id_mode,$l1,$l2) {

    require '../database/connection.php';

    $loading_miniatures = $database->query("SELECT videos.ID_VIDEO, videos.MINIATURE, videos.TITLE FROM videos
    WHERE videos.ID_MODE = $id_mode LIMIT $l1,$l2");

    while ($miniature = $loading_miniatures->fetch(PDO::FETCH_ASSOC)) {

        ?>
        <figure>
            <img src="<?php echo $miniature['MINIATURE']; ?>" alt="">
            <figcaption class="ovelay-miniature">
                <div class="enlaces-video">
                    <p><?php echo $miniature['TITLE']; ?></p>
                    <a href="../public/view-video.php?nodevideo=<?php echo $miniature['ID_VIDEO']; ?>"><i class="bi bi-play-circle"></i></a>
                </div>
            </figcaption>
        </figure>
        <?php

    }

}