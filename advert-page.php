<?php
    require_once("components/header.php");
    if(!isset($_SESSION["pseudo"])){
        header("Location: login.php");
    }
    require_once("components/navbar.php");
?>

<div class="container">
    <h1>Mon titre</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="https://picsum.photos/800" alt="">
        </div>
        <div class="col-md-6">
            <h1>Mon titre</h1>
            <p>Thomas - Boredaux - Le 01/04/2020 à 20h30</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis quos placeat ratione ipsum possimus aperiam voluptate culpa voluptates excepturi, voluptatum nesciunt impedit exercitationem dolore itaque! Quidem, quibusdam? Quis, quo ad.</p>
        </div>
    </div>
</div>

<?php
    require_once("components/footer.php");
?>