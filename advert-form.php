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
            <h1>Ajouter une annonce</h1>
            <form action="functions/createAdvert.php" class="form-group" method="post">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Entrez un titre">
                </div>
                <div class="form-group">
                    <input type="text" name="image" class="form-control" placeholder="Entrez une URL d'image">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Entrez une description"></textarea>
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option value="bordeaux">Bordeaux</option>
                        <option value="bordeaux">Bordeaux</option>
                        <option value="bordeaux">Bordeaux</option>
                        <option value="bordeaux">Bordeaux</option>
                    </select>
                </div>
                <input type="submit" value="Créer mon annonce" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php
    require_once("components/footer.php");
?>