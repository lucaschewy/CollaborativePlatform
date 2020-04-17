<?php
    require_once("components/header.php");

    if(!isset($_SESSION["pseudo"])){
        header("Location: register.php");
    }
    
    require_once("components/navbar.php");
?>

<div class="container">
    <h1>liste des annonces</h1>
    <div class="row mt-5">
        <?php
            require_once("configs/database.php");

            $reponse = $dbh->query("SELECT * FROM advert");
            while($donnees = $reponse->fetch()){
            ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="advert-page.php">
                            <h5 class="card-title"><?php echo $donnees['title']; ?></h5>
                        </a>
                        <p class="card-text"><?php echo $donnees['description']; ?></p>
                        <p><small>par <?php echo $_SESSION["pseudo"]; ?> à <?php echo $donnees['localisation']; ?></small></p>
                        <a href="advert-page.php?id=<?php echo $_SESSION["id"]; ?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
    require_once("components/footer.php");
?>