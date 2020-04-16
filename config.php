<?php

$config = [
    "DB_HOST" => "localhost",
    "DB_NAME" => "magic_system",
    "DB_USER" => "root",
    "DB_PASSWORD" => "root"
];


try {
    $dbh = new PDO("mysql:dbname={$config["DB_NAME"]};host={$config["DB_HOST"]}", $config["DB_USER"], $config["DB_PASSWORD"]);
    echo 'Connexion réussie';
} catch (PDOException $e) {
    echo 'Connexion échouée';
}


?>