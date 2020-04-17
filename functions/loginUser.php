<?php

require("../configs/config.php");
require("../configs/database.php");

$req = $dbh->prepare('SELECT * FROM user WHERE username = :pseudo AND password = :password');
$req->execute(array(
     'pseudo' => $_POST["pseudo"],
     'password' => $_POST["password"],
));

$result = $req->fetch();

if(!$result){
    $errorMessage = "Erreur de connexion";
    header("Location: ../login.php?errorMessage=" . $errorMessage);
}
else{
    session_start();
    $_SESSION["pseudo"] = $result["username"];
    $_SESSION["id"] = $result["id"];
    header("Location: ../index.php");
}
?>