<?php
function get_values_register_accounts() {

    require '../models/register-accounts.php';

    $username = addslashes($_POST['username']);
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $image = $username[0];

    echo create_accounts($username,$email,$password,$image);

}

function is_valid_password() {

    if (strlen($_POST['password']) < 10) {

        echo "La contraseña debe contener más de 10 caracteres";

    } else {

        echo get_values_register_accounts();

    }

}

function is_valid_email() {

    if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {

        echo is_valid_password();

    } else {

        echo "Por favor ingresa un email valido";

    }

}

function valid_undefine_values() {

    if (isset($_REQUEST['bt-create-account'])) {

        if (empty($_POST['email'])||empty($_POST['password'])) {

            echo "Por favor completa todos los campos";

        } else {

            echo is_valid_email();

        }

    }

}