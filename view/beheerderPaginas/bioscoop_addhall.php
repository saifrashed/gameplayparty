<?php include './view/header.php' ?>


<div class="row start-xs">
    <div class="col-xs-12 col-md-4">
        <a class="btn btn-primary" href="./?op=employee&selectedPage=">Ga terug</a>

        <?php if($_GET['create'] == true) {?>
            <div class="error-message">
                <span>Zaal toegevoegd.</span>
            </div>
        <?php } ?>

        <form method="GET">
            <input type="hidden" name="op" value="employee"/>
            <input type="hidden" name="selectedPage" value="addHall"/>
            <input type="hidden" name="bioscoopId" value="<?php echo $bioscoop['bioscoop_id']?>"/>
            <input type="hidden" name="create" value="true"/>
            <div class="form-group">
                <label>Zaal nummer</label>
                <input type="number" name="zaal_nummer" class="form-control" placeholder="Zaal nummer" min="0" required>
            </div>
            <div class="form-group">
                <label>Aantal plaatsen</label>
                <input type="number" name="zaal_plaatsen" class="form-control" placeholder="Plaatsen" min="0" required>
            </div>
            <div class="form-group">
                <label>Rolstoel plaatsen</label>
                <input type="number" name="zaal_rolstoel" class="form-control" placeholder="Rolstoel plaatsen" min="0" required>
            </div>
            <div class="form-group">
                <label>Schermgrootte</label>
                <input type="text" name="zaal_schermgrootte" class="form-control" placeholder="Schermgrootte" required>
            </div>
            <div class="form-group">
                <label>Faciliteiten</label>
                <input type="text" name="zaal_faciliteiten" class="form-control" placeholder="Faciliteiten" required>
            </div>
            <div class="form-group">
                <label>Versies</label>
                <input type="text" name="zaal_versies" class="form-control" placeholder="Versies" required>
            </div>
            <div class="form-group">
                <label>begintijd</label>
                <input type="text" name="zaal_begintijd" class="form-control" placeholder="xx:xx" required>
            </div>
            <div class="form-group">
                <label>eindtijd</label>
                <input type="text" name="zaal_eindtijd" class="form-control" placeholder="xx:xx" required>
            </div>
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </form>
    </div>
</div>



<?php include './view/footer.php' ?>

