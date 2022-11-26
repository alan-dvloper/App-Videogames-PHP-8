<?php
$options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

try {

    $database = new PDO('mysql:host=localhost;dbname=app_hostmanager','root','',$options);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $error_log) {

    echo "Error al cargar la consulta:" . $error_log->getMessage();

}