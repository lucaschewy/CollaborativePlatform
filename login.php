<?php
    require_once("components/header.php");

    if(isset($_SESSION["username"])){
        header("Location: index.php");
    }
?>

<body>
    
    <div class="container-fluid" id="form">
        <form action="functions/loginUser.php" class="col-md-6" method="post">
            <h1>Je me connecte</h1>

            <form>
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="role" class="form-check-input" id="">
                    <label for="role">Je souhaite devenir un membre du logobi</label>
                </div>
                <div class="form-group">
                    <a href="register.php" class="btn btn-warning">Créer un compte</a>
                    <input type="submit" value="Je me connecte" class="btn btn-primary">
                </div>
        </form>
    </div>

<?php
    require_once("components/footer.php")
?>