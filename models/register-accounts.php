<?php
function create_accounts($username,$email,$password,$image) {

    require '../database/connection.php';

    $search_user = $database->query("SELECT * FROM users 
    WHERE users.Username = '$username' OR users.EMAIL = '$email'");

    $count_result_search = $search_user->fetch(PDO::FETCH_COLUMN);

    if($count_result_search > 0) {

        echo "El nombre de usuario o el email ya estan asociados a otra cuenta";

    } else {

        $register = $database->exec("INSERT INTO users (USERNAME,EMAIL,PASSWORD,IMAGE)
        VALUES ('$username','$email','$password','$image')");

        if ($register) {

            $search_user = $database->query("SELECT * FROM users 
            WHERE users.Username = '$username' OR users.EMAIL = '$email'");

            while ($user = $search_user->fetch(PDO::FETCH_ASSOC)) {

                session_start();

                $_SESSION['SESSION-USER-ACTIVE'] = true;
                $_SESSION['ID_USER'] = $user['ID_USER'];
                $_SESSION['USERNAME'] = $user['USERNAME'];
                $_SESSION['EMAIL'] = $user['EMAIL'];
                $_SESSION['PASSWORD'] = $user['PASSWORD'];
                $_SESSION['IMAGE'] = $user['IMAGE'];

                header("location: ../public/home.php");

            }

        } else {
            
            echo "Ocurrio un error al crear su cuenta, intentelo nuevamente";

        }

    }

}