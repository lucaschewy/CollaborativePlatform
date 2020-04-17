<?php

require("../configs/config.php");
require("../configs/database.php");

$req = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND password = :password");
$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $_POST["password"]);
$req->execute();

$result = $req->fetch();

if(!$result){
    $errorMessage = "Erreur de connexion";
    header("Location: ../login.php?errorMessage=" . $errorMessage);
}
else{
    session_start();
    $_SESSION["pseudo"] = $result["pseudo"];
    $_SESSION["id"] = $result["id"];
    header("Location: ../index.php");
}
?>