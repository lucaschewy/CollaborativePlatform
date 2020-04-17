<?php
    require_once("components/header.php");
    if(isset($_SESSION["pseudo"])){
        header("Location: index.php");
    }
?>

<body>
    
    <div class="container-fluid" id="form">
        <form action="functions/createUser.php" class="col-md-6" method="post">
            <h1>Créer mon compte</h1>

                <?php if(isset($_GET["errorMessage"])){ ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <?= $_GET["errorMessage"] ?>
                        <button class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>

                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="confirmPassword" class="form-control" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="role" class="form-check-input">
                    <label for="role">Je souhaite devenir un membre du logobi</label>
                </div>
                <div class="form-group">
                    <a href="login.php" class="btn btn-warning">Connexion</a>
                    <input onclick="" type="submit" value="Créer mon compte" class="btn btn-primary">
                </div>
        </form>
    </div>

<?php
    require_once("components/footer.php")
?>
