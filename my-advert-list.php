<?php
    require_once("components/header.php");
    if(!isset($_SESSION["pseudo"])){
        header("Location: login.php");
    }
    require_once("components/navbar.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="list-group">
                <?php
                require_once("configs/database.php");

                $myID = $_SESSION['id'];

                $reponse = $dbh->query("SELECT * FROM advert WHERE author_id=$myID");
                while($donnees = $reponse->fetch()){
                    if($donnees['statut'] === 'active'){
                ?>
                <li class="list-group-item mt-5">
                    <a href="advert-page.php">
                        <h5><?php echo $donnees['title']; ?> <span class="badge badge-secondary">New</span></h5>
                    </a>
                    <p>
                    <?php echo $donnees['description']; ?>
                    </p>
                    <small><?php echo $donnees['localisation']; ?></small>
                </li>
                <?php }else{?>
                    <li class="list-group-item mt-5">
                    <a href="advert-page.php">
                        <h5><?php echo $donnees['title']; ?> <span class="badge badge-secondary">New</span></h5>
                    </a>
                    <p>
                    <?php echo $donnees['description']; ?>
                    </p>
                    <small><?php echo $donnees['localisation']; ?></small>
                </li>
                <?php }} ?>
            
            </ul>
        </div>
    </div>
</div>

<?php
    require_once("components/footer.php");
?>