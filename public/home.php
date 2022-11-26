<?php
require '../models/main.php';
require '../models/uploaded_miniatures.php';
require '../models/uploaded_posts.php';
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
    <link rel="stylesheet" href="../components/css/carousel.css">
    <link rel="stylesheet" href="../components/css/miniatures.css">
    <link rel="stylesheet" href="../components/css/card-posts.css">
    <title>Battle Games | Mundo de videojuegos</title>
</head>
<body>

    <!-- INCLUIMOS EL MENU DE NAVEGACION DE LA WEB -->
    <?php require_once '../utils/nav.php'; ?>

     <!-- CARRUSEL DE IMAGENES -->
     <div class="container-fluid content-carrousel">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../src/img/backgrounds/gears5.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../src/img/backgrounds/doom-eternal.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../src/img/backgrounds/aplage-tale-innocence-51a627.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../src/img/backgrounds/re3-remake-3826e8c8.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../src/img/backgrounds/WZ_Metashare.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECCION DE MINIATURAS (VIDEOS) -->
    <section class="main">
        <div class="miniauture-lg-window">
            <div class="large-miniature"><?php echo uploaded_miniatures(2,0,1); ?></div>
        </div>
        
        <div class="miniatures-elements-window">
            <div class="card-miniatures"><?php echo uploaded_miniatures(2,1,4); ?></div>
        </div>

        <div class="subtitle-global">
            <h2>Novedades de tu interes</h2>
        </div>

    <!-- SECCION DE POSTS (NOTICIAS BLOG) -->
        <div class="content-post-blog">
            <div class="post-flex-group"><?php echo show_posts(0,4); ?></div>
        </div>

        <div class="subtitle-global">
            <h2>Streams en directo</h2>
        </div>

         <!-- SECCION DE MINIATURAS (STREAMS) -->
         <div class="miniatures-elements-window">
            <div class="card-miniatures"><?php echo uploaded_miniatures(1,0,4); ?></div>
        </div><br><br>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>