<?php include './view/header.php' ?>

<div class="row start-xs">
    <div class="col-xs-12 col-md-12">
        <h1> Welcome <?php echo $_SESSION['voornaam'] . ' ' . $_SESSION['achternaam'] ?></h1>
        <p>U bent de <?php echo $this->UserLogic->getRole($_SESSION['id']) ?></p>
        <a class="btn btn-danger" href="./?op=logout">Uitloggen</a>
        <a class="btn btn-primary" href="./?op=register">Voeg gebruiker toe</a>

    </div>
</div>

<?php include './view/footer.php' ?>
