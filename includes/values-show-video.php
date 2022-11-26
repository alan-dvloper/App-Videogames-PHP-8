<?php
// ARCHIVO DISPONIBLE PARA ELIMINAR
function get_values_show_video() {

    require '../models/loaded-url-video.php';

    $video = $_GET['nodevideo'];

    echo loaded_video($video);

}

function get_values_description_video() {

    require '../models/loaded-info-video.php';

    $video = $_GET['nodevideo'];

    echo description_video($video);

}