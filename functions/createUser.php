<?php

require("../configs/config.php");
require("../configs/database.php");

$errorMessage = "";

if($_POST["password"] !== $_POST["confirmPassword"]){
    $errorMessage = "Mots de passe incorrect";
    header("Location: ../register.php?errorMessage=" . $errorMessage);
}

$req = $dbh->prepare('INSERT INTO user(username, password) VALUES(:pseudo, :password)');
$req->execute(array(
     'pseudo' => $_POST["pseudo"],
     'password' => $_POST["password"],
));

session_start();

$_SESSION["pseudo"] = $_POST["pseudo"];
$_SESSION["id"] = $pdo->lastInsertId();

header("Location: ../index.php");
?>