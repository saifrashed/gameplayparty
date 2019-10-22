<?php include './view/header.php' ?>


<div class="row start-xs">
    <div class="col-xs-12 col-md-2 admin-sidebar">
        <ul>
            <li><a href="./?op=employee&selectedPage=halls">Zalen</a></li>
        </ul>
    </div>

    <div class="col-xs-12 col-md-10 admin-display">
        <div class="admin-header">
            <?php
            if($_GET['selectedPage'] == 'deleteHall') {?>
                <div class="error-message">
                    <span>De geselecteerde zaal is verwijderd.</span>
                </div>
            <?php } ?>
            <h1>Beheerder <?php echo $_SESSION['bioscoop_naam'] ?></h1>
            <a class="btn btn-danger" href="./?op=logout">Uitloggen <i class="fas fa-sign-out-alt"></i></a>
            <a class="btn btn-primary" href="./?op=employee&selectedPage=addHall&bioscoopId=<?php echo $bioscoop['bioscoop_id'] ?>&create=">Voeg zaal toe <i class="fas fa-plus"></i></a>
        </div>

        <div>
            <?php echo $content ?>
        </div>


    </div>
</div>



<?php include './view/footer.php' ?>

