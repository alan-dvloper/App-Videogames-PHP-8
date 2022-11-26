<?php
session_start();

if (isset($_SESSION['SESSION-USER-ACTIVE'])) {

    return true;

} else {

    header("location: ../public/no-found-session.php");

}

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

function get_values_add_comment_video() {

    if (isset($_POST['bt-add-comment'])) {

        if (empty($_POST['comment-text'])) {

            echo "Por favor, agrega un comentario";

        } else {

            require '../models/add-comment-video.php';

            $id_user = $_SESSION['ID_USER'];
            $id_video = $_GET['nodevideo'];
            $comment = $_POST['comment-text'];

            echo add_comment_video($id_user,$id_video,$comment);

        }

    }

}

function get_values_show_comments() {

    require '../models/show_comments_video.php';

    $id_video = $_GET['nodevideo'];

    echo show_comments_video($id_video);

}