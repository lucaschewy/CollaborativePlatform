<?php
    require_once("components/header.php");
    if(!isset($_SESSION["pseudo"])){
        header("Location: login.php");
    }
    require_once("components/navbar.php");

    

    
?>

<?php
    require_once("configs/database.php");

    $adid = $_GET["id"];

    $reponse = $dbh->query("SELECT * FROM advert WHERE id = $adid");
    while($donnees = $reponse->fetch()){
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="https://picsum.photos/800" alt="">
        </div>
        <div class="col-md-6">
            <h1><?php echo $donnees["title"]; ?></h1>
            <p><?php echo $donnees["localisation"]; ?></p>
            <p><?php echo $donnees["description"]; ?></p>
        </div>
    </div>
</div>
<?php } ?>

<?php
    require_once("components/footer.php");
?>