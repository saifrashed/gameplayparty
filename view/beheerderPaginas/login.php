<?php include './view/header.php' ?>

<div class="row start-xs">
    <div class="col-xs-12 col-md-4">
        <form method="POST">
            <input type="hidden" name="op" value="login"/>

            <div class="form-group">
                <label>Email adres</label>
                <input type="email" name="email" class="form-control" placeholder="Uw email">
            </div>
            <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" name="password" class="form-control" placeholder="Wachtwoord">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>

<?php include './view/footer.php' ?>

