<?php
    require_once("components/header.php");
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <a class="navbar-brand" href="#">Magic System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Annonces</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mes annonces</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary" href="#">Ajouter une annonce</a>
      </li>
    </ul>
    <a href="" class="btn btn-warning">Deconnexion</a>
  </div>
</nav>

<div class="container">
    <h1>liste des annonces</h1>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="advert-page.php">
                        <h5 class="card-title">Card title</h5>
                    </a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="advert-page.php">
                        <h5 class="card-title">Card title</h5>
                    </a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once("components/footer.php");
?>