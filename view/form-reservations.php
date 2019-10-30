<?php include 'header.php' ?>

<div class="form-group">
    <form method="GET">
        <input type="hidden" name="op" value="reservatie"/>
        <input type="hidden" name="zaalId" value="<?php echo $_REQUEST['zaalId'] ?>"/>
        <input type="hidden" name="create" value="true"/>

        <div class="form-group">
            <label for="dienst">Dienst: </label>
            <select id="dienst" class="form-control" name="dienst" required>
               <?php echo $services ?>
            </select>
        </div>


        <div class="form-group">
            <label for="fname">Voornaam: </label>
            <input type="text" id="fname" class="form-control" name="firstname" placeholder="uw voornaam" required>
        </div>

        <div class="form-group">
            <label for="lname">Achternaam: </label>
            <input type="text" id="lname" class="form-control" name="lastname" placeholder="uw achternaam" required>
        </div>

        <div class="form-group">
            <label for="geslacht">Geslacht: </label>
            <select id="geslacht" class="form-control" name="geslacht" required>
                <option value="Mr.">Man</option>
                <option value="Mvr.">Vrouw</option>
                <option value="helicopter">Helicopter</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nummer">Telefoonnummer: </label>
            <input type="number" id="nummer" class="form-control" name="nummer" placeholder="06-1234567" required>
        </div>

        <div class="form-group">
            <label for="straat">Straat: </label>
            <input type="text" id="straat" class="form-control" name="straat" placeholder="straatnaam en huisnummer" required>
        </div>
        <div class="form-group">
            <label for="postcode">postcode: </label>
            <input type="text" id="postcode" class="form-control" name="postcode" placeholder="1111AA" required>
        </div>
        <div class="form-group">
            <label for="stad">Stad: </label>
            <input type="text" id="stad" class="form-control" name="stad" placeholder="uw stad" required>
        </div>
        <div class="form-group">
            <label for="provincie">Provincie: </label>
            <select id="provincie" class="form-control" name="provincie" required>
                <option value="Drenthe">Drenthe</option>
                <option value="Flevoland">Flevoland</option>
                <option value="Friesland">Friesland</option>
                <option value="Gelderland">Gelderland</option>
                <option value="Groningen">groningen</option>
                <option value="Limburg">Limburg</option>
                <option value="Noord-Brabant">Noord-Brabant</option>
                <option value="Noord-Holland">Noord-Holland</option>
                <option value="Overijssel">Overijssel</option>
                <option value="Utrecht">Utrecht</option>
                <option value="Zeeland">Zeeland</option>
                <option value="Zuid-Holland">Zuid-Holland</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date">Datum: </label>
            <input type="date" id="date" class="form-control" name="date" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="aantalkind">Aantal kinderen: </label>
            <input type="number" id="aantalkind" class="form-control" name="aantal" min="0" placeholder=" Kinderen t/m 11 jaar" required>
        </div>
        <div class="form-group">
            <label for="aantaltien">Aantal tieners: </label>
            <input type="number" id="aantaltien" class="form-control" name="aantaltieners" min="0" placeholder=" 12 t/m 11 jaar" required>
        </div>
        <div class="form-group">
            <label for="aantalvol">Aantal volwassenen: </label>
            <input type="number" id="aantalvol" class="form-control" name="aantalvolwasse" min="0" placeholder=" vanaf 18 jaar" required>
        </div>

        <input type="submit" class="btn btn-primary" value="Bestel">
    </form>
</div>


<?php include 'footer.php' ?>

