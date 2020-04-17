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
                <li class="list-group-item mt-5">
                    <a href="advert-page.php">
                        <h5>Annonce 1 <span class="badge badge-secondary">New</span></h5>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis molestiae delectus maxime tempore dolore incidunt nulla asperiores dolores repellat. Distinctio asperiores veritatis non sapiente, fuga amet fugiat ab repudiandae.
                    </p>
                    <small>Le 01/04/2020 à 22:11</small>
                </li>
                <li class="list-group-item mt-5">
                    <a href="advert-page.php">
                        <h5>Annonce 1 <span class="badge badge-secondary">New</span></h5>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis molestiae delectus maxime tempore dolore incidunt nulla asperiores dolores repellat. Distinctio asperiores veritatis non sapiente, fuga amet fugiat ab repudiandae.
                    </p>
                    <small>Le 01/04/2020 à 22:11</small>
                </li>
                <li class="list-group-item mt-5">
                    <a href="advert-page.php">
                        <h5>Annonce 1 <span class="badge badge-secondary">New</span></h5>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis molestiae delectus maxime tempore dolore incidunt nulla asperiores dolores repellat. Distinctio asperiores veritatis non sapiente, fuga amet fugiat ab repudiandae.
                    </p>
                    <small>Le 01/04/2020 à 22:11</small>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
    require_once("components/footer.php");
?>