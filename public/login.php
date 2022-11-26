<?php

require '../includes/values-login-users.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../components/css/form.css">
    <title>Battle Games | Iniciar sesion</title>
</head>
<body>

    <div class="container content-form">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-5">
                <form action="" method="post" autocomplete="off" class="form-card">
                    <div class="title-form"><h1>Battle <span class="span-element">Games</span></h1></div>
                    <div class="form-card-input"><input name="email" type="email" placeholder="correo electrónico" required></div>
                    <div class="form-card-input"><input name="password" type="password" placeholder="contraseña" required></div>
                    <div class="form-card-input"><button name="bt-authentication-user">Iniciar sesion</button></div>
                    <div class="enlace-http"><p>¿No tienes una cuenta? <span class="span-element"><a href="../public/signup.php">Suscribete</a></span></p></div>
                    <div class="alert-message"><p><?php valid_undefine_values() ?></p></div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>