<?php include './view/header.php' ?>

<div class="order-message row center-xs">
    <div class="col-xs-12">
        <h2> Bedankt voor uw bestelling! We nemen zo snel mogelijk contact met u op.</h2>
    </div>
    <br>
    <div class="col-xs-12">
        <form>
            <input type="hidden" name="op" value="order-verification" />

            <input type="hidden" name="dienstId" value="<?php echo $_REQUEST['dienst'] ?>"/>
            <input type="hidden" name="voornaam" value="<?php echo $_REQUEST['firstname'] ?>"/>
            <input type="hidden" name="achternaam" value="<?php echo $_REQUEST['lastname'] ?>"/>
            <input type="hidden" name="geslacht" value="<?php echo $_REQUEST['geslacht'] ?>"/>
            <input type="hidden" name="tel" value="<?php echo $_REQUEST['nummer'] ?>"/>
            <input type="hidden" name="straat" value="<?php echo $_REQUEST['straat'] ?>"/>
            <input type="hidden" name="postcode" value="<?php echo $_REQUEST['postcode'] ?>"/>
            <input type="hidden" name="stad" value="<?php echo $_REQUEST['stad'] ?>"/>
            <input type="hidden" name="provincie" value="<?php echo $_REQUEST['provincie'] ?>"/>
            <input type="hidden" name="datum" value="<?php echo $_REQUEST['date'] ?>"/>
            <input type="hidden" name="aantal_kinderen" value="<?php echo $_REQUEST['aantal'] ?>"/>
            <input type="hidden" name="aantal_tieners" value="<?php echo $_REQUEST['aantaltieners'] ?>"/>
            <input type="hidden" name="aantal_volwassenen" value="<?php echo $_REQUEST['aantalvolwasse'] ?>"/>


            <button type="submit" class="btn-link dark">Bekijk uw boekings bevestiging</button>
        </form>
    </div>
</div>


<?php include './view/footer.php' ?>


