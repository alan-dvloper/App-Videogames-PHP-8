<?php
function get_values_login_users() {

    require '../models/authentication.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    echo user_authentication($email,$password);

}

function valid_undefine_values() {

    if (isset($_REQUEST['bt-authentication-user'])) {

        if (empty($_POST['email'])||empty($_POST['password'])) {

            echo "Por favor completa todos los campos";

        } else {
            
            echo get_values_login_users();

        }

    }

}