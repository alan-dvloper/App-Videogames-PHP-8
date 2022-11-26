<?php
function user_authentication($email,$password) {

    require '../database/connection.php';

    $login = $database->query("SELECT * FROM users
    WHERE users.EMAIL = '$email' AND users.PASSWORD = '$password'");

    $count_users = $login->fetch();

    if ($count_users > 0) {

        session_start();

        $_SESSION['SESSION-USER-ACTIVE'] = true;
        $_SESSION['ID_USER'] = $count_users[0];
        $_SESSION['USERNAME'] = $count_users[1];
        $_SESSION['EMAIL'] = $count_users[2];
        $_SESSION['PASSWORD'] = $count_users[3];
        $_SESSION['IMAGE'] = $count_users[4];

        header("location: ../public/home.php");

    } else {

        echo "El correo o la contraseña son incorrectos";

    }

}