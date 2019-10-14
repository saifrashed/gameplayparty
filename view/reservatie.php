<?php include 'header.php' ?>
<<<<<<< HEAD

<div class="form-group">
    <form method="GET">
        <input type="hidden" name="op" value="reservatie"/>
        <input type="hidden" name="zaalId" value="<?php echo $bioscoop['zaal_id']?>"/>
        <input type="hidden" name="create" value="true"/>
        <label for="fname">Voornaam: </label>
        <input type="text" id="fname" class="form-control" name="firstname" placeholder="uw voornaam" required>
<br>
        <label for="lname">Achternaam: </label>
        <input type="text" id="lname" class="form-control" name="lastname" placeholder="uw achternaam" required>
<br>
        <label for="geslacht">Geslacht: </label>
        <select id="geslacht" class="form-control" name="geslacht" required>
            <option value="man">Man</option>
            <option value="vrouw">Vrouw</option>
            <option value="helicopter">Helicopter</option>
        </select>
<br>
        <label for="nummer">Telefoonnummer: </label>
        <input type="number" id="nummer" class="form-control" name="nummer" placeholder="06-1234567" required>
        <br>
        <label for="date">Datum: </label>
        <input type="date" id="date" class="form-control" name="date" placeholder="" required>
        <br>
        <label for="aantal">Aantal personen: </label>
        <input type="number" id="aantal" class="form-control" name="aantal" min="0" placeholder="aantal" required>
        <br>
        <input type="submit" class="btn btn-primary" value="Bestel">
    </form>
</div>
=======
>>>>>>> 3c1e00ea62902b710dc971b064c8a65f1c00bffe

<button> bestel</button>

<?php include 'footer.php' ?>;

