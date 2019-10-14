
<?php include './view/header.php' ?>

<div class="row start-xs">
    <div class="col-xs-12 col-md-2 admin-sidebar">
        <ul>
            <li><a href="./?op=admin&selectedPage=reserveringen">Reserveringen</a></li>
            <li><a href="./?op=admin&selectedPage=statistics">Financiën</a></li>
        </ul>
    </div>
    <div class="col-xs-12 col-md-10 admin-display">
        <div class="admin-header">
            <h1>Welkom terug <?php echo $_SESSION['voornaam'] . ' ' . $_SESSION['achternaam'] ?></h1>
            <a class="btn btn-danger" href="./?op=logout">Uitloggen</a>
        </div>





           <?php echo $bestel; ?>

    </div>
</div>

<?php include './view/footer.php' ?>
