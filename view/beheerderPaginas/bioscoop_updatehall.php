<?php include './view/header.php' ?>


<div class="row start-xs">
    <div class="col-xs-12 col-md-4">
        <a class="btn btn-primary" href="./?op=employee">Ga terug</a>

        <?php if($_GET['update']) {?>
            <div class="error-message">
                <span>De geselecteerde zaal is bewerkt.</span>
            </div>
        <?php } ?>

        <form method="GET">
            <input type="hidden" name="op" value="employee"/>
            <input type="hidden" name="selectedPage" value="updateHall"/>
            <input type="hidden" name="bioscoopId" value="<?php echo $zaal['bioscoop_id'] ?>"/>
            <input type="hidden" name="zaalId" value="<?php echo $zaal['zaal_id'] ?>"/>
            <input type="hidden" name="update" value="true"/>

            <div class="form-group">
                <label>Zaal nummer</label>
                <input type="number" name="zaal_nummer" value="<?php echo $zaal['zaal_nummer'] ?>" class="form-control" placeholder="Zaal nummer" min="0" required>
            </div>
            <div class="form-group">
                <label>Aantal plaatsen</label>
                <input type="number" name="zaal_plaatsen" value="<?php echo $zaal['aantal_plaatsen'] ?>" class="form-control" placeholder="Plaatsen" min="0" required>
            </div>
            <div class="form-group">
                <label>Rolstoel plaatsen</label>
                <input type="number" name="zaal_rolstoel" value="<?php echo $zaal['rolstoel_plaatsen'] ?>" class="form-control" placeholder="Rolstoel plaatsen" min="0" required>
            </div>
            <div class="form-group">
                <label>Schermgrootte</label>
                <input type="text" name="zaal_schermgrootte" value="<?php echo $zaal['schermgrootte'] ?>" class="form-control" placeholder="Schermgrootte" required>
            </div>
            <div class="form-group">
                <label>Faciliteiten</label>
                <input type="text" name="zaal_faciliteiten" value="<?php echo $zaal['faciliteiten'] ?>" class="form-control" placeholder="Faciliteiten" required>
            </div>
            <div class="form-group">
                <label>Versies</label>
                <input type="text" name="zaal_versies" value="<?php echo $zaal['versies'] ?>" class="form-control" placeholder="Versies" required>
            </div>
            <div class="form-group">
                <label>begintijd</label>
                <input type="text" name="zaal_begintijd" value="<?php echo $zaal['begintijd'] ?>" class="form-control" placeholder="xx:xx" required>
            </div>
            <div class="form-group">
                <label>eindtijd</label>
                <input type="text" name="zaal_eindtijd" value="<?php echo $zaal['eindtijd'] ?>" class="form-control" placeholder="xx:xx" required>
            </div>
            <button type="submit" class="btn btn-primary">Bewerken</button>
        </form>
    </div>
</div>



<?php include './view/footer.php' ?>

