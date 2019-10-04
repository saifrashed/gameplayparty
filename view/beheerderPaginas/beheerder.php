<?php include './view/header.php' ?>

<div class="row start-xs">
<<<<<<< HEAD
    <div class="col-xs-12 col-md-12">
        <p><?php  echo var_dump($reserveringen); ?></p>
        <h1> Welcome <?php echo $_SESSION['voornaam'] . ' ' . $_SESSION['achternaam'] ?></h1>
        <p>U bent de <?php echo $this->UserLogic->getRole($_SESSION['id']) ?></p>
        <a class="btn btn-danger" href="./?op=logout">Uitloggen</a>
        <a class="btn btn-primary" href="./?op=register">Voeg gebruiker toe</a>

        <?php
=======
    <div class="col-xs-12 col-md-2 admin-sidebar">
        <ul>
            <li><a href="###">Link 1</a></li>
            <li><a href="###">Link 2</a></li>
            <li><a href="###">Link 3</a></li>
            <li><a href="###">Link 4</a></li>
        </ul>
    </div>
>>>>>>> e066329af1e9e85f81dd83c9366faefe13b27117

    <div class="col-xs-12 col-md-10 admin-display">
        <div class="admin-header">
            <h1>Welkom terug <?php echo $_SESSION['voornaam'].' '.$_SESSION['achternaam'] ?></h1>
            <a class="btn btn-danger" href="./?op=logout">Uitloggen</a>
        </div>

<<<<<<< HEAD

        ?>
=======
>>>>>>> e066329af1e9e85f81dd83c9366faefe13b27117

    </div>
</div>

<?php include './view/footer.php' ?>
