<?php
require '../models/main.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../components/css/navbar.css">
    <link rel="stylesheet" href="../components/css/card-video.css">
    <link rel="stylesheet" href="../components/css/card-comments.css">
    <title>Battle Games | Reproductor de video</title>
</head>
<body>

    <!-- INCLUIMOS EL MENU DE NAVEGACION DE LA WEB -->
    <?php require_once '../utils/nav.php'; ?>

    <!-- CONTENEDOR DE VIDEO SELECCIONADO -->
    <section class="main">
        <div class="container-fluid content-video">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="video">
                        <?php echo get_values_show_video(); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="description-video">
                        <?php echo get_values_description_video(); ?>
                        <p><?php echo get_values_add_comment_video(); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="subtitle-global">
            <h2>Comentarios del video</h2>
        </div>

        <!-- CONTENEDOR DE COMENTARIOS DEL VIDEO -->
        <div class="container-fluid content-comment-video">
            <div class="row">
                <div class="col-lg-12">
                    <div class="comments">
                        <?php echo get_values_show_comments(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>