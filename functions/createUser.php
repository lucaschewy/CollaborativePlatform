<?php

require("../configs/config.php");
require("../configs/database.php");

$req = $dbh->prepare('INSERT INTO user(username, password) VALUES(:pseudo, :password)');
$req->execute(array(
     'pseudo' => $_POST["pseudo"],
     'password' => $_POST["password"],
));

// header("Location: ../index.php");
?>