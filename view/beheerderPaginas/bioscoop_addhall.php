<?php include './view/header.php' ?>


<div class="row start-xs">
    <div class="col-xs-12 col-md-4">
        <a class="btn btn-primary" href="./?op=employee">Ga terug</a>

        <form method="GET">
            <input type="hidden" name="op" value="employee"/>
            <input type="hidden" name="selectedPage" value="addHall"/>
            <input type="hidden" name="bioscoopId" value="<?php echo $bioscoop['bioscoop_id']?>"/>
            <input type="hidden" name="create" value="true"/>
            <div class="form-group">
                <label>Zaal nummer</label>
                <input type="number" name="zaal_nummer" class="form-control" placeholder="Zaal nummer" min="0">
            </div>
            <div class="form-group">
                <label>Aantal plaatsen</label>
                <input type="number" name="zaal_plaatsen" class="form-control" placeholder="Plaatsen" min="0">
            </div>
            <div class="form-group">
                <label>Rolstoel plaatsen</label>
                <input type="number" name="zaal_rolstoel" class="form-control" placeholder="Rolstoel plaatsen" min="0">
            </div>
            <div class="form-group">
                <label>Schermgrootte</label>
                <input type="text" name="zaal_schermgrootte" class="form-control" placeholder="Schermgrootte">
            </div>
            <div class="form-group">
                <label>Faciliteiten</label>
                <input type="text" name="zaal_faciliteiten" class="form-control" placeholder="Faciliteiten">
            </div>
            <div class="form-group">
                <label>Versies</label>
                <input type="text" name="zaal_versies" class="form-control" placeholder="Versies">
            </div>
            <div class="form-group">
                <label>begintijd</label>
                <input type="text" name="zaal_begintijd" class="form-control" placeholder="xx:xx">
            </div>
            <div class="form-group">
                <label>eindtijd</label>
                <input type="text" name="zaal_eindtijd" class="form-control" placeholder="xx:xx">
            </div>
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </form>
    </div>
</div>



<?php include './view/footer.php' ?>

