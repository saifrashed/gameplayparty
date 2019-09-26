<div class="row start-xs">
    <div class="col-xs-12 col-md-12" style="min-height: 150vh;">
        <div class="form">
            <form method='POST' class="register-form">

                <input type="hidden" name="op" value="register"/>

                <input type="text" name="voornaam" placeholder="Voornaam" maxlength="50"/>
                <input type="text" name='achternaam' placeholder="Achternaam" maxlength="50"/>
                <input type="password" name='password' placeholder="Wachtwoord" maxlength="50"/>
                <input type="email" name='email' placeholder="Email address" maxlength="50"/>

                <select name="rol" class="rollen">
                   <?php
                   echo $html; ?>
                </select>

                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</div>
