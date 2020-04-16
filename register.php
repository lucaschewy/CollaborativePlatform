<?php
    require_once("components/header.php")
?>

<body>
    
    <div class="container-fluid" id="form">
        <form action="" class="col-md-6">
            <h1>Créer mon compte</h1>
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
                    <input type="checkbox" name="role" class="form-check-input" id="">
                    <label for="role">Je souhaite devenir un membre du logobi</label>
                </div>
                <div class="form-group">
                    <a href="login.php" class="btn btn-warning">Connexion</a>
                    <input type="submit" value="Créer mon compte" class="btn btn-primary">
                </div>
        </form>
    </div>

<?php
    require_once("components/footer.php")
?>
