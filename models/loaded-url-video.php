<?php
function loaded_video($id_video) {

    require '../database/connection.php';

    $loaded_video = $database->query("SELECT videos.URL_VIDEO FROM videos
    WHERE videos.ID_VIDEO = '$id_video'");

    while ($url_video = $loaded_video->fetch(PDO::FETCH_ASSOC)) {

        ?>
        <iframe width="550" height="450" src="<?php  echo $url_video['URL_VIDEO']; ?>"></iframe>
        <?php

    }

}