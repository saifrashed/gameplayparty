<?php include './view/header.php' ?>

<div class="row start-xs">
    <div class="col-xs-12 col-md-12">

        <form method="POST">
            <input type="hidden" name="op" value="register"/>

            <div class="form-group">
                <label>Voornaam</label>
                <input type="text" name="voornaam" class="form-control" placeholder="Voornaam">
            </div>
            <div class="form-group">
                <label>Achternaam</label>
                <input type="text" name="achternaam" class="form-control" placeholder="Achternaam">
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="email" name="email" class="form-control" placeholder="Uw email">
            </div>
            <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" name="password" class="form-control" placeholder="Wachtwoord">
            </div>

            <div class="form-group">
                <label>Rol</label>
                <select name="rol" class="rollen">
                    <?php
                    echo $html; ?>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Registreer gebruiker</button>
        </form>

    </div>
</div>

<?php include './view/footer.php' ?>
