<?php

require("../configs/config.php");
require("../configs/database.php");

$req = $dbh->prepare('INSERT INTO advert(title, description, localisation, author_id, statut, image_url) VALUES(:title, :description, :localisation, :author_id, :statut, :image_url)');
$req->execute(array(
     'title' => $_POST["title"],
     'description' => $_POST["description"],
     'localisation' => $_POST["location"],
     'author_id' => $_SESSION["id"],
     'statut' => 'active',
     'image_url' => $_POST["image"],
));

?>