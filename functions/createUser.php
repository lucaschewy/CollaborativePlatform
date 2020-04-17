<?php

require("../configs/config.php");
require("../configs/database.php");

$errorMessage = "";

if($_POST["password"] !== $_POST["confirmPassword"]){
    $errorMessage = "le mot de passe n'est pas confirmé";
    header("Location: ../register.php?errorMessage=" . $errorMessage);
}

if(isset($_POST["role"])){
    $role_id = 1;
}else{
    $role_id = 0;
}

$req = $dbh->prepare('INSERT INTO user(username, password, role) VALUES(:pseudo, :password, :role)');
$req->execute(array(
    'pseudo' => $_POST["pseudo"],
    'password' => $_POST["password"],
    'role' => $_POST["role"],
));

header("Location: ../index.php");
?>